<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthenticationController::class)->group(
    function () {
        Route::get("/", "login")->name("login");
        Route::get("/register", "register")->name("register");
        Route::post("/create-account", "createAccount")->name("create.account");
        Route::post("/verify", "verifyLoginCredentials")->name("verify.login");
    }
);
