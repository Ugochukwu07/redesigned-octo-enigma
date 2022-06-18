@extends('layouts.app')

@section('title')
Mobile App Development
@endsection

@section('styles')
  <style>
    .weworkfor i{
      border: 2px solid #4400b1;
      color: #4400b1;
      border-radius: 50%;
      padding: 20px;
      font-size: 50px
    }
  </style>
@endsection

@section('content')	
    
<!--Start Hero-->
<section class="hero-card-web mobile-app-">
  <div class="hero-main-rp container-fluid">
    <div class="row">
      <div class="col-lg-6 v-center">
        <div class="hero-heading-sec2 niwax" data-rellax-speed="3">
          <h1 class="wow fadeIn" data-wow-delay="0.2s">Top Rated Mobile App Development Company</h1>
          <p class="wow fadeIn" data-wow-delay="0.4s">{{ config('app.name') }} is one of the most creative and experienced mobile app development companies in NIgeria.</p>
          <div class="content-sec  d-flex mt30 v-center text-w wow fadeIn" data-wow-delay="0.6s">
            <div class="mr25"><a href="{{ route('contact', ['purpose' => 'mobile']) }}" class="btn-main bg-btn4 lnk">GET STARTED<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a></div>
            <div class="video-intro-pp v-center"><a class="video-link play-video" href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0"><span class="triangle-play"></span></a></div>
            <div class="title-hero-oth v-center"><p>See live demo</p></div>
          </div>
          <div class="awrd-sec text-w mt40 wow fadeIn" data-wow-delay="0.8s">
            <h5>Our To Partners</h5>
            <div class="bages-slider owl-carousel mt20">
              <div class="img-badge-"><a href="#"> <img src="{{ asset('assets/open/images/service/mobile/syticks.png') }}" alt="{{ config('app.name') }} syticks mobile app development company" class="img100w"></a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 v-center">
        <div class="app-hero-bnr wow fadeIn" data-wow-delay="0.4s"> <img src="{{ asset('assets/open/img/mobile-banner.png') }}" alt="niwax mobile app development company" class="img-fluid"> </div>
      </div>
    </div>
  </div>
</section>
<!--End Hero-->
<div class="weworkfor pt20 pb20 dark-bg2">
  <div class="container">
    <div class="logo-weworkfor owl-carousel">
      <div class="items"><i class="fa-solid fa-circle-question"></i></div>
      <div class="items"><i class="fa-solid fa-pen"></i></div>
      <div class="items"><i class="fa-solid fa-envelopes-bulk"></i></div>
      <div class="items"><i class="fa-solid fa-code"></i></div>
      <div class="items"><i class="fa-solid fa-qrcode"></i></div>
      <div class="items"><i class="fa-solid fa-cart-shopping"></i></div>
      <div class="items"><i class="fa-solid fa-laptop-code"></i></div>
      <div class="items"><i class="fa-solid fa-face-laugh-beam"></i></div>
    </div>
  </div>
