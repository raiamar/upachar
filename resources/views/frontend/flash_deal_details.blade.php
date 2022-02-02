@extends('frontend.layouts.app')

@section('content')

<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        @if(isset($flash_deal->banner))
            <img src="{{asset($flash_deal->banner)}}" alt="breadcrumb-image" class="img-fluid">
        @else
            @include('frontend.inc.bredcrum_conditions');
        @endif
    </div>
    <div class="overlay position-absolute">
        <div class="title p-4">{{__('Home')}} > {{ __('Flash Deal') }} > {{$flash_deal->title}}</div>
    </div>
</section>
<!-- Breadcrumbs Ends -->

    @if($flash_deal->status == 1 && strtotime(date('d-m-Y')) <= $flash_deal->end_date)
        <section id="product-listing-wrapper" class="position-relative py-5">
            <div class="container">
                <div class="product-lists">
                <div class="row">
                    @foreach ($flash_deal->flash_deal_products as $key => $product)
                        @php
                            $product = \App\Product::find($product->product_id);
                        @endphp
            
                        @if ($product->published != 0)
                        
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mt-4">
                                <div class="product-grid-item2">

                                        <div class="product-grid-image2">
                                            <a href="{{ route('product', $product->slug) }}"> 
                                               @php
                                                   $filepath = $product->featured_img;
                                               @endphp
                                               @if(isset($filepath))
                                                   <img src="{{ asset( $product->featured_img) }}" alt="{{ $product->name }}" data-src="{{ asset($product->thumbnail_img) }}" class="img-fluid pic-1"> </a>  
                                               @else
                                                   <img src="https://infosecmonkey.com/wp-content/themes/InfoSecMonkey/assets/img/No_Image.jpg" data-src="{{ asset($product->thumbnail_img) }}" class="img-fluid pic-1">
                                               @endif
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
                                           
                                           @php
                                               $flash_deal_discount = \App\FlashDealProduct::where('product_id', $product->id)->get();
                                           @endphp
                                           
                                           @foreach ($flash_deal_discount as $key => $discount)
                                               @if($product->current_stock <= 0)
                                                   <span class="product-discount-label">Out of stock</span>
                                               @elseif ($discount->discount > 0 && $discount->discount_type=='percent')
                                                   <span class="product-discount-label">{{$discount->discount}}% Off</span>
                                               @elseif($discount->discount_type=='amount'  &&  $discount->discount > 0)
                                                   <span class="product-discount-label">Rs{{$discount->discount}} Off</span>
                                               @endif
                                           @endforeach
                                       </div>



                                       <div class="product-content">
                                        <h3 class="title text-center fix-text"> <a href="{{ route('product', $product->slug) }}" class="font-weight-bold">{{$product->name}}</a></h3>
                                        <div class="price text-center mb-3"> 
                                            @if(home_base_price($product->id) != home_discounted_base_price($product->id))
                                                <del class="old-product-price strong-400">{{ home_base_price($product->id) }}</del>
                                            @endif
                                            {{ home_discounted_base_price($product->id) }}
                                             </div> <a class="all-deals effect"
                                            href="{{ route('product', $product->slug) }}">View Product
                                            <i class="fa fa-angle-right icon"></i> </a>
                                        </div>


                                    {{-- this needs to be removed --}}
                                </div>
                            </div>
                            
                        @endif
                    @endforeach
                </div>
            </div>
            </div>
        </section>
    @else
        <div style="background-color:{{ $flash_deal->background_color }}">
            <section class="text-center pt-3">
                <div class="container ">
                    <img src="{{ asset($flash_deal->banner) }}" alt="{{ $flash_deal->title }}" class="img-fit">
                </div>
            </section>
            <section class="pb-4">
                <div class="container">
                    <div class="text-center text-{{ $flash_deal->text_color }}">
                        <h1 class="h3 my-4">{{ $flash_deal->title }}</h1>
                        <p class="h4">{{ __('This offer has been expired.') }}</p>
                    </div>
                </div>
            </section>
        </div>
    @endif
@endsection
