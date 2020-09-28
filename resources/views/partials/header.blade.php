<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">{{ setting('site.title') }}</a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="{{ url('/') }}" class="nav-link"><span>Home</span></a></li>
                {{--<li class="nav-item"><a href="#programs-section" class="nav-link"><span>Programs</span></a></li>--}}
                {{--<li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>--}}
                <li class="nav-item"><a href="{{ route('schedule') }}" class="nav-link"><span>Schedule</span></a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link"><span>About</span></a></li>
                <li class="nav-item"><a href="{{ route('coaches') }}" class="nav-link"><span>Coaches</span></a></li>
                {{--<li class="nav-item"><a href="#blog-section" class="nav-link"><span>Blog</span></a></li>--}}
                <li class="nav-item"><a href="{{ route('gallery') }}" class="nav-link"><span>Gallery</span></a></li>
                <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link"><span>Contact</span></a></li>
            </ul>
        </div>
        @auth('player')
            <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::guard('player')->user()->first_name . " " . Auth::guard('player')->user()->last_name }}
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <div class="text-center mb-1">
                        <img src="{{ Voyager::image(Auth::guard('player')->user()->image) }}" alt="{{ Auth::guard('player')->user()->image }}" width="80">
                        <small>{{ Auth::guard('player')->user()->email }}</small>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <i class="icon icon-user-circle mr-2"></i>
                        My Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="icon icon-group mr-2"></i>
                        My Team
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="icon icon-dashboard mr-2"></i>
                        My Performance
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="icon icon-gamepad mr-2"></i>
                        My Matches
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="icon icon-sign-out mr-2"></i>
                        {{ __('Logout') }}
                    </a>
                    @include('forms.auth.logout')
                </div>
            </div>
        @else
            <a href="{{ route('login') }}" class="btn btn-dark"><span>Login</span></a>
        @endauth
    </div>
</nav>


