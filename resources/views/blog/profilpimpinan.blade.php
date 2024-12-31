@extends('layout.template')

@section('content')
    <section>
        <!-- Crausel mini Start -->
        <div class="container-fluid bg-primary py-5 mb-4 mb-md-5 bg-header">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">
                        {{ $sharedQuotes[0][mt_rand(0, $sharedQuotes[1])]['value'] }}</h1>

                </div>
            </div>
        </div>
        <!-- Crausel mini End -->

        <!-- Petunjuk URL Start -->
        <div class="container-xxl">
            <div class="container">
                <div class="alert alert-primary py-2 label-url" role="alert">
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

    <!-- About Start -->
    <section class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-4">
                        <h5 class="fw-bold text-primary text-uppercase">{{ $blog->title }}</h5>
                        <h1 class="mb-0">{{ $blog->excerpt }}</h1>
                    </div>
                    <div class="mb-4">{!! $blog->body1 !!}</div>
                </div>

                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-sticky" style="top: 6rem">
                        <img class="img-fluid w-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="{{ asset('storage/' . $blog->picture1) }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->
@endsection('content')
