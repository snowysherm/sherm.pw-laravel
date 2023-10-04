<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClockSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('clocks')->insert([
            'date' => '1970-01-01',
        ]);
    }
}
