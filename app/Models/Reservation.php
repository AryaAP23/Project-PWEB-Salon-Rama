<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservation'; // Pastikan ini sesuai dengan nama tabel

    protected $fillable = [
        'description',
        'booking_date',
        'status',
        'total_cost',
        'image_path',
        'service_id',
        'user_id',
        'payment_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id', 'payment_id');
    }

    public function detail_reservation()
    {
        return $this->hasMany(DetailReservation::class, 'detail_reservation_id', 'detail_reservation_id');
    }
    
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'service_id');
    }
}
