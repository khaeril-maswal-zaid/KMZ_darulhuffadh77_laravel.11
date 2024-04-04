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

    <section class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="row">
                <div class="col-md-7">
                    <div class="section-title position-relative pb-3 mb-4">
                        <h1 class="mb-0">OSDHA</h1>
                        <h5 class="fw-bold text-primary text-uppercase">Organisasi Santri Darul Huffadh</h5>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="gap-2 d-flex justify-content-end">
                        <a href="/osdha" class="btn btn-success">Tentang</a>
                        <div class="btn btn-dark">Pengurus</div>
                    </div>
                </div>
            </div>



            <!-- Testimonial Start -->
            <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <main>
                        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-1.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-2.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-3.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-2.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-3.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                        </div>
                        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-1.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-2.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-3.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-2.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-3.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                        </div>
                        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-1.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-2.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-3.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-2.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-3.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                        </div>
                        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-1.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-2.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-3.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-2.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-3.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                        </div>
                        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-1.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-2.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-3.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-2.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-3.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                        </div>
                        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-1.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-2.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-3.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-2.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                            <div class="testimonial-item bg-light my-4">
                                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                    <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-3.jpg') }}"
                                        style="width: 60px; height: 60px" />
                                    <div class="ps-4">
                                        <h4 class="text-primary mb-1">Client Name</h4>
                                        <small class="text-uppercase">Profession</small>
                                    </div>
                                </div>
                                <div class="pt-4 pb-5 px-5">
                                    Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                                    stet amet eirmod eos labore diam
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
            <!-- Testimonial End -->
        </div>
    </section>
@endsection('content')
