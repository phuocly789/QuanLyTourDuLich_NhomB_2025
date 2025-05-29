<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    use HasFactory;
    protected $primaryKey = 'guide_Id';
    protected $fillable = [
        'guide_Name',
        'guide_Pno',
        'guide_Img',
        'guide_Mail',
        'guide_Intro',
        
    ];
    public function tours()
    {
        return $this->hasMany(Tour::class, 'guide_id', 'guide_Id');
    }
}
