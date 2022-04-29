@extends('layouts.app')

@section('title')
Mobile App Development
@endsection

@section('styles')
<style>
  @keyframes rotateme {
      from {
          transform: rotate(0deg);
      }
      to { 
          transform: rotate(360deg);
      }
  }
  @-webkit-keyframes rotateme {
      from {
          -webkit-transform: rotate(0deg);
      }
      to { 
          -webkit-transform: rotate(360deg);
      }
  }
  @-moz-keyframes rotateme {
      from {
          -moz-transform: rotate(0deg);
      }
      to { 
          -moz-transform: rotate(360deg);
      }
  }
  @-o-keyframes rotateme {
      from {
          -o-transform: rotate(0deg);
      }
      to { 
          -o-transform: rotate(360deg);
      }
  }



  .images-column {
      position: relative;
      margin-bottom: 40px;
  }
  .images-column .images-outer {
      position: relative;
  }
      .images-column .inner-column {
          position: relative;
          padding: 50px 0px;
          text-align: center;
          background-position: center center;
          background-repeat: no-repeat;
      }
      .images-column .pattern-layer {
          position: absolute;
          left: -70px;
          top: -150px;
          width: 745px;
          height: 732px;
          background-repeat: no-repeat;
      }

      .images-column .pattern-layer {
          animation-name: rotateme;
          animation-duration: 15s;
          animation-iteration-count: infinite;
          animation-timing-function: linear;

          -webkit-animation-name: rotateme;
          -webkit-animation-duration: 15s;
          -webkit-animation-iteration-count: infinite;
          -webkit-animation-timing-function: linear;

          -moz-animation-name: rotateme;
          -moz-animation-duration: 15s;
          -moz-animation-iteration-count: infinite;
          -moz-animation-timing-function: linear;

          -ms-animation-name: rotateme;
          -ms-animation-duration: 15s;
          -ms-animation-iteration-count: infinite;
          -ms-animation-timing-function: linear;
          
          -o-animation-name: rotateme;
          -o-animation-duration: 15s;
          -o-animation-iteration-count: infinite;
          -o-animation-timing-function: linear;
      }
      .images-column .image {
          position: relative;
          display: inline-block !important;
          box-shadow: 0px 0px 20px rgb(0 0 0 / 10%);
      }
  </style>
@endsection

@section('content')	
    
<!--Breadcrumb Area-->
<section class="breadcrumb-areav2" data-background="{{ asset('assets/open/images/service/mobile-bg.jpg') }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="bread-titlev2">
                <h1 class="wow fadeInUp" data-wow-delay=".2s">Top Rated In Mobile App Development Company</h1>
                <p class="mt20 wow fadeInUp" data-wow-delay=".4s">As a top and leading mobile app developer in Nigeria, we have developed some of the best quality and user-eccentric mobile applications, keeping our customers at the fore front of their businesses.</p>
                <a href="{{ route('contact', ['purpose' => 'mobile']) }}" class="btn-main bg-btn2 lnk mt20 wow zoomInDown" data-wow-delay=".6s">Get Quote <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.widgets.statistics')
<!--End Hero-->

<!--Start About-->
<section class="service pad-tb bg-gradient5">
<div class="container">
<div class="row">{{-- 
<div class="col-lg-4">
<div class="image-block wow fadeIn"> --}}
  {{-- <img src="images/service/app-develops.png" alt="image" class="img-fluid no-shadow"/> --}}
  <div class="images-column col-lg-5 col-md-5 col-sm-12" title="Mobile App Developers In Lagos">
    <div class="inner-column" title="Mobile App Developers In Anambra" style="background-image: url('{{ asset('assets/open/images/service/globe.png') }}')">
            <div class="pattern-layer" style="background-image: url('{{ asset('assets/open/images/service/pattern-1.png') }}')"></div>
                <div class="images-outer parallax-scene-1" title="Mobile App Developers In Anambra, Nigeria" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <div class="image" data-depth="0.10" style="transform: translate3d(-1px, -1.7px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                    <img src="{{ asset('assets/open/images/service/apps.png') }}" class="img-fluid" alt="Mobile App Developers in Anambra, Nigeria" title="Mobile App Developers in Anambra">
                </div>
            </div>
        </div>
        
        <div class="pattern-layer" style="background-image: url('')"></div>
    </div>{{-- 
</div>
</div> --}}
<div class="col-lg-7 block-1">
<div class="common-heading text-l pl25">
  <span>Overview</span>
  <h2>Custom Mobile App Solutions</h2>
  <p>We design, build and deploy the best mobile applications in Nigeria that meet customers' satisfaction. As the use mobile applications increases among smart phone users, mobile app development has become an important asset for both small and large scale businesses. It is therefore very essential to create a mobile app for your business and brand to drive more user and customer engagement.</p>
  <p>As a top and leading mobile app developer in Nigeria, we have developed some of the best quality and user-eccentric mobile applications, keeping our customers at the fore front of their businesses. We have developed mobile apps for various sectors of the economy. Our solutions cuts across fin-tech, transportation, finance, e-commerce, education and more.</p>
