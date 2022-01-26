<div class="modal-body p-4">
    <div class="row no-gutters cols-xs-space cols-sm-space cols-md-space">
        <div class="col-lg-6">
            <div class="product-gal sticky-top d-flex flex-row-reverse">
                @if(is_array(json_decode($product->photos)) && count(json_decode($product->photos)) > 0)
                    <div class="product-gal-img px-2">
                        @php
                            $filepath = $product->featured_img;
                        @endphp
                        {{-- @if (isset($filepath)) --}}
                        <img src="{{ asset($product->featured_img) }}" class="xzoom img-fluid lazyload"
                        src="{{ asset($product->featured_img) }}"
                        data-src="{{ asset(json_decode($product->photos)[0]) }}"
                        xoriginal="{{ asset(json_decode($product->photos)[0]) }}"/>
                        {{-- @else
                        <img src="https://infosecmonkey.com/wp-content/themes/InfoSecMonkey/assets/img/No_Image.jpg" class="xzoom img-fluid lazyload"
                             src="https://infosecmonkey.com/wp-content/themes/InfoSecMonkey/assets/img/No_Image.jpg"
                             data-src="{{ asset(json_decode($product->photos)[0]) }}"
                             xoriginal="{{ asset(json_decode($product->photos)[0]) }}"/>
                        @endif --}}
                        
                    </div>

                    <div class="product-gal-thumb">
                        <div class="xzoom-thumbs">
                            @foreach (json_decode($product->photos) as $key => $photo)
                                <a href="{{ asset($photo) }}">
                                    <img src="{{ asset($photo) }}"
                                         class="xzoom-gallery lazyload"
                                         src="{{ asset($photo) }}" width="80"
                                         data-src="{{ asset($photo) }}"
                                         @if($key == 0) xpreview="{{ asset($photo) }}" @endif>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <div class="col-lg-6">
            <!-- Product description -->
            <div class="product-description-wrapper px-3">
                <!-- Product title -->
                <h2 class="product-title">
                    {{ __($product->name) }}
                </h2>

                @if(home_price($product->id) != home_discounted_price($product->id))

                    <div class="row no-gutters mt-4">
                        <div class="col-4">
                            <div class="product-description-label">{{__('Price')}}:</div>
                        </div>
                        <div class="col-8">
                            <div class="product-price-old">
                                <del>
                                    {{ home_price($product->id) }}
                                    <span>/{{ $product->unit }}</span>
                                </del>
                            </div>
                        </div>
                    </div>

                    <div class="row no-gutters mt-3">
                        <div class="col-4">
                            <div class="product-description-label mt-1">{{__('Discount Price')}}:</div>
                        </div>
                        <div class="col-8 m-auto">
                            <div class="product-price">
                                <strong>
                                    {{ home_discounted_price($product->id) }}
                                </strong>
                                <span class="piece">/{{ $product->unit }}</span>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row no-gutters mt-3">
                        <div class="col-2">
                            <div class="product-description-label">{{__('Price')}}:</div>
                        </div>
                        <div class="col-10 m-auto">
                            <div class="product-price">
                                <strong>
                                    {{ home_discounted_price($product->id) }}
                                </strong>
                                <span class="piece">/{{ $product->unit }}</span>
                            </div>
                        </div>
                    </div>
                @endif

                @if (\App\Addon::where('unique_identifier', 'club_point')->first() != null && \App\Addon::where('unique_identifier', 'club_point')->first()->activated && $product->earn_point > 0)
                    <div class="row no-gutters mt-4">
                        <div class="col-2">
                            <div class="product-description-label">{{ __('Club Point') }}:</div>
                        </div>
                        <div class="col-10">
                            <div class="d-inline-block club-point bg-soft-base-1 border-light-base-1 border">
                                <span class="strong-700">{{ $product->earn_point }}</span>
                            </div>
                        </div>
                    </div>
                @endif

                <hr>

                @php
                    $qty = 0;
                    if($product->variant_product){
                        foreach ($product->stocks as $key => $stock) {
                            $qty += $stock->qty;
                        }
                    }
                    else{
                        $qty = $product->current_stock;
                    }
                @endphp

                <form id="option-choice-form">
                    @csrf
                    <input type="hidden" name="id" value="{{ $product->id }}">

                    <!-- Quantity + Add to cart -->
                    @if($product->digital !=1)
                    @if ($product->choice_options != null)
                    @foreach (json_decode($product->choice_options) as $key => $choice)
                    <div class="form-group col-md-12">
                        <label>{{ \App\Attribute::find($choice->attribute_id)->name }}</label>
                        <select id="size" class="form-control" name="attribute_id_{{ $choice->attribute_id }}">
                      <option selected>Choose...</option>
                            @foreach ($choice->values as $value)        
                            <option value="{{$value}}">{{$value}}</option>
                            @endforeach
                    </select>
                    </div>
                    @endforeach
                @endif



                        @if (count(json_decode($product->colors)) > 0)
                        <div class="row no-gutters">
                            <div class="col-2">
                                <div class="product-description-label mt-2">{{__('Color')}}:</div>
                            </div>
                            <div class="col-10">
                                <ul class="d-flex checkbox-alphanumeric checkbox-alphanumeric--style-1 mb-2">
                                    @foreach (json_decode($product->colors) as $key => $color)
                                        <li style="margin-right:20px">
                                            <div class="imagesize d-flex" style="background:{{$color}}; border:{{$color}}; padding:10px;">
                                                <input type="radio" id="{{ $product->id }}-color-{{ $key }}" name="color" value="{{ $color }}" @if($key == 0) checked @endif style="color:{{$color}};">
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endif

                        <div class="row no-gutters">
                            <div class="col-2">
                                <div class="product-description-label mt-2">{{__('Quantity')}}:</div>
                            </div>
                            <div class="col-10">
                                <div class="product-quantity d-flex align-items-center">
                                    <div class="input-group input-group--style-2 pr-3" style="width: 160px;">
                                        <span class="input-group-btn">
                                        <button class="btn btn-number" type="button" data-type="minus"
                                                    data-field="quantity">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </span>
                                        <input type="text" name="quantity" class="form-control input-number"
                                                 min="1" max="10" placeholder="1">
                                        <span class="input-group-btn">
                                            <button class="btn btn-number" type="button" data-type="plus"
                                                    data-field="quantity">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </span>
                                    </div>
                                    <div class="avialable-amount">(<span
                                            id="available-quantity">{{ $qty }}</span> {{__('available')}})
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>
                    @endif

                    <div class="row no-gutters pb-3 d-none" id="chosen_price_div">
                        <div class="col-2">
                            <div class="product-description-label">{{__('Total Price')}}:</div>
                        </div>
                        <div class="col-10">
                            <div class="product-price">
                                <strong id="chosen_price">

                                </strong>
                            </div>
                        </div>
                    </div>

                </form>

                <div class="d-table width-100 mt-3">
                    <div class="d-table-cell">
                        <!-- Add to cart button -->
                        @if ($product->digital == 1)
                            <button type="button"
                                    class="btn btn-styled btn-alt-base-1 c-white btn-icon-left strong-700 hov-bounce hov-shaddow ml-2 add-to-cart"
                                    onclick="addToCart()">
                                <i class="la la-shopping-cart"></i>
                                {{-- <span class="d-none d-md-inline-block"> {{__('Add to cart')}}</span> --}}
                                <a class="effect anchor-btn">{{__('Add to cart')}}</a>
                            </button>
                        @elseif($qty > 0) 
                            <button type="button"
                                    class="btn btn-styled btn-alt-base-1 c-white btn-icon-left strong-700 hov-bounce hov-shaddow ml-2 add-to-cart"
                                    onclick="addToCart()">
                                <i class="la la-shopping-cart"></i>
                                <a class="effect anchor-btn">{{__('Add to cart')}}</a>
                            </button>
                        @else
                            <button type="button" class="btn btn-styled btn-base-3 btn-icon-left strong-700" disabled>
                                <i class="la la-cart-arrow-down"></i> {{__('Out of Stock')}}
                            </button>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    cartQuantityInitialize();
    $('#option-choice-form input').on('change', function () {
        getVariantPrice();
    });
</script>
