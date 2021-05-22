<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ContactFormSubmitted;
use App\Models\ContactUs;
use App\Models\User;


class ContactUsController extends Controller
{
    use Notifiable;

    public function contactUs()
    {
        return view('frontend.contact-us');
    }

    public function create(Request $request)
    {

        $this->validate(request(), [

    		'fullname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone' => 'required',
            'msg' => 'required',
    	]);

       ContactUs::insert([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'msg' => $request->msg,
    		'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
    	]);

        $contact_us = collect(array(

            'fullname' => $request->fullname,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'msg' => $request->msg,
    		'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),

        ));

        $site_admin = User::where('id', 1)->first();

        $site_admin->notify(new ContactFormSubmitted($contact_us));



        return back()->with('success', 'Form Submitted successfully!');
    }
}
