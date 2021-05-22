@extends('layouts.app')
@section('content')

<!-- Promo Banner -->
<div class="g-min-height-450 g-flex-centered g-bg-img-hero g-bg-pos-top-center g-bg-size-cover g-pt-80" style="background-image: url(assets/img/members.jpg);">
    <div class="container g-pos-rel g-z-index-1">
      <span class="d-block text-uppercase g-color-primary g-font-weight-500 g-font-size-13 mb-4"></span>
      <h2 class="h1 g-color-white g-font-size-60--lg mb-0">Useful Links</h2>
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

    <hr class="g-brd-gray-light-v4 my-0">

    <div class="row g-pt-100" id="WhatCalgariansWant">
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
                <img class="img-fluid" src="{{asset('assets/img/what-calgarians-want.jpg')}}" alt="Image Description">
              </div>
          </div>
          <!-- End Carousel -->
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

  <!-- Promo Banner -->
  <div id="TheManforTheJob" class="g-bg-img-hero g-bg-pos-top-center g-bg-size-cover g-bg-cover g-bg-white-gradient-opacity-v5--after" style="background-image: url({{asset('assets/img/teddy-chibunna.jpg')}});">
    <div class="container g-pos-rel g-z-index-1">
      <div class="row justify-content-between">
        <div class="col-md-9 g-py-100">
          <div class="mb-5">
            <span class="d-block text-uppercase g-color-dark-light-v1 g-font-weight-500 g-font-size-13 mb-4"><strong>The Man for the Job</strong></span>
            <h2 class="mb-4">Teddy Chibunna Ogbonna</h2>
            <p class="g-font-size-16 g-line-height-2">
                <strong>Teddy has two children, married and is the last of ten siblings, orphaned at the age of seven. He arrived Canada in 2004 to participate in the World Youth Centre pilot project at the University of Toronto as one of the curriculum consultants and keynote speakers.  In 2006, he returned to Canada as an intern in the office of a former City of Toronto councilor- Adam Giambrone. In 2008, he moved to Calgary, which he loves and is proud to call his home.
                Teddy graduated from the Institute of Management and Technology (IMT) Enugu, Nigeria with Higher National Diploma in Applied Arts in 1992 and from the University of Calgary’ with double majors in Law and Society and Political science in 2019.

                Teddy is widely travelled, has worked with Shell Petroleum and Schlumberger as a Contract Safety Officer in Africa. Worked for the City of Calgary as Recreation Instructor/Leader, worked for few security and real estate investment firms in Canada on leadership positions and was on the board in his previous riding of Calgary McCall under the Progressive Conservative party.

                Teddy has co-owned a small business in Calgary. His overall experience transcends the not-for profit development consulting on issues of transparency, accountability and good governance policies. The energy sector-oil and gas, coaching, customer service, communication, environment, human rights activism, community development and planning, marketing and social entrepreneurial activities/youth work. He enjoys volunteering and helping young people to build leadership qualities through sports and capacity building workshops.

                Teddy is a published author, was the Vice Chair of Human Rights information Network Nigeria, via The British Council. He has spoken at high levels stakeholders meeting with the international systems, consulted with governments at all levels in Africa, Europe and North America, i.e. The United States Government, British Government,  the United Nations (UNIC, UNICEF, UNDP) The World Bank, The British Council, Goethe Institute, and is involved in a number of non-profit initiatives locally in Calgary and abroad.

                He founded an international Youth organization (Youth for Transparency International/African Youth For Transparency) which has an ECOSOC status with the United Nations and envisions a world where young people are integrated in decision making at all levels of development and policy making as change makers to social challenges and won the Nelson Mandela & Gracia global Innovation Award in 2008. YTI operates in 10 countries independently.

                Teddy’s hobbies are coaching kids basketball and soccer for free, reading, biking, swimming, hiking, golfing, working out and spending time with family and friends.</strong>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Promo Banner -->

  <!-- Articles -->
  <div class="container g-pt-100 g-pb-70">
    <div class="row">
      <div class="col-lg-6 g-mb-30"  id="ElectionsCalgary">
        <!-- Article -->
        <article class="g-pos-rel">
          <img class="img-fluid w-100" src="{{asset('assets/img/elections-calgary.jpg')}}" alt="Image Description">
          <div class="g-bg-white-gradient-opacity-v1 g-pos-abs g-bottom-0 g-left-0 g-right-0 g-pa-30">
            <h3><a class="u-link-v5 g-color-white g-color-primary--hover" href="https://www.calgary.ca/election.html" target="_blank">Elections Calgary</a></h3>
            <a class="u-link-v6 g-color-white g-color-primary--hover g-font-weight-500 g-text-underline--none--hover g-py-3" href="https://www.calgary.ca/election.html" target="_blank">
              Read More
              <span class="u-link-v6-arrow g-font-size-18">&rightarrow;</span>
            </a>
          </div>
        </article>
        <!-- End Article -->
      </div>

      <div class="col-lg-6 g-mb-30"  id="Candidates">
        <!-- Article -->
        <article class="g-pos-rel">
          <img class="img-fluid w-100" src="{{asset('assets/img/third-party-advertising.jpg')}}" alt="Image Description">
          <div class="g-bg-white-gradient-opacity-v1 g-pos-abs g-bottom-0 g-left-0 g-right-0 g-pa-30">
            <h3><a class="u-link-v5 g-color-white g-color-primary--hover" href="https://open.alberta.ca/dataset/630cdfa7-e052-4553-a073-6388097e744c/resource/256be2ba-2bf5-4f9d-ad20-2571a047387d/download/ma-third-party-advertising-guidelines-local-elections-alberta-2021.pdf" target="_blank">Third Part Advertising Guidelines for Local Elections in Alberta</a></h3>
            <a class="u-link-v6 g-color-white g-color-primary--hover g-font-weight-500 g-text-underline--none--hover g-py-3" href="https://open.alberta.ca/dataset/630cdfa7-e052-4553-a073-6388097e744c/resource/256be2ba-2bf5-4f9d-ad20-2571a047387d/download/ma-third-party-advertising-guidelines-local-elections-alberta-2021.pdf" target="_blank">
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
  @endsection
