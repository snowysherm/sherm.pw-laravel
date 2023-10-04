<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clock extends Model
{
    protected $table = 'clocks';
    public $timestamps = false;
    protected $casts = [
        'date' => 'datetime',
    ];
}
