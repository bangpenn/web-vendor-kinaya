<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PerusahaanDetail;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{
    public function index()
    {
        return view('frontend/home');
    }

    public function store(Request $request)
    {
        // Validasi untuk data PIC dan data Perusahaan
        $request->validate([
            'name' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'password' => 'required',
            'nama_perusahaan' => 'required',
            'kategori_bidang_perusahaan' => 'required',
            'jumlah_karyawan' => 'required',
            'no_telp_perusahaan' => 'required',
            'email_perusahaan' => 'required',
            'sosmed_perusahaan' => 'required',
            'alamat_perusahaan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required',
            'hasil_jadi' => 'required|mimes:mp4,mov,avi|max:102400',
            'video_perusahaan' => 'required|mimes:mp4,mov,avi|max:102400',
            'file_katalog' => 'required|file|mimes:pdf,xlsx,xls,doc,docx|max:20480' 
        ]);
        
        try {
            $user = new User();
            $user->name = $request->input('name');
            $user->no_telp = $request->input('no_telp');
            $user->email = $request->input('email');
            $user->password = $request->input('password');
            $user->save();
    
            $data = new PerusahaanDetail();
            $data->users_id = $user->id;
            $data->nama_perusahaan = $request->input('nama_perusahaan');
            $data->kategori_bidang_perusahaan = $request->input('kategori_bidang_perusahaan');
            $data->jumlah_karyawan = $request->input('jumlah_karyawan');
            $data->no_telp_perusahaan = $request->input('no_telp_perusahaan');
            $data->email_perusahaan = $request->input('email_perusahaan');
            $data->sosmed_perusahaan = $request->input('sosmed_perusahaan');
            $data->provinsi = $request->input('provinsi');
            $data->kode_pos = $request->input('kode_pos');
            $data->alamat_perusahaan = $request->input('alamat_perusahaan');
            $data->kota = $request->input('kota');
    
            // Penanganan unggahan file
            $data->hasil_jadi = $request->file('hasil_jadi')->store('public/video');
            $data->video_perusahaan = $request->file('video_perusahaan')->store('public/video');
            $data->file_katalog = $request->file('file_katalog')->store('public/file');
    
            $data->save();
    
            return redirect()->route('form')
                             ->with('hasil_jadi', $data->hasil_jadi)
                             ->with('video_perusahaan', $data->video_perusahaan)
                             ->with('file_katalog', $data->file_katalog)
                             ->with('success','Data sukses tersimpan.');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->withInput()->withErrors(['error' => 'Gagal menyimpan data.']);
        }
    }
    
}
