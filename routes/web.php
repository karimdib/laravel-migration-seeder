<?php

use App\Http\Controllers\TrainsController;
use App\Models\train;
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

Route::get('/ciao', function () {
    return 'ciao';
});


Route::get('/trains', [TrainsController::class, 'index']);
