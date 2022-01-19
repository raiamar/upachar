@extends('frontend.layouts.app')
@section('content')

<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <img src="frontend/assets/images/banner/1.png" alt="breadcrumb-image" class="img-fluid">
    </div>
    <div class="overlay position-absolute">
        <div class="title p-4">Checkout</div>
    </div>
</section>
<!-- Breadcrumbs Ends -->

<!-- Checkout -->
<section id="checkout-wrapper" class="py-3">
    <div class="container">
        <div class="row">
            <div id="accordion" class="w-100">
                <!-- First Collapse -->
                <div class="card">
                    <div class="card-header p-0 bg-light" id="headingOne">
                        <h5 class="mb-0">
                            <div class="w-100 p-3" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <span class="mr-2"><i class="fa fa-ravelry" aria-hidden="true"></i></span> Order Summary
                            </div>
                        </h5>
                    </div>
                </div>
                <!-- First Collapse Ends -->

                <!-- Second Collapse  -->
                <div class="card">
                    <div class="card-header p-0 bg-light" id="headingTwo">
                        <h5 class="mb-0">
                            <div class="collapsed p-3" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="mr-2"><i class="fa fa-ravelry" aria-hidden="true"></i></span> Shipping Information
                            </div>
                        </h5>
                    </div>
                </div>
                <!-- Second Collapse End -->

                <!-- Third Collapse  -->
                <div class="card">
                    <div class="card-header p-0 bg-light" id="headingThree">
                        <h5 class="mb-0">
                            <div class="collapsed p-3" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <span class="mr-2"><i class="fa fa-ravelry" aria-hidden="true"></i></span> Payment Option
                            </div>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="payment_option" value="" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadio1">Cash On Delivery</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="payment_option" value="" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2" data-toggle="collapse" href="#cus-collapse1" role="button" aria-expanded="false" aria-controls="cus-collapse1" >E-Sewa</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Third Collapse End -->
            </div>
            <button class="effect mx-auto px-4" type="submit">Checkout</button> </div>
    </div>
</form>
</section>
<!-- Checkout Ends -->

@endsection
