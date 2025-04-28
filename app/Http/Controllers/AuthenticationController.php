<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Hash;

class AuthenticationController extends Controller
{
    public function login()
    {
        return view("Authentication.login");
    }

    public function register()
    {
        return view("Authentication.register");
    }

    public function createAccount(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",
        ]);

        $accountCreated = DB::table('users')->insert([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "created_at" => now()
        ]);

        if ($accountCreated) {
            toastr()->success("Account created.");
            return view("Authentication.login");
        } else {
            toastr()->info("Something went wrong. Please try again later");
            return redirect()->back();
        }
    }

    public function verifyLoginCredentials(Request $request)
    {
        $userCredentials = $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        $isVerify = Auth::attempt($userCredentials);
        if ($isVerify) {
            toastr()->success("Account verified");
            return redirect()->route("Home");
        } else {
            toastr()->info("Please enter correct credentials");
            return redirect()->back();
        }
    }

    public function logOut(){
        Auth::logout();
        return redirect()->back();
    }
}
