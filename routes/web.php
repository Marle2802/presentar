<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\RolController;




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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/Usuarios', [UserController::class, 'index'])->name('ListUser');
Route::post('user/guardar', [UserController::class, 'store'])->name('user.store');

Route::get('/roles', [RolController::class, 'index'])->name('rolesIndex');

Route::post('roles/guardar', [ RolController::class,'store'])->name('rol.store');
Route::put('roles/{rol}/actualizar', [RolController::class, 'update'])->name('rolUpdate');


Route::get('/recomendaciones', function () {
    return view('recomendaciones');
});

Route::get('/ayudas', function () {
    return view('ayuda');
});

Route::resource('domos', App\Http\Controllers\DomoController::class);
Route::resource('caracteristicas', App\Http\Controllers\CaracteristicaController::class);

