<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpha Whitelabel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.busx.com/gds/resources/assets/css/busx-search-form.min.css">


</head>

<body>
    <?php
        $lang = (isset($_GET['lang']) && $_GET['lang'] === "en_US") ? "en_US" : "th_TH";

        // data
        $popular_desctination = file_get_contents('./data/popular-destinations.json');
        $popular_destination = json_decode($popular_desctination, true);

        $our_provider = file_get_contents('./data/our-providers.json');
        $our_provider = json_decode($our_provider, true);
    ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="./assets/images/logo/logo-new.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Routes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">News/Promotion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Manage Booking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact us</a>
                        </li>

                        <li class="nav-item d-none d-md-block">&nbsp;</li>
                        <li class="nav-item d-flex justify-content-center align-items-center me-3 ms-3 lang">
                            <a class="nav-link" href="#"><img src="./assets/images/lang/lang-th.png" class="me-1" alt="logo lang th"> TH <i class="bi bi-check-lg ms-1 <?=($lang == 'th_TH') ? "d-block" : "d-none" ?>"></i></a>
                            <a class="nav-link d-block d-md-none" href="#">&nbsp;</a>
                            <a class="nav-link" href="#"><img src="./assets/images/lang/lang-us.png" class="me-1" alt="logo lang en"> EN <i class="bi bi-check-lg ms-1 <?=($lang == 'en_US') ? "d-block" : "d-none" ?>"></i></a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="banner">
        <div class="banner-content text-center mt-5">
            <h1>Alpha Online Bus Booking</h1>
            <h2>Plan your journey with ease browse schedules compare prices and book your ticket instantly</h2>
        </div>
        <div class="form-search container p-4 rounded ">
             <div id="busx-search-form" data-url="https://booking.lignitetour.com" data-appkey="c79a84e0cf1d68d44d98e18751ab60e8" data-locale="th_TH" data-color="#9B111E" data-btn="Booking"></div>
        </div>
    </section>

    <main class="booking">

        <section class="popular-destinations">
            <div class="section-header">
                <h1>Popular Destinations</h1>
            </div>
            <div class="destinations-grid">
                <?php foreach ($popular_destination as $row_destination) { ?>
                    <div class="destination-card">
                        <img src="./assets/images/popular-destinations/<?=$row_destination['image'];?>" alt="Phuket Thailand">
                        <h3><?=$row_destination['province'];?></h3>
                        <p><?=$row_destination['description'];?></p>
                    </div>
                <?php } ?>
            </div>
        </section>

        <section class="why-choose mt-4">
          <div class="section-header">
                <h1>Why Choose Alpha</h1>
            </div>
        <div class="features-grid">
            <div class="feature-card">
            <div class="icon">
                <img src="./assets/images/why-choose/bus-front.webp" alt="Bus Front" width="35">
            </div>
            <h3>Comfortable Buses</h3>
            <p>Travel in comfort with our modern and well-maintained buses.</p>
            </div>

            <div class="feature-card">
            <div class="icon">
                <img src="./assets/images/why-choose/clock.webp" alt="Clock" width="35">

            </div>
            <h3>Flexible Schedules</h3>
            <p>Choose from a wide range of departure times to suit your schedule.</p>
            </div>

            <div class="feature-card">
            <div class="icon">
                <img src="./assets/images/why-choose/price.webp" alt="Price" width="35">

            </div>
            <h3>Affordable Prices</h3>
            <p>Enjoy competitive prices and save on your travel expenses.</p>
            </div>
        </div>
        </section>
        <section class="provider-section mt-5">
            <div class="section-header">
                <h1>Our Providers</h1>
            </div>
            <div class="provider-grid no-splide" aria-label="Our Providers">
                 <?php foreach($our_provider as $row_provider) { ?>
                    <div class="provider-card splide__slide">
                        <img src="./assets/images/our-providers/<?=$row_provider['image']?>" alt="<?=$row_provider['provider']?>">
                    </div>
                <?php } ?>
            </div>

            <div class="provider-grid splide" aria-label="Our Providers">
                <div class="splide__track">
                    <div class="splide__list">
                        <?php foreach($our_provider as $row_provider) { ?>
                        <div class="provider-card splide__slide">
                            <img src="./assets/images/our-providers/<?=$row_provider['image']?>" alt="<?=$row_provider['provider']?>">
                        </div>
                        <?php } ?>
                        
                    </div>
                </div>
                
                
            </div>
        
        </section>
    </main>

    <footer class="site-footer text-light mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5 class="mb-3">Alpha</h5>
                    <p>Web Booking is very good</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h6 class="mb-3">Main Menu</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-link">Home</a></li>
                        <li><a href="#" class="footer-link">Popular routes</a></li>
                        <li><a href="#" class="footer-link">News/Promotion</a></li>
                        <li><a href="#" class="footer-link">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h6 class="mb-3">Contact us</h6>
                    <p class="mb-1">123 bangkok</p>
                    <p class="mb-1"> 022222222</p>
                    <p class="mb-3">xx@mail.com</p>
                    <div class="card-contact-footer">
                        <a href="#" class="social-icon me-2"><i class="bi bi-telephone"></i></a>
                        <a href="#" class="social-icon me-2"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon me-2"><i class="bi bi-line"></i></a>
                    </div>
                </div>
            </div>
            <hr class="border-secondary my-3" />
            <div class="text-center small">
                © 2025 Alpha. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- Busx Search Form -->
    <script type="module" src="https://cdn.busx.com/gds/resources/assets/js/busx-search-form.min.js"></script>


    <script type="text/javascript">
        $(document).ready(()=>{
            // spilide
            new Splide( '.splide', {
                type   : 'loop',
                perPage: 5,
                perMove: 1,
                autoplay: true,
                pauseOnHover: true,
                pagination: false,
                resetProgress: false,
                interval: 2000,
                breakpoints: {
                    1200: {
                        perPage: 4,
                    },
                    991: {
                        perPage: 3,
                    },
                    767: {
                        perPage: 2,
                    },
                    575: {
                        perPage: 1,
                    },
                },
            } ).mount();
        })
    </script>
</body>
</html>