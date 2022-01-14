@extends('frontend.layouts.app')

@section('content')
<section id="banner-categories-wrapper" class="position-relative">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 d-lg-block d-none">
                <ul class="categories-bar border_one pt-2" style="overflow-y: scroll;">
                    @foreach (\App\Category::all()->take(9) as $key => $category)
                    <li class="product_icon d-block px-3" data-id="{{ $category->id }}">
                        <a href="{{ route('products.category', $category->slug) }}" class="sub_icon d-flex justify-content-between">
                            {{$category->name}}
                            <span class="pl-2">
                                <i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        </a>
                        <ul class="sub_menu_list">
                            @if(count($category->subcategories)>0)
                            @foreach ($category->subcategories as $sub)
                            <li>
                                <a href="{{ route('products.subcategory', $category->slug) }}">
                                    <span class="mr-2"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                    {{$sub->name}}
                                </a>
                            </li>
                            @endforeach                                        
                            @endif
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </div>
            
            <div class="col-xl-9 col-lg-9 col-md-12 col-12">
                <div class="slick-slider">

                    @foreach (\App\Slider::where('published', 1)->get() as $key => $slider)
                    <a href ="{{ $slider->link }}"><div class="slick-item position-relative"> <img
                        src="{{ asset($slider->photo) }}" data-src="{{ asset($slider->photo) }}" alt="{{ env('APP_NAME')}} promo"
                            class="img-fluid w-100"> 
                        </div>
                    </a>
                    @endforeach

                    <div class="slick-item position-relative"> <img src="frontend/assets/images/product-images/5.jpg"
                            class="img-fluid w-100"> </div>
                    <div class="slick-item position-relative"> <img src="frontend/assets/images/product-images/6.jpg"
                            class="img-fluid w-100"> </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Banner Categories Slider Ends-->
<!-- Product Listing -->
<section id="product-listing-wrapper" class="position-relative py-5">
    <div class="container">
        <div class="product-lists">
            <div class="row">
                <div class="col-12">
                    <div class="heading d-flex justify-content-between align-items-center flex-wrap">
                        <div class="head">
                            <h2 class="font-weight-bold">{{__('Featured Products')}}</h2>
                            <p>THERE'S SOMETHING FOR EVERYONE</p>
                        </div>
                        <div class="navigator"> <a href="{{ route('products') }}">See all</a> </div>
                    </div>
                </div>
            @php
                $new_products = \App\Product::where('featured', 1)->limit(4)->get();
                $currency = \App\Currency::where('status', 1)->first();
            @endphp
            @foreach ($new_products as $key => $product)

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mt-4">
                    <div class="product-grid-item2">
                        <div class="product-grid-image2">
                             <a href="{{ route('product', $product->slug) }}"> 
                                @php
                                    $filepath = $product->featured_img;
                                @endphp
                                @if(isset($filepath))
                                    <img src="{{ asset( $product->featured_img) }}" alt="No image" data-src="{{ asset($product->thumbnail_img) }}" class="img-fluid pic-1"> </a>  
                                @else
                                    <img src="https://infosecmonkey.com/wp-content/themes/InfoSecMonkey/assets/img/No_Image.jpg" data-src="{{ asset($product->thumbnail_img) }}" class="img-fluid pic-1">
                                @endif
                            <ul class="social">
                                <li>
                                    <a class="fa fa-heart-o addToWishList" data-id="{{ $product->id }}"></a>    
                                </li>
                                <li>
                                    {{-- <a class="fa fa-shopping-cart addToCart" data-id="{{ $product->id }}"></a> --}}
                                    <a class="fa fa-shopping-cart" onclick="showAddToCartModal({{ $product->id }})"></a>
                                </li>
                                <li>
                                    <a href="" class="fa fa-exchange addToCompare" data-id="{{ $product->id }}"></a>
                                </li>
                            </ul> 
                            @if (! $product->discount == 0)
                                <span class="product-discount-label">-{{$product->discount}}%</span>
                            @endif
                            
                            </div>
                        <div class="product-content">
                            <h3 class="title text-center fix-text"> <a href="{{ route('product', $product->slug) }}" class="font-weight-bold">{{$product->name}}</a></h3>
                            <div class="price text-center mb-3"> 
                                @if(home_base_price($product->id) != home_discounted_base_price($product->id))
                                    <del class="old-product-price strong-400">{{ home_base_price($product->id) }}</del>
                                @endif
                                {{ home_discounted_base_price($product->id) }}
                                {{-- {{$currency->symbol}} {{$product->purchase_price}}.00 
                                @if (! $product->discount == 0)
                                    <span>{{$currency->symbol}} {{$product->unit_price}}.00</span>
                                @endif --}}
                                 </div> <a class="all-deals effect"
                                href="{{ route('product', $product->slug) }}">View Product
                                <i class="fa fa-angle-right icon"></i> </a>
                            </div>
                    </div>
                </div>
                @endforeach 
            </div>
        </div>
    </div>
