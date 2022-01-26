<div class="dashboard-list py-lg-5 px-lg-3 d-lg-block d-none">
    <div class="d-user-avater text-center mb-4">
        @if (Auth::user()->avatar_original != null)
            <img src="{{ asset(Auth::user()->avatar_original) }}" class="img-fluid pic-1">
        @else
            <img src="https://infosecmonkey.com/wp-content/themes/InfoSecMonkey/assets/img/No_Image.jpg" class="img-fluid pic-1">
        @endif

        <h5>{{ Auth::user()->name }}</h5>
        <label for="file-input" style="color:#45b46f">
            <i class="fa fa-pencil" aria-hidden="true"></i>
            <input class="mr-1" type="file" name="photo" style="display: none;" id="file-input"></input> Upload Image
        </label>
        
    </div>
    <ul class="sidebar">
        <li class="active mb-3 p-2">
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
                <i class="la la-cog"></i>
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
                <i class="la la-download"></i>
                <span class="category-name">
                    {{__('Downloads')}}
                </span>
            </a>
        </li>


        <li class="mb-3 p-2">
            <a href="{{ route('seller.products') }}" class="{{ areActiveRoutesHome(['seller.products', 'seller.products.upload', 'seller.products.edit'])}}">
                <i class="la la-diamond"></i>
                <span class="category-name">
                    {{__('Products')}}
                </span>
            </a>
        </li>

        <li class="mb-3 p-2">
            <a href="{{ route('seller.digitalproducts') }}" class="{{ areActiveRoutesHome(['seller.digitalproducts', 'seller.digitalproducts.upload', 'seller.digitalproducts.edit'])}}">
                <i class="la la-diamond"></i>
                <span class="category-name">
                    {{__('Digital Products')}}
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
                <span class="p-2 bg-base-1 rounded">{{ single_price($total) }}</span>
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