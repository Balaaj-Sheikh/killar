@extends('layouts.master')
@section('content')
    <section class="reviews mt-5">
        <div class="container">
            <div>
                <h1 class="text-center fw-bold fs-2 pt-5">Customers have consistently rated <br
                        class="d-none d-lg-block">Around 4.7/5 stars</h1>
            </div>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

            <div class="container my-5 ">
                <div class="row row-cols-1 row-cols-md-3 g-4 border-none">
                    <div class="col border-0">
                        <div class="text-center">
                            <div class="mb-2 mt-3 text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="mb-2">"suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur."</p>
                            <img src="{{ asset('images/cap.png') }}" alt="Company 1" class="img-fluid w-50 d-block mx-auto">
                        </div>
                    </div>
                    <div class="col">
                        <div class="h-100 text-center p-3">
                            <div class="mb-2 text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill second-review-last-star"></i>
                            </div>
                            <p class="mb-2">"suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur."</p>
                            <img src="{{ asset('images/trust.png') }}" alt="Company 2"
                                class="img-fluid w-50 d-block mx-auto">
                        </div>
                    </div>
                    <div class="col">
                        <div class="h-100 text-center p-3">
                            <div class="mb-2 text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="mb-2">"suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur."</p>
                            <img src="{{ asset('images/good.png') }}" alt="Company 3"
                                class="img-fluid w-50 d-block mx-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Explore-1">
        <div class="container py-5">
            <div class="row align-items-center">
                <!-- Left side image -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="image-container">
                        <img src="images/class-men-1.png" alt="Main" class="main-img img-fluid ms-2">
                        <img src="images/lists-2.png" alt="Overlay 1" class="overlay-img overlay1">
                        <img src="images/lists-3.png" alt="Overlay 2" class="overlay-img overlay2">
                    </div>
                </div>

                <!-- Right side content -->
                <div class="col-lg-6">
                    <span class="badge bg-User-Analytics text-danger mb-2">User Analytics</span>
                    <h2 class="fw-bold explore-heading-1 mb-4">We Make It Very Simple & Easy To Track <br
                            class="d-none d-lg-block"> All User
                        Analytics</h2>
                    <p class="text-muted lh-lg">Temporibus autem quibusdam et aut officiis debitis aut rerum
                        necessitatibus
                        saepe eveniet ut et voluptates repudiandae sint et molestiae.</p>
                    <ul class="list-unstyled row">
                        <li class="col-6 mb-3 d-flex align-items-center">
                            <span class="checkmark me-2">✔</span> Collaborate Multi Projects
                        </li>
                        <li class="col-6 mb-3 d-flex align-items-center">
                            <span class="checkmark me-2">✔</span> User Chat System
                        </li>
                        <li class="col-6 mb-3 d-flex align-items-center">
                            <span class="checkmark me-2">✔</span> Merging System Available
                        </li>
                        <li class="col-6 mb-3 d-flex align-items-center">
                            <span class="checkmark me-2">✔</span> User Chat System
                        </li>
                    </ul>

                    <button
                        class="btn btn-Explore-Benefits text-danger rounded-pill py-3 px-3 border-danger fw-bold mt-3 rounded">Explore
                        Benefits ➔</button>
                </div>
            </div>
        </div>
    </section>

    <section class="Explore-2">
        <div class="container py-5 brand-section">
            <div class="row align-items-center">
                <!-- Left side -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <span class="badge bg-easy-marketing text-danger rounded-pill mb-2">Easy Marketing</span>
                    <h2 class="fw-bold">Build Your Brand <br>
                        Marketing More.. Better</h2>
                    <p class="text-muted">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                        saepe eveniet ut et voluptates repudiandae sint et molestiae.</p>

                    <div class="row mt-4 text-center">
                        <div class="col-4">
                            <div class="d-inline-flex align-items-baseline justify-content-center">
                                <div class="brand-counter me-1" data-target="70">0</div>
                                <span class="fs-1 fw-bold Billion">B</span>
                            </div>
                            <p class="text-muted small fw-bold">Install Apps</p>
                        </div>

                        <div class="col-4">
                            <div class="d-inline-flex align-items-baseline justify-content-center">
                                <div class="brand-counter" data-target="42">0</div>
                            </div>
                            <p class="text-muted small fw-bold">In Countries</p>
                        </div>

                        <div class="col-4">
                            <div class="d-inline-flex align-items-baseline justify-content-center">
                                <div class="brand-counter me-1" data-target="57">0</div>
                                <span class="fs-1 fw-bold Million">M</span>
                            </div>
                            <p class="text-muted small fw-bold">Happy Users</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="brand-image-box">
                        <img src="images/class-men-2.png" alt="Main" class="brand-main img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 services">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4">
                    <h2 class="fw-bold mb-3">High Quality & Unlimited <br> Features</h2>
                    <p class="text-light fw-light mb-4">
                        At vero eos et accusamus praesentium voluptatum deleniti atque corrupti quos dolores
                        et quas molestias excepturi sint occaecati cupiditate
                    </p>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <span class="text-success  fw-light me-2">✔</span>
                            Individual approach to the brand
                        </li>
                        <li class="mb-2">
                            <span class="text-success  fw-light me-2">✔</span>
                            We guarantee the result after a month
                        </li>
                        <li class="mb-2">
                            <span class="text-success  fw-light me-2">✔</span>
                            Completing tasks exactly on time
                        </li>
                    </ul>
                    <a href="#" class="btn px-3 py-3 rounded-3 mt-3 text-white">
                        Check All Services
                    </a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div>
                                    <div
                                        class="bg-success social-media-account bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center mb-3 me-3">
                                        <i class="bi bi-twitter fs-3 text-success"></i>
                                    </div>
                                    <h5 class="fw-bold mb-2">Social Marketing</h5>
                                    <p class="small text-light fw-light">Think of a news blog that’s filled with
                                        content hourly
                                        on the day of going live. However, reviewers tend to be distracted.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div>
                                    <div
                                        class="bg-warning social-media-account bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center mb-3 me-3">
                                        <i class="bi bi-image fs-3 text-warning"></i>
                                    </div>
                                    <h5 class="fw-bold mb-2">Graphic Design</h5>
                                    <p class="small text-light fw-light">Think of a news blog that’s filled with
                                        content hourly
                                        on the day of going live. However, reviewers tend to be distracted.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div>
                                    <div
                                        class="bg-primary social-media-account bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center mb-3 me-3">
                                        <i class="bi bi-lightbulb fs-3 text-primary"></i>
                                    </div>
                                    <h5 class="fw-bold mb-2">Off Page On Page SEO</h5>
                                    <p class="small text-light fw-light">Think of a news blog that’s filled with
                                        content hourly
                                        on the day of going live. However, reviewers tend to be distracted.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div>
                                    <div
                                        class="bg-info social-media-account bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center mb-3 me-3">
                                        <i class="bi bi-envelope fs-3 text-info"></i>
                                    </div>
                                    <h5 class="fw-bold mb-2">Email Marketing</h5>
                                    <p class="small text-light fw-light">Think of a news blog that’s filled with
                                        content hourly
                                        on the day of going live. However, reviewers tend to be distracted.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="py-5">
        <div class="container pricing-heading">
            <div class="text-center mb-5">
                <span class="badge rounded-pill text-success mb-2">Choose
                    Plan</span>
                <h2 class="display-6 fw-bold mb-1">Choose your
                    Better Plan</h2>
                <p class="text-muted mb-0">At vero eos et accusamus et justo
                    odio dignissimos ducimus</p>
            </div>
            <div class="row g-4 align-items-stretch">
                <div class="col-12 col-lg-4">
                    <div class="card h-100 border rounded-4 free-box shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="fs-4 fw-bold text-center mb-1">Free</h3>
                            <p class="text-muted text-center small mb-3">Use Only For Personal &amp; Students</p>
                            <div class="text-center mb-4">
                                <span class="fs-4 align-top">$</span>
                                <span class="display-5 fw-bold">0</span>
                            </div>
                            <div class="py-3 px-3 rounded-4 free-box-features">
                                <ul class="list-unstyled vstack gap-2 mb-4 py-3 px-3 rounded-4">
                                    <li class="d-flex align-items-start gap-2 text-dark">
                                        <i class="bi bi-check-circle text-success"></i><span>3 Users</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2 text-dark">
                                        <i class="bi bi-check-circle text-success"></i><span>5 Files</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2 text-dark">
                                        <i class="bi bi-check-circle text-success"></i><span>Public Share &amp;
                                            Likes</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2 text-dark">
                                        <i class="bi bi-check-circle text-success"></i><span>Chat Supports</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2 text-dark">
                                        <i class="bi bi-check-circle text-success"></i><span>Unlimited Space</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2 text-dark">
                                        <i class="bi bi-check-circle text-success"></i><span>Upcoming Softwares</span>
                                    </li>
                                </ul>
                                <button class="btn btn-light btn-lg w-100 text-white fw-semibold">
                                    Go For Pro <i class="bi bi-box-arrow-in-right right-arrow fw-bold"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class=" h-100 border-0 rounded-4 shadow-lg Pro-Version text-white">
                        <div class="card-body p-4">
                            <h3 class="fs-4 fw-bold text-center mb-1">Pro Version</h3>
                            <p class="text-white-50 text-center small mb-3">Use For Company &amp; Corporate</p>

                            <div class="text-center mb-4">
                                <span class="fs-4 align-top text-white-75">$</span>
                                <span class="display-5 fw-bold">19</span>
                            </div>
                            <div class="py-3 px-3 rounded-4 Pro-Version-features">
                                <ul class="list-unstyled vstack gap-2 mb-4 py-3 px-3 rounded-4">
                                    <li class="d-flex align-items-start gap-2 text-dark">
                                        <i class="bi bi-check-circle text-success"></i><span>10 Users</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2 text-dark">
                                        <i class="bi bi-check-circle text-success"></i><span>20 Files</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2 text-dark">
                                        <i class="bi bi-check-circle text-success"></i><span>Public Share &amp;
                                            Likes</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2 text-dark">
                                        <i class="bi bi-check-circle text-success"></i><span>Chat Supports</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2 text-dark">
                                        <i class="bi bi-check-circle text-success"></i><span>Unlimited Space</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2 text-dark">
                                        <i class="bi bi-check-circle text-success"></i><span>Upcoming Softwares</span>
                                    </li>
                                </ul>
                                <button class="btn btn-light btn-lg w-100 text-white fw-semibold">
                                    Go For Pro <i class="bi bi-box-arrow-in-right text-muted fw-bold"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Business -->
                <div class="col-12 col-lg-4">
                    <div class="card h-100 border rounded-4 Business-box shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="fs-4 fw-bold text-center mb-1">Business</h3>
                            <p class="text-muted text-center small mb-3">Use For Commercial &amp; Resell</p>

                            <div class="text-center mb-4">
                                <span class="fs-4 align-top">$</span>
                                <span class="display-5 fw-bold">99</span>
                            </div>
                            <div class="py-3 px-3 rounded-4 Business-box-features">
                                <ul class="list-unstyled vstack gap-2 mb-4 py-3 px-3 rounded-4">
                                    <li class="d-flex align-items-start gap-2 text-dark">
                                        <i class="bi bi-check-circle text-success"></i><span>Unlimited Users</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2 text-dark">
                                        <i class="bi bi-check-circle text-success"></i><span>50 Files</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2 text-dark">
                                        <i class="bi bi-check-circle text-success"></i><span>Public Share &amp;
                                            Likes</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2 text-dark">
                                        <i class="bi bi-check-circle text-success"></i><span>Chat Supports</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2 text-dark">
                                        <i class="bi bi-check-circle text-success"></i><span>Unlimited Space</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2 text-dark">
                                        <i class="bi bi-check-circle text-success"></i><span>Upcoming Softwares</span>
                                    </li>
                                </ul>
                                <button class="btn btn-light btn-lg w-100 text-white fw-semibold">
                                    Go For Pro <i class="bi bi-box-arrow-in-right fw-bold right-arrow"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="testimonial-container">
            <span class="badge rounded-pill text-success mb-2">Choose
                Plan</span>
            <h2 class="testimonial-header display-6 fw-bold">
                What Our Clients Say's
            </h2>
            <p class="testimonial-sub">
                At vero eos et accusamus et iusto odio dignissimos ducimus
            </p>
            <div>
                <div class="testimonial active">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client 1">
                    <div class="name">David D. Jackson</div>
                    <div class="role">CEO of Apple</div>
                    <div class="stars">⭐⭐⭐⭐⭐</div>
                    <div class="review">"These cases are perfectly simple and easy to distinguish. In a free hour, when
                        our
                        power of choice is untrammelled and when nothing prevents our being able to do what we like
                        best,
                        every pleasure is to be welcomed and every pain avoided certain circumstances."</div>
                </div>
                <div class="testimonial">
                    <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Client 2">
                    <div class="name">Sophia Martinez</div>
                    <div class="role">Marketing Manager</div>
                    <div class="stars">⭐⭐⭐⭐⭐</div>
                    <div class="review">"These cases are perfectly simple and easy to distinguish. In a free hour, when
                        our
                        power of choice is untrammelled and when nothing prevents our being able to do what we like
                        best,
                        every pleasure is to be welcomed and every pain avoided certain circumstances."</div>
                </div>
                <div class="testimonial">
                    <img src="https://randomuser.me/api/portraits/men/15.jpg" alt="Client 3">
                    <div class="name">David D. Jackson</div>
                    <div class="role">Product Designer</div>
                    <div class="stars">⭐⭐⭐⭐⭐</div>
                    <div class="review">"These cases are perfectly simple and easy to distinguish. In a free hour, when
                        our
                        power of choice is untrammelled and when nothing prevents our being able to do what we like
                        best,
                        every pleasure is to be welcomed and every pain avoided certain circumstances."</div>
                </div>
                <div class="testimonial">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client 3">
                    <div class="name">Michael Brown</div>
                    <div class="role">Product Designer</div>
                    <div class="stars">⭐⭐⭐⭐⭐</div>
                    <div class="review">"These cases are perfectly simple and easy to distinguish. In a free hour, when
                        our
                        power of choice is untrammelled and when nothing prevents our being able to do what we like
                        best,
                        every pleasure is to be welcomed and every pain avoided certain circumstances."</div>
                </div>
                <div class="testimonial">
                    <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Client 3">
                    <div class="name">Sophia Martinez</div>
                    <div class="role">Product Designer</div>
                    <div class="stars">⭐⭐⭐⭐⭐</div>
                    <div class="review">"These cases are perfectly simple and easy to distinguish. In a free hour, when
                        our
                        power of choice is untrammelled and when nothing prevents our being able to do what we like
                        best,
                        every pleasure is to be welcomed and every pain avoided certain circumstances."</div>
                </div>
            </div>
            <div class="dots">
                <span class="dot active" onclick="showSlide(0)"></span>
                <span class="dot" onclick="showSlide(1)"></span>
                <span class="dot" onclick="showSlide(2)"></span>
                <span class="dot" onclick="showSlide(3)"></span>
                <span class="dot" onclick="showSlide(4)"></span>
            </div>
        </div>
    </section>

    <section class="py-5 text-center partners">
        <div class="container">
            <h5 class="fw-semibold mb-5">
                Join over 25,000 companies around the <br>
                world that trust the <span class="text-primary">Killar</span> platforms
            </h5>
            <div class="row justify-content-center align-items-center mt-5 mb-5">
                <div class="col-6 col-md-3 col-lg-2">
                    <img src="images/razorpay.png" class="img-fluid" alt="Razorpay">
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <img src="images/sitepoint.png" class="img-fluid" alt="Sitepoint">
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <img src="images/codrops.png" class="img-fluid" alt="Codrops">
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <img src="images/paypal.png" class="img-fluid" alt="PayPal">
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <img src="images/dribbble.png" class="img-fluid" alt="Dribbble">
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <img src="images/unsplash.png" class="img-fluid" alt="Unsplash">
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <img src="images/hubspot.png" class="img-fluid" alt="HubSpot">
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <img src="images/shopify.png" class="img-fluid" alt="Shopify">
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <img src="images/rakuten.png" class="img-fluid" alt="Rakuten">
                </div>
            </div>
        </div>
    </section>

    <section class="blog-grid py-4 py-lg-5">
        <div class="container Latest-Updates">
            <div class="text-center mb-5">
                <span class="badge rounded-pill text-success mb-2">Latest
                    Updates</span>
                <h2 class="display-6 fw-bold mb-1">Our Latest
                    Updates & News</h2>
                <p class="text-muted mb-0">vero accusamus et iusto odio
                    dignissimos ducimus</p>
            </div>
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-lg-6">
                    <article class="post-card h-100">
                        <div class="post-thumb">
                            <img src="images/blog-2.jpg" alt="How To Integrate Bootstrap into Magento?">
                        </div>
                        <div class="post-body">
                            <span class="badge post-badge badge-resources">Resources</span>
                            <h3 class="post-title">
                                How To Integrate Bootstrap into Magento?
                            </h3>
                            <div class="post-date">24 May 2023</div>
                            <p class="post-excerpt">
                                Even if your less into design and more into content strategy you may find some…
                            </p>
                            <a href="#" class="post-link">Continue Reading <span class="arrow">→</span></a>
                        </div>
                    </article>
                </div>
                <!-- Card 2 -->
                <div class="col-lg-6">
                    <article class="post-card h-100">
                        <div class="post-thumb">
                            <img src="images/blog-6.jpg" alt="Why Killar is Perfect For Your Website?">
                        </div>
                        <div class="post-body">
                            <span class="badge post-badge badge-wordpress">WordPress</span>
                            <h3 class="post-title">
                                Why Killar is Perfect For Your Website?
                            </h3>
                            <div class="post-date">10 June 2023</div>
                            <p class="post-excerpt">
                                Even if your less into design and more into content strategy you may find some…
                            </p>
                            <a href="#" class="post-link">Continue Reading <span class="arrow">→</span></a>
                        </div>
                    </article>
                </div>
                <!-- Card 3 -->
                <div class="col-lg-6">
                    <article class="post-card h-100">
                        <div class="post-thumb">
                            <img src="images/blog-3.jpg" alt="How To Pay Fees For Integration?">
                        </div>
                        <div class="post-body">
                            <span class="badge post-badge badge-payment">Payment</span>
                            <h3 class="post-title">
                                How To Pay Fees For Integration?
                            </h3>
                            <div class="post-date">07 Apr 2023</div>
                            <p class="post-excerpt">
                                Even if your less into design and more into content strategy you may find some…
                            </p>
                            <a href="#" class="post-link">Continue Reading <span class="arrow">→</span></a>
                        </div>
                    </article>
                </div>
                <!-- Card 4 -->
                <div class="col-lg-6">
                    <article class="post-card h-100">
                        <div class="post-thumb">
                            <img src="images/blog-4.jpg" alt="How To Integrate Bootstrap into Shopify?">
                        </div>
                        <div class="post-body">
                            <span class="badge post-badge badge-software">Software</span>
                            <h3 class="post-title">
                                How To Integrate Bootstrap into Shopify?
                            </h3>
                            <div class="post-date">17 Apr 2023</div>
                            <p class="post-excerpt">
                                Even if your less into design and more into content strategy you may find some…
                            </p>
                            <a href="#" class="post-link">Continue Reading <span class="arrow">→</span></a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section> 

    <section class="subscribe-section position-relative py-5 mb-5">
        <!-- Left Image -->
        <img src="images/circle.png" alt="Circle" class="position-absolute start-0 top-50 translate-middle-y">
        <!-- Right Image -->
        <img src="images/alert-bg.png" alt="Alert Shape" class="position-absolute end-0 top-50 translate-middle-y">
        <div class="container newslt-heading text-center position-relative">
            <h2 class="fw-bold text-white mb-2 mt-5">Are You Already Working
                With Us?</h2>
            <p class="text-white mb-5">voluptatum deleniti atque corrupti quos
                dolores et quas molestias.</p>

            <form class="d-flex justify-content-center">
                <div class="newsltr-form position-relative mb-4">
                    <input type="email" name="email" class="form-control email-box border-0 rounded-3 py-4 pe-40px"
                        placeholder="Enter Your email">
                    <button class="btn btn-dark rounded-3 py-3 px-3 position-absolute top-50 end-0 translate-middle-y me-2"
                        type="submit">
                        Subscribe
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
