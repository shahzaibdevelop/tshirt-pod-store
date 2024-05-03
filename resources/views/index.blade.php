@extends('layout.app')
@section('content')
 <!-- Hero Start -->
 <section class="hero-3-bg" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-4 col-lg-5">
                <h1 class="hero-3-title text-shadow mb-0">POD Tshirts Store</h1>
                <p class="text-muted mt-4 mb-0">Customize your own Tshirts by adding your custom design and texts on your Tshirts</p>
                <div class="mt-4 mb-5 pb-5">
                    <a href="#" class="btn btn-primary text-uppercase">Design Now</a>
                </div>
                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" id="watchvideomodal" data-keyboard="false" tabindex="-1"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                        <div class="modal-content home-modal">
                            <div class="modal-header border-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <video id="VisaChipCardVideo" class="video-box" controls>
                                <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                <!--Browser does not support <video> tag -->
                            </video>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-7 offset-xl-1 col-lg-7 col-md-10">
                <img src="{{asset('assets/images/hero-3-img.png')}}" alt="" class="img-fluid d-block mx-auto">
            </div>
        </div>
    </div>
</section>
<!-- Hero End -->

<!-- Why Choose Us Start -->
<section class="section" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 align-self-center">
                <div class="mb-4 mb-lg-0">
                    <div class="p-2 bg-soft-primary d-inline-block rounded mb-4">
                        <div class="icon-xxl uim-icon-primary"><i class="uim uim-cube"></i></div>
                    </div>
                    <h3 class="">How to use ?</h3>
                    <p class="text-muted mb-4">Design & buy your customized Tshirt by following these simple steps</p>
                    <a href="#" class="btn btn-outline-primary">Buy Now</a>
                </div>
            </div>
            <div class="col-lg-8 align-self-center">
                <div class="row">
                    <div class="col-md-6">
                        <div class="wc-box rounded text-center wc-box-primary p-4 mt-md-5">
                            <div class="wc-box-icon">
                                <i class="mdi mdi-tshirt-crew"></i>
                            </div>
                            <h5 class="fw-bold mb-2 wc-title mt-4">Pick your Merch</h5>
                            <p class="text-muted mb-0 font-size-15 wc-subtitle">Select between half sleeve tshirts, full sleeve tshirts and hoodies</p>
                        </div>
                        <div class="wc-box rounded text-center wc-box-primary p-4">
                            <div class="wc-box-icon d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M17 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2M1 2v2h2l3.6 7.59l-1.36 2.45c-.15.28-.24.61-.24.96a2 2 0 0 0 2 2h12v-2H7.42a.25.25 0 0 1-.25-.25q0-.075.03-.12L8.1 13h7.45c.75 0 1.41-.42 1.75-1.03l3.58-6.47c.07-.16.12-.33.12-.5a1 1 0 0 0-1-1H5.21l-.94-2M7 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2"/></svg>
                            </div>
                            <h5 class="fw-bold mb-2 wc-title mt-4">Order</h5>
                            <p class="text-muted mb-0 font-size-15 wc-subtitle">Order your custom merch </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="wc-box rounded text-center wc-box-primary p-4">
                            <div class="wc-box-icon d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M3 17.25V21h3.75L17.81 9.93l-3.75-3.75zm19.61 1.11l-4.25 4.25l-5.2-5.2l1.77-1.77l1 1l2.47-2.48l1.42 1.42L18.36 17l1.06 1l1.42-1.4zm-16-7.53L1.39 5.64l4.25-4.25L7.4 3.16L4.93 5.64L6 6.7l2.46-2.48l1.42 1.42l-1.42 1.41l1 1zM20.71 7c.39-.39.39-1 0-1.41l-2.34-2.3c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75z"/></svg>
                            </div>
                            <h5 class="fw-bold mb-2 wc-title mt-4">Design your shirt</h5>
                            <p class="text-muted mb-0 font-size-15 wc-subtitle">Add your custom design and text to customize your merch</p>
                        </div>
                        <div class="wc-box rounded text-center wc-box-primary p-4">
                            <div class="wc-box-icon">
                                <i class="mdi mdi-truck-delivery-outline"></i>
                            </div>
                            <h5 class="fw-bold mb-2 wc-title mt-4">Delivered</h5>
                            <p class="text-muted mb-0 font-size-15 wc-subtitle">We will deliver your custom designed merch</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Us End -->


<section class="section feather-bg-img" style="background-image: url(images/features-bg-img-1.png)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 align-self-center">
                <p class="font-weight-medium text-uppercase mb-2"><i
                        class="mdi mdi-chart-bubble h2 text-primary me-1 align-middle"></i>Best POD platform</p>
                <h3 class="font-weight-semibold line-height-1_4 mb-4">We do the work you <b>stay creative</b> on
                    <b>your designs</b>.
                </h3>
                <p class="text-muted font-size-15 mb-4">Temporibus autem quibusdam et aut officiis debitis aut rerum
                    a necessitatibus saepe eveniet ut et voluptates repudiandae sint molestiae non recusandae
                    itaque.</p>
                <div class="mt-5">
                    <a href="#" class="btn btn-soft-primary">Buy Now</a>
                </div>
            </div>
            <div class="col-lg-6 align-self-center offset-lg-1">
                <div class="mt-4 mt-lg-0">
                    <img src="{{asset('assets/images/shop.svg')}}" alt="" class="img-fluid d-block mx-auto">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features End -->
@endsection