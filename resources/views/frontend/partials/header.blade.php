<div class="wrap">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <button id="primary-nav-button" type="button">Menu</button>
                    <a href="index.html"><div class="logo">
                        <img src="{{asset('frontend/img/logo.png')}}" alt="Venue Logo">
                    </div></a>
                    <nav id="primary-nav" class="dropdown cf">
                        <ul class="dropdown menu">
                            <li class='{{ Request::is('/') ? 'active' : '' }}'><a href="{{url('/')}}">Home</a></li>

                            <li><a href="{{url('/about')}}">About</a></li>
                            <li><a href="{{route('rental')}}">Rentals</a></li>

                            <li><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>

                            <li>
                                @if (auth()->check())
                                    <!-- User is logged in, show the Dashboard menu -->
                                    <a href="#">Dashboard</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>                    
                                @else
                                    <a href="#">Login/Register</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('login')}}">Login</a></li>
                                        <li><a href="{{route('register')}}">Register</a></li>
                                    </ul>
                                @endif

                            </li>

                        </ul>
                    </nav><!-- / #primary-nav -->
                </div>
            </div>
        </div>
    </header>
</div>