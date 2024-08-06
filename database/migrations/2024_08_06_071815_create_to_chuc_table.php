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
        Schema::create('to_chuc', function (Blueprint $table) {
            $table->id();
            $table->string('ten_cong_ty');
            $table->string('dia_chi_lien_he');
            $table->string('website_url')->nullable();
            $table->integer('user_id');
            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('to_chuc');
    }
};
