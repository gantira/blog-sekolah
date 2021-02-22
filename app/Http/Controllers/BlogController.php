<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::when(request('search'), function ($query) {
            $query->where('title', 'like', '%' . request('search') . '%');
        })
            ->when(request('category'), function ($query) {
                $query->whereHas('categories', function ($query) {
                    $query->where('name', request('category'));
                });
            })
            ->when(request('tags'), function ($query) {
                $query->whereHas('tags', function ($query) {
                    $query->where('name', request('tags'));
                });
            })
            ->when(request('author'), function ($query) {
                $query->whereHas('user', function ($query) {
                    $query->where('username', request('author'));
                });
            })
            ->whereStatus('published')
            ->latest()
            ->paginate(5);

        return view('blogs.index', [
            'posts' => $posts,
            'sidebar_categories' => Category::select('name', 'slug')->withCount(['posts'])->whereHas('posts')->get(),
            'sidebar_tags' => Tag::select('name', 'slug')->withCount(['posts'])->whereHas('posts')->get(),
            'sidebar_posts' => Post::select('title', 'slug', 'created_at')->whereStatus('published')->limit(5)->inRandomOrder()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('blogs.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
