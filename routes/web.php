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

Auth::routes(['verify' => true]);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/efectuarventa', [App\Http\Controllers\EfectuarVentaController::class, 'index'])->name('efectuarventa');



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

