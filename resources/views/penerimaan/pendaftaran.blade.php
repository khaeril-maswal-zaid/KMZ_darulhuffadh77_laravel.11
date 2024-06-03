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

                    <span class="px-1">Peneriman Santri Baru</span>
                    <span class="px-1">/</span>
                    <span class="px-1">Daftar</span>
                </div>
            </div>
        </div>
        <!-- Petunjuk URL Enad -->
    </section>


    <!-- Projects Start -->
    <section class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px">
                <h5 class="fw-bold text-primary text-uppercase">Penerimaan Santri Baru</h5>
                <h1 class="mb-0">
                    Pondok Pesantren {{ config('app.name') }}
                </h1>
            </div>

            <div class="row g-5 pt-4">
                <div class="col-lg-7">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="m-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ url('/pendaftaran-santri-baru') }}" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input value="{{ old('nik') }}" type="number" class="form-control" id="floatingInput0"
                                placeholder="Nomor Induk Kependudukan" name="nik" maxlength="16" minlength="16"
                                requiredX>
                            <label for="floatingInput0">Nomor Induk Kependudukan</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input value="{{ old('nama') }}" type="text" class="form-control" id="floatingInput1"
                                placeholder="Nama lengkap" requiredX name="nama">
                            <label for="floatingInput1">Nama lengkap</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input value="{{ old('tempatlahir') }}" type="text" class="form-control" id="floatingInput2"
                                placeholder="Tempat Lahir" requiredX name="tempatlahir">
                            <label for="floatingInput2">Tempat Lahir</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input value="{{ old('tanggallahir') }}" type="date" class="form-control" id="floatingInput3"
                                placeholder="Tanggal Lahir" requiredX name="tanggallahir">
                            <label for="floatingInput3">Tanggal Lahir</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect1" aria-label="Floating label select example"
                                name="jeniskelamin">
                                <option selected>Pilih</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <label for="floatingSelect1">Jenis Kelamin</label>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect2" aria-label="Floating label select example"
                                name="provinsi">
                                <option selected>Pilih</option>
                                <option value="ulawesi Selatan">Sulawesi Selatan</option>
                            </select>
                            <label for="floatingSelect2">Provinsi</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect3" aria-label="Floating label select example"
                                name="kabupaten">
                                <option selected>Pilih</option>
                                <option value="Bulukumba">Bulukumba</option>
                            </select>
                            <label for="floatingSelect3">Kabupaten</label>
                        </div>
                        <div class="form-floating mb-3  wow slideInUp" data-wow-delay="0.3s">
                            <select class="form-select" id="floatingSelect4" aria-label="Floating label select example"
                                name="kecamatan">
                                <option selected>Pilih</option>
                                <option value="Bulukumpa">Bulukumpa</option>
                            </select>
                            <label for="floatingSelect4">Kecamatan</label>
                        </div>
                        <div class="form-floating mb-3  wow slideInUp" data-wow-delay="0.3s">
                            <select class="form-select" id="floatingSelect5" aria-label="Floating label select example"
                                name="desa">
                                <option selected>Pilih</option>
                                <option value="Bulo-Bulo">Bulo-Bulo</option>
                            </select>
                            <label for="floatingSelect5">Desa</label>
                        </div>

                        <div class="form-floating mb-3  wow slideInUp" data-wow-delay="0.3s">
                            <input value="{{ old('namaayah') }}" type="text" class="form-control" id="floatingInput4"
                                placeholder="Nama Ayah" requiredX name="namaayah">
                            <label for="floatingInput4">Nama Ayah</label>
                        </div>
                        <div class="form-floating mb-3  wow slideInUp" data-wow-delay="0.3s">
                            <input value="{{ old('namaibu') }}" type="text" class="form-control" id="floatingInput5"
                                placeholder="Nama Ibu" requiredX name="namaibu">
                            <label for="floatingInput5">Nama Ibu</label>
                        </div>
                        <div class="form-floating mb-3  wow slideInUp" data-wow-delay="0.3s">
                            <input value="{{ old('pekerjaanayah') }}" type="text" class="form-control"
                                id="floatingInput6" placeholder="Pekerjaan Ayah" requiredX name="pekerjaanayah">
                            <label for="floatingInput6">Pekerjaan Ayah</label>
                        </div>
                        <div class="form-floating mb-3  wow slideInUp" data-wow-delay="0.3s">
                            <input value="{{ old('pekerjaanibu') }}" type="text" class="form-control"
                                id="floatingInput7" placeholder="Pekerjaan Ibu" requiredX name="pekerjaanibu">
                            <label for="floatingInput7">Pekerjaan Ibu</label>
                        </div>
                        <div class="form-floating mb-3  wow slideInUp" data-wow-delay="0.3s">
                            <input value="{{ old('kontakayah') }}" type="text" class="form-control"
                                id="floatingInput6" placeholder="Kontak Ayah" requiredX name="kontakayah">
                            <label for="floatingInput6">Kontak Ayah</label>
                        </div>
                        <div class="form-floating mb-3  wow slideInUp" data-wow-delay="0.3s">
                            <input value="{{ old('kontakibu') }}" type="text" class="form-control"
                                id="floatingInput7" placeholder="kontak Ibu" requiredX name="kontakibu">
                            <label for="floatingInput7">Kontak Ibu</label>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect2" aria-label="Floating label select example"
                                name="experiment">
                                <option selected>Pilih</option>
                                <option value="false">SD</option>
                                <option value="true">SMP</option>
                            </select>
                            <label for="floatingSelect2">Tamatan Sekolah</label>
                        </div>

                        <div class="form-floating mb-3  wow slideInUp" data-wow-delay="0.3s">
                            <input value="{{ old('asalsekolah') }}" type="text" class="form-control"
                                id="floatingInput8" placeholder="Asal Sekolah" requiredX name="asalsekolah">
                            <label for="floatingInput8">Asal Sekolah</label>
                        </div>
                        <div class="form-floating mb-3  wow slideInUp" data-wow-delay="0.3s">
                            <input value="{{ old('nisn') }}" type="text" class="form-control" id="floatingInput9"
                                placeholder="NISN" requiredX name="nisn">
                            <label for="floatingInput9">NISN</label>
                        </div>
                        <div class="form-floating mb-3  wow slideInUp" data-wow-delay="0.3s">
                            <input value="{{ old('tahuntamat') }}" type="year" maxlength="4" minlength="4"
                                class="form-control" id="floatingInput11" placeholder="Tahun Tamat" requiredX
                                name="tahuntamat">
                            <label for="floatingInput11">Tahun Tamat</label>
                        </div>
                        <div class="form-floating mb-3  wow slideInUp" data-wow-delay="0.3s">
                            <input value="{{ old('foto') }}" type="file" class="form-control" id="floatingInput11"
                                placeholder="Foto" requiredX name="foto">
                            <label for="floatingInput11">Foto</label>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-success btn-lg" type="submit">Kirim</button>
                        </div>
                    </form>
                </div>


                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-sticky" style="top: 6rem">
                        <img class="img-fluid w-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="{{ asset('assets/img/team-1.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
    </section>
@endsection()
