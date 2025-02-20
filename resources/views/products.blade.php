<!-- master template -->
@extends('master')

<!-- page title -->
@section('judul_halaman', '')

<!-- content -->
@section('konten')

<div class="container py-4 text-white">
    <header class="pb-3 mb-4">
        <h2>Our Product</h2>
    </header>

    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 bg-body-tertiary border rounded-3"
                style="background-image: url('/image/Electrical.jpg'); background-size: cover; background-position: center;">
                <h2 style="color: white;">Electrical</h2>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 text-bg-dark rounded-3">
                <h2>_______</h2>
                <p>We provide electrical goods procurement services with guaranteed quality, using products from the ABB
                    and Schneider Electric brands.</p>
                <p>Some items such as :</p>
                <p>Miniature Circuit Breaker, Molded Case Circuit Breaker, Load Break Switch, Air Circuit Breaker,
                    Change Over Switch, Trafo, Contactor, and others.</p>
            </div>
        </div>
    </div>
    <div class="row align-items-md-stretch mb-5">
        <div class="col-md-6">
            <div class="h-100 p-5 text-bg-dark rounded-3">
                <h2>_______</h2>
                <p>We also provide some of the best quality mechanical products needed by companies.</p>
                <p>Some items such as :</p>
                <p>Iron plate, Stainless steel, Angle iron, Epoxy, Mechanical tools, Carbon brush, Hydraulic hose,
                    Oxygen cylinder, Oil filter, Air filter, Water filters, and others.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-body-tertiary border rounded-3"
                style="background-image: url('/image/Mechanical.jpg'); background-size: cover; background-position: center;">
                <h2 style="color: white;">Mechanical</h2>
            </div>
        </div>
    </div>
    <header class="pb-3 mb-4 border-bottom">
        <h2>Other Items</h2>
    </header>
    <div class="d-flex justify-content-between flex-wrap align-items-center">
        <img src="{{URL::asset('/image/Elevator Door Lock.jpg')}}" style="max-width: 200px" class="border rounded-3 p-3" title="Elevator Door Lock">
        <img src="{{URL::asset('/image/Lipseal.jpeg')}}" style="max-width: 200px" class="border rounded-3 p-3" title="Lipseal">
        <img src="{{URL::asset('/image/Gembok.jpeg')}}" style="max-width: 200px" class="border rounded-3 p-3" title="Gembok">
        <img src="{{URL::asset('/image/Sarung Tangan.jpeg')}}" style="max-width: 200px" class="border rounded-3 p-3" title="Sarung Tangan">
        <img src="{{URL::asset('/image/Sirene Alarm Horn.jpg')}}" style="max-width: 200px" class="border rounded-3 p-3" title="Sirene Alarm Horn">
        <img src="{{URL::asset('/image/Battery.jpg')}}" style="max-width: 200px" class="border rounded-3 p-3" title="Battery">
    </div>
</div>

@endsection