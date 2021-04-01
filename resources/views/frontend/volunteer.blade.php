@extends('layouts.app')
@section('content')

    <!-- Signup -->
    <section class="container g-pt-150 g-pb-20">
        <div class="row">
          <div class="col-lg-5 flex-lg-unordered g-mb-80">
            <div class="g-brd-around g-brd-gray-light-v3 g-bg-white rounded g-px-30 g-py-50 mb-4">
              <header class="text-center mb-4">
                <h1 class="h3 g-color-black g-font-weight-300 text-capitalize">Volunteer Sign Up Form</h1>
              </header>

              <!-- Form -->
              <form class="g-py-15">
                <div class="row">
                  <div class="col g-mb-20">
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="First name">
                  </div>

                  <div class="col g-mb-20">
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Last name">
                  </div>
                </div>

                <div class="form-group g-mb-20">
                  <select class="js-custom-select u-select-v1 g-brd-gray-light-v3 g-color-gray-dark-v5 rounded g-py-12" style="width: 100%;" data-placeholder="Gender" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
                    <option></option>
                    <option value="First Option">Male</option>
                    <option value="Second Option">Female</option>
                    <option value="Third Option">Other</option>
                  </select>
                </div>

                <div class="row">
                  <div class="col-sm-6 col-md-12 col-lg-6 g-mb-20">
                    <select class="js-custom-select u-select-v1 g-brd-gray-light-v3 g-color-gray-dark-v5 rounded g-py-12" style="width: 100%;" data-placeholder="Month" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
                      <option></option>
                      <option value="First Option">January</option>
                      <option value="Second Option">February</option>
                      <option value="Third Option">March</option>
                      <option value="Fourth Option">April</option>
                      <option value="Fifth Option">May</option>
                      <option value="Sixth Option">June</option>
                      <option value="Seventh Option">July</option>
                      <option value="Eighth Option">August</option>
                      <option value="Ninth Option">September</option>
                      <option value="Tenth Option">October</option>
                      <option value="Eleventh Option">November</option>
                      <option value="Twelfth Option">December</option>
                    </select>
                  </div>

                  <div class="col g-mb-20">
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Day">
                  </div>

                  <div class="col g-mb-20">
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Year">
                  </div>
                </div>

                <div class="g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Username">
                </div>

                <div class="g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Email address">
                </div>

                <div class="g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Password">
                </div>

                <div class="g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Confirm password">
                </div>

                <div class="mb-1">
                  <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25 mb-2">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                    <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                      <i class="fa" data-check-icon="&#xf00c"></i>
                    </div>
                    I accept the <a href="#">Terms and Conditions</a>
                  </label>
                </div>

                <div class="mb-3">
                  <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25 mb-2">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                    <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                      <i class="fa" data-check-icon="&#xf00c"></i>
                    </div>
                    Subscribe to our newsletter
                  </label>
                </div>

                <button class="btn btn-block u-btn-primary rounded g-py-13" type="button">Signup</button>
              </form>
              <!-- End Form -->
            </div>

            <div class="text-center">
              <p class="g-color-gray-dark-v5 mb-0">Already have an account? <a class="g-font-weight-600" href="page-login-12.html">signin</a>
              </p>
            </div>
          </div>

          <div class="col-lg-7 flex-lg-first g-mb-80">
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
          </div>
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
