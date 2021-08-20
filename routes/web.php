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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/jenis-vaksin', [App\Http\Controllers\JenisVaksinController::class, 'index'])->name('jenis-vaksin');
Route::post('/jenis-vaksin', [App\Http\Controllers\JenisVaksinController::class, 'store'])->name('jenis-vaksin-post');
Route::get('/vaksinator', [App\Http\Controllers\VaksinatorController::class, 'index'])->name('vaksinator');
Route::post('/vaksinator', [App\Http\Controllers\VaksinatorController::class, 'store'])->name('vaksinator-post');
// Route::resource('jenis-vaksin', JenisVaksinController::class);