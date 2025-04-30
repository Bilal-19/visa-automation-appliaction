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

    public function getApplicants(Request $request)
    {
        if ($request->search) {
            $fetchApplicants = DB::table("applicants")->
                where("fullName", "like", "%$request->search%")->
                orWhere("nationality", "like", "%$request->search%")->
                orWhere("lengthOfStay", "like", "%$request->search%")->
                orderBy("travelDate")->
                get();
        } else {
            $fetchApplicants = DB::table("applicants")->
                orderBy("travelDate")->
                get();
        }
        return view("Admin.VisaApplicants", with(compact("fetchApplicants")));
    }

    public function getApplicationStatus($id)
    {
        $findRecord = DB::table("applicants")->
            where("id", "=", $id)->
            first();
        $applicantStatus = $findRecord->status;
        return $applicantStatus;
    }

    public function approvedVisaApplication($id)
    {
        $applicantStatus = $this->getApplicationStatus($id);

        if ($applicantStatus !== 'approved') {
            $update = DB::table("applicants")->
                where("id", "=", $id)->
                update([
                    "status" => "approved",
                    "updated_at" => now()
                ]);
            if ($update) {
                toastr()->success("Visa of selected applicant is approved.");
            }
        } else {
            toastr()->info("Visa already approved.");
        }
        return redirect()->back();
    }

    public function rejectVisaApplication($id)
    {
        $applicantStatus = $this->getApplicationStatus($id);

        if ($applicantStatus !== 'rejected') {
            $update = DB::table("applicants")->
                where("id", "=", $id)->
                update([
                    "status" => "rejected",
                    "updated_at" => now()
                ]);
            if ($update) {
                toastr()->success("Visa of selected applicant is rejected.");
            }
        } else {
            toastr()->info("Visa already been rejected.");
        }
        return redirect()->back();
    }
}
