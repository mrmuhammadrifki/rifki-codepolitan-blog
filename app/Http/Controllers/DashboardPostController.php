<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'posts' => Post::where('user_id', auth()->user()->id)->get(),
            'categories' => Category::all()
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

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'thumbnail' => 'image|file|max:1024',
            'banner' => 'image|file|max:1024',
            'category_id' => 'required',
            'body' => 'required'
        ]);

        if ($request->file('thumbnail')) {
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('post-thumbnail');
        }

        if ($request->file('banner')) {
            $validatedData['banner'] = $request->file('banner')->store('post-banner');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::create($validatedData);
        return redirect('/dashboard/posts')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $posts = Post::where('user_id', auth()->user()->id)->limit(4);
        return view('posts.detail', [
            'title' => 'Detail Post',
            'active' => 'detail',
            'post' => $post,
            'posts' => $posts->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.form-edit', [
            'title' => 'Form Edit Post',
            'active' => 'dashboard',
            'post' => $post,
            'categories' => Category::all()
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
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required',
            'thumbnail' => 'image|file|max:1024',
            'banner' => 'image|file|max:1024'
        ];

        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('thumbnail')) {
            if ($request->oldThumb) {
                Storage::delete($request->oldThumb);
            }
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('post-thumbnail');
        }

        if ($request->file('banner')) {
            if ($request->oldBanner) {
                Storage::delete($request->oldBanner);
            }
            $validatedData['banner'] = $request->file('banner')->store('post-banner');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::where('id', $post->id)
            ->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if ($post->thumbnail) {
            Storage::delete($post->thumbnail);
        }
        if ($post->banner) {
            Storage::delete($post->banner);
        }
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Post has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}


