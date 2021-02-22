<?php

namespace App\View\Components\app;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\View\Component;

class Sidebar extends Component
{
    public $categories;
    public $tags;
    public $posts;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->categories = Category::select('name', 'slug')->withCount(['posts'])->whereHas('posts')->get();
        $this->tags = Tag::select('name', 'slug')->withCount(['posts'])->whereHas('posts')->get();
        $this->posts = Post::select('title', 'slug', 'created_at')->whereStatus('published')->limit(5)->inRandomOrder()->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.app.sidebar', [
            'sidebar_categories' => $this->categories,
            'sidebar_tags' => $this->tags,
            'sidebar_posts' => $this->posts,
        ]);
    }
}
