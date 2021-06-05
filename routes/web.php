<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\VolunteerController;
use App\Http\Controllers\Frontend\DonateController;
use App\Http\Controllers\Frontend\UsefulLinksController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'Frontend','as' => 'frontend.'], function () {

    //Home
    Route::get('/', [HomeController::class, 'home'])->name('home');

    //About
    Route::get('/about', [AboutController::class, 'about'])->name('about');

    //Contact Us
    Route::get('/contact-us', [ContactUsController::class, 'contactUs'])->name('contact.us');
    Route::post('/contact-us/create', [ContactUsController::class, 'create'])->name('contact.us.create');

    //Volunteer
    Route::get('/volunteer', [VolunteerController::class, 'volunteer'])->name('volunteer');
    Route::post('/volunteer/add', [VolunteerController::class, 'create'])->name('volunteer.create');

    //Donate
    Route::get('/donate', [DonateController::class, 'donate'])->name('donate');
    Route::post('/donate/intent', [DonateController::class, 'intent'])->name('donate.intent');
    Route::get('/make/donation/{amt}/{description}', [DonateController::class, 'makeDonation'])->name('make.donation');
    Route::post('/transaction', [DonateController::class, 'makePayment'])->name('make-payment');
    Route::get('/thank-you', [DonateController::class, 'thankYou'])->name('thank-you');

    //Useful Link
    Route::get('/useful-links', [UsefulLinksController::class, 'usefulLinks'])->name('useful.links');
    Route::get('/calgary-today', [UsefulLinksController::class, 'calgaryToday'])->name('calgary-today');
    Route::get('/what-calgarians-want', [UsefulLinksController::class, 'whatCalgariansWant'])->name('what-calgarians-want');
    Route::get('/calgary-that-works', [UsefulLinksController::class, 'calgaryThatWorks'])->name('calgary-that-works');

});

Route::group(['namespace' => 'Backend','middleware' => ['auth', 'verified'], 'as' => 'backend.'], function () {

    //Home
    Route::get('/home', [HomeController::class, 'home'])->name('home');


});


