@extends('layouts.externo')
@section('title', 'Quadro de Avisos da Empresa')
@section('sidebar')
    @parent
    <p>^ ^ Barra superior adicionada do layout pai/mãe ^ ^ </p>
@endsection
@section('content')
    <p>Quadro de Avisos da Empresa</p>

    @if($mostrar)
        <p>Nome passado pela route: {{ $nome }}</p>

        @foreach($avisos as $aviso)
            <p># {{ $aviso['id'] }}: {{ $aviso['texto'] }}</p>
        @endforeach

        <?php
            foreach($avisos as $aviso){
                echo "<p> #{$aviso['id']}: {$aviso['texto']}</p>";
            }
        ?>
    @endif
@endsection


