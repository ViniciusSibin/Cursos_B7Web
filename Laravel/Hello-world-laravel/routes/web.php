<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [SiteController::class, 'index']);
Route::get('/sair', [SiteController::class, 'exit']);
Route::get('/exercicio1', [SiteController::class, 'exercise1']);
Route::get('/exercicio2', [SiteController::class, 'exercise2']);
Route::get('/layout', [SiteController::class, 'layout']);