<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\POController;

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

Route::get('/po', [POController::class, 'index']);
Route::get('/po/create', [POController::class, 'create']);
Route::post('/po/store', [POController::class, 'store']);
Route::get('/po/{id}/edit', [POController::class, 'edit']);
Route::put('/po/{id}', [POController::class, 'update']);
Route::delete('/po/{id}', [POController::class, 'destroy']);