<?php

namespace app\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class VendorController extends Controller
{
    public function showProfile($id)
    {
    // Cari data vendor berdasarkan ID
    $vendor = User::with('perusahaan_detail')->find($id);

    // // dd($vendor);

    //     if ($vendor !== null) {
    //         // Jika ditemukan, tampilkan view dengan data vendor
    //         return view('admin.vendor_profile', compact('vendor'));
    //     } else {
    //         // Jika tidak ditemukan, redirect kembali dengan pesan error
    //         return redirect()->back()->with('error', 'Data not found.');
    //     }

        if ($vendor !== null) {
            // Data vendor ditemukan
            $imagePath = $vendor->image;
            $videoPath = $vendor->video;
            $filePath = $vendor->file;
            return view('admin.vendor', compact('vendor', 'imagePath', 'videoPath', 'filePath'));
        } else {
            // Data vendor tidak ditemukan, lakukan penanganan yang sesuai
            return redirect()->back()->with('error', 'Data vendor tidak ditemukan.');
        }

    }

}