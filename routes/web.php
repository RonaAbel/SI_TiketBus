<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KelasController;

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

route::get('/home',[HomeController::class,'halamanhome'])->name('home');

//Jalur Login
route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
route::get('/logout',[LoginController::class,'logout'])->name('logout');

//Jalur Registrasi
route::get('/registrasi',[RegisterController::class,'halamanregister'])->name('registrasi');

//Jalur Data Kelas
route::get('/Data-kelas',[KelasController::class,'halamankelas'])->name('Data-kelas');
route::get('/Create-kelas',[KelasController::class,'create'])->name('Create-kelas');
route::post('/Simpan-kelas',[KelasController::class,'store'])->name('Simpan-kelas');
route::get('/Edit-kelas/{id}',[KelasController::class,'edit'])->name('Edit-kelas');
route::post('/Update-kelas/{id}',[KelasController::class,'update'])->name('Update-kelas');
route::get('/Delete-kelas/{id}',[KelasController::class,'destroy'])->name('Delete-kelas');
route::get('/Cetak-kelas',[KelasController::class,'Cetak'])->name('Cetak-kelas');