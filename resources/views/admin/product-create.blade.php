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
                    <h6 class="m-0 font-weight-bold text-primary">Add Product</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form method="POST" action="/admin/product">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
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
                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea required type="text" value="{{ old('description') }}" class="form-control @error('description')
                                    is-invalid
                                @enderror" id="description" name="description"> </textarea>
                                @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="category" class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                                <select class="form-select @error('category')
                                    is-invalid
                                @enderror"" aria-label=" Default select example" name="category_id">
                                    <option selected hidden>Open this select menu</option>
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
                            <label for="price" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input required type="text" value="{{ old('price') }}" class="form-control @error('price')
                                    is-invalid
                                @enderror" id="price" name="price">
                                @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="length" class="col-sm-2 col-form-label">Length</label>
                            <div class="col-sm-10">
                                <input required type="text" value="{{ old('length') }}" class="form-control @error('length')
                                    is-invalid
                                @enderror" id="length" name="length">
                                @error('length')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="breadth" class="col-sm-2 col-form-label">Breadth</label>
                            <div class="col-sm-10">
                                <input required type="text" value="{{ old('breadth') }}" class="form-control @error('breadth')
                                    is-invalid
                                @enderror" id="breadth" name="breadth">
                                @error('breadth')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="depth" class="col-sm-2 col-form-label">Depth</label>
                            <div class="col-sm-10">
                                <input required type="text" value="{{ old('depth') }}" class="form-control @error('depth')
                                    is-invalid
                                @enderror" id="depth" name="depth">
                                @error('depth')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="speed" class="col-sm-2 col-form-label">Speed</label>
                            <div class="col-sm-10">
                                <input required type="text" value="{{ old('speed') }}" class="form-control @error('speed')
                                    is-invalid
                                @enderror" id="speed" name="speed">
                                @error('speed')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="main_engine" class="col-sm-2 col-form-label">Main engine</label>
                            <div class="col-sm-10">
                                <input required type="text" value="{{ old('main_engine') }}" class="form-control @error('main_engine')
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
                            <label for="number_of_engine" class="col-sm-2 col-form-label">Number of engine</label>
                            <div class="col-sm-10">
                                <input required type="text" value="{{ old('number_of_engine') }}" class="form-control @error('number_of_engine')
                                    is-invalid
                                @enderror" id="number_of_engine" name="number_of_engine">
                                @error('number_of_engine')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add product</button>
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