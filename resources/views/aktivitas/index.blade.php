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

                    <span class="px-1">Tentang</span>
                    <span class="px-1">/</span>

                    <a href="/aktivitas-santri-santriwati">Aktivitas Santri Santriwari</a>
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
                    <div class="wow zoomIn mb-3" data-wow-delay="0.2s">
                        <h4>Rutinitas Sehari-hari</h4>
                    </div>

                    <div class="w-100 overflow-auto" style="max-height: 800px">
                        <table class="table table-primary table-striped table-bordered wow zoomIn" data-wow-delay="0.9s">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">Waktu</th>
                                    <th scope="col" class="text-center">Aktivitas</th>
                                    <th scope="col" class="text-center" width="37%">Dokumentasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($harians as $harian)
                                    <tr class="text-center">
                                        <td scope="row" nowrap class="align-middle">{{ $harian->waktu }}</td>
                                        <td class="align-middle">{{ $harian->agenda }}</td>
                                        <td>
                                            <div class="portfolio-inner rounded">
                                                <img src="{{ asset('assets/img/' . $harian->picture) }}" alt=""
                                                    class="img-fluid rounded">

                                                <div class="portfolio-text px-3">
                                                    <div class="d-flex">
                                                        <a class="btn btn-lg-square rounded-circle mx-2"
                                                            href="{{ asset('assets/img/' . $harian->picture) }}"
                                                            data-lightbox="portfolio">
                                                            <i class="fa fa-eye mt-2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="w-100 overflow-auto">

                        <div class="wow zoomIn mb-3" data-wow-delay="0.2s">
                            <h4>Rutinitas Perpekan</h4>
                        </div>

                        <div class="w-100 overflow-auto" style="max-height: 800px">

                            <table class="table table-primary table-striped table-bordered wow zoomIn"
                                data-wow-delay="0.9s">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">Hari</th>
                                        <th scope="col" class="text-center">Waktu</th>
                                        <th scope="col" class="text-center">Agenda</th>
                                        <th scope="col" class="text-center" width="25%">Dokumentasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mingguans as $mingguan)
                                        <tr class="text-center">
                                            <td scope="row" nowrap class="align-middle">{{ $mingguan->hari }}</td>
                                            <td nowrap class="align-middle">{{ $mingguan->waktu }}</td>
                                            <td nowrap class="align-middle">{{ $mingguan->agenda }}</td>
                                            <td>
                                                <div class="portfolio-inner rounded">
                                                    <img src="{{ asset('assets/img/' . $mingguan->picture) }}"
                                                        alt="" class="img-fluid rounded">

                                                    <div class="portfolio-text px-3">
                                                        <div class="d-flex">
                                                            <a class="btn btn-lg-square rounded-circle mx-2"
                                                                href="{{ asset('assets/img/' . $mingguan->picture) }}"
                                                                data-lightbox="portfolio">
                                                                <i class="fa fa-eye mt-2"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection('content')
