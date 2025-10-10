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
                            <a class="nav-link" href="#"><img src="./assets/images/lang-th.png" alt="logo lang th"> TH</a>
                            <a class="nav-link d-block d-md-none" href="#">&nbsp;</a>
                            <a class="nav-link" href="#"><img src="./assets/images/lang-us.png" alt="logo lang en"> EN</a>
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
             <div id="busx-search-form" data-url="https://booking.lignitetour.com" data-appkey="c79a84e0cf1d68d44d98e18751ab60e8" data-locale="th_TH" data-color="#9B111E" data-btn="Booking">

            </div>

            <!-- <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="one-way-tab" data-bs-toggle="tab" data-bs-target="#one-way"
                        type="button" role="tab" aria-controls="one-way" aria-selected="true">ไป</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="round-trip-tab" data-bs-toggle="tab" data-bs-target="#round-trip"
                        type="button" role="tab" aria-controls="round-trip" aria-selected="false">ไปและกลับ</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="one-way" role="tabpanel" aria-labelledby="one-way-tab">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="from" class="form-label">จาก</label>
                                <input type="text" class="form-control form-control-lg" id="from" placeholder="ต้นทาง">
                            </div>
                            <div class="col-md-6">
                                <label for="to" class="form-label">ไปยัง</label>
                                <input type="text" class="form-control form-control-lg" id="to" placeholder="ปลายทาง">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6 pt-3">
                                <label for="departure-date" class="form-label">วันที่ออกเดินทาง</label>
                                <input type="date" class="form-control form-control-lg" id="departure-date">
                            </div>
                            <div class="col-md-3 pt-3">
                                <label for="departure-date" class="form-label">จำนวนผู้โดยสาร</label>
                                <input type="number" name="" id="" class="form-control form-control-lg"
                                    placeholder="ผู้ใหญ่">
                            </div>
                            <div class="col-md-3 pt-3">
                                <label for="departure-date" class="form-label">&nbsp;</label>
                                <div class="d-grid gap-3">
                                    <button type="button" class="btn btn-lg btn-danger btn-block">จองตั๋ว</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="round-trip" role="tabpanel" aria-labelledby="round-trip-tab">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="from" class="form-label">จาก</label>
                                <input type="text" class="form-control form-control-lg" id="from" placeholder="ต้นทาง">
                            </div>
                            <div class="col-md-6">
                                <label for="to" class="form-label">ไปยัง</label>
                                <input type="text" class="form-control form-control-lg" id="to" placeholder="ปลายทาง">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-3 pt-3">
                                <label for="departure-date" class="form-label">วันที่ออกเดินทาง</label>
                                <input type="date" class="form-control form-control-lg" id="departure-date">
                            </div>
                            <div class="col-md-3 pt-3">
                                <label for="departure-date" class="form-label">วันที่กลับ</label>
                                <input type="date" class="form-control form-control-lg" id="departure-date">
                            </div>
                            <div class="col-md-3 pt-3">
                                <label for="departure-date" class="form-label">จำนวนผู้โดยสาร</label>
                                <input type="number" name="" id="" class="form-control form-control-lg"
                                    placeholder="ผู้ใหญ่">
                            </div>
                            <div class="col-md-3 pt-3">
                                <label for="departure-date" class="form-label">&nbsp;</label>
                                <div class="d-grid gap-3">
                                    <button type="button" class="btn btn-lg btn-danger btn-block">จองตั๋ว</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div> -->

        </div>
    </section>

    <main class="booking">

        <section class="popular-destinations">
            <div class="section-header">
                <h1>Popular Destinations</h1>
            </div>
            <div class="destinations-grid">
                <div class="destination-card">
                <img src="./assets/images/popular-destinations/phuket-thailand.webp" alt="Phuket Thailand">
                <h3>Phuket</h3>
                <p>Phuket is Thailand’s largest tourist island, renowned for its beautiful beaches, clear waters, local culture, and fresh seafood.</p>
                </div>

                <div class="destination-card">
                <img src="./assets/images/popular-destinations/trat-thailand.webp" alt="Trat Thailand">
                <h3>Trat</h3>
                <p>Trat is a province in eastern Thailand, known for its beautiful islands, clear waters, and vibrant marine life.</p>
                </div>

                <div class="destination-card">
                <img src="./assets/images/popular-destinations/chiangmai-thailand.webp" alt="Chiang Mai Thailandas">
                <h3>Chiang Mai</h3>
                <p>Chiang Mai is known for its stunning temples, vibrant night markets, and beautiful mountain scenery.</p>
                </div>

                <div class="destination-card">
                <img src="./assets/images/popular-destinations/kanchanaburi-thailand.webp" alt="Kanchanaburi Thailand">
                <h3>Kanchanaburi</h3>
                <p>Kanchanaburi is a province in western Thailand, known for its stunning natural beauty, waterfalls, and historical sites.</p>
                </div>
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
                <div class="provider-card">
                    <img src="./assets/images/our-providers/nakhonchaiair.webp" alt="nakhonchaiair provider">
                </div>
                <div class="provider-card">
                    <img src="./assets/images/our-providers/Logo_of_The_Transport_Company_Limited.svg.webp" alt="tcl provider">
                </div>
                <div class="provider-card">
                    <img src="./assets/images/our-providers/lignitetour.webp" alt="lignite tour providers">
                </div>
                <div class="provider-card">
                    <img src="./assets/images/our-providers/yellow-bus.webp" alt="yellow bus provider">
                </div>
                <div class="provider-card">
                    <img src="./assets/images/our-providers/kanexpress.webp" alt="Provider 1">
                </div>
            </div>

            <div class="provider-grid splide" aria-label="Our Providers">
                <div class="splide__track">
                    <div class="splide__list">
                        <div class="provider-card splide__slide">
                            <img src="./assets/images/our-providers/nakhonchaiair.webp" alt="nakhonchaiair provider">
                        </div>
                        <div class="provider-card splide__slide">
                            <img src="./assets/images/our-providers/Logo_of_The_Transport_Company_Limited.svg.webp" alt="tcl provider">
                        </div>
                        <div class="provider-card splide__slide">
                            <img src="./assets/images/our-providers/lignitetour.webp" alt="lignite tour providers">
                        </div>
                        <div class="provider-card splide__slide">
                            <img src="./assets/images/our-providers/yellow-bus.webp" alt="yellow bus provider">
                        </div>
                        <div class="provider-card splide__slide">
                            <img src="./assets/images/our-providers/kanexpress.webp" alt="Provider 1">
                        </div>
                        
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