<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT. Mumtaz Berjaya Makmur</title>
    <script src="https://kit.fontawesome.com/73a5bd7ed6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color : #212529">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="{{URL::asset('/image/Logo MBM.png')}}" style="max-width: 80px" class="navbar-brand">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contactus">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/vision">Vision</a></li>
                            <li><a class="dropdown-item" href="/mission">Mission</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- bagian konten blog -->
    @yield('konten')
</body>
<!-- Footer -->
<footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-between p-4" style="background-color: #6351ce">
        <!-- Left -->
        <div class="me-5">
            <span>Get connected with us on social networks :</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <a href="#" class="text-white me-4">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-white me-4">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-white me-4">
                <i class="fab fa-google"></i>
            </a>
            <a href="#" class="text-white me-4">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-white me-4">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="#" class="text-white me-4">
                <i class="fab fa-github"></i>
            </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold">PT. Mumtaz Berjaya Makmur</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p>
                        Thankyou for visiting our website.
                        We appreciate your support and trust.
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Products</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p>
                        <a href="#" class="text-white">Unavailable link</a>
                    </p>
                    <p>
                        <a href="#" class="text-white">Unavailable link</a>
                    </p>
                    <p>
                        <a href="#" class="text-white">Unavailable link</a>
                    </p>
                    <p>
                        <a href="#" class="text-white">Unavailable link</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Useful links</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p>
                        <a href="#" class="text-white">Unavailable link</a>
                    </p>
                    <p>
                        <a href="#" class="text-white">Unavailable link</a>
                    </p>
                    <p>
                        <a href="#" class="text-white">Unavailable link</a>
                    </p>
                    <p>
                        <a href="#" class="text-white">Unavailable link</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Contact</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p><i class="fas fa-home mr-3"></i> Gading Kirana Timur IX No.18, Klp. Gading Bar., Kec. Klp.
                        Gading, Jkt Utara, Daerah Khusus Ibukota Jakarta 14240</p>
                    <p><i class="fas fa-envelope mr-3"></i> ptmumtazberjayamakmurr@gmail.com</p>
                    <p><i class="fas fa-phone mr-3"></i> +62 817-6771-111</p>
                    <!-- <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p> -->
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2025 Copyright: Mumtaz Berjaya Makmur, PT.
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
<!-- End of .container -->

</html>