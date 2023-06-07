@extends('layouts.main')

@section('container')
    @if ($post->banner)
      <img src="{{ asset('storage/' . $post->banner) }}" class="detail-banner"> 
    @else
      <img src="https://source.unsplash.com/1200x640?computer" class="detail-banner">
    @endif
    <div class="row px-4 mt-4 detail-row mt-5">
        <div class="col-md-8 detail-post">
            <div class="d-flex flex-wrap">
              <span class="me-3 detail-subtitle mb-2 mb-sm-0"><a href="/posts?author={{ $post->author->username }}" class="text-dark text-decoration-none"><i class="bi bi-person"></i> {{ $post->author->name }}</a></span>
              <span class="me-3 detail-subtitle"><a href="/posts?category={{ $post->category->slug }}" class="text-dark text-decoration-none"><i class="bi bi-record-circle"></i> {{ $post->category->name }}</a></span>
              <span class="detail-subtitle"><i class="bi bi-clock"></i> {{ $post->created_at->diffForHumans() }}</span>
            </div>
           
            <h2 class="mt-4 mb-4 fw-bold fs-1">{{ $post->title }}</h2>
            <div class="detail-body">{!! $post->body !!}</div>
        </div>
        <div class="col-md-4 mt-3 mt-sm-0">
            <h4 class="display-7 border-bottom border-primary-subtle mb-3 fw-bold">Explore Other Post</h4>
            @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-lg-4">
                    <a href="{{ url('posts/detail') }}">
                      @if ($post->thumbnail)
                        <img src="{{ asset('storage/' . $post->thumbnail) }}" class="img-fluid w-100 rounded-start other-posts-img">
                      @else
                        <img src="https://source.unsplash.com/300x200?{{ $post->category->name }}" class="img-fluid w-100 rounded-start other-posts-img">
                      @endif
                     
                    </a>
                  </div>
                  <div class="col-lg-8">
                    <div class="card-body">
                      <a href="{{ $post->slug }}" class="text-dark text-decoration-none">
                        <h5 class="card-title">{{ $post->title }}</h5>
                      </a>
                      <p class="card-text fw-normal">{{ $post->excerpt }}</p>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
    </div>
@endsection



