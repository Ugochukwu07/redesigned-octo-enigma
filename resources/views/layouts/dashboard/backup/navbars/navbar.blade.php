@auth()
    @include('layouts.dashboard.navbars.navs.auth')
@endauth
    
@guest()
    @include('layouts.dashboard.navbars.navs.guest')
@endguest