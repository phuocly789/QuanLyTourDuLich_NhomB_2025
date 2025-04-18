<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            if (!Schema::hasColumn('tours', 'tour_name')) {
                $table->string('tour_name')->nullable()->after('tour_id');
            }
            if (!Schema::hasColumn('tours', 'tour_image')) {
                $table->string('tour_image')->nullable()->after('tour_name');
            }
            if (!Schema::hasColumn('tours', 'start_day')) {
                $table->date('start_day')->nullable()->after('tour_image');
            }
            if (!Schema::hasColumn('tours', 'time')) {
                $table->string('time')->nullable()->after('start_day');
            }
            if (!Schema::hasColumn('tours', 'star_from')) {
                $table->string('star_from')->nullable()->after('time');
            }
            if (!Schema::hasColumn('tours', 'price')) {
                $table->decimal('price', 10, 2)->nullable()->after('star_from');
            }
            // Thêm các kiểm tra tương tự cho các cột khác
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->dropColumn(['tour_name', 'tour_image', 'start_day', 'time', 'star_from', 'price']);
            // Thêm các cột khác nếu cần
        });
    }
};
