<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChampionshipController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home.home');
    })->name('home');

    Route::get('/campeonatos', [ChampionshipController::class, 'index'])->name('championships');

    Route::get('/campeonatos/nuevo', [ChampionshipController::class, 'create'])->name('championships.create');

    Route::post('/campeonatos', [ChampionshipController::class, 'store'])->name('championships.store');

    Route::get('/campeonatos/{championship}/editar', [ChampionshipController::class, 'edit'])->name('championships.edit');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/login', [AuthController::class, 'login_view'])->name('login')->middleware('guest');

Route::post('/login', [AuthController::class, 'login'])->name('login.post')->middleware('guest');

Route::get('/{any}', function () {
    return redirect()->route('home');
})->where('any', '.*');
