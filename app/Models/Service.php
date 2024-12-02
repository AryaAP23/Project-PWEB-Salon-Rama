<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $table = 'service';

    public function detail_reservation()
    {
        return $this->hasMany(DetailReservation::class, 'detail_reservation_id', 'detail_reservation_id');
    }

    public function detail_order()
    {
        return $this->hasMany(DetailOrder::class, 'detail_order_id', 'detail_order_id');
    }
}
