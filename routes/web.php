<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\loginController;
use App\Http\Controllers\dashboard\dashboardController;

route::get('/login', [loginController::class, 'login'])->name('login');
route::get('/', [dashboardController::class, 'index'])->name('dashboard');
