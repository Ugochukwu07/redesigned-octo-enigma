
<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8"/>
    <title>@yield('title') | Hydrogen Technologies</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="We create websites and softwares with meaning. Great Web design speaks to your head and your heart. It makes you feel different, and think differently. It makes you remember, and respond. That’s what we aim for, to go from insight to ideas to design that connects. To craft things with intelligence, sensitivity and precision.">
    <meta name="keywords" content="Software, Company, Creative Agency, Marketing Agency, Web Development, Branding">
    <meta name="author" content="Ekwueme Ugochukwu">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#c7ecff">
    <!--website-favicon-->
    <link href="{{ asset('assets/logo/3/favi.png') }}" rel="icon">
    <!--plugin-css-->
    <link href="{{ asset('assets/open/') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/open/') }}/css/plugin.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- template-style-->
	<link href="{{ asset('assets/open/') }}/css/style.css" rel="stylesheet">
	<link href="{{ asset('assets/open/') }}/css/responsive.css" rel="stylesheet">	
	<link href="{{ asset('assets/open/') }}/css/darkmode.css" rel="stylesheet">
    <!-- Google Materalize fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .custom-nav .sbmenu > a::before {
            display: none;
        }
        .clients-logo {
            background: #050748;
        }

        .xlogo{
            width: 170px;
        }

        .grecaptcha-badge { visibility: hidden !important; }

    </style>
    @yield('styles')
    @toastr_css
    {!! RecaptchaV3::initJs() !!}
 </head>
<body>  
<!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "104079737825405");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v14.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
	<!--Start Preloader 
	   <div class="onloadpage" id="page_loader">
		<div class="pre-content">
		   <div class="logo-pre"><img src="{{ asset('assets/open/') }}/images/logo.png" alt="Logo" class="img-fluid" /></div>
		   <div class="pre-text- text-radius text-light text-animation bg-b">Niwax - Creative Agency & Portfolio HTML Template Are 2 Seconds Away. Have Patience</div>
		</div>
	 </div>-->
		<!--End Preloader -->

        {{-- Start Header --}}
        @include('layouts.header')
        {{-- End Header --}}

        <!--start sidebar -->
        @include('layouts.sidebar')
        <!--end sidebar -->
		
    @yield('content')

    <!--Start Footer-->
    @include('layouts.footer')
    <!--End Footer-->
<!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('assets/open/') }}/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="{{ asset('assets/open/') }}/js/jquery.min.js"></script>
    <script src="{{ asset('assets/open/') }}/js/bootstrap.bundle.min.js"></script> 
    <script src="{{ asset('assets/open/') }}/js/plugin.min.js"></script>
    <script src="{{ asset('assets/open/') }}/js/preloader.js"></script>
    <script src="{{ asset('assets/open/') }}/js/dark-mode.js"></script>
    <!--common script file-->
    <script src="{{ asset('assets/open/') }}/js/main.js"></script>
    <script>
        $('h2.nav-title').html("{{ config('app.name') }}")
    </script>
    @yield('scripts')
    @jquery

    @toastr_js
    
    @toastr_render
    <script src="//code.tidio.co/wui6xfleegsheni75ltlcbirhnifqdcm.js" async></script>
    
</body>
</html>
