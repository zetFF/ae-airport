<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class transactionPassenger extends Model
{
   use HasFactory, SoftDeletes;
   protected $fillable = [
    'transaction_id',
    'flight_seat_id',
    'name',
    'date_of_birth',
    'nationality',
   ];
}
