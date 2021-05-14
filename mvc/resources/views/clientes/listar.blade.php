@extends('layouts.app')
@section('content')
    <div class="container">

        <h1>Listar Clientes</h1>

        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>endereço</th>
                </tr>
            </thead>

            <tbody>

                @foreach($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td>{{ $cliente->nome }}</td>
                        <td>{{ $cliente->endereco }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
