<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            'categoria' => 'Auto',
        ]);
        DB::table('categorias')->insert([
            'categoria' => 'Camion',
        ]);
        DB::table('categorias')->insert([
            'categoria' => 'Deportivo',
        ]);
    }
}
