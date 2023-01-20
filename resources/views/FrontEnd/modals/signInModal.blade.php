<style>
    *,
    *::after,
    *::before {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /*
    body {
      font-size: 62.5%;
    } */
    .modal--SignIn-header {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        padding: 40px;
    }

    .modal-header {
        background: #603276;
        color: white;
    }

    .modal-title {
        margin-top: 25px;
        margin-bottom: 17px;
        font-size: 3.5rem;
        font-weight: 500;
    }

    .modal-titleDesc {
        font-size: 1.1rem;
        line-height: 1.5;
        font-weight: 300;
    }

    .modal-dialog {
        max-width: 380px;
    }

    /* Modal Body style  */
    ._1vr1v.continueLinker_stru {
        background: rgb(255, 255, 255);
        color: rgb(33, 43, 54);
        box-shadow: rgb(0 0 0 / 15%) 0px 2px 10px;
        cursor: pointer;
    }

    .continueLinker_stru:hover {
        background: rgb(255, 255, 255);
        color: rgb(33, 43, 54);
        box-shadow: rgb(0 0 0 / 15%) 0px 2px 10px !important;
    }

    .continueLinker_stru {
        display: flex;
        align-items: center;
        height: 48px;
        width: 100%;
        color: rgb(255, 255, 255);
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 16px;
        border-radius: 2px;
        cursor: default;
    }

    ._33wM- {
        display: -ms-flexbox;
        display: flex;
    }

    ._2ajZR {
        height: 48px;
        width: 48px;
        border-right: 1px solid #b4c7da;
    }

    ._1vr1v .text-center {
        width: 100%;
        text-align: center;
    }

    ._1vr1v._1HG7p ._2ajZR {
        background: #356ee6;
        border-right: 1px solid rgba(33, 43, 54, 0.1);
    }

    .btn-close {
        font-size: 1.1rem;
    }

    .footerText {
        font-size: 0.8rem;
    }

    /* .signInModal--center{
        display: flex;
        flex-direction: column;
        justify-content: center
    } */
</style>

<!-- Modal -->
<div
    class="modal signInModal--center show"
    id="exampleModal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal--SignIn-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign in</h5>
                    <p class="modal-titleDesc">
                        You need an account to send offers and receive messages.
                    </p>
                </div>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                    style="align-self: baseline; justify-self: center"
                ></button>
            </div>
            <div class="modal-body">
                <div
                    style="flex-direction: column; flex-wrap: nowrap; width: 90%; margin: auto;"
                    class="_3OvEm d-flex"
                >
                    <a
                        class="_1vr1v continueLinker_stru"
                        href="#"
                    >
                        <div
                            style="
                flex-wrap: nowrap;
                align-items: center;
                justify-content: center;
              "
                            class="_2ajZR d-flex"
                        >
                            <img
                                alt=""
                                height="22"
                                width="22"
                                src="//web.archive.org/web/20220517102251im_/https://cdn.shopifycloud.com/exchange/bundles/21006611d0d8d131ba27fdb7bd59cbd7.svg"
                            />
                        </div>
                        <span class="text-center _3c7Mo _1-Yji spVWc _2zw_s"
                        >Continue with Shopify</span
                        ></a
                    ><a
                        class="_1vr1v _3X2l4 continueLinker_stru"
                        style="background-color: dodgerblue;"
                        href="{{route('auth.google')}}"
                    >
                        <div
                            style="
                flex-wrap: nowrap;
                align-items: center;
                justify-content: center;
              "
                            class="_2ajZR d-flex"
                        >
                            <!-- <img
                alt=""
                height="22"
                width="22"
                src="{{asset('FrontEnd/icons/googleIcon.svg')}}"
              /> -->
                            <i class="fa-brands fa-google" style="fill: white !important; color: white"></i>
                        </div>
                        <span class="text-center _3c7Mo _1-Yji spVWc _2zw_s"
                              style="color: white;">Continue with Google</span
                        ></a
                    >
{{--                    <a--}}
{{--                        class="_1vr1v _3HL25 continueLinker_stru"--}}
{{--                        style="background: #3b5998;"--}}
{{--                        href="{{route('auth.facebook')}}"--}}
{{--                    >--}}
{{--                        <div--}}
{{--                            style="--}}
{{--                flex-wrap: nowrap;--}}
{{--                align-items: center;--}}
{{--                justify-content: center;--}}
{{--                background: #304a86;--}}

{{--              "--}}
{{--                            class="_2ajZR d-flex"--}}
{{--                        >--}}
{{--                            <!-- <img--}}
{{--                    alt=""--}}
{{--                    height="22"--}}
{{--                    width="22"--}}
{{--                    src="{{asset('FrontEnd/icons/facebookIcon.svg')}}"--}}
{{--                  /> -->--}}
{{--                            <i class="fa-brands fa-square-facebook" style="color: white; font-size:1.3rem"></i>--}}
{{--                        </div>--}}
{{--                        <span class="text-center" style="color: white">Continue with Facebook</span></a--}}
{{--                    ><span class="footer d-flex">--}}
                        <input
                            type="checkbox"
                            class="marketing-checkbox"
                            id="subscribe"
                            name="subscribe"
                            style="margin: 0 16px"
                        /><label class="marketing-checkbox-label" for="subscribe"
                        ><span class="footerText"
                            >Send me top listings and other updates. Unsubscribe
                anytime.</span
                            ></label
                        ></span
                    >
                </div>
            </div>
        </div>
    </div>
</div>

