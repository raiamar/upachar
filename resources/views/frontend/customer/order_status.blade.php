@extends('frontend.layouts.app')

@section('content')

<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <?php $bredcrum_image = \App\Bredcrum::where('page', 'order_status')->where('published', 1)->first(); ?>
        @include('frontend.inc.bredcrum_conditions');
    </div>
    <div class="overlay position-absolute">
        <a class="title p-4" href="/dashboard">{{Auth::user()->name }} > {{__('Order Status')}}</a>
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
                                    $order_detail = \App\OrderDetail::where('order_id', $orders->id)->get();
                                    foreach ($order_detail as $key => $oid) {
                                        $order_id = $oid->order_id;
                                    }
                                    $order_details = \App\OrderDetail::where('id', $order_id)->get();
                                @endphp
                                    <tbody>  
                                   {{-- {{$order_id}} --}}
                                        @include('frontend.inc.orderStatus')
                                        
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