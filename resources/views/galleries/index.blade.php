<x-app-layout>

    <x-slot name="breadcrumbs">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Gallery</li>
                </ol>
                <h2>Gallery</h2>
            </div>
        </section>
    </x-slot>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('eterna/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('eterna/img/portfolio/portfolio-1.jpg') }}" data-gall="portfolioGallery"
                                    class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('eterna/img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('eterna/img/portfolio/portfolio-2.jpg') }}" data-gall="portfolioGallery"
                                    class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('eterna/img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('eterna/img/portfolio/portfolio-3.jpg') }}" data-gall="portfolioGallery"
                                    class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('eterna/img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('eterna/img/portfolio/portfolio-4.jpg') }}" data-gall="portfolioGallery"
                                    class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('eterna/img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('eterna/img/portfolio/portfolio-5.jpg') }}" data-gall="portfolioGallery"
                                    class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('eterna/img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('eterna/img/portfolio/portfolio-6.jpg') }}" data-gall="portfolioGallery"
                                    class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('eterna/img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('eterna/img/portfolio/portfolio-7.jpg') }}" data-gall="portfolioGallery"
                                    class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('eterna/img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('eterna/img/portfolio/portfolio-8.jpg') }}" data-gall="portfolioGallery"
                                    class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('eterna/img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('eterna/img/portfolio/portfolio-9.jpg') }}" data-gall="portfolioGallery"
                                    class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Clients Section ======= -->
    <x-app.section-clients />
    <!-- End Clients Section -->

</x-app-layout>