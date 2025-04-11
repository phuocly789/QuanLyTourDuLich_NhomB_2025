<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý tour</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        img.tour-img {
            width: 80px;
            height: 60px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container-fluid bg-primary py-5 mb-5 text-center text-white">
        <h1 class="display-3">QUẢN LÝ TOUR</h1>
        <p class="fs-4">Thêm Tour - Xóa Tour - Sửa Thông Tin Tour</p>
    </div>

    <div class="container">
        <h2 class="text-center text-primary mb-4">Thêm tour</h2>
        <form id="tourForm">
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label">Tên tour</label>
                    <input type="text" class="form-control" name="tour_name" required>

                    <label class="form-label mt-3">Ngày bắt đầu</label>
                    <input type="date" class="form-control" name="start_day" required>

                    <label class="form-label mt-3">Thời gian</label>
                    <input type="text" class="form-control" name="time" required>

                    <label class="form-label mt-3">Giá tour</label>
                    <input type="number" class="form-control" name="price" required>

                    <label class="form-label mt-3">Hình ảnh tour</label>
                    <input type="file" class="form-control" name="tour_image" accept="image/*">

                    <label class="form-label mt-3">Giới thiệu tour</label>
                    <textarea class="form-control" name="description"></textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Phương tiện</label>
                    <select class="form-control" name="vehicle">
                        <option value="Máy bay">Máy bay</option>
                        <option value="Xe khách">Xe khách</option>
                    </select>

                    <label class="form-label mt-3">Nơi khởi hành</label>
                    <input type="text" class="form-control" name="start_from" required>

                    <label class="form-label mt-3">Giảm giá tour (%)</label>
                    <input type="number" class="form-control" name="sale">

                    <label class="form-label mt-3">Guide ID</label>
                    <input type="number" class="form-control" name="guide_id" required>

                    <label class="form-label mt-3">Lịch trình tour</label>
                    <textarea class="form-control" name="schedule"></textarea>

                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </div>
                </div>
            </div>
        </form>

        <hr class="my-5">

        <h2 class="text-center text-primary">Danh sách tour</h2>
        <table class="table table-bordered mt-4">
            <thead class="table-primary text-center">
                <tr>
                    <th>ID</th>
                    <th>Tên Tour</th>
                    <th>Hình ảnh</th>
                    <th>Ngày bắt đầu</th>
                    <th>Thời gian</th>
                    <th>Khởi hành</th>
                    <th>Giá</th>
                    <th>Phương tiện</th>
                    <th>Giới thiệu</th>
                    <th>Lịch trình</th>
                    <th>Guide ID</th>
                </tr>
            </thead>
            <tbody id="tourList" class="text-center">
                <!-- Tour sẽ thêm ở đây -->
            </tbody>
        </table>
    </div>

    <script>
        let tourId = 1;

        document.getElementById('tourForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const form = e.target;
            const reader = new FileReader();
            const file = form.tour_image.files[0];

            reader.onload = function() {
                const newRow = document.createElement('tr');

                newRow.innerHTML = `
                    <td>${tourId++}</td>
                    <td>${form.tour_name.value}</td>
                    <td><img class="tour-img" src="${reader.result}" alt="Tour Image"></td>
                    <td>${form.start_day.value}</td>
                    <td>${form.time.value}</td>
                    <td>${form.start_from.value}</td>
                    <td>${parseInt(form.price.value).toLocaleString('vi-VN')}₫</td>
                    <td>${form.vehicle.value}</td>
                    <td>${form.description.value.substring(0, 50)}...</td>
                    <td>${form.schedule.value.substring(0, 50)}...</td>
                    <td>${form.guide_id.value}</td>
                `;

                document.getElementById('tourList').appendChild(newRow);
                form.reset();
            };

            if (file) {
                reader.readAsDataURL(file);
            } else {
                const newRow = document.createElement('tr');

                newRow.innerHTML = `
                    <td>${tourId++}</td>
                    <td>${form.tour_name.value}</td>
                    <td><span class="text-muted">Không có ảnh</span></td>
                    <td>${form.start_day.value}</td>
                    <td>${form.time.value}</td>
                    <td>${form.start_from.value}</td>
                    <td>${parseInt(form.price.value).toLocaleString('vi-VN')}₫</td>
                    <td>${form.vehicle.value}</td>
                    <td>${form.description.value.substring(0, 50)}...</td>
                    <td>${form.schedule.value.substring(0, 50)}...</td>
                    <td>${form.guide_id.value}</td>
                `;

                document.getElementById('tourList').appendChild(newRow);
                form.reset();
            }
        });
    </script>
</body>
</html>
