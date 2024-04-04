@extends('layout.template')

@section('content')
    <section>
        <!-- Crausel mini Start -->
        <div class="container-fluid bg-primary py-5 mb-4 mb-md-5 bg-header">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Tentang</h1>
                    <a href="" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">About</a>
                </div>
            </div>
        </div>
        <!-- Crausel mini End -->

        <!-- Petunjuk URL Start -->
        <div class="container-xxl">
            <div class="container">
                <div class="alert alert-success py-2 label-url" role="alert">
                    <a href="/"><i class="bi bi-house-door-fill"></i></a>
                    <span class="px-1">/</span>

                    <span class="px-1">Lembaga</span>
                    <span class="px-1">/</span>

                    <a href="/">Lorem ipsum dolor</a>
                </div>
            </div>
        </div>
        <!-- Petunjuk URL Enad -->
    </section>

    <!-- About Start -->
    <section class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-4">
                        <h5 class="fw-bold text-primary text-uppercase">Profil Pendiri {{ config('app.name') }}</h5>
                        <h1 class="mb-0">KH. Lanre Said</h1>
                    </div>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo atque non praesentium
                        facilis, ex nisi quos accusamus quas adipisci, itaque voluptas culpa similique reprehenderit dolor
                        impedit? Temporibus maiores quisquam veniam.Tempor erat elitr rebum at clita. Diam dolor diam ipsum
                        et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no
                        labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat ametLorem ipsum dolor
                        sit amet consectetur adipisicing elit. Quo atque non praesentium facilis, ex nisi quos accusamus
                        quas adipisci, itaque voluptas culpa similique reprehenderit dolor impedit? Temporibus maiores
                        quisquam veniam.Tempor erat Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo atque non
                        praesentium facilis, ex nisi quos accusamus quas adipisci, itaque voluptas culpa similique
                        reprehenderit dolor impedit? Temporibus maiores quisquam veniam.Tempor erat elitr rebum at clita.
                        Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem
                        et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat
                        ametLorem ipsum dolor sit amet consectetur adipisicing elit. Quo atque non praesentium facilis, ex
                        nisi quos accusamus quas adipisci, itaque voluptas culpa similique reprehenderit dolor impedit?
                        Temporibus maiores quisquam veniam.Tempor erat Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Quo atque non praesentium facilis, ex nisi quos accusamus quas adipisci, itaque voluptas culpa
                        similique reprehenderit dolor impedit? Temporibus maiores quisquam veniam.Tempor erat elitr rebum at
                        clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et
                        lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore
                        erat ametLorem ipsum dolor sit amet consectetur adipisicing elit. Quo atque non praesentium facilis,
                        ex nisi quos accusamus quas adipisci, itaque voluptas culpa similique reprehenderit dolor impedit?
                        Temporibus maiores quisquam veniam.Tempor erat Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Quo atque non praesentium facilis, ex nisi quos accusamus quas adipisci, itaque voluptas culpa
                        similique reprehenderit dolor impedit? Temporibus maiores quisquam veniam.Tempor erat elitr rebum at
                        clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et
                        lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore
                        erat ametLorem ipsum dolor sit amet consectetur adipisicing elit. Quo atque non praesentium facilis,
                        ex nisi quos accusamus quas adipisci, itaque voluptas culpa similique reprehenderit dolor impedit?
                        Temporibus maiores quisquam veniam.Tempor erat Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Quo atque non praesentium facilis, ex nisi quos accusamus quas adipisci, itaque voluptas culpa
                        similique reprehenderit dolor impedit? Temporibus maiores quisquam veniam.Tempor erat elitr rebum at
                        clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et
                        lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore
                        erat ametLorem ipsum dolor sit amet consectetur adipisicing elit. Quo atque non praesentium facilis,
                        ex nisi quos accusamus quas adipisci, itaque voluptas culpa similique reprehenderit dolor impedit?
                        Temporibus maiores quisquam veniam.Tempor erat</p>
                </div>

                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-sticky" style="top: 6rem">
                        <img class="img-fluid w-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="{{ asset('assets/img/pediri-kh-lanre-said.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->
@endsection('content')
