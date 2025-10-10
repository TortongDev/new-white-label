<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Whitelabel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="./assets/images/logo-new.png" alt="logo"></a>
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
                            <a class="nav-link" href="#">จุดให้บริการ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ผู้ให้บริการ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ข่าวสาร / โปรโมชัน</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ติดต่อเรา</a>
                        </li>

                        <li class="nav-item">&nbsp;</li>
                        <li class="nav-item d-flex justify-content-center align-items-center me-3 ms-3 lang">
                            <a class="nav-link" href="#"><img src="./assets/images/lang-th.png" alt="logo lang th"> TH</a>
                            <a class="nav-link" href="#"><img src="./assets/images/lang-us.png" alt="logo lang en"> EN</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="banner">
        <div class="banner-content text-center mt-3">
            <h1>จองตั๋วออนไลน์กับ Alpha</h1>
            <h2>จองได้ง่ายไม่ต้องไปที่เค้าเตอร์ให้เสียเวลา</h2>
        </div>
        <div class="form-search container bg-light p-4 rounded border-primary border">
            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
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
            </div>

        </div>
    </section>

    <main class="booking">

        <section class="popular-destinations">
            <div class="section-header">
                <h1>Popular Destinations</h1>
            </div>
            <div class="destinations-grid">
                <div class="destination-card">
                <img src="./assets/images/phuket.jpg" alt="Phuket">
                <h3>Phuket</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, sint.</p>
                </div>

                <div class="destination-card">
                <img src="./assets/images/Bangkok.jpg" alt="Bangkok">
                <h3>Bangkok</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, sint.</p>
                </div>

                <div class="destination-card">
                <img src="./assets/images/chiangmai.jpg" alt="Chiang Mai">
                <h3>Chiang Mai</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, sint.</p>
                </div>

                <div class="destination-card">
                <img src="./assets/images/ayutthaya.jpeg" alt="Ayutthaya">
                <h3>Ayutthaya</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, sint.</p>
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
                <img src="./assets/images/school-bus-front.png" alt="busus good" width="35">
            </div>
            <h3>Comfortable Buses</h3>
            <p>Travel in comfort with our modern and well-maintained buses.</p>
            </div>

            <div class="feature-card">
            <div class="icon">
                <img src="./assets/images/clock.png" alt="clock" width="35">

            </div>
            <h3>Flexible Schedules</h3>
            <p>Choose from a wide range of departure times to suit your schedule.</p>
            </div>

            <div class="feature-card">
            <div class="icon">
                <img src="./assets/images/price.png" alt="price" width="35">

            </div>
            <h3>Affordable Prices</h3>
            <p>Enjoy competitive prices and save on your travel expenses.</p>
            </div>
        </div>
        </section>

        <!-- <section class="popular-locations">
            <div class="section-header">
                <h1>เส้นทางยอดนิยม</h1>
            </div>
            <div class="locations-grid container">
                <div class="card">
                    <img src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg"
                        alt="Denmark">
                    <div class="label">กรุงเทพ - ภูเก็ต</div>
                </div>
                <div class="card"><img
                        src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg"
                        alt="Belgium">
                    <div class="label">กรุงเทพ - เชียงใหม่</div>
                </div>
                <div class="card"><img
                        src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg"
                        alt="Mexico">
                    <div class="label">กรุงเทพ - ตราด</div>
                </div>
                <div class="card"><img
                        src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg"
                        alt="Mexico">
                    <div class="label">กรุงเทพ - กระบี่</div>
                </div>
                <div class="card"><img
                        src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg"
                        alt="Indonesia">
                    <div class="label">กรุงเทพ - อุดรธานี</div>
                </div>
                <div class="card"><img
                        src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg"
                        alt="Romania">
                    <div class="label">กรุงเทพ - เลย</div>
                </div>
                <div class="card"><img
                        src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg"
                        alt="Romania">
                    <div class="label">กรุงเทพ - อุบลราชธานี</div>
                </div>
            </div>
        </section>

        <section class="new-promotion mt-5">
            <div class="section-header">
                <h1>Promotion / News</h1>
            </div>
            <div class="content container">
                <div class="row row-cols-1 row-cols-md-3 g-4">

                    <div class="col">
                        <div class="card h-100 promo-card">
                            <img src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg"
                                class="card-img-top" alt="โปรโมชั่นทะเล">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">เที่ยวทะเลราคาพิเศษ</h5>
                                <p class="card-text">รับส่วนลด 20% สำหรับเส้นทาง กรุงเทพฯ -> ภูเก็ต และพัทยา
                                    ถึงสิ้นเดือนนี้เท่านั้น</p>
                                <a href="#" class="btn btn-outline-primary mt-auto">อ่านต่อ</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 promo-card">
                            <img src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg"
                                class="card-img-top" alt="โปรโมชั่นเหนือ">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">เที่ยวเหนือสุดคุ้ม</h5>
                                <p class="card-text">บัตรโดยสาร VIP กรุงเทพฯ -> เชียงใหม่ ลดพิเศษ พร้อมคูปองส่วนลดโรงแรม
                                </p>
                                <a href="#" class="btn btn-outline-primary mt-auto">อ่านต่อ</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 promo-card">
                            <img src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg"
                                class="card-img-top" alt="โปรโมชั่นเที่ยวฟรี">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">โปรพิเศษ! เดินทางฟรี</h5>
                                <p class="card-text">จองครบ 5 เที่ยว ฟรี 1 เที่ยว สำหรับเส้นทางในประเทศทุกเส้นทาง</p>
                                <a href="#" class="btn btn-outline-primary mt-auto">อ่านต่อ</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> -->

        <section class="provider-section mt-5">
            <div class="section-header">
                <h1>Our Providers</h1>
            </div>
            <div class="provider-grid">
                <div class="provider-card">
                    <img src="https://cdn.sanity.io/images/rjtqmwfu/web3-prod/29861de66ce6ac038b60554af24258744b2d102f-400x400.png?auto=format&fit=max&q=90&w=400" alt="Provider 1">
                </div>
                <div class="provider-card">
                    <img src="https://cdn.sanity.io/images/rjtqmwfu/web3-prod/29861de66ce6ac038b60554af24258744b2d102f-400x400.png?auto=format&fit=max&q=90&w=400" alt="Provider 2">
                </div>
                <div class="provider-card">
                    <img src="https://cdn.sanity.io/images/rjtqmwfu/web3-prod/29861de66ce6ac038b60554af24258744b2d102f-400x400.png?auto=format&fit=max&q=90&w=400" alt="Provider 3">
                </div>
                <div class="provider-card">
                    <img src="https://cdn.sanity.io/images/rjtqmwfu/web3-prod/29861de66ce6ac038b60554af24258744b2d102f-400x400.png?auto=format&fit=max&q=90&w=400" alt="Provider 4">
                </div>
                <div class="provider-card">
                    <img src="https://cdn.sanity.io/images/rjtqmwfu/web3-prod/29861de66ce6ac038b60554af24258744b2d102f-400x400.png?auto=format&fit=max&q=90&w=400" alt="Provider 1">
                </div>
                <div class="provider-card">
                    <img src="https://cdn.sanity.io/images/rjtqmwfu/web3-prod/29861de66ce6ac038b60554af24258744b2d102f-400x400.png?auto=format&fit=max&q=90&w=400" alt="Provider 2">
                </div>
                <div class="provider-card">
                    <img src="https://cdn.sanity.io/images/rjtqmwfu/web3-prod/29861de66ce6ac038b60554af24258744b2d102f-400x400.png?auto=format&fit=max&q=90&w=400" alt="Provider 3">
                </div>
                <div class="provider-card">
                    <img src="https://cdn.sanity.io/images/rjtqmwfu/web3-prod/29861de66ce6ac038b60554af24258744b2d102f-400x400.png?auto=format&fit=max&q=90&w=400" alt="Provider 4">
                </div>
                <div class="provider-card">
                    <img src="https://cdn.sanity.io/images/rjtqmwfu/web3-prod/29861de66ce6ac038b60554af24258744b2d102f-400x400.png?auto=format&fit=max&q=90&w=400" alt="Provider 1">
                </div>
                <div class="provider-card">
                    <img src="https://cdn.sanity.io/images/rjtqmwfu/web3-prod/29861de66ce6ac038b60554af24258744b2d102f-400x400.png?auto=format&fit=max&q=90&w=400" alt="Provider 2">
                </div>
            </div>
        </section>
   <!-- <section class="popular-locations">
            <div class="section-header">
                <h1>Our Bus</h1>
            </div>
            <div class="locations-grid container">
                <div class="card">
                    <img src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg"
                        alt="Denmark">
                    <div class="label">รถธรรมดา</div>
                </div>
                <div class="card"><img
                        src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg"
                        alt="Belgium">
                    <div class="label">รถ VIP 1</div>
                </div>
                <div class="card"><img
                        src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg"
                        alt="Mexico">
                    <div class="label">รถ VIP 2</div>
                </div>
                <div class="card"><img
                        src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg"
                        alt="Romania">
                    <div class="label">ภายในรถ (1)</div>
                </div>
                <div class="card"><img
                        src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg"
                        alt="Romania">
                    <div class="label">ภายในรถ (2)</div>
                </div>
                <div class="card"><img
                        src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg"
                        alt="Mexico">
                    <div class="label">อุปกรณ์ความปลอดภัย</div>
                </div>
                <div class="card"><img
                        src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg"
                        alt="Indonesia">
                    <div class="label">อุปกรณ์ความปลอดภัย (2)</div>
                </div>
                <div class="card"><img
                        src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg"
                        alt="Romania">
                    <div class="label">อาหารบนรถ (อาจมีเปลี่ยนแปลงเมนู)</div>
                </div>
                
            </div>
        </section> -->

    </main>

    <footer class="site-footer text-light mt-5">
        <div class="container">
            <div class="row">

                <div class="col-md-4 mb-3">
                    <h5 class="mb-3">New White Label</h5>
                    <p>จองตั๋วรถทัวร์ออนไลน์ เส้นทางทั่วประเทศไทย สะดวก ปลอดภัย และคุ้มค่า</p>
                </div>

                <div class="col-md-4 mb-3">
                    <h6 class="mb-3">เมนูหลัก</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-link">หน้าหลัก</a></li>
                        <li><a href="#" class="footer-link">เส้นทางยอดนิยม</a></li>
                        <li><a href="#" class="footer-link">โปรโมชั่น</a></li>
                        <li><a href="#" class="footer-link">เกี่ยวกับเรา</a></li>
                        <li><a href="#" class="footer-link">ติดต่อเรา</a></li>
                    </ul>
                </div>

                <div class="col-md-4 mb-3">
                    <h6 class="mb-3">ติดต่อเรา</h6>
                    <p class="mb-1">123 กรุงเทพฯ</p>
                    <p class="mb-1"> 022222222</p>
                    <p class="mb-3">xx@mail.com</p>
                    <div>
                        <a href="#" class="social-icon me-2"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon me-2"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-icon me-2"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>

            </div>

            <hr class="border-secondary my-3" />

            <div class="text-center small">
                © 2025 New White Label. All rights reserved.
            </div>
        </div>
    </footer>

</body>

</html>