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
                    <h6 class="m-0 font-weight-bold text-primary">Edit Layanan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form method="POST" action="/admin/service/{{ $service->id }}" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control @error('name')
                                    is-invalid
                                @enderror" id="name" name="name" value="{{ $service->name }}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea required name="description" type="text" class="form-control @error('description')
                                    is-invalid
                                @enderror" id="description"> {{ $service->description }} </textarea>
                                @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="formFile" class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-10 row">
                                <!-- image di database -->
                                <?php for ($i = 1; $i <= count($service->gallery); $i++) : ?>
                                <div class="col-sm-4 mb-3">
                                    <input class="dropify" type="file" data-max-file-size="8M"
                                        data-allowed-file-extensions="png jpeg jpg" id="image{{ $i }}"
                                        name="image{{ $i }}" accept="image/*"
                                        data-default-file="/storage/{{ $service->gallery[$i - 1]->photo }}">
                                    @error('image'.$i)
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <?php endfor ?>
                                <!-- tambahan jika image di database belum 5 -->
                                <?php for ($i; $i <= 5; $i++) : ?>
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
                        <button type="submit" class="btn btn-primary">Memperbarui Layanan</button>
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

// dropify
$('.dropify').dropify();
</script>

@endsection