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
        Schema::create('to_chuc_tu_khoa', function (Blueprint $table) {
            $table->integer('to_chuc_id');
            $table->integer('tu_khoa_id');

            $table->index('to_chuc_id');
            $table->index('tu_khoa_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('to_chuc_tu_khoa');
    }
};