</section>
<!-- Product Listing Ends -->

<!-- Full Ads Banner -->
<section id="full-ads-banner-wrapper" class="position-relative pb-5 pt-2">
    <div class="container-fluid">
        <div class="row">
            @foreach (\App\Banner::where('position', 2)->where('published', 1)->get() as $key => $banner)
            <div class="col-lg-{{ 12/count(\App\Banner::where('position', 2)->where('published', 1)->get()) }}">
                <div class="image">
                    <a href="{{ $banner->url }}" target="_blank" class="banner-container"> 
                        <img src="frontend/assets/images/product-images/5.jpg" class="img-fluid"
                        data-src="{{ asset($banner->photo) }}" alt="{{ env('APP_NAME') }} promo"></a>
                    </div>
            </div>
            @endforeach      
        </div>
    </div>
</section>
<!-- Full Ads Banner Ends -->

<!-- Category -->
{{-- <section id="slider-category-wrapper" class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading d-flex justify-content-between align-items-center flex-wrap">
                    <div class="head">
                        <h2 class="font-weight-bold">Shop By Category</h2>
                        <!-- <p>THERE'S SOMETHING FOR EVERYONE</p> -->
                    </div>
                    <div class="navigator"> <a href="{{ route('categories.all') }}">See all</a> </div>
                </div>
            </div>
        </div>
        <div class="slick-slider-category">
            <div class="slick-item position-relative py-4">
                <a href="product-listing.html">
                    <div class="category_block bg-white">
                        <div class="category_img"> <img
                                src="https://thumbs.dreamstime.com/b/beauty-fashion-model-girl-wearing-sunglasses-black-white-portrait-stylish-76060621.jpg"
                                class="img-fluid W-100" alt="category-image"> </div>
                        <div class="category_content p-1">
                            <h5 class="text-center">Fashion</h5>
                        </div>
                        </div>
                </a>
            </div>
            <div class="slick-item position-relative py-4">
                <a href="product-listing.html">
                    <div class="category_block bg-white">
                        <div class="category_img"> <img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQR7viQy82Ws8M7Jf0D3I_ypsZHrowMHhIU4A&amp;usqp=CAU"
                                class="img-fluid W-100" alt=""> </div>
                        <div class="category_content p-1">
                            <h5 class="text-center">Gaming</h5>
                        </div>
                        </div>
                </a>
            </div>
            <div class="slick-item position-relative py-4">
                <a href="product-listing.html">
                    <div class="category_block bg-white">
                        <div class="category_img"> <img src="https://static-01.daraz.com.np/p/a9826d11f184e443f84a734489315a86.png"
                                class="img-fluid W-100" alt=""> </div>
                        <div class="category_content p-1">
                            <h5 class="text-center">Phone</h5>
                        </div>
                        </div>
                </a>
            </div>
            <div class="slick-item position-relative py-4">
                <a href="product-listing.html">
                    <div class="category_block bg-white">
                        <div class="category_img"> <img src="https://static-01.daraz.com.np/p/92eb940c8d12a886753d33fcddc9b369.jpg"
                                class="img-fluid W-100" alt=""> </div>
                        <div class="category_content p-1">
                            <h5 class="text-center">Cleaning Product</h5>
                        </div>
                        </div>
                </a>
            </div>
            <div class="slick-item position-relative py-4">
                <a href="product-listing.html">
                    <div class="category_block bg-white">
                        <div class="category_img"> <img src="https://static-01.daraz.com.np/p/e48e0f1dd99f68fc6f500250485c9bb0.jpg"
                                class="img-fluid W-100" alt=""> </div>
                        <div class="category_content p-1">
                            <h5 class="text-center">Point & Shoot</h5>
                        </div>
                        </div>
                </a>
            </div>
            <div class="slick-item position-relative py-4">
                <a href="product-listing.html">
                    <div class="category_block bg-white">
                        <div class="category_img"> <img src="https://static-01.daraz.com.np/p/62007f2fd8126820529d311e164fcd91.jpg"
                                class="img-fluid W-100" alt=""> </div>
                        <div class="category_content p-1">
                            <h5 class="text-center">SD Cards</h5>
                        </div>
                        </div>
                </a>
            </div>
            <div class="slick-item position-relative py-4">
                <a href="product-listing.html">
                    <div class="category_block bg-white">
                        <div class="category_img"> <img src="https://static-01.daraz.com.np/p/d99f5d683800cb02fc56d6e0444e858b.jpg"
                                class="img-fluid W-100" alt=""> </div>
                        <div class="category_content p-1">
                            <h5 class="text-center">Tablets</h5>
                        </div>
                        </div>
                </a>
            </div>
        </div>
    </div>
</section> --}}
<!-- Category Ends -->

