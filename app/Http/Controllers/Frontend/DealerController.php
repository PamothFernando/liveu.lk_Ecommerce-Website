<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class DealerController extends Controller
{
    public function dealer()
    {
        return view('frontend.default.pages.registration.dealer-registration');
    }
    
    public function storeDealer(Request $request)
    {
        $request->validate([
            'dealerfullname' => 'required|string|max:255',
            'dealerphone'    => 'required|string|max:20',
            'dealercompany'  => 'required|string|max:255',
            'dealeraddress'  => 'required|string|max:255',
            'dealeremail'    => 'required|email',
            'g-recaptcha-response' => 'required', // ✅ required token
        ]);

        // ✅ Honeypot check
        if (!empty($request->dealer_extra)) {
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
            'dealerfullname', 
            'dealerphone', 
            'dealercompany', 
            'dealeraddress', 
            'dealeremail'
        ]);

        // ✅ Send email
        try {
            Mail::send('emails.dealer', $data, function($message) use ($data) {
                $message->to(['info@liveu.lk', 'rameez@liveu.lk', 'pradeep@liveu.lk'])
                        ->subject('New Dealer Registration from '.$data['dealerfullname']);
            });

            return back()->with('success', '✅ Message sent successfully!');
        } catch (\Exception $e) {
            return back()->with('error', '❌ Failed to send message. '.$e->getMessage());
        }
    }
}
