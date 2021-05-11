<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsefulLinksController extends Controller
{
    public function usefulLinks()
    {
        return view('frontend.useful-links');
    }
}
