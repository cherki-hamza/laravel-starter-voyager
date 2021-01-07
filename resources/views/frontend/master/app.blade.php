@include('frontend.layout.header')



@if(LaravelLocalization::getCurrentLocale() ==='ar')
@include('frontend.layout.ar-menu')
@else
   @include('frontend.layout.menu')
@endif


@yield('content')

@include('frontend.layout.footer')
