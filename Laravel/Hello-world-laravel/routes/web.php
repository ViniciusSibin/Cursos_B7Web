<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index']);
Route::get('/sair', [SiteController::class, 'exit']);
Route::get('/exercicio1', [SiteController::class, 'exercise1']);
Route::get('/exercicio2', [SiteController::class, 'exercise2']);
Route::get('/layout', [SiteController::class, 'layout']);