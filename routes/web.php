<?php

use App\Http\Controllers\SnapController;
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

// Route::get('/', function(){
//     return view('welcome');
// });
Route::get('/', [SnapController::class, 'index'])->name('snap.index');
// Route::get('/snap/{search}', [SnapController::class, 'index']);

