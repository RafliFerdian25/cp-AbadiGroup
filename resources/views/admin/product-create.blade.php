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
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Produk</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form method="POST" action="/admin/product" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input required type="text" value="{{ old('name') }}" class="form-control @error('name')
                                    is-invalid
                                @enderror" id="name" name="name">
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
                                <textarea required type="text" value="{{ old('description') }}" class="form-control @error('description')
                                    is-invalid
                                @enderror" id="description" name="description"> {{ old('description') }} </textarea>
                                @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="category" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <select class="form-select @error('category')
                                    is-invalid
                                @enderror" aria-label=" Default select example" name="category_id">
                                    <option selected hidden>Pilih kategori ...</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="price" class="col-sm-2 col-form-label">Harga (Rp)</label>
                            <div class="col-sm-10">
                                <input required type="number" value="{{ old('price') }}" class="form-control @error('price')
                                    is-invalid
                                @enderror" id="price" name="price" step="1">
                                @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="length" class="col-sm-2 col-form-label">Panjang (M)</label>
                            <div class="col-sm-10">
                                <input required type="number" value="{{ old('length') }}" class="form-control @error('length')
                                    is-invalid
                                @enderror" id="length" name="length" step="0.1">
                                @error('length')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="breadth" class="col-sm-2 col-form-label">Luas (M)</label>
                            <div class="col-sm-10">
                                <input required type="number" value="{{ old('breadth') }}" class="form-control @error('breadth')
                                    is-invalid
                                @enderror" id="breadth" name="breadth" step="0.1">
                                @error('breadth')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="depth" class="col-sm-2 col-form-label">Kedalaman (M)</label>
                            <div class="col-sm-10">
                                <input required type="number" value="{{ old('depth') }}" class="form-control @error('depth')
                                    is-invalid
                                @enderror" id="depth" name="depth" step="0.1">
                                @error('depth')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="speed" class="col-sm-2 col-form-label">Kecepatan</label>
                            <div class="col-sm-10">
                                <input required type="number" value="{{ old('speed') }}" class="form-control @error('speed')
                                    is-invalid
                                @enderror" id="speed" name="speed" step="0.1">
                                @error('speed')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="main_engine" class="col-sm-2 col-form-label">Mesin Utana</label>
                            <div class="col-sm-10">
                                <input required type="number" value="{{ old('main_engine') }}" class="form-control @error('main_engine')
                                    is-invalid
                                @enderror" id="main_engine" name="main_engine">
                                @error('main_engine')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="number_of_engine" class="col-sm-2 col-form-label">Jumlah Mesin</label>
                            <div class="col-sm-10">
                                <input required type="number" value="{{ old('number_of_engine') }}" class="form-control @error('number_of_engine')
                                    is-invalid
                                @enderror" id="number_of_engine" name="number_of_engine">
                                @error('number_of_engine')
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
                                        name="image{{ $i }}" accept="image/*" @if ($i==1) required @endif>
                                    @error('image'.$i)
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <?php endfor ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Menambah Produk</button>
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