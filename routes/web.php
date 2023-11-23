<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\MatchesController;
use App\Http\Controllers\KlasemenController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [Controller::class, 'index'])->name('dashboard');

Route::resource('/club', ClubController::class);
Route::resource('/matches', MatchesController::class);
Route::resource('/klasemen', KlasemenController::class);
// Route::get('/klasemen', [KlasemenController::class, 'klasemen'])->name('klasemen.index');