<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Portal - @yield('title')</title>

  <link rel="stylesheet" href="/site/assets/css/bootstrap.css">

  <link rel="stylesheet" href="/site/assets/css/maicons.css">

  <link rel="stylesheet" href="/site/assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="/site/assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="/site/assets/vendor/fancybox/css/jquery.fancybox.css">

  <link rel="stylesheet" href="/site/assets/css/theme.css">

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <div class="d-inline-block">
              <span class="mai-mail fg-primary"></span> <a href="mailto:contact@mail.com">josevaldosicuba@gmail.com</a>
            </div>
            <div class="d-inline-block ml-2">
              <span class="mai-call fg-primary"></span> <a href="tel:+0011223495">+244 921319138</a>
            </div>
          </div>
          <div class="col-md-4 text-right d-none d-md-block">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-youtube"></span></a>
              <a href="#"><span class="mai-logo-linkedin"></span></a>
            </div>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .top-bar -->

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a href="{{route('site.home')}}" class="navbar-brand">Por<span class="text-primary">tal.</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item active">
              <a href="{{route('site.home')}}" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="{{route('site.about')}}" class="nav-link">Sobre nós</a>
            </li>
            <li class="nav-item">
              <a href="{{route('site.service')}}" class="nav-link">Serviços</a>
            </li>
            <li class="nav-item">
              <a href="{{route('site.project')}}" class="nav-link">Projetos</a>
            </li>
            <li class="nav-item">
              <a href="{{route('site.news')}}" class="nav-link">Notícias</a>
            </li>
            <li class="nav-item">
              <a href="{{route('site.contact')}}" class="nav-link">Contactos</a>
            </li>
            @if (Route::has('login'))

                <li class="nav-item"> <a href="{{ route('login') }}" class="nav-link">Área Restrita</a></li>
             @endif


          </ul>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->


  </header>

@yield('content')


  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 py-3">
          <h3>Por<span class="fg-primary">tal.</span></h3>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Nossos contactos</h5>
          <p>301 The Greenhouse, Custard Factory, London, E2 8DY.</p>
          <p>Email: josevaldosicuba@gmail.com</p>
          <p>Phone: +244 921319138</p>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Links</h5>
          <ul class="footer-menu">
            <li><a href="#">About</a></li>
            <li><a href="#">Noticias</a></li>
            <li><a href="#">Contactos</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Newsletter</h5>
          <form action="#">
            <input type="text" class="form-control" placeholder="Insira seu email">
            <button type="submit" class="btn btn-primary btn-sm mt-2">Submeter</button>
          </form>
        </div>
      </div>

      <hr>

      <div class="row mt-4">
        <div class="col-md-6">
          <p>Todos os direitos reservados | By <a href="#">Josevaldo Sicuba</a></p>
        </div>
        <div class="col-md-6 text-right">
          <div class="sosmed-button">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-youtube"></span></a>
            <a href="#"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>
    </div>
  </footer>


<script src="/site/assets/js/jquery-3.5.1.min.js"></script>

<script src="/site/assets/js/bootstrap.bundle.min.js"></script>

<script src="/site/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="/site/assets/vendor/wow/wow.min.js"></script>

<script src="/site/assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>

<script src="/site/assets/vendor/isotope/isotope.pkgd.min.js"></script>

<script src="/site/assets/js/google-maps.js"></script>

<script src="/site/assets/js/theme.js"></script>

<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script> -->

</body>
</html>
