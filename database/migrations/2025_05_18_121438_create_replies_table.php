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
            // $table->unsignedBigInteger('client_id'); // Liên kết với bình luận
            // $table->unsignedBigInteger('admin_id'); // Liên kết với admin
            $table->text('reply_content'); // Nội dung câu trả lời
            $table->timestamps(); // created_at và updated_at

            // Khóa ngoại
            $table->integer('client_id')->unsigned();
            $table->integer('admin_id')->unsigned();

        });
    }

    public function down()
    {
        Schema::dropIfExists('replies');
    }
}
