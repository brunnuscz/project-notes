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
            'title_group' => 'Feira',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('app.groups')->insert([
            'title_group' => 'Viagem',
            'color' => 'warning',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('app.groups')->insert([
            'title_group' => 'Bandas',
            'color' => 'red',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('app.groups')->insert([
            'title_group' => 'Lanches',
            'color' => 'primary',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('app.groups')->insert([
            'title_group' => 'Lazer',
            'color' => 'success',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
