<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\PaymentMethod;

class PaymentMethodSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();

        foreach ($users as $user) {

            PaymentMethod::updateOrCreate(
                ['user_id' => $user->id],
                [
                    'type' => 'upi',
                    'upi_id' => 'user' . $user->id . '@upi',
                    'is_default' => true,
                ]
            );
        }
    }
}