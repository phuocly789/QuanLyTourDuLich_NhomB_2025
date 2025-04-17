<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('locations')->insert([
            [
                'location_name' => 'Miền Bắc',
                'location_image' => 'mienbac.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_name' => 'Miền Trung',
                'location_image' => 'mientrung.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_name' => 'Miền Nam',
                'location_image' => 'miennam.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
