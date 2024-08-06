<?php

namespace Database\Seeders;

use App\Models\TuKhoa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TuKhoaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TuKhoa::factory(10)->create();

    }
}
