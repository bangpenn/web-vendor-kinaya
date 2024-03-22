<?php

namespace app\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // $user = Auth::user(); // Mendapatkan informasi pengguna yang saat ini masuk
        $usersWithPerusahaanDetails = User::with('perusahaan_detail')->get();
        $totalVendors = $usersWithPerusahaanDetails->count();

        return view('admin.dashboard', compact('usersWithPerusahaanDetails', 'totalVendors'));
    }

    // public function search(Request $request)
    // {
    //     $keyword = $request->search;

    //     $results = User::where('nama_distributor', 'like', '%' . $keyword . '%')
    //     ->orWhere('nama_umkm', 'like', '%'.$keyword.'%')
    //     ->orWhere('jenis_vendor', 'like', '%'.$keyword.'%')
    //     ->orWhere('kategori_vendor', 'like', '%'.$keyword.'%')
    //     ->orWhere('kota', 'like', '%'.$keyword.'%')
    //     ->orWhere('provinsi', 'like', '%'.$keyword.'%')
    //     ->get();
    //     return view('admin.result', [
    //         'keyword' => $keyword,
    //         'data' => $results
    //     ]);

        // $query = $request->input('search');

        // // Lakukan logika pencarian sesuai dengan kebutuhan aplikasi Anda
        // $results = Data::where(function($queryBuilder) use ($query) {
        //     $queryBuilder->where('nama_distributor', 'like', '%'.$query.'%')
        //                 ->orWhere('nama_umkm', 'like', '%'.$query.'%')
        //                 ->orWhere('jenis_vendor', 'like', '%'.$query.'%')
        //                 ->orWhere('kategori_vendor', 'like', '%'.$query.'%');
        // })->get();

        // return view('admin.result', compact('results'));
    // }

}