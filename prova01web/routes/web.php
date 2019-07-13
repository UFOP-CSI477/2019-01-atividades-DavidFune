<?php
use App\User;
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

Route::group(['middleware' => ['auth']], function () {
    
    
/*     if (Auth::user()->tipo_user==0) {
       # code...
    } else {
        # code...
        echo "Acesso negado";
    } */
    Route::get('inserir/tiposTrans','TipoController@create');
    Route::get('inserir/cliente','UserController@create');
    Route::post('inserir/salvar/tipoTrans','TipoController@store');
    Route::post('salvar/cliente','UserController@store');
    Route::get('listar/tiposTrans','TipoController@index');
    Route::get('listar/clientes','UserController@listarClientes');
    Route::get('listar/trans/cliente/{id}', 'UserController@transCliente');
    
    //###################Area do Cliente################################

    Route::post('nova/gravar/trans', 'clienteController@gravarTrans');
    Route::get('nova/trans', 'clienteController@createTrans');
    Route::get('minhas/trans', 'clienteController@index');
   

    
});

Route::get('/home', 'HomeController@index')->name('home');

