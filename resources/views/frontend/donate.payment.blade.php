@extends('layouts.app')
@section('content')

<section class="g-bg-gray-light-v5 mt-5">
    <div class="container g-py-100">
        <div class="row justify-content-md-center">


                <div class="col-md-6 col-lg-6 g-mb-90">
                    <!-- Join Form -->
                    <form class="g-bg-white rounded g-px-30 g-py-40" method="POST" action="{{route('frontend.donate.payment')}}">
                        @csrf()
                        <div class="text-center">
                            <h2 class="h3 g-font-weight-600 g-mb-35">Donate to PCI</h2>
                        </div>

                        <input class="form-control rounded g-px-20 g-py-12 mb-3" type="number" placeholder="Enter Donation Amount">

                        <div class="g-mb-35">
                            <button class="btn btn-block u-btn-black g-brd-main g-brd-primary--hover g-bg-main g-bg-primary--hover g-font-weight-600 g-font-size-12 text-uppercase g-px-25 g-py-13" type="submit">
                               Contibue to Dotation
                            </button>
                        </div>

                    </form>
                    <!-- End Join Form -->
                </div>

        </div>
    </div>
</section>


@endsection
