<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // DB::table('_tour')->insert([
        //     'Tour_id'=> "san pham 2",
        //     'Tour_name'=> 80,
        //     'Start_day'=> "san pham khong phai la thuoc de thay the thuoc chua benh",
        //     'End_day'=> "khong co",
        //     'Price'=> "3",
        //     'Vehicle'=> "10%",
        //     'Place_id'=> "10000000",
        //     'Guide_id'=> "43k"
        // ]);

        $this->call(TicketSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(GuideSeeder::class);
        $this->call(TourSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(HotelSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(NotificationSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
