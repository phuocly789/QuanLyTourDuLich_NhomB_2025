<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Location;
use Illuminate\Support\Facades\DB;
use App\Models\Tour; // Thêm dòng này để sử dụng Model Tour
use App\Models\Guide; // Có thể bạn cũng cần import Model Guide nếu chưa có

/**
 * CRUD User controller
 */
class CrudUserController extends Controller
{

    /**
     * Login page
     */
        public function login()
        {
            return view('crud_user.login');
        }
        public function home()
{
    return view('crud_user.home');
}
        /**
         * User submit form login
         */
        public function authUser(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Chuyển hướng đến route 'home'
            return redirect()->route('home')->withSuccess('Đăng nhập thành công!');
        }

        return redirect("login")->withSuccess('Thông tin đăng nhập không chính xác');
    }
        // public function index()
        // {
        //     $tours = Tour::orderBy('tour_id', 'desc')->with(['location', 'guide'])->get();
        //     return view('crud_user.listtour', compact('tours'));
        // }
    public function create()
    {
        $locations = Location::all(); // Lấy tất cả locations từ database
        $guides = Guide::all();     // Lấy tất cả guides từ database
        $tours = Tour::with(['location', 'guide'])->get();
        return view('crud_user.addtour', compact('locations', 'guides', 'tours'));
        // Đảm bảo 'locations' và 'guides' có trong hàm compact()
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'transport' => 'required|string|max:255',
            'start_date' => 'required|date',
            'start_location' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'location_id' => 'required|exists:locations,id',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'guide_id' => 'required|exists:guides,id',
            'description' => 'required|string',
            'itinerary' => 'required|string',
        ]);
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('tours', 'public');
        } else {
            $imagePath = null; // Hoặc giá trị mặc định khác
        }
    
        Tour::create([
            'tour_name' => $validatedData['name'],
            'tour_image' => $imagePath,
            'start_day' => $validatedData['start_date'],
            'time' => $validatedData['duration'],
            'star_from' => $validatedData['start_location'],
            'price' => $validatedData['price'],
            'vehicle' => $validatedData['transport'],
            'tour_description' => $validatedData['description'],
            'tour_schedule' => $validatedData['itinerary'],
            'tour_sale' => $validatedData['discount'],
            'location_id' => $validatedData['location_id'],
            'guide_id' => $validatedData['guide_id'],
        ]);
    
        return redirect()->route('admin.tours.list')->with('success', 'Tour đã được thêm thành công!');
    }

    /**
     * Registration page
     */
    public function createUser()
    {
        return view('crud_user.create');
    }

    /**
     * User submit form register
     */
    public function postUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        
        ]);

        $data = $request->all();

        $avatarPath = null;
    if ($request->hasFile('avatar')) {
        $avatarPath = $request->file('avatar')->store('avatars', 'public');
    }

        $check = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect("login");
    }

    /**
     * View user detail page
     */
    public function readUser(Request $request) {
        $user_id = $request->get('id');
        $user = User::find($user_id);

        return view('crud_user.read', ['messi' => $user]);
    }

    /**
     * Delete user by id
     */
    public function deleteUser(Request $request) {
        $user_id = $request->get('id');
        $user = User::destroy($user_id);

        return redirect("list")->withSuccess('You have signed-in');
    }

    /**
     * Form update user page
     */
    public function updateUser(Request $request)
    {
        $user_id = $request->get('id');
        $user = User::find($user_id);

        return view('crud_user.update', ['user' => $user]);
    }

    /**
     * Submit form update user
     */
    public function postUpdateUser(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,id,'.$input['id'],
            'password' => 'required|min:6',
        ]);

       $user = User::find($input['id']);
       $user->name = $input['name'];
       $user->email = $input['email'];
       $user->password = $input['password'];
       $user->save();

    return redirect("list")->withSuccess('You have signed-in');
    }

    /**
     * List of users
     */
    public function listTour()
{
    if(Auth::check()){
        $tours = Tour::orderBy('tour_id', 'desc')->with(['location', 'guide'])->get();
        return view('crud_user.listtour', ['tours' => $tours]);
    }

    return redirect("login")->withSuccess('You are not allowed to access');
}

    /**
     * Sign out
     */
    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
