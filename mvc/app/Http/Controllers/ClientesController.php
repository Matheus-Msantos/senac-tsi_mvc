<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

class ClientesController extends Controller
{


    public function listar() {
        $clientes = Clientes::all();

        return view('cliente.listar', ['clientes' => $clientes]);
    }
}
