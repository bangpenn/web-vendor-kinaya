<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerusahaanDetail extends Model
{
    use HasFactory;

    public $table = 'info_perusahaan';

    protected $dates = [
        'updated_at',
        'created_at'
    ];

    protected $fillable = [
        'users_id',
        'kategori_bidang_perusahaan',
        'nama_perusahaan',
        'jumlah_karyawan',
        'hasil_jadi',
        'video_perusahaan',
        'file_katalog',
        'no_telp_perusahaan',
        'email_perusahaan',
        'sosmed_perusahaan',
        'alamat_perusahaan',
        'kota',
        'provinsi',
        'kode_pos',

    ];


    // One to one
    public function user()
    {
        return $this->belongsTo('App/Models/User', 'users_id', 'id');
    }


}
