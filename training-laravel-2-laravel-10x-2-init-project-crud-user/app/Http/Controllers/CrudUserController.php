<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Location;

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
            return redirect()->intended('list')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }
    public function create()
    {
        $locations = Location::all(); // Truy vấn tất cả locations
        $guides = Guide::all(); // Truy vấn tất cả guides
        return view('crud_user.addtour', compact('locations', 'guides')); // Truyền dữ liệu sang view
    }

    public function store(Request $request)
    {
        // Validate dữ liệu form
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

        // Xử lý upload hình ảnh (nếu có)
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('tours', 'public');
            $validatedData['image'] = $imagePath;
        }

        // Tạo mới tour
        Tour::create($validatedData);

        // Chuyển hướng hoặc trả về response
        return redirect()->route('tours.index')->with('success', 'Tour đã được thêm thành công!');
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
            'phone' => $data['phone'],
            'address' => $data['address'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'avatar' => $avatarPath,
            'website' => $request->website,
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
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:users,id,'.$input['id'],
            'password' => 'required|min:6',
        ]);

       $user = User::find($input['id']);
       $user->name = $input['name'];
       $user->email = $input['email'];
       $user->password = $input['password'];
       $user->phone = $input['phone'];
       $user->address = $input['address'];
       $user->avatar = $input['avatar'];
       $user->website = $input['website'];
       $user->save();

        return redirect("list")->withSuccess('You have signed-in');
    }

    /**
     * List of users
     */
    public function listUser()
    {
        if(Auth::check()){
            $users = User::all();
            return view('crud_user.list', ['users' => $users]);
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
