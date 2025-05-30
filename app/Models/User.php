<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id',       // Thêm trường này
        'google_avatar',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Mối quan hệ ngược từ User tới Client
    public function clients()
    {
        return $this->hasMany(Client::class);
    }
    // Define the relationship with FavoriteTour
    public function favoriteTours()
    {
        return $this->belongsToMany(Tour::class, 'favorite_tours', 'user_id', 'tour_id');
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'booking_user_id', 'id');
    }
      public function replies()
    {
        return $this->hasMany(Reply::class, 'admin_id', 'id');
    }
      public function isAdmin()
    {
        return $this->userType === 'admin';
    }
}
