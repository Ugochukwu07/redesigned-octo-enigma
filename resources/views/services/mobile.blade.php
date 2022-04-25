@extends('layouts.app')

@section('title')
Mobile App Development
@endsection

@section('styles')
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
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
</div></div>
</div>

<div class="col-lg-6 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".6s">
<div class="s-block wide-sblock">
  <div class="s-card-icon-large"><img src="images/service/mob-service-item3.png" alt="service" class="img-fluid"/></div>
  <div class="s-block-content-large">
  <h4>Cross Platform App Development</h4>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
</div></div>
</div>

<div class="col-lg-6 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".8s">
<div class="s-block wide-sblock">
  <div class="s-card-icon-large"><img src="images/service/mob-service-item4.png" alt="service" class="img-fluid"/></div>
  <div class="s-block-content-large">
  <h4>Wearable App Development</h4>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
</div></div>
</div>


</div>
<div class="-cta-btn mt70">
<div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.1s">
<p>Hire a <span>Dedicated Developer</span></p>
<a href="#" class="btn-main bg-btn2 lnk">Hire Now<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
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
            <img src="images/process/process-1.jpg" alt="Process" class="img-fluid"/>
          </div>
        </div>
        <div class="col-lg-7 v-center order2">
          <div class="ps-block">
            <span>1</span>
            <h3>Requirement Gathering</h3>
            <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
          </div>
        </div>
      </div>
      <div class="row upset justify-content-center mt60">
        <div class="col-lg-7 v-center order2">
          <div class="ps-block">
            <span>2</span>
            <h3>Prototype</h3>
            <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
          </div>
        </div>
        <div class="col-lg-4 v-center order1">
          <div class="image-block1">
            <img src="images/process/process-2.jpg" alt="Process" class="img-fluid"/>
          </div>
        </div>
      </div>
      <div class="row upset justify-content-center mt60">
        <div class="col-lg-4 v-center order1">
          <div class="image-block1">
            <img src="images/process/process-3.jpg" alt="Process" class="img-fluid"/>
          </div>
        </div>
        <div class="col-lg-7 v-center order2">
          <div class="ps-block">
            <span>3</span>
            <h3>Deployment</h3>
            <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
          </div>
        </div>
      </div>
      <div class="row upset justify-content-center mt60">
        <div class="col-lg-7 v-center order2">
          <div class="ps-block">
            <span>4</span>
            <h3>Support & Maintenance</h3>
            <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
          </div>
        </div>
        <div class="col-lg-4 v-center order1">
          <div class="image-block1">
            <img src="images/process/process-4.jpg" alt="Process" class="img-fluid"/>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Process-->
  <!--Start Why Choose-->
  <section class="service-block pad-tb bg-gradient7">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="common-heading ptag">
            <span>We Deliver Our Best</span>
            <h2>Why Choose Niwax</h2>
            <p class="mb30">Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit.</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-sm-6 mt30  wow fadeIn" data-wow-delay=".2s">
          <div class="s-block wide-sblock">
            <div class="s-card-icon"><img src="images/icons/teama.svg" alt="service" class="img-fluid"></div>
            <div class="s-block-content">
              <h4>Reliable Service. In House Team</h4>
              <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay=".5s">
          <div class="s-block wide-sblock">
            <div class="s-card-icon"><img src="images/icons/link.svg" alt="service" class="img-fluid"></div>
            <div class="s-block-content">
              <h4>Trusted by People Like You</h4>
              <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay=".8s">
          <div class="s-block wide-sblock">
            <div class="s-card-icon"><img src="images/icons/tech.svg" alt="service" class="img-fluid"></div>
            <div class="s-block-content">
              <h4>Complete Technical Competency</h4>
              <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.1s">
          <div class="s-block wide-sblock">
            <div class="s-card-icon"><img src="images/icons/hi.svg" alt="service" class="img-fluid"></div>
            <div class="s-block-content">
              <h4>Friendly & Cordial in Nature</h4>
              <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.4s">
          <div class="s-block wide-sblock">
            <div class="s-card-icon"><img src="images/icons/badge.svg" alt="service" class="img-fluid"></div>
            <div class="s-block-content">
              <h4>Excellent Quality Delivered on Time</h4>
              <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.7s">
          <div class="s-block wide-sblock">
            <div class="s-card-icon"><img src="images/icons/tin.svg" alt="service" class="img-fluid"></div>
            <div class="s-block-content">
              <h4>Effective & Continuous Communication</h4>
              <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="-cta-btn mt70">
       <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.8s">
          <p>Let's Start a <span>New Project</span> Together</p>
          <a href="#" class="btn-main bg-btn2 lnk">Inquire Now<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
        </div>
      </div>
    </div>
  </section>
  <!--End Why Choose-->
  <!--Start Pricing-->
  <section class="block-a1 pad-tb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="common-heading ptag">
            <span>Pricing</span>
            <h2>Pricing Table</h2>
            <p class="mb0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
          <div class="pricing-table mt60">
            <div class="inner-table">
              <img src="images/icons/plan-1.svg" alt="Personal"/>
              <span class="title">Personal</span>
              <p class="title-sub">Great For Small Business</p>
              <h2><sup>$</sup> 79.99</h2>
              <p class="duration">Monthly Package</p>
              <div class="details">
                <ul>
                  <li>Social Media Marketing</li>
                  <li>2.100 Keywords</li>
                  <li>One Way Link Building</li>
                  <li>5 Free Optimization</li>
                  <li>3 Press Releases</li>
                </ul>
              </div>
            </div>
            <a href="#" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="pricing-table best-plan mt60 bg-gradient4">
            <div class="inner-table">
              <img src="images/icons/plan-2.svg" alt="Advance"/>
              <span class="title">Advance</span>
              <p class="title-sub">Great For Small Business</p>
              <h2><sup>$</sup> 79.99</h2>
              <p class="duration">Monthly Package</p>
              <div class="details">
                <ul>
                  <li>Social Media Marketing</li>
                  <li>2.100 Keywords</li>
                  <li>One Way Link Building</li>
                  <li>5 Free Optimization</li>
                  <li>3 Press Releases</li>
                </ul>
              </div>
            </div>
            <a href="#" class="btn-main bg-btn3 lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="pricing-table mt60">
            <div class="inner-table">
              <img src="images/icons/plan-3.svg" alt="Ultimate"/>
              <span class="title">Ultimate</span>
              <p class="title-sub">Great For Small Business</p>
              <h2><sup>$</sup> 79.99</h2>
              <p class="duration">Monthly Package</p>
              <div class="details">
                <ul>
                  <li>Social Media Marketing</li>
                  <li>2.100 Keywords</li>
                  <li>One Way Link Building</li>
                  <li>5 Free Optimization</li>
                  <li>3 Press Releases</li>
                </ul>
              </div>
            </div>
            <a href="#" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Pricing-->
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
        <div class="col-lg-4 wow fadeInUp" data-wow-delay=".2s">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="images/portfolio/image-1.jpg" alt="portfolio" class="img-fluid"/> </a>
            </div>
            <div class="item-info">
              <h4><a href="#">Creative </a></h4>
              <p>ios, design</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow fadeInUp" data-wow-delay=".4s">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="images/portfolio/image-2.jpg" alt="portfolio" class="img-fluid"/> </a>
            </div>
            <div class="item-info">
              <h4><a href="#">Brochure Design</a></h4>
              <p>Graphic, Print</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow fadeInUp" data-wow-delay=".6s">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="images/portfolio/image-3.jpg" alt="portfolio" class="img-fluid"/> </a>
            </div>
            <div class="item-info">
              <h4><a href="#">Ecommerce Development</a></h4>
              <p>Web application</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow fadeInUp" data-wow-delay=".8s">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="images/portfolio/image-4.jpg" alt="portfolio" class="img-fluid"/> </a>
            </div>
            <div class="item-info">
              <h4><a href="#">Icon Pack</a></h4>
              <p>Android & iOs, Design</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="1s">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="images/portfolio/image-5.jpg" alt="portfolio" class="img-fluid"/> </a>
            </div>
            <div class="item-info">
              <h4><a href="#">Smart Watch</a></h4>
              <p>UI/UX Design</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="1.2s">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="#"><img src="images/portfolio/image-6.jpg" alt="portfolio" class="img-fluid"/> </a>
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
  <!--Start reveiws-->
  <section class="reviews-block bg-gradient5 pad-tb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="common-heading ptag">
            <span>Service Testimonials</span>
            <h2>Client Speaks</h2>
            <p class="mb30">Check our customers success stories.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mt30">
          <div class="reviews-card pr-shadow">
            <div class="row v-center">
              <div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
              <div class="col"> <span class="revbx-rl"><img src="images/client/envato.png" alt="review service logo"></span> </div>
            </div>
            <div class="review-text">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <div class="-client-details-">
              <div class="reviewer-text">
                <h4>Sue Vaneer</h4>
                <p>Business Owner, <small>Jaipur</small></p>
                <div class="star-rate">
                  <ul>
                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                    <li> <a href="javascript:void(0)" ><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt30">
          <div class="reviews-card pr-shadow">
            <div class="row v-center">
              <div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
              <div class="col"> <span class="revbx-rl"><img src="images/client/envato.png" alt="review service logo"></span> </div>
            </div>
            <div class="review-text">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <div class="-client-details-">
              <div class="reviewer-text">
                <h4>Don Stairs</h4>
                <p>Business Owner, <small>Jaipur</small></p>
                <div class="star-rate">
                  <ul>
                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                    <li> <a href="javascript:void(0)" ><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt30">
          <div class="reviews-card pr-shadow">
            <div class="row v-center">
              <div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
              <div class="col"> <span class="revbx-rl"><img src="images/client/envato.png" alt="review service logo"></span> </div>
            </div>
            <div class="review-text">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <div class="-client-details-">
              <div class="reviewer-text">
                <h4>Russ L. Rogers</h4>
                <p>Business Owner, <small>Jaipur</small></p>
                <div class="star-rate">
                  <ul>
                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                    <li> <a href="javascript:void(0)" ><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End reviews-->
  <!--Start CTA-->
  <section class="cta-area pad-tb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="common-heading">
            <span>Let's work together</span>
            <h2>We Love to Listen to Your Requirements</h2>
            <a href="javascript:void(0)" class="btn-outline">Estimate Project <i class="fas fa-chevron-right fa-icon"></i></a>
            <p class="cta-call">Or call us now <a href="tel:+1234567890"><i class="fas fa-phone-alt"></i> (123) 456 7890</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="shape shape-a1"><img src="images/shape/shape-3.svg" alt="shape"/></div>
    <div class="shape shape-a2"><img src="images/shape/shape-4.svg" alt="shape"/></div>
    <div class="shape shape-a3"><img src="images/shape/shape-13.svg" alt="shape"/></div>
    <div class="shape shape-a4"><img src="images/shape/shape-11.svg" alt="shape"/></div>
  </section>
  <!--End CTA-->
@endsection