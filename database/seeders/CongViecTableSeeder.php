<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\ToChuc;
use App\Models\TuKhoa;
use App\Models\CongViec;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CongViecTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CongViec::factory(10)
            ->for(User::factory())
            ->for(ToChuc::factory())
            ->hasTuKhoas(TuKhoa::factory()->count(4))
            ->create();
    }
}
