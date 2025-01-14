<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flight extends Model

{
    use HasFactory, SoftDeletes;

    protected $filltable = [
        'flight_number',
        'airline_table'
    ];
}
