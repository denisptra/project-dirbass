<!-- /*
* Template Name: Learner
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <link href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <link rel="stylesheet" href="{{ asset('diet') }}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('diet') }}/css/animate.min.css">
  <link rel="stylesheet" href="{{ asset('diet') }}/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{ asset('diet') }}/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="{{ asset('diet') }}/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="{{ asset('diet') }}/fonts/icomoon/style.css">
  <link rel="stylesheet" href="{{ asset('diet') }}/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="{{ asset('diet') }}/css/aos.css">
  <link rel="stylesheet" href="{{ asset('diet') }}/css/style.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <style>
    .site-menu li a {
        color: #333; 
        text-decoration: none; 
        position: relative;
        display: inline-block;
        transition: color 0.3s ease;
    }

    .site-menu li a::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px; 
        display: block;
        margin-top: 5px;
        right: 0;
        background: #007bff; 
        transition: width 0.3s ease, right 0.3s ease; 
    }

    .site-menu li a:hover::after {
        width: 100%;
        right: 0;
    }

    .site-menu li a:hover {
        color: #007bff; 
    }

    .site-menu li {
        display: inline-block; 
        margin: 0 10px; 
    }
  </style>

  <title>Learner Free Bootstrap Template by Untree.co</title>
</head>

<body>

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>


  
  <nav class="site-nav mb-5">
    <div class="sticky-nav js-sticky-header">
      <div class="container position-relative">
        <div class="site-navigation text-center">
          <a href="" class="logo menu-absolute m-0">
            <img src="{{ asset('diet') }}/images/image/logo-putih.png" alt="" style="width: 50px; margin-top:-5px">
          </a>

          <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
            <li class=""><a href="{{ route('welcome') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('news') }}">News</a></li>
            <li><a href="{{ route('karya') }}">Creation</a></li>
            <li><a href="{{ route('gallery') }}">Gallery</a></li>
            <li><a href="{{ route('member') }}">Member</a></li>
          </ul>

          <a href="#" class="btn-book btn btn-secondary btn-sm menu-absolute">Enroll Now</a>

          <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>
        </div>
      </div>
    </div>
  </nav>
  
  {{-- hero --}}
    @yield('hero')
  {{--  --}}

  {{-- about --}}
    @yield('about')
  {{--  --}}

  {{-- artikel --}}
    @yield('artikel')
  {{--  --}}

  {{-- gellery --}}
    @yield('gallery')
  {{--  --}}

  {{-- member --}}
    @yield('member')
  {{--  --}}

  {{-- karya --}}
    @yield('karya')
  {{--  --}}

  {{-- hero2 --}}
    @yield('hero2')
  {{--  --}}

  {{-- testi --}}
    @yield('testi')
  {{--  --}}

  {{-- contact --}}
    @yield('contact')
  {{--  --}}

  {{-- peta --}}
    @yield('peta')
  {{--  --}}

  <div class="site-footer">

    <div class="container">

      <div class="row">
        <div class="col-lg-4 mr-auto">
          <div class="widget">
            <h3>DIRBASS<span class="text-primary">.</span> </h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div> <!-- /.widget -->
          <div class="widget">
            <h3>Connect</h3>
            <ul class="list-unstyled social">
              <li><a href="#"><span class="icon-instagram"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-pinterest"></span></a></li>
              <li><a href="#"><span class="icon-dribbble"></span></a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

        <div class="col-lg-3 ml-auto">
          <div class="widget">
            <h3>Page</h3>
            <ul class="list-unstyled float-left links">
              <li>
                <a href="{{ route('welcome') }}">Home</a>
              </li>
              <li>
                <a href="{{ route('about') }}">About</a>
              </li>
              <li>
                <a href="{{ route('news') }}">News</a>
              </li>
              <li>
                <a href="{{ route('karya') }}">Karya</a>
              </li>
              <li>
                <a href="{{ route('gallery') }}">Gallery</a>
              </li>
              <li>
                <a href="{{ route('member') }}">Member</a>
              </li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->


        <div class="col-lg-4">
          <div class="widget">
            <h3>Contact</h3>
            <address> Ir. H. Juanda No.99, Kemiri 
              Muka, Kecamatan Beji, Kota Depok, 
              Jawa Barat 16423
            </address>
            <ul class="list-unstyled mb-4">
              <li>+62 897664466155</li>
              <li class="mt-3">+1(123)-456-7890</li>
              <li class="mt-3">muhammadalialfauzi@mail.com</li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

      </div> <!-- /.row -->

      <div class="row mt-5">
        <div class="col-12 text-center">
          <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="#">Diskominfo</a>  Distributed By <a href="#">Dirbass</a> <!-- License information: https://untree.co/license/ -->
          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <script src="{{ asset('diet') }}/js/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('diet') }}/js/popper.min.js"></script>
    <script src="{{ asset('diet') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('diet') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('diet') }}/js/jquery.animateNumber.min.js"></script>
    <script src="{{ asset('diet') }}/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('diet') }}/js/jquery.fancybox.min.js"></script>
    <script src="{{ asset('diet') }}/js/jquery.sticky.js"></script>
    <script src="{{ asset('diet') }}/js/aos.js"></script>
    <script src="{{ asset('diet') }}/js/custom.js"></script>

  </body>

  </html>
