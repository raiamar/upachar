<div class="dashboard-list py-lg-5 px-lg-3 d-lg-block d-none">
    <div class="d-user-avater text-center mb-4">
        @if (Auth::user()->avatar_original != null)
            <img src="{{ asset(Auth::user()->avatar_original) }}" class="img-fluid pic-1">
        @else
            <img src="https://infosecmonkey.com/wp-content/themes/InfoSecMonkey/assets/img/No_Image.jpg" class="img-fluid pic-1">
        @endif
        @if(Auth::user()->seller->verification_status == 1)
        <div class="name mb-0">{{ Auth::user()->name }} <span class="ml-2"><i class="fa fa-check-circle" style="color:green"></i></span></div>
         @else
        <div class="name mb-0">{{ Auth::user()->name }} <span class="ml-2"><i class="fa fa-times-circle" style="color:red"></i></span></div>
        @endif
    </div>
    <ul class="sidebar">
        <li class="mb-3 p-2">
            <a href="{{ route('dashboard') }}" class="{{ areActiveRoutesHome(['dashboard'])}}">
                <i class="la la-dashboard"></i>
                <span class="category-name">
                    {{__('Dashboard')}}
                </span>
            </a>
        </li>
        <li class="mb-3 p-2">
            <a href="{{ route('profile') }}"><span class="mr-2"><i class="fa fa-user"
                        aria-hidden="true"></i></span>Profile</a>
        </li>
        {{-- <li class="mb-3 p-2">
            <a href="dashboard-order-status.html"><span class="mr-2"><i class="fa fa-sort"
                        aria-hidden="true"></i></span>Order Status</a>
        </li> --}}
        <li class="mb-3 p-2">
            <a href="/cart"><span class="mr-2"><i class="fa fa-shopping-bag"
                        aria-hidden="true"></i></span>{{__('My Cart')}}</a>
        </li>
        <li class="mb-3 p-2">
            <a href="{{ route('wishlists.index') }}"><span class="mr-2"><i class="fa fa-heart"
                        aria-hidden="true"></i></span>{{__('Wishlist')}}</a>
        </li>
        {{-- <li class="mb-3 p-2">
            <a href="#password-update"><span class="mr-2"><i class="fa fa-lock"
                        aria-hidden="true"></i></span>{{__('Change Password')}}</a>
        </li> --}}
        


        <li class="mb-3 p-2">
            <a href="{{ route('shops.index') }}" class="{{ areActiveRoutesHome(['shops.index'])}}">
                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                <span class="category-name">
                    {{__('Shop Setting')}}
                </span>
            </a>
        </li>

        <li class="mb-3 p-2">
            <a href="{{ route('shops.create') }}" class="{{ areActiveRoutesHome(['shops.create'])}}">
                <i class="la la-cog"></i>
                <span class="category-name">
                    {{__('Create Shop')}}
                </span>
            </a>
        </li>

        <li class="mb-3 p-2">
            <a href="{{ route('digital_purchase_history.index') }}" class="{{ areActiveRoutesHome(['digital_purchase_history.index'])}}">
                <i class="fa fa-download"></i>
                <span class="category-name">
                    {{__('Downloads')}}
                </span>
            </a>
        </li>


        <li class="mb-3 p-2">
            <a href="{{ route('seller.products') }}" class="{{ areActiveRoutesHome(['seller.products', 'seller.products.upload', 'seller.products.edit'])}}">
                <i class="fa fa-product-hunt"></i>
                <span class="category-name">
                    {{__('Products')}}
                </span>
            </a>
        </li>

        @php
        $delivery_viewed = App\Order::where('user_id', Auth::user()->id)->where('delivery_viewed', 0)->get()->count();
        $payment_status_viewed = App\Order::where('user_id', Auth::user()->id)->where('payment_status_viewed', 0)->get()->count();
        $refund_request_addon = \App\Addon::where('unique_identifier', 'refund_request')->first();
        $club_point_addon = \App\Addon::where('unique_identifier', 'club_point')->first();
    @endphp
    <li class="mb-3 p-2">
        <a href="{{ route('purchase_history.index') }}" class="{{ areActiveRoutesHome(['purchase_history.index'])}}">
            <i class="fa fa-dollar"></i>
            <span class="category-name">
                {{__('Purchase History')}} @if($delivery_viewed > 0 || $payment_status_viewed > 0)<span class="ml-2" style="color:#45b46f"><strong>({{ __(' New Notifications') }})</strong></span>@endif
            </span>
        </a>
    </li>

    @php
    $orders = DB::table('orders')
                ->orderBy('code', 'desc')
                ->join('order_details', 'orders.id', '=', 'order_details.order_id')
                ->where('order_details.seller_id', Auth::user()->id)
                ->where('orders.viewed', 0)
                ->select('orders.id')
                ->distinct()
                ->count();
                @endphp
                <li class="mb-3 p-2">
                 <a href="{{ route('orders.index') }}" class="{{ areActiveRoutesHome(['orders.index'])}}">
                        <i class="fa fa-shopping-cart"></i>
                     <span class="category-name">
                            {{__('Orders')}} @if($orders > 0)<span class="ml-2" style="color:#45b46f"><strong>({{ $orders }} {{ __('New') }})</strong></span></span>@endif
                     </span>
                    </a>
                </li>

        {{-- <li class="mb-3 p-2">
            <a href="{{ route('seller.digitalproducts') }}" class="{{ areActiveRoutesHome(['seller.digitalproducts', 'seller.digitalproducts.upload', 'seller.digitalproducts.edit'])}}">
                <i class="la la-diamond"></i>
                <span class="category-name">
                    {{__('Digital Products')}}
                </span>
            </a>
        </li> --}}
        @if ($refund_request_addon != null && $refund_request_addon->activated == 1)
        <li class="mb-2 p-2">
            <a href="{{ route('vendor_refund_request') }}" class="{{ areActiveRoutesHome(['vendor_refund_request'])}}">
                <i class="fa fa-file-text"></i>
                <span class="category-name">
                    {{__('Recieved Refund Request')}}
                </span>
            </a>
        </li>

        <li class="mb-2 p-2">
            <a href="{{ route('customer_refund_request') }}" class="{{ areActiveRoutesHome(['customer_refund_request'])}}">
                <i class="fa fa-file-text"></i>
                <span class="category-name">
                    {{__('Sent Refund Request')}}
                </span>
            </a>
        </li>
    @endif
             @php
                 $review_count = DB::table('reviews')
                ->orderBy('code', 'desc')
                ->join('products', 'products.id', '=', 'reviews.product_id')
                ->where('products.user_id', Auth::user()->id)
                ->where('reviews.viewed', 0)
                ->select('reviews.id')
                ->distinct()
                ->count();
                @endphp
                <li class="mb-3 p-2">
                    <a href="{{ route('reviews.seller') }}" class="{{ areActiveRoutesHome(['reviews.seller'])}}">
                     <i class="fa fa-star"></i>
                     <span class="category-name">
                          {{__('Product Reviews')}}@if($review_count > 0)<span class="ml-2" style="color:#45b46f"><strong>({{ $review_count }} {{ __('New') }})</strong></span>@endif
                        </span>
                 </a>
                </li>

        <li class="mb-3 p-2">
            <a href="/logout"><span class="mr-2"><i class="fa fa-sign-out" aria-hidden="true"></i></span>{{__('Logout')}}</a>
        </li>
    </ul>

    {{-- <div class="sidebar-widget-title py-3">
        <span>{{__('Sold Amount')}}</span>
    </div> --}}
    <div class="widget-balance pb-3 pt-1">
        <div class="text-center">
            <div class="heading-4 strong-700 mb-4">
                @php
                    $orderDetails = \App\OrderDetail::where('seller_id', Auth::user()->id)->where('created_at', '>=', date('-30d'))->get();
                    $total = 0;
                    foreach ($orderDetails as $key => $orderDetail) {
                        if($orderDetail->order->payment_status == 'paid'){
                            $total += $orderDetail->price;
                        }
                    }
                @endphp
                <small class="d-block text-sm alpha-5 mb-2">{{__('Your sold amount (current month)')}}</small>
                <span class="p-2 bg-base-1 rounded" style="background-color: #45b46f">{{ single_price($total) }}</span>
            </div>
            <table class="text-left mb-0 table w-75 m-auto">
                <tr>
                    @php
                        $orderDetails = \App\OrderDetail::where('seller_id', Auth::user()->id)->get();
                        $total = 0;
                        foreach ($orderDetails as $key => $orderDetail) {
                            if($orderDetail->order->payment_status == 'paid'){
                                $total += $orderDetail->price;
                            }
                        }
                    @endphp
                    <td class="p-1 text-sm">
                        {{__('Total Sold')}}:
                    </td>
                    <td class="p-1">
                        {{ single_price($total) }}
                    </td>
                </tr>
                <tr>
                    @php
                        $orderDetails = \App\OrderDetail::where('seller_id', Auth::user()->id)->where('created_at', '>=', date('-60d'))->where('created_at', '<=', date('-30d'))->get();
                        $total = 0;
                        foreach ($orderDetails as $key => $orderDetail) {
                            if($orderDetail->order->payment_status == 'paid'){
                                $total += $orderDetail->price;
                            }
                        }
                    @endphp
                    <td class="p-1 text-sm">
                        {{__('Last Month Sold')}}:
                    </td>
                    <td class="p-1">
                        {{ single_price($total) }}
                    </td>
                </tr>
            </table>
        </div>
        <table>

        </table>
    </div>
</div>