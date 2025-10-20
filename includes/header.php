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
                        <!-- <i class="bi bi-globe"></i> -->
                        <?=($lang == 'th_TH') ? "<img src='./assets/images/lang/lang-th.png' class='me-1' alt='logo lang th'> TH" : "EN"; ?> <!--Language -->
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