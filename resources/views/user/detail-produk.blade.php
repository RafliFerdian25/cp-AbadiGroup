@extends('layouts/template-user')

@section('content')
    <div class="product-detail">
        <div class="row">
            <div class="col-md-6">
                <div class="product-detail-image img-fluid">
                    <img src="{{ asset('storage/' . $product->PhotoProduct[0]->photo) }}" alt="Gambar Kapal" id="gambar1" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-detail-info">
                    <h2 class="blue fw-bold">{{ $product->name }}</h2>
                    <h5 class="blue fw-bold">{{ $product->category->name }}</h5>
                    <p class="mt-4">{{ $product->description }}</p>
                    <div class="mt-4">
                        <a href="/product/detail/{{ $product->id }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
