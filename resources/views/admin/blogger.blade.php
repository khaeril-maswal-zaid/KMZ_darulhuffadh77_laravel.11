@extends('layout.admin-template')

@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded h-100 p-4">
            <h1 class="mb-4 h5">BLOG
                {{ $blogs[0]->kategori->category == 'khusus-umum-165' ? 'Default' : Str::upper(Str::replace('-', ' ', $blogs[0]->kategori->category)) }}
            </h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Tanggal</th>
                        <th scope="col" class="text-center">Judul</th>
                        <th scope="col" class="text-center">Author</th>
                        <th scope="col" class="text-center">Visit</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $index => $blog)
                        <tr>
                            <th scope="row">{{ $blogs->firstItem() + $index }}</th>
                            <td class="align-middle text-center">{{ $blog->created_at }}</td>
                            <td class="align-middle">{{ $blog->title }} </td>
                            <td class="align-middle">{{ $blog->author->name }} </td>
                            <td class="align-middle text-center">{{ $blog->visit }}</td>
                            <td class="text-center">
                                <a href="/" class="btn btn-success btn-sm">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $blogs->onEachSide(0)->links() }}
        </div>
    </div>
    <!-- Table End -->
@endsection('content')
