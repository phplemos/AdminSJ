<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'nome_categoria' => 'Pratos',
            'descricao_categoria' => 'Pratos de vidro',
            'fk_setor' => 1
        ]);
        Categoria::create([
            'nome_categoria' => 'Copos',
            'descricao_categoria' => 'taça de cerveja',
            'fk_setor' => 2
        ]);
        Categoria::create([
            'nome_categoria' => 'Mesa',
            'descricao_categoria' => 'Mesas de madeira',
            'fk_setor' => 3
        ]);
    }
}
