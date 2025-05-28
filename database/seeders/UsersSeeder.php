<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'Nguyen Van A', 'email' => 'a@example.com', 'usertype' => 'user'],
            ['name' => 'Tran Thi B', 'email' => 'b@example.com', 'usertype' => 'user'],
            ['name' => 'Le Van C', 'email' => 'c@example.com', 'usertype' => 'admin'],
            ['name' => 'Pham Thi D', 'email' => 'd@example.com', 'usertype' => 'user'],
            ['name' => 'Hoang Van E', 'email' => 'e@example.com', 'usertype' => 'user'],
            ['name' => 'Do Thi F', 'email' => 'f@example.com', 'usertype' => 'user'],
            ['name' => 'Nguyen Van G', 'email' => 'g@example.com', 'usertype' => 'user'],
            ['name' => 'Vo Thi H', 'email' => 'h@example.com', 'usertype' => 'admin'],
            ['name' => 'Bui Van I', 'email' => 'i@example.com', 'usertype' => 'user'],
            ['name' => 'Nguyen Thi J', 'email' => 'j@example.com', 'usertype' => 'user'],
        ];

        foreach ($users as $user) {
            User::create([
                // 'name' => $user['name'],
                 'name' => $user['name'],
                'email' => $user['email'],
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // mật khẩu mặc định là "password"
                'usertype' => $user['usertype'],
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
