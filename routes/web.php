<?php

use App\Http\Controllers\CandidateController;
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

Route::get('/', [CandidateController::class, 'index']);

Route::get('/details/{id}', [CandidateController::class, 'show']);

Route::get('/main2', function () {
    return view('main2');
});

Route::get('/finish', function () {
    return view ('finish');
});

Route::get('/stats', function () {
    return view ('stats');
});

//Route::get('/', ['main']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
