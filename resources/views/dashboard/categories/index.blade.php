@extends('layouts.main')

@section('container')
<a href="/dashboard/categories/create" data-bs-toggle="modal" data-bs-target="#modalTambah" class="btn btn-add mb-3">Tambah Category +</a>

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
                <h5 class="display-6">Tambah Kategori Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/dashboard/categories" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                <input class="form-control input-modal p-3 mb-3 @error('name') is-invalid @enderror" type="text" placeholder="Masukan nama category" name="name" id="name" autofocus required value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback mb-3">
                        {{ $message }}
                    </div>
                @enderror
                <input class="form-control input-modal p-3 mb-3 @error('slug') is-invalid @enderror" type="text" placeholder="Slug" name="slug" id="slug" value="{{ old('slug') }}">
                @error('slug')
                    <div class="invalid-feedback mb-3">
                        {{ $message }}
                    </div>
                @enderror

                <img class="thumb-preview img-fluid mb-2 col-md-8">
                <label for="uploadThumb" class="d-block w-100">
                    <a class="btn btn-upload p-3 d-block w-100">Upload Thumbnail</a>
                </label>
                @error('thumbnail')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input type="file" id="uploadThumb" class="form-control invisible @error('thumbnail') is-invalid @enderror" name="thumbnail" onchange="previewThumb()">
                </div>
                <div class="modal-footer border border-top-0">
                    <button type="submit" class="btn save rounded-pill" id="btn-save">Save</button>
                    <button type="button" class="btn delete rounded-pill">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="row justify-content-center">
    @foreach ($categories as $category)
        <div class="col-md-3 card-category p-0 m-0 me-3 mb-4">
            <div class="card text-bg-dark border-0">
                @if ($category->thumbnail)
                    <img src="{{ asset('storage/' . $category->thumbnail) }}" class="card-img category-thumb" alt="{{ $category->name }}">
                @else
                    <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img category-thumb" alt="{{ $category->name }}">
                @endif
              <div class="card-img-overlay d-flex align-items-center p-0">
                <h5 class="card-title flex-fill p-4 text-center" style="background-color: rgba(0,0,0,0.7)">{{ $category->name }}</h5>
              </div>

              <div class="row g-0 action-admin-category">
                <div class="col">
                    <div class="d-grid">
                      <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-action edit d-block">Edit</a>
                    </div>
                </div>
                <div class="col">
                    <form action="/dashboard/categories/{{ $category->slug }}" method="post">
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

<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');
    const thumb = document.getElementById('uploadThumb');


    name.addEventListener('change', function() {
                    fetch('/dashboard/categories/checkSlug?name=' + name.value)
                        .then(response => response.json())
                        .then(data => slug.value = data.slug);
    });

    document.addEventListener("DOMContentLoaded", function() {
    
        if (name.classList.contains('is-invalid') || slug.classList.contains('is-invalid') || thumb.classList.contains('is-invalid')) {
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


</script>
@endsection