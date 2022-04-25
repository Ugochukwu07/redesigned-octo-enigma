
<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8"/>
    <title>@yield('title') | Hydrogen Technologies</title>
    <meta name="description" content="Creative Agency, Marketing Agency Template">
    <meta name="keywords" content="Creative Agency, Marketing Agency">
    <meta name="author" content="rajesh-doot">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#c7ecff">
    <!--website-favicon-->
    <link href="{{ asset('assets/open/') }}/images/favicon.png" rel="icon">
    <!--plugin-css-->
    <link href="{{ asset('assets/open/') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/open/') }}/css/plugin.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- template-style-->
	<link href="{{ asset('assets/open/') }}/css/style.css" rel="stylesheet">
	<link href="{{ asset('assets/open/') }}/css/responsive.css" rel="stylesheet">	
	<link href="{{ asset('assets/open/') }}/css/darkmode.css" rel="stylesheet">
    <style>
        .custom-nav .sbmenu > a::before {
            display: none;
        }
        .clients-logo {
            background: #050748;
        }
    </style>	
 </head>
<body>  

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
        $('h2.nav-title').html('Hydrogen Technologies')
    </script>
</body>
</html>