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

                    <span class="px-1">Blog</span>
                    <span class="px-1">/</span>

                    <a href="/{{ $blog->slug }}">{{ $blog->title }}</a>
                </div>
            </div>
        </div>
        <!-- Petunjuk URL Enad -->
    </section>

    <!-- Blog Start -->
    <section class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-4">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-3" src="{{ asset('assets/img/' . $blog->picture1) }}"
                            alt="{{ $blog->title }}">
                        <div class="d-flex mb-4">
                            <small class="me-3"><i class="far fa-calendar-alt text-primary me-2"></i>
                                {{ $blog->updated_at }}</small>
                            <small class="me-3"><i class="far fa-eye text-primary me-2"></i> {{ $blog->visit }}</small>
                        </div>
                        <h1 class="mb-4">{{ $blog->title }}</h1>
                        {{ $blog->body1 }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="my-4">
                                    <img class="img-fluid w-100 rounded mb-3"
                                        src="{{ asset('assets/img/' . $blog->picture2) }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-4">
                                    <img class="img-fluid w-100 rounded mb-3"
                                        src="{{ asset('assets/img/' . $blog->picture3) }}" alt="">
                                </div>
                            </div>
                        </div>
                        {{ $blog->body2 }}
                    </div>
                    <!-- Blog Detail End -->
                </div>

                {{-- DI SINI SIDEBAR KANAN-KANNA --}}
            </div>
        </div>
    </section>
    <!-- Blog End -->
@endsection('content')
