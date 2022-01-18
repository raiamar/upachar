@extends('frontend.layouts.app')

@section('content')
    <!-- Login Register -->
    <div id="login-register-wrapper" class="py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center position-relative">                
                <div class="col-xl-5 col-lg-5 col-md-7 col-12 login-wrap">
                    <form class="px-xl-5 px-lg-5 px-md-4 px-3 pt-5 pb-2" role="form" action="{{ route('login') }}" method="POST">
                        @csrf
                        @if (\App\Addon::where('unique_identifier', 'otp_system')->first() != null && \App\Addon::where('unique_identifier', 'otp_system')->first()->activated)
                            <span>{{ __('Use country code before number') }}</span>
                        @endif
                        <div class="FormLeft text-center">
                            <h1 class="font-weight-bold mb-4">{{__('Login')}}</h1>
                            <div class="form-group position-relative mb-4">
                                @if (\App\Addon::where('unique_identifier', 'otp_system')->first() != null && \App\Addon::where('unique_identifier', 'otp_system')->first()->activated)
                                    <input type="text" class="form-control form-control-sm {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{__('Email Or Phone')}}" name="email" id="email">
                                @else
                                <input type="text"
                                    class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none bg-transparent{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email"
                                     value="{{ old('email') }}" placeholder="{{ __('Email') }}" name="email">
                                <i class="fa fa-user-o" aria-hidden="true"></i>
                                @endif
                            </div>

                            <div class="form-group position-relative mb-4">
                                <input type="password" class="form-control border-top-0 border-right-0 border-left-0 rounded-0
                                            shadow-none bg-transparent {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{__('Password')}}" name="password" id="password">
                                <i class="fa fa-key" aria-hidden="true"></i>

                            </div>
                            <div class="row mt-4 mb-4">
                                <div class="col-md-6">
                                    <div class="form-check text-left">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="defaultCheck1">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 text-xl-right text-lg-right text-center mt-xl-0 mt-lg-0 mt-2">
                                    <a href="{{ route('password.request') }}">{{__('Forgot password?')}}</a>
                                </div>
                            </div>

                            <button class="effect anchor-btn" type="submit">
                                {{ __('Login') }}
                            </button>

                            <p class="text-center mt-4">
                                Don't have an account?
                                <span>
                                    <a href="{{route('user.registration')}}">{{__('Register')}}</a>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Register Ends -->
@endsection

@section('script')
    <script type="text/javascript">
        function autoFillSeller(){
            $('#email').val('seller@example.com');
            $('#password').val('123456');
        }
        function autoFillCustomer(){
            $('#email').val('customer@example.com');
            $('#password').val('123456');
        }
    </script>
@endsection
