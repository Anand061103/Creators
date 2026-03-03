<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = [
        'user_id',
        'type',
        'account_name',
        'account_number',
        'ifsc_code',
        'upi_id',
        'is_default'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}