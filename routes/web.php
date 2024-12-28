<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\home\homeController;
use App\Http\Controllers\auth\loginController;
use App\Http\Controllers\kriteria\kriteriaController;
use App\Http\Controllers\dashboard\dashboardController;

//home
route::get('/', [homeController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


//kriteria
route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
route::get('/inputKriteria', [kriteriaController::class, 'index'])->name('kriteria');
// Route::middleware('AdminSession')->group(function () {
// });