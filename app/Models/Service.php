<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function detail_reservation()
    {
        return $this->hasMany(DetailReservation::class, 'detail_reservation_id', 'detail_reservation_id');
    }

    public function detail_order()
    {
        return $this->hasMany(DetailOrder::class, 'detail_order_id', 'detail_order_id');
    }
}
