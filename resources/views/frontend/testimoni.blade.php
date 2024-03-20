@extends('frontend.layouts.main')

@section('title', 'Testimoni')

@section('content')

<div class="title-testimoni d-flex justify-content-center text-align-center align-item-center py-4">
    <h1 style="font-size: 26px; font-weight:400;">
        Testimoni vendor yang sudah bekerja sama dengan kami
    </h1>
</div>

<div class="slider d-flex justify-content-center text-align-center align-item-center">
    <div class="item">
        <img src="{{ asset('frontend/img/1.png') }}" alt="">
    </div>
    <div class="item">
        <img src="{{ asset('frontend/img/2.jpg') }}" alt="">
    </div>
    <div class="item">
        <img src="{{ asset('frontend/img/3.jpg') }}" alt="">
    </div>
    <div class="item">
        <img src="{{ asset('frontend/img/4.png') }}" alt="">
    </div>
</div>

<div class="desc-testimoni d-flex justify-content-center text-align-center align-item-center py-4">
    <h1 style="font-size: 26px; font-weight:400;">
        Apakah anda  vendor selanjutnya yang bekerjasama dengan kami
    </h1>
</div>

@endsection
