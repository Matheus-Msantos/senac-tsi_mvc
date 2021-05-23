@extends('layouts.loja')
@section('title', 'Tabela de usuario')
@section('sidebar')
    @parent
@endsection
@section('content')
    <tbody>
        @foreach($logins as $login)
            <tr>
                <td>{{ $login['id'] }}</td>
                <td>{{ $login['Email'] }}</td>
                <td>{{ $login['Senha'] }}</td>
            </tr>
        @endforeach
    </tbody>
@endsection
