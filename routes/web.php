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

Route::get('/', [App\Http\Controllers\LoginController::class, 'index'])->name('home');
Route::post('/', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::get('/logOut', [App\Http\Controllers\LoginController::class, 'getLogout'])->name('logOut');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'administrator', 'middleware' => 'auth'], function () {

    Route::group(['prefix' => ''], function () {
        Route::get('/',  [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    });

    Route::group(['prefix' => 'cliente'], function () {
        Route::get('/',  [App\Http\Controllers\Admin\ClientController::class, 'index'])->name('cliente.index');
        Route::get('/create',  [App\Http\Controllers\Admin\ClientController::class, 'create'])->name('cliente.create');
        Route::get('/edit',  [App\Http\Controllers\Admin\ClientController::class, 'edit'])->name('cliente.edit');
        Route::post('/create',  [App\Http\Controllers\Admin\ClientController::class, 'store'])->name('cliente.create.store');
        Route::post('/update',  [App\Http\Controllers\Admin\ClientController::class, 'updated'])->name('cliente.create.updated');
        Route::post('/activate',  [App\Http\Controllers\Admin\ClientController::class, 'activate'])->name('cliente.create.activate');
    });
    Route::group(['prefix' => 'punto'], function () {
        Route::get('/',  [App\Http\Controllers\Admin\PuntoParkingController::class, 'index'])->name('punto.index');
        Route::get('/create',  [App\Http\Controllers\Admin\PuntoParkingController::class, 'create'])->name('punto.create');
        Route::get('/edit',  [App\Http\Controllers\Admin\PuntoParkingController::class, 'edit'])->name('punto.edit');
        Route::post('/create',  [App\Http\Controllers\Admin\PuntoParkingController::class, 'store'])->name('punto.create.store');
        Route::post('/update',  [App\Http\Controllers\Admin\PuntoParkingController::class, 'updated'])->name('punto.create.updated');
        Route::post('/activate',  [App\Http\Controllers\Admin\PuntoParkingController::class, 'activate'])->name('punto.create.activate');
    });

});
