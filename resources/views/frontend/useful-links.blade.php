@extends('layouts.app')
@section('content')

<!-- Promo Banner -->
<div class="g-min-height-450 g-flex-centered g-bg-img-hero g-bg-pos-top-center g-bg-size-cover g-pt-80" style="background-image: url(assets/img-temp/1920x800/img2.jpg);">
    <div class="container g-pos-rel g-z-index-1">
      <span class="d-block text-uppercase g-color-primary g-font-weight-500 g-font-size-13 mb-4"></span>
      <h2 class="h1 g-color-white g-font-size-60--lg mb-0">Useful Links</h2>
    </div>
  </div>
  <!-- End Promo Banner -->

  <!-- Breadcrumbs -->
  <section class="g-brd-bottom g-brd-gray-light-v4 g-py-30">
    <div class="container">
      <ul class="d-flex justify-content-between u-list-inline">
        <li class="list-inline-item g-mr-15">
          <a class="u-link-v5 g-color-text g-pr-10" href="#">Home</a>
          <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
        </li>
        <li class="list-inline-item g-mr-15">
          <a class="u-link-v5 g-color-text g-pr-10" href="#">Pages</a>
          <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
        </li>
        <li class="list-inline-item g-color-primary">
          <span>Works</span>
        </li>
        <li class="list-inline-item ml-auto">
          <a class="u-link-v5 g-brd-around g-brd-gray-light-v4 g-brd-primary--hover g-color-text g-color-primary--hover g-font-weight-500 rounded g-px-30 g-py-10" href="page-hire-us-1.html">Hire Us</a>
        </li>
      </ul>
    </div>
  </section>
  <!-- End Breadcrumbs -->

  <!-- Works -->
  <div class="container">
    <div class="row g-pt-100 g-pb-30--lg">
      <div class="col-lg-6 g-mb-100">
        <!-- Works Info -->
        <div class="g-pos-rel">
          <!-- Carousel -->
          <div id="carouselCus2" class="js-carousel u-carousel-v12"
               data-infinite="true"
               data-slides-show="1"
               data-arrows-classes="u-arrow-v1 g-width-20 g-height-20 g-pos-abs g-bottom-minus-30 g-left-0 g-color-main g-color-primary--hover"
               data-arrow-left-classes="fa fa-angle-left"
               data-arrow-right-classes="fa fa-angle-right g-ml-30">
            <div class="js-slide">
              <img class="img-fluid" src="assets/img-temp/900x600/img3.jpg" alt="Image Description">
            </div>
            <div class="js-slide">
              <img class="img-fluid" src="assets/img-temp/900x600/img4.jpg" alt="Image Description">
            </div>
          </div>
          <!-- End Carousel -->

          <div class="g-pos-abs g-bottom-minus-30 g-right-0 g-right-minus-20--sm">
            <a class="js-fancybox d-flex g-text-underline--none--hover" href="javascript:;"
               data-src="//www.youtube.com/embed/BNpiwOkKIJ8?autoplay=1"
               data-speed="350"
               data-caption="Video Popup">
              <span class="g-color-main g-font-weight-500 g-font-size-13 mt-auto mr-4">Watch Transforming Video</span>
              <span class="u-icon-v3 u-icon-size--lg g-color-white g-bg-primary g-bg-main--hover rounded g-pos-rel g-z-index-1 g-cursor-pointer">
                <i class="g-font-size-17 g-pos-rel g-left-2 fa fa-play"></i>
              </span>
            </a>
          </div>
        </div>
        <!-- End Works Info -->
      </div>

      <div class="col-lg-6 g-mb-100">
        <div class="g-pl-40--lg">
          <div class="mb-5">
            <h3 class="mb-4">Calgary Today</h3>
            <p class="g-line-height-2">
                With the dwindling fortunes from the oil and gas industry in recent years, Alberta’s economy has taken a hit. Calgary, the socio-economic hub of the province require prudent leadership to drive the city out of the social, and economic development quagmire the city is witnessing. Our city center is depleted. Companies and business establishments are relocating out of the city, causing unemployment rates and poverty levels to rise to unprecedented rates. Calgary is at a turning point! It is time for a new leadership approach that will make Calgary work for every Calgarian.
            </p>
            <p class="g-line-height-2">
                It’s time for Calgary to unleash its great potentials. A different kind of energy at City Hall is needed to turn the fortune of the City of Calgary around for good. A government that will focus on the welfare of all, irrespective of their creed, income, origin, and social status. A leadership at City Hall that will involve our youth, our elderly, and everyone in-between. A city administration that will lower taxes and retain businesses in the City to create jobs and drive socio-economic development in the City.
            </p>
            <p class="g-line-height-2">
                Calgary can be better. Calgary can do better. It’s time for prudence and accountability in the governance of this great city. We can make it happen!
            </p>
          </div>


        </div>
      </div>
    </div>

    <hr class="g-brd-gray-light-v4 my-0">

    <div class="row g-pt-100">
      <div class="col-lg-6 order-lg-2 g-mb-100">
        <!-- Works Info -->
        <div class="g-pos-rel">
          <!-- Carousel -->
          <div id="carouselCus2" class="js-carousel u-carousel-v12"
               data-infinite="true"
               data-slides-show="1"
               data-arrows-classes="u-arrow-v1 g-width-20 g-height-20 g-pos-abs g-bottom-minus-30 g-left-0 g-color-main g-color-primary--hover"
               data-arrow-left-classes="fa fa-angle-left"
               data-arrow-right-classes="fa fa-angle-right g-ml-30">
            <div class="js-slide">
              <img class="img-fluid" src="assets/img-temp/900x600/img5.jpg" alt="Image Description">
            </div>
            <div class="js-slide">
              <img class="img-fluid" src="assets/img-temp/900x600/img6.jpg" alt="Image Description">
            </div>
          </div>
          <!-- End Carousel -->

          <div class="g-pos-abs g-bottom-minus-30 g-right-0 g-right-minus-20--sm">
            <a class="js-fancybox d-flex g-text-underline--none--hover" href="javascript:;"
               data-src="//www.youtube.com/embed/BNpiwOkKIJ8?autoplay=1"
               data-speed="350"
               data-caption="Video Popup">
              <span class="g-color-main g-font-weight-500 g-font-size-13 mt-auto mr-4"></span>
              <span class="u-icon-v3 u-icon-size--lg g-color-white g-bg-primary g-bg-main--hover rounded g-pos-rel g-z-index-1 g-cursor-pointer">
                <i class="g-font-size-17 g-pos-rel g-left-2 fa fa-play"></i>
              </span>
            </a>
          </div>
        </div>
        <!-- End Works Info -->
      </div>

      <div class="col-lg-6 order-lg-1 g-mb-100">
        <div class="g-pr-40--lg">
          <div class="mb-5">
            <h3 class="mb-4">What Calgarians Want</h3>
            <p class="g-line-height-2">
                Calgary is a major hub of Canada’s economy. Our municipal government should be transparent and accountable. City councillors
                and managers should cut their pay and stop all bonuses to reflect the harsh economic reality of the city. To boost the economic
                recovery of the city, the Mayor should have only one pension plan. Supplementary pensions for the Mayor and some other Council
                leadership id draining the scarce resources of the city. This is not sustainable. We should have the lowest property and business tax. The City must
                give tax incentives to local businesses to attract and promote local and international investments right here in Calgary. We should have a balanced budget.
            </p>
            <p class="g-line-height-2">
                We believe that young people should have recreational opportunities in their neighbourhoods that are low cost or free. We need to address
                the sprawling Calgary downtown core. It is not sustainable. The City of Calgary should not use taxpayer’s money to fund art
                works that do not make sense or reflect the values or traditions we share. The Calgary Flames approved new stadium should be a
                top-class energy efficient building that will be attractive to other forms of usability. We need to involve
                our youth into politics and city matters as they are the future of this city. Let’s give them a voice to discuss issues that concern them and the future of this great city.
            </p>
            <p class="g-line-height-2">
                The City must continue to invest in common sense public infrastructure that are relevant and affordable. Our parks and recreation spaces must be a place of
                comfort and safety for all Calgarians. Public transit system in the city must be expanded to reach every quadrant, and major neighbourhoods, of the city.
            </p>
          </div>


        </div>
      </div>
    </div>

    <hr class="g-brd-gray-light-v4 my-0">

    <div class="row g-pt-100 g-pb-30--lg">
      <div class="col-lg-6 g-mb-100">
        <!-- Works Info -->
        <div class="g-pos-rel">
          <!-- Carousel -->
          <div id="carouselCus2" class="js-carousel u-carousel-v12"
               data-infinite="true"
               data-slides-show="1"
               data-arrows-classes="u-arrow-v1 g-width-20 g-height-20 g-pos-abs g-bottom-minus-30 g-left-0 g-color-main g-color-primary--hover"
               data-arrow-left-classes="fa fa-angle-left"
               data-arrow-right-classes="fa fa-angle-right g-ml-30">
            <div class="js-slide">
              <img class="img-fluid" src="assets/img-temp/900x600/img4.jpg" alt="Image Description">
            </div>
            <div class="js-slide">
              <img class="img-fluid" src="assets/img-temp/900x600/img6.jpg" alt="Image Description">
            </div>
          </div>
          <!-- End Carousel -->

          <div class="g-pos-abs g-bottom-minus-30 g-right-0 g-right-minus-20--sm">
            <a class="js-fancybox d-flex g-text-underline--none--hover" href="javascript:;"
               data-src="//www.youtube.com/embed/BNpiwOkKIJ8?autoplay=1"
               data-speed="350"
               data-caption="Video Popup">
              <span class="g-color-main g-font-weight-500 g-font-size-13 mt-auto mr-4">Watch Building Community Video</span>
              <span class="u-icon-v3 u-icon-size--lg g-color-white g-bg-primary g-bg-main--hover rounded g-pos-rel g-z-index-1 g-cursor-pointer">
                <i class="g-font-size-17 g-pos-rel g-left-2 fa fa-play"></i>
              </span>
            </a>
          </div>
        </div>
        <!-- End Works Info -->
      </div>

      <div class="col-lg-6 g-mb-100">
        <div class="g-pl-40--lg">
          <div class="mb-5">
            <h3 class="mb-4">A Calgary That Works For All</h3>
            <p class="g-line-height-2">
                The city of Calgary is made up of a diverse population, based on creed, origin, gender and sexual orientation, profession and
                trade, age, and economic status. The City must work for all its inhabitants. Every one of us must find an opportunity to thrive
                and succeed here in Calgary. Our city must be rid of any form of discrimination, and or favoritism, based on any element of
                our diversity. We are in this together. The city must grow and thrive with each and every one in it. We seek leadership in
                City Hall that will offer all Calgarians equal access to every opportunity and resource necessary for a happy and successful
                living. It is the goal of PCI to support and ensure that the government that takes over at City Hall will work for the benefit
                of all Calgarians.
            </p>
          </div>


        </div>
      </div>
    </div>
  </div>
  <!-- End Works -->

  <!-- Promo Banner -->
  <div class="g-bg-img-hero g-bg-pos-top-center g-bg-size-cover g-bg-cover g-bg-white-gradient-opacity-v5--after" style="background-image: url(assets/img-temp/1920x800/img3.jpg);">
    <div class="container g-pos-rel g-z-index-1">
      <div class="row justify-content-between">
        <div class="col-md-5 g-py-100">
          <div class="mb-5">
            <span class="d-block text-uppercase g-color-dark-light-v1 g-font-weight-500 g-font-size-13 mb-4"><strong>The Man for the Job</strong></span>
            <h2 class="mb-4">Teddy Chibunna Ogbonna <br> https://teddy4calgary.ca/teddy%E2%80%99s-vision</h2>
            <p class="g-font-size-16 g-line-height-2">This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key.</p>
          </div>

          <span class="d-inline-block g-font-weight-600 text-uppercase mr-4">Call Us</span>
          <a class="btn u-btn-outline-primary g-brd-2 g-color-main g-color-primary--hover g-bg-main--hover g-font-weight-600 g-font-size-12 text-uppercase g-px-25 g-py-13" href="#">
            (0161) 347 8854
            <i class="g-pos-rel g-top-minus-1 ml-2 fa fa-angle-right"></i>
          </a>
          <span class="d-inline-block g-font-weight-600 text-uppercase mx-4">or</span>
          <a class="btn u-btn-black g-brd-primary--hover g-color-primary g-color-main--hover g-bg-main g-bg-primary--hover g-font-weight-600 g-font-size-12 text-uppercase g-px-25 g-py-13" href="page-hire-us-1.html">
            Hire Us
            <i class="g-pos-rel g-top-minus-1 ml-2 fa fa-angle-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Promo Banner -->

  <!-- Articles -->
  <div class="container g-pt-100 g-pb-70">
    <div class="row">
      <div class="col-lg-6 g-mb-30">
        <!-- Article -->
        <article class="g-pos-rel">
          <img class="img-fluid w-100" src="assets/img-temp/900x400/img1.jpg" alt="Image Description">
          <div class="g-bg-white-gradient-opacity-v1 g-pos-abs g-bottom-0 g-left-0 g-right-0 g-pa-30">
            <h3><a class="u-link-v5 g-color-white g-color-primary--hover" href="#">Elections Calgary</a></h3>
            <a class="u-link-v6 g-color-white g-color-primary--hover g-font-weight-500 g-text-underline--none--hover g-py-3" href="page-hire-us-1.html">
              Read More
              <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
            </a>
          </div>
        </article>
        <!-- End Article -->
      </div>

      <div class="col-lg-6 g-mb-30">
        <!-- Article -->
        <article class="g-pos-rel">
          <img class="img-fluid w-100" src="assets/img-temp/900x400/img2.jpg" alt="Image Description">
          <div class="g-bg-white-gradient-opacity-v1 g-pos-abs g-bottom-0 g-left-0 g-right-0 g-pa-30">
            <h3><a class="u-link-v5 g-color-white g-color-primary--hover" href="#">Third Part Advertising Guidelines for Local Elections in Alberta</a></h3>
            <a class="u-link-v6 g-color-white g-color-primary--hover g-font-weight-500 g-text-underline--none--hover g-py-3" href="page-hire-us-1.html">
              Read More
              <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
            </a>
          </div>
        </article>
        <!-- End Article -->
      </div>
    </div>
  </div>
  <!-- End Articles -->

  <!-- Clients -->
  <div class="container g-pb-100">
    <!-- Heading -->
    <div class="g-overflow-hidden text-center">
      <div class="u-info-v10-1">
        <h3 class="h6 g-font-weight-600 text-center text-uppercase mb-0">Trusted By</h3>
      </div>
    </div>
    <!-- End Heading -->

    <div id="carouselCus1" class="js-carousel g-max-width-645 mx-auto g-pt-50 g-pb-35"
         data-infinite="true"
         data-fade="true"
         data-items="1"
         data-autoplay="true"
         data-speed="10000"
         data-nav-for="#carouselCus3">
      <div class="js-slide">
        <blockquote class="g-color-dark-light-v1 g-font-weight-500 g-font-size-22 text-center">
          <span class="g-color-primary g-font-size-26">"</span>
            The complete package for me. Plenty to choose from and thanks for the unlimited updates.
          <span class="g-color-primary g-font-size-26">"</span>
        </blockquote>
      </div>

      <div class="js-slide">
        <blockquote class="g-color-dark-light-v1 g-font-weight-500 g-font-size-22 text-center">
          <span class="g-color-primary g-font-size-26">"</span>
            Hi there purchased a couple of days ago and the site looks great, big thanks to the htmlstream guys, they gave me some great help with some fiddly setup issues.
          <span class="g-color-primary g-font-size-26">"</span>
        </blockquote>
      </div>

      <div class="js-slide">
        <blockquote class="g-color-dark-light-v1 g-font-weight-500 g-font-size-22 text-center">
          <span class="g-color-primary g-font-size-26">"</span>
            Dear Htmlstream team, I just bought the Unify template some weeks ago. The template is really nice and offers quite a large set of options.
          <span class="g-color-primary g-font-size-26">"</span>
        </blockquote>
      </div>

      <div class="js-slide">
        <blockquote class="g-color-dark-light-v1 g-font-weight-500 g-font-size-22 text-center">
          <span class="g-color-primary g-font-size-26">"</span>
            A great template, with great examples and good documentation. An easy 5 stars.
          <span class="g-color-primary g-font-size-26">"</span>
        </blockquote>
      </div>

      <div class="js-slide">
        <blockquote class="g-color-dark-light-v1 g-font-weight-500 g-font-size-22 text-center">
          <span class="g-color-primary g-font-size-26">"</span>
            I'm very impressed with the theme and customer support! Thanks <span class="g-color-primary g-font-size-26">"</span>
        </blockquote>
      </div>

      <div class="js-slide">
        <blockquote class="g-color-dark-light-v1 g-font-weight-500 g-font-size-22 text-center">
          <span class="g-color-primary g-font-size-26">"</span>
            Great theme maker. I wish they would create more themes.
          <span class="g-color-primary g-font-size-26">"</span>
        </blockquote>
      </div>

      <div class="js-slide">
        <blockquote class="g-color-dark-light-v1 g-font-weight-500 g-font-size-22 text-center">
          <span class="g-color-primary g-font-size-26">"</span>
            New Unify template looks great!. Love the multiple layout examples for Shortcodes and the new Show code Copy code snippet feature is brilliant.
          <span class="g-color-primary g-font-size-26">"</span>
        </blockquote>
      </div>
    </div>

    <div id="carouselCus3" class="js-carousel u-carousel-v12"
         data-infinite="true"
         data-is-thumbs="true"
         data-autoplay="true"
         data-speed="10000"
         data-center-mode="true"
         data-slides-show="5"
         data-nav-for="#carouselCus1">
      <div class="js-slide u-block-hover">
        <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_5 g-opacity-1--hover g-opacity-1--active g-cursor-pointer" src="assets/img-temp/200x100/img1.png" alt="Image description">
      </div>

      <div class="js-slide u-block-hover">
        <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_5 g-opacity-1--hover g-opacity-1--active g-cursor-pointer" src="assets/img-temp/200x100/img2.png" alt="Image description">
      </div>

      <div class="js-slide u-block-hover">
        <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_5 g-opacity-1--hover g-opacity-1--active g-cursor-pointer" src="assets/img-temp/200x100/img3.png" alt="Image description">
      </div>

      <div class="js-slide u-block-hover">
        <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_5 g-opacity-1--hover g-opacity-1--active g-cursor-pointer" src="assets/img-temp/200x100/img4.png" alt="Image description">
      </div>

      <div class="js-slide u-block-hover">
        <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_5 g-opacity-1--hover g-opacity-1--active g-cursor-pointer" src="assets/img-temp/200x100/img5.png" alt="Image description">
      </div>

      <div class="js-slide u-block-hover">
        <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_5 g-opacity-1--hover g-opacity-1--active g-cursor-pointer" src="assets/img-temp/200x100/img7.png" alt="Image description">
      </div>

      <div class="js-slide u-block-hover">
        <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_5 g-opacity-1--hover g-opacity-1--active g-cursor-pointer" src="assets/img-temp/200x100/img8.png" alt="Image description">
      </div>
    </div>
  </div>
  <!-- End Clients -->



  @endsection
