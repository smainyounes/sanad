<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SpecialistReservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',          // the user making the reservation
        'specialist_id',    // the specialist being reserved (also a User)
        'date',             // reservation date
        'time',             // reservation time
        'note',             // user note
        'status',           // pending, accepted, cancelled, etc.
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function specialist()
    {
        return $this->belongsTo(User::class, 'specialist_id');
    }

}
