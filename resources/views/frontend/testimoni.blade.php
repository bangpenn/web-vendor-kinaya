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


{{-- <div class="slider d-flex justify-content-center text-align-center align-item-center">
    <div class="item">
        <iframe width="460" height="315" src="https://www.youtube.com/embed/tTXxkW1L3S4" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="item">
        <iframe width="460" height="315" src="https://www.youtube.com/embed/tTXxkW1L3S4" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="item">
        <iframe width="460" height="315" src="https://www.youtube.com/embed/tTXxkW1L3S4" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="item">
        <iframe width="460" height="315" src="https://www.youtube.com/embed/tTXxkW1L3S4" frameborder="0" allowfullscreen></iframe>
    </div>

</div> --}}

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <iframe class="d-block w-100" src="https://www.youtube.com/embed/tTXxkW1L3S4" frameborder="0" allowfullscreen height="500"></iframe>
        </div>
        <div class="carousel-item">
            <iframe class="d-block w-100" src="https://www.youtube.com/embed/tTXxkW1L3S4" frameborder="0" allowfullscreen height="500"></iframe>
        </div>
        <div class="carousel-item">
            <iframe class="d-block w-100" src="https://www.youtube.com/embed/tTXxkW1L3S4" frameborder="0" allowfullscreen height="500"></iframe>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


<div class="content-2-1 container-xxl mx-auto p-5  position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="text-center title-text">
        <h3 class="text-title">Apakah anda  vendor selanjutnya yang bekerja sama dengan kami</h3>
        <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
            Mari bergabung dengan kami dan rasakan perbedaannya!
        </p>
      </div>
</div>

@endsection
