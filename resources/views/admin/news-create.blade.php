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
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Kegiatan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form method="POST" action="/admin/news" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="title" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control @error('title')
                                    is-invalid
                                @enderror" id="title" name="title" value="{{ old('title') }}">
                                @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="newsContent" class="col-sm-2 col-form-label">Deskripsi Kegiatan</label>
                            <div class="col-sm-10">
                                <textarea required name="newsContent" type="text" class="form-control @error('content')
                                    is-invalid
                                @enderror" id="newsContent"> {{ old('content') }} </textarea>
                                @error('content')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="formFile" class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-10 row">
                                <?php for ($i = 1; $i <= 5; $i++) : ?>
                                <div class="col-sm-4 mb-3">
                                    <input class="dropify" type="file" data-max-file-size="8M"
                                        data-allowed-file-extensions="png jpeg jpg" id="image{{ $i }}"
                                        name="image{{ $i }}" accept="image/*">
                                    @error('image'.$i)
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <?php endfor ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Menambah Kegiatan</button>
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
    .create(document.querySelector('#newsContent'), {
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