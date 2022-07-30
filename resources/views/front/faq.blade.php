@extends('front.layouts.app')
@push('custom-style')
    <link rel="stylesheet" href="{{ asset('css/front/faq.css') }}">
@endpush

@section('content')
<main class="faqs-wrapper">
    <div class="faq-section">
        <div class="container">	
            <div class="faqs-header">
                <h2>Frequently Asked Questions</h2>
            </div> 	
            <div class="faq-content">
                <div class="content-area">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Which payment gateways are supported by Dokan?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Dokan has two types of payment methods. One is the adaptive payment, and the other is the non-adaptive payment method. The Dokan Stripe Connect and Dokan Wirecard Connect are adaptive payment gateways. Those payment gateways are built-in modules in Dokan Pro, and those are available from the Dokan Professional package. Except for those, the rest of all WooCommerce payment gateways will act as a non-adaptive payment method. When a customer makes an order, the admin commission and the vendor earnings will split in real-time in the adaptive payment method. That means all processes will be done automatically.
                                <br><br>
                                And, in the non-adaptive payment method, when a customer makes an order, the total order amount will go to the admin account. Vendors can see their earnings from the vendor frontend dashboard. Admin needs to set a minimum withdrawal limit for submitting a withdrawal request. When a vendor reaches that limit, he/she can send a withdrawal request to the admin. After that, the admin needs to approve the request and send vendor earnings manually to the respective withdrawal request account via PayPal or Bank Transfer. That means, in the non-adaptive payment method, all processes will be done manually.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What is your minimum order quantity?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    To know the MOQ, you can contact with your queries to our customer service. We will get back to you shortly.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What does it cost to launch a product?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                There are many variables that influence the cost of launching a product. When it comes to launching a custom product, it would be dependent on the cost of ingredients, you can contact with your queries to our customer service.						
                                </div>
                            </div>
                        </div>				
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Can you assist with Marketing?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Yes. We can fulfill all your marketing needs.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Can you send me samples?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                We're constantly searching for new ways to improve your experience with us. Please contact us at  sales@gummyspecialists.com if you're interested in receiving samples.							
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Does the pricing include TAX?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                All the pricing of different Dokan Packages are excluding TAX The Tax is automatically calculated based on the Customer’s region by our Payment Gateway, FastSpring.			
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Can I consume more than the recommended dosage?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                We don’t recommend consuming more than the recommended dosage. Keeping the vitamin reserves well below harmful levels that are how we recommend 							
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                How should I store my gummies?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Store your gummies in the closed bottle in a cool and dry place at room temperature. There’s no need to store your gummies in the refrigerator, and this may even affect the structure of the gummies.	
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                How can I get in touch with customer service?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                We always love hearing from you, whether you have a query or it’s just to say hi. You can visit us on Facebook or Instagram and send us a message or comment in our post. You can also send an email to sales@gummyspecialists.com or call us at 1-833-MYGUMMY. We will get back to you shortly.					
                                </div>
                            </div>
                        </div>											  
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection