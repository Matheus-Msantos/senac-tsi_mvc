<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
use Spatie\Permission\Models\Role;
use DB;

class ClientesController extends Controller
{

    public function __construct() {
        $this->middleware('permission:cliente-list',['only' => ['index', 'show']]);
        $this->middleware('permission:cliente-create',['only' => ['create', 'store']]);
        $this->middleware('permission:cliente-edit',['only' => ['edit', 'update']]);
        $this->middleware('permission:cliente-delete',['only' => ['destroyBoa']]);
    }

    public function listar() {
        $clientes = Clientes::all();

        return view('clientes.listar', ['clientes' => $clientes]);
    }

    public function index(Request $request)
    {
        $qtd_por_pagina = 5;

        $data = Clientes::orderBy('id', 'DESC')->paginate($qtd_por_pagina);

        return view('clientes.index',
                    compact('data'))->with('i', ($request->input('page', 1) - 1 ) + $qtd_por_pagina );
    }

    public function create()
    {
        $roles = Roles::pluck('name', 'name')->all();

        return view('clientes.create', compact($roles));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                                'name' => 'required',
                                'email' => 'required|email|unique:clientes,email',
                                'roles' => 'required' ]);

        $input = $request->all();

        $cliente = Cliente::creat($input);

        $cliente->assignRole($request->input('roles'));

        return redirect()->route('clientes.index')->with('success', 'Usuário criado com sucesso');
    }

    public function show($id)
    {
        $cliente = Clientes::find($id);

        return view('clientes.show', compact('cliente'));
    }

    public function edit($id)
    {
        $cliente = Clientes::find($id);

        $roles = Role::pluck('name', 'name')->all();

        $clienteRole= $cliente->roles->pluck('name', 'name')->all();

        return view('clientes.edit', compact('cliente', 'roles', 'clienteRole'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email|unique:clientes,email',
            'roles' => 'required' ]);

        $input = $request->all();

        $cliente = Cliente::find($id);

        $cliente->upadte($input);

        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->input('rules'));

        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso');
    }

    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('clientes.index')->with('success', 'Clinte removido com sucesso!');
    }
}
