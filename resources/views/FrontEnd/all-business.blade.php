
@extends('layouts.frontEnd.master')
   @section('css')
   <link rel="stylesheet" href="{{asset('FrontEnd/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('FrontEnd/css/slick-theme.css')}}">
   @endsection
   @section('content')
     @include('layouts.frontEnd.header')
    <main>
        <div class="main-wrapper">
            <div id="single-common-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5>Search stores for sale</h5>
                            <p>Browse thousands of trending ecommerce websites for sale on Exchange.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="best-business" class="mt-5 mb-5">
                <div class="container">
                    <div class="filter-div mt-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                    <ul class="filter-list">
                                        <li class="price-span">
                                            <span >Price</span>
                                            <div class="common-selection-div dropdown-div price-div">
                                                <h4>Selling Price</h4>
                                                <ul>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">$0 - $500</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">$500 - $1,000</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">$1,000 - $2,500</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">$2,500 - $5,000</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">$5,000 - $10,000</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">$10,000 - $25,000</label>
                                                        <span>7393</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="revenue-span">
                                            <span>Revenue</span>
                                            <div class="common-selection-div dropdown-div revenue-div">
                                                <h4>Average Monthly Revenue</h4>
                                                <ul>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">$0 - $500</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">$500 - $2,500</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">$2,500 - $15,000</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">$15,000+</label>
                                                        <span>7393</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="age-span">
                                            <span>Age</span>
                                            <div class="common-selection-div dropdown-div age-div">
                                                <h4>Site Age</h4>
                                                <ul>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">0 - 6 months</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">6 - 12 months</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">1 - 2 years</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">2+ years</label>
                                                        <span>7393</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="business-span">
                                            <span>Business Type</span>
                                            <div class="common-selection-div dropdown-div business-div">
                                                <h4>Business Type</h4>
                                                <ul>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">Dropshipping</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">Established businesses</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">Dropshipping stores</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">Print on demand</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">Inventory</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">Retail Stores</label>
                                                        <span>7393</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="industry-span">
                                            <span>Industry</span>
                                            <div class="common-selection-div dropdown-div industry-div">
                                                <h4>Industry</h4>
                                                <ul>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">Fashion and apparel</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">Gift and collectibles</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">Sports and recreation</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">Toys and games</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">Stationery and office supplies</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">Services and consulting</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">Pets and animals</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">Music</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">Home and furniture</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">Health and beauty</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">Food and drink</label>
                                                        <span>7393</span>
                                                    </li>
                                                    <li class="mb-2 d-flex justify-content-between">
                                                        <input type="checkbox" name="" id="">
                                                        <label for="">Electronics and gadgets</label>
                                                        <span>7393</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <div class="sort-div position-relative">
                                        <span class="position-absolute">Sort:</span>
                                        <select name="" id="">
                                            <option value="Business Health">Business Health</option>
                                            <option value="Revenue: high to low">Revenue: high to low</option>
                                            <option value="Revenue: low to high">Revenue: low to high</option>
                                            <option value="Price: high to low">Price: high to low</option>
                                            <option value="Price: low to high">Price: low to high</option>
                                            <option value="Most recent">Most recent</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <p class="total-stores">Displaying 1 - 24 of 9298 stores</p>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="search-result-data">
                    <div class="listing-list-common mt-5">
                        <div class="container">
                            <div class="row">
                                @foreach ($stores as $store)
                                
                                <div class="col-lg-12">
                                    <div class="common-listing-box d-flex align-items-center">
                                        <div class="listing-img">
                                            <img src="{{asset('FrontEnd/img/image_processing20191116-5475-d3p1pb-750x430.png')}}" alt="" class="img-fluid">
                                            <span class="badge">Offer Support</span>
                                        </div>
                                        <div class="listing-content ms-4">
                                            <div class="listing-detail d-flex align-items-center justify-content-between">
                                                <h5>{{$store->name}}</h5>
                                                <div class="sale-profit-revenew d-flex align-items-center">
                                                    <div class="common-div text-center">
                                                        <h5>Avg. Revenue</h5>
                                                        <span>$ {{$store->revenue}}</span><span>/month</span>
                                                    </div>
                                                    <div class="common-div text-center">
                                                        <h5>Avg. Profit</h5>
                                                        <span>$ {{$store->profit}}</span><span>/month</span>
                                                    </div>
                                                    <div class="common-div text-center">
                                                        <h5>Inventory value</h5>
                                                        <span>$ {{$store->inventory_value}}k</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <p>2-year store for high-end tea, tea gifts, and accessories. Well-designed webshop with lots of conversion uplift customizations. Bi-lingual with Dutch & English. Fully optimized SEO setup. 40+ content marketing blogs. Dedicated B2B page.</p>
                                        </div>
                                        <div class="price-div text-center">
                                            <h5>$ {{$store->price}}</h5>
                                            <a href="{{route('single_business',$store->id)}}">Detail</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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
                                </div>
                            </div>
                            <!-- <div class="pagination-div">
                                <div class="row">
                                    <div class="col-lg-12 text-right">
                                        <ul class="d-flex justify-content-end">
                                            <li>
                                                <a href="" class="active">1</a>
                                            </li>
                                            <li>
                                                <a href="">2</a>
                                            </li>
                                            <li>
                                                <a href="">3</a>
                                            </li>
                                            <li>
                                                <a href="">4</a>
                                            </li>
                                            <li>
                                                <a href="">.</a>
                                            </li>
                                            <li>
                                                <a href="">.</a>
                                            </li>
                                            <li>
                                                <a href="">.</a>
                                            </li>
                                            <li>
                                                <a href="">.</a>
                                            </li>
                                            <li>
                                                <a href="">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                   </div>
                    
                </div>
            </div>
            <div id="other-industry" class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h5 class="common-title">Stores by category</h5>
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


        $(document).ready(function(){
            $('.listing-list-common').after('<div id="pagination-div"></div>');
            var rowsShown = 4;
            var rowsTotal = $('.listing-list-common .row .col-lg-12').length;
            var numPages = rowsTotal/rowsShown;
            for(i = 0;i < numPages;i++) {
                var pageNum = i + 1;
                $('#pagination-div').append('<a rel="'+i+'">'+pageNum+'</a> ');
            }
            $('.listing-list-common .row .col-lg-12').hide();
            $('.listing-list-common .row .col-lg-12').slice(0, rowsShown).show();
            $('#pagination-div a:first').addClass('active');
            $('#pagination-div a').bind('click', function(){

                $('#pagination-div a').removeClass('active');
                $(this).addClass('active');
                var currPage = $(this).attr('rel');
                var startItem = currPage * rowsShown;
                var endItem = startItem + rowsShown;
                $('.listing-list-common .row .col-lg-12').css('opacity','0.0').hide().slice(startItem, endItem).
                css('display','table-row').animate({opacity:1}, 300);
            });
        });
    </script>
    @endsection