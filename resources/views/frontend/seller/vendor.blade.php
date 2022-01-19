@extends('frontend.layouts.app')

@section('content')

<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <img src="frontend/assets/images/banner/1.png" alt="breadcrumb-image" class="img-fluid">
    </div>
    <div class="overlay position-absolute">
        <div class="title p-4">Vendor Listing</div>
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
                    {{-- <li class="p-3 d-flex align-items-center">
                        <select class="form-control mx-2" name="sort_by" onchange="filter()">
                            <option selected="">Choose a Filter</option>
                            <option value="1" @isset($sort_by) @if ($sort_by == '1') selected @endif @endisset>{{__('Recently Added')}}</option>
                            <option value="2" @isset($sort_by) @if ($sort_by == '2') selected @endif @endisset>{{__('Oldest')}}</option>
                        </select>

                    </li> --}}
                </ul>
            </div>

            @php
                $vendor = App\User::where('user_type', 'seller')->get();
                $seller = App\Seller::where('verification_status', 1)->get()
            @endphp

            @foreach ($seller as $vendors)
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
                            {{-- <div class="category">
                                Category: Medical Supply
                            </div> --}}
               
          
                            {{-- <ul class="d-flex">
                                <li class="mr-1">
                                    <i class="fa fa-star"></i>
                                </li>
                                <li class="mr-1">
                                    <i class="fa fa-star"></i>
                                </li>
                                <li class="mr-1">
                                    <i class="fa fa-star"></i>
                                </li>
                                <li class="mr-1">
                                    <i class="fa fa-star"></i>
                                </li>
                                <li class="mr-1">
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul> --}}
                            {{-- change --}}

                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            {{-- <div class="col-12 text-center mt-4">
                <button type="button" class="effect mx-auto">View More</button>
            </div> --}}
        </div>

    </div>
</section>
<!-- Product Listing Ends -->
<form class="" id="search-form-vendor" action="{{ route('search') }}" method="GET">
    @csrf
</form>
@endsection

<style>
    .vendor img{
    max-height: 120px;
    min-height: 120px;
    object-fit: cover;
    object-position: center;
    width: 100%;
    }
</style>

<script type="text/javascript">
function filter(){
        $('#search-form-vendor').submit();
    }
</script>