</div>
<!--Start About-->
<section class="about-sec-app pad-tb pt60 dark-bg2">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="common-heading text-l">
          <h2 class="mb30"><span class="text-second text-bold">{{ config('app.name') }}</span> Mobile App Development Company</h2>
          <p class="mt10">We design, build and deploy the best mobile applications in Nigeria that meet customers' satisfaction. As the use mobile applications increases among smart phone users, mobile app development has become an important asset for both small and large scale businesses. It is therefore very essential to create a mobile app for your business and brand to drive more user and customer engagement.</p>
          <p class="mt10">As a top and leading mobile app developer in Nigeria, we have developed some of the best quality and user-eccentric mobile applications, keeping our customers at the fore front of their businesses. </p>
          <p class="mt10"> <span class="text-bold">We have developed mobile apps for various sectors of the economy. Our solutions cuts across fin-tech, transportation, finance, e-commerce, education and more.</span></p>
        </div>
        <div class="cta-card mt40">							
          <a href="{{ route('contact', ['purpose' => 'mobile']) }}" class="btn-outline lnk">Request A Quote<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="funfact">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-6">
              <div class="funfct srcl1">
                <img src="{{ asset('assets/open/') }}/images/icons/startup.svg" alt="niwax app development template">
                <span class="services-cuntr counter">4</span><span class="services-cuntr">+</span>
                <p>Years Experience</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-6">
              <div class="funfct srcl2">
                <img src="{{ asset('assets/open/') }}/images/icons/team.svg" alt="niwax app development template">
                <span class="services-cuntr counter">6</span><span class="services-cuntr">+</span>
                <p>Talented Squad</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-6">
              <div class="funfct srcl3">
                <img src="{{ asset('assets/open/') }}/images/icons/mobile.svg" alt="niwax app development template">
                <span class="services-cuntr counter">23</span><span class="services-cuntr">+</span>
                <p>Apps Developed</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-6">
              <div class="funfct srcl4">
                <img src="{{ asset('assets/open/') }}/images/icons/computers.svg" alt="niwax app development template">
                <span class="services-cuntr counter">14</span><span class="services-cuntr">+</span>
                <p>Projects Delivered</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-6">
              <div class="funfct srcl5">
                <img src="{{ asset('assets/open/') }}/images/icons/world.svg" alt="niwax app development template">
                <span class="services-cuntr counter">6</span><span class="services-cuntr">+</span>
                <p>Countries Served</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-6">
              <div class="funfct srcl1">
                <img src="{{ asset('assets/open/') }}/images/icons/deal.svg" alt="niwax app development template">
                <span class="services-cuntr counter">100</span><span class="services-cuntr">%</span>
                <p>Client Satisfaction</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End About-->
<!--Start Service-->
<section class="service-block bg-gradient6 pad-tb">
  <div class="service-section-app">
  <div class="sctxt">App Development</div></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="common-heading ptag">
          <span>Service</span>
          <h2>Our Services</h2>
          <p class="mb30">We think big and have hands in all leading technology platforms to provide you wide array of services.</p>
        </div>
      </div>
    </div>
    <div class="row upset link-hover">
      <div class="col-lg-6 col-sm-6 mt30  wow fadeInUp" data-wow-delay=".2s">
        <div class="s-block wide-sblock">
          <div class="s-card-icon-large">
            <img src="{{ asset('assets/open/images/service/iOS.png') }}" alt="iOS App Development" class="img-fluid"/>
          </div>
          <div class="s-block-content-large">
            <h4>iOS App Development</h4>
            <p>{{ config('app.name') }} understands your unique needs and provides mobile application development solutions for your business. Connect with us to get to take your business to another level.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".4s">
        <div class="s-block wide-sblock">
          <div class="s-card-icon-large"><img src="{{ asset('assets/open/images/service/android.png') }}" alt="Android App Development" class="img-fluid"/></div>
          <div class="s-block-content-large">
            <h4>Android App Development</h4>
            <p>We are quick to produce a high-quality app. In addition to receiving incredibly positive feedback from clients, the app’s downloads in the App Store almost quadrupled.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".6s">
        <div class="s-block wide-sblock">
          <div class="s-card-icon-large"><img src="{{ asset('assets/open/images/service/flutter.png') }}" alt="service flutter" class="img-fluid"/></div>
          <div class="s-block-content-large">
            <h4>Cross Platform App Dev</h4>
            <p>We create cross-platform mobile apps. Boasting a shorter time to market, cross platform apps run on multiple devices and OS.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".8s">
        <div class="s-block wide-sblock">
          <div class="s-card-icon-large"><img src="{{ asset('assets/open/images/service/swift.jpg') }}" alt="service" class="img-fluid"/></div>
          <div class="s-block-content-large">
            <h4>Native App Development</h4>
            <p>We create mobile apps for specific platforms, including iOS and Android. Using technologies like Java and Swift respectively</p>
          </div>
        </div>
      </div>
    </div>
    <div class="-cta-btn mt70">
      <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.1s">
        <p>Hire a <span>Dedicated Developer</span></p>
        <a href="{{ route('contact', ['purpose' => 'mobile']) }}" class="btn-main bg-btn2 lnk">Hire Now<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
      </div>
    </div>
  </div>
