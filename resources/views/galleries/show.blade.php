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
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row">

                <div class="col-lg-8">
                    <h2 class="portfolio-title">{{ $gallery->title }}</h2>
                    <div class="owl-carousel portfolio-details-carousel">
                        @foreach ($gallery->images as $item)
                        <img src="{{ asset($item->gallery_image) }}" class="img-fluid" alt="">
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-4 portfolio-info">
                    <h3>Gallery information</h3>
                    <ul>
                        {{-- <li><strong>Category</strong>: Web design</li> --}}
                        <li><strong>Author</strong>: {{ $gallery->user->name }}</li>
                        <li><strong>Publish date</strong>: {{ $gallery->created_at->format('d F, Y') }}</li>
                        {{-- <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> --}}
                    </ul>

                    <p>
                        {{ $gallery->body }}
                    </p>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
    <!-- End Portfolio Section -->

    <!-- ======= Clients Section ======= -->
    {{-- <x-app.section-clients /> --}}
    <!-- End Clients Section -->

</x-app-layout>
