<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/berita/{slug}', [HomeController::class, 'newsSelect']);
Route::get('/berita-all', [HomeController::class, 'news']);
Route::get('/agenda/{slug}', [HomeController::class, 'agendaSelect']);
Route::get('/agenda-all', [HomeController::class, 'agenda']);
Route::get('/informasi-all', [HomeController::class, 'information']);
