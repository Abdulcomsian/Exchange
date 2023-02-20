@extends('layouts.frontEnd.master')
@section('content')
    @include('layouts.frontEnd.header')
    <div class="container col-md-5">
        <div class="row">
            <div class="col-md-6">
                <div class="row justify-content-center mt-5">
                    <form action="{{ route('checkout') }}" method="POST" id="payment-form">
                        @csrf
                        <div class="form-group">
                            <label for="card-element">Credit or debit card</label>
                            <div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->
                            </div>

                            <!-- Used to display Element errors. -->
                            <div id="card-errors" role="alert"></div>
                        </div>

                        <button type="submit"  id="pay" class="btn btn-primary">Submit Payment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        // Create a Stripe client.
        var stripe = Stripe('{{ env('STRIPE_KEY') }}');
        var elements = stripe.elements();
        var cardElement = elements.create('card');

        cardElement.mount('#card-element');

        var form = document.getElementById('pay');
        var errorElement = document.getElementById('card-errors');

        form.addEventListener('click', function(event) {
            event.preventDefault();

            stripe.createToken(cardElement).then(function(result) {
                if (result.error) {
                    // Display error message in the errorElement
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to the server
                    fetch('{{route("checkout")}}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({
                            stripeToken: result.token.id
                        })
                    }).then(function(response) {
                        return response.json();
                    }).then(function(data) {
                        if (data.requires_action) {
                            // Use Stripe.js to handle the 3D Secure authentication
                            stripe.handleCardAction(data.payment_intent_client_secret).then(function(result) {
                                if (result.error) {
                                    // Display error message in the errorElement
                                    errorElement.textContent = result.error.message;
                                } else {
                                    // Send the PaymentIntent ID to the server to confirm the payment
                                    fetch('/checkout', {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                                        },
                                        body: JSON.stringify({
                                            payment_intent_id: result.paymentIntent.id
                                        })
                                    }).then(function(confirmResponse) {
                                        console.log(confirmResponse)
                                        return confirmResponse.json();
                                    }).then(function(confirmData) {
                                        console.log(confirmData)
                                        if (confirmData.success) {
                                            // Display success message to the user
                                            alert('Payment succeeded!');
                                            window.location.href = "{{ route('dashboard') }}"; // Use the store_id in the URL                            step6.classList.remove('active');
                                        } else {
                                            // Display error message in the errorElement
                                            errorElement.textContent = 'Payment failed.';
                                        }
                                    });
                                }
                            });
                        } else if (data.success) {
                            // Display success message to the user
                            alert('Payment succeeded!');
                            window.location.href = "{{ route('dashboard') }}"; // Use the store_id in the URL                            step6.classList.remove('active');
                        } else {
                            // Display error message in the errorElement
                            errorElement.textContent = 'Payment failed.';
                        }
                    });
                }
            });
        });
    </script>
@endsection
