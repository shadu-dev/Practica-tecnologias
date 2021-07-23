<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\materiasController;
use App\Http\Controllers\gradosController;
use App\Http\Controllers\alumnosController;

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


Route::apiResource('/materias', materiasController::class);
Route::get('/materias-all', [materiasController::class, 'getAll']);
Route::apiResource('/grados', gradosController::class);
Route::get('/grados-all', [gradosController::class, 'getAll']);
Route::apiResource('/alumnos', alumnosController::class);
Route::get('/alumnos-all', [alumnosController::class, 'getAll']);