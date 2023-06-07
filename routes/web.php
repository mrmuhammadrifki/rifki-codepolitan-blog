<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return view('home.index', [
        'title' => 'Home',
        'active'  => 'home'
    ]);
});
Route::get('/about', function() {
    return view('about.index', [
        'title' => 'About',
        'active'  => 'about'
    ]);
});
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::get('/dashboard/posts/{post:slug}', [DashboardPostController::class, 'show']);
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show');
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// Route::get('/categories/{category:slug}', function(Category $category) {
//     return view('posts.index', [
//         'title' => "Posts by Category : $category->name",
//         'posts' => $category->posts->load('category', 'author'),    
//         'category' => $category->name,
//         'categories' => Category::all()
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author) {
//     return view('posts.index', [
//         'title' => "Posts by Author : $author->name",
//         'posts' => $author->posts->load('category', 'author'),
//         'categories' => Category::all()
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

