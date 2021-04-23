<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
</head>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 h-25" src="img/carousel.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <div class="container">
                    <h2 class="text-white">Sveiki atvykę į forumą</h2>
                    <p class="text-white">Geriausiai praktikai rekomenduojame prisiregistruoti</p>
                    <a class="btn btn-blue" href="{{ url('/login') }}">Prisijungti</a>
                    <a class="btn btn-pink" href="{{ url('/register') }}">Registruotis</a>
          </div>
      </div>
    </div>
  </div>