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
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Testimoni</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form method="POST" action="/admin/testimonial" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control @error('name')
                                    is-invalid
                                @enderror" id="name" name="name" value="{{ old('name') }}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="position" class="col-sm-2 col-form-label">Jabatan</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control @error('position')
                                    is-invalid
                                @enderror" id="position" name="position" value="{{ old('position') }}">
                                @error('position')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="company" class="col-sm-2 col-form-label">Perusahaan</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control @error('company')
                                    is-invalid
                                @enderror" id="company" name="company" value="{{ old('company') }}">
                                @error('company')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="testimonial" class="col-sm-2 col-form-label">Testimonial</label>
                            <div class="col-sm-10">
                                <textarea required name="testimonial" type="text" class="form-control @error('testimonial')
                                    is-invalid
                                @enderror" id="testimonial"> {{ old('testimonial') }} </textarea>
                                @error('testimonial')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Menambah Testimoni</button>
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
    .create(document.querySelector('#testimonial'), {
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

// dropify
$('.dropify').dropify();
</script>

@endsection