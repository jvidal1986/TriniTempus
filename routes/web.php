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

//PARTE PÚBLICA
Route::get('/', function () {
    return view('index');
});

//LLeva a la página de Login.
Route::get('/login',
    [App\Http\Controllers\LoginController::class,'frmLogeo'])
    ->name('login');

//Comprueba si el usuario está logueado.
Route::post('/login',
    [App\Http\Controllers\LoginController::class,'authenticate']);

    //Para que el usuario se deslogueee
Route::get('/logout',
    [App\Http\Controllers\LoginController::class,'logout']);

    Route::get('/registro',[
        \App\Http\Controllers\UserController::class,'mostrarFormulario']);

    //Página para que el usuuario se registre.
Route::post('usuarios/registro',[
    \App\Http\Controllers\UserController::class,'registrarUsuario']);

  Route::get('/ofertas',[
        \App\Http\Controllers\OfertasController::class,'mostrarPaginaOfertas']);

Route::get('/contacto',  [\App\Http\Controllers\ContactoController::class,'mostrarPaginaContacto']);
Route::post('/contacto',  [\App\Http\Controllers\ContactoController::class,'registrarMensajeContacto']);

Route::get('/informacion', [\App\Http\Controllers\ContactoController::class,'mostrarPaginaInformacion']);




//PARTE USUARIO
Route::get('usuarios/{id_Usuario}/perfil', [\App\Http\Controllers\UserController::class,'mostrarPerfil'])->middleware('auth');
Route::get('usuarios/{id_Usuario}/mensajes', [\App\Http\Controllers\UserController::class,'mostrarPerfil'])->middleware('auth');
Route::get('usuarios/{id_Usuario}/servicios',  [\App\Http\Controllers\UserController::class,'mostrarServicios'])->middleware('auth');
Route::get('usuarios/{id_Usuario}/buscador', [\App\Http\Controllers\UserController::class,'mostrarBuscador'])->middleware('auth');
Route::get('usuarios/{id_Usuario}/ofertas',  [\App\Http\Controllers\UserController::class,'mostrarOfertas'])->middleware('auth');

//PARTE ADMINISTRADOR

Route::get('usuarios/{id_Usuario}/index', 'Auth\AuthController@getLogin')->middleware('auth');
Route::get('usuarios/{id_Usuario}/categoria', 'Auth\AuthController@getLogin')->middleware('auth');
Route::get('usuarios/{id_Usuario}/mensajes', 'Auth\AuthController@getLogin')->middleware('auth');


