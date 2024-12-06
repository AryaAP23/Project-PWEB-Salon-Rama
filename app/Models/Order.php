<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'total_cost', 'payment_id'];

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id', 'payment_id'); // Menghubungkan payment_id ke id di tabel payments
    }

    public function detail_orders()
    {
        return $this->hasMany(DetailOrder::class, 'order_id', 'order_id'); // Menghubungkan order_id ke id di tabel orders
    }
}

