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
        <?php $bredcrum_image = \App\Bredcrum::where('page', 'product_list')->where('published', 1)->first(); ?>
        @include('frontend.inc.bredcrum_conditions');
    </div>
    <div class="overlay position-absolute">
        {{-- {{ ($bread_crumb->name) }} --}}
        @if(isset($bread_crumb))
        <div class="title p-4">{{$bread_crumb->name}}</div>
        @elseif(isset($bread_crumbs))
        <div class="title p-4">{{$bread_crumbs->name}}</div>
        @else
        <div class="title p-4">{{__('Products')}}</div>
        @endif
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
                                                <div class="slider" id="range-slider-div" onchange="rangeTest()"></div>
                                                {{-- <div class="slider" id="range-slider-div" > i am</div> --}}
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
                                                    <select class="form-control sortSelect" data-placeholder="{{__('All Brands')}}" name="brand" onchange="filter()">
                                                        <option value="">{{__('All Brands')}}</option>
                                                        @foreach (\App\Brand::all() as $brand)
                                                            <option value="{{ $brand->slug }}" @isset($brand_id) @if ($brand_id == $brand->id) selected @endif @endisset>{{ $brand->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                    <!-- card-group-item.// -->
                                </div>

                            </div>

                            {{-- <div class="col-12">
                                <div class="card-wrapper mb-2">
                                    <div class="card-group-item">
                                        <div class="card-head">
                                            <div class="heading d-flex align-items-center text-center flex-wrap">
                                                <div class="head">
                                                    <h5 class="text-capitalize">{{__('Choose Color')}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="colors_block p-3">
                                            @foreach ($all_colors as $key => $color)
                                            <li>
                                                <input type="radio" id="color-{{ $key }}" name="color" value="{{ $color }}" @if(isset($selected_color) && $selected_color == $color) checked @endif onchange="filter()">
                                                <label style="background: {{ $color }};" for="color-{{ $key }}" data-toggle="tooltip" data-original-title="{{ \App\Color::where('code', $color)->first()->name }}"></label>
                                            </li>
                                        @endforeach
                                        </div>
                                    </div>
                                    <!-- card-group-item.// -->
                                </div>

                            </div> --}}

                            @foreach ($attributes as $key => $attribute)
                            @if (\App\Attribute::find($attribute['id']) != null)
                            <div class="col-12">
                                <div class="card-wrapper mb-2">
                                    <div class="card-group-item">
                                        <div class="card-head">
                                    <div class="heading d-flex align-items-center text-center flex-wrap">
                                    <div class="head">
                                        <h5 class="text-capitalize">{{ \App\Attribute::find($attribute['id'])->name }}</h5>
                                    </div>
                                    </div>
                                    <div class="box-content">
                                        <!-- Filter by others -->
                                        <div class="colors_block p-3">
                                            @if(array_key_exists('values', $attribute))
                                                @foreach ($attribute['values'] as $key => $value)
                                                    @php
                                                        $flag = false;
                                                        if(isset($selected_attributes)){
                                                            foreach ($selected_attributes as $key => $selected_attribute) {
                                                                if($selected_attribute['id'] == $attribute['id']){
                                                                    if(in_array($value, $selected_attribute['values'])){
                                                                        $flag = true;
                                                                        break;
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    @endphp
                                                    <div class="colors_block">
                                                        <label for="attribute_{{ $attribute['id'] }}_value_{{ $value }}" class="color_single">
                                                            <span>{{ $value }}</span>
                                                            <input type="checkbox" id="attribute_{{ $attribute['id'] }}_value_{{ $value }}" name="attribute_{{ $attribute['id'] }}[]" value="{{ $value }}" @if ($flag) checked @endif onchange="filter()">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
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
                                        <li>
                                            <a class="fa fa-exchange" onclick="addToCompare({{ $product->id }})"></a>
                                        </li>
                                    </ul>
                                    @if (! $product->discount == 0)
                                        <span class="product-discount-label">{{$product->discount}}%</span>
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

<form id="rangeForm" action="{{route('rangefilter')}}" method="GET">
    <input type="hidden" name="max_price" id="max_price">
    <input type="hidden" name="min_price" id="min_price">
</form>

@endsection

    <script type="text/javascript">
        function filter(){
            $('#search-form').submit();
        }
        function rangefilter(arg){
            console.log('here');
            $('input[name=min_price]').val(arg[0]);
            $('input[name=max_price]').val(arg[1]);
            filter();
        }
        function rangeTest(){
            let value = document.getElementById('range-slider-div').value;
            document.getElementById('min_price').value = value[0];
            document.getElementById('max_price').value = value[1];
            $('#rangeForm').submit();
            // setTimeout($('#rangeForm').submit(), 4000);
        }

        
    </script>

    <script>
        function mouseUp() {
            alert('hel');
        }

    </script>
