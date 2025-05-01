<?php

namespace App\Http\Controllers;
use Hash;
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
                paginate(10);
        } else {
            $fetchApplicants = DB::table("applicants")->
                orderBy("travelDate")->
                paginate(10);
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

    public function approveVisaApplicant(Request $request)
    {
        if ($request->search) {
            $fetchApprovedApplicants = DB::table("applicants")->
                whereNotIn("status", ["rejected", "pending"])->
                where("fullName", "like", "%$request->search%")->
                orWhere("nationality", "like", "%$request->search%")->
                orWhere("lengthOfStay", "like", "%$request->search%")->
                orderBy("travelDate")->
                paginate(10);
        } else {
            $fetchApprovedApplicants = DB::table("applicants")->
                orderBy("travelDate")->
                where("status", "=", "approved")->
                paginate(10);
        }
        return view("Admin.ApproveApplicants", with(compact("fetchApprovedApplicants")));
    }

    public function getRejectedVisaApplicants(Request $request)
    {
        if ($request->search) {
            $fetchApplicants = DB::table("applicants")->
                whereNotIn("status", ["approved", "pending"])->
                where("fullName", "like", "%$request->search%")->
                orWhere("nationality", "like", "%$request->search%")->
                orWhere("lengthOfStay", "like", "%$request->search%")->
                orderBy("travelDate")->
                paginate(10);
        } else {
            $fetchApplicants = DB::table("applicants")->
                orderBy("travelDate")->
                where("status", "=", "rejected")->
                paginate(10);
        }
        return view("Admin.RejectedApplicants", with(compact("fetchApplicants")));
    }

    public function getCustomerEnquiries(Request $request)
    {
        if ($request->search) {
            $fetchEnquiries = DB::table("enquiry")->
                where("name", "like", "%$request->search%")->
                orWhere("email", "like", "%$request->search%")->
                paginate(10);
        } else {
            $fetchEnquiries = DB::table("enquiry")->paginate(10);
        }
        return view("Admin.CustomerQueries", with(compact("fetchEnquiries")));
    }

    public function registeredUser(Request $request)
    {
        if ($request->search) {
            $fetchUsers = DB::table("users")->
                where("name", "like", "%$request->search%")->
                orWhere("email", "like", "%$request->search%")->
                paginate(10);
        } else {
            $fetchUsers = DB::table("users")->paginate(10);
        }
        return view("Admin.RegisteredUser", with(compact("fetchUsers")));
    }

    public function resetPassword($id)
    {
        $isReset = DB::table('users')->update([
            "password" => Hash::make("12345678"),
            "updated_at" => now()
        ]);

        if ($isReset) {
            toastr()->success("Password reset successfully.");
        } else {
            toastr()->info("Something went wrong. Please try again later.");
        }
        return redirect()->back();
    }

    public function deleteAccount($id)
    {
        $isDeleted = DB::table('users')->
            where('id', '=', $id)->
            delete();
        if ($isDeleted){
            toastr()->success("Account deleted successfully.");
        } else {
            toastr()->info("Something went wrong. Please try again later.");
        }
        return redirect()->back();
    }
}
