@extends('admin.app2')
@section('content2')
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">QUẢN LÝ ĐÁNH GIÁ</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Bảng danh sách tour -->
            <div class="table-modern table-responsive ">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th>Tên tour</th>
                            <th>Mô tả ngắn</th>
                            <th>Số đánh giá</th>
                            <th>Chi tiết</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($tours as $tour)
                            <tr>
                                <td>{{ $tour->tour_name }}</td>
                                <td>{{ Str::limit($tour->tour_description, 100) }}</td>
                                <td>{{ $tour->clients_count }}</td>
                                <td>
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#reviews-{{ $tour->tour_id }}" aria-expanded="false">
                                        Xem đánh giá
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" class="p-0 trai" >
                                    <div class="collapse" id="reviews-{{ $tour->tour_id }}">
                                        <div class="card card-body">
                                            @if ($tour->clients->isEmpty())
                                                <p class="text-center">Chưa có đánh giá nào cho tour này.</p>
                                            @else
                                                @foreach ($tour->clients as $client)
                                                    <div class="row g-1 mb-3">
                                                        <div class="col-lg-1" style="min-height: 50px;">
                                                            <img class="img-fluid mt-3"
                                                                src="{{ $client->client_image ? asset('img/' . $client->client_image) : asset('img/default-user.png') }}"
                                                                alt="" style="width: 50px; height: 50px;">
                                                        </div>
                                                        <div class="col-lg-11">
                                                            <h4 class="mb-0"><span
                                                                    class="text-primary">{{ $client->client_name }}</span>
                                                            </h4>
                                                            <h6 class="mb-0"><span
                                                                    class="text-primary">{{ $client->client_address }}</span>
                                                            </h6>
                                                            <p class="mb-0" style="font-size: 20px;">
                                                                {{ $client->client_comment }}</p>
                                                            <p class="mb-0" style="font-size: 16px; color: #666;">
                                                                {{ $client->created_at->setTimezone('Asia/Ho_Chi_Minh')->format('d/m/Y H:i') }}
                                                            </p>

                                                            <!-- Hiển thị câu trả lời -->
                                                            @if ($client->replies->isNotEmpty())
                                                                <div class="replies mt-3" style="margin-left: 20px;">
                                                                    @foreach ($client->replies as $reply)
                                                                        <div class="reply">
                                                                            <h6 class="mb-0"><span
                                                                                    class="text-success">Admin
                                                                                    ({{ $reply->admin->name }})
                                                                                </span></h6>
                                                                            <p class="mb-0" style="font-size: 16px;">
                                                                                {{ $reply->reply_content }}</p>
                                                                            <p class="mb-0"
                                                                                style="font-size: 14px; color: #666;">
                                                                                {{ $reply->created_at->setTimezone('Asia/Ho_Chi_Minh')->format('d/m/Y H:i') }}
                                                                            </p>
                                                                        </div>
                                                                        <hr>
                                                                    @endforeach
                                                                </div>
                                                            @endif

                                                            <!-- Form trả lời -->
                                                            <form action="{{ route('replies.store') }}" method="POST"
                                                                class="mt-3 reply-form">
                                                                @csrf
                                                                <input type="hidden" name="client_id"
                                                                    value="{{ $client->client_id }}">
                                                                <div class="row g-3">
                                                                    <div class="col-md-12">
                                                                        <label for="reply_content_{{ $client->id }}"
                                                                            class="form-label">Trả lời</label>
                                                                        <textarea name="reply_content" id="reply_content_{{ $client->id }}" class="form-control" rows="3" required></textarea>
                                                                        @error('reply_content')
                                                                            <span
                                                                                class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <button type="submit"
                                                                            class="btn btn-success rounded-pill py-2 px-4">Gửi
                                                                            trả lời</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Chưa có tour nào.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
            <div class="d-flex justify-content-center mt-4">
                {{ $tours->links() }}
            </div>
        </div>
    </div>

    <!-- JavaScript để cuộn khi gửi trả lời -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        @if (session('scroll_to_comments'))
            document.addEventListener('DOMContentLoaded', function() {
                const commentSection = document.querySelector('.table-responsive');
                if (commentSection) {
                    commentSection.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        @endif

        // AJAX để gửi trả lời
        $(document).ready(function() {
            $('.reply-form').on('submit', function(e) {
                e.preventDefault();
                const form = $(this);
                const client_id = form.find('input[name="client_id"]').val();
                const reply_content = form.find('textarea[name="reply_content"]').val();
                const repliesContainer = form.closest('.col-lg-11').find('.replies');

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ route('replies.store') }}",
                    method: 'POST',
                    data: {
                        client_id: client_id,
                        reply_content: reply_content
                    },
                    dataType: 'json',
                    success: function(response) {
                        const replyHtml = `
                            <div class="reply">
                                <h6 class="mb-0"><span class="text-success">Admin (${response.admin_name})</span></h6>
                                <p class="mb-0" style="font-size: 16px;">${response.reply_content}</p>
                                <p class="mb-0" style="font-size: 14px; color: #666;">
                                    ${response.created_at}
                                </p>
                            </div>
                            <hr>
                        `;
                        if (!repliesContainer.length) {
                            form.before(
                                '<div class="replies mt-3" style="margin-left: 20px;"></div>'
                            );
                            form.prev('.replies').append(replyHtml);
                        } else {
                            repliesContainer.append(replyHtml);
                        }
                        form.find('textarea').val('');
                        alert('Câu trả lời đã được gửi thành công!');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error sending reply:', error);
                        alert('Có lỗi xảy ra. Vui lòng thử lại.');
                    }
                });
            });
        });
    </script>
@endsection
