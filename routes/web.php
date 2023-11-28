<?php

use App\Http\Controllers\AtmController;
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

#Route::get('phpatm', function() {
#    return view('atm');
#});

Route::get('phpatm', [AtmController::class, 'render']);

Route::get('phplogin', function() {
    return view('login');
});

// Route::get('phplogin', [LoginController::class, 'render']);

Route::get('phpregister', function() {
    return view('register');
});
