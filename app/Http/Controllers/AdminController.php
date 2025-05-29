<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Guide;
use App\Models\User;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::id()) {
            $userType = Auth()->user()->usertype;

            if ($userType == 'user') {
                $tours = Tour::orderBy('tour_id')->get();
                $guide = Guide::orderBy('guide_Id')->get();
                $location = Location::orderBy('location_id')->get();
                return view('user.home', ['data' => $tours, 'data_guide' => $guide, 'data_location' => $location]);
            } else if ($userType == 'admin') {
                $tours = Tour::orderBy('tour_id')->get();
                $guide = Guide::orderBy('guide_Id')->get();
                $location = Location::orderBy('location_id')->get();
                return view('admin.home', ['data' => $tours, 'data_guide' => $guide, 'data_location' => $location]);
            }
        }
    }

    public function xoaUser($id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'User không tồn tại hoặc đã được xóa'], 404);
        }
        $user->delete();

        return response()->json(['message' => 'User đã được xóa thành công'], 200);
    }

    public function updateUsertype(Request $request)
    {
        try {
            // Validate dữ liệu đầu vào
            $validated = $request->validate([
                'user_id' => 'required|integer|exists:users,id',
                'usertype' => 'required|string|in:admin,user',
                'updated_at' => 'required|date',
            ]);

            // Tìm user theo ID
            $user = User::find($request->user_id);

            if (!$user) {
                return response()->json(['message' => 'Không thể tìm thấy người dùng'], 404);
            }

            // Kiểm tra dữ liệu có bị thay đổi bởi tab khác không
            if ($user->updated_at->toDateTimeString() !== $request->updated_at) {
                return response()->json(['message' => 'Dữ liệu đã bị thay đổi bởi một phiên khác. Vui lòng tải lại trang trước khi cập nhật!'], 409);
            }

            if (Auth::id() == $user->id) {
                return response()->json(['message' => 'Bạn không thể tự thay đổi quyền của chính mình!'], 403);
            }

            // Cập nhật usertype
            $user->usertype = $request->usertype;
            $user->save();

            return response()->json([
                'message' => 'Phân quyền người dùng đã được cập nhật thành công',
                'updated_at' => $user->updated_at->toDateTimeString()
            ], 200);
        } catch (ValidationException $e) {
            return response()->json(['message' => $e->errors()['updated_at'][0] ?? 'Dữ liệu không hợp lệ'], 422);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Lỗi server: ' . $e->getMessage()], 500);
        }
    }
}
