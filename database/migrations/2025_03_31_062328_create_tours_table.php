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
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('tour_id');
            $table->string('tour_name');
            $table->string('tour_image');
            $table->date('start_day');
            $table->string('time');
            $table->string('star_from');
            $table->decimal('price', 10, 0);
            $table->string('vehicle');
            $table->text('tour_description');
            $table->text('tour_schedule');
            $table->string('tour_sale');
            $table->integer('total_seats');
            $table->integer('booked_seats');
            $table->integer('location_id')->unsigned();
            $table->integer('guide_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
};
