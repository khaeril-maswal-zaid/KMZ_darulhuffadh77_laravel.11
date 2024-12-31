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

                    <span class="px-1">Galery 77</span>
                </div>
            </div>
        </div>
        <!-- Petunjuk URL Enad -->
    </section>


    <!-- Projects Start -->
    <section class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px">
                <h5 class="fw-bold text-primary text-uppercase">Galeri Pondok</h5>
                <h1 class="mb-0">{{ config('app.name') }}</h1>
            </div>

            <div class="row wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline rounded mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">Semua</li>
                        <li class="mx-2" data-filter=".putra">Galery Putra</li>
                        <li class="mx-2" data-filter=".putri">Galery Putri</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container mb-3 ">
                @foreach ($picturies as $picture)
                    <div class="col-lg-4 col-md-6 portfolio-item {{ $picture->album ? 'putra' : 'putri' }} mb-3 wow fadeInUp"
                        data-wow-delay="0.1s">
                        <div class="portfolio-inner rounded" style="height: 15em;">
                            <img class="img-fluid h-100 w-100" src="{{ asset('storage/' . $picture->picture1) }}"
                                alt="{{ $picture->picture1 }}" style="object-fit: cover;">

                            <div class="portfolio-text px-3">
                                <h5 class="text-white text-center mb-4">{{ $picture->title }}</h5>
                                <div class="d-flex">
                                    <a class="btn btn-lg-square rounded-circle mx-2"
                                        href="{{ asset('storage/' . $picture->picture1) }}" data-lightbox="portfolio">
                                        <i class="fa fa-eye mt-2"></i>
                                    </a>
                                    <a class="btn btn-lg-square rounded-circle mx-2" href="/blog/{{ $picture->slug }}">
                                        <i class="fa fa-link mt-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item {{ $picture->album ? 'putra' : 'putri' }} mb-3 wow fadeInUp"
                        data-wow-delay="0.1s">
                        <div class="portfolio-inner rounded" style="height: 15em;">
                            <img class="img-fluid h-100 w-100" src="{{ asset('storage/' . $picture->picture2) }}"
                                alt="{{ $picture->picture2 }}" style="object-fit: cover;">

                            <div class="portfolio-text px-3">
                                <h5 class="text-white text-center mb-4">{{ $picture->title }}</h5>
                                <div class="d-flex">
                                    <a class="btn btn-lg-square rounded-circle mx-2"
                                        href="{{ asset('storage/' . $picture->picture2) }}" data-lightbox="portfolio">
                                        <i class="fa fa-eye mt-2"></i>
                                    </a>
                                    <a class="btn btn-lg-square rounded-circle mx-2" href="/blog/{{ $picture->slug }}">
                                        <i class="fa fa-link mt-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item {{ $picture->album ? 'putra' : 'putri' }} mb-3 wow fadeInUp"
                        data-wow-delay="0.1s">
                        <div class="portfolio-inner rounded" style="height: 15em;">
                            <img class="img-fluid h-100 w-100" src="{{ asset('storage/' . $picture->picture3) }}"
                                alt="{{ $picture->picture3 }}" style="object-fit: cover;">

                            <div class="portfolio-text px-3">
                                <h5 class="text-white text-center mb-4">{{ $picture->title }}</h5>
                                <div class="d-flex">
                                    <a class="btn btn-lg-square rounded-circle mx-2"
                                        href="{{ asset('storage/' . $picture->picture3) }}" data-lightbox="portfolio">
                                        <i class="fa fa-eye mt-2"></i>
                                    </a>
                                    <a class="btn btn-lg-square rounded-circle mx-2" href="/blog/{{ $picture->slug }}">
                                        <i class="fa fa-link mt-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $picturies->onEachSide(0)->links() }}

        </div>
    </section>
    <!-- Projects End -->
@endsection('content')
