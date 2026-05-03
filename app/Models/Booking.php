<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Booking extends Model
{
    use HasFactory;

    protected $table = "bookings";

   protected $fillable = [
    'name',
    'booking_datetime',
    'status',
    'user_id'
];
}