@extends('frontend.layouts.app')

@section('title'){{ $detailedProduct->meta_title }}@stop

@section('meta_description'){{ $detailedProduct->meta_description }}@stop

@section('meta_keywords'){{ $detailedProduct->tags }}@stop

@section('meta')
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $detailedProduct->meta_title }}">
    <meta itemprop="description" content="{{ $detailedProduct->meta_description }}">
    <meta itemprop="image" content="{{ asset($detailedProduct->meta_img) }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="{{ $detailedProduct->meta_title }}">
    <meta name="twitter:description" content="{{ $detailedProduct->meta_description }}">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="{{ asset($detailedProduct->meta_img) }}">
    <meta name="twitter:data1" content="{{ single_price($detailedProduct->unit_price) }}">
    <meta name="twitter:label1" content="Price">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $detailedProduct->meta_title }}" />
    <meta property="og:type" content="product" />
    <meta property="og:url" content="{{ route('product', $detailedProduct->slug) }}" />
    <meta property="og:image" content="{{ asset($detailedProduct->meta_img) }}" />
    <meta property="og:description" content="{{ $detailedProduct->meta_description }}" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
    <meta property="og:price:amount" content="{{ single_price($detailedProduct->unit_price) }}" />
@endsection

@section('content')

<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <img src="{{asset('frontend/assets/images/banner/1.png')}}" alt="breadcrumb-image" class="img-fluid">
    </div>
    <div class="overlay position-absolute">
        <a href="/" class="title p-4">{{__('Home')}}>{{$detailedProduct->category->name}}>{{$detailedProduct->subcategory->name}}</a>
    </div>
