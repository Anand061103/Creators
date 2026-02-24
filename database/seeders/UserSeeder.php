<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Anand Kushwaha',
                'email' => 'anand@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'admin',
                'balance' => 5000.00,
                'status' => 'active',
                'phone' => '9876543210',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rahul Sharma',
                'email' => 'rahul@gmail.com',
                'password' => Hash::make('password123'),
                'role' => 'user',
                'balance' => 1200.50,
                'status' => 'active',
                'phone' => '9123456780',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Priya Verma',
                'email' => 'priya@gmail.com',
                'password' => Hash::make('password123'),
                'role' => 'user',
                'balance' => 300.00,
                'status' => 'active',
                'phone' => '9988776655',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Amit Singh',
                'email' => 'amit@gmail.com',
                'password' => Hash::make('password123'),
                'role' => 'user',
                'balance' => 0.00,
                'status' => 'blocked',
                'phone' => '9090909090',
                'email_verified_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Neha Patel',
                'email' => 'neha@gmail.com',
                'password' => Hash::make('password123'),
                'role' => 'user',
                'balance' => 2500.75,
                'status' => 'active',
                'phone' => '9012345678',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}