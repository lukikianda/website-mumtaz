<!-- master template -->
@extends('master')

<!-- page title -->
@section('judul_halaman', '')


<!-- content -->
@section('konten')


<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
            <img src="{{URL::asset('/image/Slide1.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Heavy equipment needs.</h5>
                <p>We provide spare parts and other needs for heavy equipment.</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
            <img src="{{URL::asset('/image/Slide2.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Small to large voltage electrical goods.</h5>
                <p>We provide electrical goods from small to large voltage.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{URL::asset('/image/Slide3.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>MCB, Contactor and electrical panel.</h5>
                <p>MCB, Contactor and other equipment needed in the electrical panel.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
        <img src="{{URL::asset('/image/Logo MBM.png')}}" style="max-width: 100px">
    </header>

    <div class="p-5 mb-4 bg-body-tertiary rounded-3"
        style="background-image: url('/image/Jumbotron1.png');; background-size: cover; background-position: center;">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold" style="color: white;">About Us</h1>
            <p class="col-md-8 fs-4" style="color: white;">PT. Mumtaz Berjaya Makmur, a leading company operating in the
                mechanical and electrical sector to meet today's industrial needs.
                PT. Mumtaz Berjaya Makmur has been a pioneer in providing relevant and innovative solutions to our
                clients in various sectors.</p>
            <button class="btn btn-primary btn-lg" type="button" onclick="window.location.href='/aboutus';">Read
                More</button>
        </div>
    </div>

    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 text-bg-dark rounded-3">
                <h2>Services</h2>
                <p>We provide services such as End User Support, Resale Trading Services, Facilities, and Design and
                    Development.</p>
                <button class="btn btn-outline-light" type="button" onclick="window.location.href='/services';">Read
                    More</button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-body-tertiary border rounded-3"
                style="background-image: url('/image/Jumbotron2.png');; background-size: cover; background-position: center;">
                <h2 style="color: white;">Products</h2>
                <p style="color: white;">We provide all the products needed for heavy equipment, such as air filters,
                    engine oil, etc. We also provide electrical products from low voltage to high voltage.</p>
                <button class="btn btn-outline-light" type="button" onclick="window.location.href='/products';">Read
                    More</button>
            </div>
        </div>
    </div>
</div>

<section class="p-4 mb-4 carousel slide" style="background-color: #FFFFFF;">
    <div class="me-5">
        <span>Our Partners & Brand Products :</span>
    </div>
    <div id="carouselFooterInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active" data-bs-interval="5000">
                <div class="d-flex justify-content-between flex-wrap align-items-center">
                    <img src="{{URL::asset('/image/ABB.png')}}" style="max-width: 150px; height: auto;" class="p-2"
                        alt="ABB">
                    <img src="{{URL::asset('/image/SCHNEIDER ELECTRIC.png')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="SCHNEIDER ELECTRIC">
                    <img src="{{URL::asset('/image/PLN INDONESIA POWER.jpg')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="PLN INDONESIA POWER">
                    <img src="{{URL::asset('/image/LOCTITE.png')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="LOCTITE">
                    <img src="{{URL::asset('/image/TEKIRO.jpg')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="TEKIRO">
                    <img src="{{URL::asset('/image/VITAL.png')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="VITAL">
                    <img src="{{URL::asset('/image/TOYO.png')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="TOYO">
                    <img src="{{URL::asset('/image/BROCO.jpeg')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="BROCO">
                    <img src="{{URL::asset('/image/MASTERLOCK.png')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="MASTERLOCK">
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item" data-bs-interval="5000">
                <div class="d-flex justify-content-between flex-wrap align-items-center">
                    <img src="{{URL::asset('/image/YUASA.png')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="YUASA">
                    <img src="{{URL::asset('/image/GS BATTERY.jpeg')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="GS BATTERY">
                    <img src="{{URL::asset('/image/AMAZON FILTERS.jpeg')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="AMAZON FILTERS">
                    <img src="{{URL::asset('/image/CHINDOW ELECTRIC.jpeg')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="CHINDOW ELECTRIC">
                    <img src="{{URL::asset('/image/WELION.png')}}" style="max-width: 150px; height: auto;" class="p-2"
                        alt="WELION">
                    <img src="{{URL::asset('/image/JAKARTA PRIMA CRANES.jpg')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="JAKARTA PRIMA CRANES">
                    <img src="{{URL::asset('/image/MESINDO TEKNINESIA.jpeg')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="MESINDO TEKNINESIA">
                    <img src="{{URL::asset('/image/CITRAMASJAYA TEKNIKMANDIRI.jpeg')}}"
                        style="max-width: 150px; height: auto;" class="p-2" alt="CITRAMASJAYA TEKNIKMANDIRI">
                    <img src="{{URL::asset('/image/BALINTANG JAGAT RAYA.png')}}"
                        style="max-width: 150px; height: auto;" class="p-2" alt="BALINTANG JAGAT RAYA">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection