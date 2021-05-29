<!DOCTYPE html>
<html lang="en">
  <head>
        <!-- Title -->
        <title>PCI - Prosper Calgary Initiative</title>

        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('favicon.ico')}}">

        <!-- Google Fonts -->
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">

        <!-- CSS Global Compulsory -->
        <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/icon-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/icon-line-pro/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/icon-hs/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/chosen/chosen.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/animate.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/hs-megamenu/src/hs.megamenu.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/hamburgers/hamburgers.min.css')}}">

        <!-- CSS Unify -->
        <link rel="stylesheet" href="{{asset('assets/css/unify-core.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/unify-components.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/unify-globals.css')}}">


        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Encode+Sans:400,500,600" rel="stylesheet">

        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="{{asset('assets/vendor/icon-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/icon-line-pro/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/icon-hs/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/dzsparallaxer/dzsparallaxer.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/dzsparallaxer/dzsscroller/scroller.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/dzsparallaxer/advancedscroller/plugin.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/animate.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/hs-megamenu/src/hs.megamenu.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/hamburgers/hamburgers.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/fancybox/jquery.fancybox.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/slick-carousel/slick/slick.css')}}">

        <!-- CSS Unify Theme -->
        <link rel="stylesheet" href="{{asset('assets-theme/css/styles.multipage-marketing.css')}}">

        <!-- CSS Customization -->
        <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
  </head>
    <body>

        <main>
            <!-- Header -->
            <header id="js-header" class="u-header u-header--sticky-top u-header--toggle-section u-header--change-appearance u-shadow-v19">
              <div class="u-header__section g-bg-white g-transition-0_3">
                <nav class="js-mega-menu navbar navbar-expand-lg g-pa-0">
                  <div class="container">
                    <!-- Logo -->
                    <a class="navbar-brand g-pl-15 py-3" href="{{route('frontend.home')}}">
                      <img class="g-width-95" src="{{asset('assets-theme/img/logo/logo.png')}}" alt="Logo">
                    </a>
                    <!-- End Logo -->

                    <!-- Responsive Toggle Button -->
                    <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pos-abs g-top-10 g-right-0 g-pa-0 g-mt-2" type="button"
                            aria-label="Toggle navigation"
                            aria-expanded="false"
                            aria-controls="navBar"
                            data-toggle="collapse"
                            data-target="#navBar">
                      <span class="hamburger hamburger--slider g-px-15">
                        <span class="hamburger-box">
                          <span class="hamburger-inner"></span>
                        </span>
                      </span>
                    </button>
                    <!-- End Responsive Toggle Button -->

                    <!-- Navigation -->
                    <div id="navBar" class="collapse navbar-collapse align-items-center flex-sm-row">
                      <ul class="navbar-nav ml-auto g-pb-30 g-pb-0--lg">
                        <li class="nav-item g-mx-15 g-mx-3--lg g-mb-5 g-mb-0--lg">
                          <a class="nav-link rounded g-color-primary--hover g-bg-transparent g-bg-main--hover g-font-weight-600 g-font-size-15 g-px-14 g-py-10" href="{{route('frontend.home')}}">
                            Home
                          </a>
                        </li>

                        <!-- About -->
                        <li class="nav-item g-mx-15 g-mx-3--lg g-mb-5 g-mb-0--lg">
                            <a class="nav-link rounded g-color-primary--hover g-bg-transparent g-bg-main--hover g-font-weight-600 g-font-size-15 g-px-14 g-py-10" href="{{route('frontend.about')}}">
                              About
                            </a>
                        </li>
                        <!-- End About -->
                        <li class="nav-item g-mx-15 g-mx-3--lg g-mb-5 g-mb-0--lg">
                          <a class="nav-link rounded g-color-primary--hover g-bg-transparent g-bg-main--hover g-font-weight-600 g-font-size-15 g-px-14 g-py-10" href="{{route('frontend.contact.us')}}">
                            Contacts
                          </a>
                        </li>
                        <li class="nav-item g-mx-15 g-mx-3--lg g-mb-5 g-mb-0--lg">
                            <a class="nav-link rounded g-color-primary--hover g-bg-transparent g-bg-main--hover g-font-weight-600 g-font-size-15 g-px-14 g-py-10" href="{{route('frontend.volunteer')}}">
                              Volunteer
                            </a>
                        </li>

                        <!-- About - Submenu -->
                        <li class="nav-item hs-has-sub-menu g-mx-15 g-mx-3--lg g-mb-5 g-mb-0--lg">
                            <a id="nav-link--page" class="nav-link rounded g-color-primary--hover g-bg-transparent g-bg-main--hover g-font-weight-600 g-font-size-15 g-px-14 g-py-10" href="#"
                            aria-haspopup="true"
                            aria-expanded="false"
                            aria-controls="nav-submenu--page">
                            Useful Links
                            </a>

                            <!-- Submenu -->
                            <ul id="nav-submenu--page" class="hs-sub-menu list-unstyled u-shadow-v11 g-min-width-220 g-mt-18"
                                aria-labelledby="nav-link--page">
                            <li class="dropdown-item">
                                <a class="nav-link g-color-text g-font-weight-600" href="{{route('frontend.calgary-today')}}">Calgary Today</a>
                            </li>
                            <li class="dropdown-item">
                                <a class="nav-link g-color-text g-font-weight-600" href="{{route('frontend.what-calgarians-want')}}">What Calgarians Want</a>
                            </li>
                            <li class="dropdown-item">
                                <a class="nav-link g-color-text g-font-weight-600" href="{{route('frontend.calgary-that-works')}}">A Calgary That Works For All</a>
                            </li>
                            {{-- <li class="dropdown-item">
                                <a class="nav-link g-color-text g-font-weight-600" href="{{route('frontend.useful.links')}}#TheManforTheJob">The Man for The Job</a>
                            </li> --}}
                            <li class="dropdown-item">
                                <a class="nav-link g-color-text g-font-weight-600" href="https://open.alberta.ca/dataset/630cdfa7-e052-4553-a073-6388097e744c/resource/256be2ba-2bf5-4f9d-ad20-2571a047387d/download/ma-third-party-advertising-guidelines-local-elections-alberta-2021.pdf" target="_blank">Candidates</a>
                            </li>
                            <li class="dropdown-item">
                                <a class="nav-link g-color-text g-font-weight-600" href="https://www.calgary.ca/election.html" target="_blank">Elections Calgary</a>
                            </li>
                            </ul>
                            <!-- End Submenu -->
                        </li>
                        <!-- End About - Submenu -->
                        <li class="nav-item g-mx-15 g-mx-3--lg g-mb-5 g-mb-0--lg">
                            <a class="nav-link d-inline-block rounded g-brd-around g-brd-2 g-brd-primary g-color-primary--hover g-bg-transparent g-bg-main--hover g-font-weight-600 g-font-size-15 g-px-20 g-py-8" href="{{route('frontend.donate')}}">Donate</a>
                        </li>
                      </ul>
                    </div>
                    <!-- End Navigation -->

                    <!-- Social Icons -->
                    <ul class="col-auto list-inline g-pos-abs g-right-0 g-pos-rel--lg g-top-minus-3 g-py-20 g-py-6--lg g-pr-5 g-mr-60 g-mr-0--lg ml-auto ml-lg-0 mb-0">
                      <li class="list-inline-item g-mx-0">
                        <a class="u-icon-v3 u-icon-size--xs g-bg-transparent g-bg-main--hover rounded" href="https://www.facebook.com/Prosper-Calgary-Initiative-102207262072405" target="_blank"><i class="fa fa-facebook"></i></a>
                      </li>
                      <li class="list-inline-item g-mx-0">
                        <a class="u-icon-v3 u-icon-size--xs g-bg-transparent g-bg-main--hover rounded" href="https://twitter.com/CalgaryProsper" target="_blank"><i class="fa fa-twitter"></i></a>
                      </li>
                      <li class="list-inline-item g-mx-0">
                        <a class="u-icon-v3 u-icon-size--xs g-bg-transparent g-bg-main--hover rounded" href="https://www.instagram.com/prospercalgaryinitiative/" target="_blank"><i class="fa fa-instagram"></i></a>
                      </li>
                    </ul>
                    <!-- End Social Icons -->

                    <div class="col-auto g-hidden-md-down g-pr-0">
                      <div class="g-bg-main g-cursor-pointer g-px-25 g-py-20">
                        <span class="d-block g-color-primary g-font-size-11 mb-1"><strong>403-463-2261 <br> 403-383-4817</strong></span>
                        <span class="d-block g-color-primary"><i class="mr-2 fa fa-phone"></i><strong>Call Us</strong></span>
                      </div>
                    </div>
                  </div>
                </nav>
              </div>
            </header>
            <!-- End Header -->

            @yield('content')

            <!-- Footer -->
            <footer>
              <div class="g-bg-dark">
                <div class="container g-pt-70 g-pb-40">
                  <div class="row">
                    <div class="col-6 col-md-3 g-mb-30">
                      <h3 class="h6 g-color-white text-uppercase">Useful Links</h3>

                      <!-- Links -->
                      <ul class="list-unstyled mb-0">
                        <li>
                          <a class="u-link-v6 g-color-text g-color-primary--hover g-font-weight-500 g-text-underline--none--hover g-py-3" href="{{route('frontend.useful.links')}}#CalgaryToday">
                                Calgary Today
                            <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
                          </a>
                        </li>
                        <li>
                          <a class="u-link-v6 g-color-text g-color-primary--hover g-font-weight-500 g-text-underline--none--hover g-py-3" href="{{route('frontend.useful.links')}}#WhatCalgariansWant">
                            What Calgarians Want
                            <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
                          </a>
                        </li>
                        <li>
                          <a class="u-link-v6 g-color-text g-color-primary--hover g-font-weight-500 g-text-underline--none--hover g-py-3" href="{{route('frontend.useful.links')}}#ACalgaryThatWorksForAll">
                            A Calgary That Works For All
                            <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
                          </a>
                        </li>

                      </ul>
                      <!-- End Links -->
                    </div>

                    {{-- <div class="col-6 col-md-3 g-mb-30">
                      <h3 class="h6 g-color-white text-uppercase">The Man for The Job</h3>

                      <!-- Links -->
                      <ul class="list-unstyled mb-0">
                        <li>
                          <a class="u-link-v6 g-color-text g-color-primary--hover g-font-weight-500 g-text-underline--none--hover g-py-3" href="{{route('frontend.useful.links')}}#TheManforTheJob">
                            <span>Teddy Chibunna</span>
                            <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
                          </a>
                        </li>


                      </ul>
                      <!-- End Links -->
                    </div> --}}

                    <div class="col-6 col-md-3 g-mb-30">
                      <h3 class="h6 g-color-white text-uppercase">Elections Calgary</h3>

                      <!-- Links -->
                      <ul class="list-unstyled mb-0">
                        <li>
                          <a class="u-link-v6 g-color-text g-color-primary--hover g-font-weight-500 g-text-underline--none--hover g-py-3" href="{{route('frontend.useful.links')}}#ElectionsCalgary">
                            <span>Elections Calgary Website</span>
                            <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
                          </a>
                        </li>
                        <li>
                          <a class="u-link-v6 g-color-text g-color-primary--hover g-font-weight-500 g-text-underline--none--hover g-py-3" href="{{route('frontend.useful.links')}}#ElectionsCalgary">
                            <span>Third Party Advertising Guidlines</span>
                            <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
                          </a>
                        </li>

                      </ul>
                      <!-- End Links -->
                    </div>

                    <div class="col-6 col-md-3 g-mb-30">
                      <!-- Links -->
                      <ul class="list-inline">
                        <li class="list-inline-item mb-1">
                          <a class="u-icon-v2 u-icon-size--xs g-brd-gray-light-v2 g-brd-primary--hover g-color-gray-light-v1 g-color-primary--hover rounded" href="#">
                            <i class="fa fa-facebook"></i>
                          </a>
                        </li>
                        <li class="list-inline-item mb-1">
                          <a class="u-icon-v2 u-icon-size--xs g-brd-gray-light-v2 g-brd-primary--hover g-color-gray-light-v1 g-color-primary--hover rounded" href="#">
                            <i class="fa fa-twitter"></i>
                          </a>
                        </li>
                        <li class="list-inline-item mb-1">
                          <a class="u-icon-v2 u-icon-size--xs g-brd-gray-light-v2 g-brd-primary--hover g-color-gray-light-v1 g-color-primary--hover rounded" href="#">
                            <i class="fa fa-instagram"></i>
                          </a>
                        </li>
                      </ul>

                      <ul class="list-unstyled mb-4">
                        <li>
                          <a class="u-link-v6 g-color-text g-color-primary--hover g-font-weight-500 g-text-underline--none--hover g-py-3" href="{{route('frontend.contact.us')}}">
                            <span>Contact Us</span>
                            <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
                          </a>
                        </li>
                      </ul>
                      <!-- End Links -->

                        {{-- <h3 class="h6 g-color-white text-uppercase">Address</h3>
                        <address class="g-font-size-13 g-color-gray-dark-v3 g-font-weight-600 g-line-height-2 mb-0">
                            470 Lucy Forks,<br>Patriciafurt, YC7B 3UT<br>WY10037, Great Britain
                        </address> --}}
                    </div>
                  </div>
                </div>
              </div>

              <div class="g-bg-light-v1">
                <div class="container g-pt-30">
                  <div class="row align-items-center">
                    <div class="col-md-4 text-center text-md-left g-mb-30">
                      <!-- Logo -->
                      <a class="g-text-underline--none--hover mr-4" href="home-page-1.html">
                        <img class="g-width-95" src="{{asset('assets-theme/img/logo/logo.png')}}" alt="Logo">
                      </a>
                      <!-- End Logo -->
                      <p class="d-inline-block align-middle g-font-size-13 mb-0 g-color-dark-light-v1">&copy; 2021 Prosper Calgary Initiative.<br>All Rights Reserved.</p>
                    </div>

                    <div class="col-md-4 g-mb-30">
                      <!-- Social Icons -->
                      <ul class="list-inline text-center mb-0">
                        <li class="list-inline-item">
                          <a class="u-icon-v3 u-icon-size--sm g-color-dark-light-v1 g-color-primary--hover g-bg-transparent g-bg-main--hover rounded" href="https://www.facebook.com/Prosper-Calgary-Initiative-102207262072405" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a class="u-icon-v3 u-icon-size--sm g-color-dark-light-v1 g-color-primary--hover g-bg-transparent g-bg-main--hover rounded" href="https://twitter.com/CalgaryProsper" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="u-icon-v3 u-icon-size--sm g-color-dark-light-v1 g-color-primary--hover g-bg-transparent g-bg-main--hover rounded" href="https://www.instagram.com/prospercalgaryinitiative/" target="_blank"><i class="fa fa-instagram"></i></a>
                          </li>
                      </ul>
                      <!-- End Social Icons -->
                    </div>

                    <div class="col-md-4 g-mb-30 text-right">
                      <div class="d-inline-block g-mx-15">
                        <h4 class="g-color-dark-light-v1 g-font-size-11 text-left text-uppercase">Email</h4>
                        <a href="#" class="g-color-dark-light-v1">info@prospercalgaryinitiative.com</a>
                      </div>
                      {{-- <div class="d-inline-block g-mx-15">
                        <h4 class="g-color-text g-font-size-11 text-left text-uppercase">Phone</h4>
                        <a href="#">(0161) 347 8854</a>
                      </div> --}}
                    </div>
                  </div>
                </div>
              </div>
            </footer>
            <!-- End Footer -->

            <!-- Go to Top -->
            <a class="js-go-to u-go-to-v1 g-width-40 g-height-40 g-color-primary g-bg-main-opacity-0_5 g-bg-main--hover g-bg-main--focus g-font-size-12 rounded" href="#" data-type="fixed" data-position='{
             "bottom": 15,
             "right": 15
           }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
              <i class="hs-icon hs-icon-arrow-top"></i>
            </a>
            <!-- End Go to Top -->
          </main>

        <!-- JS Global Compulsory -->
        <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/vendor/jquery-migrate/jquery-migrate.min.js')}}"></script>
        <script src="{{asset('assets/vendor/popper.js/popper.min.js')}}"></script>
        <script src="{{asset('assets/vendor/bootstrap/bootstrap.min.js')}}"></script>

        <!-- JS Implementing Plugins -->
        <script src="{{asset('assets/vendor/hs-megamenu/src/hs.megamenu.js')}}"></script>
        <script src="{{asset('assets/vendor/dzsparallaxer/dzsparallaxer.js')}}"></script>
        <script src="{{asset('assets/vendor/dzsparallaxer/dzsscroller/scroller.js')}}"></script>
        <script src="{{asset('assets/vendor/dzsparallaxer/advancedscroller/plugin.js')}}"></script>
        <script src="{{asset('assets/vendor/fancybox/jquery.fancybox.min.js')}}"></script>
        <script src="{{asset('assets/vendor/slick-carousel/slick/slick.js')}}"></script>
        <script src="{{asset('assets/vendor/appear.js')}}"></script>
        <script src="{{asset('assets/vendor/chosen/chosen.jquery.js')}}"></script>
        <script src="{{asset('assets/vendor/image-select/src/ImageSelect.jquery.js')}}"></script>

        <!-- JS Unify -->
        <script src="{{asset('assets/js/hs.core.js')}}"></script>
        <script src="{{asset('assets/js/components/hs.header.js')}}"></script>
        <script src="{{asset('assets/js/helpers/hs.hamburgers.js')}}"></script>
        <script src="{{asset('assets/js/components/hs.dropdown.js')}}"></script>
        <script src="{{asset('assets/js/components/hs.popup.js')}}"></script>
        <script src="{{asset('assets/js/components/hs.carousel.js')}}"></script>
        <script src="{{asset('assets/js/components/hs.go-to.js')}}"></script>
        <script src="{{asset('assets/js/components/hs.tabs.js')}}"></script>
        <script src="{{asset('assets/js/components/hs.select.js')}}"></script>
        <script src="{{asset('assets/js/components/hs.counter.js')}}"></script>


        <!-- JS Customization -->
        <script src="{{asset('assets/js/custom.js')}}"></script>

        <!-- JS Plugins Init. -->
        <script>
        $(document).on('ready', function () {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');

            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
            event: 'hover',
            pageContainer: $('.container'),
            breakpoint: 991
            });

            // initialization of HSDropdown component
            $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
            afterOpen: function () {
                $(this).find('input[type="search"]').focus();
            }
            });

            // initialization of popups
            $.HSCore.components.HSPopup.init('.js-fancybox');

            // initialization of carousel
            $.HSCore.components.HSCarousel.init('.js-carousel');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
        });

        $(document).on('ready', function () {
            // initialization of tabs
            $.HSCore.components.HSTabs.init('[role="tablist"]');

            // initialization of counters
            var counters = $.HSCore.components.HSCounter.init('[class*="js-counter"]');

        });

        $(window).on('load', function () {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');

            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
            event: 'hover',
            pageContainer: $('.container'),
            breakpoint: 991
            });

            // initialization of custom select
            setTimeout(function() { // important in this case
            $.HSCore.components.HSSelect.init('.js-custom-select');
            }, 1);
        });

        $(window).on('resize', function () {
            setTimeout(function () {
            $.HSCore.components.HSTabs.init('[role="tablist"]');
            }, 200);
        });
        </script>

    </body>
</html>
