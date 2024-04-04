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

    <section class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-4">

            <div class="section-title position-relative pb-3 mb-5">
                <h5 class="fw-bold text-primary text-uppercase">Rutinitas Santri/ Santriwati</h5>
                <h1 class="mb-0">Pontren {{ config('app.name') }}</h1>
            </div>

            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="max-100 overflow-auto">
                        <div class="wow zoomIn mb-3" data-wow-delay="0.2s">
                            <h4>Rutinitas Sehari-hari</h4>
                        </div>

                        <table class="table table-primary table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">Waktu</th>
                                    <th scope="col" class="text-center">Aktivitas</th>
                                    <th scope="col" class="text-center" width="37%">Dokumentasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td scope="row" nowrap class="align-middle">03:30 - 04.00</td>
                                    <td nowrap class="align-middle">Sholat Tahajjud</td>
                                    <td>
                                        <img src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""
                                            class="img-fluid rounded">
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td scope="row" nowrap class="align-middle">03:30 - 04.00</td>
                                    <td nowrap class="align-middle">Sholat Tahajjud</td>
                                    <td>
                                        <img src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""
                                            class="img-fluid rounded">
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td scope="row" nowrap class="align-middle">03:30 - 04.00</td>
                                    <td nowrap class="align-middle">Sholat Tahajjud</td>
                                    <td>
                                        <img src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""
                                            class="img-fluid rounded">
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td scope="row" nowrap class="align-middle">03:30 - 04.00</td>
                                    <td nowrap class="align-middle">Sholat Tahajjud</td>
                                    <td>
                                        <img src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""
                                            class="img-fluid rounded">
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td scope="row" nowrap class="align-middle">03:30 - 04.00</td>
                                    <td nowrap class="align-middle">Sholat Tahajjud</td>
                                    <td>
                                        <img src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""
                                            class="img-fluid rounded">
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td scope="row" nowrap class="align-middle">03:30 - 04.00</td>
                                    <td nowrap class="align-middle">Sholat Tahajjud</td>
                                    <td>
                                        <img src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""
                                            class="img-fluid rounded">
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td scope="row" nowrap class="align-middle">03:30 - 04.00</td>
                                    <td nowrap class="align-middle">Sholat Tahajjud</td>
                                    <td>
                                        <img src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""
                                            class="img-fluid rounded">
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td scope="row" nowrap class="align-middle">03:30 - 04.00</td>
                                    <td nowrap class="align-middle">Sholat Tahajjud</td>
                                    <td>
                                        <img src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""
                                            class="img-fluid rounded">
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td scope="row" nowrap class="align-middle">03:30 - 04.00</td>
                                    <td nowrap class="align-middle">Sholat Tahajjud</td>
                                    <td>
                                        <img src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""
                                            class="img-fluid rounded">
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td scope="row" nowrap class="align-middle">03:30 - 04.00</td>
                                    <td nowrap class="align-middle">Sholat Tahajjud</td>
                                    <td>
                                        <img src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""
                                            class="img-fluid rounded">
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td scope="row" nowrap class="align-middle">03:30 - 04.00</td>
                                    <td nowrap class="align-middle">Sholat Tahajjud</td>
                                    <td>
                                        <img src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""
                                            class="img-fluid rounded">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="max-100 overflow-auto">

                        <div class="wow zoomIn mb-3" data-wow-delay="0.2s">
                            <h4>Rutinitas Perpekan</h4>
                        </div>

                        <table class="table table-primary table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">Hari</th>
                                    <th scope="col" class="text-center">Waktu</th>
                                    <th scope="col" class="text-center">Agenda</th>
                                    <th scope="col" class="text-center" width="25%">Dokumentasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td scope="row" nowrap class="align-middle">Jum`at</td>
                                    <td nowrap class="align-middle">05:00 - 06:00</td>
                                    <td nowrap class="align-middle">Sholat Tahajjud</td>
                                    <td>
                                        <img src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""
                                            class="img-fluid rounded">
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td scope="row" nowrap class="align-middle">Jum`at</td>
                                    <td nowrap class="align-middle">05:00 - 06:00</td>
                                    <td nowrap class="align-middle">Sholat Tahajjud</td>
                                    <td>
                                        <img src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""
                                            class="img-fluid rounded">
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td scope="row" nowrap class="align-middle">Jum`at</td>
                                    <td nowrap class="align-middle">05:00 - 06:00</td>
                                    <td nowrap class="align-middle">Sholat Tahajjud</td>
                                    <td>
                                        <img src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""
                                            class="img-fluid rounded">
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td nowrap class="align-middle">Jum`at</td>
                                    <td nowrap class="al05:00 - 06:00ddle">Jum`at</td>
                                    <td nowrap class="align-middle">Sholat Tahajjud</td>
                                    <td>
                                        <img src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""
                                            class="img-fluid rounded">
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td scope="row" nowrap class="align-middle">Jum`at</td>
                                    <td nowrap class="align-middle">05:00 - 06:00</td>
                                    <td nowrap class="align-middle">Sholat Tahajjud</td>
                                    <td>
                                        <img src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""
                                            class="img-fluid rounded">
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td scope="row" nowrap class="align-middle">Jum`at</td>
                                    <td nowrap class="align-middle">05:00 - 06:00</td>
                                    <td nowrap class="align-middle">Sholat Tahajjud</td>
                                    <td>
                                        <img src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""
                                            class="img-fluid rounded">
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td scope="row" nowrap class="align-middle">Jum`at</td>
                                    <td nowrap class="align-middle">05:00 - 06:00</td>
                                    <td nowrap class="align-middle">Sholat Tahajjud</td>
                                    <td>
                                        <img src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""
                                            class="img-fluid rounded">
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td scope="row" nowrap class="align-middle">Jum`at</td>
                                    <td nowrap class="align-middle">05:00 - 06:00</td>
                                    <td nowrap class="align-middle">Sholat Tahajjud</td>
                                    <td>
                                        <img src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""
                                            class="img-fluid rounded">
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td scope="row" nowrap class="align-middle">Jum`at</td>
                                    <td nowrap class="align-middle">05:00 - 06:00</td>
                                    <td nowrap class="align-middle">Sholat Tahajjud</td>
                                    <td>
                                        <img src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""
                                            class="img-fluid rounded">
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td scope="row" nowrap class="align-middle">Jum`at</td>
                                    <td nowrap class="align-middle">05:00 - 06:00</td>
                                    <td nowrap class="align-middle">Sholat Tahajjud</td>
                                    <td>
                                        <img src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""
                                            class="img-fluid rounded">
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td scope="row" nowrap class="align-middle">Jum`at</td>
                                    <td nowrap class="align-middle">05:00 - 06:00</td>
                                    <td nowrap class="align-middle">Sholat Tahajjud</td>
                                    <td>
                                        <img src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""
                                            class="img-fluid rounded">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection('content')
