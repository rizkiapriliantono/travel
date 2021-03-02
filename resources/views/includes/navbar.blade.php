<!-- Navbar -->
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ url('frontend/images/logoperusahaan.jpg') }}" alt="" />
        </a>
        <button
        class="navbar-toggler navbar-toggler-right"
        type="button"
        data-toggle="collapse"
        data-target="#navb"
        >
        <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav ml-auto mr-3">
            <li class="nav-item mx-md-2">
            <a class="nav-link " href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item mx-md-2">
            <a class="nav-link" href="http://127.0.0.1:8000/paket">Paket Travel</a>
            </li>
            <li class="nav-item mx-md-2">
            <a class="nav-link" href="http://127.0.0.1:8000/#testimonialsContent">Testimoni</a>
            </li>
        </ul>

        @guest
                    <!-- Mobile button -->
                    <form class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login my-2 my-sm-0" type="button"
                        onclick="event.preventDefault(); location.href='{{url('login')}}';">
                        Masuk
                    </button>
                </form>

                <!-- Desktop Button -->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4"ty type="button"
                        onclick="event.preventDefault(); location.href='{{url('login')}}';">
                        Masuk
                    </button>
                </form>  
        @endguest

        @auth
                 <!-- Mobile button -->
                 <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}"
                 method="POST">
                    @csrf
                    <button class="btn btn-login my-2 my-sm-0" type="submit">
                        Keluar
                    </button>
                </form>

                <!-- Desktop Button -->
                 <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}"
                 method="POST">
                    @csrf
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                        Keluar
                    </button>
                </form>
        @endauth

        </div>
    </nav>
</div>