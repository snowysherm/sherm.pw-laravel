<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrestigeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('prestiges')->insert([
            'name' => 'Wings of the Architect',
            ]);

        DB::table('prestiges')->insert([
            'name' => 'Helix Hyperpod',
            ]);

        DB::table('prestiges')->insert([
            'name' => 'Dread enhanced Rancor',
            ]);

        DB::table('prestiges')->insert([
            'name' => 'Titan 6 containment mode',
            ]);

        DB::table('prestiges')->insert([
            'name' => 'Bantam Dxun Reaper',
            ]);

        DB::table('prestiges')->insert([
            'name' => 'Kanoth Wings',
            ]);
    }
}
