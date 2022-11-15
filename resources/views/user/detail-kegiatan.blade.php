@extends('layouts/template-user')

@section('content')
    <div class="wx mx-auto pt60" id="detailKegiatan">
        <div class="navback d-flex align-items-center mb-3">
            <a href="/news" class="text-decoration-none me-3">
                <i class="fa-solid fa-arrow-left-long"></i>
            </a>
            <a href="/news" class="text-decoration-none blue">Kegiatan</a>
            <span class="mx-2 blue">/</span>
            <a href="" class="text-decoration-none darkgrey">Detail Kegiatan</a>
        </div>
        <div class="row">
            <div class="col-lg-7 col-12">
                <h3 class="fw-bold">Detail Kegiatan</h3>
                <div class="image mt-2">
                    <img src="{{ asset('storage/' . $news->gallery[0]->photo) }}" alt="Foto Detail Kegiatan">
                </div>
                <div class="content mt-2">
                    <h4 class="blue fwbold">{{ $news->title }}</h4>
                    <p class="darkgrey mt-1 mb-3">{{ $news->updated_at }}</p>
                    {!! $news->content !!}
                </div>
            </div>
            <div class="col-lg-4 col-12 offset-lg-1 mt-lg-0 mt-3">
                <h5 class="fw-bold mb-2">Kegiatan Lainnya</h5>
                <div class="card__lainnya row flex-lg-column flex-row">
                    @foreach ($other_news as $other_new)
                        <div class="col-lg-12 col-sm-6 col-md-4">
                            <div class="image mb-2">
                                <img src="/img/maintenance.jpg" alt="Foto Detail Kegiatan">
                            </div>
                            <a href="/news/{{ $other_new->id }}"
                                class="blue text-decoration-none fwbold">{{ $other_new->title }}</a>
                            <p class="darkgrey">{{ date_format($other_new->updated_at, 'd/m/Y H:i') }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
