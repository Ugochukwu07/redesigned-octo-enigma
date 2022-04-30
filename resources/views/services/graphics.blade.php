@extends('layouts.app')
@section('title')
    Logo and Branding
@endsection

@section('content')
    <!--Breadcrumb Area-->
    <section class="breadcrumb-areav2" data-background="{{ asset('assets/open/images/service/brand-bg.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bread-titlev2">
                        <h1 class="wow fadeInUp" data-wow-delay=".2s">Graphic Design Services</h1>
                        <p class="mt20 wow fadeInUp" data-wow-delay=".4s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. </p>
                        <a href="{{ route('contact', ['purpose' => 'branding']) }}" class="btn-main bg-btn2 lnk mt20 wow zoomInDown" data-wow-delay=".6s">Get Quote <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
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
    <div class="row">
    <div class="col-lg-4">
    <div class="single-image bg-shape-dez mt0 wow fadeIn">
    <img src="{{ asset('assets/open/images/service/brand-bg-2.jpg') }}" alt="image" class="img-fluid no-shadow"/>
    </div>
    </div>
    <div class="col-lg-8 block-1 m-mt50">
    <div class="common-heading text-l pl25">
    <span>Overview</span>
    <h2>Custom Graphic Design Services We Offer</h2>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. is simply dummy text of the printing and typesetting industry. </p>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!--End About-->
    <!--Start Key points-->
    <section class="service pad-tb light-dark">
    <div class="container">
    <div class="row">
    <div class="col-lg-7">
    <div class="text-l service-desc- pr25">
    <h3 class="mb20">We use advanced graphic designing tools to create impressive ideas for you</h3>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    <ul class="service-point-2 mt20">
      <li># 800+ Mobile Delivered</li>
      <li># 200+ Team Strength</li>
      <li># User-Friendly Interface</li>
      <li># 400 Happy Clients</li>
      <li># 95% Repeat business</li>
      <li># Quality Service UX</li>
    </ul>
    <a href="#" class="btn-main bg-btn2 lnk mt30">Request A Quote  <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
    </div>
    </div>
    <div class="col-lg-5">
    <div class="single-image wow fadeIn">
    <img src="{{ asset('assets/open/images/service/brand-bg-3.jpg') }}" alt="image" class="img-fluid no-shadow"/>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!--End Key points-->
    <!--Start Service-->
    <section class="service-block bg-gradient6 pad-tb">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-8">
    <div class="common-heading ptag">
    <span>Service</span>
    <h2>Graphic Design services we offer</h2>
    <p class="mb30">We think big and have hands in all leading technology platforms to provide you wide array of services.</p>
    </div>
    </div>
    </div>
    <div class="row upset link-hover">
    <div class="col-lg-6 col-md-12 mt30 wow fadeInUp" data-wow-delay=".2s">
    <div class="s-block wide-sblock">
    <div class="s-card-icon-large"><img src="{{ asset('assets/open/images/service/brand-logo.jpg') }}" alt="service" class="img-fluid"/></div>
    <div class="s-block-content-large">
      <h4>Logo Designing</h4>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div></div>
    </div>
    <div class="col-lg-6 col-md-12 mt30 wow fadeInUp" data-wow-delay=".4s">
    <div class="s-block wide-sblock">
      <div class="s-card-icon-large"><img src="{{ asset('assets/open/') }}/images/service/packaging-design.jpg" alt="service" class="img-fluid"/></div>
      <div class="s-block-content-large">
        <h4>Packaging Design</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
      </div></div>
    </div>
    <div class="col-lg-6 col-md-12 mt30 wow fadeInUp" data-wow-delay=".6s">
      <div class="s-block wide-sblock">
        <div class="s-card-icon-large"><img src="{{ asset('assets/open/') }}/images/service/brochure-.jpg" alt="service" class="img-fluid"/></div>
        <div class="s-block-content-large">
          <h4>Brochure Design</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div></div>
      </div>
      <div class="col-lg-6 col-md-12 mt30 wow fadeInUp" data-wow-delay=".8s">
        <div class="s-block wide-sblock">
          <div class="s-card-icon-large"><img src="{{ asset('assets/open/') }}/images/service/flyer-.jpg" alt="service" class="img-fluid"/></div>
          <div class="s-block-content-large">
            <h4>Flyer Design</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div></div>
        </div>
        <div class="col-lg-6 col-md-12 mt30 wow fadeInUp" data-wow-delay="1s">
          <div class="s-block wide-sblock">
            <div class="s-card-icon-large"><img src="{{ asset('assets/open/') }}/images/service/newsletter.jpg" alt="service" class="img-fluid"/></div>
            <div class="s-block-content-large">
              <h4>Newsletter Designing</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div></div>
          </div>
          <div class="col-lg-6 col-md-12 mt30 wow fadeInUp" data-wow-delay="1.2s">
            <div class="s-block wide-sblock">
              <div class="s-card-icon-large"><img src="{{ asset('assets/open/') }}/images/service/visit-card.jpg" alt="service" class="img-fluid"/></div>
              <div class="s-block-content-large">
                <h4>Business Card Designs</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div></div>
            </div>
          </div>
          <div class="-cta-btn mt70">
            <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.4s">
              <p>Hire a <span>Graphic Designer</span></p>
              <a href="#" class="btn-main bg-btn2 lnk">Hire Now<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
            </div>
          </div>
        </div>
      </section>
      <!--End Service-->

      {{-- @include('layouts.widgets.unused.brading-process') --}}

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

      <x-ClientReviews />
      
      <x-CTA />
@endsection