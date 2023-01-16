@extends('layouts.frontEnd.master')
    @section('content')
    @include('layouts.frontEnd.header')
    <div class="container sellSection--container">
      <div>
        <div class="sellSection-header text-center">
          <h1 class="sellSection-header__title">Sell your business</h1>
          {{-- <h2 class="sellSection-header__subtitle">
            List your store for sale on the fastest <br />growing marketplace
            for entrepreneurs
          </h2> --}}
        </div>



        <div class="tab tab-1 active">
          <!-- tab 1 -->
          <div class="sellBusinessForm">

            <form class="" id="form" method="POST" action="{{route('stores.store')}}" style="width: 80%; margin: auto;">
             @csrf
            {{-- <label> Tags</label>
             <select class="js-example-basic-multiple form-control"  name="tagnames[]" multiple="multiple">
              </select>--}}

              <input name="store_address" value="{{old('store_address')}}" href="#" placeholder="Store address" class="marketing-input" type="url" />
            <a href="#"
                class="marketing-button btn-forward" id="step-one"
                style="width: 400px"
              >Add my Shopify store
            </a>
          </div>
        </div>

          <div class="tab tab-2">
          <!-- tab 2 -->
          <h2 class="tab-title text-center">Create Business Story</h2>
          <div class="form">
            <div class="form-centered">
              <div class="row createStory">
                <textarea name="business_story" class="tinymce-editor"></textarea>
              </div>
              <div class="form-footer">
                <a
                  href="#"
                  style="text-align: center; margin-top: 25px; color: white"
                  class="marketing-button btn-back"
                  >Back</a
                >
                <a
                  href="#"
                  style="
                    text-align: center;
                    margin-top: 25px;
                    margin-left: 20px;
                  "
                  id="step-two"
                  class="marketing-button btn-forward"
                  data-disable-with="Add my Shopify store"
                  >Next</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="tab tab-3">
          <!-- tab 3 -->
          <h2 class="tab-title text-center">Description</h2>
          <div class="form">
            <div class="form-centered">
              <div class="row createStory">
                <textarea name="description" class="tinymce-editor" name="body"></textarea>
              </div>
              <div class="form-footer">
                <a
                  href="#"
                  style="text-align: center; margin-top: 25px; color: white"
                  class="marketing-button btn-back"
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
            </div>
          </div>
        </div>
        <div class="tab tab-4">
          <!-- tab4 Body-->
          <h2 class="tab-title text-center">Traffic and Performance</h2>
          <div class="tf--form" action="" accept-charset="UTF-8" method="">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >Avg. revenue /month</label
                >
                <input
                  name="revenue"
                  type="text"
                  class="form-control marketing-input"
                  id="exampleFormControlInput1"
                />
              </div>
              <div class="col-md-6 mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"
                  >Avg. sessions /month</label
                >
                <input
                  name="session"
                  type="text"
                  class="form-control marketing-input"
                  id="exampleFormControlTextarea1"
                ></input>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >Avg. profit /month</label
                >
                <input
                name="profit"
                  type="text"
                  class="form-control marketing-input"
                  id="exampleFormControlInput1"
                />
              </div>
              <div class="col-md-6 mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"
                  >Inventory value
                </label>
                <input
                name="inventory_value"
                  type="text"
                  class="form-control marketing-input"
                  id="exampleFormControlTextarea1"
                />
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Other details about profit:
                  </label>
                  <textarea name="other_detail" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              </div>
            </div>
            <div class=" tf-footer">
                <a

                  href="#"
                  style="text-align: center; margin-top: 25px; color: white"
                  class="marketing-button btn-back"
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
          </div>
        </div>
        <div class="tab tab-5">
          <!-- tab4 Body-->
          <h2 class="tab-title text-center">Expences</h2>
          <div class="tf--form" action="" accept-charset="UTF-8" method="">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >Shopify plan</label
                >
                <input
                name="shopify_plan"
                  type="text"
                  class="form-control marketing-input"
                  id="exampleFormControlInput1"
                />
              </div>
              <div class="col-md-6 mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"
                  >Inventory warehouse</label
                >
                <input
                name="inventory_warehouse"
                  type="text"
                  class="form-control marketing-input"
                  id="exampleFormControlTextarea1"
                ></input>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Domain
                  </label>
                  <input name="domain" type="text" class="form-control marketing-input" id="exampleFormControlTextarea1"></input>
                </div>
              </div>
            </div>
            <div class="tf-footer">
                <a
                  href="#"
                  style="text-align: center; margin-top: 25px; color: white"
                  class="marketing-button btn-back"
                  >Back</a
                >
                <a
                  href="#"
                  style="
                    text-align: center;
                    margin-top: 25px;
                    margin-left: 20px;
                  "
                  class="marketing-button btn-forward"
                  data-disable-with="Add my Shopify store"
                  id="step-five"
                >Next</a
                >
            </div>
          </div>
        </div>
        <div class="tab tab-6">
          <!-- tab6 Body-->
          <h2 class="tab-title text-center">sale includes</h2>
          <div class="tf--form" accept-charset="UTF-8" method="">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <input name="sales_include_1" type="text" class="form-control marketing-input" id="exampleFormControlTextarea1"></input>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <input name="sales_include_2" type="text" class="form-control marketing-input" id="exampleFormControlTextarea1"></input>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <input
                name="sales_include_3"
                  type="text"
                  class="form-control marketing-input"
                  id="exampleFormControlInput1"
                />
              </div>
              <div class="col-md-6 mb-3">

                <input
                name="sales_include_4"
                  type="text"
                  class="form-control marketing-input"
                  id="exampleFormControlTextarea1"
                />
              </div>
            </div>
            <div class="row">
              <div class="col">
                <select name="open_select_menu" class="form-select marketing-input" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>

            <div class="tf-footer">
                <a
                  href="#"
                  style="text-align: center; margin-top: 25px; color: white"
                  class="marketing-button btn-back"
                  >Back</a
                >
                <input type="submit" value="submit"
                  href="#"
                  style="
                    text-align: center;
                    margin-top: 25px;
                    margin-left: 20px;
                  "
                       id="step-five"
                   class="marketing-button btn-forward"
                  data-disable-with="Add my Shopify store"
                  />

            </div>
          </div>
        </div>
      </div>
    </form>
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

        for (let btn of btnsForward) {
            btn.addEventListener("click", function () {
                if (currentTab >= 1 && currentTab < 6) {

                    document
                        .querySelector(`.tab-${currentTab}`)
                        .classList.remove("active");
                    currentTab++;
                    document
                        .querySelector(`.tab-${currentTab}`)
                        .classList.add("active");
                    console.log(currentTab);
                    if (currentTab === 1) {
                        SellBusi.classList.remove("hidden");
                    } else {
                        SellBusi.classList.add("hidden");
                    }
                }
            });
        }

        $('#step-one').on('click', function () {
            var formData = $("#form").serialize();
            $.ajax({
                type: "POST",
                url: "{{ route('stores.step_one') }}",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Accept': 'application/json'
                },
                success: function(response) {
                    console.log(response)
                },
                error: function(response) {
                    if(response.status == 422){
                        var errors = response.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            $("#"+key+"_error").html(value);
                        });
                    }
                }
            });

        });
        $('#step-two').on('click', function () {
            var formData = $("#form").serialize();
            console.log(formData)
            $.ajax({
                type: "POST",
                url: "{{ route('stores.step_two') }}",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Accept': 'application/json'
                },
                success: function(response) {
                    console.log(response)
                },
                error: function(response) {
                    if(response.status == 422){
                        var errors = response.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            $("#"+key+"_error").html(value);
                        });
                    }
                }
            });

        });
        $('#step-three').on('click', function () {
            var formData = $("#form").serialize();
            $.ajax({
                type: "POST",
                url: "{{ route('stores.step_three') }}",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Accept': 'application/json'
                },
                success: function(response) {
                    console.log(response)
                },
                error: function(response) {
                    if(response.status == 422){
                        var errors = response.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            $("#"+key+"_error").html(value);
                        });
                    }
                }
            });

        });
        $('#step-four').on('click', function () {
            var formData = $("#form").serialize();
            $.ajax({
                type: "POST",
                url: "{{ route('stores.step_four') }}",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Accept': 'application/json'
                },
                success: function(response) {
                    console.log(response)
                },
                error: function(response) {
                    if(response.status == 422){
                        var errors = response.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            $("#"+key+"_error").html(value);
                        });
                    }
                }
            });

        });
</script>


   @endsection
