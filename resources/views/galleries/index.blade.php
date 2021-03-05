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
                        @foreach ($tags as $item)
                        <li data-filter=".filter-{{ $item->slug }}">{{ $item->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                @foreach ($galleries as $item)
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $item->tags[0]->slug }}">
                    <div class="portfolio-wrap">
                        <img src="{{ asset($item->images[0]->gallery_image) }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{ $item->title }}</h4>
                            <p>{{ $item->tags[0]->name }}</p>
                            <div class="portfolio-links">
                                <a href="{{ asset($item->images[0]->gallery_image) }}" data-gall="portfolioGallery"
                                    class="venobox" title="{{ $item->title }}"><i class="bx bx-plus"></i></a>
                                <a href="{{ route('galleries.show', $item) }}" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Clients Section ======= -->
    {{-- <x-app.section-clients /> --}}
    <!-- End Clients Section -->

</x-app-layout>
