<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kontak;
use App\Models\Tholabah;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Auth;

class TholabahController extends Controller
{
    public function index(String $title, String $tingkatan, String $jk = 'all')
    {
        $paginate = (request('show')) ?: 24;

        //kalau pilih filter 'semua'
        if (request('angkatan') == 'all' && request('alamat') == 'all' && request('show' != '24')) {
            return back();
        }

        $getTholabah = Tholabah::where('jenis_kelamin', $jk)->where('kategori', $tingkatan)->nisdhName()->filter()->latest()->paginate($paginate);

        if ($jk == 'all') {
            $getTholabah = Tholabah::where('kategori', $tingkatan)->nisdhName()->filter()->latest()->paginate($paginate);
        }

        $data = [
            'title' => $title,
            'kontaks' => Kontak::all(),
            'tholabahs' => $getTholabah
        ];

        return view('tholabah.index', $data);
    }

    public function create(): View
    {
        $data = [
            'title' => 'Pendaftaran Calon Santri Baru',
            'kontaks' => Kontak::all(),
            'pimpinan' => Blog::select('picture1')->where('slug', 'profil-pimpinan-ust-saad-said')->firstOrFail()
        ];

        return view('penerimaan.pendaftaran', $data);
    }

    public function store(Request $request): RedirectResponse
    {
        //Validasi ------------------------------
        $request->validate(
            [
                'nik' => 'required|min_digits:16|max_digits:16|unique:tholabahs|numeric',
                'nama' => 'required|max:254',
                'jeniskelamin' => 'required',
                'tempatlahir' => 'required',
                'tanggallahir' => 'required',
                'provinsi' => 'required',
                'kabupaten' => 'required',
                'kecamatan' => 'required',
                'desa' => 'required',
                'namaayah' => 'required',
                'namaibu' => 'required',
                'pekerjaanayah' => 'required',
                'pekerjaanibu' => 'required',
                'kontakayah' => 'required',
                'kontakibu' => 'required',
                'experiment' => 'required',
                'nisn' => 'required|min_digits:10|max_digits:11|unique:tholabahs|numeric',
                'asalsekolah' => 'required',
                'tahuntamat' => 'required',

                'foto' => [
                    'required',
                    File::image()->max(400)
                ],
            ],

            //pesan
            [
                'nik.required' => 'NIK wajib diisi',
                'nik.numeric' => 'NIK wajib tidak valid, mesti angka',
                'nik.min_digits' => 'NIK tidak valid, mesti 16 karakter',
                'nik.max_digits' => 'NIK tidak valid, mesti 16 karakter',
                'nik.unique' => 'NIK telah terdaftar sebelumnya',

                'nama' => 'Nama wajib diisi',
                'jeniskelamin' => 'Jenis kelamin wajib diisi',
                'tempatlahir' => 'Tempat lahir wajib diisi',
                'tanggallahir' => 'Tanggal lahir wajib diisi',
                'provinsi' => 'Provinsi wajib diisi',
                'kabupaten' => 'Kabupaten wajib diisi',
                'kecamatan' => 'Kecamatan wajib diisi',
                'desa' => 'Desa wajib diisi',
                'namaayah' => 'Nama ayah wajib diisi',
                'namaibu' => 'Nama Ibu wajib diisi',
                'pekerjaanayah' => 'Pekerjaan Ayah wajib diisi',
                'pekerjaanibu' => 'Pekerjaan Ibu wajib diisi',
                'kontakayah' => 'Kontak Ibu wajib diisi',
                'kontakibu' => 'Kontak Ibu wajib diisi',
                'experiment' => 'Tamatan sekolah wajib diisi',

                'nisn.required' => 'NISN wajib diisi',
                'nisn.numeric' => 'NISN tidak valid, mesti angka',
                'nisn.unique' => 'NISN telah terdaftar sebelumnya',
                'nisn.min_digits' => 'NISN tidak valid, mesti 10 karakter',
                'nisn.max_digits' => 'NISN tidak valid, mesti 10 karakter',

                'asalsekolah' => 'Asal sekolah wajib diisi',
                'tahuntamat' => 'Tahun tamat wajib diisi',

                'foto.image' => 'Unggahan harus format picture',
                'foto.required' => 'Wajib unggah foto',
                'foto.max' => 'Size maksimal 400 kb',
            ]
        );

        //Ambil index pendaftar unutk NISDH berdasarkan JK
        $lastNisdh = Tholabah::select('nisdh')->where('jenis_kelamin', $request->input('jeniskelamin'))->latest()->first();
        $lastIndex = $lastNisdh ? substr($lastNisdh->nisdh, -3) : '000';
        $newIndex = str_pad((int)$lastIndex + 1, 3, '0', STR_PAD_LEFT);

        //KODE JK
        $kodeJk = $request->input('jeniskelamin') == 'Laki-laki' ? 1 : 0;

        $data = [
            'nik' => $request->input('nik'),
            'nama' => $request->input('nama'),
            'jenis_kelamin' => $request->input('jeniskelamin'),
            'tempat_lahir' => $request->input('tempatlahir'),
            'tanggal_lahir' => $request->input('tanggallahir'),
            'provinsi' => $request->input('provinsi'),
            'kabupaten' => $request->input('kabupaten'),
            'kecamatan' => $request->input('kecamatan'),
            'desa' => $request->input('desa'),
            'nama_ayah' => $request->input('namaayah'),
            'nama_ibu' => $request->input('namaibu'),
            'pekerjaan_ayah' => $request->input('pekerjaanayah'),
            'pekerjaan_ibu' => $request->input('pekerjaanibu'),
            'kontak_ayah' => $request->input('kontakayah'),
            'kontak_ibu' => $request->input('kontakibu'),
            'nisn' => $request->input('nisn'),
            'asal_sekolah' => $request->input('asalsekolah'),
            'tahun_tamat_sd' => $request->input('tahuntamat'),

            'experiment' => $request->input('experiment'),
            'nisdh' => date('Y') . $kodeJk . $request->input('experiment') . '77' . $newIndex, // Tahun + experiment + jk + index
            'angkatan' => date('Y'),

            'kategori_santri_baru' => 'Daftar',

            'kelas' => 'Calon Santri Baru',
            'active' => false,

            'kategori' => 'csb-165',

            'depertement' => 'csb-165',

            'kontak' => $request->input('kontakibu'),
            'marhalah' => 'csb-165',
            'tahun_alumni' => date('Y'),

            'picture' => $request->file('foto')->store('tholabahs'), //Sekaligus UPLOAD IMAGE
        ];

        Tholabah::create($data);
        return redirect()->route('pendaftaran.informasi')->with('success', true);
    }

