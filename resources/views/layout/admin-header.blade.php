<div class="container-fluid position-relative bg-white d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
            <a href="{{ route('admin.index') }}" class="navbar-brand mx-4 my-2">
                <h3 class="text-primary h4">{{ config('app.name') }}</h3>
            </a>

            <div class="navbar-nav w-100">
                <a href="{{ route('admin.index') }}"
                    class="nav-item nav-link  {{ request()->routeIs('admin.index') ? 'active' : '' }}"><i
                        class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <div class="nav-item dropdown">
                    <a href="#"
                        class="nav-link dropdown-toggle {{ request()->routeIs('masterdata.*') ? 'active' : '' }}"
                        data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Master Data</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{ route('masterdata.index', 'santri-baru') }}"
                            class="dropdown-item">{{ Auth::user()->jenis_kelamin == 'Laki-laki' ? 'Santri' : 'Santriwati' }}
                            Baru</a>
                        <a href="{{ route('masterdata.index', 'santri') }}"
                            class="dropdown-item">{{ Auth::user()->jenis_kelamin == 'Laki-laki' ? 'Santri' : 'Santriwati' }}</a>
                        <a href="{{ route('masterdata.index', 'pembina') }}" class="dropdown-item">Pembina</a>
                        <a href="{{ route('masterdata.index', 'pengabdian-luar') }}" class="dropdown-item">Pengabdian
                            Luar</a>
                        <a href="{{ route('masterdata.index', 'alumni') }}" class="dropdown-item">Alumni</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#"
                        class="nav-link dropdown-toggle {{ request()->routeIs('blogger') ? 'active' : '' }}"
                        data-bs-toggle="dropdown"><i class="fa-solid fa-blog me-2"></i>Blog</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{ route('blogger', 'islamic') }}" class="dropdown-item">Islamic</a>
                        <a href="{{ route('blogger', 'news-dh') }}" class="dropdown-item">News DH</a>
                        <a href="{{ route('blogger', 'story-dh') }}" class="dropdown-item">Story DH</a>
                        <a href="{{ route('blogger', 'default') }}" class="dropdown-item">Default</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#"
                        class="nav-link dropdown-toggle {{ request()->routeIs('eksekutif.*') ? 'active' : '' }}"
                        data-bs-toggle="dropdown"><i class="fa-solid fa-users-gear me-2"></i>Eksekutif</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{ route('eksekutif.blog', 'struktur-eksekutif') }}" class="dropdown-item">Struktur
                            Eksekutif</a>
                        <a href="{{ route('eksekutif.blog', 'profil-pendiri-kh-lanre-said') }}"
                            class="dropdown-item">Profil Pendiri</a>
                        <a href="{{ route('eksekutif.blog', 'profil-pimpinan-ust-saad-said') }}"
                            class="dropdown-item">Profil
                            Pimpinan</a>
                        <a href="{{ route('eksekutif.blog', 'profil-direktur-putra') }}" class="dropdown-item">Profil
                            Direktur Putra</a>
                        <a href="{{ route('eksekutif.blog', 'profil-direktur-putri') }}" class="dropdown-item">Profil
                            Direktur Putri</a>
                    </div>
                </div>

                <a href="{{ route('hardsoftskill.index') }}"
                    class="nav-item nav-link {{ request()->routeIs('hardsoftskill.*') ? 'active' : '' }}"><i
                        class="fa-solid fa-hands-asl-interpreting me-2"></i>Hard & Soft Skill</a>

                <a href="{{ route('aktivitassantri.admin') }}"
                    class="nav-item nav-link {{ request()->routeIs('aktivitassantri.*') ? 'active' : '' }}"><i
                        class="fa-regular fa-calendar-days me-2"></i>Aktivitas</a>

                <a href="{{ route('ikdh.masterdata') }}"
                    class="nav-item nav-link  {{ request()->routeIs('ikdh.*') ? 'active' : '' }}"><i
                        class="fa-solid fa-network-wired me-2"></i>IKDH</a>

                <a href="{{ route('kontak.index') }}"
                    class="nav-item nav-link {{ request()->routeIs('kontak.*') ? 'active' : '' }}"><i
                        class="fa-regular fa-address-book me-2"></i>Kontak</a>

            </div>
        </nav>
    </div>
    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
            <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
            </a>
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>
            @if (isset($searcher))
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" name="search" type="search"
                        placeholder="Search {{ $searcher }}" style="width: 300px" autocomplete="off"
                        value="{{ request('search') }}">
                    <button type="submit" class="ms-2 btn btn-primary">Search</button>
                </form>
            @endif
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-bell me-lg-2"></i>
                        <span class="d-none d-lg-inline-flex">Notificatin</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Profile updated</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">New user added</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Password changed</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item text-center">See all notifications</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img class="rounded-circle me-lg-2" src="{{ asset('storage/' . Auth::user()->image) }}"
                            style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="/profile" class="dropdown-item">My Profile</a>
                        <a href="{{ route('logout') }}" class="dropdown-item">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->
