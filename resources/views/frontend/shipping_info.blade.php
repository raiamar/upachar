@extends('frontend.layouts.app')
@section('content')
<style>
    label {
    width: 100%;
}

.card-input-element {
    font-size: inherit;
  margin: 10px;
  position: absolute;
  
}

.card-input {
    margin: 10px;
    padding: 00px;
}

.card-input:hover {
    cursor: pointer;
}

.card-input-element:checked + .card-input {
     box-shadow: 0 0 3px 3px #2DBDEF;
 }
</style>
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
                            <section id="cart-wrapper" class="py-3">
                                <div class="container">
                                    @if(Session::has('cart'))
                                    <div class="row py-xl-5 py-md-3 py-0">
                                        <div class="col-lg-8 col-md-12 col-12">
                                            
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
                                                                        @php
                                                                        $total = 0;
                                                                        @endphp
                                                                        @foreach (Session::get('cart') as $key => $cartItem)
                                                                            @php
                                                                            $product = \App\Product::find($cartItem['id']);
                                                                            $total = $total + $cartItem['price']*$cartItem['quantity'];
                                                                            $product_name_with_choice = $product->name;
                                                                            if ($cartItem['variant'] != null) {
                                                                                $product_name_with_choice = $product->name.' - '.$cartItem['variant'];
                                                                            }
                                                                            // if(isset($cartItem['color'])){
                                                                            //     $product_name_with_choice .= ' - '.\App\Color::where('code', $cartItem['color'])->first()->name;
                                                                            // }
                                                                            // foreach (json_decode($product->choice_options) as $choice){
                                                                            //     $str = $choice->name; // example $str =  choice_0
                                                                            //     $product_name_with_choice .= ' - '.$cartItem[$str];
                                                                            // }
                                                                            @endphp
                                                                        <tr>
                                                                            <td class="cart-image">
                                                                                <a class="entry-thumbnail" href="">
                                                                                    <img src="{{ asset($product->thumbnail_img) }}" class="img-fluid">
                                                                                </a>
                                                                            </td>
                                                                            <td class="cart-product-name-info">
                                                                                <h4 class="cart-product-description"><a href="">{{ $product_name_with_choice }}</a></h4>
                                                                                <div class="row">
                                                                                    <div class="col-4">
                                                                                        <div class="rating rateit-small"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- /.row -->
                                                                            </td>
                                                                            <td class="cart-product-quantity">
                                                                                @if($cartItem['digital'] != 1)
                                                                                <div class="quant-input">
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
                                                                            <td class="romove-item"><a onclick="removeFromCartView(event, {{ $key }})" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                    <!-- /tbody -->
                                                                </table>
                                                            </div>
                                                        </div>
                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @php
                                        $subtotal = 0;
                                        $tax = 0;
                                        $shipping = 0;
                                        if (\App\BusinessSetting::where('type', 'shipping_type')->first()->value == 'flat_rate') {
                                            $shipping = \App\BusinessSetting::where('type', 'flat_rate_shipping_cost')->first()->value;
                                        }
                                        $admin_products = array();
                                        $seller_products = array();
                                        @endphp
                        
                                    @foreach (Session::get('cart') as $key => $cartItem)
                                        @php
                                            $product = \App\Product::find($cartItem['id']);
                                            if($product->added_by == 'admin'){
                                                array_push($admin_products, $cartItem['id']);
                                            }
                                            else{
                                                $product_ids = array();
                                                if(array_key_exists($product->user_id, $seller_products)){
                                                    $product_ids = $seller_products[$product->user_id];
                                                }
                                                array_push($product_ids, $cartItem['id']);
                                                $seller_products[$product->user_id] = $product_ids;
                                            }
                                            $subtotal += $cartItem['price']*$cartItem['quantity'];
                                            $tax += $cartItem['tax']*$cartItem['quantity'];
                                            if (\App\BusinessSetting::where('type', 'shipping_type')->first()->value == 'product_wise_shipping') {
                                                $shipping += $cartItem['shipping'];
                                            }
                                            $product_name_with_choice = $product->name;
                                            if ($cartItem['variant'] != null) {
                                                $product_name_with_choice = $product->name.' - '.$cartItem['variant'];
                                            }
                                        @endphp
                                        
                                    @endforeach
                        
                                    @php
                                        if (\App\BusinessSetting::where('type', 'shipping_type')->first()->value == 'seller_wise_shipping') {
                                            if(!empty($admin_products)){
                                                $shipping = \App\BusinessSetting::where('type', 'shipping_cost_admin')->first()->value;
                                            }
                                            if(!empty($seller_products)){
                                                foreach ($seller_products as $key => $seller_product) {
                                                    $shipping += \App\Shop::where('user_id', $key)->first()->shipping_cost;
                                                }
                                            }
                                        }
                                    @endphp
                        
                                        <div class="col-lg-4 col-md-12 col-12 mb-xl-0 mb-lg-0 mb-3">
                                            <div class="cart-box d-flex flex-wrap justify-content-between align-items-center text-center">
                                                <div class="col-12">
                                                    <div class="cart-summary sub_border_shadow p-xl-4 p-lg-4 p-md-3 p-3 text-left">
                                                        <strong class="cart_text mb-3 d-block font-weight-bold">Cart Summary</strong>
                                                        <div class="cart-price d-flex justify-content-between mb-2">
                                                            <h6 class="">Sub Total</h6>
                                                            <span class="cart_text">{{ single_price($subtotal) }}</span>
                                                        </div>
                                                        <div class="cart-price d-flex justify-content-between mb-2">
                                                            <h6 class="">Shipping Cost</h6>
                                                            <span class="cart_text">{{ single_price($shipping) }}</span>
                                                        </div>
                                                        
                                                        <hr>
                                                        @if (Session::has('coupon_discount'))
                                                        <div class="cart-price d-flex justify-content-between mb-2">
                                                            <h6 class="">Coupon Discount</h6>
                                                            <span class="cart_text">{{ single_price(Session::get('coupon_discount')) }}</span>
                                                        </div>
                                                        @endif
                                                        @php
                                                        $total = $subtotal+$tax+$shipping;
                                                        if(Session::has('coupon_discount')){
                                                            $total -= Session::get('coupon_discount');
                                                        }
                                                    @endphp
                                                        <div class="cart-price d-flex justify-content-between mb-2">
                                                            <h6 class="">Grand Total</h6>
                                                            <span class="cart_text">{{ single_price($total) }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                <!-- Mobile Profile Nav -->
                                <div class="mobile-profile-nav d-lg-none d-flex flex align-items-center h-100 " data-toggle="modal"
                                    data-target="#profilemobilenav">
                                    <button class="effect">
                                        <span class="mr-2"><i class="fa fa-tachometer" aria-hidden="true"></i></span> Dashboard Menu
                                    </button>
                            </div>
                            <!-- Mobile Profile Nav Ends-->
                                        </div>
                                    </div>
                                    @endif
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
                                    {{-- @foreach (Auth::user()->addresses as $key => $address)
                                    <div class="col-md-6">

                                        <div class="card w-75">
                                            <div class="card-body">
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
                                          </div>

                                    </div>
                                    @endforeach --}}
                                    @foreach (Auth::user()->addresses as $key => $address)
                                    <div class="col-md-6">
        
                                        <label>
                                          {{-- <input type="radio" name="product" class="card-input-element" /> --}}
                                
                                            <input type="radio" class="card-input-element"  name="address_id" value="{{ $address->id }}" @if ($address->set_default) checked @endif required>
                                        <span class="d-flex p-3 aiz-megabox-elem card-input">
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
                                <button type="button" class="effect" data-toggle="modal" data-target="#exampleModal">
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
                                {{-- <div class="col-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="payment_option" value="" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadio1">Cash On Delivery</label>
                                    </div>
                                </div> --}}
                                <div class="row">
                                    <div class="column">
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
                                            <div class="col-5" style="margin-left: 10px;">
                                                <label class="payment_option mb-4" data-toggle="tooltip" data-title="Cash on Delivery">
                                                    <input type="radio" id="" name="payment_option" value="cash_on_delivery" checked>
                                                    <span >
                                                        <img loading="lazy"  src="{{ asset('frontend/images/icons/cards/cod.png')}}" class="img-fluid">
                                                    </span>
                                                </label>
                                            </div>
                                        @endif
                                        @endif
                                    </div>

                                    <div class="column">
                                        <div class="col-5" >
                                        <label class="payment_option mb-4" data-toggle="tooltip" data-title="esewa">
                                            <input type="radio" id="" name="payment_option" value="esewa">
                                            <span class="esewa">
                                                <img loading="lazy"  src="{{ asset('frontend/images/icons/cards/esewa.jpg')}}" class="img-fluid">
                                            </span>
                                        </label>
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
          <h5 class="modal-title" id="exampleModalLabel"><b>Add New Address </b></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{route('addAddress')}}">
                @csrf
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="" class="text_gray mt-3">Address</label>
                        <input type="text" class="form-control w-100" placeholder="Nepal" name="address">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="text_gray mt-3">City</label>
                        <input type="text" class="form-control w-100" placeholder="Lalitpur" name="city">
                    </div>
                </div>
            <div class="form-row">
                <div class="col-md-6">
                    <label for="" class="text_gray mt-3">Country</label>
                    <input type="text" class="form-control w-100" placeholder="Nepal" name="country">
                </div>
                <div class="col-md-6">
                    <label for="" class="text_gray mt-3">Postal Code</label>
                    <input type="text" class="form-control w-100" placeholder="5468" name="postal_code">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <label for="" class="text_gray mt-3">Phone</label>
                    <input type="text" class="form-control w-100" placeholder="9841111111" name="phone">
                </div>
            </div>
           
            <button type="submit" class="effect mt-4">Add new address</button>
            </form>
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div> --}}
      </div>
    </div>
  </div>

<style>
    .esewa img{
        width: 450px;
    }
    .alpha-6{
        font-weight: 600;
    }
    </style>

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