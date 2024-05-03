@extends('layout.app')
@section('content')
 <!-- Hero Start -->
 <section class="hero-3-bg" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-4 col-lg-5">
                <h1 class="hero-3-title text-shadow mb-0">Cool & Amazing Landing Page</h1>
                <p class="text-muted mt-4 mb-0">Itaque earum rerum tenetur sapiente delectus ut aut reiciendis
                    voluptatibus maiores alias consequatur repellat.</p>
                <div class="mt-4 mb-5 pb-5">
                    <a href="#" class="btn btn-primary text-uppercase">Buy Now</a>
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
                    <h3 class="">Why Choose Us ?</h3>
                    <p class="text-muted mb-4">Nam libero tempore cum soluta as nobis est eligendi optio cumque
                        nihile impedite quo minus id quod maxime.</p>
                    <a href="#" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
            <div class="col-lg-8 align-self-center">
                <div class="row">
                    <div class="col-md-6">
                        <div class="wc-box rounded text-center wc-box-primary p-4 mt-md-5">
                            <div class="wc-box-icon">
                                <i class="mdi mdi-collage"></i>
                            </div>
                            <h5 class="fw-bold mb-2 wc-title mt-4">Easy To Use</h5>
                            <p class="text-muted mb-0 font-size-15 wc-subtitle">Sed ut perspiciatis unde omnis iste
                                natus error sit voluptatem.</p>
                        </div>
                        <div class="wc-box rounded text-center wc-box-primary p-4">
                            <div class="wc-box-icon">
                                <i class="mdi mdi-trending-up"></i>
                            </div>
                            <h5 class="fw-bold mb-2 wc-title mt-4">Grow Your Revenue</h5>
                            <p class="text-muted mb-0 font-size-15 wc-subtitle">Sed ut perspiciatis unde omnis iste
                                natus error sit voluptatem.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="wc-box rounded text-center wc-box-primary p-4">
                            <div class="wc-box-icon">
                                <i class="mdi mdi-security"></i>
                            </div>
                            <h5 class="fw-bold mb-2 wc-title mt-4">Analytics Security</h5>
                            <p class="text-muted mb-0 font-size-15 wc-subtitle">Sed ut perspiciatis unde omnis iste
                                natus error sit voluptatem.</p>
                        </div>
                        <div class="wc-box rounded text-center wc-box-primary p-4">
                            <div class="wc-box-icon">
                                <i class="mdi mdi-database-lock"></i>
                            </div>
                            <h5 class="fw-bold mb-2 wc-title mt-4">Data Privacy</h5>
                            <p class="text-muted mb-0 font-size-15 wc-subtitle">Sed ut perspiciatis unde omnis iste
                                natus error sit voluptatem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Us End -->

<!-- Features Start -->
<section class="section bg-light feather-bg-img" style="background-image: url({{asset('assets/images/features-bg-img.png')}});"
    id="features">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-5">
                    <h3 class="title mb-3">Awesome Features</h3>
                    <p class="text-muted font-size-15">Et harum quidem rerum facilis est et expedita distinctio nam
                        libero tempore cum soluta nobis eligendi cumque.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="section feather-bg-img" style="background-image: url(images/features-bg-img-1.png)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 align-self-center">
                <p class="font-weight-medium text-uppercase mb-2"><i
                        class="mdi mdi-chart-bubble h2 text-primary me-1 align-middle"></i> Creative Features</p>
                <h3 class="font-weight-semibold line-height-1_4 mb-4">We do the work you <b>stay focused</b> on
                    <b>your customers</b>.
                </h3>
                <p class="text-muted font-size-15 mb-4">Temporibus autem quibusdam et aut officiis debitis aut rerum
                    a necessitatibus saepe eveniet ut et voluptates repudiandae sint molestiae non recusandae
                    itaque.</p>
                <p class="text-muted mb-2"><i class="icon-xs me-1" data-feather="server"></i> Donec pede justo
                    fringilla vel nec.</p>
                <p class="text-muted"><i class="icon-xs me-1" data-feather="rss"></i> Cras ultricies mi eu turpis
                    hendrerit fringilla.</p>
                <div class="mt-5">
                    <a href="#" class="btn btn-primary me-2">Read More</a>
                    <a href="#" class="btn btn-soft-primary">Buy Now</a>
                </div>
            </div>
            <div class="col-lg-6 align-self-center offset-lg-1">
                <div class="mt-4 mt-lg-0">
                    <img src="{{asset('assets/images/features-img-1.png')}}" alt="" class="img-fluid d-block mx-auto">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features End -->
@endsection