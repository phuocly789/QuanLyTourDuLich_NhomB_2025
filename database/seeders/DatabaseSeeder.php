<?php

namespace Database\Seeders;

use App\Models\Booking;
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

        $this->call(LocationSeeder::class);
        $this->call(GuideSeeder::class);
        $this->call(TourSeeder::class);

        $this->call(UsersSeeder::class);
        $this->call(BookingSeeder::class);
        $this->call(ClientSeeder::class);
    }
}
