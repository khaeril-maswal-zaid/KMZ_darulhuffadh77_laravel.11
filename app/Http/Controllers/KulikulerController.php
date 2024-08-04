<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kulikuler;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class KulikulerController extends Controller
{
    public function index(): View
    {
        $kulikulers =  Kulikuler::all();
        $data = [
            'kulikulers' => $kulikulers
        ];

        return view('admin.master-kulikuler', $data);
    }

    public function store(Request $request): RedirectResponse
    {
        $dataKulikuler = [
            'enum' => Str::slug($request->input('nameprogram'), '-'),
            'name' => $request->input('nameprogram'),
            'full_name' => $request->input('fullname'),
            'description' => $request->input('deskripsi'),
        ];

        $dataBlog = [
            'category_id' => 5,
            'user_id' => $request->user()->id,
            'oleh' => $request->user()->name,
            'slug' => Str::slug($request->input('nameprogram'), '-'),
            'title' => $request->input('nameprogram'),
            'excerpt' => $request->input('fullname'),
            'body1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis commodi, ratione soluta, accusamus beatae quidem nesciunt doloribus consequatur animi veritatis molestias atque. Cumque adipisci inventore totam reprehenderit ratione molestiae magnam? Libero ipsam qui rem deleniti explicabo vel commodi molestias reiciendis expedita aliquam asperiores nihil quibusdam eveniet voluptates iure cum illo molestiae repudiandae in perspiciatis, voluptate hic culpa? Accusantium repellat nihil voluptate est, beatae facere eveniet temporibus. ',
            'body2' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis commodi, ratione soluta, accusamus beatae quidem nesciunt doloribus consequatur animi veritatis molestias atque. Cumque adipisci inventore totam reprehenderit ratione molestiae magnam? Libero ipsam qui rem deleniti explicabo vel commodi molestias reiciendis expedita aliquam asperiores nihil quibusdam eveniet voluptates iure cum illo molestiae repudiandae in perspiciatis, voluptate hic culpa? Accusantium repellat nihil voluptate est, beatae facere eveniet temporibus.',
            'picture1' => 'blog/blog-1.jpg',
            'picture2' => 'blog/blog-2.jpg',
            'picture3' => 'blog/blog-3.jpg',
            'album' => ($request->user()->jenis_kelamin == 'Laki-laki' ? 1 : 0),
            'visit' => 50,
        ];

        Blog::create($dataBlog);

        Kulikuler::create($dataKulikuler);
        return redirect()->route('index.hardsoftskill')->with('success', 'Program Hard & Soft Skill Addition Successful');
    }

    public function destroy(Kulikuler $kulikuler)
    {
        $blog = Blog::where('slug', $kulikuler->enum)->firstOrFail();

        //HAPUS FOTO LAMA
        Storage::delete($blog->picture1);
        Storage::delete($blog->picture2);
        Storage::delete($blog->picture3);

        $blog->delete();

        $kulikuler->delete();
        return redirect()->route('index.hardsoftskill')->with('warning', 'Data has been successfully deleted. This data cannot be restored.');
    }
}
