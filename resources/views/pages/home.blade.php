@extends('layouts.app')

@section('title')
ISKANDARIA
@endsection

@section('content')
<!--Header -->
<header class="text-center">
    <h1 style="color:#000000">
        Jelajahi Indonesia 
        <br />
        Dengan Satu Sentuhan
    </h1>
    <a href="#popularContent" class="btn btn-get-started px-4 mt-4">
        Ayo Mulai
    </a>
    </header>
    <main>
    <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
        <div class="col-3 col-md-2 stats-detail">
            <h2>500</h2>
            <p>Anggota</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
            <h2>12</h2>
            <p>Kota</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
            <h2>10</h2>
            <p>Hotel</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
            <h2>10</h2>
            <p>Kerjasama</p>
        </div>
        </section>
    </div>
    <section class="section-popular" id="popular">
        <div class="container">
        <div class="row">
            <div class="col text-center section-popular-heading">
            <h2>Wisata Populer</h2>
            </div>
        </div>
        </div>
    </section>
    <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div
                            class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/home seminyak.jpg');">
                            <div class="travel-location">Seminyak Luxury Honeymoon
                                <p>Bali</p>
                            </div>
                            <div class="travel-button mt-auto">
                            <a href="http://127.0.0.1:8000/detail/seminyak-luxury-honeymoon" class="btn btn-travel-details px-4">
                                Lihat Detail
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div
                            class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/home bali family.jpg');">
                            <div class="travel-location">Bali Family Holiday
                                <p>Bali</p>
                            </div>
                            <div class="travel-button mt-auto">
                            <a href="http://127.0.0.1:8000/detail/bali-family-holiday" class="btn btn-travel-details px-4">
                                Lihat Detail
                            </a>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                            <div
                            class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/home jogja.jpg');">
                            <div class="travel-location">Daerah Istimewa Yogyakarta
                                <p>Yogyakarta</p>
                            </div>
                            <div class="travel-button mt-auto">
                            <a href="http://127.0.0.1:8000/detail/yogyakarta" class="btn btn-travel-details px-4">
                                Lihat Detail
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                            <div
                            class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/lombok.jpg');">
                            <div class="travel-location">Lombok
                                <p>Nusa Tenggara Barat</p>
                            </div>
                            <div class="travel-button mt-auto">
                            <a href="http://127.0.0.1:8000/detail/lombok" class="btn btn-travel-details px-4">
                                Lihat Detail
                            </a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <section class="section-testimonials-heading" id="testimonialsHeading">
        <div class="container">
        <div class="row">
        </div>
        </div>
    </section>
    <section class="section-testimonials-content" id="testimonialsContent">
    <div class="container">
        <div class="col text-center">
            <h2>Testimoni Para Peserta</h2>
            <p>
                Moment Kebersamaan Adalah
                <br />
                Pengalaman Terbaik
            </p>
            </div>
        <div
        class="section-popular-travel row justify-content-center match-height"
        >
        <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
            <div class="testimonial-content">
                <img
                src="{{ url('frontend/images/bagas.png') }}"
                alt=""
                class="mb-4 rounded-circle"
                />
                <h3 class="mb-4">Bagas Albasith</h3>
                <p class="testimonials">
                "Terima kasih atas bantuan website ini
                kita lebih mudah melakukan kegiatan traveling kita" 
                </p>
            </div>
            <hr />
            <p class="trip-to mt-2">Trip ke Ubud</p>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
            <div class="testimonial-content">
                <img
                src="{{ url('frontend/images/octaviona.png') }}"
                alt=""
                class="mb-4 rounded-circle"
                />
                <h3 class="mb-4">Octaviona</h3>
                <p class="testimonials">
                "Liburan saya menjadi lebih seru 
                karena pilihan travel yang sangat baik!!!"
                </p>
            </div>
            <hr />
            <p class="trip-to mt-2">Trip ke Nusa Peninda</p>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
            <div class="testimonial-content mb-auto">
                <img
                src="{{ url('frontend/images/girry.png') }}"
                alt=""
                class="mb-4 rounded-circle"
                />
                <h3 class="mb-4">Girry</h3>
                <p class="testimonials">
                "Aku cinta indonesiaa!!!"
                </p>
            </div>
            <hr />
            <p class="trip-to mt-2">Trip ke Karimun Jawa</p>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-12 text-center">
            <a href="https://wa.me/6289656544087" class="btn btn-need-help px-4 mt-4 mx-1">
            Bantuan
            </a>
            <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
            Daftar Disini
            </a>
        </div>
        </div>
    </div>
    </section>
</main>
@endsection