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


    <!-- Blog Start -->
    <section class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-4">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-3" src="{{ asset('assets/img/blog-1.jpg') }}" alt="">
                        <div class="d-flex mb-4">
                            <small class="me-3"><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            <small class="me-3"><i class="far fa-eye text-primary me-2"></i>123</small>
                        </div>
                        <h1 class="mb-4">Diam dolor est labore duo ipsum clita sed et lorem tempor duo</h1>
                        <p>Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut
                            magna lorem. Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet
                            amet magna accusam consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at
                            sanctus et. Ipsum sit gubergren dolores et, consetetur justo invidunt at et
                            aliquyam ut et vero clita. Diam sea sea no sed dolores diam nonumy, gubergren
                            sit stet no diam kasd vero.</p>
                        <p>Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores
                            vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit
                            nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore
                            ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et,
                            clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat
                            justo dolore sit invidunt.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="my-4">
                                    <img class="img-fluid w-100 rounded mb-3" src="{{ asset('assets/img/blog-1.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-4">
                                    <img class="img-fluid w-100 rounded mb-3" src="{{ asset('assets/img/blog-1.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <p>Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor
                            invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam
                            lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor
                            rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor
                            sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at
                            lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at
                            sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos.</p>
                        <p>Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores
                            vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit
                            nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore
                            ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et,
                            clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat
                            justo dolore sit invidunt.</p>
                    </div>
                    <!-- Blog Detail End -->

                    <!-- BELUM GUNAKAN DULU  FITUR COMMENT -->
                    <!-- Comment List Start --
                                                        <div class="mb-5">
                                                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                                                <h3 class="mb-0">3 Comments</h3>
                                                            </div>
                                                            <div class="d-flex mb-4">
                                                                <img src="{{ asset('assets/img/user.jpg') }}" class="img-fluid rounded"
                                                                    style="width: 45px; height: 45px;">
                                                                <div class="ps-3">
                                                                    <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                                                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                                                        accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                                                                    <button class="btn btn-sm btn-light">Reply</button>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-4">
                                                                <img src="{{ asset('assets/img/user.jpg') }}" class="img-fluid rounded"
                                                                    style="width: 45px; height: 45px;">
                                                                <div class="ps-3">
                                                                    <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                                                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                                                        accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                                                                    <button class="btn btn-sm btn-light">Reply</button>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex ms-5 mb-4">
                                                                <img src="{{ asset('assets/img/user.jpg') }}" class="img-fluid rounded"
                                                                    style="width: 45px; height: 45px;">
                                                                <div class="ps-3">
                                                                    <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                                                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                                                        accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                                                                    <button class="btn btn-sm btn-light">Reply</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Comment List End -->

                    <!-- Comment Form Start --
                                                        <div class="bg-light rounded p-5">
                                                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                                                <h3 class="mb-0">Leave A Comment</h3>
                                                            </div>
                                                            <form>
                                                                <div class="row g-3">
                                                                    <div class="col-12 col-sm-6">
                                                                        <input type="text" class="form-control bg-white border-0" placeholder="Your Name"
                                                                            style="height: 55px;">
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <input type="email" class="form-control bg-white border-0" placeholder="Your Email"
                                                                            style="height: 55px;">
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <input type="text" class="form-control bg-white border-0" placeholder="Website"
                                                                            style="height: 55px;">
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <textarea class="form-control bg-white border-0" rows="5" placeholder="Comment"></textarea>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <button class="btn btn-primary w-100 py-3" type="submit">Leave Your Comment</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- Comment Form End -->
                </div>

                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="Keyword">
                            <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                    <!-- Search Form End -->

                    <!-- Recent Post Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Recent Post</h3>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="{{ asset('assets/img/blog-1.jpg') }}"
                                style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem
                                ipsum dolor sit amet adipis elit
                            </a>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="{{ asset('assets/img/blog-2.jpg') }}"
                                style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem
                                ipsum dolor sit amet adipis elit
                            </a>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="{{ asset('assets/img/blog-3.jpg') }}"
                                style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem
                                ipsum dolor sit amet adipis elit
                            </a>
                        </div>
                    </div>
                    <!-- Recent Post End -->

                    <!-- Image Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <img src="{{ asset('assets/img/blog-1.jpg') }}" alt="" class="img-fluid rounded">
                    </div>
                    <!-- Image End -->

                    <!-- Tags Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Tag Cloud</h3>
                        </div>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="/" class="btn btn-light m-1">Design</a>
                            <a href="/" class="btn btn-light m-1">Development</a>
                            <a href="/" class="btn btn-light m-1">Marketing</a>
                            <a href="/" class="btn btn-light m-1">SEO</a>
                            <a href="/" class="btn btn-light m-1">Writing</a>
                            <a href="/" class="btn btn-light m-1">Consulting</a>
                            <a href="/" class="btn btn-light m-1">Design</a>
                            <a href="/" class="btn btn-light m-1">Development</a>
                            <a href="/" class="btn btn-light m-1">Marketing</a>
                            <a href="/" class="btn btn-light m-1">SEO</a>
                            <a href="/" class="btn btn-light m-1">Writing</a>
                            <a href="/" class="btn btn-light m-1">Consulting</a>
                        </div>
                    </div>
                    <!-- Tags End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </section>
    <!-- Blog End -->
@endsection('content')
