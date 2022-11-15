@extends('layouts/template-user')

@section('content')
    <!-- Carousel -->
    <div class="carousel__section">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="mx-2"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/carousel.jpg" class="d-block w-100" alt="Gambar Info Kapal" />
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-white fw-bold">
                            Pembuatan Kapal Ikan Sumber Makmur
                        </h5>
                        <p class="text-white">
                            Merupakan proyek dari Dinas Kelautan Kabupaten Batang.
                            Dilaksanakan tanggal 10 September 2022 - 10 Oktober 2022
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/carousel.jpg" class="d-block w-100" alt="Gambar Info Kapal" />

                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-white fw-bold">
                            Pembuatan Kapal Ikan Sumber Makmur
                        </h5>
                        <p class="text-white">
                            Merupakan proyek dari Dinas Kelautan Kabupaten Batang.
                            Dilaksanakan tanggal 10 September 2022 - 10 Oktober 2022
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/carousel.jpg" class="d-block w-100" alt="Gambar Info Kapal" />

                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-white fw-bold">
                            Pembuatan Kapal Ikan Sumber Makmur
                        </h5>
                        <p class="text-white">
                            Merupakan proyek dari Dinas Kelautan Kabupaten Batang.
                            Dilaksanakan tanggal 10 September 2022 - 10 Oktober 2022
                        </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon d-flex justify-content-center align-items-center"
                    aria-hidden="true"><i class="fa-solid fa-angle-left"></i></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon d-flex justify-content-center align-items-center"
                    aria-hidden="true"><i class="fa-solid fa-angle-right"></i></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Tentang Kami -->
    <div class="wx pt60 mx-auto" id="tentangKami">
        <div class="position-relative header">
            <h3 class="mx-auto darkblue fw-bold">Tentang Kami</h3>
            <span class="position-absolute"></span>
        </div>
        <div class="row ptbig justify-content-evenly">
            <div class="desc col-lg-5 col-12">
                {!! $profile->overview !!}
                <a href="/profile" class="btn__orange mt-3 d-block" style="width: max-content">
                    Baca Selengkapnya</a>
            </div>
            <div class="experience col-lg-5 col-12 mt-lg-0 mt-4">
                <div class="bgblue px-4 py-3">
                    <div class="item">
                        <h5 class="fwmed">Total Pekerjaan</h5>
                        <h1 class="fwbold mt-1">{{ $count_product }}+</h1>
                        <h5 class="mt-1">
                            Telah berkerja sama dengan berbagai klien
                        </h5>
                    </div>
                    <div class="item mt-4">
                        <h5 class="fwmed">Pengalaman</h5>
                        <h1 class="fwbold mt-1">5 Tahun</h1>
                        <h5 class="mt-1">
                            Rata rata pekerja berpengalaman lebih dari 5 tahun
                        </h5>
                    </div>
                    <div class="item mt-4">
                        <h5 class="fwmed">Proyek Sekarang</h5>
                        <h1 class="fwbold mt-1">10+</h1>
                        <h5 class="mt-1">
                            Pembuatan kapal ikan, kapal nelayan, dan lain lain
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Layanan -->
    <div class="pt60 mx-auto" id="layanan">
        <div class="position-relative header">
            <h3 class="mx-auto darkblue fw-bold">Layanan</h3>
            <span class="position-absolute"></span>
        </div>
        <div class="row ptbig">
            @foreach ($services as $service)
                <div class="col-xl-4 col-sm-6 col-12">
                    <div class="content text-center">
                        <i class="fa-solid fa-ship blue"></i>
                        <h4 class="blue fw-bold mt-2">{{ $service->name }}</h4>
                        {!! $service->description !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Galeri -->
    <div class="wx pt60 mx-auto" id="gallery">
        <div class="position-relative header">
            <h3 class="mx-auto darkblue fw-bold">Galeri</h3>
            <span class="position-absolute"></span>
        </div>
        <!-- Slider main container -->
        <div class="swiper ptbig">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach ($products as $product)
                    <div class="swiper-slide">
                        <div class="mx-3">
                            <img src="./storage/{{ $product->PhotoProduct[0]->photo }}" alt="Gambar Kapal"
                                id="gambar1" />
                            <div class="mt-2">
                                <h5 class="blue fwbold">{{ $product->name }}</h5>
                                {!! $product->description !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <!-- Hubungi Kami -->
    <div class="wx pt60 mx-auto" id="contact">
        <div class="position-relative header">
            <h3 class="mx-auto darkblue fw-bold">Hubungi Kami</h3>
            <span class="position-absolute"></span>
        </div>
        <div class="row ptbig">
            <div class="col-lg-6 col-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.56535129202263!2d109.74645593881567!3d-6.885139060447772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7024d77ee9f859%3A0x4bfa65449d1c2299!2sCV.%20LAKSANA%20ABADI!5e0!3m2!1sid!2sid!4v1665771801940!5m2!1sid!2sid"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-6 col-12">
                {{-- <form> --}}
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" aria-describedby="emailHelp" />
                </div>
                <div class="mb-3">
                    <label for="email_pemesan" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email_pemesan" aria-describedby="emailHelp" />
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <textarea class="form-control" id="pesan" rows="3"></textarea>
                </div>
                <button type="submit" class="btn__blue w-100" onclick="pemesanan()">Submit</button>
                {{-- </form> --}}
            </div>
        </div>
    </div>

    <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDq8eZFMZBCjWamg8vzRjIYjY2kNh8vOak&callback=initMap"></script>
    <!-- End google map -->
    <script>
        function pemesanan() {
            number = {{ trim($profile->phone_number) }};
            nama = document.getElementById("nama_lengkap").value;
            email = document.getElementById("email_pemesan").value;
            pesan = document.getElementById("pesan").value;

            let url = "https://wa.me/";

            let end_url = `${url}${number}?text=nama: ${nama} %0Aemail: ${email} %0Apesan: ${pesan}`;
            window.open(end_url, "_blank");
        }
    </script>
@endsection
