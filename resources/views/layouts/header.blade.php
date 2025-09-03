    <section class="hero-section mb-5">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-transparent">
            <div class="container">
                <div class="d-flex align-items-center">
                    <button class="navbar-toggler me-2 p-0 border-0 d-lg-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon text-dark"></span>
                    </button>
                    <a class="navbar-brand d-flex align-items-center mb-0" href="#">
                        <img src="images/logo-light.png" alt="Logo Light" height="40" class="mt-1 logo-light">
                        <img src="images/logo-danger.png" alt="Logo Dark" height="40" class="mt-1 logo-dark d-none">
                    </a>
                </div>
                <div class="collapse navbar-collapse d-none d-lg-block">
                    <ul class="navbar-nav me-auto fw-semibold mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown">Home</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Home 1</a></li>
                                <li><a class="dropdown-item" href="#">Home 2</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown">User Account</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Sign In</a></li>
                                <li><a class="dropdown-item" href="#">Sign Up</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown">Pages</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">About</a></li>
                                <li><a class="dropdown-item" href="#">Services</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Documentation</a>
                        </li>
                    </ul>
                    <div class="ms-lg-3 d-flex align-items-center">
                        <a href="#" class="text-white btn1 text-decoration-none me-3 sign-in hover-text-primary">
                            <i class="bi bi-box-arrow-in-right"></i> Sign In
                        </a>
                        <a href="#" class="btn btn-light btn-sm fw-semibold py-3 px-4">
                            Signup Free! <i class="bi bi-arrow-right-circle ms-1"></i>
                        </a>
                    </div>
                </div>
                <a href="#" class="btn btn-danger py-2 px-3 fw-semibold d-lg-none">
                    <i class="bi bi-box-arrow-in-right"></i> Login
                </a>
            </div>
        </nav>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNav">
            <div class="offcanvas-header d-flex justify-content-end">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Home</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Home 1</a></li>
                            <li><a class="dropdown-item" href="#">Home 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">User Account</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sign In</a></li>
                            <li><a class="dropdown-item" href="#">Sign Up</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Pages</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">About</a></li>
                            <li><a class="dropdown-item" href="#">Services</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Documentation</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container py-5">
            <div class="row align-items-center">
                <!-- Content first on mobile -->
                <div class="col-lg-6 order-1 order-lg-0">
                    <div class="hero-text mt-sm-5 text-white">
                        <h1 class="mb-2 fw-bold hero-heading">Killar is Perfect</h1>
                        <h1 class="hero-heading">Digital Marketing Shop</h1>
                        <p class="mt-5 mb-2 lh-lg">
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui
                            blanditiis praesentium voluptatum deleniti atque corrupti.
                        </p>
                        <div class="mt-4 py-3">
                            <a href="#" class="btn btn-light me-3 py-4 px-5">
                                Get Started <i class="bi bi-arrow-right-circle ms-1"></i>
                            </a>
                            <a href="#" class="btn btn-dark py-4 px-5" style="background-color:#02121F">
                                See Live Demo <i class="bi bi-play-circle ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center mt-4 mt-lg-0 order-2 order-lg-1">
                    <img src="{{ asset('images/digital-marketing.png') }}" alt="Hero Image"
                        class="img-fluid mx-auto d-block" style="max-width:100%; height:auto;">
                </div>
            </div>
        </div>
    </section>