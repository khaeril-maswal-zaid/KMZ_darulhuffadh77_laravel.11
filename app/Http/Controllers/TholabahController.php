<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Tholabah;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class TholabahController extends Controller
{
    public function index(Tholabah $tholabah, String $tingkatan, String $jk = 'all'): View
    {
        // dd($tingkatan, $jk);

        $getTholabah = $tholabah::where('kategori_santri_baru', 'Done')->where('jenis_kelamin', $jk)->where('kategori', $tingkatan)->paginate(24);

        if ($jk == 'all') {
            $getTholabah = $tholabah::where('kategori_santri_baru', 'Done')->where('kategori', $tingkatan)->paginate(24);
        }

        $data = [
            'title' => $tingkatan,
            'kontaks' => Kontak::all(),
            'tholabahs' => $getTholabah
        ];

        return view('tholabah.index', $data);
    }

    public function create(): View
    {
        $data = [
            'title' => 'Pendaftaran Calon Santri Baru',
            'kontaks' => Kontak::all()
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
                    'required', File::image()->max(400)
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
        $lastNisdh = Tholabah::select('nisdh')->where('jenis_kelamin', $request->input('jeniskelamin'))->orderBy('id', 'desc')->first();
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

    public function informasiPendaftaran(): View
    {
        $data = [
            'title' => 'Penerimaan Santri Baru',
            'kontaks' => Kontak::all()
        ];
        return view('penerimaan.index', $data);
    }

    public function masterData(Tholabah $tholabah, $tingkatan, $santriBaru): View
    {
        $jkAdmin = Auth::user()->jenis_kelamin;

        if ($santriBaru) {
            $datamaster = $tholabah::where('jenis_kelamin', $jkAdmin)->where('kategori', 'csb-165')->whereNot('kategori_santri_baru', 'Done')->orderBy('id', 'desc')->paginate(10);
        } else {
            $datamaster = $tholabah::where('jenis_kelamin', $jkAdmin)->where('kategori', $tingkatan)->where('kategori_santri_baru', 'Done')->orderBy('id', 'desc')->paginate(10);
        }


        $data = [
            'datamasters' => $datamaster
        ];

        return view('admin.master-data', $data);
    }

    public function show(Tholabah $tholabah): View
    {
        //Jika yang login tidak sesuai jk admin dan jk tholabah
        if (Auth::user()->jenis_kelamin != $tholabah->jenis_kelamin) {
            return  view('errors.404');
        }

        $data = [
            'details' => $tholabah,
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
        return redirect()->route('masterdata.santribaru')->with('success', true);
    }

    public function destroy(Tholabah $tholabah)
    {
        $tholabah->delete();
        return redirect()->route('masterdata.santribaru')->with('success', true);
    }
}
