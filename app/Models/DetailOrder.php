<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'service_id'];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'order_id'); // Menghubungkan order_id ke id di tabel orders
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'order_id'); // Menghubungkan service_id ke id di tabel services
    }
}
