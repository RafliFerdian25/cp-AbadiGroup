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
                <h5 class="darkgrey lh-sm">
                    Sebuah galangan kapal rakyat, yang berdiri sejak 1995. Seiring
                    dengan saratnya pengalaman di pembangunan kapal kayu khususnya,
                    telah menjadikan CV. Laksana Abadi menjadi galangan unggulan di
                    wilayah Propinsi JATENG. Banyak kapal-kapal Ikan, Niaga yang
                    telah diselesaikan oleh sentuhan anak bangsa ini.
                </h5>
                <h5 class="mt-3 darkgrey lh-sm">
                    Proyek-proyek baik dari swasta (dalam negeri atau manca negara)
                    ataupun pemerintah juga sering dikerjakan di galangan kami.
                    Dengan mengedepankan kualitas kapal dan selalu membenahi
                    pelayanan, kami berharap akan menjadi "leader" produksi Kapal
                    Kayu terbesar di Indonesia.
                </h5>
                <button type="button" href="" class="btn__orange mt-3">
                    Baca Selengkapnya
                </button>
            </div>
            <div class="experience col-lg-5 col-12 mt-lg-0 mt-4">
                <div class="bgblue px-4 py-3">
                    <div class="item">
                        <h5 class="fwmed">Total Pekerjaan</h5>
                        <h1 class="fwbold mt-1">400+</h1>
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
            <div class="col-xl-4 col-sm-6 col-12">
                <div class="content text-center">
                    <i class="fa-solid fa-ship blue"></i>
                    <h4 class="blue fw-bold mt-2">Ship Builder</h4>
                    <h5 class="blue mt-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In
                        commodi explicabo eaque laborum eligendi ducimus, quasi
                        tempora blanditiis unde magni? Commodi fuga minima veniam
                        libero, saepe nulla assumenda illum tempora.
                    </h5>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12 mt-sm-0 mt-4">
                <div class="content text-center">
                    <i class="fa-solid fa-ship blue"></i>
                    <h4 class="blue fw-bold mt-2">Repairing</h4>
                    <h5 class="blue mt-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In
                        commodi explicabo eaque laborum eligendi ducimus, quasi
                        tempora blanditiis unde magni? Commodi fuga minima veniam
                        libero, saepe nulla assumenda illum tempora.
                    </h5>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12 mt-4 mt-xl-0">
                <div class="content text-center">
                    <i class="fa-solid fa-ship blue"></i>
                    <h4 class="blue fw-bold mt-2">Maintenance</h4>
                    <h5 class="blue mt-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In
                        commodi explicabo eaque laborum eligendi ducimus, quasi
                        tempora blanditiis unde magni? Commodi fuga minima veniam
                        libero, saepe nulla assumenda illum tempora.
                    </h5>
                </div>
            </div>
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
                <div class="swiper-slide">
                    <div class="mx-3">
                        <img src="./img/carousel.jpg" alt="Gambar Kapal" id="gambar1" />
                        <div class="mt-2">
                            <h5 class="blue fwbold">Kapal Ikan</h5>
                            <h6 class="darkgrey">
                                Lorem ipsum, dolor sit amet consectetur adipisicing
                                elit. Deserunt, blanditiis?
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="mx-3">
                        <img src="./img/carousel.jpg" alt="Gambar Kapal" id="gambar1" />
                        <div class="mt-2">
                            <h5 class="blue fwbold">Kapal Ikan</h5>
                            <h6 class="darkgrey">
                                Lorem ipsum, dolor sit amet consectetur adipisicing
                                elit. Deserunt, blanditiis?
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="mx-3">
                        <img src="./img/carousel.jpg" alt="Gambar Kapal" id="gambar1" />
                        <div class="mt-2">
                            <h5 class="blue fwbold">Kapal Ikan</h5>
                            <h6 class="darkgrey">
                                Lorem ipsum, dolor sit amet consectetur adipisicing
                                elit. Deserunt, blanditiis?
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="mx-3">
                        <img src="./img/carousel-img.jpg" alt="Gambar Kapal" id="gambar1" />
                        <div class="mt-2">
                            <h5 class="blue fwbold">Kapal Ikan</h5>
                            <h6 class="darkgrey">
                                Lorem ipsum, dolor sit amet consectetur adipisicing
                                elit. Deserunt, blanditiis?
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="mx-3">
                        <img src="./img/carousel-img.jpg" alt="Gambar Kapal" id="gambar1" />
                        <div class="mt-2">
                            <h5 class="blue fwbold">Kapal Ikan</h5>
                            <h6 class="darkgrey">
                                Lorem ipsum, dolor sit amet consectetur adipisicing
                                elit. Deserunt, blanditiis?
                            </h6>
                        </div>
                    </div>
                </div>
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
            </div>
            <div class="col-lg-6 col-12">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn__blue w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDq8eZFMZBCjWamg8vzRjIYjY2kNh8vOak&callback=initMap"></script>
    <!-- End google map -->
@endsection
