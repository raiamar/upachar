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
    <form method="post" action="{{route('checkout.store_shipping_infostore')}}">
        @csrf
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
                                            @if(Session::has('cart'))
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
                                                                        @foreach (Session::get('cart') as $key => $cartItem)
                                                                        @php
                                                                            $total = 0;
                                                                            $product = \App\Product::find($cartItem['id']);
                                                                            $total = $total + $cartItem['price']*$cartItem['quantity'];
                                                                            $product_name_with_choice = $product->name;
                                                                            if ($cartItem['variant'] != null) {
                                                                                $product_name_with_choice = $product->name.' - '.$cartItem['variant'];
                                                                            }
                                                                        @endphp
                                                                        <tr>
                                                                            <td class="cart-image">
                                                                                <a class="entry-thumbnail" href="#">
                                                                                    <img src="{{ asset($product->thumbnail_img) }}" class="img-fluid">
                                                                                </a>
                                                                            </td>
                                                                            <td class="cart-product-name-info">
                                                                                <h4 class="cart-product-description"><a href="product-product-detail.html">{{ $product_name_with_choice }}</a></h4>
                                                                                <div class="row">
                                                                                    <div class="col-4">
                                                                                        <div class="rating rateit-small"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- /.row -->
                                                                            </td>


                                                                            <td class="cart-product-quantity">
                                                                                {{-- <div class="quant-input">
                                                                                    <input type="number" value="1">
                                                                                </div> --}}
                                                                                @if($cartItem['digital'] != 1)
                                                                                    <div class="input-group input-group--style-2 pr-4" style="width: 130px;">
                                                                                        <span class="input-group-btn">
                                                                                            <button class="btn btn-number" type="button" data-type="minus" data-field="quantity[{{ $key }}]">
                                                                                                <i class="la la-minus"></i>
                                                                                            </button>
                                                                                        </span>
                                                                                            <input type="text" name="quantity[{{ $key }}]" class="form-control input-number" placeholder="1" value="{{ $cartItem['quantity'] }}" min="1" max="10" onchange="updateQuantity({{ $key }}, this)">
                                                                                            <span class="input-group-btn">
                                                                                            <button class="btn btn-number" type="button" data-type="plus" data-field="quantity[{{ $key }}]">
                                                                                                <i class="la la-plus"></i>
                                                                                            </button>
                                                                                        </span>
                                                                                    </div>
                                                                                @endif
                                                                            </td>
                                                                            <td class="cart-product-grand-total"><span class="cart-grand-total-price">{{ single_price($cartItem['price']) }}</span>
                                                                            </td>
                                                                            <td class="romove-item"><a href="#" title="cancel" onclick="removeFromCartView(event, {{ $key }})" class="icon"><i class="fa fa-trash-o"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                    <!-- /tbody -->
                                                                    @endforeach
                                                                </table>
                                                                <div class="d-flex justify-content-around align-items-center w-100 my-3 flex-wrap">
                                                                    <!-- <form class="coupon-field d-flex flex-wrap align-items-center justify-content-center">
                                                                        <input type="text" placeholder="Apply Coupon Code" class="mr-2">
                                                                        <button type="button" class="effect mt-xl-0 mt-md-0 mt-2">Apply
                                                                            Coupon</button>
                                                                    </form> -->
                                                                    {{-- <div class="total-amount font-weight-bold mt-xl-0 mt-md-0 mt-2">
                                                                        Total Amount : <span>$2000</span>
                                                                    </div> --}}
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            
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
                            {{-- <form> --}}
                                <div class="row">
                                    @foreach (Auth::user()->addresses as $key => $address)
                                    <div class="col-md-6">
                                        <label class="aiz-megabox d-block bg-white">
                                        <input type="radio" name="address_id" value="{{ $address->id }}" @if ($address->set_default) checked @endif required>
                                        <span class="d-flex p-3 aiz-megabox-elem">
                                            <span class="aiz-rounded-check flex-shrink-0 mt-1"></span>
                                            <span class="flex-grow-1 pl-3">
                                                <div>
                                                    <span class="alpha-6">Address:</span>
                                                    <span class="strong-600 ml-2">{{ $address->address }}</span>
                                                </div>
                                                <div>
                                                    <span class="alpha-6">Postal Code:</span>
                                                    <span class="strong-600 ml-2">{{ $address->postal_code }}</span>
                                                </div>
                                                <div>
                                                    <span class="alpha-6">City:</span>
                                                    <span class="strong-600 ml-2">{{ $address->city }}</span>
                                                </div>
                                                <div>
                                                    <span class="alpha-6">Country:</span>
                                                    <span class="strong-600 ml-2">{{ $address->country }}</span>
                                                </div>
                                                <div>
                                                    <span class="alpha-6">Phone:</span>
                                                    <span class="strong-600 ml-2">{{ $address->phone }}</span>
                                                </div>
                                            </span>
                                        </span>
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- Button trigger modal --> 
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Add New Address
                                </button> 
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
                                {{-- <div class="col-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="payment_option" value="" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadio1">Cash On Delivery</label>
                                    </div>
                                </div> --}}
                                <div class="col-6">
                                    @if(\App\BusinessSetting::where('type', 'cash_payment')->first()->value == 1)
                                    @php
                                        $digital = 0;
                                        foreach(Session::get('cart') as $cartItem){
                                            if($cartItem['digital'] == 1){
                                                $digital = 1;
                                            }
                                        }
                                    @endphp
                                    @if($digital != 1)
                                        <div class="col-6">
                                            <label class="payment_option mb-4" data-toggle="tooltip" data-title="Cash on Delivery">
                                                <input type="radio" id="" name="payment_option" value="cash_on_delivery" checked>
                                                <span>
                                                    <img loading="lazy"  src="{{ asset('frontend/images/icons/cards/cod.png')}}" class="img-fluid">
                                                </span>
                                            </label>
                                        </div>
                                    @endif
                                @endif



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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{route('addAddress')}}">
                @csrf
            <div class="col-md-6">
                <label for="" class="text_gray mt-3">Address</label>
                <input type="text" class="form-control w-100" placeholder="Nepal" name="address">
            </div>
            <div class="col-md-6">
                <label for="" class="text_gray mt-3">City</label>
                <input type="text" class="form-control w-100" placeholder="Lalitpur" name="city">
            </div>
            <div class="col-md-6">
                <label for="" class="text_gray mt-3">Country</label>
                <input type="text" class="form-control w-100" placeholder="Nepal" name="country">
            </div>
            <div class="col-md-6">
                <label for="" class="text_gray mt-3">Postal Code</label>
                <input type="text" class="form-control w-100" placeholder="5468" name="postal_code">
            </div>
            <div class="col-md-6">
                <label for="" class="text_gray mt-3">Phone</label>
                <input type="text" class="form-control w-100" placeholder="5468" name="phone">
            </div>
            <button type="submit">Add new address</button>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



<script type="text/javascript">
    function removeFromCartView(e, key){
        e.preventDefault();
        removeFromCart(key);
    }

    function updateQuantity(key, element){
        $.post('{{ route('cart.updateQuantity') }}', { _token:'{{ csrf_token() }}', key:key, quantity: element.value}, function(data){
            updateNavCart();
            $('#cart-summary').html(data);
        });
    }
    </script>