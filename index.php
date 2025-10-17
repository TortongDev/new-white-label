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
        $app_name = "JKP Transport";
        $lang = (isset($_GET['lang']) && $_GET['lang'] === "en_US") ? "en_US" : "th_TH";

        // data
        $popular_desctination = file_get_contents('./data/popular-destinations.json');
        $popular_destination = json_decode($popular_desctination, true);

        $our_provider = file_get_contents('./data/our-providers.json');
        $our_provider = json_decode($our_provider, true);

        $why_choose = file_get_contents("./data/why-choose.json");
        $why_choose = json_decode($why_choose, true);
    ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="./assets/images/logo/logo.svg" alt="logo">
                    <span><?=$app_name ?? ""?></span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-itempe-1 pe-2">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                         <li class="nav-item pe-2">
                            <a class="nav-link" href="#">Routes</a>
                        </li>
                        <li class="nav-item pe-2">
                            <a class="nav-link" href="#">Manage Ticket</a>
                        </li>
                        <li class="nav-item pe-2">
                            <a class="nav-link" href="#">Contact us</a>
                        </li>

                        <li class="nav-item d-none d-md-block">&nbsp;</li>
                        <li class="nav-item dropdown">
                            <a class="nav-link lang dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-globe"></i> Language
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item d-flex" href="#"><img src="./assets/images/lang/lang-th.png" class="me-1" alt="logo lang th"> TH <i class="bi bi-check-lg ms-1 <?=($lang == 'th_TH') ? "d-block" : "d-none" ?>"></i></a></li>
                                <li><a class="dropdown-item d-flex" href="#"><img src="./assets/images/lang/lang-us.png" class="me-1" alt="logo lang en"> EN <i class="bi bi-check-lg ms-1 <?=($lang == 'en_US') ? "d-block" : "d-none" ?>"></i></a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="banner">
        <div class="banner-content text-center mt-5">
            <h1>JKP Transport Online Booking</h1>
            <h2>Check van schedules, low prices, book online 24 Hours</h2>
        </div>
        <div class="form-search container p-4 rounded ">
             <div id="busx-search-form" data-url="https://booking.lignitetour.com" data-appkey="c79a84e0cf1d68d44d98e18751ab60e8" data-locale="th_TH" data-color="#F4B315" data-btn="Booking"></div>
        </div>
    </section>

    <main class="booking">

        <section class="popular-destinations">
            <div class="card-title">
                <h1>Popular Destinations</h1>
            </div>
            <div class="destinations-grid">
                <?php foreach ($popular_destination as $row_destination) { ?>
                    <div class="destination-card">
                        <img src="./assets/images/popular-destinations/<?=$row_destination['image'];?>" alt="Phuket Thailand">
                        <div class="card-content">
                            <h3>
                                <?=$row_destination['province_from'];?>
                                &emsp;<i class="bi bi-arrow-right"></i>&emsp;
                                <?=$row_destination['province_to'];?></h3>
                            <p>Price <?=$row_destination['price']." ".$row_destination['currency'];?></p>
                            <div class="d-grid">
                                <button class="btn book-now">Book Now</button>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>

        <section class="why-choose">
          <div class="card-title">
                <h1>Why Choose <?=$app_name ?? ""?>?</h1>
            </div>
        <div class="features-grid">
            <?php
                foreach ($why_choose as $row_why_choose) {
            ?>
                    <div class="feature-card">
                        <div class="icon">
                            <img src="./assets/images/why-choose/<?=$row_why_choose['image'] ?? ""?>" alt="image <?=$row_why_choose['title']?? ""?>" width="35">
                        </div>
                        <h3><?=$row_why_choose['title'] ?? ""?></h3>
                        <p><?=$row_why_choose['description'] ?? ""?></p>
                    </div>
            <?php } ?>

            
        </div>
        </section>
        <section class="provider-section">
            <div class="card-title">
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
                <div class="col-md-3 mb-3">
                    <h5 class="mb-3"><?=$app_name ?? ""?></h5>
                    <p>Book bus tickets online across Thailand easy, safe, and convenient Find routes and reserve your seat on all major travel lines nationwide.</p>
                </div>
                <div class="col-md-3 mb-3">
                    <h5 class="mb-3">Main Menu</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-link">Home</a></li>
                        <li><a href="#" class="footer-link">Popular routes</a></li>
                        <li><a href="#" class="footer-link">News/Promotion</a></li>
                        <li><a href="#" class="footer-link">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-3">
                    <h5 class="mb-3">Legal</h5>
                     <ul class="list-unstyled">
                        <li><a href="#" class="footer-link">Terms & Conditions</a></li>
                        <li><a href="#" class="footer-link">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-3">
                    <h5 class="mb-3">Follow up</h5>
                    <div class="card-followup-footer">
                        <a href="#" class="social-icon me-2"><i class="bi bi-telephone"></i></a>
                        <a href="#" class="social-icon me-2"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon me-2"><i class="bi bi-line"></i></a>
                    </div>
                </div>
            </div>
            <hr class="border-secondary my-3" />
            <div class="text-center small">
                © <?=date('Y')?> <?=$app_name ?? ""?>. All rights reserved.
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