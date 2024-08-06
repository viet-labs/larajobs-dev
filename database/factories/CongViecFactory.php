<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\ToChuc;
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
        $countUser = User::count();
        $countToChuc = ToChuc::count();
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
            'user_id' => $countUser > 0 ? rand(1, $countUser) : 1,
            'to_chuc_id' => $countToChuc > 0 ? rand(1, $countToChuc) : 1,
        ];
    }
}
