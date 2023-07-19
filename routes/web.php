<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;

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
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(KelurahanController::class)->prefix('kelurahan')->group(function () {
        Route::get('', 'index')->name('kelurahan');
        Route::get('create', 'create')->name('kelurahan.create');
        Route::post('store', 'store')->name('kelurahan.store');
        Route::get('show/{id}', 'show')->name('kelurahan.show');
        Route::get('edit/{id}', 'edit')->name('kelurahan.edit');
        Route::put('edit/{id}', 'update')->name('kelurahan.update');
        Route::delete('destroy/{id}', 'destroy')->name('kelurahan.destroy');
    });

    Route::controller(PasienController::class)->prefix('pasien')->group(function () {
        Route::get('', 'index')->name('pasien');
        Route::get('create', 'create')->name('pasien.create');
        Route::post('store', 'store')->name('pasien.store');
        Route::get('show/{id_pasien}', 'show')->name('pasien.show');
        Route::get('edit/{id_pasien}', 'edit')->name('pasien.edit');
        Route::put('edit/{id_pasien}', 'update')->name('pasien.update');
        Route::delete('destroy/{id_pasien}', 'destroy')->name('pasien.destroy');
    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});
