<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BookingSeeder extends Seeder
{
    /**
     * Run the seeder.
     *
     * @return void
     */
    public function run()
    {
        // Tour data for reference (price and discount)
        $tours = [
            1 => ['price' => 1560000, 'sale' => 0.10], // Hà Nội - Cao Nguyên Đá
            2 => ['price' => 5990000, 'sale' => 0.15], // Đà Nẵng - Bà Nà Hills
            3 => ['price' => 7390000, 'sale' => 0.15], // Phú Quốc - Vinwonder
            4 => ['price' => 3590000, 'sale' => 0.05], // Nha Trang - Biển Nhũ Tiên
            5 => ['price' => 10390000, 'sale' => 0.10], // Hà Nội - Sapa - Hạ Long
        ];

        // Sample booking data
        $bookings = [
            [
                'booking_customer_name' => '',
                'booking_customer_email' => 'nguyenvanan@gmail.com',
                'booking_customer_phone' => 912345678,
                'booking_customer_quantity' => 2,
                'booking_tour_id' => 1,
                'booking_user_id' => 1,
            ],
            [
                'booking_customer_name' => '',
                'booking_customer_email' => 'tranbinh123@gmail.com',
                'booking_customer_phone' => 987654321,
                'booking_customer_quantity' => 3,
                'booking_tour_id' => 1,
                'booking_user_id' => 2,
            ],
            [
                'booking_customer_name' => '',
                'booking_customer_email' => 'lecuong45@gmail.com',
                'booking_customer_phone' => 909123456,
                'booking_customer_quantity' => 1,
                'booking_tour_id' => 2,
                'booking_user_id' => 3,
            ],
            [
                'booking_customer_name' => 'Phạm Thị Duyên',
                'booking_customer_email' => 'phamduyen89@gmail.com',
                'booking_customer_phone' => 932145678,
                'booking_customer_quantity' => 4,
                'booking_tour_id' => 2,
                'booking_user_id' => 4,
            ],
            [
                'booking_customer_name' => 'Hoàng Văn Em',
                'booking_customer_email' => 'hoangem12@gmail.com',
                'booking_customer_phone' => 978123456,
                'booking_customer_quantity' => 2,
                'booking_tour_id' => 3,
                'booking_user_id' => 5,
            ],
            [
                'booking_customer_name' => 'Ngô Thị Hồng',
                'booking_customer_email' => 'ngohong33@gmail.com',
                'booking_customer_phone' => 945123456,
                'booking_customer_quantity' => 3,
                'booking_tour_id' => 3,
                'booking_user_id' => 6,
            ],
            [
                'booking_customer_name' => 'Vũ Minh Khang',
                'booking_customer_email' => 'vukhang56@gmail.com',
                'booking_customer_phone' => 923456789,
                'booking_customer_quantity' => 2,
                'booking_tour_id' => 4,
                'booking_user_id' => 7,
            ],
            [
                'booking_customer_name' => 'Đỗ Thị Lan',
                'booking_customer_email' => 'dolan78@gmail.com',
                'booking_customer_phone' => 967891234,
                'booking_customer_quantity' => 1,
                'booking_tour_id' => 4,
                'booking_user_id' => 8,
            ],
            [
                'booking_customer_name' => 'Bùi Văn Minh',
                'booking_customer_email' => 'buiminh99@gmail.com',
                'booking_customer_phone' => 918765432,
                'booking_customer_quantity' => 3,
                'booking_tour_id' => 5,
                'booking_user_id' => 9,
            ],
            [
                'booking_customer_name' => 'Lý Thị Nga',
                'booking_customer_email' => 'lynga22@gmail.com',
                'booking_customer_phone' => 981234567,
                'booking_customer_quantity' => 2,
                'booking_tour_id' => 5,
                'booking_user_id' => 10,
            ],
            [
                'booking_customer_name' => 'Trương Văn Phú',
                'booking_customer_email' => 'truongphu11@gmail.com',
                'booking_customer_phone' => 934567890,
                'booking_customer_quantity' => 4,
                'booking_tour_id' => 1,
                'booking_user_id' => 1,
            ],
            [
                'booking_customer_name' => 'Hà Thị Quyên',
                'booking_customer_email' => 'haquyen34@gmail.com',
                'booking_customer_phone' => 971234567,
                'booking_customer_quantity' => 2,
                'booking_tour_id' => 2,
                'booking_user_id' => 2,
            ],
            [
                'booking_customer_name' => 'Nguyễn Văn Sơn',
                'booking_customer_email' => 'nguyenson67@gmail.com',
                'booking_customer_phone' => 947891234,
                'booking_customer_quantity' => 1,
                'booking_tour_id' => 3,
                'booking_user_id' => 3,
            ],
            [
                'booking_customer_name' => 'Trần Văn Tài',
                'booking_customer_email' => 'trantai88@gmail.com',
                'booking_customer_phone' => 926789012,
                'booking_customer_quantity' => 3,
                'booking_tour_id' => 4,
                'booking_user_id' => 4,
            ],
            [
                'booking_customer_name' => 'Phạm Văn Út',
                'booking_customer_email' => 'phamut55@gmail.com',
                'booking_customer_phone' => 913456789,
                'booking_customer_quantity' => 4,
                'booking_tour_id' => 5,
                'booking_user_id' => 5,
            ],
            [
                'booking_customer_name' => 'Lê Thị Vân',
                'booking_customer_email' => 'levan44@gmail.com',
                'booking_customer_phone' => 989012345,
                'booking_customer_quantity' => 2,
                'booking_tour_id' => 1,
                'booking_user_id' => 6,
            ],
            [
                'booking_customer_name' => 'Ngô Văn Xuân',
                'booking_customer_email' => 'ngoxuan66@gmail.com',
                'booking_customer_phone' => 937891234,
                'booking_customer_quantity' => 3,
                'booking_tour_id' => 2,
                'booking_user_id' => 7,
            ],
            [
                'booking_customer_name' => 'Vũ Thị Yến',
                'booking_customer_email' => 'vuyen77@gmail.com',
                'booking_customer_phone' => 979012345,
                'booking_customer_quantity' => 2,
                'booking_tour_id' => 3,
                'booking_user_id' => 8,
            ],
            [
                'booking_customer_name' => 'Đỗ Văn Zăng',
                'booking_customer_email' => 'dozang99@gmail.com',
                'booking_customer_phone' => 941234567,
                'booking_customer_quantity' => 1,
                'booking_tour_id' => 4,
                'booking_user_id' => 9,
            ],
            [
                'booking_customer_name' => 'Bùi Thị Ánh',
                'booking_customer_email' => 'buianh12@gmail.com',
                'booking_customer_phone' => 929012345,
                'booking_customer_quantity' => 2,
                'booking_tour_id' => 5,
                'booking_user_id' => 10,
            ],
            [
                'booking_customer_name' => 'Trương Thị Bé',
                'booking_customer_email' => 'truongbe33@gmail.com',
                'booking_customer_phone' => 917891234,
                'booking_customer_quantity' => 3,
                'booking_tour_id' => 1,
                'booking_user_id' => 1,
            ],
            [
                'booking_customer_name' => 'Hà Văn Cường',
                'booking_customer_email' => 'hacuong45@gmail.com',
                'booking_customer_phone' => 983456789,
                'booking_customer_quantity' => 1,
                'booking_tour_id' => 2,
                'booking_user_id' => 2,
            ],
            [
                'booking_customer_name' => 'Nguyễn Thị Diệu',
                'booking_customer_email' => 'nguyendieu56@gmail.com',
                'booking_customer_phone' => 939012345,
                'booking_customer_quantity' => 4,
                'booking_tour_id' => 3,
                'booking_user_id' => 3,
            ],
            [
                'booking_customer_name' => 'Trần Văn Âu',
                'booking_customer_email' => 'tranau78@gmail.com',
                'booking_customer_phone' => 973456789,
                'booking_customer_quantity' => 2,
                'booking_tour_id' => 4,
                'booking_user_id' => 4,
            ],
            [
                'booking_customer_name' => 'Phạm Thị Bích',
                'booking_customer_email' => 'phambich89@gmail.com',
                'booking_customer_phone' => 946789012,
                'booking_customer_quantity' => 3,
                'booking_tour_id' => 5,
                'booking_user_id' => 5,
            ],
            [
                'booking_customer_name' => 'Lê Văn Cảnh',
                'booking_customer_email' => 'lecanh11@gmail.com',
                'booking_customer_phone' => 921234567,
                'booking_customer_quantity' => 1,
                'booking_tour_id' => 1,
                'booking_user_id' => 6,
            ],
            [
                'booking_customer_name' => 'Ngô Thị Đào',
                'booking_customer_email' => 'ngodao22@gmail.com',
                'booking_customer_phone' => 986789012,
                'booking_customer_quantity' => 2,
                'booking_tour_id' => 2,
                'booking_user_id' => 7,
            ],
            [
                'booking_customer_name' => 'Vũ Văn Đông',
                'booking_customer_email' => 'vudong33@gmail.com',
                'booking_customer_phone' => 931234567,
                'booking_customer_quantity' => 3,
                'booking_tour_id' => 3,
                'booking_user_id' => 8,
            ],
            [
                'booking_customer_name' => 'Đỗ Thị Êm',
                'booking_customer_email' => 'doem44@gmail.com',
                'booking_customer_phone' => 976789012,
                'booking_customer_quantity' => 4,
                'booking_tour_id' => 4,
                'booking_user_id' => 9,
            ],
            [
                'booking_customer_name' => 'Bùi Văn Giang',
                'booking_customer_email' => 'buigiang55@gmail.com',
                'booking_customer_phone' => 949012345,
                'booking_customer_quantity' => 1,
                'booking_tour_id' => 5,
                'booking_user_id' => 10,
            ],
        ];



        foreach ($bookings as $booking) {
            $tour = $tours[$booking['booking_tour_id']];
            $booking_amount = $tour['price'] * $booking['booking_customer_quantity'] * (1 - $tour['sale']);

            // Lấy user theo user_id
            $user = User::find($booking['booking_user_id']);
            $customer_name = $user ? $user->name : $booking['booking_customer_name']; // fallback nếu ko tìm thấy user

            DB::table('bookings')->insert([
                'booking_customer_name' => $customer_name,
                'booking_customer_email' => $booking['booking_customer_email'],
                'booking_customer_phone' => $booking['booking_customer_phone'],
                'booking_customer_quantity' => $booking['booking_customer_quantity'],
                'booking_amount' => $booking_amount,
                'booking_tour_id' => $booking['booking_tour_id'],
                'booking_user_id' => $booking['booking_user_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
