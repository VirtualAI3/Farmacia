<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SesionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard.dashboard');
})->middleware('auth');

Route::get('/register',[RegistroController::class , 'create'])->name('registro.index');
Route::post('/register',[RegistroController::class , 'store'])->name('login.index');

Route::get('/login',[SesionController::class , 'create'])->name('login.index');
Route::post('/login',[SesionController::class , 'store'])->name('login.store');

Route::get('/logout',[SesionController::class , 'destroy'])->name('login.destroy');
