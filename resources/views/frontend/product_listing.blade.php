@extends('frontend.layouts.app')

@if(isset($subsubcategory_id))
    @php
        $meta_title = \App\SubSubCategory::find($subsubcategory_id)->meta_title;
        $meta_description = \App\SubSubCategory::find($subsubcategory_id)->meta_description;
    @endphp
@elseif (isset($subcategory_id))
    @php
        $meta_title = \App\SubCategory::find($subcategory_id)->meta_title;
        $meta_description = \App\SubCategory::find($subcategory_id)->meta_description;
    @endphp
@elseif (isset($category_id))
    @php
        $meta_title = \App\Category::find($category_id)->meta_title;
        
        $meta_description = \App\Category::find($category_id)->meta_description;
    @endphp
@elseif (isset($brand_id))
    @php
        $meta_title = \App\Brand::find($brand_id)->meta_title;
        $meta_description = \App\Brand::find($brand_id)->meta_description;
    @endphp
@else
    @php
        $meta_title = env('APP_NAME');
        $meta_description = \App\SeoSetting::first()->description;
    @endphp
@endif

@section('title'){{ $meta_title }}@stop
@section('meta_description'){{ $meta_description }}@stop

@section('meta')
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $meta_title }}">
    <meta itemprop="description" content="{{ $meta_description }}">

    <!-- Twitter Card data -->
    <meta name="twitter:title" content="{{ $meta_title }}">
    <meta name="twitter:description" content="{{ $meta_description }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $meta_title }}" />
    <meta property="og:description" content="{{ $meta_description }}" />
@endsection

@section('content')

<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <img src="{{asset('frontend/assets/images/banner/1.png')}}" alt="breadcrumb-image" class="img-fluid">
    </div>
    <div class="overlay position-absolute">
        
        <div class="title p-4">{{__('Home')}}>{{ ($bread_crumb->name) }}</div>
    </div>
</section>
<!-- Breadcrumbs Ends -->


