<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoteSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('app.notes')->insert([
            'title' => 'Carnes',
            'description' => 'Patinho, Costela, Toscana e Frango',
            'group_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('app.notes')->insert([
            'title' => 'Frutas',
            'description' => 'Maçã, Laranja, Melancia e Goiaba',
            'group_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('app.notes')->insert([
            'title' => 'Piauí',
            'description' => 'Teresina, Piripiri, Angical e Oeiras',
            'group_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('app.notes')->insert([
            'title' => 'Califórnia',
            'description' => 'Los Angeles, São Francisco, San Diego e Sacramento',
            'group_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('app.notes')->insert([
            'title' => 'Nu Metal',
            'description' => 'Korn, Slipknot, Link Park e Papa Roach',
            'group_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('app.notes')->insert([
            'title' => 'Hard Rock',
            'description' => 'AC/DC, Aerosmith, Metallica e Bon Jovi',
            'group_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('app.notes')->insert([
            'title' => 'Heavy Metal',
            'description' => 'Black Sabbath, Iron Miaden, Pantela e Angra',
            'group_id' => 3,
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
