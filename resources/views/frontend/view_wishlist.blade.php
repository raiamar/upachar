@extends('frontend.layouts.app')

@section('content')

<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">

        <?php $bredcrum_image = \App\Bredcrum::where('page', 'wishlist')->where('published', 1)->first(); ?>
        @include('frontend.inc.bredcrum_conditions');
        {{-- @php
            $bredcrum_image = \App\Bredcrum::where('page', 'wishlist')->where('published', 1)->first();
            $bredcrum_image_all = \App\Bredcrum::where('page', 'all')->where('published', 1)->first();
        @endphp
        @if ($bredcrum_image)
            <img src="{{asset($bredcrum_image->photo)}}" alt="breadcrumb-image" class="img-fluid">
        @else
            <img src="{{asset($bredcrum_image_all->photo)}}" alt="breadcrumb-image" class="img-fluid"> 
        @endif --}}
    </div>
    <div class="overlay position-absolute">
        <a class="title p-4" href="/dashboard">{{Auth::user()->name}} > {{__('Wishlist')}}</a>
    </div>
</section>
<!-- Breadcrumbs Ends -->




<!-- Profile -->
<section id="wishlist-wrapper" class="py-3">
    <div class="container">
        <div class="row py-xl-5 py-md-3 py-0">
            <div class="col-xl-3 col-lg-3 col-md-12 col-12 mb-xl-0 mb-lg-0 mb-3">
                @if(Auth::user()->user_type == 'seller')
                    @include('frontend.inc.seller_side_nav')
                @elseif(Auth::user()->user_type == 'customer')
                    @include('frontend.inc.customer_side_nav')
                @endif
                <!-- Mobile Profile Nav -->
                <div class="mobile-profile-nav d-lg-none d-flex flex align-items-center h-100 " data-toggle="modal"
                    data-target="#profilemobilenav">
                    <button class="effect">
                        <span class="mr-2"><i class="fa fa-tachometer" aria-hidden="true"></i></span> Dashboard Menu
                    </button>
            </div>
            <!-- Mobile Profile Nav Ends-->
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-12 ">
                <div class="profile-side-detail-edit">
                    <div class="dashboard-content d-flex align-items-center h-100">
                        <div class="shopping-cart">
                            <div class="shopping-cart-table">
                                <div class="table-responsive-lg">
                                    @if(!($wishlists->isEmpty()))
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="cart-description item">{{__('Image')}}</th>
                                                <th class="cart-product-name item">{{__('Product Name')}}</th>
                                                {{-- <th class="cart-qty item">Quantity</th> --}}
                                                <th class="cart-total last-item">{{__('Total')}}</th>
                                                <th class="cart-romove item">{{__('Remove')}}</th>
                                            </tr>
                                        </thead>
                                        <!-- /thead -->
                                         
                                        <tbody>
                                            @foreach ($wishlists as $key => $wishlist)   
                                            <tr>
                                                <td class="cart-image">
                                                    <a class="entry-thumbnail" href="{{ route('product', $wishlist->product->slug) }}">
                                                        <img src="{{ asset($wishlist->product->thumbnail_img) }}" class="img-fluid">
                                                    </a>
                                                </td>
                                                <td class="cart-product-name-info">
                                                    <h4 class="cart-product-description"><a href="{{ route('product', $wishlist->product->slug) }}">{{ $wishlist->product->name }}</a></h4>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="rating rateit-small"></div>
                                                        </div>
                                                    </div>
                                                    <!-- /.row -->
                                                </td>
                                                {{-- <td class="cart-product-quantity">
                                                    <div class="quant-input">
                                                        <input type="number">
                                                    </div>
                                                </td> --}}
                                                <td class="cart-product-grand-total">
                                                    @if(home_base_price($wishlist->product->id) != home_discounted_base_price($wishlist->product->id))
                                                        <del class="cart-grand-total-price">{{ home_base_price($wishlist->product->id) }}</del>
                                                    @endif
                                                    <span class="cart-grand-total-price">{{ home_discounted_base_price($wishlist->product->id) }}</span>
                                                </td>
                                                <td class="romove-item"><a href="/wishlists/remove/{{ $wishlist->id }}" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a>
                                                    {{-- <td class="romove-item"><a href="removeFromWishlist({{ $wishlist->id }})" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a> --}}
                                                </td>
                                                <td>
                                                    <button class="effect" onclick="showAddToCartModal({{ $wishlist->product->id }})">{{__('Add to Cart')}}</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <!-- /tbody -->
                                    </table>
                                    @else
                                    <div class="col-lg-8 col-md-9 col-9">
                                        <h6 style="margin: 30px 0 60px 0; text-align: center; width:450px">{{__('Your Wishlist is empty')}}</h6>
                                    </div> 
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Profile Ends -->



@endsection