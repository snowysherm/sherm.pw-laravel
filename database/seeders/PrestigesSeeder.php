<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrestigesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('prestige')->insert([
            'name' => 'Wings of the Architect',
        ]);
        \DB::table('prestige')->insert([
            'name' => 'Helix Hyperpod',
        ]);
        \DB::table('prestige')->insert([
            'name' => 'Dread enhanced Rancor',
        ]);
        \DB::table('prestige')->insert([
            'name' => 'Titan Six containment mode',
        ]);
        \DB::table('prestige')->insert([
            'name' => 'Wings of the Dragon',
        ]);
        \DB::table('prestige')->insert([
            'name' => 'Bantam Dxun Reaper',
        ]);
    }
}
