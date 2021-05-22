@extends('layouts.app')
@section('content')

    <!-- Promo Block -->
    {{-- <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall g-bg-cover g-bg-black-opacity-0_8--after" data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
        <!-- Promo Block - Parallax Video -->
        <div class="dzsparallaxer--target" style="width: 100%; height: 130%;" data-forcewidth_ratio="1.77">
          <div class="js-bg-video g-pos-abs w-100 h-100" data-hs-bgv-type="vimeo" data-hs-bgv-id="167434033" data-hs-bgv-loop="1"></div>
        </div>
        <!-- End Promo Block - Parallax Video -->

        <!-- Promo Block Content -->
        <div class="g-pt-120">
          <div class="container g-color-white text-center g-pos-rel g-z-index-3">
            <h3 class="g-font-size-40 g-font-weight-600 g-font-size-130--md g-line-height-1 g-mb-50" data-animation="fadeInUp" data-animation-delay="500" data-animation-duration="1500">Unify</h3>
            <div class="row justify-content-center mb-3">
              <div class="col-md-6">
                <p class="g-font-size-24 g-mb-40" data-animation="fadeInUp" data-animation-delay="800" data-animation-duration="1500">Unify creative technology company providing key digital services.</p>
              </div>
            </div>
            <a class="js-fancybox d-block g-mb-130" href="javascript:;" data-src="//vimeo.com/167434033" data-speed="1000" data-animate-in="fadeInUp" data-animate-out="fadeOutUp" data-caption="Single Image">
              <span class="u-icon-v3 u-icon-size--lg u-block-hover--scale g-bg-white g-color-black g-color-primary--hover g-font-size-18 g-rounded-50x g-cursor-pointer">
                  <i class="g-pos-rel g-left-2 fa fa-play"></i>
                </span>
            </a>
            <ul class="row list-inline text-center g-pb-60 mb-0">
              <li class="col" data-animation="fadeIn" data-animation-delay="1800" data-animation-duration="1500">
                <img class="g-width-100 u-block-hover__main--grayscale" src="../../assets/img-temp/200x100/img1.png" alt="Image Description">
              </li>
              <li class="col mx-5" data-animation="fadeIn" data-animation-delay="1700" data-animation-duration="1500">
                <img class="g-width-100 u-block-hover__main--grayscale" src="../../assets/img-temp/200x100/img2.png" alt="Image Description">
              </li>
              <li class="col mx-5" data-animation="fadeIn" data-animation-delay="1600" data-animation-duration="1500">
                <img class="g-width-100 u-block-hover__main--grayscale" src="../../assets/img-temp/200x100/img3.png" alt="Image Description">
              </li>
              <li class="col mx-5" data-animation="fadeIn" data-animation-delay="1500" data-animation-duration="1500">
                <img class="g-width-100 u-block-hover__main--grayscale" src="../../assets/img-temp/200x100/img4.png" alt="Image Description">
              </li>
              <li class="col" data-animation="fadeIn" data-animation-delay="1400" data-animation-duration="1500">
                <img class="g-width-100 u-block-hover__main--grayscale" src="../../assets/img-temp/200x100/img5.png" alt="Image Description">
              </li>
            </ul>
          </div>
        </div>
        <!-- Promo Block Content -->
    </section> --}}
    <!-- End Promo Block -->

    <section class="g-bg-gray-light-v5">
        <div class="container g-py-100">
          <div class="row justify-content-center g-mb-110">
            <div class="col-lg-8">
              <!-- Heading -->
              <div class="text-center">
                <span class="d-block g-color-primary g-font-size-17 text-uppercase mb-5"><strong>About Us</strong></span>
                <h2 class="h1 g-color-black g-font-weight-600 mb-5">Prosper Calgary Initiative<br>a Third Party Advertisement Group</h2>
                <p class="lead mb-5"> registered with
                    the City Of Calgary to participate in the 2021 Municipal Elections. We are a group made up of
                    Calgarians of diverse professional practice, origin, creed, and gender. We seek to support
                    candidates for Calgary’s municipal Election 2021, whose political agenda, we believe,
                    are oriented for the benefit of all Calgarians.</p>
                <a class="btn btn-xl u-btn-outline-black g-font-weight-600 g-font-size-default g-px-35" href="#">Explore more</a>
              </div>
              <!-- End Heading -->
            </div>
          </div>

          {{-- <div class="row">
            <div class="col-sm-6 col-lg-3 g-mb-30">
              <!-- Article -->
              <article class="u-shadow-v21 u-shadow-v21--hover g-bg-white g-pos-rel g-rounded-5">
                <img class="img-fluid w-100 g-rounded-top-5" src="../../assets/img-temp/350x230/img1.jpg" alt="Image Description">
                <div class="g-pa-30">
                  <h3 class="h6 g-color-black g-font-weight-600 text-capitalize mb-3">
                      <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="#">Let's break the ice.</a>
                    </h3>
                  <p class="g-color-gray-dark-v4">It's not what we do, but who we are.</p>
                </div>
              </article>
              <!-- End Article -->
            </div>

            <div class="col-sm-6 col-lg-3 g-mb-30">
              <!-- Article -->
              <article class="u-shadow-v21 u-shadow-v21--hover g-bg-white g-pos-rel g-rounded-5">
                <img class="img-fluid w-100 g-rounded-top-5" src="../../assets/img-temp/350x230/img2.jpg" alt="Image Description">
                <div class="g-pa-30">
                  <h3 class="h6 g-color-black g-font-weight-600 text-capitalize mb-3">
                      <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="#">How can we assist?</a>
                    </h3>
                  <p class="g-color-gray-dark-v4">We are jacks of all. We are experts in all.</p>
                </div>
              </article>
              <!-- End Article -->
            </div>

            <div class="col-sm-6 col-lg-3 g-mb-30">
              <!-- Article -->
              <article class="u-shadow-v21 u-shadow-v21--hover g-bg-white g-pos-rel g-rounded-5">
                <img class="img-fluid w-100 g-rounded-top-5" src="../../assets/img-temp/350x230/img3.jpg" alt="Image Description">
                <div class="g-pa-30">
                  <h3 class="h6 g-color-black g-font-weight-600 text-capitalize mb-3">
                      <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="#">Let's talk details</a>
                    </h3>
                  <p class="g-color-gray-dark-v4">It's good to virtually meet you.</p>
                </div>
              </article>
              <!-- End Article -->
            </div>

            <div class="col-sm-6 col-lg-3 g-mb-30">
              <!-- Article -->
              <article class="u-shadow-v21 u-shadow-v21--hover g-bg-white g-pos-rel g-rounded-5">
                <img class="img-fluid w-100 g-rounded-top-5" src="../../assets/img-temp/350x230/img4.jpg" alt="Image Description">
                <div class="g-pa-30">
                  <h3 class="h6 g-color-black g-font-weight-600 text-capitalize mb-3">
                      <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="#">It's a lifestyle.</a>
                    </h3>
                  <p class="g-color-gray-dark-v4">More than a look, design is functional.</p>
                </div>
              </article>
              <!-- End Article -->
            </div>
          </div> --}}
        </div>
    </section>

    <div class="dzsparallaxer auto-init height-is-based-on-content g-bg-gray-gradient-opacity-v1" data-options='{direction: "reverse", animation_duration: "200"}'>
        <div class="dzsparallaxer--target" style="width: 100%; height: 130%;">
        </div>
        <div class="container g-pt-100">
            <!-- Masonry -->
            <div class="masonry-grid row mb-5">
            <div class="masonry-grid-sizer col-sm-1"></div>
            <div class="masonry-grid-item col-lg-6 g-mb-100">
                <div class="g-pr-40--lg">
                    <!-- Heading -->
                    <span class="d-block g-color-primary g-font-size-17 text-uppercase mb-4"><strong>Our vision statement</strong></span>
                    <h2 class="h2 g-color-black g-font-weight-600 mb-4">Prosper Calgary Initiative (PCI)</h2>
                    <p class="lead mb-5"> has a vision to inspire, support, and project excellent leadership
                        in public office aspirants in Alberta, particularly, the City of Calgary.</p>
                    <a class="btn btn-xl u-btn-outline-black g-font-weight-600 g-font-size-default g-px-35" href="{{route('frontend.volunteer')}}">Volunteer</a>
                    <!-- End Heading -->
                </div>
            </div>
            <div class="masonry-grid-item col-sm-6 col-lg-3 g-mb-30">
                <div data-parallaxanimation='[{property: "transform", value:" translate3d(0,px,0)", initial:"-25", mid:"0", final:"25"}]'>
                    <img class="img-fluid w-100" src="{{asset('assets/img/about-2.jpg')}}" alt="Image Description">
                </div>
            </div>

          </div>
          <!-- End Masonry -->

          <!-- Counters -->
          <!-- Masonry -->
          <div class="masonry-grid row mb-5">
            <div class="masonry-grid-sizer col-sm-1"></div>
            <div class="masonry-grid-item col-lg-6 g-mb-100">
                <div class="g-pr-40--lg">
                    <!-- Heading -->
                    <span class="d-block g-color-primary g-font-size-17 text-uppercase mb-4"><strong>Our Mission Statement </strong></span>
                    <h2 class="h2 g-color-black g-font-weight-600 mb-4">Our mission is to Prosper Calgary Initiative (PCI)</h2>
                    <p class="lead mb-5"> is to identify candidates of impeccable leadership ability, experience, and qualification for election into public offices in the Province of Alberta. We project and support worthy candidates for election into public office by engaging in political advertising to promote our selected candidates.</p>
                    <a class="btn btn-xl u-btn-outline-black g-font-weight-600 g-font-size-default g-px-35" href="{{route('frontend.volunteer')}}">Volunteer</a>
                    <!-- End Heading -->
                </div>
            </div>
            <div class="masonry-grid-item col-sm-6 col-lg-3 g-mb-30">
                <div data-parallaxanimation='[{property: "transform", value:" translate3d(0,px,0)", initial:"-25", mid:"0", final:"25"}]'>
                    <img class="img-fluid w-100" src="{{asset('assets/img/about-1.jpg')}}" alt="Image Description">
                </div>
            </div>
          <!-- End Counters -->
        </div>
    </div>

    <!-- Hero Info -->
    <section class="g-bg-cover g-bg-size-cover g-bg-black-opacity-0_4--after g-py-120" style="background-image: url({{asset('assets/img/join-us.jpg')}});">
    <div class="container text-center g-color-white g-pos-rel g-z-index-1">
        <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="g-font-weight-300 g-font-size-45 g-mb-20">Prosper <span class="g-color-primary g-font-weight-600">Calgary</span> Initiative (PCI)</h2>
            <p class="lead g-color-white-opacity-0_8 g-font-weight-300 g-mb-50">Making a difference!</p>
            <a class="btn btn-xl u-btn-primary g-font-weight-600 g-font-size-default g-px-35" href="{{route('frontend.volunteer')}}">Join Us</a>
        </div>
        </div>
    </div>
    </section>
    <!-- Hero Info -->

@endsection
