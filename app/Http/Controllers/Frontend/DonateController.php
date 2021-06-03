<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe;
use Session;

class DonateController extends Controller
{
    public function donate()
    {
        return view('frontend.donate');
    }

    public function intent(Request $request)
    {
        $amount = \Crypt::encrypt($request->amount * 100);

        $description = \Crypt::encrypt($request->description);

        return redirect(route('frontend.make.donation', [$amount, $description]));
    }

    public function makeDonation($amount, $description)
    {
        $amount = \Crypt::decrypt($amount)/100;

        $description = \Crypt::decrypt($description);

        return view('frontend.make-donation', compact('amount', 'description'));
    }

    public function makePayment(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $request->amount * 100,
                "currency" => "CAD",
                "source" => $request->stripeToken,
                "description" => "Donation to PCI",
        ]);

        Session::flash('success', 'Payment successfully made.');

        return back();
    }
}


