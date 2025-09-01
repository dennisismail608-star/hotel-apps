<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;


Route::get('/', function () {
    return view('welcome');
});

// get, post, put, delete (meelihat/read, insert, create, update, )
Route::get('belajar', function () {
    return "<h1>selamat datang di laravel</h1>";
});

route::get('belajar', [\App\Http\Controllers\BelajarController::class, 'index']);
route::get('login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
route::post('login_action', [\App\Http\Controllers\LoginController::class, 'loginAction'])->name('login_action');

route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
route::resource('user', \App\Http\Controllers\UserController::class);
route::resource('categories', \App\Http\Controllers\CategotiesController::class);
route::resource('room', \App\Http\Controllers\RoomController::class);
route::resource('reservation', \App\Http\Controllers\ReservationsController::class);

Route::get('get-room-by-category/{id}', [\App\Http\Controllers\ReservationsController::class, 'getRoomByCategory'])->name('get-room-by-category');

Route::get('callName', [\App\Http\Controllers\BelajarController::class, 'getCallName']);
Route::get('tambah', [\App\Http\Controllers\BelajarController::class, 'tambah'])->name('tambah');
Route::get('kurang', [\App\Http\Controllers\BelajarController::class, 'kurang'])->name('kurang');
Route::get('bagi', [\App\Http\Controllers\BelajarController::class, 'bagi'])->name('bagi');
Route::get('kali', [\App\Http\Controllers\BelajarController::class, 'kali'])->name('kali');
route::post('store_tambah', [\App\Http\Controllers\BelajarController::class, 'storeTambah'])->name('store_tambah');
route::post('store_kurang', [\App\Http\Controllers\BelajarController::class, 'storeKurang'])->name('store_kurang');
route::post('store_bagi', [\App\Http\Controllers\BelajarController::class, 'storeBagi'])->name('store_bagi');
route::post('store_kali', [\App\Http\Controllers\BelajarController::class, 'storeKali'])->name('store_kali');

Route::get('Tugas', [\App\Http\Controllers\TugasRuang::class, 'tugas'])->name('Tugas');
Route::get('kubus', [\App\Http\Controllers\TugasRuang::class, 'kubus'])->name('kubus');
Route::get('balok', [\App\Http\Controllers\TugasRuang::class, 'balok'])->name('balok');
Route::get('limas', [\App\Http\Controllers\TugasRuang::class, 'limas'])->name('limas');
Route::get('tabung', [\App\Http\Controllers\TugasRuang::class, 'tabung'])->name('tabung');
Route::get('bola', [\App\Http\Controllers\TugasRuang::class, 'bola'])->name('bola');

route::post('store_kubus', [\App\Http\Controllers\TugasRuang::class, 'storeKubus'])->name('store_kubus');
route::post('store_balok', [\App\Http\Controllers\TugasRuang::class, 'storeBalok'])->name('store_balok');
route::post('store_limas', [\App\Http\Controllers\TugasRuang::class, 'storeLimas'])->name('store_limas');
route::post('store_tabung', [\App\Http\Controllers\TugasRuang::class, 'storeTabung'])->name('store_tabung');
route::post('store_bola', [\App\Http\Controllers\TugasRuang::class, 'storeBola'])->name('store_bola');



// Route::get("guest_information", [\App\Http\Controllers\GuestController::class, "index"])->name('guest_information.index');
// Route::get("guest_information", [\App\Http\Controllers\GuestController::class, "create"])->name('guest_information');
// Route::post("guestinformation/store", [GuestController::class, "store"])->name('guestinformation.store');
// Route::get("guestinformation/edit/{id}", [GuestController::class, "edit"])->name("guestinformation.edit");
