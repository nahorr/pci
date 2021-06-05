@extends('layouts.app')
@section('content')

<section class="g-bg-gray-light-v5 mt-5">
    <div class="container g-py-100">
        <div class="row justify-content-md-center">
            <div class="col-md-6 col-lg-6 g-mb-90">
                <h3 class="h4">
                    Ways to Donate:
                </h3>
                <p class="lead g-mb-20 g-mb-0--md">
                    <ol class="float-left h5">
                        <li>Interact Transfer to prospercalgaryinitiative@gmail.com</li>
                        <li>Online at prospercalgaryinitiative.com</li>
                        <li>Cash - Call 4033834817</li>
                        <li> Cheque - Payable to Prosper Calgary Initiative</li>
                    </ol>
                </p>
            </div>
            <div class="col-md-6 col-lg-6">
                <!-- Join Form -->
                <form class="g-bg-white rounded g-px-30 g-py-40" method="POST" action="{{route('frontend.donate.intent')}}">
                    @csrf()
                    <div class="text-center">
                        <a class="navbar-brand g-pl-15 py-3" href="{{route('frontend.home')}}">
                            <img class="g-width-95" src="{{asset('assets-theme/img/logo/logo.png')}}" alt="Logo">
                        </a>
                        <h2 class="h3 g-font-weight-600 g-mb-35">Donate to PCI</h2>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"><strong class="h3">Ammout In CAD</strong></label>
                        <input class="form-control rounded g-px-20 g-py-12 mb-3" type="number" name="amount" placeholder="Enter Donation Amount" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"><strong class="h3">Note</strong></label>
                        <textarea class="form-control" rows="2" name="note" placeholder="Add a personal note with this donation"></textarea>
                    </div>

                    <div class="g-mb-35">
                        <button class="btn btn-block btn-primary g-font-weight-600 g-font-size-12 text-uppercase g-px-25 g-py-13" type="submit">
                            <strong class="h3">Continue to Checkout</strong>
                        </button>
                    </div>
                    <hr>
                    <div class="form-group">
                        <img  class="img-fluid" src="{{asset('assets/img/stripe.png')}}" alt="stripe" width="480px" height="100px">
                    </div>
                </form>
                <!-- End Join Form -->

            </div>
        </div>
    </div>
</section>

@endsection
