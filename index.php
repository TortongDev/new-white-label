<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Whitelabel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">New Whitelabel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link" href="#">เกี่ยวกับเรา</a>
                        </li>
                       
                         <li class="nav-item">&nbsp;</li>
                        <li class="nav-item d-flex justify-content-center align-items-center">
                            <a class="nav-link" href="#">TH</a>
                            <a class="nav-link" href="#">EN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="banner">
        <div class="banner-content text-center mt-3">
            <h1>จองตั๋วออนไลน์กับ New While Label</h1>
            <h2>จองได้ง่ายไม่ต้องไปที่เค้าเตอร์ให้เสียเวลา</h2>
        </div>
        <div class="form-search container bg-light p-4 rounded border-primary border">
            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="one-way-tab" data-bs-toggle="tab" data-bs-target="#one-way" type="button" role="tab" aria-controls="one-way" aria-selected="true">ไป</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="round-trip-tab" data-bs-toggle="tab" data-bs-target="#round-trip" type="button" role="tab" aria-controls="round-trip" aria-selected="false">ไปและกลับ</button>
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
                                <input type="number" name="" id="" class="form-control form-control-lg" placeholder="ผู้ใหญ่">
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
                                <input type="number" name="" id="" class="form-control form-control-lg" placeholder="ผู้ใหญ่">
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

    <main class="container">
        
       <section class="popular-locations">
            <div class="section-header">
                <h1>จุดหมายปลายทางยอดนิยม</h1>
            </div>
            <div class="locations-grid">
                <div class="card"><img src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg" alt="Denmark"><div class="label">Denmark</div></div>
                <div class="card"><img src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg" alt="Belgium"><div class="label">Belgium</div></div>
                <div class="card"><img src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg" alt="Mexico"><div class="label">Mexico</div></div>
                <div class="card"><img src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg" alt="Mexico"><div class="label">Mexico</div></div>
                <div class="card"><img src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg" alt="Indonesia"><div class="label">Indonesia</div></div>
                <div class="card"><img src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg" alt="Romania"><div class="label">Romania</div></div>
                <div class="card"><img src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg" alt="Romania"><div class="label">Romania</div></div>
            </div>
        </section>
        <section class="flight-deals">
            <div class="section-header ">
                <h1>เส้นทางยอดนิยม</h1>
            </div>
            <div class="flight-section">

                <div class="flight-card">
                <div class="flight-img">
                    <span class="badge">Cheapest</span>
                    <img src="https://images.unsplash.com/photo-1504196606672-aef5c9cefc92" alt="flight">
                    <span class="rating">5</span>
                </div>
                <div class="flight-info">
                    <div class="tags">
                    <span class="tag">Toronto</span>
                    <span class="arrow">-></span>
                    <span class="tag">Bangkok</span>
                    </div>
                    <h3>AstraFlight 215</h3>
                    <p><span class="airline">IndiGo</span> • 1-stop at Frankfurt</p>
                    <p class="date">Sep 04, 2024 - Sep 07, 2024</p>
                    <div class="bottom">
                    <span class="price">From $300</span>
                    <span class="seats">27 seats left</span>
                    </div>
                </div>
                </div>

                <div class="flight-card">
                <div class="flight-img">
                    <span class="badge">Cheapest</span>
                    <img src="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91" alt="flight">
                    <span class="rating">4.7</span>
                </div>
                <div class="flight-info">
                    <div class="tags">
                    <span class="tag">Chicago</span>
                    <span class="tag">Melbourne</span>
                    </div>
                    <h3>Cloudrider 789</h3>
                    <p><span class="airline">IndiGo</span> • 1-stop at Dallas</p>
                    <p class="date">Sep 11, 2024 - Sep 13, 2024</p>
                    <div class="bottom">
                    <span class="price">From $550</span>
                    <span class="seats">14 seats left</span>
                    </div>
                </div>
                </div>

                <div class="flight-card">
                    <div class="flight-img">
                    <span class="badge">Cheapest</span>
                    <img src="https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1" alt="flight">
                    <span class="rating">4.5</span>
                    </div>
                    <div class="flight-info">
                    <div class="tags">
                        <span class="tag">Miami</span>
                        <span class="tag">Tokyo</span>
                    </div>
                    <h3>Aether Express 901</h3>
                    <p><span class="airline">IndiGo</span> • 1-stop at Seoul</p>
                    <p class="date">Sep 22, 2024 - Sep 24, 2024</p>
                    <div class="bottom">
                        <span class="price">From $450</span>
                        <span class="seats">13 seats left</span>
                    </div>
                    </div>
                </div>
                <div class="flight-card">
                    <div class="flight-img">
                    <span class="badge">Cheapest</span>
                    <img src="https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1" alt="flight">
                    <span class="rating">4.5</span>
                    </div>
                    <div class="flight-info">
                    <div class="tags">
                        <span class="tag">Miami</span>
                        <span class="tag">Tokyo</span>
                    </div>
                    <h3>Aether Express 901</h3>
                    <p><span class="airline">IndiGo</span> • 1-stop at Seoul</p>
                    <p class="date">Sep 22, 2024 - Sep 24, 2024</p>
                    <div class="bottom">
                        <span class="price">From $450</span>
                        <span class="seats">13 seats left</span>
                    </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="route-popular">
            <div class="section-header ">
                <h1>เส้นทางยอดนิยม</h1>
            </div>
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4">

                    <div class="col">
                        <div class="card h-100 route-card">
                        <img src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg" class="card-img-top" alt="Bangkok - Chiang Mai">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">กรุงเทพฯ -> เชียงใหม่</h5>
                            <p class="card-text">รถบัส VIP 24 ที่นั่ง ใช้เวลาเดินทาง 9 ชม.</p>
                            <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="price">B 750</span>
                            <a href="#" class="btn btn-primary">จองเลย</a>
                            </div>
                        </div>
                        </div>  
                    </div>

                    <div class="col">
                        <div class="card h-100 route-card">
                        <img src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg" class="card-img-top" alt="Bangkok - Phuket">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">กรุงเทพฯ -> ภูเก็ต</h5>
                            <p class="card-text">รถบัสปรับอากาศ ใช้เวลาเดินทาง 12 ชม.</p>
                            <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="price">B 890</span>
                            <a href="#" class="btn btn-primary">จองเลย</a>
                            </div>
                        </div>
                        </div>  
                    </div>

                    <div class="col">
                        <div class="card h-100 route-card">
                        <img src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg" class="card-img-top" alt="Bangkok - Pattaya">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">กรุงเทพฯ -> พัทยา</h5>
                            <p class="card-text">รถบัสปรับอากาศ ใช้เวลาเดินทาง 2 ชม.</p>
                            <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="price">B 150</span>
                            <a href="#" class="btn btn-primary">จองเลย</a>
                            </div>
                        </div>
                        </div>  
                    </div>

                    <div class="col">
                        <div class="card h-100 route-card">
                        <img src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg" class="card-img-top" alt="Bangkok - Pattaya">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">กรุงเทพฯ -> พัทยา</h5>
                            <p class="card-text">รถบัสปรับอากาศ ใช้เวลาเดินทาง 2 ชม.</p>
                            <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="price">B 150</span>
                            <a href="#" class="btn btn-primary">จองเลย</a>
                            </div>
                        </div>
                        </div>  
                    </div>

                    <div class="col">
                        <div class="card h-100 route-card">
                        <img src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg" class="card-img-top" alt="Bangkok - Pattaya">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">กรุงเทพฯ -> พัทยา</h5>
                            <p class="card-text">รถบัสปรับอากาศ ใช้เวลาเดินทาง 2 ชม.</p>
                            <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="price">B 150</span>
                            <a href="#" class="btn btn-primary">จองเลย</a>
                            </div>
                        </div>
                        </div>  
                    </div>

                    <div class="col">
                        <div class="card h-100 route-card">
                        <img src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg" class="card-img-top" alt="Bangkok - Pattaya">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">กรุงเทพฯ -> พัทยา</h5>
                            <p class="card-text">รถบัสปรับอากาศ ใช้เวลาเดินทาง 2 ชม.</p>
                            <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="price">B 150</span>
                            <a href="#" class="btn btn-primary">จองเลย</a>
                            </div>
                        </div>
                        </div>  
                    </div>

                </div>
                
            </div>
        </section>

        <section class="new-promotion">
            <div class="section-header">
                <h1>Promotion / News</h1>
            </div>
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4">

                    <div class="col">
                        <div class="card h-100 promo-card">
                        <img src="https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1300/v1688589767/jfgyhr7ouo0nhqvkjtua.jpg" 
                            class="card-img-top" alt="โปรโมชั่นทะเล">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">เที่ยวทะเลราคาพิเศษ</h5>
                            <p class="card-text">รับส่วนลด 20% สำหรับเส้นทาง กรุงเทพฯ -> ภูเก็ต และพัทยา ถึงสิ้นเดือนนี้เท่านั้น</p>
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
                            <p class="card-text">บัตรโดยสาร VIP กรุงเทพฯ -> เชียงใหม่ ลดพิเศษ พร้อมคูปองส่วนลดโรงแรม</p>
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
        </section>



    </main>

<footer class="site-footer bg-dark text-light mt-5">
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
            <p class="mb-1">123  กรุงเทพฯ</p>
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