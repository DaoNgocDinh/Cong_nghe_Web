<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HardwareDivice extends Model
{
    use HasFactory;

    protected $fillable = [
        'device_name',
        'type',
        'status',
        'center_id',
    ];

    public function itCenter()
    {
        return $this->belongsTo(ItCenter::class);
    }
}
