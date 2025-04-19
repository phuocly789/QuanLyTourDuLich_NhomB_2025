<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $primaryKey = 'client_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_name',
        'client_image',
        'client_address',
        'client_comment',
        'user_id',
        'tour_id',
    ];
    // Mối quan hệ với bảng User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Mối quan hệ với bảng Tour
    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}