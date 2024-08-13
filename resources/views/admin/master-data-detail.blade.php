@extends('layout.admin-template')

@section('content')
    <main class="ms-sm-auto p-md-4 pb-md-0">
        <div class="container-fluid px-0 rounded">
            <div
                class="d-flex bg-light justify-content-between flex-wrap flex-md-nowrap align-items-center px-3 pt-3 pb-2 mb-3">
                <h1 class="h4 id-table">{{ $namepage }}</h1>

                <!-- Button trigger modal -->
                <a href="{{ route('masterdata.index', $parammasterdata) }}" class="btn btn-sm btn-primary">
                    Kembali
                </a>
            </div>

            <div class="row">
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-sticky" style="top: 5rem">
                        <img class="img-fluid w-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="{{ asset('storage/' . $details->picture) }}" style="object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="bg-light" style="min-height: 100%">
                        <div class="p-3">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>NIK</td>
                                        <td>:</td>
                                        <td>{{ $details->nik }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td>{{ $details->nama }}</td>
                                    </tr>
                                    <tr>
                                        <td>NISDH</td>
                                        <td>:</td>
                                        <td>{{ $details->nisdh }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>:</td>
                                        <td>{{ $details->jenis_kelamin }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tempat Tanggal Lahir</td>
                                        <td>:</td>
                                        <td>{{ $details->tempat_lahir . ', ' . $details->tanggal_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <td>Provinsi</td>
                                        <td>:</td>
                                        <td>{{ $details->provinsi }}</td>
                                    </tr>
                                    <tr>
                                        <td>Kabupaten</td>
                                        <td>:</td>
                                        <td>{{ $details->kabupaten }}</td>
                                    </tr>
                                    <tr>
                                        <td>Kecamatan</td>
                                        <td>:</td>
                                        <td>{{ $details->kecamatan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Desa</td>
                                        <td>:</td>
                                        <td>{{ $details->desa }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Ayah</td>
                                        <td>:</td>
                                        <td>{{ $details->nama_ayah }}</td>
                                    </tr>
                                    <tr>
                                        <td>Pekerjaan Ayah</td>
                                        <td>:</td>
                                        <td>{{ $details->pekerjaan_ayah }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Ibu</td>
                                        <td>:</td>
                                        <td>{{ $details->nama_ibu }}</td>
                                    </tr>
                                    <tr>
                                        <td>Pekerjaan Ibu</td>
                                        <td>:</td>
                                        <td>{{ $details->pekerjaan_ibu }}</td>
                                    </tr>
                                    <tr>
                                        <td>Asal Sekolah</td>
                                        <td>:</td>
                                        <td>{{ $details->asal_sekolah }}</td>
                                    </tr>
                                    <tr>
                                        <td>NISN</td>
                                        <td>:</td>
                                        <td>{{ $details->nisn }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tahun tamat SD</td>
                                        <td>:</td>
                                        <td>{{ $details->tahun_tamat_sd }}</td>
                                    </tr>
                                    <tr>
                                        <td>Angkatan</td>
                                        <td>:</td>
                                        <td>{{ $details->angkatan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Experiment</td>
                                        <td>:</td>
                                        <td>{{ $details->experiment ? 'Yah' : 'Bukan' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection('content')
