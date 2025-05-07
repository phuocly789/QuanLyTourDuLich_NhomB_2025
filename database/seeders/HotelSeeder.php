<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotel')->insert([
            [
                'hotel_name' => 'Khách sạn Melia Hà Nội',
                'hotel_address' => '44 Lý Thường Kiệt, Quận Hoàn Kiếm, Trần Hưng Đạo, Quận Hoàn Kiếm, Hà Nội',
                'hotel_city' => 'Hà Nội',
                'hotel_image' => 'melia_hanoi_hotel.jpg',
                'hotel_rating' => '5',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'hotel_name' => 'Muong Thanh Hanoi Centre Hotel',
                'hotel_address' => '78 Thợ Nhuộm, Trần Hưng Đạo, Quận Hoàn Kiếm, Hà Nội',
                'hotel_city' => 'Hà Nội',
                'hotel_image' => 'muong_thanh_hanoi_hotel.jpg',
                'hotel_rating' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'hotel_name' => 'Le Grand Hanoi Hotel - The Charm',
                'hotel_address' => '8 Ngõ 48 Trần Duy Hưng, Phường Trung Hòa, Quận Cầu Giấy, Hà Nội',
                'hotel_city' => 'Hà Nội',
                'hotel_image' => 'le_grand_hanoi_hotel.jpg',
                'hotel_rating' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'hotel_name' => 'Lotus Village Hotel Hanoi',
                'hotel_address' => '68 Hàng Bồ, Hàng Bồ, Quận Hoàn Kiếm, Hà Nội',
                'hotel_city' => 'Hà Nội',
                'hotel_image' => 'lotus_village_hanoi_hotel.jpg',
                'hotel_rating' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'hotel_name' => 'Lieber Hotel 2',
                'hotel_address' => '4 Yên Phúc, Phúc La, Quận Hà Đông, Hà Nội',
                'hotel_city' => 'Hà Nội',
                'hotel_image' => 'lieber_hanoi_hotel.jpg',
                'hotel_rating' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'hotel_name' => 'Peninsula Hotel Danang',
                'hotel_address' => '84 Võ Nguyên Giáp - Mân Thái - Sơn Trà - Đà Nẵng, Mân Thái, Sơn Trà, Đà Nẵng',
                'hotel_city' => 'Đà Nẵng',
                'hotel_image' => 'peninsula_danang_hotel.jpg',
                'hotel_rating' => '5',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'hotel_name' => 'Gold Plaza Hotel Da Nang',
                'hotel_address' => '11 Trần Thị Lý, Quận Hải Châu, Đà Nẵng',
                'hotel_city' => 'Đà Nẵng',
                'hotel_image' => 'gold_plaza_danang_hotel.jpg',
                'hotel_rating' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'hotel_name' => 'Le House Boutique Hotel',
                'hotel_address' => '85-87 Hà Bổng, Phước Mỹ, Sơn Trà, Đà Nẵng',
                'hotel_city' => 'Đà Nẵng',
                'hotel_image' => 'le_house_boutique_danang_hotel.jpg',
                'hotel_rating' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'hotel_name' => 'Cocochine Da Nang',
                'hotel_address' => 'Lô 51 Hoàng Kế Viêm,P. Mỹ An, Mỹ An, Ngũ Hành Sơn, Đà Nẵng',
                'hotel_city' => 'Đà Nẵng',
                'hotel_image' => 'cocochine_danang_hotel.jpg',
                'hotel_rating' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'hotel_name' => 'One Star Hotel Danang',
                'hotel_address' => '3 Phạm Phú Thứ, Hải Châu 1, Quận Hải Châu, Đà Nẵng',
                'hotel_city' => 'Đà Nẵng',
                'hotel_image' => 'onestar_danang_hotel.jpg',
                'hotel_rating' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
