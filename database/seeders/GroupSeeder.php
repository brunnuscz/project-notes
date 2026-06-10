<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('app.groups')->insert([
            'title' => 'Feira',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('app.groups')->insert([
            'title' => 'Viagem',
            'color' => 'warning',
            'icon' => 'fa-solid fa-plane',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('app.groups')->insert([
            'title' => 'Música',
            'color' => 'red',
            'icon' => 'fa-solid fa-music',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('app.groups')->insert([
            'title' => 'Lanche',
            'color' => 'primary',
            'icon' => 'fa-solid fa-burger',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('app.groups')->insert([
            'title' => 'Lazer',
            'color' => 'success',
            'icon' => 'fa-solid fa-champagne-glasses',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
