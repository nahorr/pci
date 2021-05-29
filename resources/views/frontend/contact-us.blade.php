@extends('layouts.app')
@section('content')

    <!-- Promo Block -->
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall " data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
        <!-- Parallax Image -->
        <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-size-cover g-bg-pos-top-center g-bg-black-opacity-0_2--after" style="height: 140%; background-image: url({{asset('assets/img/contact-us.jpg')}});"></div>
        <!-- End Parallax Image -->

        <!-- Promo Block Content -->
        <div class="container g-color-white text-center g-pt-150 g-pb-200">
          <h3 class="h2 g-font-weight-300 mb-0"> Prosper Calgary Initiative (PCI)</h3>
          <h2 class="g-font-weight-700 g-font-size-80 text-uppercase">Contact Us</h2>
        </div>
        <!-- Promo Block Content -->
      </section>
      <!-- End Promo Block -->

      <!-- Contact Form -->
      <section class="container">
        <!-- Icon Blocks -->
        <div class="row no-gutters u-shadow-v21 g-mt-minus-100">

          <div class="col-sm-6 col-md-6 g-hidden-xs-down g-brd-right--md g-brd-gray-light-v4">
            <!-- Icon Blocks -->
            <div class="g-bg-white text-center g-py-100">
              <span class="u-icon-v1 u-icon-size--xl g-color-primary mb-3">
                  <i class="icon-communication-062 u-line-icon-pro"></i>
                </span>
              <h4 class="h5 g-font-weight-600 g-mb-5">Phone Number</h4>
              <span class="d-block">1-800-643-4500</span>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-sm-6 col-md-6 g-hidden-sm-down">
            <!-- Icon Blocks -->
            <div class="g-bg-white text-center g-py-100">
              <span class="u-icon-v1 u-icon-size--xl g-color-primary mb-3">
                  <i class="icon-electronics-005 u-line-icon-pro"></i>
                </span>
              <h4 class="h5 g-font-weight-600 g-mb-5">Email</h4>
              <span class="d-block">info@prospercalgaryinitiative.com</span>
            </div>
            <!-- End Icon Blocks -->
          </div>
        </div>
        <!-- End Icon Blocks -->

        <div class="g-py-100">
          <div class="row justify-content-center">
            <div class="col-lg-9">
                @include('flash-message')
              <h3 class="g-color-black g-font-weight-600 text-center mb-5">Please let us know you, and how you can help.</h3>
              <form method="POST" action="{{route('frontend.contact.us.create')}}">
                @csrf()
                <div class="row">
                  <div class="col-md-6 form-group g-mb-20">
                    <label class="g-color-gray-dark-v2 g-font-size-13">Full Name</label>
                    <input name="fullname" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded-3 g-py-13 g-px-15" type="text" placeholder="Your Name" required>
                  </div>

                  <div class="col-md-6 form-group g-mb-20">
                    <label class="g-color-gray-dark-v2 g-font-size-13">Email</label>
                    <input name="email" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded-3 g-py-13 g-px-15" type="email" placeholder="Your Email" required>
                  </div>

                  <div class="col-md-6 form-group g-mb-20">
                    <label class="g-color-gray-dark-v2 g-font-size-13">Subject</label>
                    <input name="subject" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded-3 g-py-13 g-px-15" type="text" placeholder="Subject" required>
                  </div>

                  <div class="col-md-6 form-group g-mb-20">
                    <label class="g-color-gray-dark-v2 g-font-size-13">Phone</label>
                    <input name="phone" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded-3 g-py-13 g-px-15" type="tel" placeholder="Your Phone" required>
                  </div>

                  <div class="col-md-12 form-group g-mb-40">
                    <label class="g-color-gray-dark-v2 g-font-size-13">Message</label>
                    <textarea name="msg" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-resize-none rounded-3 g-py-13 g-px-15" rows="7" placeholder="Your Message" required></textarea>
                  </div>
                </div>

                <div class="text-center">
                  <button class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase g-rounded-25 g-py-15 g-px-30" type="submit" role="button">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </section>
    <!-- End Contact Form -->

    <hr class="g-brd-gray-light-v4 my-0">

@endsection
