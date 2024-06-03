<!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"><i
                        class="fa fa-map-marker-alt me-2"></i>{{ $kontaks[0]->medsos . ', ' . $kontaks[0]->akun }}</small>
                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>{{ $kontaks[4]->akun }}</small>
                <small class="text-light"><i class="fa fa-envelope-open me-2"></i>{{ $kontaks[1]->akun }}</small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                    href="{{ $kontaks[2]->link }}"><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                    href="{{ $kontaks[3]->link }}"><i class="fab fa-instagram fw-normal"></i></a>

            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="/" class="navbar-brand p-0">
            <h1 class="m-0 h2"><i class="fa fa-user-tie me-2"></i>{{ config('app.name') }}</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link active">Home</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tentang</a>
                    <div class="dropdown-menu m-0 bg-primary">

                        <div class="dropdown-item dropdownKmz-toggle m-0 p-0 position-relative">
                            <a href="#" class="dropdown-item dropdown-toggle"
                                data-bs-toggle="dropdown">Eksekutif</a>
                            <div class="dropdownKmz-menu ropdown-menu m-0 bg-primary rounded-1 start-100 top-0">
                                <a href="/tentang/struktur-eksekutif" class="dropdown-item">Struktur Eksekutif</a>
                                <a href="/tentang/profil-pendiri-kh-lanre-said" class="dropdown-item">Profil Pendiri</a>
                                <a href="/tentang/profil-pimpinan-ust-saad-said" class="dropdown-item">Profil
                                    Pimpinan</a>
                                <a href="/tentang/profil-direktur-putra" class="dropdown-item">Profil Direktur Putra</a>
                                <a href="/tentang/profil-direktur-putri" class="dropdown-item">Profil Direktur Putri</a>
                            </div>
                        </div>

                        <div class="dropdown-item dropdownKmz-toggle m-0 p-0 position-relative">
                            <a href="#" class="dropdown-item dropdown-toggle"
                                data-bs-toggle="dropdown">Pendidikan</a>
                            <div class="dropdownKmz-menu ropdown-menu m-0 bg-primary rounded-1 start-100 top-0">
                                <a href="/pendidikan/kulliyatul-muallimin-alislamiyah" class="dropdown-item">Kulliytul
                                    Mu`allimin
                                    Al-Islamiyah</a>
                                <a href="/pendidikan/tahfidzhul-quran" class="dropdown-item">Tahfidzhul Qur`an</a>
                                <a href="/pendidikan/pengabdian" class="dropdown-item">Pengabdian</a>
                            </div>
                        </div>

                        <div class="dropdown-item dropdownKmz-toggle m-0 p-0 position-relative">
                            <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown">Hard &
                                Soft Skill</a>
                            <div class="dropdownKmz-menu ropdown-menu m-0 bg-primary rounded-1 start-100 top-0">
                                <a href="/hard-and-soft-skill/osdha" class="dropdown-item">OSDHA</a>
                                <a href="/hard-and-soft-skill/persidha" class="dropdown-item">Persidha</a>
                                <a href="/hard-and-soft-skill/pramuka" class="dropdown-item">Pramuka</a>
                                <a href="/hard-and-soft-skill/djour" class="dropdown-item">D`Jour</a>
                                <a href="/hard-and-soft-skill/seni" class="dropdown-item">Seni</a>
                            </div>
                        </div>

                        <a href="/aktivitas-santri-santriwati" class="dropdown-item">Aktivitas Santri</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Sejarah</a>
                    <div class="dropdown-menu m-0 bg-primary">
                        <a href="/blog/sejarah-pendirian-maahad" class="dropdown-item">Pendirian Ma`ahad</a>
                        <a href="/blog/sejarah-pondok-lama" class="dropdown-item">Pondok Lama</a>
                        <a href="/blog/sejarah-pondok-baru" class="dropdown-item">Pondok Baru</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Ma`ahad</a>
                    <div class="dropdown-menu m-0 bg-primary">
                        <a href="/pembina-putra" class="dropdown-item">Pembina Putra</a>
                        <a href="/pembina-putri" class="dropdown-item">Pembina Putri</a>
                        <a href="/santri" class="dropdown-item">Santri</a>
                        <a href="/santriwati" class="dropdown-item">Santriwati</a>
                        <a href="/alumni" class="dropdown-item">Alumni</a>
                        <a href="/ikatan-keluarga-darul-huffadh" class="dropdown-item">IKDH</a>
                    </div>
                </div>

                <a href="/galery" class="nav-item nav-link">Galery</a>
                <a href="/kontak" class="nav-item nav-link">Kontak</a>
            </div>
            <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal"
                data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
            <a href="/penerimaan-santri-baru" class="btn btn-primary py-2 px-4 ms-3">Daftar</a>
        </div>
    </nav>
</div>
<!-- Navbar End -->


<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3"
                        placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->
