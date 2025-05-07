<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            // [
            //     'client_name' => 'Hồ Ngọc Hà',
            //     'client_image' => 'hongocha.jpg',
            //     'client_address' => 'Thành phố Hồ Chí Minh',
            //     'client_comment' => '
            //     Dịch vụ du lịch này thực sự ấn tượng! Hướng dẫn viên am hiểu, phương tiện vận chuyển thoải mái, và dịch vụ chăm sóc khách hàng tuyệt vời. Tôi rất hài lòng và sẽ quay lại!',
            //     'user_id'=>1,
            //     'tour_id'=>1,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'client_name' => 'Huỳnh Nguyễn Mai Phương',
            //     'client_image' => 'huynhnguyenmaiphuong.jpg',
            //     'client_address' => 'Đà Nẵng',
            //     'client_comment' => '
            //     Dịch vụ du lịch này thực sự ấn tượng! Hướng dẫn viên am hiểu, phương tiện vận chuyển thoải mái, và dịch vụ chăm sóc khách hàng tuyệt vời. Tôi rất hài lòng và sẽ quay lại!',
            //     'user_id'=>2,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'client_name' => 'Noo Phước Thịnh',
            //     'client_image' => 'noophuocthinh.jpg',
            //     'client_address' => 'Thành phố Hồ Chí Minh',
            //     'client_comment' => '
            //     Dịch vụ du lịch này thực sự ấn tượng! Hướng dẫn viên am hiểu, phương tiện vận chuyển thoải mái, và dịch vụ chăm sóc khách hàng tuyệt vời. Tôi rất hài lòng và sẽ quay lại!',
            //     'user_id'=>1,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'client_name' => 'Dương Hoàng Yến',
            //     'client_image' => 'duonghoangyen.jpg',
            //     'client_address' => 'Hà Nội',
            //     'client_comment' => '
            //     Dịch vụ du lịch này thực sự ấn tượng! Hướng dẫn viên am hiểu, phương tiện vận chuyển thoải mái, và dịch vụ chăm sóc khách hàng tuyệt vời. Tôi rất hài lòng và sẽ quay lại!',
            //     'user_id'=>2,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'client_name' => 'B Trần',
            //     'client_image' => 'btran.jpg',
            //     'client_address' => 'Hà Nội',
            //     'client_comment' => '
            //     Dịch vụ du lịch này thực sự ấn tượng! Hướng dẫn viên am hiểu, phương tiện vận chuyển thoải mái, và dịch vụ chăm sóc khách hàng tuyệt vời. Tôi rất hài lòng và sẽ quay lại!',
            //     'user_id'=>2,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],

        ]);
    }
}
