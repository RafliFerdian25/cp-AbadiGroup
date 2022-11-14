@extends('layouts/template-user')

@section('content')
    <div class="wx mx-auto detail__produk pt60">
        <div class="navback d-flex align-items-center mb-3">
            <a href="" class="text-decoration-none blue darkgrey me-3">
                <i class="fa-solid fa-arrow-left-long"></i>
            </a>
            <a href="" class="text-decoration-none darkgrey">Produk</a>
            <span class="mx-2">/</span>
            <a href="" class="text-decoration-none blue">Detail Produk</a>
        </div>
        <h3 class="fwbold mb-2">Detail Produk</h3>
        <div class="row">
            <div class="col-xl-6 col-12 mb-xl-0 mb-3">
                <div class="image w-100">
                    <img src="{{ asset('storage/' . $product->PhotoProduct[0]->photo) }}" width="100%" alt="Foto Detail Produk">
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="row mb-2">
                    <div class="col-4">
                        <div class="d-flex justify-content-between">
                            <h5>Nama</h5>
                            <h5>:</h5>
                        </div>
                    </div>
                    <div class="col-8 px-0">
                        <h5>{{ $product->name }}</h5>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <div class="d-flex justify-content-between">
                            <h5>Deskripsi</h5>
                            <h5>:</h5>
                        </div>
                    </div>
                    <div class="col-8 px-0" id="description__product">
                        {!! $product->description !!}
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <div class="d-flex justify-content-between">
                            <h5>Kategori</h5>
                            <h5>:</h5>
                        </div>
                    </div>
                    <div class="col-8 px-0" id="description__product">
                        <h5>{{  $product->category->name  }}</h5>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <div class="d-flex justify-content-between">
                            <h5>Harga</h5>
                            <h5>:</h5>
                        </div>
                    </div>
                    <div class="col-8 px-0">
                        <h5>{{ $product->price }}</h5>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <div class="d-flex justify-content-between">
                            <h5>Panjang (M)</h5>
                            <h5>:</h5>
                        </div>
                    </div>
                    <div class="col-8 px-0">
                        <h5>{{ $product->length }}</h5>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <div class="d-flex justify-content-between">
                            <h5>Luas (M)</h5>
                            <h5>:</h5>
                        </div>
                    </div>
                    <div class="col-8 px-0">
                        <h5>{{ $product->breadth }}</h5>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <div class="d-flex justify-content-between">
                            <h5>Kedalaman</h5>
                            <h5>:</h5>
                        </div>
                    </div>
                    <div class="col-8 px-0">
                        <h5>{{ $product->depth }}</h5>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <div class="d-flex justify-content-between">
                            <h5>Kecepatan (Knot)</h5>
                            <h5>:</h5>
                        </div>
                    </div>
                    <div class="col-8 px-0">
                        <h5>{{ $product->speed }}</h5>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <div class="d-flex justify-content-between">
                            <h5>Mesin Utama</h5>
                            <h5>:</h5>
                        </div>
                    </div>
                    <div class="col-8 px-0">
                        <h5>{{ $product->main_engine }}</h5>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <div class="d-flex justify-content-between">
                            <h5>Jumlah Mesin</h5>
                            <h5>:</h5>
                        </div>
                    </div>
                    <div class="col-8 px-0">
                        <h5>{{ $product->number_of_engine }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
