<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatamahasiswaController;
use App\Http\Controllers\KRSController;

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
    return view('mahasiswa');
});

Route::prefix('mahasiswa')->group( function ()  {
    
    Route::get('/pendaftaran', function() {
        return "Ini adalah halaman pendaftaran";
    })->name('home');
    Route::get('/ujian', function() {
        return "Ini adalah halaman ujian";
    })->name('home');
    Route::get('/nilai', function() {
        return "Ini adalah halaman nilai";
    })->name('home');
});

Route::prefix('dosen')->group(function () {     
    Route::get('/profile', function () {
        return view('v_profile'); 
    })->name('profile');
    Route::get('/data_pengampu', function () {
        return view('v_ampu'); 
    })->name('pengampu');
});