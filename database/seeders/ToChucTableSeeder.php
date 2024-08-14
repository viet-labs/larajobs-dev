<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\ToChuc;
use App\Models\TuKhoa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ToChucTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ToChuc::factory(10)
            ->for(User::factory())
            ->hasTuKhoas(TuKhoa::factory()->count(4))
            ->create();

    }
}
