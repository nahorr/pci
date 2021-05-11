@extends('layouts.app')
@section('content')

    <!-- Signup -->
    <section class="container g-pt-150 g-pb-20">
        <div class="row">
          <div class="col-lg-12 flex-lg-unordered g-mb-80">
            @include('flash-message')
            <div class="g-brd-around g-brd-gray-light-v3 g-bg-white rounded g-px-30 g-py-50 mb-4">
              <header class="text-center mb-4">
                <h1 class="h3 g-color-black g-font-weight-300 text-capitalize">Volunteer Form</h1>
                <hr>
              </header>

              <!-- Form -->
              <form class="g-py-15" method="POST" action="{{route('frontend.volunteer.create')}}">
                @csrf()
                <div class="row">
                  <div class="col g-mb-20">
                    <input name="first_name" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="First name">
                  </div>

                  <div class="col g-mb-20">
                    <input name="middle_name" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Middle name">
                  </div>
                  <div class="col g-mb-20">
                    <input name="last_name" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Last name">
                  </div>
                </div>

                <div class="g-mb-20">
                  <input name="address"class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Address">
                </div>
                <div class="row">
                    <div class="col g-mb-20">
                      <input name="city" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="City">
                    </div>

                    <div class="col g-mb-20">
                      <input name="pcode" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Post Code">
                    </div>

                </div>

                <div class="form-group g-mb-20">
                    <select name="gender" class="js-custom-select u-select-v1 g-brd-gray-light-v3 g-color-gray-dark-v5 rounded g-py-12" style="width: 100%;" data-placeholder="Gender" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
                      <option></option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Other">Other</option>
                    </select>
                </div>


                <div class="g-mb-20">
                  <input name="email" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="email" placeholder="Email address">
                </div>

                <div class="g-mb-20">
                  <input name="phone" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Phone Number">
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 g-mb-20">
                        <select name="help" class="js-custom-select u-select-v1 g-brd-gray-light-v3 g-color-gray-dark-v5 rounded g-py-12" style="width: 100%;" data-placeholder="How can you help?" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
                            <option></option>
                            <option value="First Option">Door Knocking</option>
                            <option value="Second Option">Digital Marketing</option>
                            <option value="Third Option">Graphic Design</option>
                            <option value="Fourth Option">Photography/Video Recording</option>
                            <option value="Fifth Option">Social Media Campaign</option>
                            <option value="Sixth Option">Website Administarion</option>
                            <option value="Seventh Option">Other - Please Specify</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col g-mb-20">
                      <input name="day" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Days your are available">
                    </div>

                    <div class="col g-mb-20">
                      <input name="time" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Time your are available">
                    </div>

                </div>

                <div class="g-mb-20">
                    <textarea name="feedback" class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-3 g-py-13 g-px-15" rows="7" placeholder="Any Feedback or comment"></textarea>
                </div>

                <button class="btn btn-block u-btn-primary rounded g-py-13" type="submit"><strong>Submit Form</strong></button>
              </form>
              <!-- End Form -->
            </div>


          </div>

         {{--  <div class="col-lg-7 flex-lg-first g-mb-80">
            <div class="g-pr-20--lg">
              <div class="mb-5">
                <h2 class="h1 g-font-weight-300 mb-3">Welcome to Unify</h2>
                <p class="g-color-gray-dark-v5">The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
              </div>

              <div class="row text-center mb-5">
                <div class="col-sm-4 g-mb-10">
                  <!-- Counters -->
                  <div class="g-bg-gray-light-v5 g-pa-20">
                    <div class="js-counter g-color-gray-dark-v5 g-font-weight-300 g-font-size-30 g-line-height-1">52147</div>
                    <div class="d-inline-block g-width-10 g-height-2 g-bg-gray-dark-v5 mb-1"></div>
                    <h4 class="g-color-gray-dark-v4 g-font-size-12 text-uppercase">Code Lines</h4>
                  </div>
                  <!-- End Counters -->
                </div>

                <div class="col-sm-4 g-mb-10">
                  <!-- Counters -->
                  <div class="g-bg-gray-light-v5 g-pa-20">
                    <div class="js-counter g-color-gray-dark-v5 g-font-weight-300 g-font-size-30 g-line-height-1">24583</div>
                    <div class="d-inline-block g-width-10 g-height-2 g-bg-gray-dark-v5 mb-1"></div>
                    <h4 class="g-color-gray-dark-v4 g-font-size-12 text-uppercase">Projects</h4>
                  </div>
                  <!-- End Counters -->
                </div>

                <div class="col-sm-4 g-mb-10">
                  <!-- Counters -->
                  <div class="g-bg-gray-light-v5 g-pa-20">
                    <div class="js-counter g-color-gray-dark-v5 g-font-weight-300 g-font-size-30 g-line-height-1">7348</div>
                    <div class="d-inline-block g-width-10 g-height-2 g-bg-gray-dark-v5 mb-1"></div>
                    <h4 class="g-color-gray-dark-v4 g-font-size-12 text-uppercase">Working Hours</h4>
                  </div>
                  <!-- End Counters -->
                </div>
              </div>

              <div class="text-center">
                <h2 class="h4 mb-4">Join more than <span class="g-color-primary">13,000</span> members worldwide</h2>
                <img class="img-fluid" src="../../assets/img/maps/map1.png" alt="Image Description">
              </div>
            </div>
          </div> --}}
        </div>
    </section>
    <!-- End Signup -->

    <!-- Call to Action -->
    <section class="g-bg-primary">
    <div class="container g-pt-25 g-pb-10">
        <div class="row justify-content-between align-items-center">
        <div class="col-sm-6 col-md-8 g-mb-15">
            <h3 class="h4 g-color-white g-font-weight-300 text-uppercase mb-0">Subscribe to our weekly <span class="g-font-weight-600">Newsletter</span></h3>
        </div>

        <div class="col-sm-6 col-md-4 g-mb-15">
            <div class="input-group rounded-0">
            <input class="form-control g-brd-white g-color-white g-placeholder-white g-bg-transparent rounded-0 g-px-15 g-py-13" type="email" placeholder="Enter your email ...">
            <span class="input-group-addon u-input-group-addon g-width-45 g-brd-white g-color-white">
                <i class="icon-communication-062 u-line-icon-pro"></i>
                </span>
            </div>
        </div>
        </div>
    </div>
    </section>
    <!-- End Call to Action -->


@endsection
