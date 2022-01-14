@extends('frontend.layouts.app')
@section('content')

<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <img src="frontend/assets/images/banner/1.png" alt="breadcrumb-image" class="img-fluid">
    </div>
    <div class="overlay position-absolute">
        <div class="title p-4">Page Title</div>
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
                            <div class="w-100 p-3" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span class="mr-2"><i class="fa fa-ravelry" aria-hidden="true"></i></span> Order Summary
                            </div>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <section id="cart-wrapper" class="">
                            
                                    <div class="row">
                                        <div class="col-12">
                                            <form class="form-default" data-toggle="validator" action="{{ route('checkout.store_shipping_infostore') }}" role="form" method="POST">
                                            @csrf
                                                @if(Auth::check())
                                            <div class="profile-side-detail-edit">
                                                <div class="dashboard-content d-flex align-items-center h-100">
                                                    <div class="shopping-cart">
                                                        <div class="shopping-cart-table">
                                                            <div class="table-responsive-lg">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="cart-description item">Image</th>
                                                                            <th class="cart-product-name item">Product Name</th>
                                                                            <th class="cart-qty item">Quantity</th>
                                                                            <th class="cart-total last-item">Total</th>
                                                                            <th class="cart-romove item">Remove</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <!-- /thead -->
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="cart-image">
                                                                                <a class="entry-thumbnail" href="product-product-detail.html">
                                                                                    <img src="frontend/assets/images/product-images/7.jpg" class="img-fluid">
                                                                                </a>
                                                                            </td>
                                                                            <td class="cart-product-name-info">
                                                                                <h4 class="cart-product-description"><a href="product-product-detail.html">Yoga Mat</a></h4>
                                                                                <div class="row">
                                                                                    <div class="col-4">
                                                                                        <div class="rating rateit-small"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- /.row -->
                                                                            </td>
                                                                            <td class="cart-product-quantity">
                                                                                <div class="quant-input">
                                                                                    <input type="number" value="1">
                                                                                </div>
                                                                            </td>
                                                                            <td class="cart-product-grand-total"><span class="cart-grand-total-price">$300.00</span>
                                                                            </td>
                                                                            <td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="cart-image">
                                                                                <a class="entry-thumbnail" href="product-detail.html">
                                                                                    <img src="frontend/assets/images/product-images/8.jpg" class="img-fluid">
                                                                                </a>
                                                                            </td>
                                                                            <td class="cart-product-name-info">
                                                                                <h4 class="cart-product-description"><a href="product-detail.html">Yoga Mat</a></h4>
                                                                                <div class="row">
                                                                                    <div class="col-4">
                                                                                        <div class="rating rateit-small"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- /.row -->
                                                                            </td>
                                                                            <td class="cart-product-quantity">
                                                                                <div class="quant-input">
                                                                                    <input type="number" value="1">
                                                                                </div>
                                                                            </td>
                                                                            <td class="cart-product-grand-total"><span class="cart-grand-total-price">$300.00</span>
                                                                            </td>
                                                                            <td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="cart-image">
                                                                                <a class="entry-thumbnail" href="product-detail.html">
                                                                                    <img src="frontend/assets/images/product-images/9.jpg" class="img-fluid">
                                                                                </a>
                                                                            </td>
                                                                            <td class="cart-product-name-info">
                                                                                <h4 class="cart-product-description"><a href="product-detail.html">Yoga Mat</a></h4>
                                                                                <div class="row">
                                                                                    <div class="col-4">
                                                                                        <div class="rating rateit-small"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- /.row -->
                                                                            </td>
                                                                            <td class="cart-product-quantity">
                                                                                <div class="quant-input">
                                                                                    <input type="number" value="1">
                                                                                </div>
                                                                            </td>
                                                                            <td class="cart-product-grand-total"><span class="cart-grand-total-price">$300.00</span>
                                                                            </td>
                                                                            <td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a>
                                                                            </td>

                                                                        </tr>
                                                                    </tbody>
                                                                    <!-- /tbody -->
                                                                </table>
                                                                <div class="d-flex justify-content-around align-items-center w-100 my-3 flex-wrap">
                                                                    <!-- <form class="coupon-field d-flex flex-wrap align-items-center justify-content-center">
                                                                        <input type="text" placeholder="Apply Coupon Code" class="mr-2">
                                                                        <button type="button" class="effect mt-xl-0 mt-md-0 mt-2">Apply
                                                                            Coupon</button>
                                                                    </form> -->
                                                                    <div class="total-amount font-weight-bold mt-xl-0 mt-md-0 mt-2">
                                                                        Total Amount : <span>$2000</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            </form>
                                        </div>

                                    </div>
                            
                            </section>
                        </div>
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
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    @foreach (Auth::user()->addresses as $key => $address)
                                    <div class="col-md-6">
                                        <label class="aiz-megabox d-block bg-white">
                                        <input type="radio" name="address_id" value="{{ $address->id }}" @if ($address->set_default) checked @endif required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="text_gray">Name</label>
                                        <input type="text" class="form-control w-100" placeholder="Name">{{ $address->address }}
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="text_gray mt-3">Address</label>
                                        <input type="text" class="form-control w-100" placeholder="Nepal">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="text_gray mt-3">Cite</label>
                                        <input type="text" class="form-control w-100" placeholder="Nepal">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="text_gray mt-3">Country</label>
                                        <input type="text" class="form-control w-100" placeholder="Nepal">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="text_gray mt-3">Postal Code</label>
                                        <input type="text" class="form-control w-100" placeholder="5468">
                                    </div>
                                    @endforeach
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Second Collapse End -->
                <!-- Third Collapse  -->
                <div class="card">
                    <div class="card-header p-0 bg-light" id="headingThree">
                        <h5 class="mb-0">
                            <div class="collapsed p-3" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="mr-2"><i class="fa fa-ravelry" aria-hidden="true"></i></span> Payment Option
                            </div>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadio1">Cash On Delivery</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2" data-toggle="collapse" href="#cus-collapse1" role="button" aria-expanded="false" aria-controls="cus-collapse1">E-Sewa</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Third Collapse End -->
            </div>
            <button class="effect mx-auto px-4">Checkout</button> </div>
    </div>
</section>
<!-- Checkout Ends -->

@endsection