<!-- Slider Product Listing -->
<section id="slider-product-listing" class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading d-flex justify-content-between align-items-center flex-wrap">
                    <div class="head">
                        <h2 class="font-weight-bold">{{__('Latest Products')}}</h2>
                        <p>{{__(`THERE'S SOMETHING FOR EVERYONE`)}}</p>
                    </div>
                    <div class="navigator"> <a href="{{ route('products') }}">{{__('See all')}}</a> </div>
                </div>
            </div>
        </div>
        <div class="slick-slider-listing">
            @php
                $new_products = \App\Product::latest()->inRandomOrder()
                ->limit(10)->get();
                $currency = \App\Currency::where('status', 1)->first();
            @endphp
            @foreach ($new_products as $key => $product)
            <div class="slick-item position-relative py-4">
                <div class="product-grid-item3 mx-2 bg-white">
                    <div class="product-grid-image3">
                        <a href="{{ route('product', $product->slug) }}"> 
                            @php
                                $filepath = $product->featured_img;
                            @endphp
                            @if(isset($filepath))
                                <img src="{{ asset( $product->featured_img) }}" alt="No Image" data-src="{{ asset($product->thumbnail_img) }}" class="img-fluid pic-1"> </a>  
                            @else
                                <img src="https://infosecmonkey.com/wp-content/themes/InfoSecMonkey/assets/img/No_Image.jpg" data-src="{{ asset($product->thumbnail_img) }}" class="img-fluid pic-1">
                            @endif
                        <ul class="social">
                            <li>
                                <a class="fa fa-heart-o addToWishList" data-id="{{ $product->id }}"></a>
                                {{-- <a href="" class="fa fa-heart-o"></a> --}}
                            </li>
                            <li>
                                {{-- <a class="fa fa-shopping-cart addToCart" data-id="{{ $product->id }}"></a> --}}
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
                        <h3 class="title text-center fix-text"> <a href="product-detail.html" class="font-weight-bold">{{$product->name}}</a></h3>
                        <div class="price text-center mb-3">
                            @if(home_base_price($product->id) != home_discounted_base_price($product->id))
                                <del class="old-product-price strong-400">{{ home_base_price($product->id) }}</del>
                            @endif
                            {{ home_discounted_base_price($product->id) }}
                        </div>
                        <!-- <a class="all-deals effect" href="product-detail.html">View Product <i class="fa fa-angle-right icon"></i> --></a>
                    </div>
                </div>
            </div>                
            @endforeach                    
        </div>
    </div>
