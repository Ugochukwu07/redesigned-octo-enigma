@extends('layouts.app')
@section('title')
    Web Development
@endsection

@section('content')
    <!--Breadcrumb Area-->
    <section class="breadcrumb-areav2" data-background="images/banner/6.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bread-titlev2">
                        <h1 class="wow fadeInUp" data-wow-delay=".2s">Need A Premium & Creative Website Designing?</h1>
                        <p class="mt20 wow fadeInUp" data-wow-delay=".4s">From Startup to Enterprise be ready and don't worry about design and user experience.</p>
                        <a href="#" class="btn-main bg-btn2 lnk mt20 wow zoomInDown" data-wow-delay=".6s">Get Quote <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.widgets.statistics')
    <!--End Hero-->
    <!--Start About-->
    <section class="service pad-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="image-block upset bg-shape wow fadeIn">
                        <img src="images/about/square-image-1.jpg" alt="image" class="img-fluid"/>
                    </div>
                </div>
                <div class="col-lg-8 block-1">
                    <div class="common-heading text-l pl25">
                        <span>Overview</span>
                        <h2>Creative Web Design Service</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. is simply dummy text of the printing and typesetting industry. </p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About-->
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
                <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                    <div class="s-block">
                        <div class="s-card-icon"><img src="images/icons/logo-and-branding.svg" alt="service" class="img-fluid"/></div>
                        <h4>Graphic Designing Services</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".4s">
                    <div class="s-block">
                        <div class="s-card-icon"><img src="images/icons/service2.svg" alt="service" class="img-fluid"/></div>
                        <h4>Responsive Web Designing</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="s-block">
                        <div class="s-card-icon"><img src="images/icons/service3.svg" alt="service" class="img-fluid"/></div>
                        <h4>Static Website Designing</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".8s">
                    <div class="s-block">
                        <div class="s-card-icon"><img src="images/icons/service4.svg" alt="service" class="img-fluid"/></div>
                        <h4>Dynamic Website Designing</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay="1s">
                    <div class="s-block">
                        <div class="s-card-icon"><img src="images/icons/service5.svg" alt="service" class="img-fluid"/></div>
                        <h4>Psd to HTML Service</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay="1.2s">
                    <div class="s-block">
                        <div class="s-card-icon"><img src="images/icons/service6.svg" alt="service" class="img-fluid"/></div>
                        <h4>Website Redesign Service</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
            <div class="-cta-btn mt70">
                <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.3s">
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
    @include('layouts.widgets.why-us')
    {{-- <!--Start Pricing-->
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
    <!--End Pricing--> --}}
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

    {{-- CTA --}}
    <x-cta />

@endsection