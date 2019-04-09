<?php

namespace Bojra\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Bojra\Contact\Mail\ContactMail;
use Bojra\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {

        $contact = Contact::create($request->all());

        Mail::to(config('contact.send_email_to'))->send(new ContactMail($contact));

        return redirect()->route('contact');
    }

}