</section>
<!--End Service-->

 <!--Start Process-->
 <section class="service-block pad-tb light-dark">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="common-heading ptag">
          <span>Process</span>
          <h2>Our App Development Process</h2>
          <p>Our design process follows a proven approach. We begin with a deep understanding of your needs and create a planning template.</p>
        </div>
      </div>
    </div>
    <div class="row upset justify-content-center mt60">
      <div class="col-lg-4 v-center order1">
        <div class="image-block1">
          <img src="{{ asset('assets/open/images/service/strategy-1.jpg') }}" alt="Process" class="img-fluid"/>
        </div>
      </div>
      <div class="col-lg-7 v-center order2">
        <div class="ps-block">
          <span>1</span>
          <h3>Product Strategy</h3>
          <p>{{ config('app.name') }} has delivered over 200 apps so far. We believe that workshops and collaboration are the best way to find the product-market fit. Our offer covers product design sprints, scoping sessions, and UX audits if you already have a product.</p>
        </div>
      </div>
    </div>
    <div class="row upset justify-content-center mt60">
      <div class="col-lg-7 v-center order2">
        <div class="ps-block">
          <span>2</span>
          <h3>Product Design</h3>
          <p>We believe in human-centered design. Our design services include UI design, UX design, and illustration. This way, we can create a consistent and intuitive user experience.</p>
        </div>
      </div>
      <div class="col-lg-4 v-center order1">
        <div class="image-block1">
          <img src="{{ asset('assets/open/images/service/strategy-2.jpg') }}" alt="Product Design" class="img-fluid"/>
        </div>
      </div>
    </div>
    <div class="row upset justify-content-center mt60">
      <div class="col-lg-4 v-center order1">
        <div class="image-block1">
          <img src="{{ asset('assets/open/images/service/strategy-3.jpg') }}" alt="Product Development" class="img-fluid"/>
        </div>
      </div>
      <div class="col-lg-7 v-center order2">
        <div class="ps-block">
          <span>3</span>
          <h3>Product Development</h3>
          <p>Mobile software development brings the best results when we work closely with our clients. Scrum methods allow for better communication and fast validation. We test and improve rapidly to deliver the best software possible.</p>
        </div>
      </div>
    </div>
    <div class="row upset justify-content-center mt60">
      <div class="col-lg-7 v-center order2">
        <div class="ps-block">
          <span>4</span>
          <h3>Product Management</h3>
          <p>You can be a product owner and know your product inside and out, but you still need a person to manage the backlog and the team. This is where our product managers can help you out.</p>
        </div>
      </div>
      <div class="col-lg-4 v-center order1">
        <div class="image-block1">
          <img src="{{ asset('assets/open/images/service/strategy-4.jpg') }}" alt="Product Management" class="img-fluid"/>
        </div>
      </div>
    </div>
    <div class="row upset justify-content-center mt60">
      <div class="col-lg-4 v-center order1">
        <div class="image-block1">
          <img src="{{ asset('assets/open/images/service/strategy-5.jpg') }}" alt="Product QA Testing" class="img-fluid"/>
        </div>
      </div>
      <div class="col-lg-7 v-center order2">
        <div class="ps-block">
          <span>5</span>
          <h3>Product QA Testing</h3>
          <p>Custom software development is never complete without testing! Our QA engineers are the keepers of high quality. To make sure that your product is flawless, we take care of automated and manual QA testing.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End Process-->

@include('layouts.widgets.services')

@include('layouts.widgets.why-us')

<x-Portfoilo department-id="4" />

@include('layouts.widgets.our-clients')

<!--Start Badges-->
<section class="badges-section pad-tb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="common-heading w-tdxt">
          <span>WE MAKE RELATIONSHIPS</span>
          <h2>Ranked as #1 Top Web & App Development Companies</h2>
        </div>
      </div>
    </div>
    {{-- <div class="row">
      <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".2s">
        <div class="badges-content">
          <img src="{{ asset('assets/open/') }}/images/about/badges-a.png" alt="budges"  class="img-fluid">
          <p>ABC DEF Industry Leader</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".4s">
        <div class="badges-content">
          <img src="{{ asset('assets/open/') }}/images/about/badges-b.png" alt="budges"  class="img-fluid">
          <p>Best eCommerce Development Company</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".6s">
        <div class="badges-content">
          <img src="{{ asset('assets/open/') }}/images/about/badges-c.png" alt="budges"  class="img-fluid">
          <p>ABC DEF High Performer Winner</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".8s">
        <div class="badges-content">
          <img src="{{ asset('assets/open/') }}/images/about/badges-d.png" alt="budges"  class="img-fluid">
          <p>Top App Developer 2019-20</p>
        </div>
      </div>
    </div> --}}
    <div class="-cta-btn mt70">
      <div class="free-cta-title v-center wow fadeInUp" data-wow-delay="1s">
        <p>We <span>Promise.</span> We <span>Deliver.</span></p>
        <a href="{{ route('contact', ['purpose' => 'all']) }}" class="btn-main bg-btn2 lnk">Let's Work Together<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
      </div>
    </div>
  </div>
