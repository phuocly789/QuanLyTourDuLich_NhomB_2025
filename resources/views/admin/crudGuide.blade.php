@extends('admin.app2')

@section('content2')
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">QUẢN LÝ HƯỚNG DẪN VIÊN</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success text-center" style="font-size: 30px;">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Add Guide Form -->
            <div class="mb-4">
                <form action="{{ route('guide.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="guide_name" name="guide_name"
                                placeholder="Tên hướng dẫn viên">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="guide_pno" name="guide_pno"
                                placeholder="Số điện thoại">
                        </div>
                        <div class="col-md-3">
                            <input type="file" class="form-control" id="guide_image" name="guide_image">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="guide_mail" name="guide_mail"
                                placeholder="Email">
                        </div>
                    </div>
                    <div class="row g-3 mt-2">
                        <div class="col-md-9">
                            <textarea class="form-control" id="guide_intro" name="guide_intro" placeholder="Giới thiệu"></textarea>
                        </div>
                        <div class="col-md-3 text-end">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Guides List Table -->
            <div class="mb-5" id="guides-list">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="section-title">Danh Sách Hướng Dẫn Viên</h3>
                </div>
                @if ($data_guide->isEmpty())
                    <div class="alert alert-info">Không có dữ liệu hướng dẫn viên.</div>
                @else
                    <div class="table-modern table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên hướng dẫn viên</th>
                                    <th>Số điện thoại</th>
                                    <th>Hình ảnh</th>
                                    <th>Email</th>
                                    <th>Giới thiệu</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_guide as $row)
                                    <tr>
                                        <td class="text-center">{{ $row->guide_Id }}</td>
                                        <td class="text-center">{{ $row->guide_Name }}</td>
                                        <td class="text-center">{{ $row->guide_Pno }}</td>
                                        <td class="text-center"><img class="img-fluid"
                                                src="{{ asset('img/' . $row->guide_Img) }}" alt=""></td>
                                        <td class="text-center">{{ $row->guide_Mail }}</td>
                                        <td class="text-center">{{ $row->guide_Intro }}</td>
                                        <td class="text-center">
                                            <div class="btn-group" style="line-height: 10px;" role="group"
                                                aria-label="Basic example">

                                                <button class="btn delete-btn"
                                                    data-delete-url="{{ route('guide.destroy', $row->guide_Id) }}"
                                                    data-item-name="{{ $row->guide_Name }}" style="margin-right: 10px;">
                                                    <i class="fa fa-trash-alt text-danger"></i>
                                                </button>
                                                <a href="{{ route('guide.edit', $row->guide_Id) }}" class="btn"><i
                                                        class="fa fa-edit text-primary"></i></a>
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
@endsection