</section>
<!-- Slider Product Listing Ends -->
<!-- Testimonial  -->
<section id="testimonial-wrapper" class="position-relative py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading d-flex justify-content-between align-items-center flex-wrap">
                    <div class="head">
                        <h2 class="font-weight-bold text-white">Testimonial</h2>
                        <p class="">WHAT WE HAVE TO SAY !</p>
                    </div>
                    <!-- <div class="navigator">
                        <a href="">See all</a>
                    </div> -->
                </div>
            </div>
            @php
                $story = DB::table('testimonial')->where('status','1')->get();
            @endphp
            <div class="col-lg-8 col-12 mx-auto py-4">
                <div class="slick-slider">
                    @foreach ($story as $testimonial)
                    <div class="slick-item position-relative">
                        <div class="testimonial-content-wrap text-center active m-auto pb-2">
                            <div class="testimonial-image-content d-block d-lg-flex justify-content-center">
                                <div class="image">
                                    @php
                                        $filepath = $testimonial->image;
                                    @endphp
                                    @if(isset($filepath))
                                        <img src="{{ asset( $testimonial->image) }}" alt="No Image" class="m-auto img-fluid"> 
                                    @else
                                        <img src="https://montechbd.com/shopist/demo/public/uploads/1616786115-h-100-1.png" class="m-auto img-fluid">
                                    @endif                       
                                </div>
                                <div class="testimonial-content d-flex flex-column justify-content-center align-items-start ml-3">
                                    <h5 class="testimonial-title font-weight-bold">
                                        {{$testimonial->name}}
                                    </h5>
                                    <p class="dark-text m-0">{{$testimonial->title}}</p>
                                </div>
                            </div>
                            <p class="our-services-text mt-3">
                                {{$testimonial->about}}
                            </p>
                        </div>
                    </div>
                    @endforeach
        </div>
    </div>
</section>
<!-- Testimonial Ends -->
<div class="c-preloader">
    <i class="fa fa-spin fa-spinner"></i>
</div>
<!-- Blog  -->
<section id="blog-wrapper" class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading d-flex justify-content-between align-items-center flex-wrap">
                    <div class="head">
                        <h2 class="font-weight-bold">Our Blogs</h2>
                        <p>THERE'S SOMETHING FOR EVERYONE</p>
                    </div>
                    <div class="navigator"> <a href="">See all</a> </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Content in col -->
            <div class="col-lg-4 col-md-6 col-sm-10 col-12 mx-auto mt-4">
                <div class="blog-content bg-white">
                    <div class="image">
                        <img src="frontend/assets/images/product-images/1.jpg" alt="blog-image" class="img-fluid">
                    </div>
                    <div class="blog-content px-4 py-3">
                        <h5 class="title">
                            Best Place to buy
                        </h5>
                        <p>We are recognized by employers worldwide. Hundreds of qualification facilities have
                            been developed in association with major organizations in almost every industry.
                            That’s why our curriculum is suitable for both trainers
                            and employers.</p>
                        <div class="button-wrapper">
                            <a href="blog-detail.html" class="effect anchor-btn">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content in col ends -->
            <!-- Content in col -->
            <div class="col-lg-4 col-md-6 col-sm-10 col-12 mx-auto mt-4">
                <div class="blog-content bg-white">
                    <div class="image">
                        <img src="frontend/assets/images/product-images/5.jpg" alt="blog-image" class="img-fluid">
                    </div>
                    <div class="blog-content px-4 py-3">
                        <h5 class="title">
                            Your ecommere world
                        </h5>
                        <p>We are recognized by employers worldwide. Hundreds of qualification facilities have
                            been developed in association with major organizations in almost every industry.
                            That’s why our curriculum is suitable for both trainers
                            and employers.</p>
                        <div class="button-wrapper">
                            <a href="blog-detail.html" class="effect anchor-btn">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content in col ends -->
            <!-- Content in col -->
            <div class="col-lg-4 col-md-6 col-sm-10 col-12 mx-auto mt-4">
                <div class="blog-content bg-white">
                    <div class="image">
                        <img src="frontend/assets/images/product-images/6.jpg" alt="blog-image" class="img-fluid">
                    </div>
                    <div class="blog-content px-4 py-3">
                        <h5 class="title">
                            We shape learners into a valuable asset
                        </h5>
                        <p>We are recognized by employers worldwide. Hundreds of qualification facilities have
                            been developed in association with major organizations in almost every industry.
                            That’s why our curriculum is suitable for both trainers
                            and employers.</p>
                        <div class="button-wrapper">
                            <a href="blog-detail.html" class="effect anchor-btn">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content in col ends -->
        </div>
    </div>
</section>
<!-- Blog Ends -->

@endsection