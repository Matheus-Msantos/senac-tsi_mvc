<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class CarrosController extends Controller
{
    public function listar() {
        $carros = Carro::all();
        return view('carros.listar', ['carros' => $carros]);
    }
}
