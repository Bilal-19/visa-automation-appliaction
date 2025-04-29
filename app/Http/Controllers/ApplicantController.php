<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index(){
        return view("Applicant.Index");
    }

    public function applyForVisa(){
return view("Applicant.ApplyForVisa");
    }
}
