<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tholabah extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'desa',
        'nama_ayah',
        'nama_ibu',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'kontak_ayah',
        'kontak_ibu',
        'nisn',
        'asal_sekolah',
        'tahun_tamat_sd',

        'experiment',
        'nisdh',
        'angkatan',

        'kategori_santri_baru',

        'kelas',
        'active',

        'kategori',

        'depertement',

        'kontak',
        'marhalah',
        'tahun_alumni',

        'picture',
    ];

    public function scopeNisdhName(Builder $query): void
    {
        $query->where('nisdh', 'like', '%' . request('search') . '%')->orWhere('nama', 'like', '%' . request('search') . '%');
    }
}
