@extends('front.layouts.app')
@push('custom-style')
    <link rel="stylesheet" href="{{ asset('css/front/contact.css') }}">
    <!-- {!! RecaptchaV3::initJs() !!} -->
@endpush

@section('content')
<main class="contact-wrapper">
    <section class="header-section">
        <div class="container">
            <div class="header-section-title">
                <h1>Contact Us</h1>
            </div>
        </div>
    </section>
    <section class="contact-us">
        <div class="container">
            <div class="contact">
                <div class="contact-content">
                    <ul>
                        <li>
                            <span><i class="fas fa-shopping-cart"></i></span>
                            <div>Pre-Sales</div>
                        </li>
                        <li>
                            <span><i class="fas fa-salad"></i></span>
                            <div>Project Proposal</div>
                        </li>
                        <li>
                            <span><i class="fas fa-info-circle"></i></span>
                            <div>Other</div>
                        </li>
                    </ul>
                    <div class="contact-form">
                        <form action="#">
                            <div class="contact-form-wrapper">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="select-plugin" class="form-label">Which product we can help you with? *</label>
                                        <select id="select-plugin" class="form-select form-control">
                                            <option selected>Select Plugin</option>
                                            <option>Dokan</option>
                                            <option>WP User Frontend Pro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="fname" class="form-label">First name*</label>
                                        <input type="text" name="first_name" required class="form-control" id="fname">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lname" class="form-label">Last name*</label>
                                        <input type="text" name="last_name" required class="form-control" id="lname">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="email" class="form-label">Email*</label>
                                        <input type="email" name="email" required class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="notes" class="form-label">Message*</label>
                                        <textarea class="form-control form-field" name="text_box" required id="notes" rows="8"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn common-btn btn-lg btn-block">Submit Query</button>
                        </form>
                    </div>
                </div>
                <div class="contact-sidebar">
                    <div class="content-sidebar-single-1">
                        <div class="content-sidebar-single-submit-ticket">
                            <h3>I have a Technical<br>Question</h3>
                            <a href="#" class="btn btn--theme">Submit a Ticket</a>
                        </div>
                    </div>
                    <div class="content-sidebar-single-2">
                        <div class="content-sidebar-single-products">
                            <h3 class="footer-main-title">Our Products</h3>
                            <ul class="footer-main-nav">
                                <li>
                                    <a href="#">
                                        <span class="footer-product-icon">
                                            <img src="{{ asset('images/front/Dokan.svg') }}" alt="">
                                        </span>
                                        Dokan Multivendor
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="footer-product-icon">
                                            <img src="{{ asset('images/front/Project-Manager.svg') }}" alt="">
                                        </span>
                                        WP Project Manager
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="footer-product-icon">
                                            <img src="{{ asset('images/front/User-Frontend.svg') }}" alt="">
                                        </span>
                                        WP User Frontend
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="footer-product-icon">
                                            <img src="{{ asset('images/front/appsero-icon.svg') }}" alt="">
                                        </span>
                                        Conversion Tracking
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="footer-product-icon">
                                            <img src="{{ asset('images/front/wemail.svg') }}" alt="">
                                        </span>
                                        wePOS
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="footer-product-icon">
                                            <img src="{{ asset('images/front/appsero-icon.svg') }}" alt="">
                                        </span>
                                        Appsero
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="footer-product-icon">
                                            <img src="{{ asset('images/front/wemail.svg') }}" alt="">
                                        </span>
                                        weMail
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="footer-product-icon">
                                            <img src="{{ asset('images/front/happy-addons.png') }}" alt="">
                                        </span>
                                        Happy Addons
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>
</main>
@endsection
