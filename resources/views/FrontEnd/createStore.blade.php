@extends('layouts.frontEnd.master')
    @section('content')
    @include('layouts.frontEnd.header')
    <div class="container sellSection--container">
        <div>
            <div class="sellSection-header text-center">
                <h1 class="sellSection-header__title">Sell your business</h1>
                <h2 class="sellSection-header__subtitle">
                    List your store for sale on the fastest <br />growing marketplace
                    for entrepreneurs
                </h2>
            </div>
            <div class="tab tab-1 active">
                <!-- tab 1 -->
                <div class="sellBusinessForm">
                    <form class="" id="stepone_form" action="" style="width: 80%; margin: auto;" enctype="multipart/form-data">
                        <div class="fieldContainer" style="width: 100%">
                            <input type="hidden" name="edit_form" id="edit_form" value="{{$store->id ?? ''}}" />
                            <div class="row">
                                <div class="col-md-6">
                                    <input
                                        href="#"
                                        placeholder="Name"
                                        class="marketing-input"
                                        id="store_name"
                                        type="text"
                                        name="store_name"
                                        value="{{$store->store_name ?? ''}}"
                                    />
                                    <div class="text-danger" id="store_name_error"></div>
                                </div>
                                <div class="col-md-6">
                                <input
                                        href="#"
                                        placeholder="Store address"
                                        class="marketing-input"
                                        id="store_address"
                                        type="text"
                                        name="store_address"
                                        value="{{$store->store_address ?? ''}}"
                                />
                                    <div class="text-danger" id="store_address_error"></div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <div class="mb-3 mt-4">
                                        <input class="form-control" name="image" type="file" id="formFile">
                                    </div>
                                    <div class="text-danger" id="image_error"></div>
                                    @if(isset($store->image))
                                            <img src="{{asset('images/'.$store->image)}}" alt="" width="100px" height="100px">
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a
                                        href="#"
                                        id="step-one"
                                        class="marketing-button btn-forward"
                                        style="width: 100%; align-self: flex-start;"
                                    >Add my Shopify store</a>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="tab tab-2">
                <!-- tab 2 -->
                <h2 class="tab-title text-center">Create Business Story</h2>
                <div class="form">
                    <form class="form-centered" id="steptwo_form">

                        <input type="hidden" name="store_id" id="store_id" value="{{session('store_id') ?? ''}}">
                        <div class="row createStory">
                            <textarea id="editor" name="business_story" value="{{$store->business_story ?? ''}}"></textarea>
                            <!-- <div class="col-12" id="editor"></div> -->
                        </div>
                        <div class="text-danger" id="business_story_error"></div>
                        <div class="form-footer">
                            <a
                                href="#"
                                style="text-align: center; margin-top: 25px; color: white"
                                class="marketing-button btn-back-tab2"
                            >Back</a
                            >
                            <a href="#" style="text-align: center; margin-top: 25px; margin-left: 20px;" id="step-two"
                                class="marketing-button btn-forward"
                                data-disable-with="Add my Shopify store"
                            >Next</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab tab-3">
                <!-- tab 3 -->
                <h2 class="tab-title text-center">Description</h2>
                <div class="form">
                    <form class="form-centered" id="stepthree_form">
                        <div class="row createStory" id="editor1">
                            <textarea  name="description"></textarea>
                            <!-- <div class="col-12" id="editor"></div> -->
                        </div>
                        <div class="text-danger" id="description_error"></div>
                        <div class="form-footer">
                            <a
                                href="#"
                                style="text-align: center; margin-top: 25px; color: white"
                                class="marketing-button btn-back-tab3"
                            >Back</a
                            >
                            <a
                                href="#"
                                style="
                                    text-align: center;
                                    margin-top: 25px;
                                    margin-left: 20px;
                                "
                                id="step-three"
                                class="marketing-button btn-forward"
                                data-disable-with="Add my Shopify store"
                            >Next</a
                            >
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab tab-4">
                <!-- tab4 Body-->
                <h2 class="tab-title text-center">Traffic and Performance</h2>
                <form class="tf--form" action="" accept-charset="UTF-8" method="" id="stepfour_form">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="exampleFormControlInput1" class="form-label"
                            >Avg. revenue /month</label
                            >
                            <input
                                type="number"
                                id="revenue"
                                name="revenue"
                                class="form-control marketing-input"
                                id="exampleFormControlInput1"
                                value="{{$store->revenue ?? ''}}"
                            />
                            <span class="text-danger" id="revenue_error"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Avg. sessions /month</label>
                            <input
                                type="number"
                                id="session"
                                name="session"
                                class="form-control marketing-input"
                                id="exampleFormControlTextarea1"
                                value="{{$store->session ?? ''}}"
                            />
                            <span class="text-danger" id="session_error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="exampleFormControlInput1" class="form-label"
                            >Avg. profit /month</label
                            >
                            <input
                                type="number"
                                id="profit"
                                name="profit"
                                class="form-control marketing-input"
                                id="exampleFormControlInput1"
                                value="{{$store->profit ?? ''}}"
                            />
                            <span class="text-danger" id="profit_error"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label"
                            >Inventory value
                            </label>
                            <input
                                type="number"
                                id="inventoryValue"
                                name="inventory_value"
                                class="form-control marketing-input"
                                id="exampleFormControlTextarea1"
                                value="{{$store->inventory_value ?? ''}}"
                            >
                            <span class="text-danger" id="inventory_value_error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Other details about profit:
                                </label>
                                <textarea class="form-control" id="otherDetailOfProfit" name="other_detail" rows="3">{{$store->other_detail ?? ''}}</textarea>
                                <span class="text-danger" id="other_detail_error"></span>
                            </div>
                        </div>
                    </div>
                    <div class=" tf-footer">
                        <a
                            href="#"
                            style="text-align: center; margin-top: 25px; color: white"
                            class="marketing-button btn-back-tab4"
                        >Back</a
                        >
                        <a
                            href="#"
                            style="
                    text-align: center;
                    margin-top: 25px;
                    margin-left: 20px;
                  "
                            id="step-four"
                            class="marketing-button btn-forward"
                            data-disable-with="Add my Shopify store"
                        >Next</a
                        >
                    </div>
                </form>
            </div>
            <div class="tab tab-5">
                <!-- tab4 Body-->
                <h2 class="tab-title text-center">Expenses</h2>
                <form class="tf--form" action="" accept-charset="UTF-8" method="" id="stepfive_form">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="exampleFormControlInput1" class="form-label"
                            >Shopify plan</label
                            >
                            <input
                                type="text"
                                name="shopify_plan"
                                class="form-control marketing-input"
                                id="exampleFormControlInput1"
                                value="{{$store->shopify_plan ?? ''}}"
                            />
                            <span class="text-danger" id="shopify_plan_error"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label"
                            >Inventory warehouse</label
                            >
                            <input
                                type="text"
                                name="inventory_warehouse"
                                class="form-control marketing-input"
                                id="exampleFormControlTextarea1"
                                value="{{$store->inventory_warehouse ?? ''}}"
                            ></input>
                            <span class="text-danger" id="inventory_warehouse_error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Domain
                                </label>
                                <input type="text" name="domain" value="{{$store->domain ?? ''}}"  class="form-control marketing-input" id="exampleFormControlTextarea1"/>
                                <span class="text-danger" id="domain_error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="tf-footer">
                        <a
                            href="#"
                            style="text-align: center; margin-top: 25px; color: white"
                            class="marketing-button btn-back-tab5"
                        >Back</a
                        >
                        <a
                            href="#"
                            style="
                    text-align: center;
                    margin-top: 25px;
                    margin-left: 20px;
                  "
                            id="step-five"
                            class="marketing-button btn-forward"
                            data-disable-with="Add my Shopify store"
                        >Next</a
                        >
                    </div>
                </form>
            </div>
            <div class="tab tab-6">
                <!-- tab6 Body-->
                <h2 class="tab-title text-center">sale includes</h2>
                <form class="tf--form" action="" accept-charset="UTF-8" method="" id="stepsix_form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="text" name="sale_include_1" value="{{$store->sale_include_1 ?? ''}}" class="form-control marketing-input" id="exampleFormControlTextarea1"></input>
                                <span class="text-danger" id="sale_include_1_error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="text" name="sale_include_2" value="{{$store->sale_include_2 ?? ''}}" class="form-control marketing-input" id="exampleFormControlTextarea1"></input>
                                <span class="text-danger" id="sale_include_2_error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input
                                type="text"
                                name="sale_include_3"
                                class="form-control marketing-input"
                                id="exampleFormControlInput1"
                                value="{{$store->sale_include_3 ?? ''}}"
                            />
                            <span class="text-danger" id="sale_include_3_error"></span>
                        </div>
                        <div class="col-md-6 mb-3">

                            <input
                                type="text"
                                name="sale_include_4"
                                class="form-control marketing-input"
                                id="exampleFormControlTextarea1"
                                value="{{$store->sale_include_4 ?? ''}}"
                            />
                            <span class="text-danger" id="sale_include_4_error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <select class="form-select marketing-input" aria-label="Default select example" name="category">
                                <option selected>Open this select menu</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" @if(isset($store)){{($category->id == $store->id) ? 'selected' : ''}}@endif>{{$category->name}}</option>
                                @endforeach
                            </select>
                            <span class="text-danger" id="category_error"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input
                                type="number"
                                name="price"
                                Placeholder="Enter Store Price"
                                class="form-control marketing-input"
                                id="exampleFormControlInput1"
                                value="{{$store->price ?? ''}}"
                            />
                            <span class="text-danger" id="price_error"></span>
                        </div>
                    </div>

                    <div class="tf-footer">
                        <a
                            href="#"
                            style="text-align: center; margin-top: 25px; color: white"
                            class="marketing-button btn-back-tab6"
                        >Back</a
                        >
                        <a
                            href="#"
                            style="
                    text-align: center;
                    margin-top: 25px;
                    margin-left: 20px;
                  "
                            id="step-six"
                            class="marketing-button btn-forward"
                        >Submit</a
                        >
                    </div>
                </form>
            </div>
        </div>
        <div class="sellBusiness_procdure">
            <h2 class="text-center">How it works</h2>
            <div class="sellBusiness_procdureStep">
                <div class="step">
                    <span class="stepNum">1</span>
                    <p>Create a public or private listing</p>
                </div>
                <div class="step">
                    <span class="stepNum">2</span>
                    <p>Listing shown on Exchange</p>
                </div>
                <div class="step">
                    <span class="stepNum">3</span>
                    <p>Buyers contact you</p>
                </div>
                <div class="step">
                    <span class="stepNum">4</span>
                    <p>Secure transfer</p>
                </div>
            </div>
        </div>
    </div>

    @endSection

   @section('script')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/s7elsci59jchj3dky00b296gqc0917u7oa78oha5si1mp2pe/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
            tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount', 'image'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
    <script>
        $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
    $(".js-example-basic-multiple").select2({
  tags: true
});
});
        </script>

        <script>
            // Tab DOM element selectors
            const step1 = document.querySelector('.tab-1');
            const step2 = document.querySelector('.tab-2');
            const step3 = document.querySelector('.tab-3');
            const step4 = document.querySelector('.tab-4');
            const step5 = document.querySelector('.tab-5');
            const step6 = document.querySelector('.tab-6');


            // Back Buttons Element
            const btnback2 = document.querySelector('.btn-back-tab2');
            const btnback3 = document.querySelector('.btn-back-tab3');
            const btnback4 = document.querySelector('.btn-back-tab4');
            const btnback5 = document.querySelector('.btn-back-tab5');
            const btnback6 = document.querySelector('.btn-back-tab6');



            // Event Handler
            $(document).on("click", "#step-one", function () {
                var formData = new FormData();
                formData.append("image", $("#formFile")[0].files[0]);
                formData.append("store_address",$("#store_address").val());
                formData.append("store_name", $("#store_name").val());
                formData.append("edit_form", $("#edit_form").val());
                console.log(formData);
                $.ajax({
                    type: "POST",
                    url: "{{route('stores.step_one') }}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                        Accept: "application/json",
                    },
                    success: function (response) {
                        console.log(response);
                        if (response.success) {

                          step1.classList.remove('active');
                          step2.classList.add('active');
                          sellProcedure_toggler();

                        }
                    },
                    error: function (response) {
                        // console.log(response)
                        if (response.status == 422) {
                            var errors = response.responseJSON.errors;
                            console.log(errors)
                            // document.querySelector('#store_error').textContent = errors.store_address;
                            $.each(errors, function (key, value) {
                                $("#" + key + "_error").html(value);
                            });
                        }
                    },
                });
        });
            // Step 2
            // Forward Event handler
            $(document).on('click', '#step-two', function(){
            // getting value from the inputs
            var ckEditor1_value=$('.ck-editor__editable').html();
            const ckEditor1_text=$('.ck-editor__editable').text();
            if(ckEditor1_text=="")
            {
                ckEditor1_value="";
            }
            console.log('value', ckEditor1_value);
            console.log('text', ckEditor1_text);
            $.ajax({
                type: "POST",
                url: "{{route('stores.step_two') }}",
                data:{business_story:ckEditor1_value},
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    Accept: "application/json",
                },
                success: function (response) {
                    console.log(response);
                    if (response.success) {
                        step2.classList.remove('active');
                        step3.classList.add('active');
                        sellProcedure_toggler();
                    }
                },
                error: function (response) {
                    if (response.status == 422) {
                        var errors = response.responseJSON.errors;
                        $.each(errors, function (key, value) {
                            $("#" + key + "_error").html(value);
                        });
                    }
                },
            });
        });

            // backward Envent Handler
            btnback2.addEventListener('click', function(){
            step2.classList.remove('active');
            step1.classList.add('active');
            sellProcedure_toggler();
            })
            // Step 3
            // Forward Event handler
            $(document).on('click', '#step-three', function(){
            // getting value from the inputs
            let ckEditor2_value=$('#stepthree_form .ck-editor__editable').html();
            const ckEditor2_text=$('#stepthree_form .ck-editor__editable').text();
            if(ckEditor2_text=="")
            {
                ckEditor2_value="";
            }
            console.log(ckEditor2_text);
            $.ajax({
                type: "POST",
                url: "{{route('stores.step_three') }}",
                data:{description:ckEditor2_value},
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    Accept: "application/json",
                },
                success: function (response) {
                    console.log(response);
                    if (response.success) {
                        step3.classList.remove('active');
                        step4.classList.add('active');
                        sellProcedure_toggler();
                    }
                },
                error: function (response) {
                    if (response.status == 422) {
                        var errors = response.responseJSON.errors;
                        $.each(errors, function (key, value) {
                            $("#" + key + "_error").html(value);
                        });
                    }
                },
            });
        });


        // Backward Event Handler
            btnback3.addEventListener('click', function(){
            step3.classList.remove('active');
            step2.classList.add('active');
            sellProcedure_toggler();
        })
            // Step 4
            $(document).on('click', '#step-four', function(){
            // getting value from the inputs
            // if (revenueInputValue === "" || sessionInputValue || profitInputValue || inventoryInputValue || otherDeatilInputValue) {
                // upon recieving empty input
                // document.querySelector('.ck-editor').style.border = '1px solid red';

        // } else { //Upon Successfully get values from the input
                var formData = $("#stepfour_form").serialize();
                $.ajax({
                    type: "POST",
                    url: "{{route('stores.step_four') }}",
                    data: formData,
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                        Accept: "application/json",
                    },
                    success: function (response) {
                        console.log(response);
                        if (response.success) {
                            step4.classList.remove('active');
                            step5.classList.add('active');
                            sellProcedure_toggler();
                        }
                    },
                    error: function (response) {
                        if (response.status == 422) {
                            var errors = response.responseJSON.errors;
                            $.each(errors, function (key, value) {
                                $("#" + key + "_error").html(value);
                            });
                        }
                    },
                });
        // }
        // else{
        //     step4.classList.remove('active');
        //     step5.classList.add('active');
        // }
        });
            btnback4.addEventListener('click', function(){
            step4.classList.remove('active');
            step3.classList.add('active');
            sellProcedure_toggler();
        })

            // step 5
            $(document).on('click', '#step-five', function(){
                var formData = $("#stepfive_form").serialize();
                $.ajax({
                type: "POST",
                url: "{{route('stores.step_five') }}",
                data: formData,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    Accept: "application/json",
                },
                success: function (response) {
                    console.log(response);
                    if (response.success) {
                        step5.classList.remove('active');
                        step6.classList.add('active');
                        sellProcedure_toggler();
                    }
                },
                error: function (response) {
                    if (response.status == 422) {
                        var errors = response.responseJSON.errors;
                        $.each(errors, function (key, value) {
                            $("#" + key + "_error").html(value);
                        });
                    }
                },
            });

        })

            btnback5.addEventListener('click', function(){
                step5.classList.remove('active');
                step4.classList.add('active');
                sellProcedure_toggler();
            })
            // step 6
            $(document).on('click', '#step-six', function(){
                var formData = $("#stepsix_form").serialize();
                $.ajax({
                    type: "POST",
                    url: "{{route('stores.step_six') }}",
                    data: formData,
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                        Accept: "application/json",
                    },
                    success: function (response) {
                        console.log(response);
                        if (response.success) {
                            window.location.href = "{{route('dashboard')}}";
                            step5.classList.remove('active');
                            step6.classList.add('active');
                            sellProcedure_toggler();
                        }
                    },
                    error: function (response) {
                        if (response.status == 422) {
                            var errors = response.responseJSON.errors;
                            $.each(errors, function (key, value) {
                                $("#" + key + "_error").html(value);
                            });
                        }
                    },
                });

            })

            btnback6.addEventListener('click', function(){
                step6.classList.remove('active');
                step5.classList.add('active');
                sellProcedure_toggler();
            })


            function sellProcedure_toggler(){
            if($('.tab-1').hasClass('active')){
                $('.sellBusiness_procdure').show();
            }
            else{
                $('.sellBusiness_procdure').hide();
            }
        }
</script>
@endsection
