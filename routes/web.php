<?php

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthenticationController::class)->group(
    function () {
        Route::get("/login", "login")->name("login");
        Route::get("/log-out", "logOut")->name("logOut");
        Route::get("/register", "register")->name("register");
        Route::post("/create-account", "createAccount")->name("create.account");
        Route::post("/verify", "verifyLoginCredentials")->name("verify.login");
    }
);

Route::controller(ApplicantController::class)->group(
    function () {
        Route::get("/", "index")->name("Home");
        Route::get("/apply-for-visa", "applyForVisa")->name("ApplyForVisa");
        Route::post("/create-applicant", "createApplicant")->name("CreateApplicant");
    }
);
