<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Cliente as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;


class Clientes extends Model
{
    use HasFactory, Notifiable;
    use HasRoles;


    protected $fillable = ['id', 'nome', 'endereco', 'email', 'nascimento'];

    protected $table = 'Clientes';

    public function vendas() {
        return $this->hasMany( Vendas::class, 'cliente_id' );
    }
}
