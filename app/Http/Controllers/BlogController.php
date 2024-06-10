<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Kontak;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\File;

class BlogController extends Controller
{
    public function index(): View
    {
        $data = [];
        return view('blog.index', $data);
    }

    public function show(Blog $blog): View
    {
        $data = [
            'title' => $blog->title,
            'kontaks' => Kontak::all(),
            'blog' => $blog
        ];

        return view('blog.detail', $data);
    }

    public function profilPimpinan(Blog $blog): View
    {
        $data = [
            'title' => $blog->title,
            'kontaks' => Kontak::all(),
            'blog' => $blog
        ];

        return view('blog.profilpimpinan', $data);
    }

    public function tentangKulikuler(Blog $blog): View
    {
        $data = [
            'title' => $blog->title,
            'kontaks' => Kontak::all(),
            'blog' => $blog
        ];

        return view('blog.tentang-kulikuler', $data);
    }

    public function blogger(Blog $blog, $kategori): View
    {
        $kategori = ($kategori == 'default') ? 'khusus-umum-165' : $kategori;

        $blogs = $blog::whereHas('kategori', function (Builder $query) use ($kategori) {
            $query->where('category', $kategori);
        })->orderBy('id', 'desc')->paginate(10);

        $data = [
            'blogs' => $blogs
        ];

        return view('admin.blogger', $data);
    }

    public function tentangProfil(Blog $blog): View
    {
        $data = [
            'title' => '',
            'blog' => $blog
        ];

        return view('admin.tentang-profil', $data);
    }

    public function forAdminKulikuler(Blog $blog): View
    {
        $data = [
            'title' => '',
            'blog' => $blog
        ];

        return view('admin.tentang-kulikuler', $data);
    }

    public function store(Request $request): RedirectResponse
    {
        //Validasi
        $request->validate([
            'categoryid' => 'required|numeric|exists:blog_categories,id',
            'oleh' => 'required',
            'olehlainnya' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'bodyartikel1' => 'required',
            'bodyartikel2' => 'required',
            'image1' => ['required', File::image()->max(400)],
            'image2' => ['required', File::image()->max(400)],
            'image3' => ['required', File::image()->max(400)],
        ], [
            'categoryid.required' => 'TERJADI KESALAHAN, categoryid is must be required',
            'categoryid.numeric' => 'TERJADI KESALAHAN, categoryid is must be numeric and exists on database',
            'categoryid.exists' => 'TERJADI KESALAHAN, categoryid is must be exists on database',

            'oleh' => 'Wajib menentukan Author',
            'olehlainnya' => 'Wajib menentukan Author',
            'judul' =>  'Judul wajib diisi',
            'deskripsi' =>  'Deskripsi wajib diisi',
            'bodyartikel1' =>  'Artikel bagian 1 wajib diisi',
            'bodyartikel2' =>  'Artikel bagian 2 wajib diisi',
            'image1.required' =>  'Wajib upload image',
            'image1.required' =>  'Wajib upload image',
            'image1.required' =>  'Wajib upload image',

            'image1.image' => 'Unggahan harus format picture',
            'image1.required' => 'Wajib unggah image',
            'image1.max' => 'Size maksimal 400 kb',

            'image2.image' => 'Unggahan harus format picture',
            'image2.required' => 'Wajib unggah image',
            'image2.max' => 'Size maksimal 400 kb',

            'image3.image' => 'Unggahan harus format picture',
            'image3.required' => 'Wajib unggah image',
            'image3.max' => 'Size maksimal 400 kb',
        ]);

        //atur oleh
        // ($request->input('olehlainnya') ? $oleh = $request->input('olehlainnya') : $oleh = $request->input('oleh'));

        $data = [
            'category_id' => $request->input('categoryid'),
            'user_id' => $request->user()->id,
            'oleh' => $request->input('olehlainnya'),
            'slug' => Str::of($request->input('judul'))->slug('-'),
            'title' => $request->input('judul'),
            'excerpt' => $request->input('deskripsi'),
            'body1' => $request->input('bodyartikel1'),
            'body2' => $request->input('bodyartikel2'),
            'picture1' => $request->file('image1')->store('blog'),
            'picture2' => $request->file('image2')->store('blog'),
            'picture3' => $request->file('image3')->store('blog'),
            'album' => ($request->user()->jenis_kelamin == 'Laki-laki' ? 1 : 0),
            'visit' => 50
        ];

        //cari nama kategori sesuai id kategori yang di kirim
        $kategori = BlogCategory::findOrFail($request->input('categoryid'))->category;

        Blog::create($data);
        return redirect()->route('blogger', $kategori)->with('success', 'Article Addition Successful');
    }
}
