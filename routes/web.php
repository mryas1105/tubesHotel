<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\KatagoriController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FasilitasKamarController;
use App\Http\Controllers\FasilitasHotelController;
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

Route::get('/', [PageController::class,'index']);



Auth::routes();

Route::get('/reservasi', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::post('/reservasi', [PageController::class, 'pesanKamar'])->middleware('verified');
// Route::get('/penulis', 'PenulisController@index')->name('penulis.index');
Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // route untuk kamarcontroller
    Route::get('/admin/kamar', [KamarController::class, 'index']);
    Route::get('/admin/kamar/create', [KamarController::class, 'create']);
    Route::post('/admin/kamar/create', [KamarController::class, 'store']);
    Route::get('/admin/kamar/{kamar}', [KamarController::class, 'edit']);
    Route::put('/admin/kamar/{kamar}', [KamarController::class, 'update']);
    Route::delete('/admin/kamar/{kamar}', [KamarController::class, 'destroy']);


});
