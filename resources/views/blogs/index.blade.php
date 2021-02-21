<x-app-layout categories="$categories">

    <x-slot name="breadcrumbs">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Blog</li>
                </ol>
                <h2>Blog</h2>
            </div>
        </section>
    </x-slot>

    @forelse ($posts as $item)
    <article class="entry">

        <div class="entry-img">
            <img src="{{ $item->image_thumbnail }}" alt="" class="img-fluid mx-auto d-block">
        </div>

        <h2 class="entry-title">
            <a href="{{ route('blogs.show', $item->slug) }}">{{ $item->title }}</a>
        </h2>

        <div class="entry-meta">
            <ul>
                <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                        href="{{ route('blogs.index', ['author' => $item->user->username]) }}">{{ $item->user->name }}</a></li>
                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                        href="{{ route('blogs.show', $item->slug) }}"><time
                            datetime="2020-01-01">{{ $item->created_at->format('M d, Y') }}</time></a>
                </li>
                {{-- <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="{{ route('blogs.show', $item->slug) }}">12
                Comments</a></li> --}}
            </ul>
        </div>

        <div class="entry-content">
            <p>
                {!! \Str::limit(strip_tags($item->body), 300,) !!}
            </p>
            <div class="read-more">
                <a href="{{ route('blogs.show', $item) }}">Read More</a>
            </div>
        </div>

    </article>

    @empty
    <div>
        No Post
    </div>
    @endforelse
    <!-- End blog entry -->
    {{ $posts->links('vendor.pagination.blog') }}

</x-app-layout>
