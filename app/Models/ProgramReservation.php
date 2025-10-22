<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramReservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',        // user who reserves
        'program_id',     // the program reserved
        'note',           // optional note from user
        'status',         // pending, confirmed, cancelled, etc.
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
