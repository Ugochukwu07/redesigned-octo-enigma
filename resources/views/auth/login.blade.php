
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8"/>
  <title>Login | {{ config('app.name') }}</title>
  <meta name="description" content="Login page for the admins id {{ config('app.name') }}">
  <meta name="keywords" content="Login, Programing, Web Developement, Creative Agency, Marketing Agency">
  <meta name="author" content="Ekwueme Ugochukwu">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="#101010">
  <!--website-favicon-->
  <link href="images/favicon.png" rel="icon">
  <!--plugin-css-->
  <link href="{{ asset('assets/open/') }}/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('assets/open/') }}/css/plugin.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <!-- template-style-->
  <link href="{{ asset('assets/open/') }}/css/style.css" rel="stylesheet">
  <link href="{{ asset('assets/open/') }}/css/responsive.css" rel="stylesheet">
  <link href="{{ asset('assets/open/') }}/css/darkmode.css" rel="stylesheet">
</head>
<body>
  <!--Start login Form-->
  <section class="login-page pad-tb">
    <div class="v-center m-auto">
      {{-- <a href="{{ route('home') }}" class="d-block text-center mb30">
          <img src="{{ asset('assets/open/') }}/images/me/logo.png" alt="Logo" class="mega-darks-logo">
        </a> --}}
      <div class="login-form-div">        
        <h4 class="mb40 text-center">Login to your Account</h4>
        <div class="form-block">
          <form id="contact-form" method="POST" action="{{ route('auth.login.check') }}">
            <div class="fieldsets row">
                @csrf
              <div class="col-md-12 form-group">
                <input id="email" type="text" name="email" placeholder="*Email Address">
                @error('email')
                   <span class="badge bg-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-12 form-group">
                  <input  type="password" name="password"  placeholder="*Password Here">
                  @error('password')
                     <span class="badge bg-danger">{{$message}}</span>
                  @enderror
              </div>
            </div>
            <div class="fieldsets row mt20">
              <div class="col-md-6 form-group v-center">
                <button type="submit" class="lnk btn-main bg-btn">Submit <span class="circle"></span></button>
              </div>
              <div class="col-md-6 form-group v-center text-right"><a href="#" class="psforgt">Forgot Password?</a>     </div>
            </div>            
             {{-- <hr class="mt30 mb30">
           <div class="text-center">
              <p class="mb20">or Login with:</p>
              <div class="social-btnnxx">
                <a href="#" class="btn-main fb-btn"><i class="fab fa-facebook-f"></i> Facebook</a>                
                <a href="#" class="btn-main google-btn"><i class="fab fa-google"></i> Google</a>
              </div>
            </div> --}}            
          </form>
        </div>
      </div>      
      </div>      
    </section>
    <!--End login Form-->


  
<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ asset('assets/open/') }}/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="{{ asset('assets/open/') }}/js/jquery.min.js"></script>
<script src="{{ asset('assets/open/') }}/js/bootstrap.bundle.min.js"></script> 
<script src="{{ asset('assets/open/') }}/js/plugin.min.js"></script>
<!--common script file-->
<script src="{{ asset('assets/open/') }}/js/main.js"></script>
</body>
</html>