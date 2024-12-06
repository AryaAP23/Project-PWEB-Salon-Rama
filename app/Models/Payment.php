<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['payment_method'];

    public function reservation()
    {
        return $this->hasOne(Reservation::class, 'payment_id', 'payment_id'); // Menghubungkan payment_id ke id di tabel payments
    }

    public function order()
    {
        return $this->hasOne(Order::class, 'payment_id', 'payment_id'); // Menghubungkan payment_id ke id di tabel payments
    }
}
