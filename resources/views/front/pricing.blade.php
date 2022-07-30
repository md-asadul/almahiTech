@extends('front.layouts.app')
@push('custom-style')
    <link rel="stylesheet" href="{{ asset('css/front/pricing.css') }}">
@endpush

@section('content')
<main class="pricing-wrapper">
    <section class="banner-wrapper">
        <div class="container">
            <div class="banner-heading-title">
                <h1>almahiTech Premium Plans</span></h1>
                <p>Wix gives you 100s of templates, unlimited pages & top grade<br> hosting FREE. Upgrade to Premium and get even more.</p>
                <div class="get-started">
                    <a href="#">Get Started Today</a>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="basic-tab" data-bs-toggle="tab" data-bs-target="#basic" type="button" role="tab" aria-controls="basic" aria-selected="true"><span class="tab-text-color">Website Plans</span><p>Great for showcasing a professional site</p></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="business-tab" data-bs-toggle="tab" data-bs-target="#business" type="button" role="tab" aria-controls="business" aria-selected="false"><span class="tab-text-color">Business and eCommerce Plan</span><p>Essential for accepting online payments</p></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="enterprice-tab" data-bs-toggle="tab" data-bs-target="#enterprice" type="button" role="tab" aria-controls="enterprice" aria-selected="false"><span class="tab-text-color">Enterprise Plans</span><p>Great for showcasing a professional site</p></button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade" id="basic" role="tabpanel" aria-labelledby="basic-tab"> 
                    <div class="business">
                        <div class="product-hat">
                            <span class="hat-text">MOST POPULAR</span>
                        </div>
                        <table class="table table-bordered table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">
                                        <div class="product-family">
                                            <h3>Business VIP</h3>
                                        </div>
                                        <div class="product-description">
                                            Get the Full Suite
                                        </div>
                                        <div class="product-notes">
                                            <span></span>
                                        </div>
                                        <div class="display-price">
                                            <sup class="price-currency">$</sup>
                                            <div class="price-integer" >59</div>
                                            <div class="price-decimal-wrapper">
                                                <sup class="price-decimal"></sup>
                                                <div class="cycle">/month</div>
                                            </div>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="product-family">
                                            <h3>Business Unlimited</h3>
                                        </div>
                                        <div class="product-description">
                                            Grow Your Business
                                        </div>
                                        <div class="product-notes">
                                            <span></span>
                                        </div>
                                        <div class="display-price">
                                            <sup class="price-currency">$</sup>
                                            <div class="price-integer">32</div>
                                            <div class="price-decimal-wrapper">
                                                <sup class="price-decimal"></sup>
                                                <div class="cycle">/month</div>
                                            </div>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="product-family">
                                            <h3>Business Basic</h3>
                                        </div>
                                        <div class="product-description">
                                            Accept Online Payments
                                        </div>
                                        <div class="product-notes">
                                            <span></span>
                                        </div>
                                        <div class="display-price">
                                            <sup class="price-currency">$</sup>
                                            <div class="price-integer" >27</div>
                                            <div class="price-decimal-wrapper">
                                                <sup class="price-decimal"></sup>
                                                <div class="cycle">/month</div>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>
                                        <div class="feature-name">
                                            <div class="feature-text">Secure online payments</div>
                                            <div class="feature-tooltip"></div>
                                        </div>
                                    </td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td><i class="fas fa-check"></i></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="feature-name">
                                            <div class="feature-text">Plans & recurring payments</div>
                                            <div class="feature-tooltip"></div>
                                        </div>
                                    </td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td><i class="fas fa-check"></i></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="feature-name">
                                            <div class="feature-text">Customer accounts</div>
                                            <div class="feature-tooltip"></div>
                                        </div>
                                    </td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td><i class="fas fa-check"></i></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="feature-name">
                                            <div class="feature-text">Custom domain</div>
                                            <div class="feature-tooltip"></div>
                                        </div>
                                    </td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td><i class="fas fa-check"></i></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="feature-name">
                                            <div class="feature-text">Free domain for 1 year</div>
                                            <div class="feature-tooltip"></div>
                                        </div>
                                    </td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td><i class="fas fa-check"></i></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="feature-name">
                                            <div class="feature-text">Bandwidth</div>
                                            <div class="feature-tooltip"></div>
                                        </div>
                                    </td>
                                    <td>Unlimited</td>
                                    <td>Unlimited</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="feature-name">
                                            <div class="feature-text">Storage space</div>
                                            <div class="feature-tooltip"></div>
                                        </div>
                                    </td>
                                    <td>50 GB</td>
                                    <td>35 GB</td>
                                    <td>20 GB</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="feature-name">
                                            <div class="feature-text">Customer care</div>
                                            <div class="feature-tooltip"></div>
                                        </div>
                                    </td>
                                    <td>Priority customer care</td>
                                    <td>24/7 customer care</td>
                                    <td>24/7 customer care</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="ecommerce-features">
                            <div class="ecommerce-features-left">
                                <h3>Complete eCommerce Platform</h3>
                                <p>Build, manage, and scale your business with Wix.</p>
                            </div>
                            <div class="ecommerce-features-right">
                                <i class="fas fa-angle-up"></i>
                            </div>
                        </div>
                        <table class="table table-bordered table-hover">
                            <tbody class="text-center">
                                <tr>
                                    <td>
                                        <div class="feature-name">
                                            <div class="feature-text">Unlimited products</div>
                                            <div class="feature-tooltip"></div>
                                        </div>
                                    </td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td><i class="fas fa-check"></i></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="feature-name">
                                            <div class="feature-text">Abandoned cart recovery</div>
                                            <div class="feature-tooltip"></div>
                                        </div>
                                    </td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="feature-name">
                                            <div class="feature-text">Subscriptions</div>
                                            <div class="feature-tooltip"></div>
                                        </div>
                                    </td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="feature-name">
                                            <div class="feature-text">Automated sales tax</div>
                                            <div class="feature-tooltip"></div>
                                        </div>
                                    </td>
                                    <td>500 transactions/month</td>
                                    <td>00 transactions/month</td>
                                    <td><i class="fas fa-check"></i></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="feature-name">
                                            <div class="feature-text">Product reviews by KudoBuzz</div>
                                            <div class="feature-tooltip"></div>
                                        </div>
                                    </td>
                                    <td>3,000 reviews</td>
                                    <td>1,000 reviews</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="feature-name">
                                            <div class="feature-text">Loyalty program by Smile.io</div>
                                            <div class="feature-tooltip"></div>
                                        </div>
                                    </td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="business" role="tabpanel" aria-labelledby="business-tab">
                  <div class="business">
                    <div class="product-hat">
                        <span class="hat-text">MOST POPULAR</span>
                    </div>
                    <table class="table table-bordered table-hover">
                        <thead class="text-center">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">
                                    <div class="product-family">
                                        <h3>Business VIP</h3>
                                    </div>
                                    <div class="product-description">
                                        Get the Full Suite
                                    </div>
                                    <div class="product-notes">
                                        <span></span>
                                    </div>
                                    <div class="display-price">
                                        <sup class="price-currency">$</sup>
                                        <div class="price-integer" >59</div>
                                        <div class="price-decimal-wrapper">
                                            <sup class="price-decimal"></sup>
                                            <div class="cycle">/month</div>
                                        </div>
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="product-family">
                                        <h3>Business Unlimited</h3>
                                    </div>
                                    <div class="product-description">
                                        Grow Your Business
                                    </div>
                                    <div class="product-notes">
                                        <span></span>
                                    </div>
                                    <div class="display-price">
                                        <sup class="price-currency">$</sup>
                                        <div class="price-integer">32</div>
                                        <div class="price-decimal-wrapper">
                                            <sup class="price-decimal"></sup>
                                            <div class="cycle">/month</div>
                                        </div>
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="product-family">
                                        <h3>Business Basic</h3>
                                    </div>
                                    <div class="product-description">
                                        Accept Online Payments
                                    </div>
                                    <div class="product-notes">
                                        <span></span>
                                    </div>
                                    <div class="display-price">
                                        <sup class="price-currency">$</sup>
                                        <div class="price-integer" >27</div>
                                        <div class="price-decimal-wrapper">
                                            <sup class="price-decimal"></sup>
                                            <div class="cycle">/month</div>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Secure online payments</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Plans & recurring payments</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Customer accounts</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Custom domain</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Free domain for 1 year</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Bandwidth</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td>Unlimited</td>
                                <td>Unlimited</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Storage space</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td>50 GB</td>
                                <td>35 GB</td>
                                <td>20 GB</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Customer care</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td>Priority customer care</td>
                                <td>24/7 customer care</td>
                                <td>24/7 customer care</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="ecommerce-features">
                        <div class="ecommerce-features-left">
                            <h3>Complete eCommerce Platform</h3>
                            <p>Build, manage, and scale your business with Wix.</p>
                        </div>
                        <div class="ecommerce-features-right">
                            <i class="fas fa-angle-up"></i>
                        </div>
                    </div>
                    <table class="table table-bordered table-hover">
                        <tbody class="text-center">
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Unlimited products</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Abandoned cart recovery</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Subscriptions</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Automated sales tax</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td>500 transactions/month</td>
                                <td>00 transactions/month</td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Product reviews by KudoBuzz</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td>3,000 reviews</td>
                                <td>1,000 reviews</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Loyalty program by Smile.io</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td><i class="fas fa-check"></i></td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane fade" id="enterprice" role="tabpanel" aria-labelledby="enterprice-tab">
                <div class="business">
                    <div class="product-hat">
                        <span class="hat-text">MOST POPULAR</span>
                    </div>
                    <table class="table table-bordered table-hover">
                        <thead class="text-center">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">
                                    <div class="product-family">
                                        <h3>Business VIP</h3>
                                    </div>
                                    <div class="product-description">
                                        Get the Full Suite
                                    </div>
                                    <div class="product-notes">
                                        <span></span>
                                    </div>
                                    <div class="display-price">
                                        <sup class="price-currency">$</sup>
                                        <div class="price-integer" >59</div>
                                        <div class="price-decimal-wrapper">
                                            <sup class="price-decimal"></sup>
                                            <div class="cycle">/month</div>
                                        </div>
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="product-family">
                                        <h3>Business Unlimited</h3>
                                    </div>
                                    <div class="product-description">
                                        Grow Your Business
                                    </div>
                                    <div class="product-notes">
                                        <span></span>
                                    </div>
                                    <div class="display-price">
                                        <sup class="price-currency">$</sup>
                                        <div class="price-integer">32</div>
                                        <div class="price-decimal-wrapper">
                                            <sup class="price-decimal"></sup>
                                            <div class="cycle">/month</div>
                                        </div>
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="product-family">
                                        <h3>Business Basic</h3>
                                    </div>
                                    <div class="product-description">
                                        Accept Online Payments
                                    </div>
                                    <div class="product-notes">
                                        <span></span>
                                    </div>
                                    <div class="display-price">
                                        <sup class="price-currency">$</sup>
                                        <div class="price-integer" >27</div>
                                        <div class="price-decimal-wrapper">
                                            <sup class="price-decimal"></sup>
                                            <div class="cycle">/month</div>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Secure online payments</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Plans & recurring payments</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Customer accounts</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Custom domain</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Free domain for 1 year</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Bandwidth</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td>Unlimited</td>
                                <td>Unlimited</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Storage space</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td>50 GB</td>
                                <td>35 GB</td>
                                <td>20 GB</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Customer care</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td>Priority customer care</td>
                                <td>24/7 customer care</td>
                                <td>24/7 customer care</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="ecommerce-features">
                        <div class="ecommerce-features-left">
                            <h3>Complete eCommerce Platform</h3>
                            <p>Build, manage, and scale your business with Wix.</p>
                        </div>
                        <div class="ecommerce-features-right">
                            <i class="fas fa-angle-up"></i>
                        </div>
                    </div>
                    <table class="table table-bordered table-hover">
                        <tbody class="text-center">
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Unlimited products</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Abandoned cart recovery</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Subscriptions</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Automated sales tax</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td>500 transactions/month</td>
                                <td>00 transactions/month</td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Product reviews by KudoBuzz</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td>3,000 reviews</td>
                                <td>1,000 reviews</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="feature-name">
                                        <div class="feature-text">Loyalty program by Smile.io</div>
                                        <div class="feature-tooltip"></div>
                                    </div>
                                </td>
                                <td><i class="fas fa-check"></i></td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection