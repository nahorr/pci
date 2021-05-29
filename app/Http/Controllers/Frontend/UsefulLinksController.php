<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsefulLinksController extends Controller
{
    public function calgaryToday()
    {
        return view('frontend.useful-links.calgary-today');
    }

    public function whatCalgariansWant()
    {
        return view('frontend.useful-links.what-calgarians-want');
    }

    public function calgaryThatWorks()
    {
        return view('frontend.useful-links.calgary-that-works');
    }
}
