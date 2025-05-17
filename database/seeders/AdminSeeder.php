<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'username' => 'lyminhphuoc',
                'password' => '123456',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'username' => 'thuyhuyen',
                'password' => '123456',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'username' => 'nguyenngochiep',
                'password' => '123456',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'username' => 'hieuthuhai',
                'password' => '123456',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
