<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CongViecFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $format = 'Y-m-d';
        $arrayHinhThucLamViec = ['remote', 'offline', 'hybrid'];
        $arrayLoaiCongViec = ['fulltime', 'parttime', 'intern'];

        return [
            'tieu_de' => fake()->text(50),
            'hinh_thuc_lam_viec' => $arrayHinhThucLamViec[rand(0, 2)],
            'loai_cong_viec' => $arrayLoaiCongViec[rand(0, 2)],
            'dia_chi_lam_viec' => fake()->address(),
            'noi_dung' => fake()->text(200),
            'muc_luong_toi_thieu' => fake()->randomNumber(7, true),
            'muc_luong_toi_da' => fake()->randomNumber(8, true),
            'luot_xem' => fake()->randomDigit(),
            'ngay_het_han' => fake()->date($format),
        ];
    }
}
