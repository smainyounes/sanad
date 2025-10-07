<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'specialist_id',
        'title',
        'description',
        'date',
        'is_online',
        'status', // active || desactive
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function specialist()
    {
        return $this->belongsTo(User::class, 'specialist_id');
    }
}
