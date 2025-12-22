<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItCenter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'contact_email',
    ];

    public function hardwareDevices()
    {
        return $this->hasMany(HardwareDevice::class);
    }
}
