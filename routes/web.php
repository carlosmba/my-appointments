<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpecialtyController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); // route('home')


//Specialty
Route::get('/specialties', [SpecialtyController::class, 'index']);
Route::get('/specialties/create', [SpecialtyController::class, 'create']);
Route::get('/specialties/{spacialty}/edit', [SpecialtyController::class, 'edit']);
Route::post('/specialties/store', [SpecialtyController::class, 'store']);
