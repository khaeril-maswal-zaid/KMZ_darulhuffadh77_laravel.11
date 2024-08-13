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

            <div class="row  mb-lg-4 mb-3">
                <div class="col-md-6 border-end border-3 border-primary">
                    <form style="display: flex; align-items: center; gap: 10px;">
                        <div class="form-floating" style="flex-grow: 1;">
                            <input name="search" type="text" class="form-control" id="searchname"
                                placeholder="Cari Nama" autocomplete="off" value="{{ request('search') }}">
                            <label for="searchname"><i class="fa-solid fa-magnifying-glass me-2"></i>Cari Nama</label>
                        </div>
                        <button type="submit" class="btn btn-success">Search</button>
                    </form>
                </div>

                <div class="col-md-6">
                    <form action="">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <select class="form-select" id="angkatan" name="angkatan">
                                        <option selected value="all">Semua</option>
                                        @for ($i = date('Y'); $i >= 1975; $i--)
                                            <option>{{ $i }}</option>
                                        @endfor
                                    </select>
                                    <label for="angkatan">Angkatan</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <select class="form-select" id="alamat"name="alamat">
                                        <option selected value="all">Semua</option>
                                        <option value="Bulukumba">Bulukumba</option>
                                        <option value="Sinjai">Sinjai</option>
                                        <option value="2">Makassar</option>
                                        <option value="3">NTT</option>
                                    </select>
                                    <label for="alamat">Alamat</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-md-4 px-0 d-flex align-items-center gap-2">
                                <div class="form-floating" style="flex-grow: 1;">
                                    <select class="form-select w-100" id="show" name="show" name="show">
                                        <option selected value="24">24</option>
                                        <option value="48">48</option>
                                        <option value="96">96</option>
                                    </select>
                                    <label for="show">Show</label>
                                </div>
                                <button type="submit" class="btn btn-success">
                                    <i class="fa-solid fa-filter me-2"></i>Filter</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <div class="row g-5 mb-3">
                @foreach ($tholabahs as $tholabah)
                    <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-primary border rounded border-primary rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('assets/img/' . $tholabah->picture) }}"
                                    alt=" {{ $tholabah->nama }}" />
                                <div class="team-social">
                                    <a class="btn" href="#">
                                        <p class="mb-0 text-white">NISDH : {{ $tholabah->nisdh }}</p>

                                        <p class="mb-0 text-white">Kategori :
                                            @if ($tholabah->kategori == 'Pembina')
                                                {{ $tholabah->kelas }}
                                            @elseif ($tholabah->kategori == 'Alumni' || $tholabah->kategori == 'Pengabdian luar')
                                                {{ $tholabah->kategori }}
                                            @else
                                                @if ($tholabah->jenis_kelamin == 'Laki-laki')
                                                    Santri
                                                @else
                                                    Santriwati
                                                @endif
                                            @endif
                                        </p>

                                        <p class="mb-0 text-white">
                                            @if ($tholabah->kategori == 'Tholabun')
                                                Kelas : {{ $tholabah->kelas }}
                                            @elseif ($tholabah->kategori == 'Pembina')
                                                Depert. : {{ $tholabah->depertement }}
                                            @elseif ($tholabah->kategori == 'Pengabdian luar')
                                                Depert. : Pengabdian Luar
                                            @else
                                                Marhalah : {{ $tholabah->marhalah }}
                                            @endif
                                        </p>


                                        <p class="mb-0 text-white">
                                            @if ($tholabah->kategori == 'Pembina' || $tholabah->kategori == 'Pengabdian luar' || $tholabah->kategori == 'Alumni')
                                                Alumni : {{ $tholabah->tahun_alumni }}
                                            @else
                                                @if ($tholabah->active)
                                                    Status : Aktif
                                                @else
                                                    Status : Non Aktif
                                                @endif
                                            @endif
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                {!! Str::length($tholabah->nama) < 16
                                    ? '<h4 class="text-white">' . $tholabah->nama . '</h4>'
                                    : '<h5 class="text-white">' . Str::limit($tholabah->nama, 19, '...') . '</h5>' !!}
                                <p class="text-uppercase text-dark m-0">{{ $tholabah->kabupaten }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $tholabahs->onEachSide(0)->links() }}
        </div>
    </section>

    <!-- Team End -->
@endsection('content')
