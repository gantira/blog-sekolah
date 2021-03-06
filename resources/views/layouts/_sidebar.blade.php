<div class="sidebar">

    <h3 class="sidebar-title">Search</h3>
    <div class="sidebar-item search-form">
        <form action="{{ route('articles.index') }}" method="GET">
            <input type="text" name="search">
            <button type="submit"><i class="icofont-search"></i></button>
        </form>

    </div><!-- End sidebar search formn-->
    <h3 class="sidebar-title">Categories</h3>
    <div class="sidebar-item categories">
        <ul>
            @foreach ($sidebar_categories as $item)
            <li><a href="{{ route('articles.index', ['category' => $item->name]) }}">{{ $item->name }}
                    <span>({{ $item->posts_count }})</span></a></li>
            @endforeach
        </ul>
    </div><!-- End sidebar categories-->
    <h3 class="sidebar-title">Random Posts</h3>
    <div class="sidebar-item recent-posts">
        @foreach ($sidebar_posts as $item)
        <div class="post-item clearfix">
            <img src="{{ $item->image_thumbnail }}" alt="">
            <h4><a href="{{ route('articles.show', $item->slug) }}">{{ \Str::limit($item->title, 30) }}</a></h4>
            <time datetime="2020-01-01">{{ $item->created_at->format('M d, Y') }}
        </div>
        @endforeach

    </div><!-- End sidebar recent posts-->

    <h3 class="sidebar-title">Tags</h3>
    <div class="sidebar-item tags">
        <ul>
            @foreach ($sidebar_tags as $item)
            <li><a href="{{ route('articles.index', ['tags' => $item->name]) }}">{{ $item->name }}</a></li>
            @endforeach
        </ul>

    </div><!-- End sidebar tags-->

</div>
