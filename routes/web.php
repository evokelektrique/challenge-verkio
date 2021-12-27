<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LotteryController;

Route::get('/', function () {
    return view("index");
})->name("home");

Route::get('login', [LoginController::class, "index"])->name('login');
Route::post('login', [LoginController::class, "create"])->name('login.create');
Route::get('logout', [LoginController::class, "logout"])->name('logout');

Route::name("register.")->group(function() {
    Route::get("/register", [RegisterController::class, "index"])
    ->name("index");

    Route::post("/register/create", [RegisterController::class, "create"])
    ->name("create");
});


Route::group(['middleware' => 'auth', "admin"], function () {
    // Index
    Route::get("/dashboard", [DashboardController::class, "index"])
    ->name("dashboard");

    // Users
    Route::get("/dashboard/new_user", [DashboardController::class, "new_user"])
    ->name("dashboard.new_user");

    Route::post("/dashboard/new_user", [UsersController::class, "create"])
    ->name("dashboard.new_user_create");

    // Lottery
    Route::get("/dashboard/lottery", [DashboardController::class, "lottery"])
    ->name("dashboard.lottery");

    Route::post("/dashboard/lottery", [LotteryController::class, "create"])
    ->name("dashboard.lottery.create");
});

