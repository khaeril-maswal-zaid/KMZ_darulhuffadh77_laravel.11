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

                    <a href="/kontak">Kontak</a>
                </div>
            </div>
        </div>
        <!-- Petunjuk URL Enad -->
    </section>

    <!-- Contact Start -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-3">Pusat Informasi</h1>
                <h5 class="fw-bold text-primary text-uppercase">Pondok Pesantren {{ config('app.name') }}</h5>
            </div>

            <div class="row g-5">
                <div class="col-lg-6">
                    @foreach ($kontaks as $kontak)
                        <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                                style="width: 70px; height: 70px;">
                                <i class="{{ $kontak->icon }} text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="mb-0">{{ $kontak->medsos }}</h5>
                                <span class="mb-2">{{ $kontak->nama }}</span>
                                <h4 class="text-primary mb-0">
                                    {!! $kontak->link ? '<a href="' . $kontak->link . '">' . $kontak->akun . '</a>' : $kontak->akun !!}
                                </h4>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-6 wow slideInUp bg-secondary" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100" src="{{ $maps->link }}" frameborder="0"
                        style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection('content')
