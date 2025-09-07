<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactUsMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsMail;

class ContactUsController extends Controller
{
    /**
     * Store contact us form data
     */
    public function store(Request $request)
    {
        // Validate form inputs first
        $request->validate([
            'name'         => 'required|string|max:255',
            'email'        => 'required|email|max:255',
            'phone'        => 'nullable|string|max:20',
            'support_for'  => 'nullable|string|max:255',
            'message'      => 'required|string|max:2000',
            'g-recaptcha-response' => 'required'
        ]);

        // reCAPTCHA validation
        $score = $this->recaptchaValidation($request->input('g-recaptcha-response'));

        if ($score < 0.5) { // Lower threshold to avoid blocking real users
            return back()->withErrors([
                'recaptcha' => localize('Google reCAPTCHA validation failed, please try again.')
            ])->withInput();
        }

        // Save message
        $msg = new ContactUsMessage();
        $msg->name        = $request->name;
        $msg->email       = $request->email;
        $msg->phone       = $request->phone;
        $msg->support_for = $request->support_for;
        $msg->message     = $request->message;
        $msg->save();

        // Send email notification
        $recipients = ['info@liveu.lk', 'sales@liveu.lk', 'pradeep@liveu.lk'];
        foreach ($recipients as $recipient) {
            Mail::to($recipient)->send(new ContactUsMail($msg));
        }

        // Success message
        flash(localize('Your message has been sent successfully!'))->success();
        return back();
    }

    /**
     * Validate Google reCAPTCHA v3
     */
    private function recaptchaValidation($recaptchaResponse)
    {
        $secret = env('RECAPTCHA_SECRET_KEY');

        $response = file_get_contents(
            "https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$recaptchaResponse}"
        );

        $result = json_decode($response, true);

        return isset($result['score']) ? (float) $result['score'] : 0;
    }
}
