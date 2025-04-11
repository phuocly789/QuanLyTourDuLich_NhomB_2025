@extends('admin.app2')
@section('content2')

<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">QUẢN LÝ USER</h1>
                <p class="fs-4 text-white mb-4 animated slideInDown">Phân quyền cho các user của bạn</p>
                <div class="position-relative w-75 mx-auto animated slideInDown">
                    <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Thailand">
                    <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="text-center text-primary px-3">Quản lý users</h1>
        </div>
        <div class="row g-5">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">ID</th>
                            <th class="text-center" scope="col">Name</th>
                            <th class="text-center" scope="col">Email</th>
                            <th class="text-center" scope="col">Quyền</th>
                            <th class="text-center" scope="col">Xử lý</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($decentralization as $row)
                        <tr>
                            <td class="text-center">{{ $row->id}}</td>
                            <td class="text-center">{{ $row->name}}</td>
                            <td class="text-center">{{ $row->email}}</td>
                            <td class="text-center"><input type="text" value="{{ $row->usertype}}" class="usertype-input" data-id="{{ $row->id }}"></td>
                            <td class="text-center">
                                <div class="btn-group" style="line-height: 10px;" role="group" aria-label="Basic example">
                                    <form action="{{ route('tours.xoaUser', $row->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn" style="margin-right: 10px;"><i class="fa fa-trash-alt text-danger"></i></button>
                                    </form>

                                    <form action="{{ route('tours.suaUser', $row->id) }}" method="POST">
                                        @csrf
                                        @method('UPDATE')
                                        <button type="button" data-id="{{ $row->id }}" class="btn edit-button"><i class="fa fa-edit text-primary"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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
                xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}'); // Bao gồm CSRF token trong header

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
                var formData = 'user_id=' + encodeURIComponent(userId) + '&usertype=' + encodeURIComponent(newUsertype);
                xhr.send(formData);
            });
        });
    });
</script>


@endsection