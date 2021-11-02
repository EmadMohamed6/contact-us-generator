<?php

namespace Emad\ContactUsPackage\Http\Controllers;

use App\Http\Controllers\Controller;
use Emad\ContactUsPackage\Mail\ContactMailable;
use Emad\ContactUsPackage\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact-us-package::contact');
    }

    public function send(Request $request)
    {
        //dd(config('contact.send_email_to'));
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name,$request->phone,$request->email));
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}
