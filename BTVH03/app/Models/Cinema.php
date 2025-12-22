<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cinema extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'total_seats',
    ];

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
