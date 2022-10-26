@extends('layouts/template-user')

@section('content')
    <!-- Card -->
    <div class="pt60 mx-auto">
        <div class="position-relative header">
            <h2 class="mx-auto darkblue fw-bold">Produk Kami</h2>
            <span class="position-absolute"></span>
        </div>
        <h5 class="text-center mt-4">Beberapa produk kapal yang kami hasilkan</h5>
    </div>

    <div class="card-container mt-3" id="produk">
        <div class="card-content mt-0">
            @foreach ($products as $product)
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('storage/' . $product->PhotoProduct[0]->photo) }}" alt="Gambar Kapal"
                            id="gambar1" />
                    </div>
                    <div class="card-info">
                        <h5 class="blue mt-2 fwbold text-center">{{ $product->name }}</h5>
                        <h6 class="blue text-center mt-1">{{ $product->category->name }}</h6>
                        <div class="mt-6">

                        </div>
                    </div>
                </div>
            @endforeach
            <!-- <div class="card">
                        <div class="card-image">
                            <img src="img/maintenance.jpg" alt="" />
                        </div>
                        <div class="card-info">
                            <h5 class="blue mt-2 fwbold text-center">Kapal Ikan PT. Marina</h5>
                            <h6 class="blue text-center mt-1">Pemkab Batang</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="img/maintenance.jpg" alt="" />
                        </div>
                        <div class="card-info">
                            <h5 class="blue mt-2 fwbold text-center">Kapal Ikan PT. Marina</h5>
                            <h6 class="blue text-center mt-1">Pemkab Batang</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="img/maintenance.jpg" alt="" />
                        </div>
                        <div class="card-info">
                            <h5 class="blue mt-2 fwbold text-center">Kapal Ikan PT. Marina</h5>
                            <h6 class="blue text-center mt-1">Pemkab Batang</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="img/maintenance.jpg" alt="" />
                        </div>
                        <div class="card-info">
                            <h5 class="blue mt-2 fwbold text-center">Kapal Ikan PT. Marina</h5>
                            <h6 class="blue text-center mt-1">Pemkab Batang</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="img/maintenance.jpg" alt="" />
                        </div>
                        <div class="card-info">
                            <h5 class="blue mt-2 fwbold text-center">Kapal Ikan PT. Marina</h5>
                            <h6 class="blue text-center mt-1">Pemkab Batang</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="img/maintenance.jpg" alt="" />
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <img src="img/maintenance.jpg" alt="" />
                            </div>
                            <div class="d-flex flex-column mb-3">
                                <div class="card-info mb-2 mt-2">
                                    <h5 class="blue mt-2 fwbold text-center">Kapal Ikan PT. Marina</h5>
                                    <h6 class="blue text-center mt-1">Pemkab Batang</h6>
                                </div>
                                <div class="card-desc mt-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Panjang</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">35 meter</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Lebar</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">20 meter</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Tinggi</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">10 meter</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <img src="img/maintenance.jpg" alt="" />
                            </div>
                            <div class="d-flex flex-column mb-3">
                                <div class="card-info mb-2 mt-2">
                                    <h5 class="blue mt-2 fwbold text-center">Kapal Ikan PT. Marina</h5>
                                    <h6 class="blue text-center mt-1">Pemkab Batang</h6>
                                </div>
                                <div class="card-desc mt-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Panjang</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">35 meter</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Lebar</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">20 meter</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Tinggi</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">10 meter</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <img src="img/maintenance.jpg" alt="" />
                            </div>
                            <div class="d-flex flex-column mb-3">
                                <div class="card-info mb-2 mt-2">
                                    <h5 class="blue mt-2 fwbold text-center">Kapal Ikan PT. Marina</h5>
                                    <h6 class="blue text-center mt-1">Pemkab Batang</h6>
                                </div>
                                <div class="card-desc mt-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Panjang</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">35 meter</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Lebar</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">20 meter</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Tinggi</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">10 meter</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <img src="img/maintenance.jpg" alt="" />
                            </div>
                            <div class="d-flex flex-column mb-3">
                                <div class="card-info mb-2 mt-2">
                                    <h5 class="blue mt-2 fwbold text-center">Kapal Ikan PT. Marina</h5>
                                    <h6 class="blue text-center mt-1">Pemkab Batang</h6>
                                </div>
                                <div class="card-desc mt-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Panjang</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">35 meter</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Lebar</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">20 meter</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Tinggi</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">10 meter</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <img src="img/maintenance.jpg" alt="" />
                            </div>
                            <div class="d-flex flex-column mb-3">
                                <div class="card-info mb-2 mt-2">
                                    <h5 class="blue mt-2 fwbold text-center">Kapal Ikan PT. Marina</h5>
                                    <h6 class="blue text-center mt-1">Pemkab Batang</h6>
                                </div>
                                <div class="card-desc mt-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Panjang</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">35 meter</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Lebar</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">20 meter</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Tinggi</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">10 meter</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <img src="img/maintenance.jpg" alt="" />
                            </div>
                            <div class="d-flex flex-column mb-3">
                                <div class="card-info mb-2 mt-2">
                                    <h5 class="blue mt-2 fwbold text-center">Kapal Ikan PT. Marina</h5>
                                    <h6 class="blue text-center mt-1">Pemkab Batang</h6>
                                </div>
                                <div class="card-desc mt-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Panjang</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">35 meter</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Lebar</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">20 meter</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Tinggi</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">10 meter</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <img src="img/maintenance.jpg" alt="" />
                            </div>
                            <div class="d-flex flex-column mb-3">
                                <div class="card-info mb-2 mt-2">
                                    <h5 class="blue mt-2 fwbold text-center">Kapal Ikan PT. Marina</h5>
                                    <h6 class="blue text-center mt-1">Pemkab Batang</h6>
                                </div>
                                <div class="card-desc mt-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Panjang</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">35 meter</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Lebar</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">20 meter</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Tinggi</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">10 meter</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <img src="img/maintenance.jpg" alt="" />
                            </div>
                            <div class="d-flex flex-column mb-3">
                                <div class="card-info mb-2 mt-2">
                                    <h5 class="blue mt-2 fwbold text-center">Kapal Ikan PT. Marina</h5>
                                    <h6 class="blue text-center mt-1">Pemkab Batang</h6>
                                </div>
                                <div class="card-desc mt-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Panjang</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">35 meter</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Lebar</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">20 meter</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Tinggi</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">10 meter</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <img src="img/maintenance.jpg" alt="" />
                            </div>
                            <div class="d-flex flex-column mb-3">
                                <div class="card-info mb-2 mt-2">
                                    <h5 class="blue mt-2 fwbold text-center">Kapal Ikan PT. Marina</h5>
                                    <h6 class="blue text-center mt-1">Pemkab Batang</h6>
                                </div>
                                <div class="card-desc mt-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Panjang</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">35 meter</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Lebar</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">20 meter</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Tinggi</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">10 meter</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <img src="img/maintenance.jpg" alt="" />
                            </div>
                            <div class="d-flex flex-column mb-3">
                                <div class="card-info mb-2 mt-2">
                                    <h5 class="blue mt-2 fwbold text-center">Kapal Ikan PT. Marina</h5>
                                    <h6 class="blue text-center mt-1">Pemkab Batang</h6>
                                </div>
                                <div class="card-desc mt-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Panjang</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">35 meter</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Lebar</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">20 meter</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Tinggi</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">10 meter</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <img src="img/maintenance.jpg" alt="" />
                            </div>
                            <div class="d-flex flex-column mb-3">
                                <div class="card-info mb-2 mt-2">
                                    <h5 class="blue mt-2 fwbold text-center">Kapal Ikan PT. Marina</h5>
                                    <h6 class="blue text-center mt-1">Pemkab Batang</h6>
                                </div>
                                <div class="card-desc mt-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Panjang</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">35 meter</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Lebar</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">20 meter</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="d-flex left justify-content-between">
                                            <h6>Tinggi</h6>
                                            <h6>:</h6>
                                        </div>
                                        <h6 class="right">10 meter</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
        </div>

        <!-- PAGINATION -->
        <div class="pagination">
            <li class="page-item previous-page disable">
                <a class="page-link" href="#">Sebelumnya</a>
            </li>
            <li class="page-item current-page active">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item dots">
                <a class="page-link" href="#">...</a>
            </li>
            <li class="page-item current-page">
                <a class="page-link" href="#">5</a>
            </li>
            <li class="page-item current-page">
                <a class="page-link" href="#">6</a>
            </li>
            <li class="page-item dots">
                <a class="page-link" href="#">...</a>
            </li>
            <li class="page-item current-page">
                <a class="page-link" href="#">10</a>
            </li>
            <li class="page-item next-page">
                <a class="page-link" href="#"></a>
            </li>
        </div>
    </div>
    </div>
@endsection
