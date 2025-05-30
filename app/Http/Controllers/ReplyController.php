<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reply;
use App\Models\Client;
use App\Models\Tour;

class ReplyController extends Controller
{
    public function store(Request $request)
    {
        // Kiểm tra đăng nhập và quyền admin
        if (!Auth::check() || Auth::user()->usertype === 'user') {
            if ($request->expectsJson()) {
                return response()->json(['error' => 'Chỉ admin mới có thể trả lời bình luận.'], 403);
            }
            return redirect()->back()->with('error', 'Chỉ admin mới có thể trả lời bình luận.');
        }

        // Validate dữ liệu
        $validatedData = $request->validate([
            'client_id' => 'required|integer|exists:clients,client_id',
            'reply_content' => 'required|string',
        ]);

        // Tạo và lưu câu trả lời
        $reply = new Reply;
        $reply->client_id = $validatedData['client_id'];
        $reply->admin_id = Auth::id();
        $reply->reply_content = $validatedData['reply_content'];
        $reply->save();

        // Trả về JSON cho AJAX hoặc redirect
        if ($request->expectsJson()) {
            return response()->json([
                'admin_name' => Auth::user()->name,
                'reply_content' => $reply->reply_content,
                'created_at' => $reply->created_at->setTimezone('Asia/Ho_Chi_Minh')->format('d/m/Y H:i'),
            ]);
        }

        return redirect()->back()->with([
            'success' => 'Câu trả lời đã được gửi thành công!',
            'scroll_to_comments' => true
        ]);
    }
    public function index(Request $request)
    {
        $query = Tour::withCount('clients')
            ->with(['clients.replies.admin'])
            ->orderBy('clients_count', 'desc');

        $perPage = 8;
        $totalTours = $query->count();
        $maxPages = ceil($totalTours / $perPage);
        $page = $request->input('page', 1);

        // Kiểm tra tính hợp lệ của page
        if (!is_numeric($page) || $page < 1 || ($totalTours > 0 && $page > $maxPages)) {
            return redirect()->route('admin.reviews')->with('error', 'Trang không hợp lệ! Đã chuyển về trang mặc định.');
        }

        $tours = $query->paginate($perPage);

        return view('admin.review', compact('tours'));
    }
}
