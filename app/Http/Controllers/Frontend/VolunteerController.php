<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Volunteer;
use Illuminate\Notifications\Notifiable;
use App\Notifications\VolunteerFormSubmitted;
use App\Models\User;

class VolunteerController extends Controller
{
    use Notifiable;

    public function volunteer()
    {
        return view('frontend.volunteer');
    }

    public function create(Request $request)
    {
        $this->validate(request(), [

    		'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'pcode' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'help' => 'required',
            'day' => 'required',
            'time' => 'required',
    	]);

       $volunteer =  Volunteer::insert([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'city' => $request->city,
            'pcode' => $request->pcode,
            'gender' => $request->gender,
            'email' => $request->email,
            'phone' => $request->phone,
            'help' => $request->help,
            'day' => $request->day,
            'time' => $request->time,
            'feedback' => $request->feedback,
    		'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
    	]);

        $volunteer = collect(array(

            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'city' => $request->city,
            'pcode' => $request->pcode,
            'gender' => $request->gender,
            'email' => $request->email,
            'phone' => $request->phone,
            'help' => $request->help,
            'day' => $request->day,
            'time' => $request->time,
            'feedback' => $request->feedback,
    		'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),

        ));

        $site_admin = User::where('id', 1)->first();

        $site_admin->notify(new VolunteerFormSubmitted($volunteer));


        return back()->with('success', 'Form Submitted successfully!');
    }
}
