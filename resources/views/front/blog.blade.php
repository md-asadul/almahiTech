
@extends('front.layouts.app')
@push('custom-style')
    <link rel="stylesheet" href="{{ asset('css/front/blog.css') }}">
@endpush
@section('content')
<main class="blog-wrapper">
    <section class="header-section">
        <div class="container">
            <div class="header-section-title">
                <h1>almahiTech <span class="highlight-blue">Blog</span></h1>
            </div>
        </div>
    </section>
    <section class="blog">
        <div class="container">
            <div class="blog-content">
                <div class="blog-content-nav">
                    <ul class="blog-menu">
                        <li class="blog-menu-item">All</li>
                        <li class="blog-menu-item">Dokan</li>
                        <li class="blog-menu-item">Project Manager</li>
                        <li class="blog-menu-item">User Frontend</li>
                        <li class="blog-menu-item">WC Conversion Tracking</li>
                        <li class="blog-menu-item">WordPress</li>
                        <li class="blog-menu-item">wePOS</li>
                        <li class="blog-menu-item">Product Marketing</li>
                    </ul>
                </div>
                <div class="blog-content-search">
                    <div class="search_container">
                        <form action="#" class="search search-active">
                            <input type="search" placeholder="Search...">
                            <div class="go-btn search-active-go-btn">
                                <i class="fas fa-long-arrow-right"></i>
                            </div>
                        </form>
                        <div class="search-btn search-close"><i class="fas fa-times"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="featured-section">
        <div class="container">
            <div class="featured-section-post">
                <div class="featured-thumbnail">
                    <a href="#">
                        <img src="{{ asset('images/front/SEO.webp') }}" alt="">
                    </a>
                    <span class="thumbnail-badge">Featured</span>
                </div>
                <div class="featured-article">
                    <a href="#" class="featured-article-badge">Tutorials</a>
                    <div class="featured-article-title">
                        <a href="#">Ultimate Guide to Semantic SEO: How to Use It for Better Ranking</a>
                    </div>
                    <div class="featured-article-content">
                        <p>Google has been trying to make the search engine more user-friendly over time. As a result, we’re getting familiar with different S...</p>
                        <a href="#">Continue Reading <svg width="18" height="15" xmlns="http://www.w3.org/2000/svg" data-v-71cf116a=""><path id="right-arrow-icon" d="M11.141.226a.733.733 0 00-1.058 0 .767.767 0 000 1.064l5.366 5.451H.741A.743.743 0 000 7.495c0 .419.328.763.74.763h14.71L10.082 13.7a.78.78 0 000 1.075.733.733 0 001.058 0l6.637-6.742a.749.749 0 000-1.064L11.14.226z" fill="#1888F5" fill-rule="evenodd" data-v-71cf116a=""></path></svg></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="latest-post-section">
        <div class="container">
            <div class="latest-post">
                <div class="latest-post-content">
                    <div class="latest-post-header">
                        <h2 class="post-header-title">Latest <span class="highlight-blue">Blog</span></h2>
                        <a href="#">View All <svg width="18" height="15" xmlns="http://www.w3.org/2000/svg" data-v-71cf116a=""><path id="right-arrow-icon" d="M11.141.226a.733.733 0 00-1.058 0 .767.767 0 000 1.064l5.366 5.451H.741A.743.743 0 000 7.495c0 .419.328.763.74.763h14.71L10.082 13.7a.78.78 0 000 1.075.733.733 0 001.058 0l6.637-6.742a.749.749 0 000-1.064L11.14.226z" fill="#1888F5" fill-rule="evenodd" data-v-71cf116a=""></path></svg></a>
                    </div>
                    <div class="single-post-box">
                        <div class="single-post-item">
                            <div class="single-post-thumbnail">
                                <a href="#">
                                    <img src="{{ asset('images/front/SEO.webp') }}" alt="">
                                </a>
                            </div>
                            <div class="single-post-content">
                                <h3 class="post-title">
                                    <a href="#">Ultimate Guide to Semantic SEO: How to Use It for Better Ranking</a>
                                </h3>
                                <footer class="post-footer">
                                    <div class="post-meta-tag">
                                        <a href="#" class="post-meta-tag-text">Tutorials</a>
                                    </div>
                                    <div class="post-time">
                                        <i class="fas fa-clock"></i>
                                        <span class="time-text">30 min read</span>
                                    </div>
                                </footer>
                            </div>

                        </div>
                        <div class="single-post-item">
                            <div class="single-post-thumbnail">
                                <a href="#">
                                    <img src="{{ asset('images/front/Collaboration-Software.webp') }}" alt="">
                                </a>
                            </div>
                            <div class="single-post-content">
                                <h3 class="post-title">
                                    <a href="#">Top Project Collaboration Software To Improve Team Productivity and Efficiency</a>
                                </h3>
                                <footer class="post-footer">
                                    <div class="post-meta-tag">
                                        <a href="#" class="post-meta-tag-text">Tutorials</a>
                                    </div>
                                    <div class="post-time">
                                        <i class="fas fa-clock"></i>
                                        <span class="time-text">30 min read</span>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="latest-post-sidebar">
                    <div class="latest-post-sidebar-single">
                        <h3 class="sidebar-single-title">Most <span class="highlight-blue">Popular</span></h3>
                        <div class="sidebar-popular-posts">
                            <div class="sidebar-popular-single-post">
                                <a href="#" class="popular-post-thumb">
                                    <img src="{{ asset('images/front/Plugin-for-WP.webp') }}" alt="">
                                </a>
                                <div class="popular-post-content">
                                    <a href="#" class="popular-post-title">Best WooCommerce Multi Vendor Plugin For...</a>
                                </div>
                            </div>
                            <div class="sidebar-popular-single-post">
                                <a href="#" class="popular-post-thumb">
                                    <img src="{{ asset('images/front/Blog-Size.webp') }}" alt="">
                                </a>
                                <div class="popular-post-content">
                                    <a href="#" class="popular-post-title">Dokan vs WC Vendor Pro: Which is the Bes...</a>
                                </div>
                            </div>
                            <div class="sidebar-popular-single-post">
                                <a href="#" class="popular-post-thumb">
                                    <img src="{{ asset('images/front/Disable-WooCommerce.webp') }}" alt="">
                                </a>
                                <div class="popular-post-content">
                                    <a href="#" class="popular-post-title">BHow To Disable WooCommerce Variable Prod...</a>
                                </div>
                            </div>
                            <div class="sidebar-popular-single-post">
                                <a href="#" class="popular-post-thumb">
                                    <img src="{{ asset('images/front/facebook-for-woocommerce.webp') }}" alt="">
                                </a>
                                <div class="popular-post-content">
                                    <a href="#" class="popular-post-title">How to Use Facebook for WooCommerce Inte...</a>
                                </div>
                            </div>
                            <div class="sidebar-popular-single-post">
                                <a href="#" class="popular-post-thumb">
                                    <img src="{{ asset('images/front/add-extra.webp') }}" alt="">
                                </a>
                                <div class="popular-post-content">
                                    <a href="#" class="popular-post-title">Adding Extra Menu on Vendor Dashboard of...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
