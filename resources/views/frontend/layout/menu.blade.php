
<div class="container">
         <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="{{route('site')}}">
                <img style="width: 100px;height: 50px;border-radius: 20px;" class="img-fluid" src="{{asset('assets/img/logohamza.png')}}" alt="laravel">
            </a>
             <a class="navbar-brand" href="{{ route('site') }}">{{__('site.CHERKI-HAMZA')}}</a>
             <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                 aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="collapsibleNavId">
                 <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                     <li class="nav-item active">
                         <a class="nav-link" href="{{ route('site') }}">{{__('site.HOME')}} <span class="sr-only">(current)</span></a>
                     </li>

                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('voyager.dashboard') }}">{{__('site.DASHBOARD')}}</a>
                     </li>

                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('site.LANG')}}</a>
                        <div class="dropdown-menu my-4" aria-labelledby="dropdownId">


                            <!-- language -->
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>

                            @endforeach
                            <!-- language -->

                        </div>
                    </li>

                 </ul>


                 <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else


                        <li class="nav-item mr-4">
                        <a class="nav-link text-primary font-weight-bold" href="{{route('voyager.dashboard')}}"><i class="fa fa-user-injured mr-2"></i>{{__('site.DASHBOARD')}}</a>
                        </li>

                        <li class="nav-item"><img src="{{asset(Auth::user()->getPicture())}}"  style="border-radius: 100%; width: 35px;height: 35px;" alt=""></li>

                        <li class="nav-item dropdown">
                             <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right my-4" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                        </li>
                    @endguest
                </ul>

             </div>
         </nav>
</div>






