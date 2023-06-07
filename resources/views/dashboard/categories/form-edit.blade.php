@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mt-4">
        <div class="col-md-7">
            <h2 class="mb-4 fw-bold text-center">Form Edit Post</h2>
            <form action="/dashboard/categories/{{ $category->slug }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="modal-body">
                    <input class="form-control input-modal p-3 mb-3 @error('name') is-invalid @enderror" type="text" placeholder="Masukan nama category" name="name" id="name" autofocus required value="{{ old('name', $category->name) }}">
                    @error('name')
                        <div class="invalid-feedback mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                    <input class="form-control input-modal p-3 mb-3 @error('slug') is-invalid @enderror" type="text" placeholder="Slug" name="slug" id="slug" value="{{ old('slug', $category->slug) }}">
                    @error('slug')
                        <div class="invalid-feedback mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="hidden" name="oldThumb" value="{{ $category->thumbnail }}">
                    @if ($category->thumbnail)
                        <img src="{{ asset('storage/' . $category->thumbnail) }}" class="thumb-preview img-fluid mb-2 col-md-8">
                    @else
                        <img class="thumb-preview img-fluid mb-2 col-md-8">
                    @endif
                    <label for="uploadThumb" class="d-block w-100">
                        <a class="btn btn-upload p-3 d-block w-100">Upload Thumbnail</a>
                    </label>
                    @error('thumbnail')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input type="file" id="uploadThumb" class="form-control invisible @error('thumbnail') is-invalid @enderror" name="thumbnail" onchange="previewThumb()">
                </div>
                <a href="/dashboard/categories" class="btn btn-primari rounded-pill">Back to Posts</a>
                <button type="submit" class="btn save rounded-pill" id="btn-save">Update</button>
                <button type="button" class="btn delete rounded-pill">Delete</button>
            </form>
        </div>
    </div>

    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');
        const thumb = document.getElementById('uploadThumb');


        name.addEventListener('change', function() {
                    fetch('/dashboard/categories/checkSlug?name=' + name.value)
                        .then(response => response.json())
                        .then(data => slug.value = data.slug);
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
    </script>
@endsection

