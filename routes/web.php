<?php

use App\Http\Controllers\KotaController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\VillaController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\GaleriHalController;
use App\Http\Controllers\VillaroomController;
use App\Http\Controllers\WelcomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::resource('kota',KotaController::class);
Route::resource('image',ImageController::class);
Route::resource('villa',VillaController::class);
Route::resource('halaman',HalamanController::class);
Route::resource('galeri_hal',GaleriHalController::class);
Route::resource('/villaroom',VillaroomController::class);
Route::resource('/',WelcomeController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


