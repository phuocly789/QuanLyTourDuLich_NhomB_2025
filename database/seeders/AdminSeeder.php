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
                'username' => 'trinhvietky',
                'password' => '123456',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'username' => 'maitrananhtuan',
                'password' => '123456',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'username' => 'nguyenthanhtai',
                'password' => '123456',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'username' => 'hosiminhtri',
                'password' => '123456',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'username' => 'vulehuytruong',
                'password' => '123456',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);   
    }
}
