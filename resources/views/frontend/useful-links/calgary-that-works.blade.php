@extends('layouts.app')
@section('content')

<!-- Promo Banner -->
<div class="g-min-height-450 g-flex-centered g-bg-img-hero g-bg-pos-top-center g-bg-size-cover g-pt-80" style="background-image: url(assets/img/members.jpg);">
    <div class="container g-pos-rel g-z-index-1">
      <span class="d-block text-uppercase g-color-primary g-font-weight-500 g-font-size-13 mb-4"></span>
      <h2 class="h1 g-color-white g-font-size-60--lg mb-0">Calgary That Works</h2>
    </div>
</div>
<!-- End Promo Banner -->

  <!-- Works -->
  <div class="container" id="CalgaryToday">

    <div class="row g-pt-100 g-pb-30--lg" id="ACalgaryThatWorksForAll">
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
                <img class="img-fluid" src="{{asset('assets/img/calgary-that-works.jpg')}}" alt="Image Description">
              </div>

          </div>
          <!-- End Carousel -->

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

  @endsection
