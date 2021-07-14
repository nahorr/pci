<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe;
use App\Models\User;
use Illuminate\Notifications\Notifiable;
use App\Notifications\DonationSuccessful;
use App\Notifications\DonationNotification;

class DonateController extends Controller
{
    public function donate()
    {
        return view('frontend.donate');
    }

    public function intent(Request $request)
    {
        $name = \Crypt::encrypt($request->name);

        $email = \Crypt::encrypt($request->email);

        $amount = \Crypt::encrypt($request->amount * 100);

        $note = \Crypt::encrypt($request->note);

        return redirect(route('frontend.make.donation', [$amount, $note, $name, $email]));
    }

    public function makeDonation($amount, $note, $name, $email)
    {
        $amount = \Crypt::decrypt($amount)/100;

        $note = \Crypt::decrypt($note);

        $name = \Crypt::decrypt($name);

        $email = \Crypt::decrypt($email);

        return view('frontend.make-donation', compact('amount', 'note', 'name', 'email'));
    }

    public function makePayment(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $request->amount * 100,
                "currency" => "CAD",
                "source" => $request->stripeToken,
                "description" => "From: ".$request->name." (".$request->email.")",
        ]);

        $donation_data = collect(array(

            'name' => $request->name,
            'email' => $request->email,
            'amount' => $request->amount,
            'note' => $request->note,
    		'created_at' => date('Y-m-d H:i:s'),
        ));

        $site_admin = User::where('id', 1)->first();

        $site_admin->notify(new DonationSuccessful($donation_data));

        (new User)->forceFill([
                        'name' => $request->name,
                        'email' => $request->email,
                    ])->notify(new DonationNotification($donation_data));

        return redirect(route('frontend.thank-you'));
    }

    public function thankYou()
    {

        return view('frontend.thank-you');
    }
}