    public function masterData($paramMasterdata): View
    {
        $jkAdmin = Auth::user()->jenis_kelamin;

        switch ($paramMasterdata) {
            case 'santri-baru':
                $namePage = Auth::user()->jenis_kelamin == 'Laki-laki' ? 'Santri Baru' : 'Santriwati Baru';
                $tableHead  = ['Nama', 'Tempat Tanggal Lahir', 'Alamat', 'Tahun Tamat SD/SMP', 'Kategori'];
                $tableBody  = ['id', 'kategori_santri_baru', 'nama', 'kategori', 'nisdh', 'tempat_lahir', 'tanggal_lahir', 'kabupaten', 'provinsi', 'tahun_tamat_sd', 'experiment'];

                $masterdatas = Tholabah::select($tableBody)->where('jenis_kelamin', $jkAdmin)->where('kategori', 'csb-165')->nisdhName()->latest()->paginate(10);
                break;

            case 'santri':
                $namePage = Auth::user()->jenis_kelamin == 'Laki-laki' ? 'Santri' : 'Santriwati';
                $tableHead  = ['Nama', 'Tempat Tanggal Lahir', 'Kelas', 'Kategori', 'Status'];
                $tableBody  = ['id', 'kategori_santri_baru', 'nama', 'kategori', 'nisdh', 'tempat_lahir', 'tanggal_lahir', 'kelas', 'experiment', 'active'];

                $masterdatas = Tholabah::select($tableBody)->where('jenis_kelamin', $jkAdmin)->where('kategori', 'Tholabun')->nisdhName()->latest()->paginate(10);
                break;

            case 'pembina':
                $namePage = 'Pembina';
                $tableHead  = ['Nama', 'Alamat', 'Depertement', 'Marhalah', 'Tahun Alumni'];
                $tableBody  = ['id', 'kategori_santri_baru', 'nama', 'kategori', 'nisdh', 'kabupaten', 'provinsi',  'depertement', 'marhalah', 'tahun_alumni'];

                $masterdatas = Tholabah::select($tableBody)->where('jenis_kelamin', $jkAdmin)->where('kategori', 'Pembina')->nisdhName()->latest()->paginate(10);
                break;

            case 'pengabdian-luar':
                $namePage = 'Pengabdian Luar';
                $tableHead  = ['Nama', 'Alamat', 'Kontak', 'Marhalah', 'Tahun Alumni'];
                $tableBody  =  ['id', 'kategori_santri_baru', 'nama', 'kategori', 'nisdh', 'kabupaten', 'provinsi',  'kontak', 'marhalah', 'tahun_alumni'];

                $masterdatas = Tholabah::select($tableBody)->where('jenis_kelamin', $jkAdmin)->where('kategori', 'Pengabdian luar')->nisdhName()->latest()->paginate(10);
                break;

            case 'alumni':
                $namePage = 'Alumni';
                $tableHead  = ['Nama', 'Alamat', 'Kontak', 'Marhalah', 'Tahun Alumni'];
                $tableBody  =  ['id', 'kategori_santri_baru', 'nama', 'kategori', 'nisdh', 'kabupaten', 'provinsi',  'kontak', 'marhalah', 'tahun_alumni'];

                $masterdatas = Tholabah::select($tableBody)->where('jenis_kelamin', $jkAdmin)->where('kategori', 'Alumni')->nisdhName()->latest()->paginate(10);
                break;
        }

        $data = [
            'searcher' => 'NISDH/Name ' . $namePage,
            'datamasters' => $masterdatas,
            'namepages' => $namePage,
            'tableheads' => $tableHead,
            'tablebodys' => $tableBody,
            'parammasterdata' => $paramMasterdata,
        ];

        return view('admin.master-data', $data);
    }

