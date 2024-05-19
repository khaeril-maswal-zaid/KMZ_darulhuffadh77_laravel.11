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

                    <span class="px-1">Ma`ahad</span>
                    <span class="px-1">/</span>

                    <a href="/ikatan-keluarga-darul-huffadh">IKDH</a>
                </div>
            </div>
        </div>
        <!-- Petunjuk URL Enad -->
    </section>

    <section class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="section-title position-relative pb-3 mb-4">
                <h5 class="fw-bold text-primary text-uppercase">Ikatan Keluarga {{ config('app.name') }}</h5>
                <h1 class="mb-0">IKDH</h1>
            </div>

            <div class="row">
                @foreach ($ikdhs as $ikdh)
                    <div class="col-md-3">
                        <div class="card bg-primary mb-3">
                            <div class="card-header text-dark">
                                IKDH {{ $ikdh->cabang }}
                            </div>
                            <img src="{{ asset('assets/img/' . $ikdh->ketua->picture) }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h6 class="card-title text-dark">Ketua: {{ Str::limit($ikdh->ketua->nama, 20, '...') }}</h6>
                                <p class="card-text text-dark">Kontak: {{ $ikdh->ketua->kontak }}</p>
                                <p class="card-text text-dark">Alamat:
                                    {{ Str::limit($ikdh->ketua->kabupaten . ', ' . $ikdh->ketua->provinsi, 17, '...') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection('content')
