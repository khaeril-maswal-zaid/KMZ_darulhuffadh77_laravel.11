@extends('layout.template')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Menuju Pulau Idaman Al-Quran &
                                Al-Hadist
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('assets/img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Perlu dibela, dijaga dan diperjuangkan
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px">
                            <i class="fa-solid fa-network-wired text-primary fa-2x"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Jumlah Alumni</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px">
                            <i class="fa fa-users text-white fa-2x"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Jumlah Santri</h5>
                            <h1 class="mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px">
                            <i class="fa fa-users text-primary fa-2x"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Jumlah Santriwati</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->

    <!-- Eksekutif Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px">
                <h5 class="fw-bold text-primary text-uppercase">Profil Eksekutif</h5>
                <h1 class="mb-0">Pendiri & Penanggung Jawab {{ config('app.name') }}</h1>
            </div>
            <div class="row g-5">
                @foreach ($eksekutifs as $eksekutif)
                    <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('assets/img/team-1.jpg') }}" alt="" />
                                <div class="team-social">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                        href="profil/{{ $eksekutif->slug }}"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h5 class="text-primary">{{ Str::limit($eksekutif->excerpt, 23, '...') }}</h5>
                                <p class="text-uppercase m-0">
                                    {{ Str::replace(['Profil', 'Darul Huffadh 77'], '', $eksekutif->title) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Eksekutif End -->

    <!-- Siapa Pemilik Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Siapa Pemilik Pondok ini ?</h5>
                        <h1 class="mb-0">{{ config('app.name') }} Milik Seluruh Ummat Muslimin !</h1>
                    </div>
                    <p class="mb-4">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor
                        sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem
                        et sit, sed stet no labore lorem sit. Sanctus clita duo justo et
                        tempor eirmod magna dolore erat amet
                    </p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3">
                                <i class="fa fa-check text-primary me-3"></i>Bukan Milik Keluarga Pendiri
                            </h5>
                            <h5 class="mb-3">
                                <i class="fa fa-check text-primary me-3"></i>Bukan Milik Pribadi Pimpinan
                            </h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3">
                                <i class="fa fa-check text-primary me-3"></i>Bukan Milik Ormas Tertentu
                            </h5>
                            <h5 class="mb-3">
                                <i class="fa fa-check text-primary me-3"></i>Bukan Milik Firqah Terlarang
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Rekening Pesantren</h5>
                            <h4 class="text-primary mb-0">0123456789</h4>
                        </div>
                    </div>
                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn"
                        data-wow-delay="0.9s">Selengkapnya...</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="{{ asset('assets/img/about.jpg') }}" style="object-fit: cover" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Siapa Pemilik End -->

    <!-- Program Utama Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px">
                <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
                <h1 class="mb-0">Program Pendidikan Pontren <br> {{ config('app.name') }}</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        @for ($i = 0; $i < 2; $i++)
                            <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px">
                                    <i class="fa fa-cubes text-white"></i>
                                </div>
                                <h5>{{ Str::replace(', Darul Huffadh 77', '', $programs[$i]->title) }}</h5>
                                <p class="mb-0">{{ Str::limit($programs[$i]->excerpt, 80, '') }}</p>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s"
                            src="{{ asset('assets/img/feature.jpg') }}" style="object-fit: cover" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                style="width: 60px; height: 60px">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            {{-- <h5>{{ $programs[2]->title }}</h5> --}}
                            <h5>Pengabdian</h5>
                            <p class="mb-0">{{ Str::limit($programs[2]->excerpt, 80, '') }}</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                style="width: 60px; height: 60px">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h5>Hard & Soft Skill Santri</h5>
                            <p class="mb-0">
                                Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et
                                diam dolor
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Program Utama Start -->

    {{-- <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px">
                <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
                <h1 class="mb-0">Custom IT Solutions for Your primaryful Business</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Cyber Security</h4>
                        <p class="m-0">
                            Amet justo dolor lorem kasd amet magna sea stet eos vero lorem
                            ipsum dolore sed
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3">Data Analytics</h4>
                        <p class="m-0">
                            Amet justo dolor lorem kasd amet magna sea stet eos vero lorem
                            ipsum dolore sed
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3">Web Development</h4>
                        <p class="m-0">
                            Amet justo dolor lorem kasd amet magna sea stet eos vero lorem
                            ipsum dolore sed
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fab fa-android text-white"></i>
                        </div>
                        <h4 class="mb-3">Apps Development</h4>
                        <p class="m-0">
                            Amet justo dolor lorem kasd amet magna sea stet eos vero lorem
                            ipsum dolore sed
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">SEO Optimization</h4>
                        <p class="m-0">
                            Amet justo dolor lorem kasd amet magna sea stet eos vero lorem
                            ipsum dolore sed
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div
                        class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Call Us For Quote</h3>
                        <p class="text-white mb-3">
                            Clita ipsum magna kasd rebum at ipsum amet dolor justo dolor est
                            magna stet eirmod
                        </p>
                        <h2 class="text-white mb-0">+012 345 6789</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End --> --}}

    <!-- Pendidikan Gratis Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">
                            Berapa Biaya Santri di Pondok ini ?
                        </h5>
                        <h1 class="mb-0">
                            {{-- Pendidikan Gratis itu ada di {{ config('app.name') }} --}}
                            Sepenuhnya ditanggung, Belajar di {{ config('app.name') }} tanpa biaya apapun.
                        </h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4">
                                <i class="fa fa-check text-primary me-3"></i>Gratis Biaya Bulanan
                            </h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4">
                                <i class="fa fa-check text-primary me-3"></i>Gratis Biaya Tahunan
                            </h5>
                        </div>
                    </div>
                    <p class="mb-4">
                        Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd
                        ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo
                        rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod
                        et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit.
                        Sea dolore sanctus sed et. Takimata takimata sanctus sed.
                    </p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+012 345 6789</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form>
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name"
                                        style="height: 55px" />
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email"
                                        style="height: 55px" />
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">
                                        Request A Quote
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pendidikan Gratis End -->

    <!-- Rincian Biaya Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            {{-- <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px">
                <h5 class="fw-bold text-primary text-uppercase">Pricing Plans</h5>
                <h1 class="mb-0">
                    We are Offering Competitive Prices for Our Clients
                </h1>
            </div> --}}
            <div class="row g-0">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Biaya Bulanan</h4>
                            <small class="text-uppercase">For Small Size Business</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px">Rp. </small>0<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px">/ Bulan</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3">
                                <span>Biaya Konsumsi</span><i class="fa fa-times text-danger pt-1"></i>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <span>Biaya Akomodasi</span><i class="fa fa-times text-danger pt-1"></i>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <span>Biaya Listrik & Air</span><i class="fa fa-times text-danger pt-1"></i>
                            </div>
                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded shadow position-relative" style="z-index: 1">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Biaya Semesteran</h4>
                            <small class="text-uppercase">For Medium Size Business</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px">Rp. </small>0<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px">/ 6 Bulan</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3">
                                <span>SPP Semester</span><i class="fa fa-times text-danger pt-1"></i>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <span>Biaya Kursus</span><i class="fa fa-times text-danger pt-1"></i>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Pembelian Buku Paket</span><i class="fa fa-check text-primary pt-1"></i>
                            </div>
                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Biaya Tahunan</h4>
                            <small class="text-uppercase">For Large Size Business</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px">Rp. </small>0<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px">/ Tahun</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3">
                                <span>Biaya Pembangunan </span><i class="fa fa-times text-danger pt-1"></i>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <span>Biaya Asrama</span><i class="fa fa-times text-danger pt-1"></i>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <span>Sumbangan Wajib </span><i class="fa fa-times text-danger pt-1"></i>
                            </div>
                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rincian Biaya End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px">
                <h5 class="fw-bold text-primary text-uppercase">{{ Str::replace('77', '', config('app.name')) }} Blog</h5>
                <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
            </div>
            <div class="row g-5 mb-3">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="{{ asset('assets/img/blog-1.jpg') }}" alt="" />
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                    href="/">{{ $blog->kategori->name }}</a>
                            </div>
                            <div class="p-4 position-relative overflow-hidden" style="height:377px;">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i
                                            class="far fa-user text-primary me-2"></i>{{ $blog->oleh }}</small>
                                    <small><i
                                            class="far fa-calendar-alt text-primary me-2"></i>{{ $blog->created_at->format('j M Y') }}</small>
                                </div>
                                <h4 class="mb-3">{{ $blog->title }}</h4>
                                <p
                                    style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis; ">
                                    {{ $blog->excerpt }}</p>
                                <a class="text-uppercase" href="blog/{{ $blog->slug }}">
                                    Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $blogs->onEachSide(0)->links() }}
        </div>
    </div>
    <!-- Blog Start -->

    <!-- IKDH Pusat Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px">
                <h5 class="fw-bold text-primary text-uppercase">IKDH Pusat</h5>
                <h2 class="mb-0">Pimpinan Pusat Ikatan Keluarga <br> {{ Str::replace('77', '', config('app.name')) }}
                </h2>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                @foreach ($ikdhpusats as $ikdhpusat)
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center py-5 ps-5 pe-4">
                            <img class="img-fluid rounded" src="{{ asset('storage/' . $ikdhpusat->ketua->picture) }}"
                                style="width: 120px; height: 120px" />
                            <div class="ps-4">
                                <h5 class="text-primary mb-1">{{ $ikdhpusat->ketua->nama }}</h5>
                                <small
                                    class="text-uppercase">{{ $ikdhpusat->cabang == 'Pusat' ? 'Ketua PP IKDH' : 'Anggota PP IKDH' }}</small>
                            </div>
                        </div>
                        {{-- <div class="pt-4 pb-5 px-5">
                            Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                            stet amet eirmod eos labore diam
                        </div> --}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- IKDH Pusat End -->

    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="{{ asset('assets/img/vendor-1.jpg') }}" alt="" />
                    <img src="{{ asset('assets/img/vendor-2.jpg') }}" alt="" />
                    <img src="{{ asset('assets/img/vendor-3.jpg') }}" alt="" />
                    <img src="{{ asset('assets/img/vendor-4.jpg') }}" alt="" />
                    <img src="{{ asset('assets/img/vendor-5.jpg') }}" alt="" />
                    <img src="{{ asset('assets/img/vendor-6.jpg') }}" alt="" />
                    <img src="{{ asset('assets/img/vendor-7.jpg') }}" alt="" />
                    <img src="{{ asset('assets/img/vendor-8.jpg') }}" alt="" />
                    <img src="{{ asset('assets/img/vendor-9.jpg') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
@endsection('content')
