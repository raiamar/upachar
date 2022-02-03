<!DOCTYPE html>
@if(\App\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
<html dir="rtl" lang="en">
@else
<html lang="en">
@endif
<head>

@php
    $seosetting = \App\SeoSetting::first();
@endphp
<head>


    @php
    $seosetting = \App\SeoSetting::first();
@endphp

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="index, follow">
<title>@yield('meta_title', Config::get('app.name'))</title>
<meta name="description" content="@yield('meta_description', $seosetting->description)" />
<meta name="keywords" content="@yield('meta_keywords', $seosetting->keyword)">
<meta name="author" content="{{ $seosetting->author }}">
<meta name="sitemap_link" content="{{ $seosetting->sitemap_link }}">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<meta http-equiv="Content-Security-Policy" content="block-all-mixed-content">


<meta name="csrf-token" content="{{ csrf_token() }}">
@yield('meta')

@if(!isset($detailedProduct))
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ config('app.name', 'Laravel') }}">
    <meta itemprop="description" content="{{ $seosetting->description }}">
    <meta itemprop="image" content="{{ asset(\App\GeneralSetting::first()->logo) }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="{{ config('app.name', 'Laravel') }}">
    <meta name="twitter:description" content="{{ $seosetting->description }}">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="{{ asset(\App\GeneralSetting::first()->logo) }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ config('app.name', 'Laravel') }}" />
    <meta property="og:type" content="Ecommerce Site" />
    <meta property="og:url" content="{{ route('home') }}" />
    <meta property="og:image" content="{{ asset(\App\GeneralSetting::first()->logo) }}" />
    <meta property="og:description" content="{{ $seosetting->description }}" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
@endif


