@extends('frontend.layouts.app')

@section('content')

<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <?php $bredcrum_image = \App\Bredcrum::where('page', 'profile')->where('published', 1)->first(); ?>
        @include('frontend.inc.bredcrum_conditions');
    </div>
    <div class="overlay position-absolute">
        <a class="title p-4" href="/">{{__('Home')}} > {{Auth::user()->name}}</a>
    </div>
</section>
<!-- Breadcrumbs Ends -->

<!-- Profile -->
<section id="profile-wrapper" class="py-3">
    <div class="container">
        <form action="{{ route('customer.profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row py-xl-5 py-md-3 py-0">
            <div class="col-xl-3 col-lg-3 col-md-12 col-12 mb-xl-0 mb-lg-0 mb-3">
                @if(Auth::user()->user_type == 'seller')
                    @include('frontend.inc.seller_side_nav')
                @elseif(Auth::user()->user_type == 'customer')
                    @include('frontend.inc.customer_side_nav')
                @endif
                <!-- Mobile Profile Nav -->
                <div class="mobile-profile-nav d-lg-none d-flex flex align-items-center h-100 " data-toggle="modal"
                    data-target="#profilemobilenav">
                    <button class="effect">
                        <span class="mr-2"><i class="fa fa-tachometer" aria-hidden="true"></i></span> Dashboard Menu
                    </button>
            </div>
            <!-- Mobile Profile Nav Ends-->
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-12">
                <div class="profile-side-detail-edit">
                    <div class="dashboard-content d-flex align-items-center h-100">
                        <div class="submit-section">
                            <h4 class="font-weight-bold mb-3">{{__('Account')}}</h4>
                            <div class="form-row">
                                <div class="form-group col-md-6 mb-4"><label>{{__('Your Name')}}</label>
                                    <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                                </div>
                                <div class="form-group col-md-6 mb-4">
                                    <label>{{__('Email')}}</label>
                                    <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" disabled>
                                </div>
                                <div class="form-group col-md-6 mb-4">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->phone }}" placeholder="+977-9825980046" name="phone">
                                </div>
                                <div class="form-group col-md-6 mb-4">
                                    <label>{{__('Address')}}</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->address }}" placeholder="Nepal, Kathmandu" name="address">
                                </div>
                                {{-- <div class="form-group col-md-6 mb-4">
                                    <label>Date of Birth</label>
                                    <input type="text" class="form-control" value="1998-01-21">
                                </div> --}}
                                <div class="form-group col-md-6 mb-4">
                                    <label>{{__('City')}}</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->city }}" placeholder="Kathmandu" name="city">
                                </div>
                                <div class="form-group col-md-6 mb-4">
                                    <label>{{__('Postal Code')}}</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->postal_code }}" placeholder="4406" name="postal_code">
                                </div>

                                {{-- <div id="password-update" class="form-row"> --}}
                                    {{-- <div class="form-group col-md-6 mb-4">
                                        <label>{{__('New Password')}}</label>
                                        <input type="password" class="form-control" placeholder="{{__('New Password')}}" name="new_password">
                                    </div>
                                    <div class="form-group col-md-6 mb-4">
                                        <label>{{__('Confirm Password')}}</label>
                                        <input type="password" class="form-control" placeholder="{{__('Confirm Password')}}" name="confirm_password">
                                    </div> --}}
                                </div>
                                <div class="form-group col-12 mx-auto text-center">
                                    <button class="effect px-5" type="submit">{{__('Save')}}</button>
                                </div>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    </div>
</section>
<!-- Profile Ends -->


@endsection