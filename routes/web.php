<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BukuController;

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
})->name('home');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::group(['prefix' => 'buku'], function () {
    Route::get('/', [BukuController::class, 'index'])->name('buku.index');
    Route::get('/buat', [BukuController::class, 'create'])->name('buku.create');
    Route::post('/', [BukuController::class, 'store']);

    Route::get('/edit/{id}', [BukuController::class, 'edit'])->name('buku.edit');
    Route::post('/edit/{id}', [BukuController::class, 'update'])->name('buku.update');

    Route::get('/hapus/{id}', [BukuController::class, 'destroy'])->name('buku.delete');
});
