@extends('frontend.layouts.app')

@section('content')
        <!-- Vendor Profile -->
        <section id="vendor-profile-wrapper">
            <div class="col-xl-12 col-lg-6 col-md-12 col-12">
                <div class="slick-slider">
                    @if($shop->sliders != null)
                    @foreach(json_decode($shop->sliders) as $key => $slider)
                    <img src="{{asset($slider)}}" class="img-fluid" alt="vendor-banner-image">
                    @endforeach
                    @endif
                </div>
            </div>
            <div class="container custom-container">
                <div class="row pb-5">
                    <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12 p-0">
                        <div class="vendor-profile-content">
                            <div class="container">
                                <div class="row">
                                    <div class="sidebarcus col-xl-11 col-lg-11 col-md-12 mx-auto">
                                        <div class="profile-side-detail-edit mb-3">
                                            <div class="dashboard-content d-flex align-items-center h-100">
                                                <div class="d-user-avater">
                                                    @php
                                                        $filepath = $shop->logo;
                                                    @endphp
                                                    <div class="image position-relative d-flex mb-1">
                                                        @if(isset($filepath))
                                                        <img src="{{asset($shop->logo)}}" class="img-fluid avater" alt="profile-image">
                                                        @else
                                                        <img src="https://infosecmonkey.com/wp-content/themes/InfoSecMonkey/assets/img/No_Image.jpg" class="img-fluid pic-1">
                                                        @endif
                                                    </div>
                                                    <div class="content text-center">
                                                        <h5 class="font-weight-bold m-0">{{$shop->name}} <span class="ml-2"><i class="fa fa-check" aria-hidden="true"></i></span> </h5>
                                                        <!-- <div class="category">
                                Category: <span class="ml-1">  Health & Fitness</span>
                            </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sidebarcus col-xl-12 col-lg-12 col-md-6 mt-xl-0 mt-lg-0 mt-md-5 mt-5">
                                        <div class="sidebar-contents mb-xl-5 mb-lg-5 mb-3">
                                            <div class="title">
                                                <h5 class="mb-0"> {{__('Shop Location')}}</h5>
                                            </div>
                                            <div class="card border-0">
                                                @if (isset($shop->location))
                                                <iframe src="{{$shop->location}}" style="border:0;" allowfullscreen="" loading="lazy"></iframe>  
                                                @else
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15905.097732956485!2d85.32549341514847!3d27.71570751415664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1640345157005!5m2!1sen!2snp" style="border:0;" allowfullscreen=""
                                                    loading="lazy"></iframe> 
                                                @endif    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebarcus col-xl-12 col-lg-12 col-md-6 mt-xl-0 mt-lg-0 mt-md-5 mt-1">
                                        <div class="sidebar-contents mb-xl-5 mb-lg-5 mb-3">
                                            <div class="title">
                                                <h5 class="mb-0"> Contact Us</h5>
                                            </div>
                                            <div class="card border-0">
                                                <form class="contact-form" method="post" action="{{route('contac.seller', ['slug' => $shop->slug])}}">
                                                    @csrf
                                                    <input type="hidden" name="vendor" value="{{$shop->name}}">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" name="name" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" name="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input type="text" class="form-control" name="phone">
                                                    </div>
                                                    <div class="form-group text-center">
                                                        <button class="effect px-5">Send</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12 mt-4">
                        <div class="dashboard-rightsidebar my-3">
                            <div class="vendor-contact-info">
                                <ul class="social-links d-flex align-items-center pl-0">
                                    <h6 class="mb-0 mr-2">Follow Us On:</h6>
                                    <li class="logo-bg">
                                        <a href="https://{{$shop->facebook}}" class="text-white"><i class="fa fa-facebook" aria-hidden="true" target="_blank"></i></a>
                                    </li>
                                    <li class="logo-bg ml-3">
                                        <a href="https://{{$shop->google}}" class="text-white"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="logo-bg ml-3">
                                        <a href="https://{{$shop->youtube}}" class="text-white"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="logo-bg ml-3">
                                        <a href="https://{{$shop->twitter}}" class="text-white"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <form class="" id="search-form-index" action="{{ route('search') }}" method="GET">
                            <ul class="sidebar vendor-rightside-nav d-flex justify-content-between align-items-center flex-wrap py-2 mt-4">
                                <li class="">
                                    Showing all products
                                </li>
                                <li class="d-flex align-items-center">
                                    {{-- <select class="form-control mr-2">
                                        <option selected>Choose a Category</option>
                                        <option>Alphabetically</option>
                                        <option>Price High to Low</option>
                                        <option>Recently Added</option>
                                        <option>MOstly Purchased</option>
                                      </select>
                                    <select class="form-control filter mr-2">
                                     <option selected>Filter</option>
                                        <option>Alphabetically</option>
                                        <option>Price High to Low</option>
                                        <option>Recently Added</option>
                                        <option>MOstly Purchased</option>
                                      </select> --}}
                             
                                </li>
                            </ul>
                        </div>
                        </form>
                        @php
                            $id = $shop->user_id;
                            $product = App\Product::where('user_id', $id)->get();
                        @endphp
                        <!-- Product Listing -->
                        <section id="product-listing-wrapper" class="py-5">
                            <div class="container">
                                <div class="product-lists">
                                    <div class="row right-side-wrapper">
                                        @foreach ($product as $products)

                                        
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 mt-4 post">
                                            

                                            <div class="product-grid-item2">
                                                <div class="product-grid-image2">
                                                    <a href="{{ route('product', $products->slug) }}"> @php
                                                        $filepath = $products->featured_img;
                                                    @endphp
                                                    @if(isset($filepath))
                                                        <img src="{{ asset( $products->featured_img) }}" alt="No Image" data-src="{{ asset($products->thumbnail_img) }}" class="img-fluid pic-1"> </a>  
                                                    @else
                                                        <img src="https://infosecmonkey.com/wp-content/themes/InfoSecMonkey/assets/img/No_Image.jpg" data-src="{{ asset($products->thumbnail_img) }}" class="img-fluid pic-1">
                                                    @endif
                                                    <ul class="social">
                                                        <li>
                                                            <a class="fa fa-heart-o addToWishList" data-id="{{ $products->id }}"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-shopping-cart" onclick="showAddToCartModal({{ $products->id }})"></a>
                                                        </li>
                                                        {{-- <li>
                                                            <a href="" class="fa fa-exchange"></a>
                                                        </li> --}}
                                                    </ul>
                                                    @if (! $products->discount == 0)
                                                            <span class="product-discount-label">-{{$products->discount}}%</span>
                                                        @endif
                                                </div>
                                                <div class="product-content">
                                                    <h3 class="title text-center fix-text"> <a href="products-detail.html" class="font-weight-bold">{{$products->name}}</a></h3>
                                                    <div class="price text-center mb-3">
                                                        @if(home_base_price($products->id) != home_discounted_base_price($products->id))
                                                            <del class="old-products-price strong-400">{{ home_base_price($products->id) }}</del>
                                                        @endif
                                                        {{ home_discounted_base_price($products->id) }}
                                                    </div> 
                                                    <a class="all-deals effect" href="{{ route('product', $products->slug) }}">View Product <i class="fa fa-angle-right icon"></i>    </a> </div>
                                            </div>
                                            
                                        </div>
                                        @endforeach
                                        {{-- <div class="col-12 text-center">
                                            <button type="button" class="effect mx-auto mt-4">View More</button>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Product Listing Ends -->
                    </div>
                </div>
            </div>
        </section>



        <section id="product-listing-wrapper" class="position-relative py-5 bg-light">
            <div class="container">
                <div class="product-lists">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading d-flex justify-content-between align-items-center flex-wrap">
                                <div class="head">
                                    <h2 class="font-weight-bold">Shop All New Imports</h2>
                                    <p>THERE'S SOMETHING FOR EVERYONE</p>
                                </div>
                                <div class="navigator"> <a href="{{ route('products') }}">See all</a> </div>
                            </div>
                        </div>
                        @php
                            $user_id = $shop->user_id;
                            $products = App\Product::where('user_id', $user_id)->latest()->limit(4)->get();
                        @endphp
                        @foreach ($products as $product)
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mt-4">
                            <div class="product-grid-item2">
                                <div class="product-grid-image2">
                                    <a href="{{ route('product', $product->slug) }}">
                                    @php
                                        $filepath = $product->featured_img;
                                    @endphp
                                    @if(isset($filepath))
                                        <img src="{{ asset( $product->featured_img) }}" alt="No Image" data-src="{{ asset($product->thumbnail_img) }}" class="img-fluid pic-1"> </a>  
                                    @else
                                        <img src="https://infosecmonkey.com/wp-content/themes/InfoSecMonkey/assets/img/No_Image.jpg"  class="img-fluid pic-1">
                                    @endif
                                    <ul class="social">
                                        <li>
                                            <a class="fa fa-heart-o addToWishList" data-id="{{ $product->id }}"></a>
                                        </li>
                                        <li>
                                            <a class="fa fa-shopping-cart" onclick="showAddToCartModal({{ $product->id }})"></a>
                                        </li>
                                        <li>
                                            <a href="" class="fa fa-exchange"></a>
                                        </li>
                                    </ul>
                                    @if (! $product->discount == 0)
                                        <span class="product-discount-label">-{{$product->discount}}%</span>
                                    @endif
                                </div>
                                <div class="product-content">
                                    <h3 class="title text-center"> <a href="#" class="font-weight-bold">{{$product->name}}</a></h3>
                                    <div class="price text-center mb-3">
                                        @if(home_base_price($product->id) != home_discounted_base_price($product->id))
                                            <del class="old-products-price strong-400">{{ home_base_price($product->id) }}</del>
                                        @endif
                                        {{ home_discounted_base_price($product->id) }}
                                    </div><a class="all-deals effect" href="{{ route('product', $product->slug) }}">View Product <i class="fa fa-angle-right icon"></i>    </a> </div>
                            </div> 
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <!--Vendor Profile Ends -->

@endsection


<script type="text/javascript">
    function filter(){
        $('#search-form-index').submit();
    }
</script>    