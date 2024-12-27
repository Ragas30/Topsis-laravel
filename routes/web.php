<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\loginController;
use App\Http\Controllers\kriteria\kriteriaController;
use App\Http\Controllers\dashboard\dashboardController;
use App\Http\Controllers\home\homeController;

//home
route::get('/', [homeController::class, 'index'])->name('home');

route::get('/login', [loginController::class, 'login'])->name('login');


//kriteria
route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
route::get('/inputKriteria', [kriteriaController::class, 'index'])->name('kriteria');
// Route::middleware('AdminSession')->group(function () {
// });