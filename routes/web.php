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
    });


});