</div>
</div>
</div>
</div>
</section>
<!--End About-->
<section class="service dark-bg4 pad-tb">
<div class="container">
<div class="row">
<div class="col-lg-7">
<div class="text-l service-desc- pr25">
  <h3>Get a complete strategy of mobile app development</h3>
  <h5 class="mt10 mb20">Hire Expert Cross Platform Mobile App Developers to Boost Your Business</h5>
  <p>Your mobile app will market your business, products and brand better and help your get new sales and offers. Having a mobile app can increase your customer engagement and generate more sales and revenue for your business and products...</p>
  <ul class="service-point-2 mt20">
    <li># 800+ Mobile Delivered</li>
    <li># 200+ Team Strength</li>
    <li># User-Friendly Interface</li>
    <li># 400 Happy Clients</li>
    <li># 95% Repeat business</li>
    <li># Quality Service UX</li>
  </ul>
  <a href="{{ route('contact', ['purpose' => 'mobile']) }}" class="btn-main bg-btn2 lnk mt30">Request A Quote  <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
</div>
</div>
<div class="col-lg-5">
<div class="servie-key-points">
  <h4>Advantages of Mobile App Development</h4>
  <ul class="key-points mt20">   
      <li>Substitution of Traditional Method of Market</li>
      <li>An effective way of Branding and engaging the audience</li>
      <li>Reduction in cost and raises standards</li>
      <li>Increase in Revenue</li>
      <li>Gives more value to customers</li>
      <li>24*7 support facility</li>
      <li>Feasible and Convenient</li>
      <li>Secured from vulnerable attacks</li>   
  </ul>
</div>
</div>
</div>
</div>
</section>
@include('layouts.widgets.tech')
<!--Start Service-->
<section class="service-block bg-gradient6 pad-tb">
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
</div></div>
</div>

<div class="col-lg-6 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".4s">
<div class="s-block wide-sblock">
  <div class="s-card-icon-large"><img src="{{ asset('assets/open/images/service/android.png') }}" alt="Android App Development" class="img-fluid"/></div>
  <div class="s-block-content-large">
  <h4>Android App Development</h4>
  <p>We are quick to produce a high-quality app. In addition to receiving incredibly positive feedback from clients, the app’s downloads in the App Store almost quadrupled.</p>
</div></div>
</div>

<div class="col-lg-6 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".6s">
<div class="s-block wide-sblock">
  <div class="s-card-icon-large"><img src="{{ asset('assets/open/images/service/flutter.png') }}" alt="service flutter" class="img-fluid"/></div>
  <div class="s-block-content-large">
  <h4>Cross Platform App Dev</h4>
  <p>We create cross-platform mobile apps. Boasting a shorter time to market, cross platform apps run on multiple devices and OS.</p>
</div></div>
</div>

<div class="col-lg-6 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".8s">
<div class="s-block wide-sblock">
  <div class="s-card-icon-large"><img src="{{ asset('assets/open/images/service/swift.jpg') }}" alt="service" class="img-fluid"/></div>
  <div class="s-block-content-large">
  <h4>Native App Development</h4>
  <p>We create mobile apps for specific platforms, including iOS and Android. Using technologies like Java and Swift respectively</p>
</div></div>
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

  @include('layouts.widgets.why-us')

  <!--Stat Projects-->
  <section class="featured-project pad-tb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="common-heading ptag">
            <span>Our Projects</span>
            <h2>Some of Our Works</h2>
            <p class="mb0">We think big and have hands in all leading technology platforms to provide you wide array of services.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 mx-auto wow fadeInUp" data-wow-delay=".2s">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="{{ asset('assets/open/images/service/work-1.png') }}" alt="portfolio" class="img-fluid"/> </a>
            </div>
            <div class="item-info">
              <h4><a href="#">Creative </a></h4>
              <p>ios, design</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mx-auto wow fadeInUp" data-wow-delay=".4s">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="{{ asset('assets/open/images/service/work-2.png') }}" alt="portfolio" class="img-fluid"/> </a>
            </div>
            <div class="item-info">
              <h4><a href="#">Brochure Design</a></h4>
              <p>Graphic, Print</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mx-auto wow fadeInUp" data-wow-delay=".6s">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="{{ asset('assets/open/images/service/work-3.png') }}" alt="portfolio" class="img-fluid"/> </a>
            </div>
            <div class="item-info">
              <h4><a href="#">Ecommerce Development</a></h4>
              <p>Web application</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 mx-auto wow fadeInUp" data-wow-delay=".8s">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="{{ asset('assets/open/images/service/work-4.png') }}" alt="portfolio" class="img-fluid"/> </a>
            </div>
            <div class="item-info">
              <h4><a href="#">Icon Pack</a></h4>
              <p>Android & iOs, Design</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mx-auto wow fadeInUp" data-wow-delay="1s">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="{{ asset('assets/open/images/service/work-5.png') }}" alt="portfolio" class="img-fluid"/> </a>
            </div>
            <div class="item-info">
              <h4><a href="#">Smart Watch</a></h4>
              <p>UI/UX Design</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mx-auto wow fadeInUp" data-wow-delay="1.2s">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="{{ asset('assets/open/images/service/work-6.png') }}" alt="portfolio" class="img-fluid"/> </a>
            </div>
            <div class="item-info">
              <h4><a href="#">Brochure Design</a></h4>
              <p>Graphic, Print</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 maga-btn mt60">
          <a href="javascript:void(0)" class="btn-outline">View More Projects <i class="fas fa-chevron-right fa-icon"></i></a>
        </div>
      </div>
    </div>
  </section>
  <!--End Projects-->
  
  <x-ClientReviews />

  {{-- CTA --}}
  <x-CTA />
@endsection
