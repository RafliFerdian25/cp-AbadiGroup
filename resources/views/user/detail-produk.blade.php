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
                    <img src="/img/maintenance.jpg" width="100%" alt="Foto Detail Produk">
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
                        <h5>Kapal Pesiar</h5>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <div class="d-flex justify-content-between">
                            <h5>Deskripsi</h5>
                            <h5>:</h5>
                        </div>
                    </div>
                    <div class="col-8 px-0">
                        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. A illo voluptatibus architecto mollitia
                            harum, quam accusantium. Fugit quaerat hic vero laudantium, accusamus, recusandae mollitia
                            aliquam tenetur repellendus ad excepturi, voluptatibus ipsum facilis impedit eum laborum
                            dolorem. Non, consectetur explicabo. Illo!</h5>
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
                        <h5>Rp 4.000.000.000</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
