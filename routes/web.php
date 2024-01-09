<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
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

Route::get('/register', [AuthenticationController::class, 'register'])->name("register");
Route::get('/login', [AuthenticationController::class, 'login'])->name("login");
Route::post('/login', [AuthenticationController::class, 'authenticate']);
Route::get('/logout', [AuthenticationController::class, 'logout'])->name("logout");
Route::get('/', [DashboardController::class, 'index'])->name("dashboard")->middleware('auth');

Route::resource('students', StudentController::class)->middleware('auth');
Route::resource('authentication', AuthenticationController::class);
