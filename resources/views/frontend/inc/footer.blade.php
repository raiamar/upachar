     <!-- Footer -->
     <section id="footer-wrapper" class="text-white pt-5 pb-3">
        <div class="container">
            @php
                $generalsetting = \App\GeneralSetting::first();
            @endphp
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-2">
                    <div class="image">
                        <a href="/"> 
                            @if($generalsetting->logo != null)
                                <img src="{{ asset($generalsetting->logo) }}" alt="{{ env('APP_NAME') }}">
                            @else
                                <img src="{{ asset('frontend/assets/images/logo/3.png') }}" alt="{{ env('APP_NAME') }}" class="img-fluid">
                            @endif
                        </a>
                    </div>
                    <div class="content mt-3">
                        <p class="text-white font-weight-normal m-0">
                            {{$generalsetting->description}}
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-2">
                    <ul class="footer-nav-list">
                        <div class="heading">
                            <div class="head">
                                <a href="">
                                    <h2 class="mb-3">{{__('Quick Links')}}</h2>
                                </a>
                            </div>
                        </div>
                        <li>
                            <a href="/">{{__('Home')}}</a></h5>
                        </li>
                        <li>
                            <a href="{{route('products')}}">{{__('Products')}}</a></h5>
                        </li>
                        {{-- <li>
                            <a href="dashboard-cart.html">{{__('Cart')}}</a></h5>
                        </li> --}}
                        <li>
                            <a href="/contact">{{__('Contact Us')}}</a></h5>
                        </li>
                        <li>
                            <a href="{{route('about.us')}}">{{__('About Us')}}</a></h5>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-2">
                    <ul class="footer-nav-list">
                        <div class="heading">
                            <div class="head">
                                <a href="">
                                    <h2 class="mb-3">{{__('Find Us')}}</h2>
                                </a>
                            </div>
                        </div>
                        <li>
                            <a href=" mailto:webmaster@example.com"><span class="mr-2"><i class="fa fa-envelope-square"
                                        aria-hidden="true"></i></span>{{$generalsetting->email}}</a>
                            </h5>
                        </li>
                        <li>
                            <a href="tel:+4733378901"><span class="mr-2"><i class="fa fa-phone" aria-hidden="true"></i></span>{{$generalsetting->phone}}</a></h5>
                        </li>
                        <li>
                            <a href=""><span class="mr-2"><i class="fa fa-map" aria-hidden="true"></i></span>{{$generalsetting->address}}</a></h5>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <ul class="footer-nav-list">
                        <div class="heading">
                            <div class="head">
                                <a href="">
                                    <h2 class="mb-3">Follow Us</h2>
                                </a>
                            </div>
                        </div>
                        <li>
                            <a href="{{$generalsetting->facebook}}"><span class="mr-2"><i class="fa fa-facebook-official" aria-hidden="true"></i></span>Facebook</a>
                            </h5>
                        </li>
                        <li>
                            <a href="{{$generalsetting->instagram}}"><span class="mr-2"><i class="fa fa-instagram" aria-hidden="true"></i></span>Instagram</a></h5>
                        </li>
                        <li>
                            <a href="{{$generalsetting->google_plus}}"><span class="mr-2"><i class="fa fa-google" aria-hidden="true"></i></span>Google</a></h5>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Ends -->