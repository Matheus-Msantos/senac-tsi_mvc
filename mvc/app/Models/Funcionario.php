<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nome', 'endereco', 'email', 'telefone'];

    protected $table = 'Funcionario';

    public function vendas(){
        return $this->hasMany(vendas::class, 'funcionario_id');
    }
}
