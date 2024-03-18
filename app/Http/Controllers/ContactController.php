<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Mail\ContactMeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;
use App\Http\Requests\ContactMeRequest;

class ContactController extends Controller
{
    public function index() {
        return Inertia::render('User/Contact');
    }

    public function submit(ContactMeRequest $request) {
        // Concatenate app name and sender's name
        $fromName = config('app.name') . ' - ' . $request->email;
        $senderEmail = $request->email;

        // Temporarily set MAIL_FROM_NAME and MAIL_FROM_ADDRESS to the concatenated value
        Config::set('mail.from.name', $fromName);
        Config::set('mail.from.address', $senderEmail);

        Mail::to('gytguz@gmail.com')->send(new ContactMeMail($request->name, $request->email, $request->message));

        // Restore the original MAIL_FROM_NAME and MAIL_FROM_ADDRESS value
        Config::set('mail.from.name', env('MAIL_FROM_NAME'));
        Config::set('mail.from.address', env('MAIL_FROM_ADDRESS'));

        return redirect('/')->with('message', 'Your message was sent successfully!');
    }
}
