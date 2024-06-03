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

                    <span class="px-1">Tentang</span>
                    <span class="px-1">/</span>

                    <a href="/pengurus-{{ $personilkulikulers[0]->kulikuler->enum }}">
                        Pengurus {{ $personilkulikulers[0]->kulikuler->name }}
                    </a>
                </div>
            </div>
        </div>
        <!-- Petunjuk URL Enad -->
    </section>

    <section class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="row">
                <div class="col-md-7">
                    <div class="section-title position-relative pb-3 mb-4">
                        <h1 class="mb-0">{{ $personilkulikulers[0]->kulikuler->name }}</h1>
                        <h5 class="fw-bold text-primary text-uppercase">{{ $personilkulikulers[0]->kulikuler->full_name }}
                        </h5>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="gap-2 d-flex justify-content-end">
                        <a href="/osdha" class="btn btn-success">Tentang</a>
                        <div class="btn btn-dark">Pengurus</div>
                    </div>
                </div>
            </div>



            <!-- Testimonial Start -->
            <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
                <main class="container">
                    <div class="row">
                        @foreach ($personilkulikulers as $personilkulikuler)
                            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="testimonial-item bg-light my-4 wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="d-flex align-items-center border-bottom pt-4 pb-4 px-4">
                                        <img class="img-fluid rounded"
                                            src="{{ asset('assets/img/' . $personilkulikuler->santri->picture) }}"
                                            style="width: 60px; height: 60px" />
                                        <div class="ps-4">
                                            <h5 class="text-primary mb-1">
                                                {{ Str::limit($personilkulikuler->santri->nama, 18, '...') }}</h5>
                                            <small class="text-uppercase">{{ $personilkulikuler->devisi }}</small>
                                        </div>
                                    </div>
                                    <div class="pt-4 pb-5 px-4">
                                        {{ $personilkulikuler->description }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </main>
            </div>
            <!-- Testimonial End -->
        </div>
    </section>
@endsection('content')
