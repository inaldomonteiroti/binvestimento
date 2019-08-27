<?php

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

//Quando vc acessar a tota barra vc vai usar o metodo do controle Controller
Route::get('/', ['uses' => 'Controller@homepage']);
Route::get('/cadastro', ['uses' => 'Controller@cadastrar']);
Route::get('/login', ['uses' => 'Controller@fazerLogin']);

//Essa rota é acessada durante a inicialização do laravel http://127.0.0.1:8000
// Route::get('/', function () {
//     return view('welcome');
// });
