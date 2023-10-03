<?php

use App\Http\Controllers\AirlineController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/airline', [AirlineController::class, 'index']);
Route::get('/api/airline/{id}', [AirlineController::class, 'show']);
Route::post('/api/airline', [AirlineController::class, 'store']);
Route::put('/api/airline/{id}', [AirlineController::class, 'update']);
Route::delete('/api/airline/{id}', [AirlineController::class, 'delete']);

Route::get('/airline/list', [AirlineController::class, 'listView']);
Route::get('/airline/new', [AirlineController::class, 'newView']);
Route::get('/airline/edit/{id}', [AirlineController::class, 'editView']);
Route::get('/airline/delete', [AirlineController::class, 'deleteView']);
