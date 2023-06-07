@extends('layouts.main')

@section('container')
    <a href="/dashboard/posts" data-bs-toggle="modal" data-bs-target="#modalTambah" class="btn btn-add mb-3">Tambah Post +</a>

    @if (session()->has('success'))
        <div class="alert alert-success mb-5" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <!-- Modal Tambah -->
    <div class="modal fade" id="modalTambah" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border border-bottom-0 mb-0 pb-2">
                    <h5 class="display-6">Tambah Post Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/dashboard/posts" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input class="form-control input-modal p-3 mb-3 @error('title') is-invalid @enderror" type="text" placeholder="Type anything for your Title~!" name="title" id="title" autofocus required value="{{ old('title') }}">
                        @error('title')
                            <div class="invalid-feedback mb-3">
                                {{ $message }}
                            </div>
                        @enderror
                        <input class="form-control input-modal p-3 mb-3 @error('slug') is-invalid @enderror" type="text" placeholder="Slug" name="slug" id="slug" required value="{{ old('slug') }}">
                        @error('slug')
                            <div class="invalid-feedback mb-3">
                                {{ $message }}
                            </div>
                        @enderror
                        <select class="form-select input-modal p-3 mb-3" name="category_id">
                            @foreach ($categories as $category)
                                @if (old('category_id') ==  $category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                              
                            @endforeach
                        </select>
                        <div class="row mt-3">
                            <div class="col">
                                <img class="thumb-preview img-fluid mb-2">
                                <label for="uploadThumb" class="d-block w-100">
                                    <a class="btn btn-upload p-3 d-block w-100">Upload Thumbnail</a>
                                </label>
                                @error('thumbnail')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input type="file" id="uploadThumb" class="form-control invisible @error('thumbnail') is-invalid @enderror" name="thumbnail" onchange="previewThumb()">
                            </div>
                            <div class="col">
                                <img class="banner-preview img-fluid mb-2">
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
                            <input id="body" type="hidden" name="body" class=" @error('body') is-invalid @enderror" required value="{{ old('body') }}">
                            <trix-editor input="body"></trix-editor>
                        </div>
                    </div>
                    <div class="modal-footer border border-top-0">
                        <button type="submit" class="btn save rounded-pill" id="btn-save">Save</button>
                        <button type="button" class="btn delete rounded-pill">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Posts Section Dimulai --}}
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
        @foreach ($posts as $post)
        <div class="col">
            <div class="card card-bg">
              @if ($post->banner)
                <img src="{{ asset('storage/' . $post->thumbnail) }}" class="card-img-top myimage-card">
              @else
                <img src="https://source.unsplash.com/640x340?computer" class="card-img-top myimage-card">
              @endif
              <div class="card-body">
                <h5 class="card-title mb-3"><a href="{{ url("/dashboard/posts/$post->slug") }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                <p class="card-text fw-normal">{{ $post->excerpt }}</p>
              </div>
              <div class="row g-0">
                  <div class="col">
                      <div class="d-grid">
                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-action edit d-block">Edit</a>
                      </div>
                  </div>
                  <div class="col">
                      <form action="/dashboard/posts/{{ $post->slug }}" method="post">
                        <div class="d-grid">
                            @method('delete')
                            @csrf
                            <button class="btn btn-action delete" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </div>
                      </form>
                  </div>
              </div>
            </div>
          </div>
        @endforeach
     
    </div>
    {{-- Posts Section Berakhir --}}

    
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

        

        document.addEventListener("DOMContentLoaded", function() {
    
                if (title.classList.contains('is-invalid') || slug.classList.contains('is-invalid') || body.classList.contains('is-invalid') || thumb.classList.contains('is-invalid') || banner.classList.contains('is-invalid')) {
                    var myModal = document.getElementById("modalTambah");
                    var modal = new bootstrap.Modal(myModal);
                    modal.show();
                }
                
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











