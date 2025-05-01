<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class ApplicantController extends Controller
{
    public function index()
    {
        return view("Applicant.Index");
    }

    public function applyForVisa()
    {
        if (Auth::check()) {
            return view("Applicant.ApplyForVisa");
        } else {
            return view("Authentication.login");
        }
    }

    public function createApplicant(Request $request)
    {
        if ($request->file("profilePicture")) {
            $imagePath = time() . '.' . $request->profilePicture->getClientOriginalExtension();
            $request->profilePicture->move("Applicants/Profile", $imagePath);
        }

        $isApplicatedSubmitted = DB::table('applicants')->insert([
            "profilePicture" => $imagePath,
            "fullName" => $request->fullName,
            "dateOfBirth" => $request->dateOfBirth,
            "age" => $request->age,
            "nationality" => $request->nationality,
            "gender" => $request->gender,
            "passportIssueCountry" => $request->passportIssueCountry,
            "passportIssueDate" => $request->passportIssueDate,
            "passportDateExpiry" => $request->passportDateExpiry,
            "maritalStatus" => $request->maritalStatus,
            "phoneNumber" => $request->phoneNumber,
            "occupation" => $request->occupation,
            "residenceAddress" => $request->residenceAddress,
            "travelDate" => $request->travelDate,
            "stateOfEntry" => $request->stateOfEntry,
            "lengthOfStay" => $request->lengthOfStay,
            "visaType" => $request->visaType,
            "travelPurpose" => $request->travelPurpose,
            "userID" => Auth::user()->id,
            "created_at" => now()
        ]);

        if ($isApplicatedSubmitted) {
            toastr()->success("We've successfully received your application.");
        } else {
            toastr()->info("Something went wrong. Please try again later.");
        }
        return redirect()->back();
    }

    public function myApplications()
    {
        if (Auth::check()) {
            $fetchApplications = DB::table("applicants")->
                where("userID", "=", Auth::user()->id)->
                limit(10)->get();
            return view("Applicant.MyApplications", with(compact('fetchApplications')));
        } else {
            return view("Authentication.login");
        }
    }

    public function FAQs()
    {
        return view("Applicant.FAQs");
    }

    public function contactUs()
    {
        return view("Applicant.ContactUs");
    }

    public function createEnquiry(Request $request)
    {
        $isCreated = DB::table("enquiry")->insert([
            "name" => $request->userName,
            "email" => $request->userEmail,
            "message" => $request->userMessage,
            "created_at" => now()
        ]);

        if ($isCreated) {
            toastr()->success("We've received your query. Our team will contact you soon.");
        } else {
            toastr()->info("Something went wrong. Please try again later.");
        }
        return redirect()->back();
    }
}
