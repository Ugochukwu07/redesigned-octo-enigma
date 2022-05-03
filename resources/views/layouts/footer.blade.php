<footer>
    <x-Insights />
    <div class="footer-row2">
    <div class="container">
    <div class="row justify-content-between">
    <div class="col-lg-3 col-sm-6  ftr-brand-pp">
     <a class="navbar-brand mt30 mb25 f-dark-logo" href="{{ route('home') }}"> <img src="{{ asset('assets/open/') }}/images/me/logo.png" width="160px" alt="Logo"/></a>
     <a class="navbar-brand mt30 mb25 f-white-logo" href="{{ route('home') }}"> <img src="{{ asset('assets/open/') }}/images/me/logo.png" width="160px" alt="Logo" /></a>
     <p>We are the leading software development company in Anambra, Nigeria. We build the most engaging and on-demand software applications in Nigeria.</p>
     <a href="{{ route('contact', ['purpose' => 'all']) }}" class="btn-main bg-btn3 lnk mt20">Become Partner <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
    </div>
    <div class="col-lg-3 col-sm-6">
    <h5>Contact Us</h5>
    <ul class="footer-address-list ftr-details">
      <li>
        <span><i class="fas fa-envelope"></i></span>
        <p>Email <span> <a href="mailto:support@hydrogentech.com.ng">support@hydrogentech.com.ng</a></span></p>
      </li>
      <li>
        <span><i class="fas fa-phone-alt"></i></span>
        <p>Phone <span> <a href="tel:+2348143440606">+234 8143 440 606</a></span></p>
      </li>
      <li>
        <span><i class="fas fa-map-marker-alt"></i></span>
        <p>Address <span> Nnamdi Azikwe University Awka.</span></p>
      </li>
    </ul>
    </div>
    <div class="col-lg-2 col-sm-6">
      <h5>Company</h5>
      <ul class="footer-address-list link-hover">
        <li><a href="get-quote.html">Contact</a></li>
        <li><a href="javascript:void(0)">Customer's FAQ</a></li>
        <li><a href="javascript:void(0)">Refund Policy</a></li>
        <li><a href="javascript:void(0)">Privacy Policy</a></li>
        <li><a href="javascript:void(0)">Terms and Conditions</a></li>
        <li><a href="javascript:void(0)">License & Copyright</a></li>
      </ul>
    </div>
    <div class="col-lg-3 col-sm-6 footer-blog-">
      <h5>Latest Blogs</h5>
      <div class="single-blog-">
        <div class="post-thumb"><a href="#"><img src="{{ asset('assets/open/') }}/images/blog/blog-small.jpg" alt="blog"></a></div>
        <div class="content">
          <p class="post-meta"><span class="post-date"><i class="far fa-clock"></i>April 15, 2020</span></p>
          <h4 class="title"><a href="blog-sngle.html">We Provide you Best &amp; Creative Consulting Service</a></h4>
        </div>
      </div>
      <div class="single-blog-">
        <div class="post-thumb"><a href="#"><img src="{{ asset('assets/open/') }}/images/blog/blog-small.jpg" alt="blog"></a></div>
        <div class="content">
          <p class="post-meta"><span class="post-date"><i class="far fa-clock"></i>April 15, 2020</span></p>
          <h4 class="title"><a href="blog-sngle.html">We Provide you Best &amp; Creative Consulting Service</a></h4>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
    <div class="footer-brands">
    <div class="container">
    <div class="row">
    <div class="col-lg-4 v-center">
    <h5 class="mb10">Top App Development Companies</h5>
    <p>We design, build and deploy the best mobile applications in Nigeria that meet customers' satisfaction.</p>
    </div>
      <div class="col-lg-8 v-center">
        <ul class="footer-badges-">
          <li><a href="#"><img src="{{ asset('assets/open/') }}/images/about/badges-a.png" alt="badges"></a></li>
          <li><a href="#"><img src="{{ asset('assets/open/') }}/images/about/badges-b.png" alt="badges"></a></li>
          <li><a href="#"><img src="{{ asset('assets/open/') }}/images/about/badges-c.png" alt="badges"></a></li>
          <li><a href="#"><img src="{{ asset('assets/open/') }}/images/about/badges-d.png" alt="badges"></a></li>
        </ul>
      </div>
    </div>
    </div>
    </div>
    <div class="footer-row3">
    <div class="copyright">
    <div class="container">
    <div class="row">
    <div class="col-lg-12">
      <div class="footer-social-media-icons">
        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
        <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
        <a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
        <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
        <a href="javascript:void(0)" target="blank"><i class="fab fa-youtube"></i></a>
        <a href="javascript:void(0)" target="blank"><i class="fab fa-pinterest-p"></i></a>
        <a href="javascript:void(0)" target="blank"><i class="fab fa-vimeo-v"></i></a>
        <a href="javascript:void(0)" target="blank"><i class="fab fa-dribbble"></i></a>
        <a href="javascript:void(0)" target="blank"><i class="fab fa-behance"></i></a>
      </div>
      <div class="footer-">
        <p>© 2018-{{ date('Y') }}. All Rights Reserved By <a href="{{ route('home') }}" target="blank">Ekwueme Ugochukwu</a></p>
      </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </footer>
