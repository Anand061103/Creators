<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Anand Kushwaha',
                'email' => 'anand@gmail.com',
                'password' => Hash::make('12345678'),
                'email_verified_at' => Carbon::now()->subDays(10),
                'created_at' => Carbon::now()->subDays(10),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'name' => 'Rohit Sharma',
                'email' => 'rohit.sharma@gmail.com',
                'password' => Hash::make('12345678'),
                'email_verified_at' => Carbon::now()->subDays(7),
                'created_at' => Carbon::now()->subDays(7),
                'updated_at' => Carbon::now()->subDays(1),
            ],
            [
                'name' => 'Priya Verma',
                'email' => 'priya.verma@gmail.com',
                'password' => Hash::make('12345678'),
                'email_verified_at' => null, // not verified yet
                'created_at' => Carbon::now()->subDays(5),
                'updated_at' => Carbon::now()->subDays(5),
            ],
            [
                'name' => 'Amit Patel',
                'email' => 'amit.patel@gmail.com',
                'password' => Hash::make('12345678'),
                'email_verified_at' => Carbon::now()->subDays(3),
                'created_at' => Carbon::now()->subDays(3),
                'updated_at' => Carbon::now()->subHours(12),
            ],
            [
                'name' => 'Neha Singh',
                'email' => 'neha.singh@gmail.com',
                'password' => Hash::make('12345678'),
                'email_verified_at' => Carbon::now()->subDays(1),
                'created_at' => Carbon::now()->subDays(1),
                'updated_at' => Carbon::now()->subHours(2),
            ],
        ]);
    }
}