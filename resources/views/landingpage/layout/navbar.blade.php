<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{url('/')}}">FINA<span>NCE</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <!-- <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php?#services">Fitur</a></li>
          <li><a class="nav-link scrollto" href="index.php?#features">Tentang</a></li>
          <li><a class="nav-link scrollto" href="index.php?#contact">Kontak</a></li>
          <li><a class="getstarted scrollto" href="{{url('./login')}}">Login</a></li> -->

          @if (auth()->check())
          @php $admin = auth()->user()->id_role @endphp
          @if ($admin == 1)
          <script>
            window.location.href = '{{ url(' / admin ') }}';
          </script>
          @endif
          <li><a class="nav-link scrollto" href="{{ url('/') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php?#services">Fitur</a></li>
          <li><a class="nav-link scrollto" href="index.php?#features">Tentang</a></li>
          <li><a class="nav-link scrollto" href="index.php?#contact">Kontak</a></li>
          <li class="dropdown" style="margin-right: 10px;"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{ url('/riwayat_gaji') }}">Riwayat Gaji</a></li>
              <li><a class="nav-link scrollto" href="{{ url('/profile') }}">Profile</a></li>
            </ul>
          </li>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-primary fw-bold">Log Out</button>
          </form>
          @else
          <li><a class="nav-link scrollto" href="{{ url('/') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php?#services">Fitur</a></li>
          <li><a class="nav-link scrollto" href="index.php?#features">Tentang</a></li>
          <li><a class="nav-link scrollto" href="index.php?#contact">Kontak</a></li>
          <a class="btn-getstarted scrollto" href="{{ url('/login') }}" role="a">Login</a>

          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->