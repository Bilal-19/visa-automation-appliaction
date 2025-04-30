<?php

use App\Http\Controllers\AdminController;
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
        Route::get("/my-applications", "myApplications")->name("MyApplications");
        Route::get("/faqs", "FAQs")->name("FAQs");
        Route::get("/contact-us", "contactUs")->name("ContactUs");
        Route::post("/create-enquiry", "createEnquiry")->name("CreateEnquiry");

    }
);

Route::controller(AdminController::class)->group(
    function () {
        Route::get("/admin-dashboard", "index")->name("Dashboard");
        Route::get("/visa-applicants", "getApplicants")->name("Visa.Applicants");
        Route::get("/approved-applicants", "approveVisaApplicant")->name("Visa.ApprovedApplicants");
        Route::get("/rejected-applicants", "getRejectedVisaApplicants")->name("Visa.RejectedApplicants");
        Route::get("/approve-visa-applicantion/{id}", "approvedVisaApplication")->name("Aproved.VisaApplication");
        Route::get("/reject-visa-applicantion/{id}", "rejectVisaApplication")->name("Reject.VisaApplication");

    }
);
