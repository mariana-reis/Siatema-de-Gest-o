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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('pdf_produto', 'PdfController@geraPdf');
Route::get('pdf_caixa', 'PdfController@caixa');
Route::get('pdf_cliente', 'PdfController@cliente');





//Route::get('erro', function() {
//    return view('erro');
//});

//Route::group(['middlware' => 'auth' ], function () {
//});
    Route::group(['prefix' => 'editar'], function() {
        Route::get('', 				'CaixaController@editIndex');
        Route::put('{id}', 			'CaixaController@update');
    });

    Route::group(['prefix' => 'home'], function() {
        Route::get('',				'CaixaController@index');
        Route::get('buscar',		'CaixaController@buscar');
        Route::get('{id}/delete', 	'CaixaController@destroy');
        Route::get('{id}/edit', 	'CaixaController@edit');


    });

//    Route::group(['prefix' => 'extrato'], function() {
//        Route::get('', 				'ExtratoController@index');
//        Route::get('gerar', 		'ExtratoController@gerar');
//        Route::get('{id}/delete', 	'ExtratoController@destroy');
//        Route::get('{id}/edit', 	'ExtratoController@edit');
//    });

//    Route::group(['prefix' => 'saida'], function() {
//        Route::get('',				'SaidaController@index');
//        Route::post('',				'SaidaController@store');
//    });

//    Route::group(['prefix' => 'entrada'], function() {
//        Route::get('',				'EntradaController@index');
//        Route::post('',				'EntradaController@store');
//    });


Route::resource('cadastro/cliente','ClienteController');
Route::resource('cadastro/fornecedor','FornecedorController');
Route::resource('cadastro/produto','ProdutoController');

Route::DELETE('cadastro/produto/{id}', 'ProdutoController@destroy');
Route::DELETE('cadastro/cliente/{id}', 'ClienteController@destroy');
Route::DELETE('cadastro/funcionario/{id}', 'FuncionarioController@destroy');
Route::DELETE('cadastro/fornecedor/{id}', 'FornecedorController@destroy');
Route::DELETE('acesso/usuario/{id}', 'UsuariosController@destroy');

//Route::post('{id}/edit', 	'ProdutoController@update');

Route::post('cadastro/produto/{id}/edit', 'ProdutoController@update');

Route::post('cadastro/cliente/{id}/edit','ClienteController@update');
Route::post('cadastro/fornecedor/{id}/edit','FornecedorController@update');
Route::post('acesso/usuario/{id}/edit','UsuariosController@update');

Route::post('cadastro/funcionario/{id}/edit','FuncionarioController@update');


Route::resource('cadastro/funcionario','FuncionarioController');
Route::resource('acesso/usuario','UsuariosController');
Route::resource('relatorio/venda','RelatorioVendaController');
Route::resource('relatorio/grafico/grafico','graficoController');
Route::resource('relatorio/vendasdiarias','VendasDiariasController');
Route::resource('home/inicio','InicioController');
Route::resource('cadastro/funcionario','FuncionarioController');
Route::resource('vendas/venda','VendaController');
Route::resource('imprimir/extrato','ImprimirController');

//Route::put('/{id}/edit','ProdutoController@update');

//Route::put('/edit/{id}','ProdutoController@update');
//Route :: post ('/ edit', 'ProdutoController@update');




//Route::delete('cadastro/produto','ProdutoController@destroy');
//route::GET('cadastro/produto/create','ProdutoController@create');

//Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
