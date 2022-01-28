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
                <a href="{{ route('dashboard') }}" class="nav-link text-white">{{__('My Panel')}}</a>
            </li>
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
                <li>
                    <a class="nav-link text-white" href="{{ route('shops.create') }}">{{__('Become a vendor')}}</a>
                </li>
                @endauth
                {{-- <li>
                    <a class="nav-link text-white" href="">{{__('Save more on App')}}</a>
                </li> --}}
                
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
        @php
            $generalsetting = \App\GeneralSetting::first();
        @endphp
        <div class="image">
            <a class="navbar-brand" href="/">
                @if($generalsetting->logo != null)
                    <img src="{{ asset($generalsetting->logo) }}" alt="{{ env('APP_NAME') }}">
                @else
                    <img src="{{ asset('frontend/assets/images/logo/3.png') }}" alt="{{ env('APP_NAME') }}" class="img-fluid">
                @endif
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
                    <a class="nav-link" href="#">
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
                                        <a class="nav-link" href="{{route('product',$subcategory->slug)}}">{{$subcategory->name}}</a>
                                        @endforeach                   
                                        @endif
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                    </div>

                </li>
{{-- Products List ends --}}           

                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" role="button"
                        {{-- <a class="nav-link dropdown-toggle" href="{{ route('product', $product->slug) }}" data-toggle="dropdown" role="button" --}}
                        aria-haspopup="true" aria-expanded="false">
                        Categories
                        <span class="ml-1">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="mega-menu-wrapper">
                        <div class="container">
                            <div class="row">
                                @foreach (\App\Category::all()->random(4) as $key => $category)
                                <div class="col-md-3">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link head font-weight-bold" href="{{ route('products.category', $category->slug) }}">{{$category->name}}</a>
                                            @if($category->has('subcategories'))
                                            @foreach ($category->subcategories as $subcategory)
                                            <a class="nav-link" href="{{route('products.subcategory',$subcategory->slug)}}">{{$subcategory->name}}</a>
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
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4" style=" text-align: center; margin-top: auto; margin-bottom: auto;">
                    <a class="btn" data-toggle="modal" data-target="#searchpopupmodal"><i class="fa fa-search"></i></a>
                </li>
                <!-- Popup Search Modal Anchor Ends -->
            </ul>
        </div>
        {{-- Products List ends --}}


        


        <div class="cart-wishlist desk-nav d-xl-block d-lg-block d-none">
            <ul class="d-flex align-items-center justify-content-between m-0">
                <li>
                    {{-- <a class="nav-link add-on px-xl-2 px-lg-1 px-md-2 px-2" data-toggle="modal" data-target="#nav-cart">
                        <span class="mr-1"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span> 
                        @if(Auth::check())
                            <sup class="cart-items text-white" id="nav-cart-count">{{ count(Auth::user()->carts)}}</sup>
                        @else
                            <sup class="cart-items text-white">0</sup>
                        @endif
                    </a> --}}
                    <a class="nav-link add-on px-xl-2 px-lg-1 px-md-2 px-2" data-toggle="modal" data-target="#nav-cart">
                        <i class="la la-shopping-cart d-inline-block nav-box-icon"></i>
                        <span class="mr-1"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                        @if(Session::has('cart'))
                            <sup class="cart-item text-white" id="nav-cart-count">{{ count(Session::get('cart'))}}</sup>
                        @else
                            <sup class="cart-item text-white" id="nav-cart-count">0</sup>
                        @endif
                    </a>
                </li>
                <li>
                    <a href="{{ route('wishlists.index') }}" class="nav-box-link">
                    {{-- <a class="nav-link add-on px-xl-2 px-lg-1 px-md-2 px-2" data-toggle="modal" data-target="#nav-cart"> --}}
                        <span class="mr-1"><i class="fa fa-heart-o" aria-hidden="true"></i></span> <sup class="cart-items text-white">
                        @if(Auth::check())
                            <span class="nav-box-number" id="nav-wishlist">{{ count(Auth::user()->wishlists)}}</span>
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