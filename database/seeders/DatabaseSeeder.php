<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Setor;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @param \App\Models\Setor
     * @return void
     */
    public function run()
    {
        \App\Models\Setor::create(['nome_setor' => 'Administrativo']);
        \App\Models\Setor::create(['nome_setor' => 'Lanchonete']);
        \App\Models\Setor::create(['nome_setor' => 'Padaria']);
        \App\Models\Setor::create(['nome_setor' => 'Caixas']);
        \App\Models\Setor::create(['nome_setor' => 'Produção']);
    }
}
