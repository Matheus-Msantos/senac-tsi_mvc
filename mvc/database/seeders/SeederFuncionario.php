<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Funcionario;

class SeederFuncionario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $funcionario = Funcionario::create(['nome' => 'manoZé',
                                            'endereco' => 'Rua dos Bobos',
                                            'email' => 'manoZé@teste.com',
                                            'telefone' => '970386523']);
    }
}