<!-- Product Listing -->
<section id="product-listing-wrapper" class="py-5">
    <div class="container">
        <form class="" id="search-form" action="{{ route('search') }}" method="GET">
        <div class="product-lists">
            <div class="row">
            
                <div class="col-xl-3 col-lg-3 col-12">
                    <div class="left-side-wrapper px-4 py-4 d-lg-block d-none">
                        <div class="row">
                            <!-- Content -->
                            <div class="col-12">
                                <div class="card-wrapper mb-2">
                                    <div class="card-group-item">
                                        <div class="card-head">
                                            <div class="heading d-flex align-items-center text-center flex-wrap">
                                                <div class="head">
                                                    <h5 class="text-capitalize">Range</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="filter-content2 mt-3">
                                            <div class="card-body">
                                                <div class="slider" id="range-slider">
                                                </div>
                                            </div>
                                            <!-- card-body.// -->
                                        </div>
                                    </div>
                                    <!-- card-group-item.// -->
                                </div>
                            </div>
                            <!-- Content Ends -->
                            <div class="col-12">
                                <div class="card-wrapper mb-2">
                                    <div class="card-group-item">
                                        <div class="card-head">
                                            <div class="heading d-flex align-items-center text-center flex-wrap">
                                                <div class="head">
                                                    <h5 class="text-capitalize">{{__('Brands')}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                    <!-- card-group-item.// -->
                                </div>

                            </div>
                            <div class="col-12">
                                <div class="card-wrapper mb-2">
                                    <div class="card-group-item">
                                        <div class="card-head">
                                            <div class="heading d-flex align-items-center text-center flex-wrap">
                                                <div class="head">
                                                    <h5 class="text-capitalize">Choose Color</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="colors_block p-3">
                                            <label class="color_single"><small class="round"></small>
                                        <span class=""> Red</span>
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                      </label>
                                            <label class="color_single">
                                        <small class="round bg-warning"></small>
                                        <span> Yellow</span>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                      </label>
                                            <label class="color_single">
                                        <small class="round bg-primary"></small>
                                        <span>Blue</span>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                      </label>
                                            <label class="color_single">
                                        <small class="round bg-success"></small>
                                        <span> Green</span>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                      </label>
                                        </div>
                                    </div>
                                    <!-- card-group-item.// -->
                                </div>

                            </div>
                            <div class="col-12">
                                <div class="card-wrapper mb-2">
                                    <div class="card-group-item">
                                        <div class="card-head">
                                            <div class="heading d-flex align-items-center text-center flex-wrap">
                                                <div class="head">
                                                    <h5 class="text-capitalize">Choose Size</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="colors_block p-3">
                                            <label class="color_single"><span> Small</span>
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                      </label>
                                            <label class="color_single">
                                        <span> Medium</span>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                      </label>
                                            <label class="color_single">
                                        <span>Large</span>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                      </label>
                                            <label class="color_single">
                                        <span> XL</span>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                      </label>
                                            <label class="color_single">
                                        <span> XXL</span>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                      </label>
                                        </div>
                                    </div>
                                    <!-- card-group-item.// -->
                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- Mobile Filter  -->


                    <!-- Button trigger modal -->
                    <button type="button" class="effect d-xl-none d-lg-none d-md-block mb-4" data-toggle="modal" data-target="#leftsidebarfilter">
                                    {{__('Product Filter')}}
                                     <span class="ml-2">
                                         <i class="fa fa-list" aria-hidden="true"></i>
                                        </span>
                        </button>
                    <!-- Mobile Filter Ends -->
                </div>

                <div class="col-xl-9 col-lg-9 col-12 text-center">
                    <ul class="show-filter d-flex justify-content-between align-items-center">
                        <li class="p-3">
                            {{__('Showing all products')}}
                        </li>
                        <li class="p-3 d-flex align-items-center">
                            <select class="form-control sortSelect" data-minimum-results-for-search="Infinity" name="sort_by" onchange="filter()">
                                {{-- <select class="form-control sortSelect" data-minimum-results-for-search="Infinity" name="sort_by" onchange="filter()"> --}}
                                <option>{{__('Choose a Filter')}}</option>
                                <option value="1" @isset($sort_by) @if ($sort_by == '1') selected @endif @endisset>{{__('Newest')}}</option>
                                <option value="2" @isset($sort_by) @if ($sort_by == '2') selected @endif @endisset>{{__('Oldest')}}</option>
                                <option value="3" @isset($sort_by) @if ($sort_by == '3') selected @endif @endisset>{{__('Price low to high')}}</option>
                                <option value="4" @isset($sort_by) @if ($sort_by == '4') selected @endif @endisset>{{__('Price high to low')}}</option>
                            </select>                                                                                                                                             
                        </li>
                    </ul>
                    <div class="row right-side-wrapper">
                        @php
                            $currency = App\Currency::where('status', 1)->first();
                        @endphp
                        @foreach ($products as $key => $product)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4">
                            <div class="product-grid-item">
                                <div class="product-grid-image">
                                    <a href="{{ route('product', $product->slug) }}">
                                        @php
                                        $filepath = $product->featured_img;
                                        @endphp
                                        @if(isset($filepath))
                                            <img src="{{ asset( $product->featured_img) }}" class="img-fluid pic-1"> </a>  
                                        @else
                                            <img src="https://infosecmonkey.com/wp-content/themes/InfoSecMonkey/assets/img/No_Image.jpg" class="img-fluid pic-1">
                                        @endif
                                    </a>
                                    <ul class="social">
                                        <li>
                                            <a class="fa fa-heart-o addToWishList" data-id="{{ $product->id }}"></a>
                                        </li>
                                        <li>
                                            <a class="fa fa-shopping-cart" onclick="showAddToCartModal({{ $product->id }})"></a>
                                        </li>
                                    </ul>
                                    @if (! $product->discount == 0)
                                        <span class="product-discount-label">-{{$product->discount}}%</span>
                                    @endif
                                </div>
                                <div class="product-content">
                                    <h3 class="title text-center fix-text" style="max-height: 38px; min-height: 38px; overflow: hidden;">
                                        <a href="#" class="font-weight-bold">{{$product->name}}</a></h3>
                                        <div class="price text-center mb-3">
                                            @if(home_base_price($product->id) != home_discounted_base_price($product->id))
                                                <del class="old-product-price strong-400">{{ home_base_price($product->id) }}</del>
                                            @endif
                                            {{ home_discounted_base_price($product->id) }}
                                        </div>
                                    <a class="all-deals effect" href="{{ route('product', $product->slug) }}">{{__('View Product')}}<i class="fa fa-angle-right icon"></i>
                                </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</section>
<!-- Product Listing Ends -->

@endsection

    <script type="text/javascript">
        function filter(){
            $('#search-form').submit();
        }
        function rangefilter(arg){
            $('input[name=min_price]').val(arg[0]);
            $('input[name=max_price]').val(arg[1]);
            filter();
        }
    </script>
