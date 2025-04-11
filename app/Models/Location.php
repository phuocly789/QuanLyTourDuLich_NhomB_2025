<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $primaryKey = 'location_id';
    public function tours(){
        return $this->hasMany(Tour::class, 'location_id', 'location_id');
    }
}