    public function show($paramMasterdata, Tholabah $tholabah): View
    {
        switch ($paramMasterdata) {
            case 'santri-baru':
                $namePage = Auth::user()->jenis_kelamin == 'Laki-laki' ? 'Detail Santri Baru' : 'Detail Santriwati Baru';
                break;

            case 'santri':
                $namePage = Auth::user()->jenis_kelamin == 'Laki-laki' ? 'Detail Santri' : 'Detail Santriwati';
                break;

            case 'pembina':
                $namePage = 'Detail Pembina';
                break;

            case 'pengabdian-luar':
                $namePage = 'Detail Pengabdian Luar';
                break;

            case 'alumni':
                $namePage = 'Detail Alumni';
                break;
        }


        //Jika yang login tidak sesuai jk admin dan jk tholabah
        if (Auth::user()->jenis_kelamin != $tholabah->jenis_kelamin) {
            return  view('errors.404');
        }

        // dd($tholabah);

        $data = [
            'details' => $tholabah,
            'parammasterdata' => $paramMasterdata,
            'namepage' => $namePage,
        ];

        return view('admin.master-data-detail', $data);
    }

    public function terimaSantriBaru(Request $request, Tholabah $tholabah): RedirectResponse
    {
        $request->validate(
            [
                'kategorisantribaru' => 'required',
            ],
            [
                'kategorisantribaru' => 'Proses gagal !' //Belum digunakan
            ]
        );

        $tholabah->update(['kategori_santri_baru' => $request->input('kategorisantribaru')]);
        return redirect()->route('masterdata.index', 'santri-baru')->with('success', 'Registration status has been successfully verified.');
    }

    public function activateTholabah(Request $request, Tholabah $tholabah): RedirectResponse
    {
        $request->validate(
            [
                'statussantri' => 'required',
            ],
            [
                'statussantri' => 'Proses gagal !' //Belum digunakan
            ]
        );

        $tholabah->update(['active' => $request->input('statussantri')]);
        return redirect()->route('masterdata.index', 'santri')->with('success', 'Status has been successfully changed.');
    }

    public function abdianinTholabah(Request $request, Tholabah $tholabah): RedirectResponse
    {
        $request->validate(
            [
                'depertement' => 'required',
            ],
            [
                'depertement' => 'Proses gagal !' //Belum digunakan
            ]
        );

        $tholabah->update(['depertement' => $request->input('depertement'), 'kategori' => 'Pembina']);
        return redirect()->route('masterdata.index', 'pengabdian-luar')->with('success', 'Service status has been successfully changed.');
    }

    public function abdianTholabah(Tholabah $tholabah): RedirectResponse
    {
        $data = [
            'kategori' => 'Pengabdian luar',
            'depertement' => 'Pengabdian luar'
        ];

        $tholabah->update($data);
        return redirect()->route('masterdata.index', 'pembina')->with('success', 'Service status has been successfully changed.');
    }

    public function destroy(Tholabah $tholabah)
    {
        $tholabah->delete();
        return redirect()->route('masterdata.index', 'santri-baru')->with('warning', 'Data has been successfully deleted. This data cannot be restored.');
    }
}
