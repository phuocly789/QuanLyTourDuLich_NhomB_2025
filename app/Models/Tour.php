<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $table = 'tours';

    protected $fillable = [
        'ten_tour',
        'dia_diem',
        'noi_xuat_phat',
        'cho_nghi',
        'mo_ta',
        'lich_trinh',
        'gia', 10, 2,
        'so_cho_trong',
        'anh',
        'ngay_bat_dau',
        'thoi_gian',
        'giam_gia'
    ];
}
