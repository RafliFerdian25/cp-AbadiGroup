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
        <div class="row pt60" id="layanan1">
            <div class="col-lg-6 col-12">
                <h3 class="darkblue fwbold">Ship Builder</h3>
                <img src="./img/ship-builder.jpg" alt="Gambar Layanan" class="smallimg mt-lg-0 mt-2" />
                <h5 class="mt-2 darkgrey">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur
                    sequi provident voluptatem porro omnis, aut reiciendis animi a?
                    Nihil illo quod expedita id veritatis suscipit nostrum ratione
                    itaque soluta neque culpa atque est earum consequatur eaque iste,
                    non libero incidunt nam explicabo inventore nisi? Quos deleniti,
                    ducimus similique iure blanditiis ad quis quidem repudiandae
                    voluptatibus maiores nisi aliquid corrupti! Obcaecati, repellendus.
                    Voluptatem soluta corporis eos, debitis a fugiat. Ipsum, recusandae?
                    Ipsa debitis deserunt, odio voluptate commodi eaque? Tempora, veniam
                    harum.
                </h5>
            </div>
            <div class="col-lg-6 col-12">
                <img src="./img/ship-builder.jpg" alt="Gambar Layanan" class="bigimg" />
            </div>
        </div>
        <div class="row flex-row-reverse pt60" id="layanan2">
            <div class="col-lg-6 col-12">
                <h3 class="darkblue fwbold">Repairing</h3>
                <img src="./img/repairing.jpg" alt="Gambar Layanan" class="smallimg mt-lg-0 mt-2" />
                <h5 class="mt-2 darkgrey">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus
                    corrupti quas tempore! Eaque, corrupti quae commodi cum eum
                    asperiores voluptatibus a laudantium delectus dignissimos facere
                    reprehenderit doloremque odit perferendis sed.
                </h5>
                <ul class="mt-2">
                    <li class="darkgrey">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam,
                        dolore?
                    </li>
                    <li class="darkgrey">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam,
                        dolore?
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-12">
                <img src="./img/repairing.jpg" alt="Gambar Layanan" class="bigimg" />
            </div>
        </div>
        <div class="row pt60" id="layanan3">
            <div class="col-lg-6 col-12">
                <h3 class="darkblue fwbold">Maintenance</h3>
                <img src="./img/maintenance.jpg" alt="Gambar Layanan" class="smallimg mt-lg-0 mt-2" />
                <h5 class="mt-2 darkgrey">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores,
                    cupiditate? Ad in dolor error deserunt repellat quae minima sed
                    magnam, aut accusamus rem modi veniam atque magni sequi. Hic est
                    quas, odio qui error veniam nostrum aperiam quo ad aliquid alias
                    corrupti exercitationem, optio magni. Ab doloremque nesciunt,
                    obcaecati, unde omnis vero similique saepe quos placeat quidem neque
                    rem distinctio?
                </h5>
            </div>
            <div class="col-lg-6 col-12">
                <img src="./img/maintenance.jpg" alt="Gambar Layanan" class="bigimg" />
            </div>
        </div>
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
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="p-4 bgtestimoni mx-3">
                            <div class="d-flex align-items-center">
                                <img src="./img/icon-user.svg" alt="Icon Pengguna" width="50px" height="50px" />
                                <div class="ms-2">
                                    <h5 class="text-white fwmed">Musa Alfian Maulana</h5>
                                    <h6 class="text-white mt-1">Direktur PT. Maju Mundur</h6>
                                </div>
                            </div>
                            <h6 class="text-white mt-2">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit
                                excepturi atque natus facere quam totam omnis dolore quidem,
                                quae corporis nostrum! Molestiae veritatis cumque nostrum
                                aliquid exercitationem animi magni consectetur.
                            </h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="p-4 bgtestimoni mx-3">
                            <div class="d-flex align-items-center">
                                <img src="./img/icon-user.svg" alt="Icon Pengguna" width="50px" height="50px" />
                                <div class="ms-2">
                                    <h5 class="text-white fwmed">Musa Alfian Maulana</h5>
                                    <h6 class="text-white mt-1">Direktur PT. Maju Mundur</h6>
                                </div>
                            </div>
                            <h6 class="text-white mt-2">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit
                                excepturi atque natus facere quam totam omnis dolore quidem,
                                quae corporis nostrum! Molestiae veritatis cumque nostrum
                                aliquid exercitationem animi magni consectetur.
                            </h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="p-4 bgtestimoni mx-3">
                            <div class="d-flex align-items-center">
                                <img src="./img/icon-user.svg" alt="Icon Pengguna" width="50px" height="50px" />
                                <div class="ms-2">
                                    <h5 class="text-white fwmed">Musa Alfian Maulana</h5>
                                    <h6 class="text-white mt-1">Direktur PT. Maju Mundur</h6>
                                </div>
                            </div>
                            <h6 class="text-white mt-2">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit
                                excepturi atque natus facere quam totam omnis dolore quidem,
                                quae corporis nostrum! Molestiae veritatis cumque nostrum
                                aliquid exercitationem animi magni consectetur.
                            </h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="p-4 bgtestimoni mx-3">
                            <div class="d-flex align-items-center">
                                <img src="./img/icon-user.svg" alt="Icon Pengguna" width="50px" height="50px" />
                                <div class="ms-2">
                                    <h5 class="text-white fwbold">Musa Alfian Maulana</h5>
                                    <h6 class="text-white mt-1">Direktur PT. Maju Mundur</h6>
                                </div>
                            </div>
                            <h6 class="text-white mt-2">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit
                                excepturi atque natus facere quam totam omnis dolore quidem,
                                quae corporis nostrum! Molestiae veritatis cumque nostrum
                                aliquid exercitationem animi magni consectetur.
                            </h6>
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
    </div>

    <!-- Proyek Terbaru -->
    <div class="wx pt60 mx-auto" id="gallery">
        <div class="position-relative header">
            <h3 class="mx-auto darkblue fw-bold">Proyek Terbaru</h3>
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
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Deserunt, blanditiis?
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
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Deserunt, blanditiis?
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
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Deserunt, blanditiis?
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
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Deserunt, blanditiis?
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
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Deserunt, blanditiis?
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
@endsection
