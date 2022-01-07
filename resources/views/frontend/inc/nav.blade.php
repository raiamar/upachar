   <!-- Top Header Navigation -->
   <header id="top-header-navigation-wrapper">
    <div class="container">
        <div class="top-header py-1">
            <ul class="d-flex justify-content-end align-items-center m-0">
                @if (\App\Addon::where('unique_identifier', 'affiliate_system')->first() != null && \App\Addon::where('unique_identifier', 'affiliate_system')->first()->activated)                
                @endif
            @auth
            {{-- <li>
                <a href="{{ route('affiliate.apply') }}" class="nav-link text-white">{{__('Be an affiliate partner')}}</a>
            </li> --}}
            <li>
                <a href="{{ route('logout') }}" class="nav-link text-white">{{__('Logout')}}</a>
            </li>
            @else
                <li>
                    <a class="nav-link text-white" href="{{route ('user.login') }}">
                        <span class=" mr-2">
                            <i class=" fa fa-sign-in" aria-hidden="true"></i></span>{{__('Login')}}</a>
                </li>
                <li>
                    <a class="nav-link text-white" href="{{route ('user.registration')}}">
                        <span class="mr-2">
                            <i class="fa fa-paper-plane"
                                aria-hidden="true"></i></span>{{__('Registration')}}</a>
                </li>
                @endauth
                <li>
                    <a class="nav-link text-white" href="">{{__('Save more on App')}}</a>
                </li>
                <li>
                    <a class="nav-link text-white" href="{{ route('orders.track') }}">{{__('Track my Order')}}</a>
                </li>
            </ul>
        </div>
    </div>
</header>
<!-- Top Header Navigation Ends -->
<!-- Navigation Starts -->
<section id="navigation-wrapper" class="navigation-wrap">
    <nav class="navbar header-sticky justify-content-around">
        <div class="image">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('frontend/assets/images/logo/3.png')}}" alt="navigation-logo" class="img-fluid">
                <!-- <h3 class="m-0 font-weight-bold"><span>Upachar</span> Pharmacy</h3> -->
            </a>
        </div>
        
        <div class="navbar-menus d-xl-block d-lg-block d-none" id="navbarmain">
            <ul class="navbar-nav py-4 py-md-0 d-flex flex-row flex-wrap" role="menu">
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link active" href="/">Home</a>
                </li>

