@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mt-4">
        <div class="col-md-7">
            <h2 class="mb-4 fw-bold text-center">Form Edit Post</h2>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="modal-body">
                    <input class="form-control input-modal p-3 mb-3 @error('title') is-invalid @enderror" type="text" placeholder="Type anything for your Title~!" name="title" id="title" autofocus required value="{{ old('title', $post->title) }}">
                    @error('title')
                        <div class="invalid-feedback mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                    <input class="form-control input-modal p-3 mb-3 @error('slug') is-invalid @enderror" type="text" placeholder="Slug" name="slug" id="slug" required value="{{ old('slug', $post->slug) }}">
                    @error('slug')
                        <div class="invalid-feedback mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                    <select class="form-select input-modal p-3 mb-3" name="category_id">
                        @foreach ($categories as $category)
                            @if (old('category_id', $post->category_id) ==  $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                          
                        @endforeach
                    </select>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="hidden" name="oldThumb" value="{{ $post->thumbnail }}">
                            @if ($post->thumbnail)
                                <img src="{{ asset('storage/' . $post->thumbnail) }}" class="thumb-preview img-fluid mb-2">
                            @else
                                <img class="thumb-preview img-fluid mb-2">
                            @endif
                            <label for="uploadThumb" class="d-block w-100">
                                <a class="btn btn-upload p-3 d-block w-100">Upload Thumbnail</a>
                            </label>
                            @error('thumbnail')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input type="file" id="uploadThumb" class="form-control invisible @error('thumbnail') is-invalid @enderror" name="thumbnail" onchange="previewThumb()">
                        </div>
                        <div class="col">
                            <input type="hidden" name="oldBanner" value="{{ $post->banner }}">
                            @if ($post->banner)
                                <img src="{{ asset('storage/' . $post->banner) }}" class="banner-preview img-fluid mb-2">
                            @else
                                <img class="banner-preview img-fluid mb-2">
                            @endif
                            <label for="uploadBanner" class="d-block w-100">
                                <a class="btn btn-upload p-3 d-block w-100">Upload Banner</a>
                            </label>
                            @error('banner')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input type="file" id="uploadBanner" class="form-control invisible @error('banner') is-invalid @enderror" name="banner" onchange="previewBanner()">
                        </div>
                    </div>
                    <div class="mb-3">
                        @error('body')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="body2" type="hidden" name="body" class="@error('body') is-invalid @enderror" value="{{ old('body', $post->body) }}" required>
                        <trix-editor input="body2"></trix-editor>
                    </div>
                </div>
                <a href="/dashboard/posts" class="btn btn-primari rounded-pill">Back to Posts</a>
                <button type="submit" class="btn save rounded-pill" id="btn-save">Update</button>
                <button type="button" class="btn delete rounded-pill">Delete</button>
            </form>
        </div>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');
        const body = document.querySelector('#body');
        const thumb = document.getElementById('uploadThumb');
        const banner = document.getElementById('uploadBanner');

            title.addEventListener('change', function() {
                    fetch('/dashboard/posts/checkSlug?title=' + title.value)
                        .then(response => response.json())
                        .then(data => slug.value = data.slug)
            });


        
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });


        function previewThumb() {
            const thumbPreview = document.querySelector('.thumb-preview');

            thumbPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(thumb.files[0]);

            oFReader.onload = function(oFREvent) {
                thumbPreview.src = oFREvent.target.result;
            }
        }

        function previewBanner() {
            const bannerPreview = document.querySelector('.banner-preview');
            
            bannerPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(banner.files[0]);

            oFReader.onload = function(oFREvent) {
                bannerPreview.src = oFREvent.target.result;
            }
        }

    </script>
@endsection

