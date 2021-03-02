<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
    
  </head>
  <body>
 <!--  navbar alternate -->
<div class="container">
  <nav class="row navbar navbar-expand-lg navbar-light bg-white">
    <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto">
      <a href="{{ route('home') }}" class="navbar-brand">
        <img src="{{ url('frontend/images/logoperusahaan.jpg') }}" alt="">
      </a>
    </div>
    <ul class="navbar-nav mr-auto d-none d-lg-block">
      <li>
        <span class="text-muted">
          |&nbsp; Mari jelajahi indonesia
        </span>
      </li>
    </ul>
  </nav>
</div>
    @yield('content')
    @include('includes.footer')

    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
  </body>
</html>