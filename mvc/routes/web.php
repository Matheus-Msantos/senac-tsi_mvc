<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/avisos', function() {
    return view('avisos', ['nome' => 'Melo', 'mostrar' => true, 'avisos' => [ ['id' => 1, 'texto' => 'Feriado dia 20/03'], ['id' => 2, 'texto' => 'Feriado semana que vem'] ]]);
});

Route::get('/usuario', function() {
    return view('usuario', ['logins' => [ [ 'id' => 1, 'Email' => 'Matheus@email.com', 'Senha' => 'senha1234'],
                                          [ 'id' => 2, 'Email' => 'José@email.com', 'Senha' => 'JoséBahiano' ],
                                          [ 'id' => 3, 'Email' => 'Judas@email.com', 'Senha' => '123456' ] ]]);
});
