@extends('front.layouts.app')
@push('custom-style')
    <link rel="stylesheet" href="{{ asset('css/front/terms.css') }}">
@endpush

@section('content')
<main class="main-container">
    <div class="container">
        <div class="terms-wrapper">
            <div class="terms-single-item">
                <h3>Refund/ Re-issue Policy:</h3>
                <h4>Flight</h4>
                <p>Hrlbd follows airline’s cancellation and re-issue policy.<br>
                To cancel/ re-issue, customer must confirm Hrlbd 48 hours prior to the travel date.<br>
                To cancel/ re-issue, customer needs to send an email to reservation@Hrlbd.com attaching the e-ticket and briefly mentioning the requirements.<br>
                Cancellation fee and a Standard service charge may apply in case of any change.<br>
                Cancellation fee is shared by the Airlines and may get changed at any time.<br>
                Service charge is only BDT 300 for International flight and BDT 0 for Domestic flight.<br>
                For Domestic Flight, refund will get initiated (if applicable) after a successful cancellation and refunded amount may reflect in your account within 3 to 7 working days depending on your bank. For International Flight, it may take up to 3 weeks to process the refund and reflect in your account depending on the airline and your bank.</p>
                <h4>Bus</h4>
                <p>Hrlbd follows bus operator’s cancellation policy.<br>
                To Cancel a ticket, customer must go to ‘My booking’ > ’Cancel’ and confirm the cancellation.<br>
                Additional charges might be applicable in case of cancellation which will depend on the nature of the cancel request.<br>
                EID or Holiday tickets are not cancellable or refundable. Bus Authority has the right to cancel any bus schedule at any time.<br>
                If the Bus is cancelled by the Bus Operator, customer must inform Hrlbd through Hotline 09678332211 (10AM - 10PM) or Facebook messenger, m.me/Hrlbd
                Refund will get initiated (if applicable) after a successful cancellation and refunded amount may reflect in your account within 3 to 7 working days depending on your bank.</p>
            </div>
        </div>
    </div>
</main>
@endsection
