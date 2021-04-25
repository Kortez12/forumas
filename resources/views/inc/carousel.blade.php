@if (auth::guest())
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" height="220px" src="img/carousel.jpg" alt="First slide">
            <div class="carousel-caption d-md-block">
                <div class="container">
                    <h2 class="text-white">Sveiki atvykę į forumą</h2>
                    <p class="text-white">Geriausiai praktikai rekomenduojame prisijungti</p>
                    <a class="btn btn-blue" href="{{ url('/login') }}">Prisijungti</a>
                    <a class="btn btn-pink" href="{{ url('/register') }}">Registruotis</a>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" height="220px" src="img/carousel.jpg" alt="First slide">
            <div class="carousel-caption d-md-block">
                <div class="container justify-content-center">
                    <h2 class="text-white py-5">Sveiki sugrįžę</h2>
                    {{-- <p class="text-white">Dėkojame, kad prisiregistravote</p> --}}
                    <a class="btn btn-blue" href="{{ url('/home') }}">Skydelis</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
