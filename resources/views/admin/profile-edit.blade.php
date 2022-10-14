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
                    <h6 class="m-0 font-weight-bold text-primary">Edit Profil</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form method="POST" action="/admin/profile/{{ $profile->id }}">
                        @method('put')
                        @csrf
                        <div class="row mb-3">
                            <label for="overview" class="col-sm-2 col-form-label">Gambaran umum</label>
                            <div class="col-sm-10">
                                <textarea required type="text" class="form-control @error('overview')
                                    is-invalid
                                @enderror" id="overview" name="overview"> {{ $profile->overview }} </textarea>
                                @error('overview')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="vision" class="col-sm-2 col-form-label">Visi</label>
                            <div class="col-sm-10">
                                <textarea required name="vision" type="text" class="form-control @error('vision')
                                    is-invalid
                                @enderror" id="vision"> {{ $profile->vision }} </textarea>
                                @error('vision')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="mission" class="col-sm-2 col-form-label">Misi</label>
                            <div class="col-sm-10">
                                <textarea required name="mission" type="text" class="form-control @error('mission')
                                    is-invalid
                                @enderror" id="mission"> {{ $profile->mission }} </textarea>
                                @error('mission')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="history" class="col-sm-2 col-form-label">Sejarah</label>
                            <div class="col-sm-10">
                                <textarea required name="history" type="text" class="form-control @error('history')
                                    is-invalid
                                @enderror" id="history"> {{ $profile->history }} </textarea>
                                @error('history')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea required name="address" type="text" class="form-control @error('address')
                                    is-invalid
                                @enderror" id="address"> {{ $profile->address }} </textarea>
                                @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="latitude" class="col-sm-2 col-form-label">Garis Lintang</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control @error('latitude')
                                    is-invalid
                                @enderror" id="latitude" name="latitude" value="{{ $profile->latitude }}">
                                @error('latitude')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="longitude" class="col-sm-2 col-form-label">Garis Bujur</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control @error('longitude')
                                    is-invalid
                                @enderror" name="longitude" id="longitude" value="{{ $profile->longitude }}">
                                @error('longitude')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="phone_number" class="col-sm-2 col-form-label">No Telepon</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control @error('phone_number')
                                    is-invalid
                                @enderror" id="phone_number" name="phone_number" value="{{ $profile->phone_number }}">
                                @error('phone_number')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Alamat Email</label>
                            <div class="col-sm-10">
                                <input required type="email" class="form-control @error('email')
                                    is-invalid
                                @enderror" id="email" name="email" value="{{ $profile->email }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Ubah Profil</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<script>
// overview CKEditor
ClassicEditor
    .create(document.querySelector('#overview'), {
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
// vision CKEditor
ClassicEditor
    .create(document.querySelector('#vision'), {
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
// mission CKEditor
ClassicEditor
    .create(document.querySelector('#mission'), {
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
// history CKEditor
ClassicEditor
    .create(document.querySelector('#history'), {
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
// address CKEditor
ClassicEditor
    .create(document.querySelector('#address'), {
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