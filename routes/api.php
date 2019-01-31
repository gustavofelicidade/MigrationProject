<?php

use Illuminate\Http\Request;

use App\Cliente;

use App\Livro;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/clientes', 'ClienteController@create'); 

Route::get('/users', 'UserController@show')->name('Users');

Route::apiResource('emprestimos', 'EmprestimoController');

Route::get('/emprestimos/{id}', 'EmprestimoController@show');

Route::post('/livros', 'LivroController@create');

Route::get('/livros', 'LivroController@show');

Route::put('/livros/update/{id}', 'LivroController@edit');

Route::delete('/livros/remove/{id}','LivroController@destroy');

Route::get('/livros/{id}', 'LivroController@show');

Route::put('/livros/{id}', 'LivroController@edit');

Route::delete('/livros/{id}', 'LivroController@delete');


