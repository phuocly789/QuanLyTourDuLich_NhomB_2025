<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $primaryKey = 'client_id'; // Khai báo khóa chính
    protected $fillable = [
        'client_comment',
        'client_name',
        'client_address',
        'client_image',
        'user_id',
        'tour_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function tour()
    {
        return $this->belongsTo(Tour::class, 'tour_id', 'tour_id');
    }

    public function replies()
    {
        return $this->hasMany(Reply::class, 'client_id', 'client_id'); 
    }
}
