@extends('layout.admin-template')

@section('content')
    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa-solid fa-book fa-3x text-primary"></i>
                    <div class="ms-2">
                        <p class="mb-2">
                            Jumlah {{ Auth::user()->jenis_kelamin == 'Laki-laki' ? 'Santri Baru' : 'Santriwati Baru' }}</p>
                        <h6 class="mb-0">{{ $santribaru }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa-solid fa-users fa-3x text-primary"></i>
                    <div class="ms-2">
                        <p class="mb-2">Jumlah {{ Auth::user()->jenis_kelamin == 'Laki-laki' ? 'Santri' : 'Santriwati' }}
                        </p>
                        <h6 class="mb-0">{{ $santri }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa-solid fa-school fa-3x text-primary"></i>
                    <div class="ms-2">
                        <p class="mb-2">Jumlah Pembina</p>
                        <h6 class="mb-0">{{ $pembina }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa-solid fa-network-wired text-primary fa-3x"></i>
                    <div class="ms-3">
                        <p class="mb-2">Jumlah Alumni</p>
                        <h6 class="mb-0">{{ $alumni }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->

    <!-- Widgets Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-md-6 col-xl-8">
                <div class="p-md-5 p-4 bg-light rounded-3">
                    <div class="container-fluid py-5">
                        <h1 class="display-5 fw-bold">Selamat Datang,...
                        </h1>
                        <h2 class="mb-3">{{ Auth::user()->name }}</h2>
                        <p class="col-md-8 fs-4"> Di Sistem Informasi {{ config('app.name') }}</p>
                        </p>
                        {{-- <button class="btn btn-primary btn-lg mt-3" type="button">Sign Out</button> --}}
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="h-100 bg-light rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Calender</h6>
                    </div>
                    <div id="calender"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Widgets End -->
@endsection('content')
