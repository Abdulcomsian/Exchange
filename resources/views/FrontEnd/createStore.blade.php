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
            <form class="" id="stepOne_form" action="" style="width: 80%; margin: auto;">
              <input
              href="#"
                placeholder="Store address"
                class="marketing-input"
                id="storeAddress"
                type="text"
                name="storeAddress"
              />
              <a
              href="#"
              id="step-one"
                class="marketing-button btn-forward"
                style="width: 400px"
              >Add my Shopify store</a>
            </form>
            <div id="step-one-alert" class="alert alert-danger hidden" role="alert">
              This is a danger alert—check it out!
            </div>
          </div>
        </div>
        <div class="tab tab-2">
          <!-- tab 2 -->
          <h2 class="tab-title text-center">Create Business Story</h2>
          <div class="form">
            <form class="form-centered">
              <div class="row createStory">
                <div class="col-12" id="editor"></div>
              </div>
              <div class="form-footer">
                <a
                  href="#"
                  style="text-align: center; margin-top: 25px; color: white"
                  class="marketing-button btn-back-tab2"
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
            </form>
          </div>
        </div>
        <div class="tab tab-3">
          <!-- tab 3 -->
          <h2 class="tab-title text-center">Description</h2>
          <div class="form">
            <form class="form-centered">
              <div class="row createStory">
                <div class="col-md-12" id="editor1"></div>
              </div>
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
          <form class="tf--form" action="" accept-charset="UTF-8" method="">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >Avg. revenue /month</label
                >
                <input
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
                  type="text"
                  class="form-control marketing-input"
                  id="exampleFormControlTextarea1"
                ></input>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Other details about profit:
                  </label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
          <h2 class="tab-title text-center">Expences</h2>
          <form class="tf--form" action="" accept-charset="UTF-8" method="">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >Shopify plan</label
                >
                <input
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
                  <input type="text" class="form-control marketing-input" id="exampleFormControlTextarea1"></input>
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
          <form class="tf--form" action="" accept-charset="UTF-8" method="">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <input type="text" class="form-control marketing-input" id="exampleFormControlTextarea1"></input>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <input type="text" class="form-control marketing-input" id="exampleFormControlTextarea1"></input>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <input
                  type="text"
                  class="form-control marketing-input"
                  id="exampleFormControlInput1"
                />
              </div>
              <div class="col-md-6 mb-3">
                
                <input
                  type="text"
                  class="form-control marketing-input"
                  id="exampleFormControlTextarea1"
                ></input>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <select class="form-select marketing-input" aria-label="Default select example">
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
                  id="submitForm"
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
        let storeAddress = $("#storeAddress").val();
        if (storeAddress == "") {
            document.querySelector('#storeAddress').style.border = '1px solid red';
        } else {
          step1.classList.remove('active');
          step2.classList.add('active');
            // var formData = $("#stepOne_form").serialize();
            // $.ajax({
            //     type: "POST",
            //     url: "",
            //     data: formData,
            //     headers: {
            //         "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            //         Accept: "application/json",
            //     },
            //     success: function (response) {
            //         console.log(response);
            //         if (response == "success") {
            //           step1.classList.remove('active');
            //           step2.classList.add('active');
            //         }
            //     },
            //     error: function (response) {
            //         if (response.status == 422) {
            //             var errors = response.responseJSON.errors;
            //             $.each(errors, function (key, value) {
            //                 $("#" + key + "_error").html(value);
            //             });
            //         }
            //     },
            // });
        }
      });
        // Step 2 

        // Forward Event handler 
        $(document).on('click', '#step-two', function(){
          // getting value from the inputs 
          if (true) { 
            // upon recieving empty input

            document.querySelector('.ck-editor').style.border = '1px solid red';
          } else { //Upon Successfully get values from the input
            step2.classList.remove('active');
            step3.classList.add('active');
          });
          }
        
        // backward Envent Handler 

        btnback2.addEventListener('click', function(){
          step2.classList.remove('active');
          step1.classList.add('active');
        })
          // step 3
        $(document).on('click', '#step-three', function(){
            // getting value from the inputs 
        if (true) { // upon recieving empty input
            // document.querySelector('#storeAddress').style.border = '1px solid red';
        } else { //Upon Successfully get values from the input
          step3.classList.remove('active');
          step4.classList.add('active');
        }
      });

        btnback3.addEventListener('click', function(){
            step3.classList.remove('active');
            step2.classList.add('active');
          })
        // Step 4 
        $(document).on('click', '#step-four', function(){
          // getting value from the inputs 
        if (true) { // upon recieving empty input
            // document.querySelector('#storeAddress').style.border = '1px solid red';
        } else { //Upon Successfully get values from the input
          step4.classList.remove('active');
          step5.classList.add('active');
        }
      });

        btnback4.addEventListener('click', function(){
              step4.classList.remove('active');
              step3.classList.add('active');
            })
        
        // step 5 
        $(document).on('click', '#step-five', function(){
          // getting value from the inputs 
        if (true) {  // upon recieving empty input
            // document.querySelector('#storeAddress').style.border = '1px solid red';
        } else { //Upon Successfully get values from the input
          step5.classList.remove('active');
          step6.classList.add('active');
        }
      });

      btnback5.addEventListener('click', function(){
            step5.classList.remove('active');
            step4.classList.add('active');
          })
        // step 6 
        $(document).on('click', '#submitForm', function(){
          // getting value from the inputs 
        if (true) {  // upon recieving empty input
            // document.querySelector('#storeAddress').style.border = '1px solid red';
        } else {
           //Upon Successfully get values from the input
          // Submitting the form 
        }
      });

    </script>

    @endsection