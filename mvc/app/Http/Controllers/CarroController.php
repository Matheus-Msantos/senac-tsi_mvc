<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Carro::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $json = $request->getContent();

        return Carro::create(json_decode($json, JSON_OBJECT_AS_ARRAY));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carro = Carro::find($id);

        if($carro) {
            return $carro;
        } else {
            return json_encode([$id => 'Carro nao encontrado']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car = Carro::find($id);

        if($car) {
            $json = $request->getContent();
            $atualizacao = json_decode($json, JSON_OBJECT_AS_ARRAY);
            $car->nome = $atualizacao['nome'];

        } else {
            $car = [$id => 'Carro não encontrado'];
        }

        return json_encode($car);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carro = Carro::find($id);

        if($carro) {
            $car = $carro->delete() ? [$id => 'Carro apagado'] : [$id => 'Erro ao apagar o carro'];
        } else {
            $car = [$id => 'Carro nao encontrado'];
        }

        return json_encode($car);
    }
}
