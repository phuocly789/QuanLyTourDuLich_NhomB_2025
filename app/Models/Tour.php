<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $primaryKey = 'tour_id';
    protected $fillable = [
        'tour_name',
        'tour_image',
        'location_id',
        'start_day',
        'time',
        'star_from',
        'price',
        'vehicle',
        'tour_description',
        'tour_schedule',
        'tour_sale',
        'guide_id',
    ];
    public function guide()
    {
        return $this->belongsTo(Guide::class, 'guide_id', 'guide_Id');
    }
    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id', 'location_id');
    }

    // Mối quan hệ ngược từ Tour tới Client
    public function clients()
    {
        return $this->hasMany(Client::class, 'tour_id', 'tour_id');
    }
    // Define the relationship with FavoriteTour
    public function favoriteByUsers()
    {
        return $this->belongsToMany(User::class, 'favorite_tours', 'tour_id', 'user_id');
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'booking_tour_id', 'tour_id');
    }
}
