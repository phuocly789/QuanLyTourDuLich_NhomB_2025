<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('ten_tour');
            $table->string('dia_diem');
            $table->string('noi_xuat_phat');
            $table->string('cho_nghi');
            $table->text('mo_ta');
            $table->longText('lich_trinh');
            $table->decimal('gia', 10, 2);
            $table->integer('so_cho_trong');
            $table->string('anh')->nullable();
            $table->date('ngay_bat_dau');
            $table->string('thoi_gian');
            $table->integer('giam_gia')->default(0);
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
