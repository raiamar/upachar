@extends('frontend.layouts.app')

@section('content')

    {{-- <section class="py-4 gry-bg" id="cart-summary">
        <div class="container">
            @if(Session::has('cart'))
                <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-xl-8">
                    <!-- <form class="form-default bg-white p-4" data-toggle="validator" role="form"> -->
                    <div class="form-default bg-white p-4">
                        <div class="">
                            <div class="">
                                <table class="table-cart border-bottom">
                                    <thead>
                                        <tr>
                                            <th class="product-image"></th>
                                            <th class="product-name">{{__('Product')}}</th>
                                            <th class="product-price d-none d-lg-table-cell">{{__('Price')}}</th>
                                            <th class="product-quanity d-none d-md-table-cell">{{__('Quantity')}}</th>
                                            <th class="product-total">{{__('Total')}}</th>
                                            <th class="product-remove"></th>
                                        </tr>
                                    </thead>
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
                                            <tr class="cart-item">
                                                <td class="product-image">
                                                    <a href="#" class="mr-3">
                                                        <img loading="lazy"  src="{{ asset($product->thumbnail_img) }}" style="width:50px;">
                                                    </a>
                                                </td>

                                                <td class="product-name">
                                                    <span class="pr-4 d-block">{{ $product_name_with_choice }}</span>
                                                </td>

                                                <td class="product-price d-none d-lg-table-cell">
                                                    <span class="pr-3 d-block">{{ single_price($cartItem['price']) }}</span>
                                                </td>

                                                <td class="product-quantity d-none d-md-table-cell">
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
                                                <td class="product-total">
                                                    <span>{{ single_price(($cartItem['price']+$cartItem['tax'])*$cartItem['quantity']) }}</span>
                                                </td>
                                                <td class="product-remove">
                                                    <a href="#" onclick="removeFromCartView(event, {{ $key }})" class="text-right pl-4">
                                                        <i class="la la-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row align-items-center pt-4">
                            <div class="col-md-6">
                                <a href="{{ route('home') }}" class="link link--style-3">
                                    <i class="la la-mail-reply"></i>
                                    {{__('Return to shop')}}
                                </a>
                            </div>
                            <div class="col-md-6 text-right">
                                @if(Auth::check())
                                    <a href="{{ route('checkout.shipping_info') }}" class="btn btn-styled btn-base-1" style="color: black">{{__('Continue to Shipping')}}</a>
                                @else
                                    <button class="btn btn-styled btn-base-1" onclick="showCheckoutModal()">{{__('Continue to Shipping')}}</button>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>

                <div class="col-xl-4 ml-lg-auto">
                    @include('frontend.partials.cart_summary')
                </div>
            </div>
            @else
                <div class="dc-header">
                    <h3 class="heading heading-6 strong-700">{{__('Your Cart is empty')}}</h3>
                </div>
            @endif
        </div>
    </section> --}}
     <!-- Cart -->
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
                                        <div class="d-flex justify-content-around align-items-center w-100 my-3 flex-wrap">
                                            @if (Auth::check() && \App\BusinessSetting::where('type', 'coupon_system')->first()->value == 1)
                                             @if (Session::has('coupon_discount'))
                                            <div class="">
                                                <form class="coupon-field d-flex flex-wrap align-items-center justify-content-center" action="{{ route('checkout.remove_coupon_code') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="text" placeholder="Apply Coupon Code" class="mr-2">
                                                        <button type="submit" class="effect mt-xl-0 mt-md-0 mt-2">Change
                                                        Coupon</button>
                                                </form>
                                            </div>
                                            @else
                                            <div class="">
                                                <form class="coupon-field d-flex flex-wrap align-items-center justify-content-center" action="{{ route('checkout.apply_coupon_code') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="text" placeholder="Apply Coupon Code" class="mr-2" name="code" required>
                                                    <button type="submit" class="effect mt-xl-0 mt-md-0 mt-2">Apply
                                                        Coupon</button>
                                                </form>
                                            </div>
                                            @endif
                                            @endif
                                            <div class="total-amount font-weight-bold mt-xl-0 mt-md-0 mt-2">
                                                Total Amount : <span>{{ single_price($total) }}</span>
                                            </div>
                                        </div>
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
                        <div class="col-12 my-3">
                            @if(Auth::check())
                            <button type="button" class="effect"><a href="{{ route('checkout.shipping_info') }}" class="text-white">Proceed Checkout</a></button>
                            @else
                            <button class="btn btn-styled btn-base-1" onclick="showCheckoutModal()">{{__('Continue to Shipping')}}</button>
                            @endif
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
    <!-- Cart Ends -->
    <!-- Modal -->
    <div class="modal fade" id="GuestCheckout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-zoom" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">{{__('Login')}}</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="p-3">
                        <form class="form-default" role="form" action="{{ route('cart.login.submit') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="input-group input-group--style-1">
                                    <input type="email" name="email" class="form-control" placeholder="{{__('Email')}}">
                                    <span class="input-group-addon">
                                        <i class="text-md la la-user"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group input-group--style-1">
                                    <input type="password" name="password" class="form-control" placeholder="{{__('Password')}}">
                                    <span class="input-group-addon">
                                        <i class="text-md la la-lock"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <a href="{{ route('password.request') }}" class="link link-xs link--style-3">{{__('Forgot password?')}}</a>
                                </div>
                                <div class="col-md-6 text-right">
                                    <button type="submit" class="btn btn-styled btn-base-1 px-4">{{__('Sign in')}}</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="text-center pt-3">
                        <p class="text-md">
                            {{__('Need an account?')}} <a href="{{ route('user.registration') }}" class="strong-600">{{__('Register Now')}}</a>
                        </p>
                    </div>
                    @if(\App\BusinessSetting::where('type', 'google_login')->first()->value == 1 || \App\BusinessSetting::where('type', 'facebook_login')->first()->value == 1 || \App\BusinessSetting::where('type', 'twitter_login')->first()->value == 1)
                        <div class="or or--1 my-3 text-center">
                            <span>or</span>
                        </div>
                        <div class="p-3 pb-0">
                            @if (\App\BusinessSetting::where('type', 'facebook_login')->first()->value == 1)
                                <a href="" class="btn btn-styled btn-block btn-facebook btn-icon--2 btn-icon-left px-4 mb-3">
                                    <i class="icon fa fa-facebook"></i> {{__('Login with Facebook')}}
                                </a>
                            @endif
                            @if(\App\BusinessSetting::where('type', 'google_login')->first()->value == 1)
                                <a href="" class="btn btn-styled btn-block btn-google btn-icon--2 btn-icon-left px-4 mb-3">
                                    <i class="icon fa fa-google"></i> {{__('Login with Google')}}
                                </a>
                            @endif
                            @if (\App\BusinessSetting::where('type', 'twitter_login')->first()->value == 1)
                            <a href="" class="btn btn-styled btn-block btn-twitter btn-icon--2 btn-icon-left px-4 mb-3">
                                <i class="icon fa fa-twitter"></i> {{__('Login with Twitter')}}
                            </a>
                            @endif
                        </div>
                    @endif
                    @if (\App\BusinessSetting::where('type', 'guest_checkout_active')->first()->value == 1)
                        <div class="or or--1 mt-0 text-center">
                            <span>or</span>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('checkout.shipping_info') }}" class="btn btn-styled btn-base-1">{{__('Guest Checkout')}}</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
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

    function showCheckoutModal(){
        $('#GuestCheckout').modal();
    }
    </script>
@endsection
