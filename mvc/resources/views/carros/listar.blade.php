@extends('layouts.app')
@section('content')
    <div class="container">

        <h1>Listar meus Carros</h1>

        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>marca</th>
                </tr>
            </thead>

            <tbody>

                @foreach($carros as $carro)
                    <tr>
                        <td>{{ $carro->id }}</td>
                        <td>{{ $carro->nome }}</td>
                        <td>{{ $carro->marca }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
