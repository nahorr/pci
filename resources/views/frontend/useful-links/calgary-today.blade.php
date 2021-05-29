@extends('layouts.app')
@section('content')

<!-- Promo Banner -->
<div class="g-min-height-450 g-flex-centered g-bg-img-hero g-bg-pos-top-center g-bg-size-cover g-pt-80" style="background-image: url(assets/img/members.jpg);">
    <div class="container g-pos-rel g-z-index-1">
      <span class="d-block text-uppercase g-color-primary g-font-weight-500 g-font-size-13 mb-4"></span>
      <h2 class="h1 g-color-white g-font-size-60--lg mb-0">Calgary Today</h2>
    </div>
</div>
  <!-- End Promo Banner -->

  <!-- Works -->
  <div class="container" id="CalgaryToday">
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
              <img class="img-fluid" src="{{asset('assets/img/calgary-today.jpg')}}" alt="Image Description">
            </div>

          </div>
          <!-- End Carousel -->


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

  </div>
  @endsection
