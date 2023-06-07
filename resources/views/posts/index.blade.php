@extends('layouts.main')

@section('container')
    <h1 class="border text-center mx-auto mt-5 p-3 rounded-pill post-title">Welcome To My Blog</h1>

    <div class="row justify-content-center mb-3">
      <div class="col-md-6">
        <form action="/posts">
          @if (request('category'))
              <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
          @endif
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
            <button class="btn btn-primari" type="submit">Search</button>
          </div>
        </form>
      </div>
    </div>

    <div class="container mb-5">
      <h2 class="mb-3 fw-bold">Post Categories</h2>
      <div class="category-container">
        @foreach ($categories as $category)
          <a href="/posts?category={{ $category->slug }}">
            <div class="card text-bg-dark card-category border-0">
              <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
              <div class="card-img-overlay d-flex align-items-center p-0">
                <h5 class="card-title flex-fill p-4 text-center" style="background-color: rgba(0,0,0,0.7)">{{ $category->name }}</h5>
              </div>
            </div>
          </a>
          @endforeach
        </div>
    </div>

    @if ($posts->count())
    <h2 class="mb-3 fw-bold">{{ $title }}</h2>
    <div class="card card-bg mb-4 hero">
      <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.6)"><a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none text-white">{{ $posts[0]->category->name }}</a></div>
      @if ($posts[0]->thumbnail)
        <img src="{{ asset('storage/' . $posts[0]->thumbnail) }}" class="card-img-top hero-image-thumbnail" alt="{{ $posts[0]->category->name }}">
      @else
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top hero-image-thumbnail" alt="{{ $posts[0]->category->name }}">
      @endif
      
      <div class="card-body text-center">
        <a href="posts/{{ $posts[0]->slug }}" class="text-dark text-decoration-none">
          <h3 class="card-title mb-3 fs-4 fw-bold">{{ $posts[0]->title }}</h3>
        </a>
        <div class="d-flex flex-wrap justify-content-center mb-2">
          <h6 class="card-subtitle mb-2 text-body-secondary post-subtitle me-3"><a href="/posts?author={{ $posts[0]->author->username }}" class="text-dark text-decoration-none"><i class="bi bi-person"></i> {{ $posts[0]->author->name }}</a></h6>
          <h6 class="card-subtitle mb-2 text-body-secondary post-subtitle"><i class="bi bi-clock"></i> {{ $posts[0]->created_at->diffForHumans() }}</h6>
        </div>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primari">Read more</a>
      </div>
    </div>
   

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
        @foreach ($posts->skip(1) as $post)
        <div class="col">
          <div class="card card-bg">
            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.6)"><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
            @if ($post->thumbnail)
              <img src="{{ asset('storage/'. $post->thumbnail) }}" class="card-img-top post-thumbnail">  
            @else
              <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top post-thumbnail">
            @endif
            <div class="card-body">
              <a href="{{ url("posts/$post->slug") }}" class="text-dark text-decoration-none">
                <h5 class="card-title mb-3 fs-4 fw-bold">{{ $post->title }}</h5>
              </a>
              <div class="d-flex flex-wrap mb-2">
                <h6 class="card-subtitle mb-2 text-body-secondary post-subtitle me-3"><a href="/posts?author={{ $post->author->username }}" class="text-dark text-decoration-none"><i class="bi bi-person"></i> {{ $post->author->name }}</a></h6>
                <h6 class="card-subtitle mb-2 text-body-secondary post-subtitle"><i class="bi bi-clock"></i> {{ $post->created_at->diffForHumans() }}</h6>
              </div>
              <p class="card-text">{{ $post->excerpt }}</p>
              <a href="{{ url("posts/$post->slug") }}" class="btn btn-primari">Read more</a>
            </div>
          </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="alert alert-warning text-center fs-4" role="alert">
      No Post found.
    </div>
  @endif

  <div class="d-flex justify-content-center mt-4">
    {{ $posts->links() }}
  </div>
@endsection