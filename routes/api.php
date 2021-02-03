<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformaticoController;
use App\Http\Controllers\OrdenadorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('informatico', InformaticoController::class, ['except'=>['create','edit']]);
Route::resource('ordenador', OrdenadorController::class, ['except'=>['create','edit']]);
//Route::get('io', [OrdenadorController::class, 'store'])->name('io');