</section>
<!--End Badges-->
<!--Start work-category-->
<section class="work-category pad-tb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="common-heading ptag">
          <span>We Have Worked Across Multiple Industries</span>
          <h2>Industries We Serve</h2>
          <p>Successfully delivered digital products Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div>
    </div>
    <div class="row mt30">
      <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.1s"> <div class="industry-workfor hoshd"><img src="{{ asset('assets/open/') }}/images/icons/house.svg" alt="img"> <h6>Real estate</h6> </div></div>
      <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.3s"> <div class="industry-workfor hoshd"><img src="{{ asset('assets/open/') }}/images/icons/travel-case.svg" alt="img"> <h6>Tour &amp; Travels</h6> </div></div>
      <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.5s"> <div class="industry-workfor hoshd"><img src="{{ asset('assets/open/') }}/images/icons/video-tutorials.svg" alt="img"> <h6>Education</h6> </div></div>
      <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.7s"> <div class="industry-workfor hoshd"><img src="{{ asset('assets/open/') }}/images/icons/taxi.svg" alt="img"> <h6>Transport</h6> </div></div>
      <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.9s"> <div class="industry-workfor hoshd"><img src="{{ asset('assets/open/') }}/images/icons/event.svg" alt="img"> <h6>Event</h6> </div></div>
      <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.1s"> <div class="industry-workfor hoshd"><img src="{{ asset('assets/open/') }}/images/icons/smartphone.svg" alt="img"> <h6>eCommerce</h6> </div></div>
      <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.3s"> <div class="industry-workfor hoshd"><img src="{{ asset('assets/open/') }}/images/icons/joystick.svg" alt="img"> <h6>Game</h6> </div></div>
      <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.5s"> <div class="industry-workfor hoshd"><img src="{{ asset('assets/open/') }}/images/icons/healthcare.svg" alt="img"> <h6>Healthcare</h6> </div></div>
      <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.7s"> <div class="industry-workfor hoshd"><img src="{{ asset('assets/open/') }}/images/icons/money-growth.svg" alt="img"> <h6>Finance</h6> </div></div>
      <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.9s"> <div class="industry-workfor hoshd"><img src="{{ asset('assets/open/') }}/images/icons/baker.svg" alt="img"> <h6>Restaurant</h6> </div></div>
      <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="2.1s"> <div class="industry-workfor hoshd"><img src="{{ asset('assets/open/') }}/images/icons/mobile-app.svg" alt="img"> <h6>On-Demand</h6> </div></div>
      <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="2.3s"> <div class="industry-workfor hoshd"><img src="{{ asset('assets/open/') }}/images/icons/groceries.svg" alt="img"> <h6>Grocery</h6> </div></div></div>
    </div>
  </section>
  <!--End  work-category-->
 
  @include('layouts.widgets.reviews')


  <!--Start CTA-->
  <section class="app-cta pad-tb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="common-heading text-w">
            <span>Let's work together</span>
            <h2>We Love to Listen to Your Requirements</h2>
            <a href="#" class="btn-main bg-btn4 lnk">GET STARTED<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
            <p class="cta-call">Or call us now <a href="tel:+1234567890"><i class="fas fa-phone-alt"></i> (123) 456 7890</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="shape shape-c1"></div>
    <div class="shape shape-c2"></div>
    <div class="shape shape-c3"></div>
  </section>
  <!--End CTA-->
  
  <x-Offices />
  
@endsection
