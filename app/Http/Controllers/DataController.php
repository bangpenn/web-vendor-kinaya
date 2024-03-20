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
        return view('home');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
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
            'file_katalog' => 'required|file|mimes:pdf,xlsx,xls,doc,docx|max:20480' // maks 2MB
        ]);
        
        try {
            $user = new User();
            $user->name = $request->input('name');
            $user->no_telp = $request->input('no_telp');
            $user->email = $request->input('email');

            $user->save();
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Gagal menyimpan data user.']);
        }

        try {
            $data = new PerusahaanDetail();
            $data->nama_perusahaan = $request->input('nama_perusahaan');
            $data->kategori_bidang_perusahaan = $request->input('kategori_bidang_perusahaan');
            $data->nama_perusahaan = $request->input('nama_perusahaan');
            $data->jumlah_karyawan = $request->input('jumlah_karyawan');
            $data->no_telp_perusahaan = $request->input('no_telp_perusahaan');
            $data->email_perusahaan = $request->input('email_perusahaan');
            $data->sosmed_perusahaan = $request->input('sosmed_perusahaan');
            $data->provinsi = $request->input('provinsi');
            $data->kode_pos = $request->input('kode_pos');

            // Penanganan unggahan file
            if ($request->hasFile('hasil_jadi')) {
                $file = $request->file('hasil_jadi');
                $hasil_jadi = $file->store('public/video');
                $data->hasil_jadi = $hasil_jadi;
                if (!$hasil_jadi) {
                    return redirect()->back()->with('error', 'Gagal Menyimpan video');
                }
            }

            if ($request->hasFile('video_perusahaan')) {
                $file = $request->file('video_perusahaan');
                $video_perusahaan = $file->store('public/video');
                $data->video_perusahaan = $video_perusahaan;
                if (!$video_perusahaan) {
                    return redirect()->back()->with('error', 'Gagal Menyimpan video');
                }
            }
            if ($request->hasFile('file_katalog')) {
                $file = $request->file('file_katalog');
                $file_katalog = $file->store('public/file');
                $data->file_katalog = $file_katalog;
                if (!$file_katalog) {
                    return redirect()->back()->with('error', 'Gagal Menyimpan file');
                }
            }

            $data->save();

            return redirect()->route('form')
                             ->with('hasil_jadi', $data->hasil_jadi)
                             ->with('video_perusahaan', $data->video_perusahaan)
                             ->with('file_katalog', $data->file_katalog)
                             ->with('success','Data sukses tersimpan.');
        } catch (\Exception $e) {
            // Penanganan kesalahan jika penyimpanan data gagal
            if (isset($image_path)) {
                Storage::delete($image_path); // Hapus gambar produk jika penyimpanan data gagal
            }
            if (isset($video_path)) {
                Storage::delete($video_path); // Hapus video jika penyimpanan data gagal
            }
            if (isset($file_path)) {
                Storage::delete($file_path); // Hapus file jika penyimpanan data gagal
            }
            return redirect()->back()->withInput()->withErrors(['error' => 'Gagal menyimpan data.']);
        }

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}
