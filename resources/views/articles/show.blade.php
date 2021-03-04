<x-app-layout>

    <x-slot name="breadcrumbs">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Article</li>
                </ol>
                <h2>{{ $post->title }}</h2>
            </div>
        </section>
    </x-slot>

    <div class="row">
        <div class="col-lg-8 entries">
            <main id="main">

                <!-- ======= Article Section ======= -->
                <section id="blog" class="blog">
                    <div class="container">
                        <div class="row">
                            <div class="entries">
                                <article class="entry entry-single">

                                    <div class="entry-img text-center">
                                        <img src="{{ $post->image_thumbnail }}" alt="" class="img-fluid">
                                    </div>

                                    <h2 class="entry-title">
                                        <a href="#">{{ $post->title }}</a>
                                    </h2>

                                    <div class="entry-meta">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                                    href="{{ route('articles.index', ['author' => $post->user->username]) }}">{{ $post->user->name}}</a>
                                            </li>
                                            <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                                    href="#"><time
                                                        datetime="2020-01-01">{{ $post->created_at->format('M d, Y') }}</time></a>
                                            </li>
                                            {{-- <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="#">12
                                            Comments</a></li> --}}
                                        </ul>
                                    </div>

                                    <div class="entry-content">

                                        {!! $post->body !!}

                                    </div>

                                    <div class="entry-footer clearfix">
                                        <div class="float-left">
                                            @if (count($post->categories))
                                            <i class="icofont-folder"></i>
                                            <ul class="cats">
                                                @foreach ($post->categories as $item)
                                                <li><a
                                                        href="{{ route('articles.index', ['categories' => $item->name]) }}">{{ $item->name }}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                            @endif

                                            @if (count($post->tags))
                                            <i class="icofont-tags"></i>
                                            <ul class="tags">
                                                @foreach ($post->tags as $item)
                                                <li><a
                                                        href="{{ route('articles.index', ['tags' => $item->name]) }}">{{ $item->name }}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </div>

                                        <div class="float-right share">
                                            <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                                            <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                                            <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
                                        </div>

                                    </div>

                                </article><!-- End blog entry -->

                                <div class="blog-author clearfix">
                                    <img src="{{ asset('eterna/img/user.jfif') }}" class="rounded-circle float-left"
                                        alt="">
                                    <h4>{{ $post->user->name }}</h4>
                                    <div class="social-links">
                                        <a href="https://twitters.com/#"><i class="icofont-twitter"></i></a>
                                        <a href="https://facebook.com/#"><i class="icofont-facebook"></i></a>
                                        <a href="https://instagram.com/#"><i class="icofont-instagram"></i></a>
                                    </div>
                                    <p>
                                        Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus
                                        accusantium.
                                        Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et
                                        accusantium
                                        ut unde voluptas.
                                    </p>
                                </div><!-- End blog author bio -->

                            </div><!-- End blog entries list -->

                        </div>

                    </div>
                </section><!-- End Article Section -->

            </main>
        </div>
        <div class="col-lg-4">
            <x-app.sidebar />
        </div>
    </div>
</x-app-layout>
