<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Laptop extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'specifications',
        'rental_status',
        'renter_id',
    ];

    public function library()
    {
        return $this->belongsTo(Library::class);
    }
}