{{-- Products List starts --}}
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="product-listing.html">
                        Products
                        <span class="ml-1">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="mega-menu-wrapper">
                        <div class="row p-4">
                            <!-- /.col-md-3  -->
                            @foreach (\App\Category::all()->random(4) as $key => $category)
                            <div class="col-md-3">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link head font-weight-bold" href="{{ route('products.category', $category->slug) }}">{{$category->name}}</a>
                                    </li>
                                    <li class="nav-item p-0">
                                        {{-- <a class="nav-link" href="product-listing.html">Item 1</a> --}}
                                        @if($category->has('products'))
                                        @foreach ($category->products as $subcategory)
                                        <a class="nav-link">{{$subcategory->name}}</a>
                                        @endforeach                   
                                        @endif
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                    </div>

                </li>
{{-- Products List ends --}}           
                {{-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link toggle" data-toggle="dropdown" href="product-listing.html" role="button" aria-haspopup="true"
                        aria-expanded="false">
                        Recipes
                        <span class="ml-1">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="mega-menu-wrapper">
                        <div class="row p-4">
                            <!-- /.col-md-3  -->
                            <div class="col-md-3">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 27</a>
                                    </li>
                                    <li class="nav-item p-0">
                                        <a class="nav-link" href="product-listing.html">Item 1</a>
                                    </li>
                                    <li class="nav-item p-0">
                                        <a class="nav-link" href="product-listing.html">Item 2</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.col-md-3  -->
                            <div class="col-md-3">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 27</a>
                                    </li>
                                    <li class="nav-item p-0">
                                        <a class="nav-link" href="product-listing.html">Item 1</a>
                                    </li>
                                    <li class="nav-item p-0">
                                        <a class="nav-link" href="product-listing.html">Item 2</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.col-md-3  -->
                            <div class="col-md-3">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 27</a>
                                    </li>
                                    <li class="nav-item p-0">
                                        <a class="nav-link" href="product-listing.html">Item 1</a>
                                    </li>
                                    <li class="nav-item p-0">
                                        <a class="nav-link" href="product-listing.html">Item 2</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.col-md-3  -->
                            <div class="col-md-3">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 27</a>
                                    </li>
                                    <li class="nav-item p-0">
                                        <a class="nav-link" href="product-listing.html">Item 1</a>
                                    </li>
                                    <li class="nav-item p-0">
                                        <a class="nav-link" href="product-listing.html">Item 2</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.col-md-3  -->
                            <div class="col-md-3">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 27</a>
                                    </li>
                                    <li class="nav-item p-0">
                                        <a class="nav-link" href="product-listing.html">Item 1</a>
                                    </li>
                                    <li class="nav-item p-0">
                                        <a class="nav-link" href="product-listing.html">Item 2</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 29</a>
                                    </li>
                                    <li class="nav-item p-0">
                                        <a class="nav-link" href="product-listing.html">Item 1</a>
                                    </li>
                                    <li class="nav-item p-0">
                                        <a class="nav-link" href="product-listing.html">Item 2</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.col-md-3  -->
                            <div class="col-md-3">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 27</a>
                                    </li>
                                    <li class="nav-item p-0">
                                        <a class="nav-link" href="product-listing.html">Item 1</a>
                                    </li>
                                    <li class="nav-item p-0">
                                        <a class="nav-link" href="product-listing.html">Item 2</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 29</a>
                                    </li>
                                    <li class="nav-item p-0">
                                        <a class="nav-link" href="product-listing.html">Item 1</a>
                                    </li>
                                    <li class="nav-item p-0">
                                        <a class="nav-link" href="product-listing.html">Item 2</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.col-md-3  -->
                            <div class="col-md-3">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 27</a>
                                    </li>
                                    <li class="nav-item p-0">
                                        <a class="nav-link" href="product-listing.html">Item 1</a>
                                    </li>
                                    <li class="nav-item p-0">
                                        <a class="nav-link" href="product-listing.html">Item 2</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li> --}}

                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" href="product-listing.html" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        Categories
                        <span class="ml-1">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="mega-menu-wrapper">
                        <!-- <a class="dropdown-item" href="">Product 1</a>
                                    <a class="dropdown-item" href="">Product 2</a> -->
                        <div class="container">
                            <div class="row">
                                @foreach (\App\Category::all()->random(4) as $key => $category)
                                <div class="col-md-3">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link head font-weight-bold" href="">{{$category->name}}</a>
                                            @if($category->has('subcategories'))
                                            @foreach ($category->subcategories as $subcategory)
                                            <a class="nav-link">{{$subcategory->name}}</a>
                                            @endforeach                    
                                        @endif
                                        </li>
                                       
                                    </ul>
                                </div>
                                @endforeach  
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                </li>
                <!-- Popup Search Modal Anchor -->
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="btn" data-toggle="modal" data-target="#searchpopupmodal"><i class="fa fa-search"></i></a>
                </li>
                <!-- Popup Search Modal Anchor Ends -->
            </ul>
        </div>
        {{-- Products List ends --}}


        


        <div class="cart-wishlist desk-nav d-xl-block d-lg-block d-none">
            <ul class="d-flex align-items-center justify-content-between m-0">
                <li>
                    {{-- <div class="d-inline-block" data-hover="dropdown">
                        <div class="nav-cart-box dropdown" id="cart_items"> --}}
                            <a href="" class="nav-box-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{-- <i class="la la-shopping-cart d-inline-block nav-box-icon"></i> --}}
                                <span class="mr-1"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                @if(Session::has('cart'))
                                    <span class="nav-box-number">{{ count(Session::get('cart'))}}</span>
                                @else
                                    <span class="nav-box-number">0</span>
                                @endif
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right px-0">
                                <li>
                                    <div class="dropdown-cart px-0">
                                        @if(Session::has('cart'))
                                            @if(count($cart = Session::get('cart')) > 0)
                                                <div class="dc-header">
                                                    <h3 class="heading heading-6 strong-700">{{__('Cart Items')}}</h3>
                                                </div>
                                                <div class="dropdown-cart-items c-scrollbar">
                                                    @php
                                                        $total = 0;
                                                    @endphp
                                                    @foreach($cart as $key => $cartItem)
                                                        @php
                                                            $product = \App\Product::find($cartItem['id']);
                                                            $total = $total + $cartItem['price']*$cartItem['quantity'];
                                                        @endphp
                                                        <div class="dc-item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="dc-image">
                                                                    <a href="{{ route('product', $product->slug) }}">
                                                                        <img src="{{ asset('frontend/images/placeholder.jpg') }}" data-src="{{ asset($product->thumbnail_img) }}" class="img-fluid lazyload" alt="{{ __($product->name) }}">
                                                                    </a>
                                                                </div>
                                                                <div class="dc-content">
                                                                    <span class="d-block dc-product-name text-capitalize strong-600 mb-1">
                                                                        <a href="{{ route('product', $product->slug) }}">
                                                                            {{ __($product->name) }}
                                                                        </a>
                                                                    </span>
            
                                                                    <span class="dc-quantity">x{{ $cartItem['quantity'] }}</span>
                                                                    <span class="dc-price">{{ single_price($cartItem['price']*$cartItem['quantity']) }}</span>
                                                                </div>
                                                                <div class="dc-actions">
                                                                    <button onclick="removeFromCart({{ $key }})">
                                                                        <i class="la la-close"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="dc-item py-3">
                                                    <span class="subtotal-text">{{__('Subtotal')}}</span>
                                                    <span class="subtotal-amount">{{ single_price($total) }}</span>
                                                </div>
                                                <div class="py-2 text-center dc-btn">
                                                    <ul class="inline-links inline-links--style-3">
                                                        <li class="px-1">
                                                            <a href="{{ route('cart') }}" class="link link--style-1 text-capitalize btn btn-base-1 px-3 py-1">
                                                                <i class="la la-shopping-cart"></i> {{__('View cart')}}
                                                            </a>
                                                        </li>
                                                        @if (Auth::check())
                                                        <li class="px-1">
                                                            <a href="{{ route('checkout.shipping_info') }}" class="link link--style-1 text-capitalize btn btn-base-1 px-3 py-1 light-text">
                                                                <i class="la la-mail-forward"></i> {{__('Checkout')}}
                                                            </a>
                                                        </li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            @else
                                                <div class="dc-header">
                                                    <h3 class="heading heading-6 strong-700">{{__('Your Cart is empty')}}</h3>
                                                </div>
                                            @endif
                                        @else
                                            <div class="dc-header">
                                                <h3 class="heading heading-6 strong-700">{{__('Your Cart is empty')}}</h3>
                                            </div>
                                        @endif
                                    </div>
                                </li>
                            </ul>
                        {{-- </div>
                    </div> --}}
                </li>
                {{-- <li>
                    <a href="{{ route('wishlists.index') }}" class="nav-box-link">
                    
                        <span class="mr-1"><i class="fa fa-shopping-bag" aria-hidden="true"></i></span> <sup
                            class="cart-items text-white">
                        @if(Auth::check())
                            <span class="nav-box-number">{{ count(Auth::user()->wishlists)}}</span>
                        @else
                            <span class="nav-box-number">0</span>
                        @endif
                        </sup>
                    </a>
                </li> --}}
{{-- <a class="nav-link add-on px-xl-2 px-lg-1 px-md-2 px-2" data-toggle="modal" data-target="#nav-cart"> --}}

                <li>
                    <a href="{{ route('wishlists.index') }}" class="nav-box-link">
                    {{-- <a class="nav-link add-on px-xl-2 px-lg-1 px-md-2 px-2" data-toggle="modal" data-target="#nav-cart"> --}}
                        <span class="mr-1"><i class="fa fa-heart-o" aria-hidden="true"></i></span> <sup class="cart-items text-white">
                        @if(Auth::check())
                            <span class="nav-box-number">{{ count(Auth::user()->wishlists)}}</span>
                        @else
                            <span class="nav-box-number">0</span>
                        @endif
                        </sup>
                    </a>
                </li>
            </ul>
        </div>



        <!-- Mobile Popup Search Modal Anchor -->
        <a class="btn d-xl-none d-lg-none d-md-block search-button" data-toggle="modal" data-target="#searchpopupmodal"><i
                class="fa fa-search"></i></a>
        <!-- Mobile Popup Search Modal Anchor Ends -->
        <!-- Small Desktop & mobile Cart-wishlist and Profile -->
        <!-- Button trigger modal -->
        <div class="mobile-menu d-lg-none d-md-block mr-4 position-absolute" data-toggle="modal"
            data-target="#rightsidebarfilter"><span class="mr-2"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></span>
        </div>
        <!-- Button trigger modal -->
        <!-- Small Desktop & mobile Cart-wishlist and Profile End-->
    </nav>
</section>
<!-- Navigation Ends -->