</section>
<!-- Breadcrumbs Ends -->

    <!-- Product Detail  -->
    <section id="product-detail-wrapper" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6 col-12">
                    <div class="product-carousel">
                        <!-- Swiper and EasyZoom plugins start -->
                        <div class="swiper-container gallery-top" style="height:400px">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide easyzoom easyzoom--overlay">
                                    <a href="#">
                                        @php
                                            $filepath = $detailedProduct->featured_img;
                                        @endphp
                                        @if(isset($filepath))
                                        {{-- <a href="{{ asset($detailedProduct->featured_img) }}"> --}}
                                            <img src="{{asset($detailedProduct->featured_img)}}" alt="slider-image" class="img-fluid">
                                        {{-- </a> --}}
                                        @else
                                            <img src="https://infosecmonkey.com/wp-content/themes/InfoSecMonkey/assets/img/No_Image.jpg" class="img-fluid pic-1">
                                        @endif
                                    </a>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next swiper-button-white"></div>
                            <div class="swiper-button-prev swiper-button-white"></div>
                        </div>
                        <div class="swiper-container gallery-thumbs">
                            <div class="swiper-wrapper">
                                @php
                                    $slide_image = json_decode($detailedProduct->photos,true);
                                @endphp
                                @foreach ($slide_image as $key => $image)
                                <div class="swiper-slide">
                                <a href="{{ asset($image) }}" target="_blank">
                                    <img src="{{asset($image)}}" alt="slider-image" class="img-fluid" data-src="{{ asset($image) }}"  @if($key == 0) xpreview="{{ asset($image) }}" @endif>
                                </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Swiper and EasyZoom plugins end -->
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6 col-12">
                    <div class="d-flex justify-content-center h-100 product-detail flex-column">
                        <div class="about mb-3">
                            {{-- @php
                                $total = 0;
                                $total += $detailedProduct->reviews->count();
                            @endphp --}}
                            @php
                                $total = 0;
                                $rating = 0;
                                $total_review = App\Review::where('product_id', $detailedProduct->id)->get();
                                foreach ($detailedProduct->user->products as $key => $seller_product) {
                                    $total += $seller_product->reviews->count();
                                    $rating += $seller_product->reviews->sum('rating');
                                }
                            @endphp
                            {{-- {{$total_review}}
                            {{$total}}
                            {{$rating}} --}}

                            <div class="p-ratings">
                                <span class="star-rating">
                                    {{-- {{ renderStarRating($detailedProduct->rating) }} --}}
                                @if ($total > 0)
                                    {{ renderStarRating($rating/$total) }}
                                @else
                                    {{ renderStarRating(0) }}
                                @endif
                                
                                </span>
                            </div>

                      
                            <div class="d-flex flex-row align-items-center mb-2">
                                <h1 class="font-weight-bold m-0" name="name">{{__($detailedProduct->name)}}</h1>
                            </div>
                            {{-- <div class="price text-center mb-3"> --}}
                                @if(home_base_price($detailedProduct->id) != home_discounted_base_price($detailedProduct->id))
                                    <del class="old-product-price strong-400">{{ home_base_price($detailedProduct->id) }}</del>
                                @endif
                                {{ home_discounted_base_price($detailedProduct->id) }}
                            {{-- </div> --}}
                        </div>
                        <div class="mt-2">
                            <h5>Description</h5>
                            <p>
                                <?php echo $detailedProduct->description; ?>
                            </p>
                        </div>
                        <form class="product-types" id="option-choice-form">
                            @csrf
                            <input type="hidden" name="id" value="{{ $detailedProduct->id }}">
                            @if (count(json_decode($detailedProduct->colors)) > 0)
                            <div class="form-row w-50">
                                <div class="form-group">
                                    <div class="image-size-wrapper">
                                        <div class="image-select mb-3">
                                            <h5>Color</h5>
                                            <div class="select-image-size">
                                            @foreach (json_decode($detailedProduct->colors) as $key => $color) 
                                                <div class="imagesize" style="background:{{$color}}; border:{{$color}}">
                                                    <input type="radio" id="{{ $detailedProduct->id }}-color-{{ $key }}" name="color" value="{{ $color }}" @if($key == 0) checked @endif style="color:{{$color}};">
                                                </div>
                                            @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            {{-- <div class="form-row w-50">
                                <div class="form-group">
                                    <div class="image-size-wrapper">
                                        <div class="image-select mb-3">
                                            <h5>Color</h5>
                                            <div class="select-image-size">
                                            @php
                                                $item_color = json_decode($detailedProduct->colors,true);
                                            @endphp
                                            @if (empty($item_color))
                                                <p>Colors Not Available</p>
                                            @else
                                            @foreach ($item_color as $key => $color) 
                                                <div class="imagesize" style="background:{{$color}}; border:{{$color}}">
                                                    <input type="radio" id="{{ $detailedProduct->id }}-color-{{ $key }}" name="color" value="{{ $color }}" @if($key == 0) checked @endif style="color:{{$color}};">
                                                </div>
                                            @endforeach
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <?php 
                                $mydata = json_decode($detailedProduct->choice_options,true);
                                $myvalues = Illuminate\Support\Arr::pluck($mydata, 'values');
                            ?>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Size</label>
                                    <select id="size" class="form-control">
                                  <option selected>Choose...</option>
                                  @foreach ($myvalues as $key => $myvalue)
                                        @foreach ($myvalue as $value)        
                                        <option value="{{$value}}">{{$value}}</option>
                                        @endforeach
                                  @endforeach
                                </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="quantity mb-3">
                                        <label>{{__('Quantity')}}</label>
                                        <div>
                                            <input type="number" name="quantity" placeholder="1" />
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            @if ($detailedProduct->current_stock >= 0)
                            <button type="button" class="effect add-to-cart" onclick="addToCart()">
                                {{__('Add to cart')}}</span>
                            </button>
                            <button class="effect buy-now" onclick="buyNow()">
                                {{__('Buy Now')}}
                            </button>
                            @else
                                <button type="button" class="btn btn-styled btn-base-3 btn-icon-left strong-700" disabled>
                                    <i class="la la-cart-arrow-down"></i> {{__('Out of Stock')}}
                                </button>
                            @endif                            
                            {{-- <button class="effect">Add to Cart</button>
                            <button class="effect">Buy Now</button> --}}
                        </form>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">Additional Information</a>
                            <a class="nav-item nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">{{__('Reviews')}}<span>({{ count($total_review) }})</span> </a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active p-3 w-75" id="first" role="tabpanel" aria-labelledby="first-tab">
                            <?php echo $detailedProduct->description; ?>
                            
                            <div class="table-responsive mt-4">
                                <table class="table">
                                    <h4>{{$detailedProduct->name}}</h4>
                                    <tbody>
                                        <tr>
                                            <th>Available Size</th>
                                            <td>
                                                @foreach ($myvalues as $key => $myvalue)
                                                @foreach ($myvalue as $value)        
                                                <span>{{$value}}, </span>
                                                @endforeach
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Material</th>
                                            <td>Silk</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        <div class="tab-pane fade p-3" id="second" role="tabpanel" aria-labelledby="second-tab">
                            <div class="row align-items-center justify-content-center">
                                <!-- people Comments -->
                                <div class="col-xl-8 col-lg-8 col-12 mb-4">
                                    <div class="d-flex people-comment">
                                        
                                        <ul class="comment-wrapper">
                                            @foreach ($detailedProduct->reviews as $key => $review)
                                            <li class="d-flex mb-2 p-4">
                                                <div class="image mr-3">
                                                    @if (isset($review->user->avatar_original))
                                                    <a href="#">
                                                        <img class="img-responsive user-photo" src="{{ asset($review->user->avatar_original) }}">
                                                    </a>
                                                    @else
                                                    <a href="#">
                                                        <img class="img-responsive user-photo" src="https://icon-library.com/images/users-icon-png/users-icon-png-6.jpg">
                                                    </a>
                                                    @endif    
                                                </div>
                                                <div class="media-body">
                                                    <h5>{{ $review->user->name }}</h5>
                                                    <div class="comment-date mb-2">
                                                        <p class="m-0 text-uppercase"> {{ date('d-m-Y', strtotime($review->created_at)) }} </p>
                                                    </div>
                                                    <p>
                                                        {{ $review->comment }}
                                                    </p>
                                                    <!-- Comment Reply -->
                                                    {{-- <ul>
                                                        <li>
                                                            <div class="comment-reply">
                                                                <div class="d-flex">
                                                                    <div class="image mr-3">
                                                                        <a href="#">
                                                                            <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                                                                        </a>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h5>Azar Hank</h5>
                                                                        <div class="comment-date mb-2">
                                                                            <p class="m-0 text-uppercase"> 12 March, 2021 AT 10:50 </p>
                                                                        </div>
                                                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed consequuntur repudiandae, ducimus error animi neque recusandae optio tempora non sequi cupiditate ipsum perspiciatis
                                                                            porro maxime praesentium doloribus amet delectus velit.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul> --}}
                                                    <!-- Comment Reply Ends -->
                                                    {{-- <div class="button">
                                                        <a href="#"> Reply</a>
                                                    </div> --}}
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        
                                    </div>
                                    


                                    @if(count($detailedProduct->reviews) <= 0)
                                            <div class="text-center">
                                                {{ __('There have been no reviews for this product yet.') }}
                                            </div>
                                        @endif
                                </div>
                                <!-- people Comments Ends -->



                                <div class="col-lg-4 col-12 mx-auto">
                                    <!-- User Comment -->
                                    <div class="user-comment py-4 px-3">
                                        @if(Auth::check())
                                            @php
                                                $commentable = false;
                                            @endphp
                                            @foreach ($detailedProduct->orderDetails as $key => $orderDetail)
                                            {{$orderDetail}}
                                                @if($orderDetail->order != null && $orderDetail->order->user_id == Auth::user()->id && $orderDetail->delivery_status == 'delivered' && \App\Review::where('user_id', Auth::user()->id)->where('product_id', $detailedProduct->id)->first() == null)
                                                    @php
                                                        $commentable = true;
                                                    @endphp
                                                @endif
                                            @endforeach
                                            @if ($commentable)
                                        <div class="title mb-3 text-center">
                                            <h2 class="font-weight-bold mb-2">{{__('Add a comment')}}</h2>
                                        </div>
                                        <div class="col-12">
                                            <form action="{{ route('reviews.store') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $detailedProduct->id }}">
                                                <div class="row">
                                                    <div class="col-12 my-2">
                                                        <input type="text" class="form-control rounded-0" placeholder="Name" name="name" value="{{ Auth::user()->name }}" disabled required>
                                                    </div>
                                                    <div class="col-12 my-2">
                                                        <input type="email" class="form-control rounded-0" placeholder="Email address" name="email" value="{{ Auth::user()->email }}" required disabled>
                                                    </div>
                                                    <div class="col-12 my-2">
                                                        <div class="col-text-area d-flex justify-content-center">
                                                            <textarea class="w-100 p-3 rounded-0" placeholder="{{__('Your review')}}" name="comment" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="d-flex justify-content-center mb-4">
                                                            <div class="p-ratings">
                                                                <input type="radio" id="star1" name="rating" value="1" required/>
                                                                <label class="star" for="star1" title="Bad" aria-hidden="true">
                                                                    <i class="fa fa-star"></i>
                                                                </label>
                                                                <input type="radio" id="star2" name="rating" value="2" required/>
                                                                <label class="star" for="star2" title="Good" aria-hidden="true">
                                                                    <i class="fa fa-star"></i>
                                                                </label>
                                                                <input type="radio" id="star3" name="rating" value="3" required/>
                                                                <label class="star" for="star3" title="Very good" aria-hidden="true">
                                                                    <i class="fa fa-star"></i>
                                                                </label>
                                                                <input type="radio" id="star4" name="rating" value="4" required/>
                                                                <label class="star" for="star4" title="Great" aria-hidden="true">
                                                                    <i class="fa fa-star"></i>
                                                                </label>
                                                                <input type="radio" id="star5" name="rating" value="5" required/>
                                                                <label class="star" for="star5" title="Awesome" aria-hidden="true">
                                                                    <i class="fa fa-star"></i>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="button-wrapper mx-auto mb-3">
                                                        <button class="effect px-4" type="submit">{{__('Send')}}</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        @endif
                                        @endif
                                    </div>
                                    <!-- User Comment Ends-->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Product Detail Ends -->





    <!-- Product Listing -->
    <section id="product-listing-wrapper">
        <div class="container">
            <div class="product-lists padding">
                <div class="row">
                    <div class="col-12">
                        <div class="heading d-flex justify-content-center align-items-center text-center mb-3 flex-wrap">
                            <div class="head">
                                <h2>{{('Related Products')}}</h2>
                                {{-- <p>Lorem ipsum dolor sit amet consectetur</p> --}}
                            </div>
                        </div>
                    </div>
                    @php
                        $related_products = filter_products(\App\Product::where('subcategory_id', $detailedProduct->subcategory_id)->where('id', '!=', $detailedProduct->id))->limit(4)->get(); 
                    @endphp
                    @foreach ($related_products as $key => $related_product)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mt-4">
                        <div class="product-grid-item">
                            <div class="product-grid-image">
                                <a href="{{ route('product', $related_product->slug) }}">
                                    @php
                                    $filepath = $related_product->featured_img;
                                    @endphp
                                    @if(isset($filepath))
                                        <img src="{{ asset( $related_product->featured_img) }}" class="img-fluid pic-1"> </a>  
                                    @else
                                        <img src="https://infosecmonkey.com/wp-content/themes/InfoSecMonkey/assets/img/No_Image.jpg" class="img-fluid pic-1">
                                    @endif
                                </a>
                                <ul class="social">
                                    <li>
                                        <a class="fa fa-heart-o addToWishList" data-id="{{ $related_product->id }}"></a>
                                    </li>
                                    <li>
                                        <a class="fa fa-shopping-cart" onclick="showAddToCartModal({{ $related_product->id }})"></a>
                                    </li>
                                    <li>
                                        <a class="fa fa-exchange" onclick="addToCompare({{ $related_product->id }})"></a>
                                    </li>
                                </ul>
                                @if (! $related_product->discount == 0)
                                    <span class="product-discount-label">-{{$related_product->discount}}%</span>
                                @endif
                            </div>
                            <div class="product-content">
                                <h3 class="title text-center">
                                    <a href="#" class="font-weight-bold fix-text">{{$related_product->name}}</a></h3>
                                    <div class="price text-center mb-3">
                                        @if(home_base_price($related_product->id) != home_discounted_base_price($related_product->id))
                                            <del class="old-product-price strong-400">{{ home_base_price($related_product->id) }}</del>
                                        @endif
                                        {{ home_discounted_base_price($related_product->id) }}
                                    </div>
                                <a class="all-deals effect" href="{{ route('product', $related_product->slug) }}">{{__('View Product')}}<i class="fa fa-angle-right icon"></i>
                            </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Product Listing Ends -->
@endsection

<style>
    .p-ratings input[type="radio"] {
        -webkit-appearance: none; 
    }

    .p-ratings input[type="radio"]:checked + label {
        border: 1px solid green;
        border-radius: 50px;
        height: 5px;
    }




</style>