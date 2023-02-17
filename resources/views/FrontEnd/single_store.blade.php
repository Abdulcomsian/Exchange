@extends('layouts.frontEnd.master')
@section('content')
    @include('layouts.frontEnd.header')

    <main>
        <div class="main-wrapper">
            <div id="single-common-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5>{{$store->store_name}}</h5>
                            <div class="breadcrum">
                                <ul>
                                    <li>
                                        <a href="">All categories</a>
                                        <span><i class="fa-solid fa-angles-right"></i> </span>
                                    </li>
                                    <li>
                                        <a href=""> {{$store->category->name ?? ''}}</a>
                                        <span><i class="fa-solid fa-angles-right"></i> </span>
                                    </li>
                                    <li>
                                        <a href=""> {{$store->store_name}}</a>
                                        <a href="">{{$store->store_name}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="business-details-div" class="mt-5 mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="business-left-div">
                                <div class="business-story">
                                    <h5 class="mb-4 common-detail-heading">BUSINESS STORY</h5>
                                    <hr>
                                    <h4 class="common-detail-title"><i class="fa-solid fa-angles-right"></i> Why this
                                        business was started</h4>
                                    {!! $store->business_story !!}
                                    {{--                                    {{$store->business_story}}--}}
                                    {{-- <h4 class="common-detail-title"><i class="fa-solid fa-angles-right"></i> Why this business was started</h4>
                                    <p>We started this business to capitalize on a growing interest in detox tea products. We noticed most businesses were operating in Europe and Australia so shipping time to North America was very long. Our company is Canadian based and offered competitive pricing and fast shipping to customers in the U.S. and Canada primarily; although, we do receive orders from around the world.</p>
                                    <h4 class="common-detail-title"><i class="fa-solid fa-angles-right"></i> The reason of selling this business</h4>
                                    <p>It's time to move on and focus our efforts on something new.</p>
                                    <h4 class="common-detail-title"><i class="fa-solid fa-angles-right"></i> What's involved in running this business</h4>
                                    <p>Our business is a typical SMB ecommerce business with a lean operation, small SKU count, inexpensive marketing costs, and loads of growth potential.</p>
                                    <p class="m-0 common-icon-para"><i class="fa-solid fa-calendar-days"></i> This business was founded: <span>about 9 years ago</span></p>
                                    <p class="m-0 common-icon-para"><i class="fa-solid fa-clock"></i> Time to run this business: <span>approximately 16 hours per week</span></p>
                                    <p class="m-0 common-icon-para"><i class="fa-solid fa-clock"></i> Time to run this business: <span>approximately 16 hours per week</span></p> --}}
                                </div>
                                <div class="business-list-div mt-5">
                                    <div class="tab-list">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="pills-description-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-description"
                                                        type="button" role="tab" aria-controls="pills-description"
                                                        aria-selected="true">Description
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-performance-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-performance"
                                                        type="button" role="tab" aria-controls="pills-performance"
                                                        aria-selected="false">Performance
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-expenses-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-expenses" type="button" role="tab"
                                                        aria-controls="pills-expenses" aria-selected="false">Expenses
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-sales-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-sales" type="button" role="tab"
                                                        aria-controls="pills-sales" aria-selected="false">Sale Includes
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-content-div mt-5">
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                                             aria-labelledby="pills-description-tab">
                                            <div class="description-div">
                                                <h5 class="common-detail-heading">DESCRIPTION</h5>
                                                <hr>
                                                <h4 class="common-detail-title">General description</h4>
                                                {!! $store->description !!}
                                                {{--                                                {{$store->description}}--}}
                                                {{-- <h4 class="common-detail-title">General description</h4>
                                                <p>This well established ecommerce business is a leading detox tea company within the natural health and wellness industry. We focus on developing unique health products to help customers achieve their health goals. We've had over 130,000 orders around the world amounting to over $6 million USD in total sales.</p>
                                                <p>The company was founded in 2013 and operates out of Toronto, Canada.</p>
                                                <p>Although sales have declined significantly from all-time highs, average monthly revenue has plateaued and is steady and predictable. This is still an easy-to-run profitable business that has an incredible amount of potential for increased growth both in the short-term and long-term.</p>
                                                <h4 class="common-detail-title">Why should someone buy this store?</h4>
                                                <p>The amount of potential this business has is incredible. Looking at total sales and audience size figures, it may seem like this is a well oiled machine with little room for growth. In fact, we’ve been operating an extremely lightweight operation and have put very little energy into sales and marketing initiatives.</p>
                                                <p>Although we have an office in Toronto, Canada, where we store inventory and fulfill orders, this business could easily be run from anywhere in the world without requiring a large amount of space.</p>
                                                <p>We have one part-time employee packing orders and a few small contractors helping with marketing. Operations could easily be run entirely by one owner.</p>
                                                <p>We enjoy a high profit margin, high repeat purchase ratio, inexpensive customer acquisition costs, and a massive customer database.</p>
                                                <h4 class="common-detail-title">How can the future owner improve the business?</h4>
                                                <p>We're currently fulfilling about 10% of our total potential sales and marketing opportunities. The potential to expand our efforts is immense. We dabble in SEO, Facebook and Instagram advertising, and basic email marketing - but robust marketing strategies in these areas have not been explored yet.</p>
                                                <p>There's potential to additionally focus on Google Adwords, affiliate marketing, influencer marketing, content marketing, media and PR outreach, and significant potential in deepening the social media marketing and SEO strategy.</p>
                                                <p>Further, profit margins can be increased significantly by reducing operational costs and overhead. Office rent and fulfillment staff wages takes a large chunk out of our monthly profit and if the buyer were to operate out of their existing office or even out of a home profit could be increased overnight.</p>
                                                <h4 class="common-detail-title">What work have you put into the store?</h4>
                                                <p>This is a well-established 7 year old ecommerce business with over $6 million in sales that requires very little effort to maintain sales, but comes with an unlimited amount of potential to considerably expedite growth.</p>
                                                <p>An incredible amount of work has gone into building the custom website, developing the products, sourcing a trusted supplier network, establishing effective customer service and fulfillment processes, growing a social media audience of over 250,000, and of course consistently driving traffic to the website through various channels.</p>
                                            </div>
                                        --}}
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-performance" role="tabpanel"
                                             aria-labelledby="pills-performance-tab">
                                            <div class="performance-div">
                                                <h5 class="common-detail-heading">TRAFFIC AND PERFORMANCE</h5>
                                                <hr>
                                                <div class="multiple-reading">
                                                    <div class="common-div position-relative">
                                                        @if($store->revenue_status == 'verified')
                                                            <span class="badge">
                                                                <img
                                                                    src="{{asset('FrontEnd/img/shopify_xtcf17qcmyoq.svg')}}"
                                                                    alt="" class="img-fluid">
                                                                Verified
                                                            </span>
                                                        @endif
                                                        <h4>Avg. revenue /month</h4>
                                                        <p>${{$store->revenue}}</p>
                                                    </div>
                                                    <div class="common-div position-relative">
                                                        @if($store->session_status == 'verified')
                                                            <span class="badge">
                                                                <img
                                                                    src="{{asset('FrontEnd/img/shopify_xtcf17qcmyoq.svg')}}"
                                                                    alt="" class="img-fluid">
                                                                Verified
                                                            </span>
                                                        @endif
                                                        <h4>Avg. sessions /month</h4>
                                                        <p>${{$store->session}}</p>
                                                    </div>
                                                    <div class="common-div position-relative">
                                                        <h4>Avg. profit /month</h4>
                                                        <p>${{$store->profit}}</p>
                                                    </div>
                                                    <div class="common-div position-relative">
                                                        <h4>Inventory value</h4>
                                                        <p>${{$store->inventory_value}}</p>
                                                    </div>
                                                    <div class="common-div position-relative">
                                                        <h4>Profit Margin</h4>
                                                        <p>{{$store->profit }}%</p>
                                                    </div>


                                                </div>
                                                <h4 class="common-detail-title">Other details about profit:</h4>
                                                <p>The "Shopify Verified" avg. monthly revenue and avg. monthly sessions
                                                    is technically correct, but that's combining the last 3 years of
                                                    traffic and revenue. Current average revenue and sessions is less -
                                                    please look to the charts below for accurate information. Also note
                                                    that profit margins can be increased significantly by reducing
                                                    operational costs and overhead. Office rent and fulfillment staff
                                                    wages takes a large chunk out of our monthly profit and if the buyer
                                                    were to operate out of their existing office or even out of a home,
                                                    profit could be increased overnight.</p>
                                                <div class="graph-div">
                                                    <h4 class="common-detail-title">Last 7 years revenue</h4>
                                                    <p class="revenue-amount">$5,074,975</p>
                                                    <img src="{{asset('FrontEnd/img/graph.png')}}" alt=""
                                                         class="img-fluid">
                                                </div>
                                                <div class="graph-div">
                                                    <h4 class="common-detail-title">Last 7 years traffic</h4>
                                                    <p class="revenue-amount">4,728,433 Visits</p>
                                                    <img src="{{asset('FrontEnd/img/graph.png')}}" alt=""
                                                         class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-expenses" role="tabpanel"
                                             aria-labelledby="pills-expenses-tab">
                                            <div class="expenses-div">
                                                <h5 class="common-detail-heading">EXPENSES</h5>
                                                <hr>
                                                <div class="table-div">
                                                    <p class="d-flex justify-content-between align-items-center">
                                                        <span class="d-block">Shopify plan</span>
                                                        <span
                                                            class="d-block"><b>{{$store->shopify_plan ?? ''}}</b></span>
                                                    </p>
                                                    <p class="d-flex justify-content-between align-items-center">
                                                        <span class="d-block">Inventory warehouse</span>
                                                        <span
                                                            class="d-block"><b>{{$store->inventory_warehouse ?? ''}}</b></span>
                                                    </p>
                                                    <p class="d-flex justify-content-between align-items-center">
                                                        <span class="d-block">Domain</span>

                                                        <span class="d-block"><b>{{$store->domain}}</b></span>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-sales" role="tabpanel"
                                             aria-labelledby="pills-sales-tab">
                                            <div class="sales-div">
                                                <h5 class="common-detail-heading">SALE INCLUDES</h5>
                                                <hr>
                                                <div class="sale-list">
                                                    <ul>
                                                        <li class="d-flex">
                                                            <div class="icon-div">
                                                                <i class="fa-solid fa-check"></i>
                                                            </div>
                                                            <div class="ms-3 sale-content">

                                                                <h4>{{$store->sale_include_1}}</h4>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex">
                                                            <div class="icon-div">
                                                                <i class="fa-solid fa-check"></i>
                                                            </div>
                                                            <div class="ms-3 sale-content">
                                                                <h4>{{$store->sale_include_2}}</h4>
                                                                {{--                                                                <p>All marketing materials are included.</p>--}}
                                                            </div>
                                                        </li>
                                                        <li class="d-flex">
                                                            <div class="icon-div">
                                                                <i class="fa-solid fa-check"></i>
                                                            </div>
                                                            <div class="ms-3 sale-content">

                                                                <h4>{{$store->sale_include_3}}</h4>
                                                                {{--                                                                <p>In-person support for 2 full-days to assist in transfer and to help set everything up and answer any questions. Phone and video support for 1-month after sale.</p>--}}
                                                            </div>
                                                        </li>
                                                        <li class="d-flex">
                                                            <div class="icon-div">
                                                                <i class="fa-solid fa-check"></i>
                                                            </div>
                                                            <div class="ms-3 sale-content">

                                                                <h4>{{$store->sale_include_4}}</h4>
                                                                {{--                                                                <p>In-person support for 2 full-days to assist in transfer and to help set everything up and answer any questions. Phone and video support for 1-month after sale.</p>--}}
                                                            </div>
                                                        </li>
                                                        <!--                                                        <li class="d-flex">
                                                            <div class="icon-div">
                                                                <i class="fa-solid fa-check"></i>
                                                            </div>
                                                            <div class="ms-3 sale-content">
                                                                <h4>Domain</h4>
                                                                <P>{{$store->domain}}</P>
                                                            </div>
                                                        </li>-->
                                                        <!--                                                        <li class="d-flex">
                                                                                                                    <div class="icon-div">
                                                                                                                        <i class="fa-solid fa-check"></i>
                                                                                                                    </div>
                                                                                                                    <div class="ms-3 sale-content">
                                                                                                                        <h4>Product photos</h4>
                                                                                                                        <p>All product photos are included.</p>
                                                                                                                    </div>
                                                                                                                </li>-->
                                                        {{--<li class="d-flex">
                                                            <div class="icon-div">
                                                                <i class="fa-solid fa-check"></i>
                                                            </div>
                                                            <div class="ms-3 sale-content">
                                                                <h4>Social media</h4>
                                                            </div>
                                                        </li>--}}
                                                        {{--<li class="d-flex">
                                                            <div class="icon-div">
                                                                <i class="fa-solid fa-check"></i>
                                                            </div>
                                                            <div class="ms-3 sale-content">
                                                                <h4>Suppliers</h4>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex">
                                                            <div class="icon-div">
                                                                <i class="fa-solid fa-check"></i>
                                                            </div>
                                                            <div class="ms-3 sale-content">
                                                                <h4>Mailing List</h4>
                                                                <p>250,000subscribers</p>
                                                            </div>
                                                        </li>--}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="business-right-div">
                                <div class="common-div price-share-div">
                                    {{--                                    <h5 class="price-text">$100,000</h5>--}}
                                    <h5 class="price-text">$ {{$store->price}}</h5>
                                    <a href="tel:12345" class="common-btn">Contact Seller</a>
                                    <div class="url-div mt-3">
                                        <p class="mb-2">URL Hidden</p>
                                        <ul class="d-flex flex-wrap">
                                            @foreach($categories as $category)
                                                <li>
                                                    <a href="">{{$category->name}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="share-div mt-3">
                                        <p class="mb-2">SHARE</p>
                                        <ul class="d-flex">
                                            <li>
                                                <a href="" class="common-social-icon facebook-icon"><i
                                                        class="fa-brands fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="" class="common-social-icon twitter-icon"><i
                                                        class="fa-brands fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="" class="common-social-icon linkedin-icon"><i
                                                        class="fa-brands fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="" class="common-social-icon email-icon"><i
                                                        class="fa-solid fa-envelope"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @if(count($store->tags) > 0)
                                    <div class="common-div">
                                        <p class="mb-0">Tags</p>
                                        <hr>
                                        <div class="url-div mt-3">
                                            <ul class="d-flex flex-wrap">
                                                @foreach($store->tags as $tag)
                                                    <li class="mb-2">
                                                        <a href="">{{$tag->name}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                                <div class="common-div tab-div">
                                    <div class="tab-list">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="pills-similar-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-similar"
                                                        type="button" role="tab" aria-controls="pills-similar"
                                                        aria-selected="true">SIMILAR BUSINESSES
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-sold-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-sold" type="button" role="tab"
                                                        aria-controls="pills-sold" aria-selected="false">SOLD BUSINESSES
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content-div">
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-similar" role="tabpanel"
                                                 aria-labelledby="pills-similar-tab">
                                                <div class="common-business-div">
                                                    <div class="bsiness-header d-flex justify-content-between">
                                                        <h5>TVSC</h5>
                                                        <a class="compare-btn">$200k Compare</a>
                                                    </div>
                                                    <div class="url-div mt-2">
                                                        <ul class="d-flex flex-wrap">
                                                            <li>
                                                                <a href="">Sports and recreation</a>
                                                            </li>
                                                            <li>
                                                                <a href="">Established businesses</a>
                                                            </li>
                                                            <li>
                                                                <a href="">Inventory</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="comparing-div">
                                                        <div class="revenue-profit-inventory-div mt-3">
                                                            <ul class="d-flex justify-content-between">
                                                                <li>
                                                                    <h4>Revenue</h4>
                                                                    <span>$6.1k</span>
                                                                </li>
                                                                <li>
                                                                    <h4>Traffic</h4>
                                                                    <span>3,743</span>
                                                                </li>
                                                                <li>
                                                                    <h4>Profit</h4>
                                                                    <span>$3.1k</span>
                                                                </li>
                                                                <li>
                                                                    <h4>Inventory</h4>
                                                                    <span>$5k</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <hr>
                                                        <div class="bsiness-header d-flex justify-content-between">
                                                            <h5>TVSC</h5>
                                                            <a href="">$200k</a>
                                                        </div>
                                                        <div class="url-div mt-2">
                                                            <ul class="d-flex flex-wrap">
                                                                <li>
                                                                    <a href="">Sports and recreation</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Established businesses</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Inventory</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="revenue-profit-inventory-div mt-3">
                                                            <ul class="d-flex justify-content-between">
                                                                <li>
                                                                    <h4>Revenue</h4>
                                                                    <span>$6.1k</span>
                                                                </li>
                                                                <li>
                                                                    <h4>Traffic</h4>
                                                                    <span>3,743</span>
                                                                </li>
                                                                <li>
                                                                    <h4>Profit</h4>
                                                                    <span>$3.1k</span>
                                                                </li>
                                                                <li>
                                                                    <h4>Inventory</h4>
                                                                    <span>$5k</span>
                                                                </li>
                                                            </ul>
                                                            <span
                                                                class="monthly-text">* monthly averages shown in USD</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="common-business-div">
                                                    <div class="bsiness-header d-flex justify-content-between">
                                                        <h5>ilovekittees</h5>
                                                        <a class="compare-btn">$200k Compare</a>
                                                    </div>
                                                    <div class="url-div mt-2">
                                                        <ul class="d-flex flex-wrap">
                                                            <li>
                                                                <a href="">Sports and recreation</a>
                                                            </li>
                                                            <li>
                                                                <a href="">Established businesses</a>
                                                            </li>
                                                            <li>
                                                                <a href="">Inventory</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="comparing-div">
                                                        <div class="revenue-profit-inventory-div mt-3">
                                                            <ul class="d-flex justify-content-between">
                                                                <li>
                                                                    <h4>Revenue</h4>
                                                                    <span>$6.1k</span>
                                                                </li>
                                                                <li>
                                                                    <h4>Traffic</h4>
                                                                    <span>3,743</span>
                                                                </li>
                                                                <li>
                                                                    <h4>Profit</h4>
                                                                    <span>$3.1k</span>
                                                                </li>
                                                                <li>
                                                                    <h4>Inventory</h4>
                                                                    <span>$5k</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <hr>
                                                        <div class="bsiness-header d-flex justify-content-between">
                                                            <h5>TVSC</h5>
                                                            <a href="">$200k</a>
                                                        </div>
                                                        <div class="url-div mt-2">
                                                            <ul class="d-flex flex-wrap">
                                                                <li>
                                                                    <a href="">Sports and recreation</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Established businesses</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Inventory</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="revenue-profit-inventory-div mt-3">
                                                            <ul class="d-flex justify-content-between">
                                                                <li>
                                                                    <h4>Revenue</h4>
                                                                    <span>$6.1k</span>
                                                                </li>
                                                                <li>
                                                                    <h4>Traffic</h4>
                                                                    <span>3,743</span>
                                                                </li>
                                                                <li>
                                                                    <h4>Profit</h4>
                                                                    <span>$3.1k</span>
                                                                </li>
                                                                <li>
                                                                    <h4>Inventory</h4>
                                                                    <span>$5k</span>
                                                                </li>
                                                            </ul>
                                                            <span
                                                                class="monthly-text">* monthly averages shown in USD</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="common-business-div">
                                                    <div class="bsiness-header d-flex justify-content-between">
                                                        <h5>Private listing #859331</h5>
                                                        <a class="compare-btn">$200k Compare</a>
                                                    </div>
                                                    <div class="url-div mt-2">
                                                        <ul class="d-flex flex-wrap">
                                                            <li>
                                                                <a href="">Sports and recreation</a>
                                                            </li>
                                                            <li>
                                                                <a href="">Established businesses</a>
                                                            </li>
                                                            <li>
                                                                <a href="">Inventory</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="comparing-div">
                                                        <div class="revenue-profit-inventory-div mt-3">
                                                            <ul class="d-flex justify-content-between">
                                                                <li>
                                                                    <h4>Revenue</h4>
                                                                    <span>$6.1k</span>
                                                                </li>
                                                                <li>
                                                                    <h4>Traffic</h4>
                                                                    <span>3,743</span>
                                                                </li>
                                                                <li>
                                                                    <h4>Profit</h4>
                                                                    <span>$3.1k</span>
                                                                </li>
                                                                <li>
                                                                    <h4>Inventory</h4>
                                                                    <span>$5k</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <hr>
                                                        <div class="bsiness-header d-flex justify-content-between">
                                                            <h5>TVSC</h5>
                                                            <a href="">$200k</a>
                                                        </div>
                                                        <div class="url-div mt-2">
                                                            <ul class="d-flex flex-wrap">
                                                                <li>
                                                                    <a href="">Sports and recreation</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Established businesses</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Inventory</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="revenue-profit-inventory-div mt-3">
                                                            <ul class="d-flex justify-content-between">
                                                                <li>
                                                                    <h4>Revenue</h4>
                                                                    <span>$6.1k</span>
                                                                </li>
                                                                <li>
                                                                    <h4>Traffic</h4>
                                                                    <span>3,743</span>
                                                                </li>
                                                                <li>
                                                                    <h4>Profit</h4>
                                                                    <span>$3.1k</span>
                                                                </li>
                                                                <li>
                                                                    <h4>Inventory</h4>
                                                                    <span>$5k</span>
                                                                </li>
                                                            </ul>
                                                            <span
                                                                class="monthly-text">* monthly averages shown in USD</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-sold" role="tabpanel"
                                                 aria-labelledby="pills-sold-tab">
                                                <div class="common-business-div">
                                                    <div class="bsiness-header d-flex justify-content-between">
                                                        <h5>Orion Watches</h5>
                                                        <a href="">Sold</a>
                                                    </div>
                                                    <div class="url-div mt-2">
                                                        <ul class="d-flex flex-wrap">
                                                            <li>
                                                                <a href="">Sports and recreation</a>
                                                            </li>
                                                            <li>
                                                                <a href="">Established businesses</a>
                                                            </li>
                                                            <li>
                                                                <a href="">Inventory</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                                 aria-labelledby="pills-contact-tab">...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="echange-trust">
                                    <img src="{{asset('FrontEnd/img/thumb-img.svg')}}" alt="" class="img-fluid">
                                    <p class="m-0">OUR FEATURES FOR A SECURE EXPERIENCE</p>
                                    <h3>Exchange Trust</h3>
                                    <ul>
                                        <li>
                                            <span>Verified revenue and traffic</span>
                                        </li>
                                        <li>
                                            <span>Secure messaging platform</span>
                                        </li>
                                        <li>
                                            <span>Escrow payment system</span>
                                        </li>
                                        <li>
                                            <span>Dedicated migration team</span>
                                        </li>
                                    </ul>
                                    <a href="">Learn More</a>
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
                            <p class="common-para">Exchange is the largest and fastest-growing marketplace for Shopify
                                e-commerce stores</p>
                        </div>
                    </div>
                    <div class="multiple-div mt-5">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="common-div">
                                    <div class="icon-div">
                                        <img src="{{asset('FrontEnd/img/e5f6dc5f224132d46c27eb74edc13a2e.png')}}" alt=""
                                             class="img-fluid">
                                    </div>
                                    <div class="content-div">
                                        <h4>Verified listing data</h4>
                                        <p>The revenue and traffic data that you see on each listing is pulled directly
                                            from its Shopify account. This means that the data has been verified.
                                            Exchange reviews and monitors listings for thorough and accurate
                                            information.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="common-div">
                                    <div class="icon-div">
                                        <img src="{{asset('FrontEnd/img/e5f6dc5f224132d46c27eb74edc13a2e.png')}}" alt=""
                                             class="img-fluid">
                                    </div>
                                    <div class="content-div">
                                        <h4>Secure messaging platform</h4>
                                        <p>You will be able to communicate with sellers via a secure messaging platform.
                                            After you log in and request information from a listing, sellers are
                                            notified and have the ability to respond. When you are ready, you can make
                                            an offer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="common-div">
                                    <div class="icon-div">
                                        <img src="{{asset('FrontEnd/img/d677d4993d4ebf2f071a0f3459f0808e.png')}}" alt=""
                                             class="img-fluid">
                                    </div>
                                    <div class="content-div">
                                        <h4>Encrypted payment capture</h4>
                                        <p>Exchange and Escrow.com have partnered together to provide you with safe
                                            transactions that have bank encryption, making sure that payment is securely
                                            captured. Escrow.com ensures that its users pass verification checks before
                                            transactions can proceed.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="common-div">
                                    <div class="icon-div">
                                        <img src="{{asset('FrontEnd/img/3b4ed766f0ba114194ce411a33d3852f.png')}}" alt=""
                                             class="img-fluid">
                                    </div>
                                    <div class="content-div">
                                        <h4>Take time to inspect the business</h4>
                                        <p>Once you submit payment to Escrow.com and the payment has been secured, the
                                            funds are held until you confirm that all assets received are as negotiated.
                                            You can use the inspection period to ask the seller any extra questions
                                            about the business.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="common-div">
                                    <div class="icon-div">
                                        <img src="{{asset('FrontEnd/img/050510c1cf71e188ac8086a808439268.png')}}" alt=""
                                             class="img-fluid">
                                    </div>
                                    <div class="content-div">
                                        <h4>Safe store transfer</h4>
                                        <p>When the transaction is finalized, the dedicated migration team at Exchange
                                            will begin the process of making you the new owner of the store. Buyers and
                                            sellers will be notified via an email from the Exchange team once store
                                            transfers have been completed.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="common-div">
                                    <div class="icon-div">
                                        <img src="{{asset('FrontEnd/img/341709bb806656dff1c4fb867d368505.png')}}" alt=""
                                             class="img-fluid">
                                    </div>
                                    <div class="content-div">
                                        <h4>Post-purchase 24/7 Shopify support</h4>
                                        <p>Once you log into your Shopify account for the first time and choose a
                                            subscription plan, Shopify Support Gurus are available 24/7 to help you with
                                            the settings of the store.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="join-us-today">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5>We’ll notify you</h5>
                            <p>Sign up to get an instant email notification when new listings are added on Exchange
                                Marketplace.</p>
                        </div>
                        <div class="col-lg-6 text-center">
                            <form action="" class="h-100 d-flex justify-content-end align-items-center">
                                <div
                                    class="input-div w-75 d-flex justify-content-center align-item-center position-relative">
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


