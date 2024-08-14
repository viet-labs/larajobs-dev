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
        Schema::create('cong_viec_tu_khoa', function (Blueprint $table) {
            $table->integer('cong_viec_id');
            $table->integer('tu_khoa_id');

            $table->index(['cong_viec_id', 'tu_khoa_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cong_viec_tu_khoa');
    }
};
