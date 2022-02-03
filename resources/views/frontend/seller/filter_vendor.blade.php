@extends('frontend.layouts.app')

@section('content')


<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <?php $bredcrum_image = \App\Bredcrum::where('page', 'vendor')->where('published', 1)->first(); ?>
        @include('frontend.inc.bredcrum_conditions');
    </div>
    <div class="overlay position-absolute">
        <div class="title p-4">{{__('Home')}} > {{__('Vendor Listing')}}</div>
    </div>
</section>
<!-- Breadcrumbs Ends -->


<!-- Product Listing -->
<section id="vendor-listing-wrapper" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <ul class="show-filter d-flex justify-content-between align-items-center">
                    <li class="p-3">
                        {{__('Showing all Vendors')}}
                    </li>
                    <form class="" id="search-form-vendor-location" action="{{ route('filter.sellers') }}" method="GET">
                        {{-- @csrf --}}
                    
                    <li class="p-3 d-flex align-items-center">
                        <select class="form-control mx-2" name="shop_location" onchange="filter_location()">
                            <option selected="">Choose location</option>
                            @foreach ($locations as $location)
                                <option value="{{$location->name}}" @isset($shop_location) @if ($shop_location == '{{$location->name}}') selected @endif @endisset>{{$location->state}} > {{$location->name}}</option>
                            @endforeach
                        </select>
                    </li>
                </form>
                </ul>
            </div>

            @if($vendor->isNotEmpty())
            @foreach ($vendor as $vendors)
            <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-4">
                <a href="{{ route('shop.visit', $vendors->user->shop->slug) }}">
                    <div class="vendor-wrap d-flex align-items-center">
                        <div class="vendor">
                                @php
                                    $filepath = $vendors->user->shop->logo;
                                @endphp
                                @if(isset($filepath))
                                <div class="test">
                                    <img 
                                    src="{{ asset($vendors->user->shop->logo) }}"
                                    alt="{{ $vendors->user->shop->name }}"
                                    class="img-fluid pic-1"> 
                                </div>
                                @else
                                    <img src="https://infosecmonkey.com/wp-content/themes/InfoSecMonkey/assets/img/No_Image.jpg" class="img-fluid pic-1">
                                @endif
                        </div>
                        <div class="vendor-content ml-3">
                            <label for="name" class="m-0 font-weight-bold">{{$vendors->user->shop->name}}</label>
                            <div class="category">
                                <?php $address = $vendors->user->shop->shop_location ?>
                                @if(isset($address))
                                    <?php $location = explode('!!', $address) ?>
                                    Address: <?php echo implode(", ",$location); ?>
                                @else
                                    Address: {{__('N/A')}}
                                @endif
                            </div>

                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            @else
            <div class="search_message">
                <h6>No search result found</h6>
            </div>
            @endif
            
            {{-- <div class="col-12 text-center mt-4">
                <button type="button" class="effect mx-auto">View More</button>
            </div> --}}
        </div>

    </div>
</section>
<!-- Product Listing Ends -->

@endsection

<style>
    .vendor img{
    max-height: 120px;
    min-height: 120px;
    object-fit: cover;
    object-position: center;
    width: 100%;
    }
    div.search_message{
        text-align: center;
        color:red;
        width: 100%;
    }
</style>

<script type="text/javascript">
function filter_location(){
        $('#search-form-vendor-location').submit();
    }
</script>