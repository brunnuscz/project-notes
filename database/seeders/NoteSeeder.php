<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoteSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('app.notes')->insert([
            'title' => 'Alimentos',
            'description' => 'Arroz, Feijão, Cuscuz e Frango',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('app.notes')->insert([
            'title' => 'Lugares',
            'description' => 'Florida, New York, Londres e Barcelona',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('app.notes')->insert([
            'title' => 'Tecnologias',
            'description' => 'React, Laravel, Node e Java',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('app.notes')->insert([
            'title' => 'Bandas',
            'description' => 'Slipknot, Korn, Oasis e Beatles',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('app.notes')->insert([
            'title' => 'Times',
            'description' => 'Corinthias, Flamengo, Vasco e Bahia',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('app.notes')->insert([
            'title' => 'Livros',
            'description' => 'IT, A Cabana, Carie e Estraordinario',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('app.notes')->insert([
            'title' => 'Lanches',
            'description' => 'Hamburguer, Batata, Coca-Cola e Pizza',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('app.notes')->insert([
            'title' => 'Cores',
            'description' => 'Azul, Roxo, Vermelho e Branco',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('app.notes')->insert([
            'title' => 'Disciplinas',
            'description' => 'Matemática, Inglês, Geografia e Português',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('app.notes')->insert([
            'title' => 'Profissões',
            'description' => 'Programador, Carpinteiro, Advogado e Mecânico',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
