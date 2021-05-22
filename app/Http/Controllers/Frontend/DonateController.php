<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function donate()
    {
        return view('frontend.donate');
    }

    public function payment(Request $request)
    {

        $amount = $request->amount * 100;

        $description = $request->description;

        return view('frontend.donate.payment', compact('amount', 'description'));
    }
}
