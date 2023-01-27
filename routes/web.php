<?php

use App\Http\Controllers\KotaController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\VillaController;
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
Route::get('/villaroom', function () {
    return view('villaroom');
});

Route::resource('kota',KotaController::class);
Route::resource('image',ImageController::class);
Route::resource('villa',VillaController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


