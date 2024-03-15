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
        'kategori_perusahaan',
        'nama_perusahaan',
        'no_telp_perusahaan',
        'email_perusahaan',
        'alamat_perusahaan',
    ];


    // One to one
    public functiion user()
    {
        return $this->belongsTo('App/Models/User', 'users_id', 'id');
    }


}