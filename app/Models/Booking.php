<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $primaryKey = 'booking_id';
    public function user()
    {
        return $this->belongsTo(Location::class, 'user_id', 'user_id');
    }
    public function tour()
    {
        return $this->belongsTo(Location::class, 'tour_id', 'tour_id');
    }
}
