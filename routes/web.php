<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;

Route::get("/", [AuthenticationController::class,"login"])->name("login");
Route::get("/register", [AuthenticationController::class,"register"])->name("register");
