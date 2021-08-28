<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Models\User;

class VerificationController extends Controller
{
     public function verifyEmailView()
    {
        // we use middleware verify to track verified route in webrouter // route profile-client
         return view('auth.verify-email');
    }

    public function handleVerifyLinkClick(EmailVerificationRequest $request)
    {
            $request->fulfill();
            return redirect()->route('profile-client');
    }

    public function newVerifyEmailLink(Request $request)
    {
           $request->user()->sendEmailVerificationNotification();
           return back()->with('message', 'Verification link sent!');
    }
}
