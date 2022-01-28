@extends('frontend.layouts.app')

@section('content')

<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <?php $bredcrum_image = \App\Bredcrum::where('page', 'change_password')->where('published', 1)->first(); ?>
        @include('frontend.inc.bredcrum_conditions');
    </div>
    <div class="overlay position-absolute">
        <div class="title p-4" href="/profile">{{Auth::user()->name}} > {{__('Change Password')}}</div>
    </div>
</section>
<!-- Breadcrumbs Ends -->
{{-- @if(Session::get('success'))
<div class="alert alert-success">
    {{session::get('success')}}
</div>
@endif --}}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Chnage Password -->
<section id="change-password-wrapper" class="py-3">
    <div class="container">
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
            
            <div class="col-xl-7 col-lg-7 col-md-12 col-12 ">
                <div class="change-password dashboard-content">
                    <form action="{{route('profile.change.password')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="info-title" for="current_password">Old Password <span>*</span></label>
                            <input type="password" name="current_password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" required>
                            @error('current_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="new_password" required>New Password <span>*</span></label>
                            <input type="password" name="new_password" class="form-control unicase-form-control text-input" id="exampleInputPassword1">
                            @error('new_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="confirm_password" required>Confirm Password <span>*</span></label>
                            <input type="password" name="confirm_password" class="form-control unicase-form-control text-input" id="exampleInputPassword1">
                            @error('confirm_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group d-flex justify-content-between align-items-center">
                            <button type="submit" class="effect">Save</button>
                            <a href="#" class="forgot-password">Forgot your Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Chnage Password Ends -->

@endsection