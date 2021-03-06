<header id="header">
    <div class="container d-flex">

        <div class="logo mr-auto d-flex align-items-center">
            <a href="{{ route('home') }}"><img src="{{ asset('logo.jpg') }}" alt="" class="img-fluid"></a>
            <h1 class="text-light"><a href="{{ url('/') }}"><span>{{ config('app.name') }}</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                {{-- <li class="drop-down"><a href="#">About</a>
                    <ul>
                        <li><a href="team.html">Team</a></li>

                        <li class="drop-down"><a href="#">Drop Down 2</a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="services.html">Services</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="pricing.html">Pricing</a></li> --}}

                <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                <li class="{{ request()->routeIs('contacts.*') ? 'active' : '' }}"><a href="{{ route('contacts.index') }}">Contact</a></li>
                <li class="{{ request()->routeIs('galleries.*') ? 'active' : '' }}"><a href="{{ route('galleries.index') }}">Gallery</a></li>
                <li class="{{ request()->routeIs('articles.*') ? 'active' : '' }}"><a href="{{ route('articles.index') }}">Article</a></li>

            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header>
