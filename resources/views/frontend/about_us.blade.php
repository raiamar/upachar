@extends('frontend.layouts.app')

@section('content')

<!-- About Us -->
<section id="about-us-wrapper" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6  mb-2">
                <div class="about-us-image">
                    <img src="frontend/assets/images/banner/1.png" class="img-fluid">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6  mb-2">
                <div class="about-us-image-discription d-flex h-100 justify-content-center align-items-start flex-column py-3">
                    <h2>Upachar Pharmacy</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora commodi corporis omnis aliquid minima sapiente exercitationem nemo ad amet, quae voluptatem fugit eaque quo. Eaque aperiam at blanditiis! Doloribus, sunt dolor
                        sit amet consectetur adipisicing elit. Tempora commodi corporis omnis aliquid.</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 order-xl-1 order-lg-1 order-md-1 order-2  mb-2">
                <div class="about-us-image-discription d-flex h-100 justify-content-center align-items-start flex-column py-3">
                    <h2>Our Mission</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora commodi corporis omnis aliquid minima sapiente exercitationem nemo ad amet, quae voluptatem fugit eaque quo. Eaque aperiam at blanditiis! Doloribus.</p>
                </div>

            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 order-xl-2 order-lg-2 order-md-1 order-1  mb-2">
                <div class="about-us-image">
                    <img src="frontend/assets/images/product-images/1.jpg" class="img-fluid">
                </div>
            </div>

        </div>

    </div>
</section>
<!-- About Us Ends -->
<!-- Testimonial  -->
<section id="testimonial-wrapper" class="position-relative py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading d-flex justify-content-between align-items-center flex-wrap">
                    <div class="head">
                        <h2 class="font-weight-bold text-white">Testimonial</h2>
                        <p class="">WHAT WE HAVE TO SAY !</p>
                    </div>
                    <!-- <div class="navigator">
                        <a href="">See all</a>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-8 col-12 mx-auto py-4">
                <div class="slick-slider">
                    <div class="slick-item position-relative">
                        <div class="testimonial-content-wrap text-center active m-auto pb-2">
                            <div class="testimonial-image-content d-block d-lg-flex justify-content-center">
                                <div class="image">
                                    <img src="https://montechbd.com/shopist/demo/public/uploads/1616786115-h-100-1.png" class="m-auto img-fluid" alt="testimonial-image">
                                </div>
                                <div class="testimonial-content d-flex flex-column text-left justify-content-center align-items-start ml-3">
                                    <h5 class="testimonial-title font-weight-bold">
                                        Jessya Inn
                                    </h5>
                                    <p class="dark-text m-0">Lorem ipsum dolor</p>
                                </div>
                            </div>
                            <p class="our-services-text mt-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto aliquid saepe quibusdam soluta dolore dolor quas voluptatibus. Recusandae tempora aspernatur, dolor quas voluptatibus. Recusandae, consequatur neque.
                            </p>
                        </div>
                    </div>
                    <div class="slick-item position-relative">
                        <div class="testimonial-content-wrap text-center active m-auto pb-2">
                            <div class="testimonial-image-content d-block d-lg-flex justify-content-center">
                                <div class="image">
                                    <img src="https://montechbd.com/shopist/demo/public/uploads/1616786115-h-100-1.png" class="m-auto img-fluid" alt="testimonial-image">
                                </div>
                                <div class="testimonial-content d-flex flex-column text-left justify-content-center align-items-start ml-3">
                                    <h5 class="testimonial-title font-weight-bold">
                                        Jessya Inn
                                    </h5>
                                    <p class="dark-text m-0">Lorem ipsum dolor</p>
                                </div>
                            </div>
                            <p class="our-services-text mt-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto aliquid saepe quibusdam soluta dolore dolor quas voluptatibus. Recusandae tempora aspernatur, dolor quas voluptatibus. Recusandae, consequatur neque.
                            </p>
                        </div>
                    </div>
                    <div class="slick-item position-relative">
                        <div class="testimonial-content-wrap text-center active m-auto pb-2">
                            <div class="testimonial-image-content d-block d-lg-flex justify-content-center">
                                <div class="image">
                                    <img src="https://montechbd.com/shopist/demo/public/uploads/1616786115-h-100-1.png" class="m-auto img-fluid" alt="testimonial-image">
                                </div>
                                <div class="testimonial-content d-flex flex-column text-left justify-content-center align-items-start ml-3">
                                    <h5 class="testimonial-title font-weight-bold">
                                        Jessya Inn
                                    </h5>
                                    <p class="dark-text m-0">Lorem ipsum dolor</p>
                                </div>
                            </div>
                            <p class="our-services-text mt-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto aliquid saepe quibusdam soluta dolore dolor quas voluptatibus. Recusandae tempora aspernatur, dolor quas voluptatibus. Recusandae, consequatur neque.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Ends -->
@endsection