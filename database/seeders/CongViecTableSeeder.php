<?php

namespace Database\Seeders;

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
        CongViec::factory(10)->create();
    }
}
