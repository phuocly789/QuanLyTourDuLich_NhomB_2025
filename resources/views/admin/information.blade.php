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
                @if (session('error'))
                    <div class="alert alert-danger text-center" style="font-size: 30px;">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success text-center" style="font-size: 30px;">
                        {{ session('success') }}
                    </div>
                @endif
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
                                        <td class="text-center">
                                            <select class="usertype-select form-select" data-id="{{ $row->id }}"
                                                data-updated-at="{{ $row->updated_at->toDateTimeString() }}">
                                                <option value="admin" {{ $row->usertype == 'admin' ? 'selected' : '' }}>
                                                    Admin</option>
                                                <option value="user" {{ $row->usertype == 'user' ? 'selected' : '' }}>User
                                                </option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group" style="line-height: 10px;" role="group"
                                                aria-label="Basic example">
                                                <button class="btn delete-btn"
                                                    data-delete-url="{{ route('tours.xoaUser', $row->id) }}"
                                                    data-item-name="{{ $row->name }}" style="margin-right: 10px;">
                                                    <i class="fa fa-trash-alt text-danger"></i>
                                                </button>
                                                <button type="button" data-id="{{ $row->id }}"
                                                    class="btn edit-button"><i class="fa fa-edit text-primary"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if ($decentralization->total() > 8)
                        <div class="row justify-content-center mt-4">
                            <div class="col-auto">
                                <ul class="pagination">
                                    @if ($decentralization->onFirstPage())
                                        <li class="page-item disabled">
                                            <span class="page-link">«</span>
                                        </li>
                                    @else
                                        <li class="page-item">
                                            <a class="page-link"
                                                href="{{ $decentralization->previousPageUrl() }}#users-list">«</a>
                                        </li>
                                    @endif
                                    @foreach ($decentralization->getUrlRange(1, $decentralization->lastPage()) as $page => $url)
                                        <li
                                            class="page-item {{ $page == $decentralization->currentPage() ? 'active' : '' }}">
                                            <a class="page-link"
                                                href="{{ $url }}#users-list">{{ $page }}</a>
                                        </li>
                                    @endforeach
                                    @if ($decentralization->hasMorePages())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $decentralization->nextPageUrl() }}"
                                                id="#users-list">»</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled">
                                            <span class="page-link">»</span>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle edit button clicks
            var editButtons = document.querySelectorAll('.edit-button');
            editButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var userId = this.dataset.id;
                    var selectElement = this.closest('tr').querySelector('.usertype-select');
                    var newUsertype = selectElement.value;
                    var updatedAt = selectElement.dataset.updatedAt;

                    // Create XMLHttpRequest object
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', '/update-usertype');
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');

                    // Handle response
                    xhr.onload = function() {
                        var response = JSON.parse(xhr.responseText);
                        var messageDiv = document.createElement('div');
                        messageDiv.style.fontSize = '30px';
                        messageDiv.className = xhr.status >= 200 && xhr.status < 300 ?
                            'alert alert-success text-center' :
                            'alert alert-danger text-center';
                        messageDiv.textContent = response.message || (xhr.status >= 200 && xhr
                            .status < 300 ?
                            'Cập nhật phân quyền thành công' :
                            'Lỗi khi cập nhật phân quyền: ' + xhr.status);
                        document.querySelector('#users-list').prepend(messageDiv);

                        // Remove message after 3 seconds
                        setTimeout(() => {
                            messageDiv.remove();
                        }, 3000);

                        // Update the updated_at value if successful
                        if (xhr.status >= 200 && xhr.status < 300 && response.updated_at) {
                            selectElement.dataset.updatedAt = response.updated_at;
                        }
                    };

                    // Handle connection error
                    xhr.onerror = function() {
                        var errorDiv = document.createElement('div');
                        errorDiv.className = 'alert alert-danger text-center';
                        errorDiv.style.fontSize = '30px';
                        errorDiv.textContent = 'Lỗi kết nối';
                        document.querySelector('#users-list').prepend(errorDiv);

                        // Remove message after 3 seconds
                        setTimeout(() => {
                            errorDiv.remove();
                        }, 3000);
                    };

                    // Send AJAX request
                    var formData = 'user_id=' + encodeURIComponent(userId) +
                        '&usertype=' + encodeURIComponent(newUsertype) +
                        '&updated_at=' + encodeURIComponent(updatedAt);
                    xhr.send(formData);
                });
            });

            // Handle delete button clicks
            var deleteButtons = document.querySelectorAll('.delete-btn');
            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var deleteUrl = this.dataset.deleteUrl;
                    var itemName = this.dataset.itemName;

                    if (confirm('Bạn có chắc chắn muốn xóa user ' + itemName + '?')) {
                        var xhr = new XMLHttpRequest();
                        xhr.open('DELETE', deleteUrl);
                        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                        xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');

                        xhr.onload = function() {
                            var response = xhr.status >= 200 && xhr.status < 300 ? JSON.parse(
                                xhr.responseText) : {};
                            var messageDiv = document.createElement('div');
                            messageDiv.className = xhr.status >= 200 && xhr.status < 300 ?
                                'alert alert-success text-center' :
                                'alert alert-danger text-center';
                            messageDiv.style.fontSize = '30px';
                            messageDiv.textContent = response.message || (xhr.status >= 200 &&
                                xhr.status < 300 ?
                                'Xóa user thành công' :
                                'Lỗi khi xóa user: ' + xhr.status);
                            document.querySelector('#users-list').prepend(messageDiv);

                            // Remove message and row after 3 seconds if successful
                            if (xhr.status >= 200 && xhr.status < 300) {
                                setTimeout(() => {
                                    messageDiv.remove();
                                    button.closest('tr').remove();
                                }, 3000);
                            } else {
                                setTimeout(() => {
                                    messageDiv.remove();
                                }, 3000);
                            }
                        };

                        xhr.onerror = function() {
                            var errorDiv = document.createElement('div');
                            errorDiv.className = 'alert alert-danger text-center';
                            errorDiv.style.fontSize = '30px';
                            errorDiv.textContent = 'Lỗi kết nối khi xóa user';
                            document.querySelector('#users-list').prepend(errorDiv);

                            // Remove message after 3 seconds
                            setTimeout(() => {
                                errorDiv.remove();
                            }, 3000);
                        };

                        xhr.send();
                    }
                });
            });
        });
    </script>
@endsection
