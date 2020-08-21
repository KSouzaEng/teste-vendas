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

Route::get('/','RelatoriosController@index')
->name('listar_relatorio');


//PRODUTOS

Route::get('/produtos', 'ProdutosController@index')->name('listar_produtos');
Route::get('/produtos/criar', 'ProdutosController@create')->name('form_criar_produto');
Route::post('/produtos/criar', 'ProdutosController@store');  //salvar dados do formulario no banco
Route::post('/produtos/{id}', 'ProdutosController@destroy')->name('remover_produto');
Route::get('/produtos/{id}/edit', 'ProdutosController@edit')->name('editar_produto');
Route::post('/produtos/altera/{id}', 'ProdutosController@update')->name('update_produto');

// USUÁRIOS


Route::get('/usuarios', 'UsuariosController@index')
    ->name('listar_usuarios');
Route::get('/usuarios/criar', 'UsuariosController@create')
    ->name('form_criar_usuarios');
Route::post('/usuarios/criar', 'UsuariosController@store');

Route::post('/usuarios/remover/{id}', 'UsuariosController@destroy')
    ->name('remover_usuario');;

Route::get('/usuarios/editar/{id}', 'UsuariosController@edit')
    ->name('editar_usuarios');

Route::post('/usuarios/altera/{id}', 'UsuariosController@update')
    ->name('update_usuarios');


// VENDAS

Route::get('/vendas', 'VendasController@index')
    ->name('listar_vendas');
Route::get('/vendas/criar', 'VendasController@create')
    ->name('form_criar_vendas');

Route::post('/vendas/criar', 'VendasController@store')
    ->name('criar_venda');


// RELATÓRIOS
Route::get('/relatorios', 'RelatoriosController@index')
->name('listar_relatorio');


Route::get('/relatoriosPDF', function(){
    $pdf = PDF::loadView('relatorios.indexPDF');
    return $pdf->download('relatorio.pdf');
});

//CLIENTES

Route::get('/clientes', 'ClienteController@index')->name('listar_clientes');
Route::get('/clientes/criar', 'ClienteController@create')->name('form_criar_cliente');
Route::post('/clientes/criar', 'ClienteController@store');
Route::get('/clientes/{id}/edit', 'ClienteController@edit')->name('editar_cliente');
Route::put('/clientes/{id}', 'ClienteController@update')->name('cliente_update');
Route::delete('/clientes/{id}','ClienteController@destroy')->name('cliente_delete');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


