# 🌍 HHTP - Website Quản Lý Tour Du Lịch

**HHTP** là một hệ thống web quản lý tour du lịch được phát triển bằng **Laravel (PHP Framework)**. Dự án giúp người dùng dễ dàng tìm kiếm và đặt tour du lịch, đồng thời hỗ trợ quản trị viên trong việc kiểm soát các tour, người dùng và doanh thu.

## 🚀 Mục Tiêu Dự Án

- Cung cấp nền tảng đặt tour du lịch trực tuyến thân thiện, dễ sử dụng.
- Hỗ trợ quản lý tour, khách hàng và đơn đặt hàng cho doanh nghiệp.
- Tối ưu hóa trải nghiệm người dùng và hiệu suất hệ thống.

## 🧩 Tính Năng Chính

### 👥 Dành cho Khách Hàng:
- Đăng ký, đăng nhập, cập nhật thông tin cá nhân.
- Duyệt và tìm kiếm tour theo tên, địa điểm, thời gian, mức giá.
- Xem chi tiết tour (mô tả, hình ảnh, lịch trình, giá, đánh giá).
- Đặt tour và theo dõi lịch sử đặt tour.
- Gửi phản hồi hoặc liên hệ với quản trị viên.

### 🔐 Dành cho Quản Trị Viên:
- Đăng nhập vào hệ thống quản trị.
- Quản lý tour du lịch (thêm/sửa/xóa).
- Quản lý người dùng và đơn đặt tour.
- Thống kê số lượng đơn, doanh thu theo ngày/tháng.
- Quản lý phản hồi từ khách hàng.

## 🛠️ Công Nghệ Sử Dụng

- **Ngôn ngữ lập trình:** PHP 8.x
- **Framework:** Laravel 10.x
- **Database:** MySQL
- **Frontend:** Blade Template, HTML/CSS, Bootstrap/Tailwind CSS
- **Authentication:** Laravel Breeze / Jetstream (tuỳ chọn)
- **Thư viện khác:** SweetAlert, DataTables, Chart.js (thống kê)

## 📦 Cài Đặt Dự Án

```bash
# Bước 1: Clone dự án
git clone https://github.com/phuocly789/QuanLyTourDuLich_NhomB_2025.git
cd QuanLyTourDuLich_NhomB_2025

# Bước 2: Cài đặt các gói PHP
composer install

# Bước 3: Tạo file .env
cp .env.example .env

# Bước 4: Cấu hình database trong file .env

# Bước 5: Generate key và migrate
php artisan key:generate
php artisan migrate --seed

# Bước 6: Chạy server
php artisan serve
