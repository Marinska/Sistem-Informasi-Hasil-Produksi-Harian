<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\BuatLaporanController;
use App\Http\Controllers\DetailLaporanController;
use App\Http\Controllers\PrintController;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/home', function () {
        return view('home', [
        "title" => "Home",
        "active" => "Home"
    ]);
});

Route::get('/buatlaporan', [BuatLaporanController::class, 'index'])->middleware('auth');
Route::post('/buatlaporan', [BuatLaporanController::class, 'store']);

Route::get('/logout', function () {
    return view('index', [
        'title' => 'Login'
    ]);
});
 
Route::get('/laporan', [LaporanController::class, 'index']);
Route::delete('/laporan/{id}', [LaporanController::class, 'drop']);


Route::get('/isilaporan/{id}', [DetailLaporanController::class, 'show']);
Route::post('/isilaporan', [DetailLaporanController::class, 'insert']);
Route::put('/isilaporan/{nopo}', [DetailLaporanController::class, 'update']);
Route::delete('/isilaporan/{nopo}', [DetailLaporanController::class, 'delete']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/print/{id}', [PrintController::class, 'index']);
