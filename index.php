<?php
    $lang = (isset($_GET['lang']) && $_GET['lang'] === "en_US") ? "en_US" : "th_TH";
    $app_name = ($lang == "en_US") ? "JKP Transport" : "JKP Transport (เจเคพี ขนส่ง)";

    // data
    $popular_desctination = file_get_contents('./data/popular-destinations.json');
    $popular_destination = json_decode($popular_desctination, true);

    $our_provider = file_get_contents('./data/our-providers.json');
    $our_provider = json_decode($our_provider, true);

    $why_choose = file_get_contents("./data/why-choose.json");
    $why_choose = json_decode($why_choose, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "./includes/head.php"; ?>
</head>

<body>
    <!-- header -->
    <header>
        <?php require_once "./includes/header.php"; ?>
    </header>

    <!-- banner -->
    <section class="banner">
        <div class="banner-content text-center mt-5">
            <h1>JKP Transport Booking</h1>
            <h2>Check van schedules, low prices, book online 24 Hours</h2>
        </div>
        <div class="form-search container rounded ">
             <div id="busx-search-form" data-url="https://booking.lignitetour.com" data-appkey="c79a84e0cf1d68d44d98e18751ab60e8" data-locale="th_TH" data-color="#F4B315" data-btn="Booking"></div>
        </div>
    </section>

    <!-- main -->
    <main class="booking">

        <!-- popular destinations -->
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

        <!-- why choose JKP -->
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

        <!-- our provider -->
        <section class="provider-section">
            <div class="card-title">
                <h1>Our Providers</h1>
            </div>
            <!-- mode desktop -->
            <div class="provider-grid no-splide" aria-label="Our Providers">
                 <?php foreach($our_provider as $row_provider) { ?>
                    <div class="provider-card splide__slide">
                        <img src="./assets/images/our-providers/<?=$row_provider['image']?>" alt="<?=$row_provider['provider']?>">
                    </div>
                <?php } ?>
            </div>
            <!-- mode mobile -->
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

    <!-- footer -->
    <footer class="site-footer text-light mt-5">
        <?php require_once "./includes/footer.php"; ?>
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