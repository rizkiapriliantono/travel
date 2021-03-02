@extends('layouts.success')
@section('title','Checkout Success')

@section('content')
<main>
    <div class="section-success d-flex align-items-center">
      <div class="col text-center">
        <img src="{{ url('frontend/images/selesai.png') }}" alt="">
        <h1>Selamat! Berhasil</h1>
        <p>
          Kami akan mengirimkan email kepada anda untuk  
            <br />
            instruksi perjalanan tolong dibaca
        </p>
        <a href="{{ url('/') }}" class="btn btn-home-page mt-3 px-5">
          Home 
        </a>
      </div>
    </div>
  </main>
@endsection