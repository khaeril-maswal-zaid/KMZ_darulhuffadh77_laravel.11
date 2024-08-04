@extends('layout.admin-template')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <form action="{{ route('kontak.update', $kontak->slug) }}" method="post">
            <div class="bg-light px-4 rounded">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                    <h1 class="h5">Edit Kontak Pontren {{ config('app.name') }}</h1>

                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                </div>
            </div>

            <div class="bg-light rounded h-100 p-4">
                @csrf
                @method('put')

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-2">
                            <input name="labelkontak" type="text"
                                class="form-control @error('labelkontak') is-invalid @enderror" id="labelkontak"
                                placeholder="Label Kontal" value="{{ old('labelkontak') ?? $kontak->medsos }}">
                            <label for="labelkontak">Label Kontak</label>
                            @error('labelkontak')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating mb-2">
                            <input name="akunkontak" type="text"
                                class="form-control @error('akunkontak') is-invalid @enderror" id="akunkontak"
                                placeholder="Label Kontal" value="{{ old('akunkontak') ?? $kontak->akun }}">
                            <label for="akunkontak">Akun Kontak</label>
                            @error('akunkontak')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating mb-2">
                            <input name="namekontak" type="text"
                                class="form-control @error('namekontak') is-invalid @enderror" id="namekontak"
                                placeholder="Label Kontal" value="{{ old('namekontak') ?? $kontak->nama }}">
                            <label for="namekontak">Name Kontak</label>
                            @error('namekontak')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating mb-2">
                            <input name="linkkontak" type="text"
                                class="form-control @error('linkkontak') is-invalid @enderror" id="linkkontak"
                                placeholder="Label Kontal" value="{{ old('linkkontak') ?? $kontak->link }}">
                            <label for="linkkontak">Link Kontak</label>
                            @error('linkkontak')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection('content')
