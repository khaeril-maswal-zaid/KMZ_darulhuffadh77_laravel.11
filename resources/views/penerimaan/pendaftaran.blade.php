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
                <div class="alert alert-primary py-2 label-url" role="alert">
                    <a href="/"><i class="bi bi-house-door-fill"></i></a>
                    <span class="px-1">/</span>

                    <span class="px-1">Peneriman Santri/ Santriwati Baru</span>
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
                <h5 class="fw-bold text-primary text-uppercase">Penerimaan Santri/ Santriwati Baru</h5>
                <h1 class="mb-0">
                    Pondok Pesantren {{ config('app.name') }}
                </h1>
            </div>

            <div class="row g-5 pt-4">
                <div class="col-lg-7">
                    <form action="{{ url('/pendaftaran-santri-baru') }}" method="post"
                        class="needs-validation"enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input value="{{ old('nik') }}" type="text"
                                class="form-control @error('nik') is-invalid @enderror" id="floatingInput0"
                                placeholder="Nomor Induk Kependudukan" name="nik" maxlength="16" minlength="16">
                            <label for="floatingInput0">Nomor Induk Kependudukan</label>

                            @error('nik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input value="{{ old('nama') }}" type="text"
                                class="form-control @error('nama') is-invalid @enderror" id="floatingInput1"
                                placeholder="Nama lengkap" name="nama">
                            <label for="floatingInput1">Nama lengkap</label>

                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input value="{{ old('tempatlahir') }}" type="text"
                                class="form-control @error('tempatlahir') is-invalid @enderror" id="floatingInput2"
                                placeholder="Tempat Lahir" name="tempatlahir">
                            <label for="floatingInput2">Tempat Lahir</label>

                            @error('tempatlahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input value="{{ old('tanggallahir') }}" type="date"
                                class="form-control @error('tanggallahir') is-invalid @enderror" id="floatingInput3"
                                placeholder="Tanggal Lahir" name="tanggallahir">
                            <label for="floatingInput3">Tanggal Lahir</label>

                            @error('tanggallahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select @error('jeniskelamin') is-invalid @enderror" id="floatingSelect1"
                                aria-label="Floating label select example" name="jeniskelamin">
                                <option value="">Pilih</option>
                                <option value="Laki-laki" {{ old('jeniskelamin') == 'Laki-laki' ? 'selected' : '' }}>
                                    Laki-laki</option>
                                <option value="Perempuan" {{ old('jeniskelamin') == 'Perempuan' ? 'selected' : '' }}>
                                    Perempuan</option>
                            </select>
                            <label for="floatingSelect1">Jenis Kelamin</label>

                            @error('jeniskelamin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select @error('provinsi') is-invalid @enderror" id="floatingSelect2"
                                aria-label="Floating label select example" name="provinsi">
                                <option value="">Pilih</option>
                                <option value="Sulawesi Selatan"
                                    {{ old('provinsi') == 'Sulawesi Selatan' ? 'selected' : '' }}>
                                    Sulawesi Selatan
                                </option>
                            </select>
                            <label for="floatingSelect2">Provinsi</label>

                            @error('provinsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select @error('kabupaten') is-invalid @enderror" id="floatingSelect3"
                                aria-label="Floating label select example" name="kabupaten">
                                <option value="">Pilih</option>
                                <option value="Bulukumba" {{ old('kabupaten') == 'Bulukumba' ? 'selected' : '' }}>
                                    Bulukumba
                                </option>
                            </select>
                            <label for="floatingSelect3">Kabupaten</label>

                            @error('kabupaten')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3  wow slideInUp" data-wow-delay="0.3s">
                            <select class="form-select @error('kecamatan') is-invalid @enderror" id="floatingSelect4"
                                aria-label="Floating label select example" name="kecamatan">
                                <option value="">Pilih</option>
                                <option value="Bulukumpa" {{ old('kecamatan') == 'Bulukumpa' ? 'selected' : '' }}>
                                    Bulukumpa
                                </option>
                            </select>
                            <label for="floatingSelect4">Kecamatan</label>

                            @error('kecamatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3  wow slideInUp" data-wow-delay="0.3s">
                            <select class="form-select @error('desa') is-invalid @enderror" id="floatingSelect5"
                                aria-label="Floating label select example" name="desa">
                                <option value="">Pilih</option>
                                <option value="Bulo-Bulo" {{ old('desa') == 'Bulo-Bulo' ? 'selected' : '' }}>Bulo-Bulo
                                </option>
                            </select>
                            <label for="floatingSelect5">Desa</label>

                            @error('desa')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3  wow slideInUp" data-wow-delay="0.3s">
                            <input value="{{ old('namaayah') }}" type="text"
                                class="form-control @error('namaayah') is-invalid @enderror" id="floatingInput4"
                                placeholder="Nama Ayah" name="namaayah">
                            <label for="floatingInput4">Nama Ayah</label>

                            @error('namaayah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3  wow slideInUp" data-wow-delay="0.3s">
                            <input value="{{ old('namaibu') }}" type="text"
                                class="form-control @error('namaibu') is-invalid @enderror" id="floatingInput5"
                                placeholder="Nama Ibu" name="namaibu">
                            <label for="floatingInput5">Nama Ibu</label>

                            @error('namaibu')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3  wow slideInUp" data-wow-delay="0.3s">
                            <input value="{{ old('pekerjaanayah') }}" type="text"
                                class="form-control @error('pekerjaanayah') is-invalid @enderror" id="floatingInput6"
                                placeholder="Pekerjaan Ayah" name="pekerjaanayah">
                            <label for="floatingInput6">Pekerjaan Ayah</label>

                            @error('pekerjaanayah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3  wow slideInUp" data-wow-delay="0.3s">
                            <input value="{{ old('pekerjaanibu') }}" type="text"
                                class="form-control @error('pekerjaanibu') is-invalid @enderror" id="floatingInput7"
                                placeholder="Pekerjaan Ibu" name="pekerjaanibu">
                            <label for="floatingInput7">Pekerjaan Ibu</label>

                            @error('pekerjaanibu')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3  wow slideInUp" data-wow-delay="0.3s">
                            <input value="{{ old('kontakayah') }}" type="text"
                                class="form-control @error('kontakayah') is-invalid @enderror" id="floatingInput6"
                                placeholder="Kontak Ayah" name="kontakayah">
                            <label for="floatingInput6">Kontak Ayah</label>

                            @error('kontakayah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3  wow slideInUp" data-wow-delay="0.3s">
                            <input value="{{ old('kontakibu') }}" type="text"
                                class="form-control @error('kontakibu') is-invalid @enderror" id="floatingInput7"
                                placeholder="kontak Ibu" name="kontakibu">
                            <label for="floatingInput7">Kontak Ibu</label>

                            @error('kontakibu')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select @error('experiment') is-invalid @enderror" id="floatingSelect2"
                                aria-label="Floating label select example" name="experiment">
                                <option value="">Pilih</option>
                                <option value="0" {{ old('experiment') == '0' ? 'selected' : '' }}>SD
                                </option>
                                <option value="1"{{ old('experiment') == '1' ? 'selected' : '' }}>SMP</option>
                            </select>
                            <label for="floatingSelect2">Tamatan Sekolah</label>

                            @error('experiment')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3  wow slideInUp" data-wow-delay="0.3s">
                            <input value="{{ old('asalsekolah') }}" type="text"
                                class="form-control @error('asalsekolah') is-invalid @enderror" id="floatingInput8"
                                placeholder="Asal Sekolah" name="asalsekolah">
                            <label for="floatingInput8">Asal Sekolah</label>

                            @error('asalsekolah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3  wow slideInUp" data-wow-delay="0.3s">
                            <input value="{{ old('nisn') }}" type="text"
                                class="form-control @error('nisn') is-invalid @enderror" id="floatingInput9"
                                placeholder="NISN" name="nisn">
                            <label for="floatingInput9">NISN</label>

                            @error('nisn')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select @error('tahuntamat') is-invalid @enderror" id="floatingSelect13"
                                aria-label="Floating label select example" name="tahuntamat">
                                <option value="">Pilih</option>
                                @for ($i = date('Y') - 2; $i < date('Y'); $i++)
                                    <option value="{{ $i }}" {{ old('tahuntamat') == $i ? 'selected' : '' }}>
                                        {{ $i }}</option>
                                @endfor
                            </select>
                            <label for="floatingSelect13">Tahun Tamat</label>

                            @error('tahuntamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating  wow slideInUp" data-wow-delay="0.3s">
                            <input value="{{ old('foto') }}" type="file"
                                class="form-control @error('foto') is-invalid @enderror" id="sampul"
                                placeholder="Foto" name="foto" onchange="imgPreview()">
                            <label for="sampul" class="custom-file-label">Foto</label>

                            @error('foto')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-grid mt-3">
                            <button class="btn btn-primary btn-lg" type="submit">Kirim</button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-5 mt-md-5 mt-4" style="min-height: 500px;">
                    <div class="position-sticky" style="top: 6rem">
                        <img class="img-fluid w-100 rounded wow zoomIn img-preview" data-wow-delay="0.9s"
                            src="{{ asset('storage/' . $pimpinan->picture1) }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function imgPreview() {
            const sampul = document.querySelector('#sampul');
            const imgPreview = document.querySelector('.img-preview');

            const file = sampul.files[0];

            // Cek apakah file ada dan apakah tipe file adalah gambar
            if (file && file.type.startsWith('image/')) {
                const fileReader = new FileReader();
                fileReader.readAsDataURL(file);

                fileReader.onload = function(e) {
                    imgPreview.src = e.target.result;
                }
            }
        }
    </script>
@endsection()
