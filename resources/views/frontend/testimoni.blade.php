@extends('frontend.layouts.main')

@section('title', 'Testimoni')

@section('content')

<div class="content-2-1 container-xxl mx-auto p-5  position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="text-center title-text">
        <h1 class="text-title">Testimoni</h1>
        <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
            Testimoni dari para pelanggan kami adalah bukti kepuasan terhadap layanan dan produk yang kami tawarkan. Kami
            bangga melihat bagaimana desain interior dari Kinaya Interior mengubah ruang-ruang menjadi tempat yang
            indah dan nyaman untuk ditempati.
        </p>
      </div>
</div>


    <div class="owl-carousel owl-theme p-4">
        <div class="card">
            <img src="{{ asset('frontend/img/BBIB SINGOSARI.webp') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">BBIB SINGOSARI</h5>
              <p class="card-text">Kegiatan Berita Acara Serah Terima pekerjaan dengan pihak BBIB SINGOSARI</p>
              <p class="card-text"><small class="text-muted">Kinaya Interior</small></p>
            </div>
          </div>
          <div class="card">
            <img src="{{ asset('frontend/img/16 9.webp') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">KPP PRATAMA SBY WONOCOLO</h5>
              <p class="card-text">Kegiatan Berita Acara Serah Terima pekerjaan dengan pihak KPP PRATAMA SURABAYA WONOCOLO</p>
              <p class="card-text"><small class="text-muted">Kinaya Interior</small></p>
            </div>
          </div>
          <div class="card">
            <img src="{{ asset('frontend/img/BANK JATIM KANTOR PUSAT.webp') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">BANK JATIM PUSAT</h5>
              <p class="card-text">Kegiatan Berita Acara Serah Terima dengan pihak Bank Jatim Pusat untuk Ruang Workstation.</p>
              <p class="card-text"><small class="text-muted">Kinaya Interior</small></p>
            </div>
          </div>
          <div class="card">
            <img src="{{ asset('frontend/img/KPP PRATAMA SBY TEGALSARI.webp') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">KPP PRATAMA SBY TEGALSARI</h5>
              <p class="card-text">Kegiatan Berita serah terima pekerjaan dengan pihak KPP PRATAMA SURABAYA TEGALSARI</p>
              <p class="card-text"><small class="text-muted">Kinaya Interior</small></p>
            </div>
          </div>

        </div>

    <div class="d-flex justify-content-center align-items-center pb-4">
        <button class="owl-prev btn btn-warning text-white rounded-circle h-12 w-12 d-flex justify-content-center align-items-center mr-4" type="button">&#10094;</button>
        <button class="owl-next btn btn-warning text-white rounded-circle h-12 w-12 d-flex justify-content-center align-items-center ml-4" type="button">&#10095;</button>
    </div>




<div class="content-2-1 container-xxl mx-auto p-5  position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="text-center title-text">
        <h3 class="text-title">Apakah anda  vendor selanjutnya yang bekerja sama dengan kami</h3>
        <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
            Mari bergabung dengan kami dan rasakan perbedaannya! Bersama-sama, kita dapat mencapai kesuksesan yang luar biasa dalam bisnis dan menciptakan hasil yang luar biasa untuk pelanggan kita.
        </p>
      </div>
</div>

@endsection
