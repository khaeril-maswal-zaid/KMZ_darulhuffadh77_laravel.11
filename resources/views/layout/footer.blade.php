  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
          <div class="row gx-5">
              <div class="col-lg-4 col-md-6 footer-about">
                  <div
                      class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                      <a href="index.html" class="navbar-brand">
                          <h1 class="m-0 text-white">
                              <i class="fa fa-user-tie me-2"></i>Info 77
                          </h1>
                      </a>
                      <p class="mt-3 mb-4">
                          Lorem diam sit erat dolor elitr et, diam lorem justo amet clita
                          stet eos sit. Elitr dolor duo lorem, elitr clita ipsum sea. Diam
                          amet erat lorem stet eos. Diam amet et kasd eos duo.
                      </p>
                      <form action="">
                          <div class="input-group">
                              <input type="text" class="form-control border-white p-3" placeholder="Your Email" />
                              <button class="btn btn-dark">Sign Up</button>
                          </div>
                      </form>
                  </div>
              </div>
              <div class="col-lg-8 col-md-6">
                  <div class="row gx-5">
                      <div class="col-lg-6 offset-1 col-md-12 pt-5 mb-5">
                          <div class="section-title section-title-sm position-relative pb-3 mb-4">
                              <h3 class="text-light mb-0">Get In Touch</h3>
                          </div>
                          <div class="d-flex mb-2">
                              <i class="{{ $kontaks[0]->icon }} text-primary me-2"></i>
                              <p class="mb-0">{{ $kontaks[0]->medsos }}, Kab. Bone</p>
                          </div>
                          <div class="d-flex mb-2">
                              <i class="{{ $kontaks[1]->icon }} text-primary me-2"></i>
                              <p class="mb-0">{{ $kontaks[1]->akun }}</p>
                          </div>
                          <div class="d-flex mb-2">
                              <i class="{{ $kontaks[4]->icon }} text-primary me-2"></i>
                              <p class="mb-0">{{ $kontaks[4]->akun }}</p>
                          </div>
                          <div class="d-flex mt-4">
                              <a class="btn btn-primary btn-square me-2" href="{{ $kontaks[2]->link }}"><i
                                      class="{{ $kontaks[2]->icon }}"></i></a>
                              <a class="btn btn-primary btn-square me-2" href="{{ $kontaks[3]->link }}"><i
                                      class="{{ $kontaks[3]->icon }}"></i></a>
                          </div>
                      </div>
                      <div class="col-lg-5 col-md-12 pt-0 pt-lg-5 mb-5">
                          <div class="section-title section-title-sm position-relative pb-3 mb-4">
                              <h3 class="text-light mb-0">Main Links</h3>
                          </div>
                          <div class="link-animated d-flex flex-column justify-content-start">
                              <a class="text-light mb-2" href="#"><i
                                      class="bi bi-arrow-right text-primary me-2"></i>Tentang</a>
                              <a class="text-light mb-2" href="#"><i
                                      class="bi bi-arrow-right text-primary me-2"></i>Sejarah</a>
                              <a class="text-light mb-2" href="#"><i
                                      class="bi bi-arrow-right text-primary me-2"></i>Ma`ahad</a>
                              <a class="text-light mb-2" href="#"><i
                                      class="bi bi-arrow-right text-primary me-2"></i>Galery</a>
                              <a class="text-light mb-2" href="#"><i
                                      class="bi bi-arrow-right text-primary me-2"></i>Kontak</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="container-fluid text-white" style="background: #061429">
      <div class="container text-center">
          <div class="row justify-content-end">
              <div class="col-lg-8 col-md-6">
                  <div class="d-flex align-items-center justify-content-center" style="height: 75px">
                      <p class="mb-0">
                          &copy;
                          <a class="text-white border-bottom" href="/admindh">{{ config('app.name') }}</a>,
                          <span>All Rights Reserved.</span>

                          <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                          Designed by
                          <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="/admindh" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
