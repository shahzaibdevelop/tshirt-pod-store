@extends('layout.app')
@section('content')
 <!-- Contact Us Start -->
 <section class="section bg-white vh-100 d-flex align-items-center  mt-5" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-5">
                    <h3 class="title mb-3">Contact Us</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7 align-self-center">
                <div class="custom-form mb-5 mb-lg-0">
                    <form method="post" name="myForm" onsubmit="return validateForm()">
                        <p id="error-msg"></p>
                        <div id="simple-msg"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name*</label>
                                    <input name="name" id="name" type="text" class="form-control"
                                        placeholder="Your name...">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email Address*</label>
                                    <input name="email" id="email" type="email" class="form-control"
                                        placeholder="Your email...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="comments">Message*</label>
                                    <textarea name="comments" id="comments" rows="4" class="form-control"
                                        placeholder="Your message..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" id="submit" name="send" class="btn btn-primary">Send Message
                                    <i class="icon-size-15 ms-2 icon" data-feather="send"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 align-self-center">
                <div class="contact-detail text-muted ms-lg-5">
                    <p class=""><i class="icon-xs icon me-1" data-feather="mail"></i> :
                        <span>support@website.com</span>
                    </p>
                    <p class=""><i class="icon-xs icon me-1" data-feather="link"></i> : <span>www.website.com</span>
                    </p>
                    <p class=""><i class="icon-xs icon me-1" data-feather="phone-call"></i> : <span>(+001) 123 456
                            7890</span></p>
                    <p class=""><i class="icon-xs icon me-1" data-feather="clock"></i> : <span>9:00 AM - 6:00
                            PM</span></p>
                    <p class=""><i class="icon-xs icon me-1" data-feather="map-pin"></i> : <span>1644 Deer Ridge
                            Drive Rochelle Park, NJ 07662</span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us End -->
@include('layout.footer')

@endsection