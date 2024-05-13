@extends('layout.template')

@section('content')
    <section>
        <!-- Crausel mini Start -->
        <div class="container-fluid bg-primary py-5 mb-4 mb-md-5 bg-header">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Tentang</h1>
                    <a href="/" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="/" class="h5 text-white">About</a>
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

                    <span class="px-1">Peneriman Santri Baru</span>
                </div>
            </div>
        </div>
        <!-- Petunjuk URL Enad -->
    </section>


    <!-- Projects Start -->
    <section class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px">
                <h5 class="fw-bold text-primary text-uppercase">Penerimaan Santri Baru</h5>
                <h1 class="mb-0">
                    Pondok Pesantren {{ config('app.name') }}
                </h1>
            </div>

            <div class="row g-5 pt-4">
                <div class="col-lg-7">
                    <div class="card mb-3  wow slideInUp" data-wow-delay="0.3s">
                        <h5 class="card-header">Syarat Pendaftaran</h5>
                        <div class="card-body">
                            <ol>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                            </ol>
                        </div>
                    </div>
                    <div class="card mb-3  wow slideInUp" data-wow-delay="0.3s">
                        <h5 class="card-header">Dokumen Pendaftaran</h5>
                        <div class="card-body">
                            <ol>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                            </ol>
                        </div>
                    </div>
                    <div class="card mb-3  wow slideInUp" data-wow-delay="0.3s">
                        <h5 class="card-header">Alur Pendaftaran</h5>
                        <div class="card-body">
                            <ol>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                            </ol>
                        </div>
                    </div>
                    <div class="card mb-3  wow slideInUp" data-wow-delay="0.3s">
                        <h5 class="card-header">Jadwal Pendaftaran</h5>
                        <div class="card-body">
                            <ol>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam</li>
                            </ol>
                        </div>
                    </div>
                    <div class="d-grid">
                        <a href="/penerimaan-santri-baru/pendaftaran" class="btn btn-success btn-lg">Daftar Sekarang</a>
                    </div>
                </div>


                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-sticky" style="top: 6rem">
                        <img class="img-fluid w-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="{{ asset('assets/img/team-1.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
    </section>
@endsection()
