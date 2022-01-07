@extends('frontend.layouts.app')

@section('content')
<!-- Login Register -->
        <div id="login-register-wrapper" class="py-5">
            <div class="container">
                <div class="row justify-content-center align-items-center position-relative">
                    <div class="col-6 col-xl-6 col-lg-6 col-md-7 col-12 register-wrap">
                        <form class="px-xl-5 px-lg-5 px-md-4 px-3 pt-5 pb-2" action="{{ route('register') }}" Method="POST">
                            @csrf
                            <div class="FormLeft text-center">
                                <h1 class="font-weight-bold mb-4">Register</h1>
                                <div class="form-group position-relative mb-4">
                                    <input type="text" value="{{ old('email') }}" placeholder="{{ __('Email') }}" name="email"
                                        class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none bg-transparent"
                                        id="username">
                                    <i class="fa fa-user-o" aria-hidden="true"></i>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <div class="form-group position-relative mb-4">
                                    <input type="text" value="{{ old('name') }}" placeholder="{{ __('Username') }}" name="name"
                                        class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none bg-transparent {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        id="username">
                                    <i class="fa fa-user-o" aria-hidden="true"></i>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group position-relative mb-4">
                                    <input type="password" class="form-control border-top-0 border-right-0 border-left-0 rounded-0
                                                shadow-none bg-transparent{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="{{ __('Password') }}" name="password">
                                    <i class="fa fa-key" aria-hidden="true"></i>
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>

                                <div class="form-group position-relative mb-4">
                                    <input type="password" class="form-control border-top-0 border-right-0 border-left-0 rounded-0
                                                shadow-none bg-transparent" id="password"
                                     class="form-control" placeholder="{{ __('Re-type Password') }}" name="password_confirmation">
                                    <i class="fa fa-key" aria-hidden="true"></i>

                                </div>
                                <div class="row mt-4 mb-4">
                                    <div class="col-md-6">
                                        <div class="form-check text-left">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-xl-right text-lg-right text-center mt-xl-0 mt-lg-0 mt-2">
                                        <a href="#">Forgot Password?</a>
                                    </div>
                                </div>

                                <button type="submit" class="effect anchor-btn px-4">
                                    Register
                                </button>
</form>
                                <p class="text-center mt-4">
                                    Already have an account?
                                    <span>
                                        <a href="{{route('user.login')}}">Login</a>
                                    </span>

                                </p>
                                <div class="row mb-4 px-3 justify-content-center">
                                    <h6 class="mb-xl-0 mb-lg-0 mb-3 mr-2 mt-2">Sign in with</h6>
                                    <div class="social-media d-flex">
                                        <div class="facebook text-center mr-3">
                                            <div class="fa fa-facebook" aria-hidden="true"></div>
                                        </div>
                                        <div class="twitter text-center mr-3">
                                            <div class="fa fa-twitter" aria-hidden="true"></div>
                                        </div>
                                        <div class="linkedin text-center mr-3">
                                            <div class="fa fa-linkedin" aria-hidden="true"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Register Ends -->

@endsection