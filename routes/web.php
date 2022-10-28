<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VenderController;
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

Auth::routes(['verify' => true]);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');








Route::group(['middleware' => ['verified','permission:Vistaproducto']], function () {
    Route::resource('productos', App\Http\Controllers\productosController::class); 
});


Route::group(['middleware' => ['verified','permission:Vistausuario']], function () {
    Route::resource('users', App\Http\Controllers\UserController::class);
});



Route::group(['middleware' => ['verified','permission:Vistarole']], function () {
    Route::resource('roles', App\Http\Controllers\RoleController::class);
});




Route::group(['middleware' => ['verified','permission:Vistasucursal']], function () {
    Route::resource('sucursals', App\Http\Controllers\sucursalController::class);
});

Route::get("/ventas/ticket", 'App\Http\Controllers\VentasController@ticket')->name("ventas.ticket");
Route::get("/ventas", 'App\Http\Controllers\VentasController@index')->name("ventas.index");
Route::get('/vender', 'App\Http\Controllers\VenderController@index')->name("vender.index");
Route::post('/terminarOCancelarVenta', 'App\Http\Controllers\VenderController@terminarOCancelarVenta')->name("terminarOCancelarVenta");
Route::post('/productoDeVenta', 'App\Http\Controllers\VenderController@agregarProductoVenta')->name("agregarProductoVenta");
Route::delete('/productoDeVenta', 'App\Http\Controllers\VenderController@quitarProductoDeVenta')->name("quitarProductoDeVenta");
Route::resource('ventas', App\Http\Controllers\VentasController::class);
Route::resource('clientes', App\Http\Controllers\ClientesController::class);

