@extends('frontend.layouts.app')

@section('content')

<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <img src="{{asset('frontend/assets/images/banner/1.png')}}" alt="breadcrumb-image" class="img-fluid">
    </div>
    <div class="overlay position-absolute">
        <a class="title p-4" href="/profile">{{__('Profile')}} > {{__('Order Status')}}</a>
    </div>
</section>
<!-- Breadcrumbs Ends -->

<!-- Profile -->
<section id="profile-wrapper" class="py-3">
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
            @if (isset($order))
                <div class="col-xl-8 col-lg-8 col-md-12 col-12">
                <div class="profile-side-detail-edit">
                    <div class="dashboard-content d-flex align-items-center">
                        <div class="shopping-cart-table">
                            <div class="table-responsive-xl">   
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="cart-product-id item">Order ID </th>
                                            <th scope="col" class="cart-product-date item">Date </th>
                                            <th scope="col" class="cart-description item">Image</th>
                                            <th scope="col" class="cart-product-name item">Product Name</th>
                                            <th scope="col" class="cart-qty item">Quantity</th>
                                            <th scope="col" class="cart-total last-item">Total</th>
                                            <th scope="col" class="cart-total last-item">Status</th>
                                            <th scope="col" class="cart-romove item"></th>
                                        </tr>
                                    </thead>
                                    <!-- /thead -->
                                    @foreach ($order as $orders)
                                @php
                                $order_details = \App\OrderDetail::where('order_id', $orders->id)->get();
                                @endphp
                                    <tbody>  
                                   
                                        <tr>
                                            @foreach ($order_details as $details)
                                            <td class="cart-product-order-id">
                                                <span>{{$details->order_id}}</span>
                                            </td>
                                            <td class="cart-product-order-date">
                                                <span>{{ date('d/m/Y', strtotime($details->created_at)) }}</span>
                                            </td>
            
                                            <td class="cart-image">
                                                <a class="entry-thumbnail" href="{{ route('product', $details->product->slug) }}">
                                                    <img src="{{asset($details->product->featured_img)}}" class="img-fluid" style="height:60px;">
                                                </a>
                                            </td>
                                            <td class="cart-product-name-info">
                                                <h4 class="cart-product-description"><a href="{{ route('product', $details->product->slug) }}">{{$details->product->name}}</a></h4>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="rating rateit-small"></div>
                                                    </div>
                                                </div>
                                                <!-- /.row -->
                                            </td>
                                            <td class="cart-product-quantity">
                                                <div class="quant-input">
                                                    <span>{{$details->quantity}}</span>
                                                </div>
                                            </td>
                                            <td class="cart-product-grand-total"><span class="cart-grand-total-price">Rs{{$details->order->grand_total}}</span>
                                            </td>
                                            <td class="cart-product-order-date">
                                                @if ($details->delivery_status == 'delivered')
                                                    <span class="bg-success text-white px-3 py-2">{{$details->delivery_status}}</span>
                                                @elseif ($details->delivery_status == 'pending')
                                                    <span class="bg-warning text-white px-3 py-2">{{$details->delivery_status}}</span>
                                                    @else
                                                    <span class="bg-danger text-white px-3 py-2">{{$details->delivery_status}}</span>
                                                @endif
                                                
                                                
                                            </td>
                                            <td class="view-item"><a href="{{ route('product', $details->product->slug) }}" title="cancel" class="icon">
                                                    View</a>
                                            </td>
                                            @endforeach
                                        </tr>
                                        
                                    </tbody>
                                    @endforeach
                                    <!-- /tbody -->
                                </table>
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>    
            
            @else
            <p>No Orders Yet!</p>
                
            @endif
            
        </div>
  
    </div>
    </div>
</section>
<!-- Profile Ends -->


@endsection