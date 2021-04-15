<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::when(request()->search, function ($query) {
            $query->where('title', 'like', '%' . request()->search . '%');
        })
            ->latest()
            ->paginate(10);

        return view('admin.galleries.index', [
            'galleries' => $galleries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galleries.create', [
            'tags' => Tag::pluck('name', 'id'),
            'gallery' => new Gallery(),
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
            'body' => 'nullable|min:3',
            'status' => 'nullable|in:published,draft',
            'tag' => 'required',
            'images' => 'required|array',
            'images.*' => 'mimes:png,jpeg,jpg|max:2048'
        ]);

        $gallery = Auth::user()->galleries()->create([
            'title' => $request->title,
            'body' => $request->body,
            'status' => $request->status,
        ]);

        $gallery->tags()->sync($request->tag);

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $key => $file) {
                $image = Storage::disk('public')->put('galleries', $file);

                $gallery->images()->create([
                    'image' => $image
                ]);
            }
        }

        return redirect()->route('bagas.galleries.index')->with('message', 'New Gallery has been submit!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', [
            'gallery' => $gallery,
            'tags' => Tag::pluck('name', 'id'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'required|min:3|max:255',
            'body' => 'nullable|min:3',
            'status' => 'required|in:published,draft',
        ]);

        $gallery->update([
            'title' => $request->title,
            'body' => $request->body,
            'status' => $request->status,
        ]);

        $gallery->tags()->sync($request->tag);

        return redirect()->route('bagas.galleries.index')->with('message', 'New Gallery has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        foreach ($gallery->images()->get() as $key => $value) {
            if (Storage::disk('public')->exists($value->image)) {
                Storage::disk('public')->delete($value->image);
            }
        }

        $gallery->tags()->detach();
        $gallery->images()->delete();
        $gallery->delete();

        return redirect()->route('bagas.galleries.index')->with('message', 'Gallery deleted successfully!');
    }
}
