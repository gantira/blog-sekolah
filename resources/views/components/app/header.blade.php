<header id="header">
    <div class="container d-flex">

        <div class="logo mr-auto">
            <h1 class="text-light"><a href="{{ route('blogs.index') }}"><span>{{ config('app.name') }}</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="{{ route('home') }}"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                {{-- <li><a href="{{ route('home') }}">Home</a></li> --}}

                {{-- <li class="drop-down"><a href="#">About</a>
                    <ul>
                        <li><a href="about.html">About Us</a></li>
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
                <li class="active"><a href="{{ route('blogs.index') }}">Blog</a></li>

            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header>