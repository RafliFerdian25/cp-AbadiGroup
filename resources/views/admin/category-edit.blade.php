@extends('layouts/admin-layout')

@section('content')
<!-- Main Content -->

<!-- Begin Page Content -->
<div class="container-fluid">



    <div class="row">
        <!-- Area Chart -->
        <div class="col-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Kategori</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form method="POST" action="/admin/category/{{ $category->id }}">
                        @method('put')
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control @error('name')
                                    is-invalid
                                @enderror" id="name" name="name" value="{{ $category->name }}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Memperbarui Kategori</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<script>
// address CKEditor
ClassicEditor
    .create(document.querySelector('#description'), {
        removePlugins: ['Heading', 'Link', 'CKFinder'],
        toolbar: ['bold', 'italic', 'bulletedList', 'numberedList']
    })
    .then(newEditor => {
        console.log(newEditor);
        editor = newEditor;
    })
    .catch(error => {
        console.error(error);
    });
</script>

@endsection