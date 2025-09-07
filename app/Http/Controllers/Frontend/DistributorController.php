<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class DistributorController extends Controller
{
    public function distributor()
    {
        return view('frontend.default.pages.registration.distributor-registration');
    }
    
    public function storeDistributor(Request $request)
    {
        $request->validate([
            'distributorfullname' => 'required|string|max:255',
            'distributorphone'    => 'required|string|max:20',
            'distributorcompany'  => 'required|string|max:255',
            'distributoraddress'  => 'required|string|max:255',
            'distributoremail'    => 'required|email',
            'g-recaptcha-response' => 'required', // ✅ required token
        ]);

        // ✅ Honeypot check
        if (!empty($request->distributor_extra)) {
            return back()->with('error', '❌ Spam detected.')->withInput();
        }

        // ✅ Verify Google reCAPTCHA v3
        try {
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret'   => env('RECAPTCHAV3_SECRET'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ]);

            $res = $response->json();

            if (!($res['success'] ?? false) || ($res['score'] ?? 0) < 0.5) {
                return back()->with('error', '⚠️ Human verification failed. Please try again.')->withInput();
            }
        } catch (\Exception $e) {
            return back()->with('error', '⚠️ Verification service error: '.$e->getMessage())->withInput();
        }

        // ✅ Collect form data
        $data = $request->only([
            'distributorfullname', 
            'distributorphone', 
            'distributorcompany', 
            'distributoraddress', 
            'distributoremail'
        ]);

        // ✅ Send email
        try {
            Mail::send('emails.distributor', $data, function($message) use ($data) {
                $message->to(['info@liveu.lk', 'rameez@liveu.lk', 'pradeep@liveu.lk'])
                        ->subject('New Distributor Registration from '.$data['distributorfullname']);
            });

            return back()->with('success', '✅ Message sent successfully!');
        } catch (\Exception $e) {
            return back()->with('error', '❌ Failed to send message. '.$e->getMessage());
        }
    }
}
