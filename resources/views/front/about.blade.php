@extends('front.layouts.app')
@push('custom-style')
    <link rel="stylesheet" href="{{ asset('css/front/about.css') }}">
@endpush

@section('content')
<main class="about-wrapper">
    <section class="banner-wrapper">
        <div class="container">
            <div class="banner-heading-title">
                <h1>About almahiTech</span></h1>
            </div>
        </div>
    </section>
    <section class="who-we-are-wrapper">
        <div class="container">
            <div class="who-we-are">
                <div class="who-we-are-content">
                    <h2><span class="highlight-blue">Who</span> We Are</h2>
                    <p>weDevs is the maker of Dokan Multivendor, WP User Frontend, WP Project Manager, WP ERP and some other exclusive WordPress products. We are innovators who are constantly making WordPress suitable for solving any kind of business problem. Our existence depends on making WordPress and SaaS products that help to scale your business.</p>
                </div>
                <div class="who-we-are-image">
                    <img src="{{ asset('/images/front/who-we-are-thumb.webp') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="our-goal-wrapper">
        <div class="container">
            <div class="our-goal">
                <div class="our-goal-image">
                    <img src="{{ asset('/images/front/our-goal-thumb.webp') }}" alt="">
                </div>
                <div class="our-goal-content">
                    <h3>Our Goal</h3>
                    <h2>We Create <span class="highlight-blue">Innovative </span>Tools<br> to <span class="highlight-blue">Empower </span>Small Businesses Around the World</h2>
                    <p>Our main focus is to deliver <strong>high-quality </strong>and <strong>scalable </strong> custom <strong>PHP </strong> applications using WordPress. We focus our diligent coding abilities and integrate the latest development trends, and best practices available in the industry to create plugins that help individuals or companies with eCommerce, Project Management, and Enterprise Solutions. We love simplicity and intuitiveness, so all of our plugins are user-centric and designed to be Front End friendly.</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection