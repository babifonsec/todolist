<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('home');
});

Route::get('/crialista', function () {
    return view('lista.create');
});

Route::get('/tarefa', function () {
    return view('tarefa.create');
});

Route::get('/lista', function () {
    return view('tarefa.index');
});

Auth::routes();

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
