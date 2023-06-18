<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OTPVerificationMail;


class VerificationController extends Controller
{
    public function verifyOTP(Request $request)
    {
        // Validate the input
        $request->validate([
            'otp' => 'required|digits:4',
        ]);

        // Check if the entered OTP matches the sent OTP
        $otp = $request->input('otp');
        $sentOTP = session('otp'); // Retrieve the sent OTP from the session (you'll set it in the next step)

        if ($otp == $sentOTP) {
            // Update the user's statusID to 'ST002' in the database
            // Auth::user()->statusId = 'ST002';

            $user = Auth::user();
            $user->statusID = 'ST002';
            $user->save();

            // Redirect to a success page or perform any other actions

            return redirect()->route('success');
        } else {
            // Refresh the page to hide the OTP form container
            return redirect()->back();
        }
    }


    public function sendOtp(Request $request)
    {
        // Generate a random 4-digit OTP
        $otp = mt_rand(1000, 9999);

        // Store the OTP in the session
        $request->session()->put('otp', $otp);

        // Send the OTP email to the authenticated user
        $user = Auth::user();
        Mail::to($user)->send(new OTPVerificationMail($otp));

        // Return a response to the AJAX request
        return response()->json(['message' => 'OTP email sent']);
    }
}
