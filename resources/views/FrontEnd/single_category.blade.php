
@extends('layouts.frontEnd.master')
@section('content')
    @include('layouts.frontEnd.header')
    <main>
        <div class="main-wrapper">
            <div id="single-common-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5>Automotive businesses for sale</h5>
                            <p>Gear up for a new business adventure. Explore our online marketplace of automotive businesses for sale and get ready to customize and grow an existing ecommerce store. Find specialty companies of all kind — new or used parts, accessories, cars, trucks and more.</p>
                            <a href="" class="common-btn">Browser Business</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="best-business" class="mt-5 mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h5 class="common-title">Best automotive businesses</h5>
                            <p class="common-para">See a sample of some of the up-and-coming automotive businesses</p>
                        </div>
                    </div>
                    <div class="tab-list mt-5">
                        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-best-tab" data-bs-toggle="pill" data-bs-target="#pills-best" type="button" role="tab" aria-controls="pills-best" aria-selected="true">Best Business</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-sold-tab" data-bs-toggle="pill" data-bs-target="#pills-sold" type="button" role="tab" aria-controls="pills-sold" aria-selected="false">Sold Business</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-best" role="tabpanel" aria-labelledby="pills-best-tab">
                                <div class="listing-list-common mt-5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                @foreach($stores as $store)
                                                    <div class="common-listing-box d-flex align-items-center">
                                                        <div class="listing-img">
                                                            <img src="{{asset('FrontEnd/img/image_processing20200126-6689-ulcmi2-750x430.png')}}" alt="" class="img-fluid">
                                                            <span class="badge">Offer Support</span>
                                                        </div>
                                                        <div class="listing-content ms-4">
                                                            <div class="listing-detail d-flex align-items-center justify-content-between">
                                                                <a href="{{route('single_store', $store->id)}}"><h5>{{$store->store_name}}</h5></a>
                                                                <div class="sale-profit-revenew d-flex align-items-center">
                                                                    <div class="common-div text-center">
                                                                        <h5>Avg. Revenue</h5>
                                                                        <span>${{$store->revenue}}</span><span>/month</span>
                                                                    </div>
                                                                    <div class="common-div text-center">
                                                                        <h5>Avg. Profit</h5>
                                                                        <span>${{$store->profit}}</span><span>/month</span>
                                                                    </div>
                                                                    <div class="common-div text-center">
                                                                        <h5>Inventory value</h5>
                                                                        <span>${{$store->inventory_value}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <p>{{substr(strip_tags($store->description), 0, 300)}}</p>
                                                        </div>
                                                        <div class="price-div text-center">
                                                            <h5>${{$store->revenue}}</h5>
                                                            <a href="{{route('single_store', $store->id)}}">Detail</a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                    {{ $stores->links('vendor.pagination.default') }}

                                            </div>
                                            {{--<div class="col-lg-12">
                                                <div class="common-listing-box d-flex align-items-center">
                                                    <div class="listing-img">
                                                        <img src="{{asset('FrontEnd/img/image_processing20191116-5475-d3p1pb-750x430.png')}}" alt="" class="img-fluid">
                                                        <span class="badge">Offer Support</span>
                                                    </div>
                                                    <div class="listing-content ms-4">
                                                        <div class="listing-detail d-flex align-items-center justify-content-between">
                                                            <h5>Infinity-Stones.eu</h5>
                                                            <div class="sale-profit-revenew d-flex align-items-center">
                                                                <div class="common-div text-center">
                                                                    <h5>Avg. Revenue</h5>
                                                                    <span>$253.9</span><span>/month</span>
                                                                </div>
                                                                <div class="common-div text-center">
                                                                    <h5>Avg. Profit</h5>
                                                                    <span>$253.9</span><span>/month</span>
                                                                </div>
                                                                <div class="common-div text-center">
                                                                    <h5>Inventory value</h5>
                                                                    <span>$1k</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <p>2-year store for high-end tea, tea gifts, and accessories. Well-designed webshop with lots of conversion uplift customizations. Bi-lingual with Dutch & English. Fully optimized SEO setup. 40+ content marketing blogs. Dedicated B2B page.</p>
                                                    </div>
                                                    <div class="price-div text-center">
                                                        <h5>$27.00</h5>
                                                        <a href="">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="common-listing-box d-flex align-items-center">
                                                    <div class="listing-img">
                                                        <img src="{{asset('FrontEnd/img/image_processing20200109-18945-qpg2vi-750x430.png')}}" alt="" class="img-fluid">
                                                        <span class="badge">Offer Support</span>
                                                    </div>
                                                    <div class="listing-content ms-4">
                                                        <div class="listing-detail d-flex align-items-center justify-content-between">
                                                            <h5>Infinity-Stones.eu</h5>
                                                            <div class="sale-profit-revenew d-flex align-items-center">
                                                                <div class="common-div text-center">
                                                                    <h5>Avg. Revenue</h5>
                                                                    <span>$253.9</span><span>/month</span>
                                                                </div>
                                                                <div class="common-div text-center">
                                                                    <h5>Avg. Profit</h5>
                                                                    <span>$253.9</span><span>/month</span>
                                                                </div>
                                                                <div class="common-div text-center">
                                                                    <h5>Inventory value</h5>
                                                                    <span>$1k</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <p>2-year store for high-end tea, tea gifts, and accessories. Well-designed webshop with lots of conversion uplift customizations. Bi-lingual with Dutch & English. Fully optimized SEO setup. 40+ content marketing blogs. Dedicated B2B page.</p>
                                                    </div>
                                                    <div class="price-div text-center">
                                                        <h5>$27.00</h5>
                                                        <a href="">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="common-listing-box d-flex align-items-center">
                                                    <div class="listing-img">
                                                        <img src="{{asset('FrontEnd/img/image_processing20200126-6689-ulcmi2-750x430 (1).png')}}" alt="" class="img-fluid">
                                                        <span class="badge">Offer Support</span>
                                                    </div>
                                                    <div class="listing-content ms-4">
                                                        <div class="listing-detail d-flex align-items-center justify-content-between">
                                                            <h5>Infinity-Stones.eu</h5>
                                                            <div class="sale-profit-revenew d-flex align-items-center">
                                                                <div class="common-div text-center">
                                                                    <h5>Avg. Revenue</h5>
                                                                    <span>$253.9</span><span>/month</span>
                                                                </div>
                                                                <div class="common-div text-center">
                                                                    <h5>Avg. Profit</h5>
                                                                    <span>$253.9</span><span>/month</span>
                                                                </div>
                                                                <div class="common-div text-center">
                                                                    <h5>Inventory value</h5>
                                                                    <span>$1k</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <p>2-year store for high-end tea, tea gifts, and accessories. Well-designed webshop with lots of conversion uplift customizations. Bi-lingual with Dutch & English. Fully optimized SEO setup. 40+ content marketing blogs. Dedicated B2B page.</p>
                                                    </div>
                                                    <div class="price-div text-center">
                                                        <h5>$27.00</h5>
                                                        <a href="">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="common-listing-box d-flex align-items-center">
                                                    <div class="listing-img">
                                                        <img src="{{asset('FrontEnd/img/image_processing20200126-6689-ulcmi2-750x430.png')}}" alt="" class="img-fluid">
                                                        <span class="badge">Offer Support</span>
                                                    </div>
                                                    <div class="listing-content ms-4">
                                                        <div class="listing-detail d-flex align-items-center justify-content-between">
                                                            <h5>Infinity-Stones.eu</h5>
                                                            <div class="sale-profit-revenew d-flex align-items-center">
                                                                <div class="common-div text-center">
                                                                    <h5>Avg. Revenue</h5>
                                                                    <span>$253.9</span><span>/month</span>
                                                                </div>
                                                                <div class="common-div text-center">
                                                                    <h5>Avg. Profit</h5>
                                                                    <span>$253.9</span><span>/month</span>
                                                                </div>
                                                                <div class="common-div text-center">
                                                                    <h5>Inventory value</h5>
                                                                    <span>$1k</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <p>2-year store for high-end tea, tea gifts, and accessories. Well-designed webshop with lots of conversion uplift customizations. Bi-lingual with Dutch & English. Fully optimized SEO setup. 40+ content marketing blogs. Dedicated B2B page.</p>
                                                    </div>
                                                    <div class="price-div text-center">
                                                        <h5>$27.00</h5>
                                                        <a href="">Detail</a>
                                                    </div>
                                                </div>
                                            </div>--}}
                                        </div>
{{--                                        <a href="" class="common-btn d-table m-auto">View All Business</a>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-sold" role="tabpanel" aria-labelledby="pills-sold-tab">
                                <div class="listing-list-common mt-5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="common-listing-box d-flex align-items-center">
                                                    <div class="listing-img">
                                                        <img src="{{asset('FrontEnd/img/image_processing20200126-6689-ulcmi2-750x430.png')}}" alt="" class="img-fluid">
                                                        <span class="badge">Sold - Offer Support</span>
                                                    </div>
                                                    <div class="listing-content ms-4">
                                                        <div class="listing-detail d-flex align-items-center justify-content-between">
                                                            <h5>Infinity-Stones.eu</h5>
                                                            <div class="sale-profit-revenew d-flex align-items-center">
                                                                <div class="common-div text-center">
                                                                    <h5>Avg. Revenue</h5>
                                                                    <span>$253.9</span><span>/month</span>
                                                                </div>
                                                                <div class="common-div text-center">
                                                                    <h5>Avg. Profit</h5>
                                                                    <span>$253.9</span><span>/month</span>
                                                                </div>
                                                                <div class="common-div text-center">
                                                                    <h5>Inventory value</h5>
                                                                    <span>$1k</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <p>2-year store for high-end tea, tea gifts, and accessories. Well-designed webshop with lots of conversion uplift customizations. Bi-lingual with Dutch & English. Fully optimized SEO setup. 40+ content marketing blogs. Dedicated B2B page.</p>
                                                    </div>
                                                    <div class="price-div text-center">
                                                        <h5>$27.00</h5>
                                                        <a href="">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="common-listing-box d-flex align-items-center">
                                                    <div class="listing-img">
                                                        <img src="{{asset('FrontEnd/img/image_processing20191116-5475-d3p1pb-750x430.png')}}" alt="" class="img-fluid">
                                                        <span class="badge">Sold</span>
                                                    </div>
                                                    <div class="listing-content ms-4">
                                                        <div class="listing-detail d-flex align-items-center justify-content-between">
                                                            <h5>Infinity-Stones.eu</h5>
                                                            <div class="sale-profit-revenew d-flex align-items-center">
                                                                <div class="common-div text-center">
                                                                    <h5>Avg. Revenue</h5>
                                                                    <span>$253.9</span><span>/month</span>
                                                                </div>
                                                                <div class="common-div text-center">
                                                                    <h5>Avg. Profit</h5>
                                                                    <span>$253.9</span><span>/month</span>
                                                                </div>
                                                                <div class="common-div text-center">
                                                                    <h5>Inventory value</h5>
                                                                    <span>$1k</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <p>2-year store for high-end tea, tea gifts, and accessories. Well-designed webshop with lots of conversion uplift customizations. Bi-lingual with Dutch & English. Fully optimized SEO setup. 40+ content marketing blogs. Dedicated B2B page.</p>
                                                    </div>
                                                    <div class="price-div text-center">
                                                        <h5>$27.00</h5>
                                                        <a href="">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="common-listing-box d-flex align-items-center">
                                                    <div class="listing-img">
                                                        <img src="{{asset('FrontEnd/img/image_processing20200109-18945-qpg2vi-750x430.png')}}" alt="" class="img-fluid">
                                                        <span class="badge">Sold - Offer Support</span>
                                                    </div>
                                                    <div class="listing-content ms-4">
                                                        <div class="listing-detail d-flex align-items-center justify-content-between">
                                                            <h5>Infinity-Stones.eu</h5>
                                                            <div class="sale-profit-revenew d-flex align-items-center">
                                                                <div class="common-div text-center">
                                                                    <h5>Avg. Revenue</h5>
                                                                    <span>$253.9</span><span>/month</span>
                                                                </div>
                                                                <div class="common-div text-center">
                                                                    <h5>Avg. Profit</h5>
                                                                    <span>$253.9</span><span>/month</span>
                                                                </div>
                                                                <div class="common-div text-center">
                                                                    <h5>Inventory value</h5>
                                                                    <span>$1k</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <p>2-year store for high-end tea, tea gifts, and accessories. Well-designed webshop with lots of conversion uplift customizations. Bi-lingual with Dutch & English. Fully optimized SEO setup. 40+ content marketing blogs. Dedicated B2B page.</p>
                                                    </div>
                                                    <div class="price-div text-center">
                                                        <h5>$27.00</h5>
                                                        <a href="">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="common-listing-box d-flex align-items-center">
                                                    <div class="listing-img">
                                                        <img src="{{asset('FrontEnd/img/image_processing20200126-6689-ulcmi2-750x430 (1).png')}}" alt="" class="img-fluid">
                                                        <span class="badge">Sold - Offer Support</span>
                                                    </div>
                                                    <div class="listing-content ms-4">
                                                        <div class="listing-detail d-flex align-items-center justify-content-between">
                                                            <h5>Infinity-Stones.eu</h5>
                                                            <div class="sale-profit-revenew d-flex align-items-center">
                                                                <div class="common-div text-center">
                                                                    <h5>Avg. Revenue</h5>
                                                                    <span>$253.9</span><span>/month</span>
                                                                </div>
                                                                <div class="common-div text-center">
                                                                    <h5>Avg. Profit</h5>
                                                                    <span>$253.9</span><span>/month</span>
                                                                </div>
                                                                <div class="common-div text-center">
                                                                    <h5>Inventory value</h5>
                                                                    <span>$1k</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <p>2-year store for high-end tea, tea gifts, and accessories. Well-designed webshop with lots of conversion uplift customizations. Bi-lingual with Dutch & English. Fully optimized SEO setup. 40+ content marketing blogs. Dedicated B2B page.</p>
                                                    </div>
                                                    <div class="price-div text-center">
                                                        <h5>$27.00</h5>
                                                        <a href="">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="common-listing-box d-flex align-items-center">
                                                    <div class="listing-img">
                                                        <img src="{{asset('FrontEnd/img/image_processing20200126-6689-ulcmi2-750x430.png')}}" alt="" class="img-fluid">
                                                        <span class="badge">Sold</span>
                                                    </div>
                                                    <div class="listing-content ms-4">
                                                        <div class="listing-detail d-flex align-items-center justify-content-between">
                                                            <h5>Infinity-Stones.eu</h5>
                                                            <div class="sale-profit-revenew d-flex align-items-center">
                                                                <div class="common-div text-center">
                                                                    <h5>Avg. Revenue</h5>
                                                                    <span>$253.9</span><span>/month</span>
                                                                </div>
                                                                <div class="common-div text-center">
                                                                    <h5>Avg. Profit</h5>
                                                                    <span>$253.9</span><span>/month</span>
                                                                </div>
                                                                <div class="common-div text-center">
                                                                    <h5>Inventory value</h5>
                                                                    <span>$1k</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <p>2-year store for high-end tea, tea gifts, and accessories. Well-designed webshop with lots of conversion uplift customizations. Bi-lingual with Dutch & English. Fully optimized SEO setup. 40+ content marketing blogs. Dedicated B2B page.</p>
                                                    </div>
                                                    <div class="price-div text-center">
                                                        <h5>$27.00</h5>
                                                        <a href="">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="common-btn d-table m-auto">View All Business</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="why-use-us" class="mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h5 class="common-title">Why use Exchange?</h5>
                            <p class="common-para">Exchange is the largest and fastest-growing marketplace for Shopify e-commerce stores</p>
                        </div>
                    </div>
                    <div class="multiple-div mt-5">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="common-div">
                                    <div class="icon-div">
                                        <img src="{{asset('FrontEnd/img/e5f6dc5f224132d46c27eb74edc13a2e.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="content-div">
                                        <h4>Verified listing data</h4>
                                        <p>The revenue and traffic data that you see on each listing is pulled directly from its Shopify account. This means that the data has been verified. Exchange reviews and monitors listings for thorough and accurate information.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="common-div">
                                    <div class="icon-div">
                                        <img src="{{asset('FrontEnd/img/e5f6dc5f224132d46c27eb74edc13a2e.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="content-div">
                                        <h4>Secure messaging platform</h4>
                                        <p>You will be able to communicate with sellers via a secure messaging platform. After you log in and request information from a listing, sellers are notified and have the ability to respond. When you are ready, you can make an offer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="common-div">
                                    <div class="icon-div">
                                        <img src="{{asset('FrontEnd/img/d677d4993d4ebf2f071a0f3459f0808e.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="content-div">
                                        <h4>Encrypted payment capture</h4>
                                        <p>Exchange and Escrow.com have partnered together to provide you with safe transactions that have bank encryption, making sure that payment is securely captured. Escrow.com ensures that its users pass verification checks before transactions can proceed.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="common-div">
                                    <div class="icon-div">
                                        <img src="{{asset('FrontEnd/img/3b4ed766f0ba114194ce411a33d3852f.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="content-div">
                                        <h4>Take time to inspect the business</h4>
                                        <p>Once you submit payment to Escrow.com and the payment has been secured, the funds are held until you confirm that all assets received are as negotiated. You can use the inspection period to ask the seller any extra questions about the business.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="common-div">
                                    <div class="icon-div">
                                        <img src="{{asset('FrontEnd/img/050510c1cf71e188ac8086a808439268.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="content-div">
                                        <h4>Safe store transfer</h4>
                                        <p>When the transaction is finalized, the dedicated migration team at Exchange will begin the process of making you the new owner of the store. Buyers and sellers will be notified via an email from the Exchange team once store transfers have been completed.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="common-div">
                                    <div class="icon-div">
                                        <img src="{{asset('FrontEnd/img/341709bb806656dff1c4fb867d368505.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="content-div">
                                        <h4>Post-purchase 24/7 Shopify support</h4>
                                        <p>Once you log into your Shopify account for the first time and choose a subscription plan, Shopify Support Gurus are available 24/7 to help you with the settings of the store.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="other-industry" class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h5 class="common-title">Other industries for you to explore</h5>
                            <p class="common-para">Browse Exchange’s selection of businesses for sale by industry</p>
                        </div>
                    </div>
                    <div class="multiple-industry mt-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="common-industry-div">
                                        <div class="img-div">
                                            <img src="{{asset('FrontEnd/img/doing-finances-and-taking-notes_4460x4460-a9f0e75ca44d7e04.jpeg')}}" alt="" class="img-fluid">
                                        </div>
                                        <div class="content-div">
                                            <h4>Starter stores</h4>
                                            <p class="d-flex justify-content-between"><span>Total businesses</span><span>7903</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="common-industry-div">
                                        <div class="img-div">
                                            <img src="{{asset('FrontEnd/img/clothing-accessories-flatlay_4460x4460-1eed499be273bbc0.jpeg')}}" alt="" class="img-fluid">
                                        </div>
                                        <div class="content-div">
                                            <h4>Fashion and apparel</h4>
                                            <p class="d-flex justify-content-between"><span>Total businesses</span><span>7903</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="common-industry-div">
                                        <div class="img-div">
                                            <img src="{{asset('FrontEnd/img/spa-candles-and-decor-near-window_4460x4460-643445690854a09c.jpeg')}}" alt="" class="img-fluid">
                                        </div>
                                        <div class="content-div">
                                            <h4>Health and beauty</h4>
                                            <p class="d-flex justify-content-between"><span>Total businesses</span><span>7903</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="common-industry-div">
                                        <div class="img-div">
                                            <img src="{{asset('FrontEnd/img/copper-light-in-bedroom_4460x4460-c7f0d3df34bdd17c.jpeg')}}" alt="" class="img-fluid">
                                        </div>
                                        <div class="content-div">
                                            <h4>Home and furniture</h4>
                                            <p class="d-flex justify-content-between"><span>Total businesses</span><span>7903</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="business-for-sale" class="mt-5 mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h5 class="common-title">Thousands of entrepreneurs already bought businesses on Exchange</h5>
                            <p class="common-para">Hear from new and past business owners about their experience with Exchange</p>
                        </div>
                    </div>
                    <div class="review-div mt-5">
                        <div class="multiple-client">
                            <div class="client-div text-center">
                                <div class="img-div">
                                    <img src="{{asset('FrontEnd/img/user1.jpeg')}}" alt="" class="img-fluid m-auto">
                                </div>
                                <div class="client-content">
                                    <h4>Ryan G.</h4>
                                    <span>Bought WearWood</span>
                                    <p class="mt-3">“I was initially thinking about investing in some additional real estate, and that got me thinking about other options that might not tie up as much capital.”</p>
                                </div>
                            </div>
                            <div class="client-div text-center">
                                <div class="img-div">
                                    <img src="{{asset('FrontEnd/img/user2.jpeg')}}" alt="" class="img-fluid m-auto">
                                </div>
                                <div class="client-content">
                                    <h4>Ryan G.</h4>
                                    <span>Bought WearWood</span>
                                    <p class="mt-3">“We sold our Shopify store for $27,000 and handed off the business in 2 weeks.”</p>
                                </div>
                            </div>
                            <div class="client-div text-center">
                                <div class="img-div">
                                    <img src="{{asset('FrontEnd/img/user3.jpeg')}}" alt="" class="img-fluid m-auto">
                                </div>
                                <div class="client-content">
                                    <h4>Ryan G.</h4>
                                    <span>Bought WearWood</span>
                                    <p class="mt-3">“Buying this store from Exchange Marketplace was the best decision I ever made because I didn’t have to start from scratch.”</p>
                                </div>
                            </div>
                        </div>
                        <a href="" class="d-table m-auto common-btn">See Business for Sale</a>
                    </div>
                </div>
            </div>
            <div id="join-us-today">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>We’ll notify you</h5>
                            <p>Sign up to get an instant email notification when new listings are added on Exchange Marketplace.</p>
                        </div>
                        <div class="col-md-6 text-center">
                            <form action="" class="h-100 d-flex justify-content-end align-items-center">
                                <div class="input-div w-75 d-flex justify-content-center align-item-center position-relative">
                                    <input type="email" name="" id="" placeholder="Email Address">
                                    <button class="common-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('script')
    <script src="{{asset('FrontEnd/js/slick.min.js')}}"></script>
    <script>
        $('.multiple-client').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    </script>
@endsection
