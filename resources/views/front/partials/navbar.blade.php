<div class="main-navbar home-header ">
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-between align-items-center w-100">
                <div class="logo">
                    <a href="{{ route('home') }}" class="navbar-brand"><img src="{{ asset('images/front/wedevs-logo.svg') }}" alt="" width="155" class="logo"></a>   
                </div>
                <div class="navbar-block">
                    <div class="nav-mobile">
                        <i class="ti ti-menu"></i>
                    </div>
                    <div class="nav-desktop">
                        <div class="nav-mobile-close">
                            <i class="ti ti-close"></i>
                        </div>
                        <!-- <a href="{{ route('home') }}">Home</a> -->
                        <div class="nav-dropdown">
                            <button class="dropbtn">
                                <a href="#">Products
                                    <i class="fas fa-angle-down"></i>
                                </a>
                            </button>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="">
                                            <span class="link-image">
                                                <img src="{{ asset('images/front/Dokan.svg') }}" alt="product icon">
                                            </span> 
                                            <div class="product-link-content">
                                                <span class="link-title hover-color-1">Dokan Multivendor</span> 
                                                <span class="link-sub">Build your dream multi vendor marketplace</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="">
                                            <span class="link-image">
                                                <img src="{{ asset('images/front/User-Frontend.svg') }}" alt="product icon">
                                            </span> 
                                            <div class="product-link-content">
                                                <span class="link-title hover-color-2">WP User Frontend Pro</span> 
                                                <span class="link-sub">Ultimate Frontend Solution for WordPress</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="">
                                            <span class="link-image">
                                                <img src="{{ asset('images/front/happy-addons.png') }}" alt="product icon">
                                            </span> 
                                            <div class="product-link-content">
                                                <span class="link-title hover-color-3">Happy Addons</span> 
                                                <span class="link-sub">Powerful elementor widgets to create websites</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="">
                                            <span class="link-image">
                                                <img src="{{ asset('images/front/Project-Manager.svg') }}" alt="product icon">
                                            </span> 
                                            <div class="product-link-content">
                                                <span class="link-title hover-color-4">WP Project Manager Pro</span> 
                                                <span class="link-sub">Project Management tool for your team</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="">
                                            <span class="link-image">
                                                <img src="{{ asset('images/front/wemail.svg') }}" alt="product icon">
                                            </span> 
                                            <div class="product-link-content">
                                                <span class="link-title">weMail</span> 
                                                <span class="link-sub">Make Email Marketing simplified with WordPress</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="">
                                            <span class="link-image">
                                                <img src="{{ asset('images/front/ERP.svg') }}" alt="product icon">
                                            </span> 
                                            <div class="product-link-content">
                                                <span class="link-title hover-color-5">WP ERP</span> 
                                                <span class="link-sub">Automate your business or company operation</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="">
                                            <span class="link-image">
                                                <img src="{{ asset('images/front/appsero-icon.svg') }}" alt="product icon">
                                            </span> 
                                            <div class="product-link-content">
                                                <span class="link-title hover-color-6">Appsero</span> 
                                                <span class="link-sub">WP Analytics, Licensing & Deployment Tool</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="">
                                            <span class="link-image">
                                                <img src="{{ asset('images/front/Dokan.svg') }}" alt="product icon">
                                            </span> 
                                            <div class="product-link-content">
                                                <span class="link-title hover-color-7">wePOS</span> 
                                                <span class="link-sub">Fastest POS System for WooCommerce</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>                  
                        </div>
                        <a class="{{ Route::is('blog') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a>
                        <a class="{{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                        <a href="#">Docs</a>
                        <a class="{{ Route::is('pricing') ? 'active' : '' }}" href="{{ route('pricing') }}">Pricing</a>
                        <a class="{{ Route::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
                    </div>
                </div>
                <div class="user-auth">
                    <ul class="nav">
                        <li class="add-cart">
                            <a href="#">
                                <img src="{{ asset('images/front/cart.svg') }}" alt="cart">
                            </a>
                        </li>
                        <li class="sign-in">
                            <a href="#">
                                <i class="fas fa-user"></i>
                                <span>My Account</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@push('custom-scripts')
<script>
    $('.nav-mobile').click(function(){
        $('.nav-desktop').css('left', 0);
    });
    $('.nav-mobile-close').click(function(){
        $('.nav-desktop').css('left', '100%');
    });

    // Get the header
    let header = document.querySelector(".home-header");
    window.addEventListener('mousewheel', function(e){
        if( e.wheelDelta < 0 ){
            header.classList.remove("sticky");
        }else{
            header.classList.add("sticky");
        }
    });

    document.addEventListener('scroll', mouseScroll, false);
    function mouseScroll(e) {
        if( window.scrollY === 0) {
            header.classList.add("transparent-header");
        }else{
            header.classList.remove("transparent-header");
        }
    }
</script>
@endpush

