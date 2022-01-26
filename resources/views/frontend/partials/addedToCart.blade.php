<div class="modal-body p-4 added-to-cart">
    <div class="text-center text-success">
        <i class="fa fa-check"></i>
        <h3>{{__('Item added to your cart!')}}</h3>
    </div>
    <div class="product-box">
        <div class="block">
            <div class="block-image">
                @php
                    $filepath = $product->featured_img;
                @endphp
                @if(isset($filepath))
                    <img src="{{ asset($product->featured_img) }}" class="lazyload" alt="{{ $product->name }}" style="width:100%; max-height: 300px;min-height: 300px; object-fit:cover; object-position:center;"> 
                @else
                    <img src="https://infosecmonkey.com/wp-content/themes/InfoSecMonkey/assets/img/No_Image.jpg" data-src="{{ asset($product->thumbnail_img) }}" class="img-fluid pic-1">
                @endif
            </div>
            <div class="block-body py-2">
                <h6 class="strong-600">
                    {{ __($product->name) }}
                </h6>
                <div class="row align-items-center no-gutters mt-2 mb-2">
                    <div class="col-sm-2">
                        <div>{{__('Price')}}:</div>
                    </div>
                    <div class="col-sm-10">
                        <div class="heading-6 text-danger">
                            <strong>
                                {{ single_price(($data['price']+$data['tax'])*$data['quantity']) }}
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a class="effect anchor-btn text-white" data-dismiss="modal">{{__('Back to shopping')}}</a>
        <a href="{{ route('cart') }}" class="effect anchor-btn">{{__('Proceed to Checkout')}}</a>
    </div>
</div>
