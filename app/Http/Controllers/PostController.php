<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $title = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = 'in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = 'by ' . $author->name;
        }

        return view('posts.index', [
            'title' => 'All Posts ' . $title,
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString(),
            'categories' => Category::all()
        ]);
    }

    public function show(Post $post)
    {
        $posts = Post::where('user_id', $post->user_id)->limit(4);
        return view('posts.detail', [
            'title' => 'Detail Post',
            'post' => $post,
            'posts' => $posts->get()
        ]);
    }
}
