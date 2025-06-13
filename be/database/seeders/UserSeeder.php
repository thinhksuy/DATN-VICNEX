<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Đặng Hoàng Tân',
                'email' => 'tandht@example.com',
                'password' => Hash::make('password123'),
                'phone' => '0123456789',
                'avatar' => 'default.png',
                'created_at' => Carbon::now(),   // ✅ sửa lại
                'updated_at' => Carbon::now(),   // ✅ sửa lại
                'gender' => 'male',
                'date_of_birth' => '2005-01-01',
                'status' => 'active',
                'role_id' => 1
            ],
            [
                'name' => 'Nguyễn Văn A',
                'email' => 'vana@example.com',
                'password' => Hash::make('password123'),
                'phone' => '0901234567',
                'avatar' => 'default.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gender' => 'male',
                'date_of_birth' => '2000-05-15',
                'status' => 'active',
                'role_id' => 2
            ],
            [
                'name' => 'Trần Thị B',
                'email' => 'thib@example.com',
                'password' => Hash::make('password123'),
                'phone' => '0912345678',
                'avatar' => 'default.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gender' => 'female',
                'date_of_birth' => '1998-09-21',
                'status' => 'inactive',
                'role_id' => 3
            ],
            [
                'name' => 'Lê Văn C',
                'email' => 'vanc@example.com',
                'password' => Hash::make('password123'),
                'phone' => '0934567890',
                'avatar' => 'default.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gender' => 'male',
                'date_of_birth' => '1995-12-10',
                'status' => 'active',
                'role_id' => 2
            ],
            [
                'name' => 'Phạm Thị D',
                'email' => 'thid@example.com',
                'password' => Hash::make('password123'),
                'phone' => '0945678901',
                'avatar' => 'default.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gender' => 'female',
                'date_of_birth' => '2002-03-08',
                'status' => 'active',
                'role_id' => 3
            ],
        ]);
    }
}
