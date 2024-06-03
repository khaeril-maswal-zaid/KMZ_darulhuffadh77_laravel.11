@extends('layout.admin-template')

@section('content')
    <main class="ms-sm-auto p-md-4 pb-md-0">
        <div class="container-fluid px-0 rounded">
            <div
                class="d-flex bg-light justify-content-between flex-wrap flex-md-nowrap align-items-center px-3 pt-3 pb-2 mb-3">
                <h1 class="h4 id-table">Detail </h1>

                <!-- Button trigger modal -->
                <a href="/" class="btn btn-sm btn-primary">
                    Kembali
                </a>
            </div>

            <div class="row">
                <div class="col-lg-4" style="min-height: 500px;">
                    <div class="position-sticky" style="top: 5rem">
                        <img class="img-fluid w-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src=" {{ asset('assets/img/' . $blog->picture1) }} " style="object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="bg-light" style="min-height: 100%">
                        <div class="p-3">
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection('content')
