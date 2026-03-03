<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();

        foreach ($users as $user) {

            // 10 random transactions per user
            for ($i = 0; $i < 10; $i++) {

                $type = rand(0, 1) ? 'credit' : 'debit';
                $amount = rand(10, 500);

                Transaction::create([
                    'user_id' => $user->id,
                    'title' => $type === 'credit' ? 'Task Reward' : 'Withdraw to UPI',
                    'description' => $type === 'credit'
                        ? 'Completed social media task'
                        : 'Withdrawal processed',
                    'type' => $type,
                    'amount' => $amount,
                    'reference' => 'TXN' . rand(10000, 99999),
                    'status' => 'success',
                ]);
            }
        }
    }
}