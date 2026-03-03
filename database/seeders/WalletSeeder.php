<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Wallet;

class WalletSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();

        foreach ($users as $user) {
            Wallet::updateOrCreate(
                ['user_id' => $user->id],
                [
                    'balance' => rand(500, 2000),
                    'total_earned' => rand(3000, 10000),
                    'total_withdrawn' => rand(1000, 5000),
                ]
            );
        }
    }
}