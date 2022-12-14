<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Mail;

class ContactUsFormController extends Controller
{
    // Create a Contact form
    public function createForm(Request $request)
    {
        return view('contact.index');
    }

    // Store contact form data
    public function ContactUsForm(Request $request)
    {
        // Form Validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Store data in database
        Contact::create($request->all());

        //  Send mail to admin
        \Mail::send('contact.mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ), function ($message) use ($request) {
            $message->from($request->email);
            $message->to('digambersingh126@gmail.com', 'Admin')->subject($request->get('subject'));
        });

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
