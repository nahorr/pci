@extends('layouts.app')
@section('content')

    <!-- Promo Block -->
    <div class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options='{direction: "reverse", settings_mode_oneelement_max_offset: "150"}'>
        <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-black-opacity-0_3--after" style="height: 120%; background-image: url(assets/img/home-pci.jpg);"></div>

        <div class="container g-pt-170">
          <div class="row justify-content-between align-items-center">
            <div class="col-md-6 col-lg-7 g-mb-90">
              <!-- Content Info -->
              <div class="mb-5">
                <h1 class="g-color-white g-font-weight-600 g-font-size-50 mb-3">Prosper Calgary Initiative</h1>
                <p class="g-color-white g-font-size-18 g-line-height-2">
                  Prosper Calgary Initiative is a Third Party Advertisement Group registered with
                  the City Of Calgary to participate in the 2021 Municipal Elections. We are a group made up of
                  Calgarians of diverse professional practice, origin, creed, and gender. We seek to support
                  candidates for Calgary’s municipal Election 2021, whose political agenda, we believe,
                  are oriented for the benefit of all Calgarians.
                </p>
              </div>
              <a class="btn u-btn-primary g-brd-main--hover g-bg-main--hover g-font-weight-600 g-font-size-12 text-uppercase g-px-25 g-py-13 mr-3" href="{{route('frontend.volunteer')}}">
                Volunteer
                <i class="g-pos-rel g-top-minus-1 ml-2 fa fa-angle-right"></i>
              </a>
              <a class="btn u-btn-black g-brd-main g-brd-primary--hover g-bg-main g-bg-primary--hover g-font-weight-600 g-font-size-12 text-uppercase g-px-25 g-py-13" href="{{route('frontend.donate')}}">
                Donate
                <i class="g-pos-rel g-top-minus-1 ml-2 fa fa-angle-right"></i>
              </a>
              <!-- End Content Info -->
            </div>


          </div>
        </div>
      </div>
      <!-- End Promo Block -->

      <section class="g-bg-gray-light-v5">
        <div class="container g-py-100">
          <div class="row justify-content-center g-mb-110">
            <div class="col-lg-8">
              <!-- Heading -->
              <div class="text-center">
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
        </div>
    </section>

      <!-- Services -->
      <div class="container g-py-100">
        <div class="row">
          <div class="col-md-6 col-lg-4 g-mb-30">
            <!-- Services -->
            <article class="u-block-hover u-shadow-v29--hover g-bg-main--hover rounded g-pa-35">
              <div class="d-flex align-items-center g-brd-bottom g-brd-2 g-brd-primary g-pb-20 g-mb-20">
                <span class="align-middle u-icon-v3 u-icon-size--xs g-color-white g-bg-primary rounded-circle mr-2">
                  <i class="icon-education-102 u-line-icon-pro"></i>
                </span>
                <h3 class="d-inline-block g-color-white--hover g-font-weight-600 g-transition-0_3 mb-0">Calgary Today</h3>
              </div>

              <span class="d-block g-color-primary--hover g-font-weight-600 g-font-size-12 text-uppercase g-transition-0_3 mb-2">Calgary Today</span>
              <div class="mb-4">
                <p class="g-color-white--hover g-transition-0_3">
                  With the dwindling fortunes from the oil and gas industry in recent years,
                  Alberta’s economy has taken a hit. Calgary, the socio-economic hub of the province

                </p>
              </div>

              <span class="u-link-v6 g-color-primary g-color-primary--hover g-font-size-12 text-uppercase g-text-underline--none--hover g-transition-0_3">
                Read More
                <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
              </span>

              <a class="u-link-v2" href="#"></a>
            </article>
            <!-- End Services -->
          </div>

          <div class="col-md-6 col-lg-4 g-mb-30">
            <!-- Services -->
            <article class="u-block-hover u-shadow-v29--hover g-bg-main--hover rounded g-pa-35">
              <div class="d-flex align-items-center g-brd-bottom g-brd-2 g-brd-primary g-pb-20 g-mb-20">
                <span class="align-middle u-icon-v3 u-icon-size--xs g-color-white g-bg-primary rounded-circle mr-2">
                  <i class="icon-education-096 u-line-icon-pro"></i>
                </span>
                <h3 class="d-inline-block g-color-white--hover g-font-weight-600 g-transition-0_3 mb-0">What Calgarians Want</h3>
              </div>

              <span class="d-block g-color-primary--hover g-font-weight-600 g-font-size-12 text-uppercase g-transition-0_3 mb-2">What Calgarians Want</span>
              <div class="mb-4">
                <p class="g-color-white--hover g-transition-0_3">
                  Calgary is a major hub of Canada’s economy. Our municipal government should
                  be transparent and accountable. City councillors and managers should cut their
                </p>
              </div>

              <span class="u-link-v6 g-color-primary g-color-primary--hover g-font-size-12 text-uppercase g-text-underline--none--hover g-transition-0_3">
                Read More
                <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
              </span>

              <a class="u-link-v2" href="#"></a>
            </article>
            <!-- End Services -->
          </div>

          <div class="col-md-6 col-lg-4 g-mb-30">
            <!-- Services -->
            <article class="u-block-hover u-shadow-v29--hover g-bg-main--hover rounded g-pa-35">
              <div class="d-flex align-items-center g-brd-bottom g-brd-2 g-brd-primary g-pb-20 g-mb-20">
                <span class="align-middle u-icon-v3 u-icon-size--xs g-color-white g-bg-primary rounded-circle mr-2">
                  <i class="icon-education-121 u-line-icon-pro"></i>
                </span>
                <h3 class="d-inline-block g-color-white--hover g-font-weight-600 g-transition-0_3 mb-0">A Calgary That Works For All</h3>
              </div>

              <span class="d-block g-color-primary--hover g-font-weight-600 g-font-size-12 text-uppercase g-transition-0_3 mb-2">A Calgary That Works For All</span>
              <div class="mb-4">
                <p class="g-color-white--hover g-transition-0_3">
                  The city of Calgary is made up of a diverse population, based on creed,
                  origin, gender and sexual orientation, profession and trade, age, and economic status.
                </p>
              </div>

              <span class="u-link-v6 g-color-primary g-color-primary--hover g-font-size-12 text-uppercase g-text-underline--none--hover g-transition-0_3">
                Read More
                <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
              </span>

              <a class="u-link-v2" href="#"></a>
            </article>
            <!-- End Services -->
          </div>

          {{-- <div class="col-md-6 col-lg-4 g-mb-30">
            <!-- Services -->
            <article class="u-block-hover u-shadow-v29--hover g-bg-main--hover rounded g-pa-35">
              <div class="d-flex align-items-center g-brd-bottom g-brd-2 g-brd-primary g-pb-20 g-mb-20">
                <span class="align-middle u-icon-v3 u-icon-size--xs g-color-white g-bg-primary rounded-circle mr-2">
                  <i class="icon-media-007 u-line-icon-pro"></i>
                </span>
                <h3 class="d-inline-block g-color-white--hover g-font-weight-600 g-transition-0_3 mb-0">Photography</h3>
              </div>

              <span class="d-block g-color-primary--hover g-font-weight-600 g-font-size-12 text-uppercase g-transition-0_3 mb-2">The core photography</span>
              <div class="mb-4">
                <p class="g-color-white--hover g-transition-0_3">Yep, say cheese. Finding ways to help tell your story through photography is a powerful tool to make your branded content stand out from the rest.</p>
              </div>

              <span class="u-link-v6 g-color-primary g-color-primary--hover g-font-size-12 text-uppercase g-text-underline--none--hover g-transition-0_3">
                Read More
                <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
              </span>

              <a class="u-link-v2" href="#"></a>
            </article>
            <!-- End Services -->
          </div>

          <div class="col-md-6 col-lg-4 g-mb-30">
            <!-- Services -->
            <article class="u-block-hover u-shadow-v29--hover g-bg-main--hover rounded g-pa-35">
              <div class="d-flex align-items-center g-brd-bottom g-brd-2 g-brd-primary g-pb-20 g-mb-20">
                <span class="align-middle u-icon-v3 u-icon-size--xs g-color-white g-bg-primary rounded-circle mr-2">
                  <i class="icon-media-008 u-line-icon-pro"></i>
                </span>
                <h3 class="d-inline-block g-color-white--hover g-font-weight-600 g-transition-0_3 mb-0">Videography</h3>
              </div>

              <span class="d-block g-color-primary--hover g-font-weight-600 g-font-size-12 text-uppercase g-transition-0_3 mb-2">The core videography</span>
              <div class="mb-4">
                <p class="g-color-white--hover g-transition-0_3">And action! Finding ways to help tell your story through video is a powerful tool to make your branded content stand out from the rest.</p>
              </div>

              <span class="u-link-v6 g-color-primary g-color-primary--hover g-font-size-12 text-uppercase g-text-underline--none--hover g-transition-0_3">
                Read More
                <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
              </span>

              <a class="u-link-v2" href="#"></a>
            </article>
            <!-- End Services -->
          </div>

          <div class="col-md-6 col-lg-4 g-mb-30">
            <!-- Services -->
            <article class="u-block-hover u-shadow-v29--hover g-bg-main--hover rounded g-pa-35">
              <div class="d-flex align-items-center g-brd-bottom g-brd-2 g-brd-primary g-pb-20 g-mb-20">
                <span class="align-middle u-icon-v3 u-icon-size--xs g-color-white g-bg-primary rounded-circle mr-2">
                  <i class="icon-media-107 u-line-icon-pro"></i>
                </span>
                <h3 class="d-inline-block g-color-white--hover g-font-weight-600 g-transition-0_3 mb-0">Social Strategy</h3>
              </div>

              <span class="d-block g-color-primary--hover g-font-weight-600 g-font-size-12 text-uppercase g-transition-0_3 mb-2">The core social strategy</span>
              <div class="mb-4">
                <p class="g-color-white--hover g-transition-0_3">This a powerful outlet that constantly gets overlooked. We strive to figure out ways to help your audience grow through all social platforms.</p>
              </div>

              <span class="u-link-v6 g-color-primary g-color-primary--hover g-font-size-12 text-uppercase g-text-underline--none--hover g-transition-0_3">
                Read More
                <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
              </span>

              <a class="u-link-v2" href="#"></a>
            </article>
            <!-- End Services -->
          </div> --}}
        </div>
      </div>
      <!-- End Services -->

@endsection
