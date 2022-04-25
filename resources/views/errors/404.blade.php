@extends('hydro.layouts.app')

@section('title')
    Page Not Found
@endsection

@section('content')
    <!--Start 404 Error-->
<section class="error bg-gradient pad-tb">
    <div class="container">
    <div class="row">
    <div class="col-md-12 text-center mt50 mb50">
    <div class="layer-div">
    <div class="error-block">
    <h1>Page not Found</h1>
    <p>The page your looking for is either under maintance or has expired.</p>
    <div class="images mt20">
    <img src="{{ asset('assets/open/') }}/images/shape/error-page.png" alt="error page" class="img-fluid"/>
    </div>
    <a href="{{ route('hydro.home') }}" class="btn-outline">Back to Home</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!--End 404 Error-->
@endsection