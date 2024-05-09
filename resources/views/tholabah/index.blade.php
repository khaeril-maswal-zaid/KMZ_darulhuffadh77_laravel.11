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

    <!-- Team Start -->
    <section class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px">
                <h5 class="fw-bold text-primary text-uppercase">Direktori Santri</h5>
                <h1 class="mb-0">Pondok Pesantren {{ config('app.name') }}</h1>
            </div>
            <div class="row mb-lg-4 mb-3">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input name="searchname" type="text" class="form-control" id="searchname"
                            placeholder="Cari Nama">
                        <label for="nik">Cari Nama</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            @for ($i = date('Y'); $i >= 1975; $i--)
                                <option>{{ $i }}</option>
                            @endfor
                        </select>
                        <label for="floatingSelect">Angkatan</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-floating">
                        <select class="form-select" id="alamat">
                            <option value="all">Semua</option>
                            <option value="Bulukumba">Bulukumba</option>
                            <option value="Sinjai">Sinjai</option>
                            <option value="2">Makassar</option>
                            <option value="3">NTT</option>
                        </select>
                        <label for="alamat">Alamat</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected value="40">40</option>
                            <option value="60">60</option>
                            <option value="80">80</option>
                            <option value="100">100</option>
                            <option value="al">Semua</option>
                        </select>
                        <label for="floatingSelect">Show</label>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-primary border rounded border-primary rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/team-1.jpg') }}" alt="" />
                            <div class="team-social">
                                <a class="btn" href="#">
                                    <p class="mb-0 text-white">Kategori : Santri</p>
                                    <p class="mb-0 text-white">NISDH : 081234567</p>
                                    <p class="mb-0 text-white">Tingkatan : Fashlul Ula</p>
                                    <p class="mb-0 text-white">Status : Aktif</p>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-white">Full Name</h4>
                            <p class="text-uppercase text-dark m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-primary border rounded border-primary rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/team-1.jpg') }}" alt="" />
                            <div class="team-social">
                                <a class="btn" href="#">
                                    <p class="mb-0 text-white">Kategori : Santri</p>
                                    <p class="mb-0 text-white">NISDH : 081234567</p>
                                    <p class="mb-0 text-white">Tingkatan : Fashlul Ula</p>
                                    <p class="mb-0 text-white">Status : Aktif</p>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-white">Full Name</h4>
                            <p class="text-uppercase text-dark m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-primary border rounded border-primary rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/team-1.jpg') }}" alt="" />
                            <div class="team-social">
                                <a class="btn" href="#">
                                    <p class="mb-0 text-white">Kategori : Santri</p>
                                    <p class="mb-0 text-white">NISDH : 081234567</p>
                                    <p class="mb-0 text-white">Tingkatan : Fashlul Ula</p>
                                    <p class="mb-0 text-white">Status : Aktif</p>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-white">Full Name</h4>
                            <p class="text-uppercase text-dark m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-primary border rounded border-primary rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/team-1.jpg') }}" alt="" />
                            <div class="team-social">
                                <a class="btn" href="#">
                                    <p class="mb-0 text-white">Kategori : Santri</p>
                                    <p class="mb-0 text-white">NISDH : 081234567</p>
                                    <p class="mb-0 text-white">Tingkatan : Fashlul Ula</p>
                                    <p class="mb-0 text-white">Status : Aktif</p>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-white">Full Name</h4>
                            <p class="text-uppercase text-dark m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-primary border rounded border-primary rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/team-1.jpg') }}" alt="" />
                            <div class="team-social">
                                <a class="btn" href="#">
                                    <p class="mb-0 text-white">Kategori : Santri</p>
                                    <p class="mb-0 text-white">NISDH : 081234567</p>
                                    <p class="mb-0 text-white">Tingkatan : Fashlul Ula</p>
                                    <p class="mb-0 text-white">Status : Aktif</p>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-white">Full Name</h4>
                            <p class="text-uppercase text-dark m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-primary border rounded border-primary rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/team-1.jpg') }}" alt="" />
                            <div class="team-social">
                                <a class="btn" href="#">
                                    <p class="mb-0 text-white">Kategori : Santri</p>
                                    <p class="mb-0 text-white">NISDH : 081234567</p>
                                    <p class="mb-0 text-white">Tingkatan : Fashlul Ula</p>
                                    <p class="mb-0 text-white">Status : Aktif</p>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-white">Full Name</h4>
                            <p class="text-uppercase text-dark m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-primary border rounded border-primary rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/team-1.jpg') }}" alt="" />
                            <div class="team-social">
                                <a class="btn" href="#">
                                    <p class="mb-0 text-white">Kategori : Santri</p>
                                    <p class="mb-0 text-white">NISDH : 081234567</p>
                                    <p class="mb-0 text-white">Tingkatan : Fashlul Ula</p>
                                    <p class="mb-0 text-white">Status : Aktif</p>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-white">Full Name</h4>
                            <p class="text-uppercase text-dark m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-primary border rounded border-primary rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/team-1.jpg') }}" alt="" />
                            <div class="team-social">
                                <a class="btn" href="#">
                                    <p class="mb-0 text-white">Kategori : Santri</p>
                                    <p class="mb-0 text-white">NISDH : 081234567</p>
                                    <p class="mb-0 text-white">Tingkatan : Fashlul Ula</p>
                                    <p class="mb-0 text-white">Status : Aktif</p>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-white">Full Name</h4>
                            <p class="text-uppercase text-dark m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-primary border rounded border-primary rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/team-1.jpg') }}" alt="" />
                            <div class="team-social">
                                <a class="btn" href="#">
                                    <p class="mb-0 text-white">Kategori : Santri</p>
                                    <p class="mb-0 text-white">NISDH : 081234567</p>
                                    <p class="mb-0 text-white">Tingkatan : Fashlul Ula</p>
                                    <p class="mb-0 text-white">Status : Aktif</p>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-white">Full Name</h4>
                            <p class="text-uppercase text-dark m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-primary border rounded border-primary rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/team-1.jpg') }}" alt="" />
                            <div class="team-social">
                                <a class="btn" href="#">
                                    <p class="mb-0 text-white">Kategori : Santri</p>
                                    <p class="mb-0 text-white">NISDH : 081234567</p>
                                    <p class="mb-0 text-white">Tingkatan : Fashlul Ula</p>
                                    <p class="mb-0 text-white">Status : Aktif</p>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-white">Full Name</h4>
                            <p class="text-uppercase text-dark m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-primary border rounded border-primary rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/team-1.jpg') }}" alt="" />
                            <div class="team-social">
                                <a class="btn" href="#">
                                    <p class="mb-0 text-white">Kategori : Santri</p>
                                    <p class="mb-0 text-white">NISDH : 081234567</p>
                                    <p class="mb-0 text-white">Tingkatan : Fashlul Ula</p>
                                    <p class="mb-0 text-white">Status : Aktif</p>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-white">Full Name</h4>
                            <p class="text-uppercase text-dark m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-primary border rounded border-primary rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/team-1.jpg') }}" alt="" />
                            <div class="team-social">
                                <a class="btn" href="#">
                                    <p class="mb-0 text-white">Kategori : Santri</p>
                                    <p class="mb-0 text-white">NISDH : 081234567</p>
                                    <p class="mb-0 text-white">Tingkatan : Fashlul Ula</p>
                                    <p class="mb-0 text-white">Status : Aktif</p>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-white">Full Name</h4>
                            <p class="text-uppercase text-dark m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-primary border rounded border-primary rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/team-1.jpg') }}" alt="" />
                            <div class="team-social">
                                <a class="btn" href="#">
                                    <p class="mb-0 text-white">Kategori : Santri</p>
                                    <p class="mb-0 text-white">NISDH : 081234567</p>
                                    <p class="mb-0 text-white">Tingkatan : Fashlul Ula</p>
                                    <p class="mb-0 text-white">Status : Aktif</p>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-white">Full Name</h4>
                            <p class="text-uppercase text-dark m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-primary border rounded border-primary rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/team-1.jpg') }}" alt="" />
                            <div class="team-social">
                                <a class="btn" href="#">
                                    <p class="mb-0 text-white">Kategori : Santri</p>
                                    <p class="mb-0 text-white">NISDH : 081234567</p>
                                    <p class="mb-0 text-white">Tingkatan : Fashlul Ula</p>
                                    <p class="mb-0 text-white">Status : Aktif</p>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-white">Full Name</h4>
                            <p class="text-uppercase text-dark m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-primary border rounded border-primary rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/team-1.jpg') }}" alt="" />
                            <div class="team-social">
                                <a class="btn" href="#">
                                    <p class="mb-0 text-white">Kategori : Santri</p>
                                    <p class="mb-0 text-white">NISDH : 081234567</p>
                                    <p class="mb-0 text-white">Tingkatan : Fashlul Ula</p>
                                    <p class="mb-0 text-white">Status : Aktif</p>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-white">Full Name</h4>
                            <p class="text-uppercase text-dark m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-primary border rounded border-primary rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/team-1.jpg') }}" alt="" />
                            <div class="team-social">
                                <a class="btn" href="#">
                                    <p class="mb-0 text-white">Kategori : Santri</p>
                                    <p class="mb-0 text-white">NISDH : 081234567</p>
                                    <p class="mb-0 text-white">Tingkatan : Fashlul Ula</p>
                                    <p class="mb-0 text-white">Status : Aktif</p>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-white">Full Name</h4>
                            <p class="text-uppercase text-dark m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-primary border rounded border-primary rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/team-1.jpg') }}" alt="" />
                            <div class="team-social">
                                <a class="btn" href="#">
                                    <p class="mb-0 text-white">Kategori : Santri</p>
                                    <p class="mb-0 text-white">NISDH : 081234567</p>
                                    <p class="mb-0 text-white">Tingkatan : Fashlul Ula</p>
                                    <p class="mb-0 text-white">Status : Aktif</p>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-white">Full Name</h4>
                            <p class="text-uppercase text-dark m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-primary border rounded border-primary rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/team-1.jpg') }}" alt="" />
                            <div class="team-social">
                                <a class="btn" href="#">
                                    <p class="mb-0 text-white">Kategori : Santri</p>
                                    <p class="mb-0 text-white">NISDH : 081234567</p>
                                    <p class="mb-0 text-white">Tingkatan : Fashlul Ula</p>
                                    <p class="mb-0 text-white">Status : Aktif</p>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-white">Full Name</h4>
                            <p class="text-uppercase text-dark m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-primary border rounded border-primary rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/team-1.jpg') }}" alt="" />
                            <div class="team-social">
                                <a class="btn" href="#">
                                    <p class="mb-0 text-white">Kategori : Santri</p>
                                    <p class="mb-0 text-white">NISDH : 081234567</p>
                                    <p class="mb-0 text-white">Tingkatan : Fashlul Ula</p>
                                    <p class="mb-0 text-white">Status : Aktif</p>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-white">Full Name</h4>
                            <p class="text-uppercase text-dark m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-primary border rounded border-primary rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/team-1.jpg') }}" alt="" />
                            <div class="team-social">
                                <a class="btn" href="#">
                                    <p class="mb-0 text-white">Kategori : Santri</p>
                                    <p class="mb-0 text-white">NISDH : 081234567</p>
                                    <p class="mb-0 text-white">Tingkatan : Fashlul Ula</p>
                                    <p class="mb-0 text-white">Status : Aktif</p>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-white">Full Name</h4>
                            <p class="text-uppercase text-dark m-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team End -->
@endsection('content')
