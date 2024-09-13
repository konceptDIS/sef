<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Send email
        Mail::send([], [], function ($message) use ($request) {
            $message->to('help@samempowermentfoundation.org') // Change to your email
                    ->subject(' Contact Form Submission')
                    ->setBody('FirstName: ' . $request->name . "\n" . 'LastName: ' . $request->lastname . "\n" . 'Phone: ' . $request->phone . "\n" . 'Email: ' . $request->email . "\n" . 'Message: ' . $request->message);
        });

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message was sent successfully!');
    }
}
