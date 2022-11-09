<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setor;
class SetorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setor::create([
            'nome_setor' => 'Administrativo'
        ]);
        Setor::create([
            'nome_setor' => 'Lanchonete'
        ]);
        Setor::create([
            'nome_setor' => 'Padaria'
        ]);
        Setor::create([
            'nome_setor' => 'Caixa'
        ]);
        Setor::create([
            'nome_setor' => 'Produção'
        ]);
    }
}
