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
        Schema::create('cong_viec', function (Blueprint $table) {
            $table->id();
            $table->string('tieu_de');
            $table->enum('hinh_thuc_lam_viec', ['remote', 'offline', 'hybrid']);
            $table->enum('loai_cong_viec', ['fulltime', 'parttime', 'intern']);
            $table->string('dia_chi_lam_viec')->nullable();
            $table->text('noi_dung')->nullable();
            $table->integer('muc_luong_toi_thieu')->default(0);
            $table->integer('muc_luong_toi_da')->default(0);
            $table->integer('luot_xem')->default(0);
            $table->timestamp('ngay_het_han')->nullable();
            $table->integer('user_id');
            $table->integer('to_chuc_id');
            $table->timestamps();

            $table->index('user_id');
            $table->index('to_chuc_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cong_viec');
    }
};