{{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}

<!-- Favicon -->
<link type="image/x-icon" href="{{ asset(\App\GeneralSetting::first()->favicon) }}" rel="shortcut icon" />


    {{-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upachar Pharmacy</title> --}}
    <!-- Bootstrap link Starts -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/bootstrap-4.3.1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/bootstrap-4.3.1/css/bootstrap.min.css.map') }}">
    {{-- <link type="text/css" href="{{ asset('frontend/css/sweetalert2.min.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard-responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard-two.css') }}">

    <!-- Bootstrap link Ends -->
    <!-- Font Awesome Link Starts -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!-- Font Awesome Link Ends -->
    <!-- Slick Css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/slick/slick-theme.css') }}">
    <!-- Slick Css Ends-->
    <!-- Custom Links -->
    <!-- Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700;800&family=DM+Serif+Display:ital@0;1&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700&family=Vidaloka&display=swap"
        rel="stylesheet">
    <!-- Font Link Ends -->
    <link rel="stylesheet" href="https://k1ngzed.com/dist/swiper/swiper.min.css" />
    <link rel="stylesheet" href="https://k1ngzed.com/dist/EasyZoom/easyzoom.css" />
    <!-- Bootstrap range slider -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/bootstrap-range-slider-js/css/bootstrap-slider.min.css')}}">
    <!-- Bootstrap range slider Ends -->
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/toastr/toastr.min.css') }}">
    <!-- Toastr Ends -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link href="{{ asset('frontend/assets/css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <link type="text/css" href="{{ asset('frontend/css/jssocials.css') }}" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    <link type="text/css" href="{{ asset('frontend/css/jssocials-theme-flat.css') }}" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    <!-- Custom Links Ends -->
    <link type="text/css" href="{{ asset('frontend/css/sweetalert2.min.css') }}" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" /> --}}
    @if(\App\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
     <!-- RTL -->
    <link type="text/css" href="{{ asset('frontend/css/active.rtl.css') }}" rel="stylesheet" media="all">
@endif

@if (\App\BusinessSetting::where('type', 'google_analytics')->first()->value == 1)
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('TRACKING_ID') }}"></script>

    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', '{{ env('TRACKING_ID') }}');
    </script>
@endif

@if (\App\BusinessSetting::where('type', 'facebook_pixel')->first()->value == 1)
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', {{ env('FACEBOOK_PIXEL_ID') }});
  fbq('track', 'PageView');
</script>
<noscript>
  <img height="1" width="1" style="display:none"
       src="https://www.facebook.com/tr?id={{ env('FACEBOOK_PIXEL_ID') }}/&ev=PageView&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
@endif

{{-- new added code --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>



<body onload="myFunction()">
    <div id="loading"></div>
    <!-- Whole Body Wrapper Starts -->
    <section id="index-wrapper">
        <section id="top-ads-wrapper">
            <div class="alert alert-dismissible fade show position-relative border-0 m-0 p-0" role="alert">
                <div class="mb-4">
                    <div class="container">
                        <div class="row gutters-10">
                            @foreach (\App\Banner::where('position', 1)->where('published', 1)->get() as $key => $banner)
                                <div class="col-lg-{{ 12/count(\App\Banner::where('position', 1)->where('published', 1)->get()) }}">
                                    <div class="media-banner mb-3 mb-lg-0">
                                        <a href="{{ $banner->url }}" target="_blank" class="banner-container">
                                            <img src="{{ asset($banner->photo) }}" data-src="{{ asset($banner->photo) }}" alt="{{ env('APP_NAME') }} promo" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{-- <img src="{{ asset('frontend/assets/images/product-images/5.jpg')}}" alt="top-window-ads-banner" class="img-fluid"> --}}
                <button type="button" class="close position-absolute text-gray" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </section>
     


 <!-- Header -->
 @include('frontend.inc.nav')
 @if(Session::get('success'))
 <div class="alert alert-success alert-dismissible fade show">
     {{session::get('success')}}
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
 </div>
 @endif
 @yield('content')
      
@include('frontend.inc.footer')


    </section>
        <!-- Scroll Button -->
        <section id="scroll-btn">
            <a href="#"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
        </section>
        <!-- Scroll Button Ends -->
    <!-- Whole Body Wrapper Ends -->
    <!-- 1st Jquery Link Starts-->
    <script src="{{ asset('frontend/assets/jquery-3.5.1/jquery-3.5.1.js')}}"></script>
    <!-- Jquery Link Ends-->
    <!-- 2nd Popper Js Starts -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <!-- Popper Js Ends -->
    <!-- 3rd Bootstrap Js Link Starts -->
    <script src="{{ asset('frontend/assets/bootstrap-4.3.1/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/bootstrap-4.3.1/js/bootstrap.min.js.map')}}"></script>
    <!-- Bootstrap Js Link Ends -->
    <!-- Slick Js -->
    <script src="{{ asset('frontend/assets/slick/slick.min.js')}}"></script>
    <!-- Slick Js Ends-->
    <!-- Isotope Js -->
    <script src="{{ asset('frontend/assets/isotope-js/isotope.pkgd.min.js')}}"></script>
    <!-- Isotope Js Ends-->
    <!-- Bootstrap range slider js -->
    <script src="{{ asset('frontend/assets/bootstrap-range-slider-js/bootstrap-slider.min.js')}}"></script>
    <!-- Bootstrap range slider js Ends-->
    <!-- Toastr -->
    <script src="{{ asset('frontend/assets/toastr/toastr.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jssocials.min.js') }}"></script>
    <script src="{{ asset('js/jquery.aSimpleTour.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollTo.js') }}"></script>
    <!-- Toastr Ends -->
    <script src="{{ asset('frontend/js/sweetalert2.min.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script> --}}
    <!-- Custom Js Starts -->
    <script src="https://k1ngzed.com/dist/swiper/swiper.min.js"></script>
    <script src="https://k1ngzed.com/dist/EasyZoom/easyzoom.js"></script>
    <script src="{{ asset('frontend/assets/js/main.js')}}"></script>
    <!-- Custom Js Ends -->
    <!-- Popup Search Modal -->
    

    @include('frontend.partials.modal')


    <div class="modal fade" id="addToCart">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
            <div class="modal-content position-relative">
                <div class="c-preloader">
                    <i class="fa fa-spin fa-spinner"></i>
                </div>
                <button type="button" class="close absolute-close-btn ml-auto" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div id="addToCart-modal-body">

                </div>
            </div>
        </div>
    </div>


<style>
    .Swal-wide{
    width:450px !important;
}
    .c-preloader {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: "";
    background: #fff;
    z-index: 9999;
}

.c-preloader i {
    position: absolute;
    height: 50px;
    width: 50px;
    text-align: center;
    left: calc(50% - 25px);
    top: calc(50% - 25px);
    line-height: 50px;
    font-size: 20px;
}
    .fix-text{
        height:fixed; max-height: 30px; overflow:hidden;
    }
    
</style>
<script>
    function showFrontendAlert(type, message){
        if(type == 'danger'){
            type = 'error';
        }
        swal({
            position: 'top-end',
            type: type,
            title: message,
            showConfirmButton: false,
            timer: 3000
        });
    }
</script>

@foreach (session('flash_notification', collect())->toArray() as $message)
    <script>
        showFrontendAlert('{{ $message['level'] }}', '{{ $message['message'] }}');
    </script>
@endforeach

    <script>

// function showFrontendAlert(type, message){
//             if(type == 'danger'){
//                 type = 'error';
//                 icon = 'error';
//             }
//             Swal.fire({
//                 position: 'top-end',
//                 type: type,
//                 icon: 'success',
//                 title: message,
//                 showConfirmButton: false,
//                 timer: 3000
//             });
//         }


        $(".addToWishList").click(function(){
            let id = $(this).data('id');
            @if (Auth::check() && (Auth::user()->user_type == 'customer' || Auth::user()->user_type == 'seller'))
                $.post('{{ route('wishlists.store') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
                    if(data != 0){
                        $('#nav-wishlist').html(data);
                        showFrontendAlert('success', 'Item has been added to wishlist');
                    }
                    else{
                        showFrontendAlert('warning', 'Please login first');
                    }
                });
            @else
                showFrontendAlert('warning', 'Please login first');
            @endif
        });
    
        $(".addToCart").click(function(){
            let id = $(this).data('id');
            @if (Auth::check() && (Auth::user()->user_type == 'customer' || Auth::user()->user_type == 'seller'))
                $.post('{{ route('cart.addToCart') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
                    if(data != 0){
                        $('#nav-cart-count').html(data);
                        $('#nav-cart-count').html(parseInt($('#nav-cart-count').html())+1);
                        alert('success', 'Item has been added to wishlist');
                    }
                    else{
                        alert('warning', 'Please login first');
                    }
                });
            @else
                alert('warning', 'Please login first');
            @endif
        });

        function addToCart(){
        // if(checkAddToCartValidity()) {
            
            $('#addToCart').modal();
            $('.c-preloader').show();           
            $.ajax({
                _token:"{{ csrf_token() }}",
            //    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
               type:"POST",
               url: '{{ route('cart.addTo_Cart') }}',
               data: $('#option-choice-form').serializeArray(),
               success: function(data){
                   $('#addToCart-modal-body').html(null);
                   $('.c-preloader').hide();
                   $('#modal-size').removeClass('modal-lg');
                   $('#addToCart-modal-body').html(data);
                   updateNavCart();
                   $('.cart-item').html(parseInt($('.cart-item').html())+1);
               }
           });
        // }
        // else{
        //     showFrontendAlert('warning', 'Please choose all the options');
        // }
    }



    function showAddToCartModal(id){
        if(!$('#modal-size').hasClass('modal-lg')){
            $('#modal-size').addClass('modal-lg');
        }
        $('#addToCart-modal-body').html(null);
        $('#addToCart').modal();
        $('.c-preloader').show();
        $.post('{{ route('cart.showCartModal') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
            $('.c-preloader').hide();
            $('#addToCart-modal-body').html(data);
            $('.xzoom, .xzoom-gallery').xzoom({
                Xoffset: 20,
                bg: true,
                tint: '#000',
                defaultScale: -1
            });
            getVariantPrice();
        });
    }


    function addToCartDetails(id){
        $('#addToCart').modal();
            $('.c-preloader').show();           
            $.ajax({
                _token:"{{ csrf_token() }}",
                id:id,
               type:"POST",
               url: '{{ route('cart.addTo_Cart') }}',
               data: $('#option-choice-form').serializeArray(),
               success: function(data){
                   $('#addToCart-modal-body').html(null);
                   $('.c-preloader').hide();
                   $('#modal-size').removeClass('modal-lg');
                   $('#addToCart-modal-body').html(data);
                   updateNavCart();
                   $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())+1);
               }
           });
    }

    function buyNow(){
        // if(checkAddToCartValidity()) {
            $('#addToCart').modal();
            $('.c-preloader').show();
            $.ajax({
                _token:"{{ csrf_token() }}",
               type:"POST",
               url: '{{ route('cart.addTo_Cart') }}',
               data: $('#option-choice-form').serializeArray(),
               success: function(data){
                //    $('#addToCart-modal-body').html(null);
                //    $('.c-preloader').hide();
                //    $('#modal-size').removeClass('modal-lg');
                //    $('#addToCart-modal-body').html(data);
                   updateNavCart();
                   $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())+1);
                   window.location.replace("{{ route('cart') }}");
               }
           });
        // }
        // else{
        //     showFrontendAlert('warning', 'Please choose all the options');
        // }
    }


    function removeFromCart(key){
        $.post('{{ route('cart.removeFromCart') }}', {_token:'{{ csrf_token() }}', key:key}, function(data){
            updateNavCart();
            $('#cart-summary').html(data);  
            showFrontendAlert('success', 'Item has been removed from cart');
            $('#nav-cart-count').html(parseInt($('#nav-cart-count').html())-1);
            $('#nav-cart').modal('hide');
            $('.modal-backdrop').remove();
            
        });
    }

    function updateNavCart(){
        $.post('{{ route('cart.nav_cart') }}', {_token:'{{ csrf_token() }}'}, function(data){
            $('#cart_items').html(data);
        });
    }



    function cartQuantityInitialize(){
        $('.btn-number').click(function(e) {
            e.preventDefault();

            fieldName = $(this).attr('data-field');
            type = $(this).attr('data-type');
            var input = $("input[name='" + fieldName + "']");
            var currentVal = parseInt(input.val());

            if (!isNaN(currentVal)) {
                if (type == 'minus') {

                    if (currentVal > input.attr('min')) {
                        input.val(currentVal - 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('min')) {
                        $(this).attr('disabled', true);
                    }

                } else if (type == 'plus') {

                    if (currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('max')) {
                        $(this).attr('disabled', true);
                    }

                }
            } else {
                input.val(0);
            }
        });

        $('.input-number').focusin(function() {
            $(this).data('oldValue', $(this).val());
        });

        $('.input-number').change(function() {

            minValue = parseInt($(this).attr('min'));
            maxValue = parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());

            name = $(this).attr('name');
            if (valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the minimum value was reached');
                $(this).val($(this).data('oldValue'));
            }
            if (valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the maximum value was reached');
                $(this).val($(this).data('oldValue'));
            }


        });
        $(".input-number").keydown(function(e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
    }


    function addToCompare(id){
        $.post('{{ route('compare.addToCompare') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
            $('#compare').html(data);
            showFrontendAlert('success', 'Item has been added to compare list');
            $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html())+1);
        });
    }
    </script>
</body>
</html>