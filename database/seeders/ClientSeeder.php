<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('vi_VN'); // Sử dụng locale tiếng Việt để tạo dữ liệu

        // Tạo 40 bản ghi mẫu
        for ($i = 0; $i < 40; $i++) {
            DB::table('clients')->insert([
                'client_name' => $faker->name,
                'client_image' => 'team-' . rand(1, 4) . '.jpg',
                'client_address' => $faker->address,
                'client_comment' => $faker->realText(200),
                'user_id' => $faker->numberBetween(1, 10),
                'tour_id' => $faker->numberBetween(1, 30),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
