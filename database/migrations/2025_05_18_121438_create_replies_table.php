<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepliesTable extends Migration
{
    public function up()
    {
        Schema::create('replies', function (Blueprint $table) {
            $table->id();
            $table->text('reply_content'); 
            $table->timestamps();

            // Khóa ngoại
            // $table->integer('client_id')->unsigned();
             $table->integer('client_id')->unsigned();
            $table->integer('admin_id')->unsigned();

        });
    }

    public function down()
    {
        Schema::dropIfExists('replies');
    }
}
