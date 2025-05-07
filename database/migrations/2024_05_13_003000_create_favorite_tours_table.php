<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorite_tours', function (Blueprint $table) {
            $table->id('favorite_tours_id');
            $table->unsignedBigInteger('tour_id');
            
            $table->unsignedBigInteger('user_id');
            
            $table->timestamps();

            // Thêm các ràng buộc hoặc khóa ngoại ở đây
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorite_tours');
    }
};
