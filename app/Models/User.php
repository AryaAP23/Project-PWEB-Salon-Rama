<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'alamat',
        'password',
        'is_admin',
        'is_staff',

    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'user_id', 'user_id');
    }
}
