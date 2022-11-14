@extends('layouts/template-user')

@section('content')
    <!-- Layanan -->
    <div class="wx pt60 mx-auto" id="layananItem">
        <h2 class="fwbold blue text-center">
            “Selalu Mengedepankan Kualitas dan Membenahi Pelayanan”
        </h2>
        <h4 class="mt-2 darkgrey text-center">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo
            massa vitae dui. Leo quis feugiat eget dapibus eget at nunc vel vel urna
            porttitor.
        </h4>
        @foreach ( $services as $service )
        <div class="row pt60 @if ($loop->even)
            flex-row-reverse
        @endif" id="layanan{{ $loop->iteration }}">
            <div class="col-lg-6 col-12">
                <h3 class="darkblue fwbold">{{ $service->name }}</h3>
                <img src="./img/ship-builder.jpg" alt="Gambar Layanan" class="smallimg mt-lg-0 mt-2" />
                    {!! $service->description !!}
            </div>
            <div class="col-lg-6 col-12">
                <img src="{{ asset('storage/'. $service->gallery[0]->photo) }}" alt="Gambar Layanan" class="bigimg" />
            </div>
        </div>
        @endforeach
    </div>
    <!-- End layanan -->

    <!-- Testimoni -->
    <div class="pt60 pb60 mx-auto mt60 bgblue" id="testimoni">
        <div class="position-relative header">
            <h3 class="mx-auto text-white fw-bold">Testimoni</h3>
            <span class="position-absolute"></span>
        </div>
        <div class="wx mx-auto">
            <div class="swiper ptbig">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper" id="testimonial">
                    <!-- Slides -->
                    @foreach ( $testimonials as $testimonial )
                        
                    <div class="swiper-slide">
                        <div class="p-4 bgtestimoni mx-3">
                            <div class="d-flex align-items-center">
                                <img src="./img/icon-user.svg" alt="Icon Pengguna" width="50px" height="50px" />
                                <div class="ms-2">
                                    <h5 class="text-white fwmed">{{ $testimonial->name }}</h5>
                                    <h6 class="text-white mt-1">{{ $testimonial->position }} {{ $testimonial->company }}</h6>
                                </div>
                            </div>
                            <p>{!! $testimonial->testimonial !!}</p>
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
    </div>

    <!-- Proyek Terbaru -->
    <div class="wx pt60 mx-auto" id="gallery">
        <div class="position-relative header">
            <h3 class="mx-auto darkblue fw-bold">Proyek Terbaru</h3>
            <span class="position-absolute"></span>
        </div>
        <!-- Slider main container -->
        <div class="swiper ptbig" id="productTerbaru">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach ( $products as $product )
                <div class="swiper-slide">
                    <div class="mx-3">
                        <img src="./storage/{{ $product->PhotoProduct[0]->photo }}" alt="Gambar Kapal" id="gambar1" />
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
@endsection
