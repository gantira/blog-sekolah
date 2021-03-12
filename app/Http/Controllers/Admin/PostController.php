<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::when(request()->search, function ($query) {
            $query->where('title', 'like', '%' . request()->search . '%');
        })
            ->latest()
            ->paginate(10);

        return view('admin.posts.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create', [
            'post' => new Post(),
            'categories' => Category::pluck('name', 'id'),
            'tags' => Tag::pluck('name', 'id'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|max:255',
            'category' => 'required',
            'body' => 'required|min:3',
            'thumbnail' => 'nullable|mimes:jpg,png,jpeg|max:2048',
            'status' => 'required|in:published,draft',
        ]);

        if ($request->file('thumbnail')) {
            $thumbnail = Storage::disk('public')->put('images', $request->file('thumbnail'));
        }

        $post = Auth::user()->posts()->create([
            'title' => $request->title,
            'thumbnail' => $thumbnail ?? null,
            'body' => $request->body,
            'status' => $request->status,
        ]);

        $post->categories()->sync($request->category);
        $post->tags()->sync($request->tags);

        return redirect()->route('bagas.posts.index')->with('message', 'New Post has been submit!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post,
            'categories' => Category::pluck('name', 'id'),
            'tags' => Tag::pluck('name', 'id'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|min:3|max:255',
            'body' => 'required|min:3',
            'status' => 'required|in:published,draft',
        ]);

        if ($request->file('thumbnail')) {
            if (Storage::disk('public')->exists($post->thumbnail)) {
                Storage::disk('public')->delete($post->thumbnail);
            }
            $thumbnail = Storage::disk('public')->put('images', $request->file('thumbnail'));
        }

        $post->update([
            'title' => $request->title,
            'body' => $request->body,
            'thumbnail' => $thumbnail ?? $post->thumbnail,
            'status' => $request->status,
        ]);

        $post->categories()->sync($request->category);
        $post->tags()->sync($request->tags);

        return redirect()->route('bagas.posts.index')->with('message', 'New Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if (Storage::disk('public')->exists($post->thumbnail)) {
            Storage::disk('public')->delete($post->thumbnail);
        }

        $post->delete();

        return redirect()->route('bagas.posts.index')->with('message', 'Post deleted successfully!');
    }
}
