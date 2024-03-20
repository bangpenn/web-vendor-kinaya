@extends('frontend.layouts.main')

@section('title', 'Testimoni')

@section('content')

<div class="content-2-1 container-xxl mx-auto p-5  position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="text-center title-text">
        <h1 class="text-title">Kenapa bergabung dengan kami</h1>
        <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit sit iusto doloribus, incidunt minus quos!
        </p>
      </div>
</div>


<div class="slider d-flex justify-content-center text-align-center align-item-center">
    <div class="item">
        <img src="{{ asset('frontend/img/4.png') }}" alt="">
    </div>
    <div class="item">
        <img src="{{ asset('frontend/img/4.png') }}" alt="">
    </div>
    <div class="item">
        <img src="{{ asset('frontend/img/4.png') }}" alt="">
    </div>
    <div class="item">
        <img src="{{ asset('frontend/img/4.png') }}" alt="">
    </div>
    <div class="item">
        <img src="{{ asset('frontend/img/4.png') }}" alt="">
    </div>
</div>


<div class="content-2-1 container-xxl mx-auto p-5  position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="text-center title-text">
        <h3 class="text-title">Apakah anda  vendor selanjutnya yang bekerjasama dengan kami</h3>
        <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit sit iusto doloribus, incidunt minus quos!
        </p>
      </div>
</div>

@endsection
