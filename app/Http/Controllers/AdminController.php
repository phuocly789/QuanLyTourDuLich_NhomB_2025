<?php

namespace App\Http\Controllers;
use App\Models\Tour;
use App\Models\Guide;
use App\Models\User;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::id()) {
            
            $userType = Auth()->user()->usertype;

            if  ($userType == 'user') {
                $tours = Tour::orderBy('tour_id')->get();
                $guide = Guide::orderBy('guide_Id')->get();
                $location = Location::orderBy('location_id')->get();
                return view('user.home', ['data' => $tours, 'data_guide' => $guide, 'data_location' => $location]);
            }
            else if($userType == 'admin') {
                $tours = Tour::orderBy('tour_id')->get();
                $guide = Guide::orderBy('guide_Id')->get();
                $location = Location::orderBy('location_id')->get();
                return view('admin.home', ['data' => $tours, 'data_guide' => $guide, 'data_location' => $location]);
            }
        }
    }
    public function xoaUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'Tour đã được xóa thành công!');
    }
    public function updateUsertype(Request $request)
    {
        $userId = $request->input('user_id');
        $newUsertype = $request->input('usertype');

        // Cập nhật phân quyền của người dùng trong cơ sở dữ liệu
        $user = User::find($userId);
        if ($user) {
            $user->usertype = $newUsertype;
            $user->save();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false, 'message' => 'Không thể tìm thấy người dùng']);
    }
}
