@extends('front.layouts.app')

@push('custom-style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="{{ asset('css/front/home.css') }}">
@endpush

@section('content')
<main class="home-container">
   <div class="hero-section">
        <div class="container">
            <div class="hero-section-inner">
                <div class="hero-content">
                    <h3>Now better than ever</h3>
                    <h1>Create beautiful websites easy, fast & without hustle!</h1>
                </div>
                <div class="hero-video">
                    <div class="video-btn">
                        <a href="#" class="video-btn">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
   </div>
   <div class="container">
        <div class="vc-custom">
            <div class="single-item">
                <ul>
                    <li>
                        <span><img src="{{ asset('images/front/service-1.png') }}" alt=""></span>
                        <span class="list-content">One click install</span>                 
                    </li>
                </ul>
                <p>One click is all you need to start using demo that you like!</p>
            </div>
            <div class="single-item">
                <ul>
                    <li>
                        <span><img src="{{ asset('images/front/service-2.png') }}" alt=""></span>
                        <span class="list-content">Perfect plugin set</span>                 
                    </li>
                </ul>
                <p>Woo commerce, WP bakery, Slider Revolution you name it!</p>
            </div>
            <div class="single-item">
                <ul>
                    <li>
                        <span><img src="{{ asset('images/front/service-3.png') }}" alt=""></span>
                        <span class="list-content">Live drag & drop builder!</span>                 
                    </li>
                </ul>
                <p>With over 100+ pre build element aimed to maximum efficiency</p>
            </div>
        </div>
   </div>
   <section id="solutions">
    <div class="container">
        <div class="solution">
            <div class="section-title">
                <h2><span class="highlight-blue">AlmahiTech</span> Solutions</h2>
                <p>With our innovative tools and solutions tailored to empower your business,<br>you just need to sit back and see your problems solved, business<br> operations accelerated and team productivity boosted</p>
            </div>
            <div class="solution-item">
                <div class="solution-single-item">
                   <a href="#">
                        <img src="{{ asset('images/front/user-frontend-logo.webp') }}">
                   </a>
                   <p>Ultimate Frontend Solution for WordPress</p>
                   <a href="#" class="text-wpuf">Learn more →</a>
                </div>
                <div class="solution-single-item">
                   <a href="#">
                        <img src="{{ asset('images/front/dokan-logo.webp') }}">
                   </a>
                   <p>Build your dream multi vendor marketplace</p>
                   <a href="#" class="text-dokan">Learn more →</a>
                </div>
                <div class="solution-single-item">
                   <a href="#">
                        <img src="{{ asset('images/front/pm-logo.webp') }}">
                   </a>
                   <p>Project Management tool for your team</p>
                   <a href="#" class="text-wpuf">Learn more →</a>
                </div>
                <div class="solution-single-item">
                   <a href="#">
                        <img src="{{ asset('images/front/erp-logo-color.webp') }}">
                   </a>
                   <p>Open source ERP solution built specially for small businesses</p>
                   <a href="#" class="text-wpuf">Learn more →</a>
                </div>
                <div class="solution-single-item">
                   <a href="#">
                        <img src="{{ asset('images/front/appsero.webp') }}">
                   </a>
                   <p>Perfect companion for WordPress developers</p>
                   <a href="#" class="text-wpuf">Learn more →</a>
                </div>
                <div class="solution-single-item">
                   <a href="#">
                        <img src="{{ asset('images/front/wct-logo.webp') }}">
                   </a>
                   <p>Track WooCommerce conversion data without any coding</p>
                   <a href="#" class="text-wpuf">Learn more →</a>
                </div>
                <div class="solution-single-item">
                   <a href="#">
                        <img src="{{ asset('images/front/wemail-logo.webp') }}">
                   </a>
                   <p>Design and send newsletters faster than ever</p>
                   <a href="#" class="text-wpuf">Learn more →</a>
                </div>
                <div class="solution-single-item">
                   <a href="#">
                        <img src="{{ asset('images/front/wepos-logo.webp') }}">
                   </a>
                   <p>Fastest POS System for WooCommerce</p>
                   <a href="#" class="text-wpuf">Learn more →</a>
                </div>
                <div class="solution-single-item">
                   <a href="#">
                        <img src="{{ asset('images/front/halogo.webp') }}">
                   </a>
                   <p>Powerful elementor widgets to create beautiful websites</p>
                   <a href="#" class="text-dokan">Learn more →</a>
                </div>
            </div>
            <div class="product-all">
                <a href="#" class="btn">View All Products <span>↝</span></a>
            </div>
        </div>
    </div>        
   </section>
   <section class="sepcial-section">
        <div class="container">
            <div class="section-title">
                <h2><span class="highlight-blue">What’s so Unique </span>About almahiTech?</h2>
                <p>We help small businesses around the world with amazing products<br>that solve their business and web problems. weDevs is special because -</p>
            </div>
            <div class="special_box">
                <div class="single-special-box">
                    <div class="special-box-item">
                        <div class="special-box-item-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>We are Open<br>Source</h3>
                    </div>
                    <div class="special-box-item">
                        <div class="special-box-item-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Problem<br>Solvers</h3>
                    </div>
                    <div class="special-box-item">
                        <div class="special-box-item-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Highly-Rated<br>Support</h3>
                    </div>
                    <div class="special-box-item">
                        <div class="special-box-item-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Feature-Rich Free<br>& Pro Plugins</h3>
                    </div>
                    <div class="special-box-item">
                        <div class="special-box-item-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Regular Updates<br>& Bug fixes</h3>
                    </div>
                    <div class="special-box-item">
                        <div class="special-box-item-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Extensions to<br>step-up your game</h3>
                    </div>
                </div>
            </div>
            <div class="glance-box">
                <div class="section-title">
                    <h2><span class="highlight-blue">almahiTech </span>is growing!</h2>
                </div>
                <div class="glance-box-content">
                    <div class="glance-box-item">
                        <img src="{{ asset('images/front/team-icon.webp') }}" alt="team" width="70" height="70">
                        <h3>98+</h3>
                        <p>Team<br>Members</p>
                    </div>
                    <div class="glance-box-item">
                        <img src="{{ asset('images/front/puzzel-icon.webp') }}" alt="team" width="70" height="70">
                        <h3>20+</h3>
                        <p>Amazing<br>Products</p>
                    </div>
                    <div class="glance-box-item">
                        <img src="{{ asset('images/front/download-icon.webp') }}" alt="team" width="70" height="70">
                        <h3>8.5 M+</h3>
                        <p>Free<br>Downloads</p>
                    </div>
                    <div class="glance-box-item">
                        <img src="{{ asset('images/front/smail-icon.webp') }}" alt="team" width="70" height="70">
                        <h3>424k+</h3>
                        <p>Happy<br>Customers</p>
                    </div>
                    <div class="glance-box-item">
                        <img src="{{ asset('images/front/glob-icon.webp') }}" alt="team" width="70" height="70">
                        <h3>160+</h3>
                        <p>Countries<br>Worldwide</p>
                    </div>
                </div>
            </div>
        </div>
   </section>
   <section class="testimonial-section">
        <div class="container">
            <div class="word-customer-title">
                <h2>US based company trusted by businesses<br> and individuals all over the world!</h2>
            </div>
            <div class="section-title">
                <h3>Testimonials</h3>
                <h2><span class="highlight-blue">See what people are saying </span>about our services!</h2>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9  col-md-8 testimonial-side-margin">
                            <div class="testimonial-wrapper">
                                <span class="testimonial-quote"><i class="fas fa-quote-left"></i></span> 
                                <div class="testimonail-content-container">
                                    <section tabindex="0" class="tesimonial-content-slider hooper">
                                        <div class="hooper-list">
                                            <ul class="hooper-track" style="transform: translate(0px, 0px);">
                                                <li class="testimonial-slide hooper-slide is-active is-current" style="width: 390.656px;">
                                                    <figure>
                                                        <img src="{{ asset('images/front/testimonial-image-1.png') }}" alt="team" width="78" height="78">
                                                    </figure> 
                                                    <p>For a free contact form, this works great. They even include form submission data in the admin, which...</p>
                                                    <h3>Brian Jackson</h3>
                                                    <span>CMO Of Kinsta</span>
                                                </li>
                                                <li class="hooper-slide is-next" style="width: 390.656px;">
                                                    <figure>
                                                    <img src="{{ asset('images/front/testimonial-image-1.png') }}" alt="team" width="78" height="78">
                                                    </figure> 
                                                    <p>Amazed by the functionality of this plugin. It offers all in one solution for accepting, managing and payments...</p> <h3>Jazib Zaman</h3> <span>Founder, WP Arena</span>
                                                </li>
                                                <li class="hooper-slide" style="width: 390.656px;">
                                                    <figure>
                                                        <img src="{{ asset('images/front/testimonial-image-1.png') }}" alt="team" width="78" height="78">
                                                    </figure> 
                                                    <p>We're still a new business and are continuing to build our platform. Dokan has halved the time it...</p> 
                                                    <h3>Melissa McGovern</h3> 
                                                    <span>Director, Hawk And Peddle</span>
                                                </li>
                                            </ul>
                                            <div class="hooper-pagination">
                                                <ol class="hooper-indicators">
                                                    <li>
                                                        <button type="button" class="hooper-indicator is-active">
                                                            <span class="hooper-sr-only"></span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="hooper-indicator">
                                                            <span class="hooper-sr-only"></span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="hooper-indicator">
                                                            <span class="hooper-sr-only"></span>
                                                        </button>
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div> 
                            <a href="#" class="testimonail-see-more">See More →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
</main>
@endsection

@push('custom-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        // $(window).scroll(function(){
        //     if ($(this).scrollTop() > 60) {
        //         $('.top-navbar').addClass('newBg','brand-nav');
        //     } else {
        //         $('.top-navbar').removeClass('newBg');
        //     }
        // });        
    </script>
@endpush

