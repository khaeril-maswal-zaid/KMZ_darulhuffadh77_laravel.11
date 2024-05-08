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

                    <span class="px-1">Lembaga</span>
                    <span class="px-1">/</span>

                    <a href="/">Lorem ipsum dolor</a>
                </div>
            </div>
        </div>
        <!-- Petunjuk URL Enad -->
    </section>

    <section class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="section-title position-relative pb-3 mb-4">
                                <h1 class="mb-0">{{ $data['title'] }}</h1>
                                <h5 class="fw-bold text-primary text-uppercase">Organisasi Santri {{ config('app.name') }}
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex gap-2 justify-content-end mt-5">
                                <div class="btn btn-dark">Tentang</div>
                                <a href="/pengurus-osdha" class="btn btn-success">Pengurus</a>
                            </div>
                        </div>
                    </div>
                    <img class="img-fluid w-100 rounded mb-4" src="{{ asset('assets/img/' . $data['picture1']) }}"
                        alt="">
                    <div class="mb-4">{{ $data['body1'] }}</div>
                </div>

                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="Keyword">
                            <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                    <!-- Search Form End -->

                    <!-- Recent Post Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Recent Post</h3>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="{{ asset('assets/img/blog-1.jpg') }}"
                                style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem
                                ipsum dolor sit amet adipis elit
                            </a>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="{{ asset('assets/img/blog-2.jpg') }}"
                                style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem
                                ipsum dolor sit amet adipis elit
                            </a>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="{{ asset('assets/img/blog-3.jpg') }}"
                                style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem
                                ipsum dolor sit amet adipis elit
                            </a>
                        </div>
                    </div>
                    <!-- Recent Post End -->

                    <!-- Image Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <img src="{{ asset('assets/img/blog-1.jpg') }}" alt="" class="img-fluid rounded">
                    </div>
                    <!-- Image End -->

                    <!-- Tags Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Tag Cloud</h3>
                        </div>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="/" class="btn btn-light m-1">Design</a>
                            <a href="/" class="btn btn-light m-1">Development</a>
                            <a href="/" class="btn btn-light m-1">Marketing</a>
                            <a href="/" class="btn btn-light m-1">SEO</a>
                            <a href="/" class="btn btn-light m-1">Writing</a>
                            <a href="/" class="btn btn-light m-1">Consulting</a>
                            <a href="/" class="btn btn-light m-1">Design</a>
                            <a href="/" class="btn btn-light m-1">Development</a>
                            <a href="/" class="btn btn-light m-1">Marketing</a>
                            <a href="/" class="btn btn-light m-1">SEO</a>
                            <a href="/" class="btn btn-light m-1">Writing</a>
                            <a href="/" class="btn btn-light m-1">Consulting</a>
                        </div>
                    </div>
                    <!-- Tags End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </section>
@endsection('content')
