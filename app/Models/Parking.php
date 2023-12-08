<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'vehicle_id', 'zone_id', 'start_time', 'stop_time', 'total_price'];

    // adding casts so that we can later convert them easily to any format
    protected $casts = [
        'start_time' => 'datetime',
        'stop_time' => 'datetime'
    ];
}
