@extends('layouts.frontEnd.master')
@section('content')
    @include('layouts.frontEnd.header')
<div class="container m-md-5">
    <div class="row">
        <div class="col-md-6">
{{--            <div class="row justify-content-center mt-5">--}}
{{--                <div class="col-md-12">--}}
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Stripe</h4>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <a href="{{route('stripe_payment')}}" target="_blank">
                                    <img src="{{asset('stripe-logo.png')}}" alt="Stripe Logo" class="img-fluid mr-3" style="height: 50px;">
                                </a>
                                <!--                        <a href="https://www.paypal.com/" target="_blank">
                                                            <img src="https://www.paypalobjects.com/digitalassets/c/website/logo/full-text/pp_fc_hl.svg" alt="PayPal Logo" class="img-fluid" style="height: 50px;">
                                                        </a>-->
                            </div>
                            <hr>
                        </div>
                    </div>
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <div class="col-md-6">
{{--            <div class="row justify-content-center mt-5">--}}
{{--                <div class="col-md-12">--}}
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Paypal</h4>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <!--                        <a href="https://stripe.com/" target="_blank">
                            <img src="{{asset('stripe-logo.png')}}" alt="Stripe Logo" class="img-fluid mr-3" style="height: 50px;">
                        </a>-->
                                <a href="{{route('pay-with-paypal')}}" target="_blank">
                                    <img src="https://www.paypalobjects.com/digitalassets/c/website/logo/full-text/pp_fc_hl.svg" alt="PayPal Logo" class="img-fluid" style="height: 50px;">
                                </a>
                            </div>
                            <hr>
                        </div>
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</div>
@endsection
