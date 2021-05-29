@extends('layouts.app')
@section('content')

<!-- Promo Banner -->
<div class="g-min-height-450 g-flex-centered g-bg-img-hero g-bg-pos-top-center g-bg-size-cover g-pt-80" style="background-image: url({{asset('assets/img/members.jpg')}});">
    <div class="container g-pos-rel g-z-index-1">
      <span class="d-block text-uppercase g-color-danger g-font-weight-500 g-font-size-13 mb-4"><strong>Members</strong></span>
      <h1 class="g-color-white g-font-size-60--lg mb-0">Prosper Calgary Initiative</h1>
    </div>
  </div>
  <!-- End Promo Banner -->

  <!-- Consultants -->
  <div class="container g-pt-100 g-pb-40">
    <!-- Consultants - Heading -->
    <div class="row align-items-left g-mb-40--lg">
      <div class="col-sm-6 g-mb-30 g-mb-0--lg float-left">
        <span class="d-block text-uppercase g-color-dark-light-v1 g-font-weight-500 g-font-size-13 mb-4">Members</span>

      </div>
    </div>
    <!-- End Consultants - Heading -->

    <!-- Consultants - Content -->
    <div class="row">

      <div class="col-lg-6 g-mb-60">
        <!-- Accordion -->
        <div id="accordion-12-1" class="u-accordion u-accordion-color-primary" role="tablist" aria-multiselectable="true">
          <!-- Card -->
          <div class="card g-brd-none rounded-0">
            <div class="row">
              <div class="col-md-5">
                <!-- Consultants Info -->
                <div class="g-bg-secondary text-center g-pa-20">
                  <div class="u-shadow-v19 g-width-110 g-height-110 g-brd-around g-brd-5 g-brd-white rounded-circle mx-auto mb-4">
                    <img class="img-fluid rounded-circle" src="{{asset('assets/img/emeka.jpg')}}" alt="Image description">
                  </div>
                  <h3 class="h6 mb-3">Dr. Emeka Dean Nwakanma</h3>


                </div>
                <!-- End Consultants Info -->

                <!-- Accordion - Trigger -->
                <div id="accordion-12-1-heading-01" class="g-pa-0" role="tab">
                  <a class="btn btn-block u-btn-primary g-brd-main--hover g-color-main g-color-primary--hover g-color-main--focus g-bg-main--hover g-font-weight-600 g-font-size-12 text-uppercase rounded-0 g-px-25 g-py-13" href="#accordion-12-1-body-01" data-toggle="collapse" data-parent="#accordion-12-1" aria-expanded="false" aria-controls="accordion-12-1-body-01">
                    403 383-4817
                  </a>
                </div>
                <!-- End Accordion - Trigger -->
              </div>

              <div class="col-md-7">
                <!-- Consultants Content -->
                <h3 class="h5">Dr. Emeka Dean Nwakanma</h3>
                <p class="g-line-height-2">
                    Dr. Nwakanma is an academic, Journeyman tradesperson, loving husband, father, and community leader.
                    He earned his doctorate degree (Library and Information Management) in 2008 from the prestigious McGill University, Montreal.
                    He was an adjunct professor at McGill for several years. Dr. Dean was the pioneer Chief Librarian at LRCN Nigeria.
                    He was the Health and Safety Coordinator at ATCO Calgary. Dr. Nwakanma is the founder and CEO at U2C Construction Inc.
                    He enjoys travelling, photography, and woodworking. Dr. Nwakanma is happily married. to Patience, and they have four lovely children.
                </p>
              </div>
            </div>

          </div>
          <!-- End Card -->
        </div>
        <!-- End Accordion -->
      </div>

      <div class="col-lg-6 g-mb-60">
        <!-- Accordion -->
        <div id="accordion-12-2" class="u-accordion u-accordion-color-primary" role="tablist" aria-multiselectable="true">
          <!-- Card -->
          <div class="card g-brd-none rounded-0">
            <div class="row">
              <div class="col-md-5">
                <!-- Consultants Info -->
                <div class="g-bg-secondary text-center g-pa-20">
                  <div class="u-shadow-v19 g-width-110 g-height-110 g-brd-around g-brd-5 g-brd-white rounded-circle mx-auto mb-4">
                    <img class="img-fluid rounded-circle" src="{{asset('assets/img/debbie-jackman.jpg')}}" alt="debbie-jackman">
                  </div>
                  <h3 class="h6 mb-3">Debbie Jackman</h3>


                </div>
                <!-- End Consultants Info -->

                <!-- Accordion - Trigger -->
                <div id="accordion-12-2-heading-01" class="g-pa-0" role="tab">
                  <a class="btn btn-block u-btn-primary g-brd-main--hover g-color-main g-color-primary--hover g-color-main--focus g-bg-main--hover g-font-weight-600 g-font-size-12 text-uppercase rounded-0 g-px-25 g-py-13" href="#accordion-12-2-body-01" data-toggle="collapse" data-parent="#accordion-12-2" aria-expanded="false" aria-controls="accordion-12-2-body-01">
                    403 463-2261
                  </a>
                </div>
                <!-- End Accordion - Trigger -->
              </div>

              <div class="col-md-7">
                <!-- Consultants Content -->
                <h3 class="h5">Debbie Jackman</h3>
                <p class="g-line-height-2">
                  Debbie Jackman is a native Calgarian, born and raised in the southeast. Graduate of Lord Beaverbrook, home of the Lord's and SAIT. 
                  Currently working in oil and gas. An independent financial advisor.  Previously having worked with the City of Calgary and
                  telecommunications industry for several years.

                  My involvement with PCI comes from a desire for change, we need to revitalize Calgary with the atmosphere and vibrance that it used to have. 
                  There are so many good things about this city that we need to preserve and I know that if we get the right people in office we can make it happen.
                </p>
                <!-- End Consultants Content -->
              </div>
            </div>

          </div>
          <!-- End Card -->
        </div>
        <!-- End Accordion -->
      </div>

      <div class="w-100 g-mb-30"></div>

      <div class="col-lg-6 g-mb-60">
        <!-- Accordion -->
        <div id="accordion-12-3" class="u-accordion u-accordion-color-primary" role="tablist" aria-multiselectable="true">
          <!-- Card -->
          <div class="card g-brd-none rounded-0">
            <div class="row">
              <div class="col-md-5">
                <!-- Consultants Info -->
                <div class="g-bg-secondary text-center g-pa-20">
                  <div class="u-shadow-v19 g-width-110 g-height-110 g-brd-around g-brd-5 g-brd-white rounded-circle mx-auto mb-4">
                    <img class="img-fluid rounded-circle" src="{{asset('assets/img/member.jpg')}}" alt="Image description">
                  </div>
                  <h3 class="h6 mb-3">Alex Udo Akwarandu</h3>


                </div>
                <!-- End Consultants Info -->


              </div>

              <div class="col-md-7">
                <!-- Consultants Content -->
                {{-- <h3 class="h5">Alex Udo Akwarandu </h3> --}}
                <p class="g-line-height-2">
                  {{-- This is where I sit down, grab a cup of coffee and dial in the details.
                   Understanding the task at hand and ironing out the wrinkles is key. --}}
                </p>

                <!-- End Consultants Content -->
              </div>
            </div>

          </div>
          <!-- End Card -->
        </div>
        <!-- End Accordion -->
      </div>

      <div class="col-lg-6 g-mb-60">
        <!-- Accordion -->
        <div id="accordion-12-3" class="u-accordion u-accordion-color-primary" role="tablist" aria-multiselectable="true">
          <!-- Card -->
          <div class="card g-brd-none rounded-0">
            <div class="row">
              <div class="col-md-5">
                <!-- Consultants Info -->
                <div class="g-bg-secondary text-center g-pa-20">
                  <div class="u-shadow-v19 g-width-110 g-height-110 g-brd-around g-brd-5 g-brd-white rounded-circle mx-auto mb-4">
                    <img class="img-fluid rounded-circle" src="{{asset('assets/img/member.jpg')}}" alt="Image description">
                  </div>
                  <h3 class="h6 mb-3">Tochukwu Nwaogwugwu</h3>


                </div>
                <!-- End Consultants Info -->


              </div>

              <div class="col-md-7">
                <!-- Consultants Content -->

                <p class="g-line-height-2">
                  {{-- This is where I sit down, grab a cup of coffee and dial in the details.
                   Understanding the task at hand and ironing out the wrinkles is key. --}}
                </p>

                <!-- End Consultants Content -->
              </div>
            </div>

          </div>
          <!-- End Card -->
        </div>
        <!-- End Accordion -->
      </div>

      <div class="w-100 g-mb-30"></div>

      <div class="col-lg-6 g-mb-60">
        <!-- Accordion -->
        <div id="accordion-12-3" class="u-accordion u-accordion-color-primary" role="tablist" aria-multiselectable="true">
          <!-- Card -->
          <div class="card g-brd-none rounded-0">
            <div class="row">
              <div class="col-md-5">
                <!-- Consultants Info -->
                <div class="g-bg-secondary text-center g-pa-20">
                  <div class="u-shadow-v19 g-width-110 g-height-110 g-brd-around g-brd-5 g-brd-white rounded-circle mx-auto mb-4">
                    <img class="img-fluid rounded-circle" src="{{asset('assets/img/member.jpg')}}" alt="Image description">
                  </div>
                  <h3 class="h6 mb-3">Nkwachi Ogwuma </h3>


                </div>
                <!-- End Consultants Info -->


                <!-- End Accordion - Trigger -->
              </div>

              <div class="col-md-7">
                <!-- Consultants Content -->

                <p class="g-line-height-2">
                  {{-- This is where I sit down, grab a cup of coffee and dial in the details.
                   Understanding the task at hand and ironing out the wrinkles is key. --}}
                </p>

                <!-- End Consultants Content -->
              </div>
            </div>

          </div>
          <!-- End Card -->
        </div>
        <!-- End Accordion -->
      </div>

      <div class="col-lg-6 g-mb-60">
        <!-- Accordion -->
        <div id="accordion-12-3" class="u-accordion u-accordion-color-primary" role="tablist" aria-multiselectable="true">
          <!-- Card -->
          <div class="card g-brd-none rounded-0">
            <div class="row">
              <div class="col-md-5">
                <!-- Consultants Info -->
                <div class="g-bg-secondary text-center g-pa-20">
                  <div class="u-shadow-v19 g-width-110 g-height-110 g-brd-around g-brd-5 g-brd-white rounded-circle mx-auto mb-4">
                    <img class="img-fluid rounded-circle" src="{{asset('assets/img/member.jpg')}}" alt="Image description">
                  </div>
                  <h3 class="h6 mb-3">Diamond A. Omene</h3>


                </div>
                <!-- End Consultants Info -->


              </div>

              <div class="col-md-7">
                <!-- Consultants Content -->

                <p class="g-line-height-2">
                  {{-- This is where I sit down, grab a cup of coffee and dial in the details.
                   Understanding the task at hand and ironing out the wrinkles is key. --}}
                </p>

                <!-- End Consultants Content -->
              </div>
            </div>

          </div>
          <!-- End Card -->
        </div>
        <!-- End Accordion -->
      </div>

      <div class="w-100 g-mb-30"></div>

      <div class="col-lg-6 g-mb-60">
        <!-- Accordion -->
        <div id="accordion-12-3" class="u-accordion u-accordion-color-primary" role="tablist" aria-multiselectable="true">
          <!-- Card -->
          <div class="card g-brd-none rounded-0">
            <div class="row">
              <div class="col-md-5">
                <!-- Consultants Info -->
                <div class="g-bg-secondary text-center g-pa-20">
                  <div class="u-shadow-v19 g-width-110 g-height-110 g-brd-around g-brd-5 g-brd-white rounded-circle mx-auto mb-4">
                    <img class="img-fluid rounded-circle" src="{{asset('assets/img/member.jpg')}}" alt="Image description">
                  </div>
                  <h3 class="h6 mb-3">Stephen F. Collins </h3>


                </div>
                <!-- End Consultants Info -->


              </div>

              <div class="col-md-7">
                <!-- Consultants Content -->

                <p class="g-line-height-2">
                  {{-- This is where I sit down, grab a cup of coffee and dial in the details.
                   Understanding the task at hand and ironing out the wrinkles is key. --}}
                </p>

                <!-- End Consultants Content -->
              </div>
            </div>

          </div>
          <!-- End Card -->
        </div>
        <!-- End Accordion -->
      </div>

      <div class="col-lg-6 g-mb-60">
        <!-- Accordion -->
        <div id="accordion-12-3" class="u-accordion u-accordion-color-primary" role="tablist" aria-multiselectable="true">
          <!-- Card -->
          <div class="card g-brd-none rounded-0">
            <div class="row">
              <div class="col-md-5">
                <!-- Consultants Info -->
                <div class="g-bg-secondary text-center g-pa-20">
                  <div class="u-shadow-v19 g-width-110 g-height-110 g-brd-around g-brd-5 g-brd-white rounded-circle mx-auto mb-4">
                    <img class="img-fluid rounded-circle" src="{{asset('assets/img/member.jpg')}}" alt="Image description">
                  </div>
                  <h3 class="h6 mb-3">Clement Ohia</h3>


                </div>
                <!-- End Consultants Info -->


              </div>

              <div class="col-md-7">
                <!-- Consultants Content -->

                <p class="g-line-height-2">
                  {{-- This is where I sit down, grab a cup of coffee and dial in the details.
                   Understanding the task at hand and ironing out the wrinkles is key. --}}
                </p>

                <!-- End Consultants Content -->
              </div>
            </div>

          </div>
          <!-- End Card -->
        </div>
        <!-- End Accordion -->
      </div>
    </div>
    <!-- End Consultants - Content -->
  </div>
  <!-- End Consultants -->

@endsection
