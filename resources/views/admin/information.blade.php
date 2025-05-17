@extends('admin.app2')

@section('content2')
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">QUẢN LÝ USER</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container">
            <!-- Users List Table -->
            <div class="mb-5" id="users-list">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="section-title">Danh Sách User</h3>
                </div>
                @if ($decentralization->isEmpty())
                    <div class="alert alert-info">Không có dữ liệu user.</div>
                @else
                    <div class="table-modern table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Quyền</th>
                                    <th>Xử lý</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($decentralization as $row)
                                    <tr>
                                        <td class="text-center">{{ $row->id }}</td>
                                        <td class="text-center">{{ $row->name }}</td>
                                        <td class="text-center">{{ $row->email }}</td>
                                        <td class="text-center"><input type="text" value="{{ $row->usertype }}"
                                                class="usertype-input" data-id="{{ $row->id }}"></td>
                                        <td class="text-center">
                                            <div class="btn-group" style="line-height: 10px;" role="group"
                                                aria-label="Basic example">
                                    
                                                <button class="btn delete-btn"
                                                    data-delete-url="{{ route('tours.xoaUser', $row->id) }}"
                                                    data-item-name="{{ $row->name }}" style="margin-right: 10px;">
                                                    <i class="fa fa-trash-alt text-danger"></i>
                                                </button>
                                                <form action="{{ route('tours.suaUser', $row->id) }}" method="POST">
                                                    @csrf
                                                    @method('UPDATE')
                                                    <button type="button" data-id="{{ $row->id }}"
                                                        class="btn edit-button"><i
                                                            class="fa fa-edit text-primary"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var editButtons = document.querySelectorAll('.edit-button');
            editButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var userId = this.dataset.id;
                    var newUsertype = this.closest('tr').querySelector('.usertype-input').value;
                    // Tạo đối tượng XMLHttpRequest
                    var xhr = new XMLHttpRequest();
                    // Thiết lập yêu cầu AJAX
                    xhr.open('POST', '/update-usertype');
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr.setRequestHeader('X-CSRF-TOKEN',
                        '{{ csrf_token() }}'); // Bao gồm CSRF token trong header

                    // Xử lý phản hồi từ máy chủ
                    xhr.onload = function() {
                        if (xhr.status >= 200 && xhr.status < 300) {
                            console.log('Cập nhật phân quyền thành công');
                            // Thực hiện các hành động sau khi cập nhật thành công
                            alert('Phân quyền thành công');
                        } else {
                            console.error('Lỗi khi cập nhật phân quyền: ' + xhr.status);
                            // Xử lý lỗi nếu có
                        }
                    };
                    // Xử lý lỗi kết nối
                    xhr.onerror = function() {
                        console.error('Lỗi kết nối');
                    };
                    // Gửi yêu cầu AJAX với dữ liệu đã chuẩn bị
                    var formData = 'user_id=' + encodeURIComponent(userId) + '&usertype=' +
                        encodeURIComponent(newUsertype);
                    xhr.send(formData);
                });
            });
        });
    </script>
@endsection
