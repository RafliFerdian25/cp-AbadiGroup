@extends('layouts/template-user')

@section('content')
    <div class="kegiatan">
        <div class="pt60 mx-auto">
            <div class="position-relative header">
                <h2 class="mx-auto darkblue fw-bold">Kegiatan</h2>
                <span class="position-absolute"></span>
            </div>
            <h5 class="text-center mt-4">Beberapa kegiatan yang telah kami lakukan</h5>
        </div>
        <div class="mt-3 wx mx-auto">
            <div class="row">
                @foreach ( $news as $new)
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="card bgwhite p-4">
                        <div class="card__image">
                            <img src="/img/repairing.jpg" alt="Foto Kegiatan">
                        </div>
                        <div class="mt-2 card__header">
                            <h5 class="fwbold blue">{{ $new->title }}</h5>
                            <p class="darkgrey mt-1 mb-0">{{ $new->updated_at }}</p>
                        </div>
                        <div class="mt-3 card__desc">
                            <h6 class="mb-2">{{ $new->excerpt }}</h6>
                            <a href="/news/{{ $new->id }}" class="text-decoration-none">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- <div class="col-xl-4 col-md-6 col-12">
                    <div class="card bgwhite p-4">
                        <div class="card__image">
                            <img src="/img/repairing.jpg" alt="Foto Kegiatan">
                        </div>
                        <div class="mt-2 card__header">
                            <h5 class="fwbold blue">Berbagi Hewan Kurban Peringatan Idul Adha 1443H</h5>
                            <p class="darkgrey mt-1 mb-0">10 Agustus 2022</p>
                        </div>
                        <div class="mt-3 card__desc">
                            <h6 class="mb-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam, dicta ab!
                                Reiciendis nihil
                                molestiae quisquam nam.</h6>
                            <a href="" class="text-decoration-none">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="card bgwhite p-4">
                        <div class="card__image">
                            <img src="/img/repairing.jpg" alt="Foto Kegiatan">
                        </div>
                        <div class="mt-2 card__header">
                            <h5 class="fwbold blue">Berbagi Hewan Kurban Peringatan Idul Adha 1443H</h5>
                            <p class="darkgrey mt-1 mb-0">10 Agustus 2022</p>
                        </div>
                        <div class="mt-3 card__desc">
                            <h6 class="mb-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam, dicta ab!
                                Reiciendis nihil
                                molestiae quisquam nam.</h6>
                            <a href="" class="text-decoration-none">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="card bgwhite p-4">
                        <div class="card__image">
                            <img src="/img/repairing.jpg" alt="Foto Kegiatan">
                        </div>
                        <div class="mt-2 card__header">
                            <h5 class="fwbold blue">Berbagi Hewan Kurban Peringatan Idul Adha 1443H</h5>
                            <p class="darkgrey mt-1 mb-0">10 Agustus 2022</p>
                        </div>
                        <div class="mt-3 card__desc">
                            <h6 class="mb-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam, dicta ab!
                                Reiciendis nihil
                                molestiae quisquam nam.</h6>
                            <a href="" class="text-decoration-none">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
@endsection
