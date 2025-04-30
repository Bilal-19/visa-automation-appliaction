<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view("Admin.Dashboard");
    }

    public function getApplicants()
    {
        $fetchApplicants = DB::table("applicants")->get();
        return view("Admin.VisaApplicants", with(compact("fetchApplicants")));
    }
}
