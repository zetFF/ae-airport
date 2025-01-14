<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FlightSeat extends Model
{
    use HasFactory, SoftDeletes;
    protected $filltable = [
        'flight_id',
        'name',
        'row',
        'column',
        'class_type',
        'is_available',
    ];
}