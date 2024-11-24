<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function reservation()
    {
        return $this->hasOne(Reservation::class, 'payment_id', 'payment_id');
    }

    public function order()
    {
        return $this->hasOne(Order::class, 'payment_id', 'payment_id');
    }
}
