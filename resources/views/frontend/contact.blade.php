@extends('frontend.layouts.app')

@section('content')
<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <img src="frontend/assets/images/banner/1.png" alt="breadcrumb-image" class="img-fluid">
    </div>
    <div class="overlay position-absolute">
        <a class="title p-4" href="/">{{__('Home')}} >{{__('Contact Us')}}</a>
    </div>
</section>
<!-- Breadcrumbs Ends -->
@php
    $generalsetting = \App\GeneralSetting::first();
@endphp
<!-- Checkout -->
<section id="contact-us-wrapper" class="py-5">
    <div class="container">
        <div class="row position-relative">
            <div class="col-xl-12 col-lg-12 col-md-8 col-12 footer-info">
                <ul class="footer-nav-list py-5 px-xl-5 px-lg-5 px-md-4 px-3">
                    <div class="heading">
                        <div class="head">
                            <a href="">
                                <h2>Upachar Pharmacy</h2>
                            </a>
                        </div>
                    </div>
                    <li>
                        <a href=" mailto:webmaster@example.com"><span class="mr-2"><i class="fa fa-envelope-square"
                                    aria-hidden="true"></i></span>{{$generalsetting->email}}</a>
                    </li>
                    <li>
                        <a href="tel:+4733378901"><span class="mr-2"><i class="fa fa-phone" aria-hidden="true"></i></span>{{$generalsetting->phone}}</a>
                    </li>
                    <li>
                        <a><span class="mr-2"><i class="fa fa-map" aria-hidden="true"></i></span>{{$generalsetting->address}}</a>
                    </li>
                </ul>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-6 col-12 contact-us-form ml-auto">
                <form class="px-xl-5 px-lg-5 px-md-4 px-3 pt-5 pb-3">
                    <div class="form-group">
                        <input type="text" name="txtName" class="form-control" placeholder="First Name" value="">
                    </div>
                    <div class="form-group">
                        <input type="email" name="" class="form-control" placeholder="Your Email" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number" value="">
                    </div>
                    <div class="form-group">
                        <textarea name="txtMsg" class="form-control" placeholder="Your Message" style="width: 100%; height: 100px"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="effect">
                  Submit
                  </button>
                        <!-- <a href="#" class="btn mt-4">OUR SERVICES</a> -->
                    </div>
                </form>
            </div>
            <div class="col-12 google-map my-3">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14130.946795029693!2d85.34463115!3d27.694531700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1640601822243!5m2!1sen!2snp" width="100%" height="300" style="border:0;"
                        allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Checkout Ends -->

@endsection