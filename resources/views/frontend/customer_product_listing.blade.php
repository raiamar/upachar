<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upachar Pharmacy</title>
    <!-- Bootstrap link Starts -->
    <link rel="stylesheet" href="frontend/assets/bootstrap-4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/assets/bootstrap-4.3.1/css/bootstrap.min.css.map">
    <!-- Bootstrap link Ends -->
    <!-- Font Awesome Link Starts -->
    <link rel="stylesheet" href="frontend/assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Font Awesome Link Ends -->
    <!-- Slick Css -->
    <link rel="stylesheet" href="frontend/assets/slick/slick.css">
    <link rel="stylesheet" href="frontend/assets/slick/slick-theme.css">
    <!-- Slick Css Ends-->
    <!-- Custom Links -->
    <!-- Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700;800&family=DM+Serif+Display:ital@0;1&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700&family=Vidaloka&display=swap" rel="stylesheet">
    <!-- Font Link Ends -->
    <link rel="stylesheet" href="https://k1ngzed.com/dist/swiper/swiper.min.css" />
    <link rel="stylesheet" href="https://k1ngzed.com/dist/EasyZoom/easyzoom.css" />
    <!-- Bootstrap range slider -->
    <link rel="stylesheet" href="frontend/assets/bootstrap-range-slider-js/css/bootstrap-slider.min.css">
    <!-- Bootstrap range slider Ends -->
    <!-- Toastr -->
    <link rel="stylesheet" href="frontend/assets/toastr/toastr.min.css">
    <!-- Toastr Ends -->
    <link rel="stylesheet" href="frontend/assets/css/style.css">
    <link rel="stylesheet" href="frontend/assets/css/responsive.css">
    <!-- Custom Links Ends -->
</head>

<body onload="myFunction()">
    <div id="loading"></div>
    <!-- Whole Body Wrapper Starts -->
    <section id="product-listing-page">
        <section id="top-ads-wrapper">
            <div class="alert alert-dismissible fade show position-relative border-0 m-0 p-0" role="alert">
                <img src="frontend/assets/images/product-images/5.jpg" alt="top-window-ads-banner" class="img-fluid">
                <button type="button" class="close position-absolute text-white" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        </section>
        <!-- Top Header Navigation -->
        <header id="top-header-navigation-wrapper">
            <div class="container">
                <div class="top-header py-1">
                    <ul class="d-flex justify-content-end align-items-center m-0">
                        <li>
                            <a class="nav-link text-white" href="{{route('user.login')}}">
                                <span class=" mr-2">
                                    <i class=" fa fa-sign-in" aria-hidden="true"></i></span>Login</a>
                        </li>
                        <li>
                            <a class="nav-link text-white" href="{{route('user.login')}}">
                                <span class="mr-2">
                                    <i class="fa fa-paper-plane"
                                        aria-hidden="true"></i></span>Register</a>
                        </li>
                        <li>
                            <a class="nav-link text-white" href="">Save more on App</a>
                        </li>
                        <li>
                            <a class="nav-link text-white" href="">Track my Order</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- Top Header Navigation Ends -->
        <!-- Navigation Starts -->
        <section id="navigation-wrapper" class="navigation-wrap">
            <nav class="navbar header-sticky justify-content-around">
                <div class="image">
                    <a class="navbar-brand" href="index.html">
                        <img src="frontend/assets/images/logo/3.png" alt="navigation-logo" class="img-fluid">
                        <!-- <h3 class="m-0 font-weight-bold"><span>Upachar</span> Pharmacy</h3> -->
                    </a>
                </div>
                <div class="navbar-menus d-xl-block d-lg-block d-none" id="navbarmain">
                    <ul class="navbar-nav py-4 py-md-0 d-flex flex-row flex-wrap" role="menu">
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link active" href="index.html">Home</a>
                        </li>
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link" href="product-listing.html">
                                Products
                                <span class="ml-1">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </a>
                            <div class="mega-menu-wrapper">
                                <div class="row p-4">
                                    <!-- /.col-md-3  -->
                                    <div class="col-md-3">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 27</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-3  -->
                                    <div class="col-md-3">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 27</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-3  -->
                                    <div class="col-md-3">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 27</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-3  -->
                                    <div class="col-md-3">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 27</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-3  -->
                                    <div class="col-md-3">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 27</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 29</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-3  -->
                                    <div class="col-md-3">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 27</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 29</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-3  -->
                                    <div class="col-md-3">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 27</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link toggle" data-toggle="dropdown" href="product-listing.html" role="button" aria-haspopup="true"
                                aria-expanded="false">
                                Recipes
                                <span class="ml-1">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </a>
                            <div class="mega-menu-wrapper">
                                <div class="row p-4">
                                    <!-- /.col-md-3  -->
                                    <div class="col-md-3">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 27</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-3  -->
                                    <div class="col-md-3">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 27</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-3  -->
                                    <div class="col-md-3">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 27</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-3  -->
                                    <div class="col-md-3">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 27</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-3  -->
                                    <div class="col-md-3">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 27</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 29</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-3  -->
                                    <div class="col-md-3">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 27</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 29</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-3  -->
                                    <div class="col-md-3">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 27</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 1</a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="product-listing.html">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" href="product-listing.html" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                Categories
                                <span class="ml-1">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </a>
                            <div class="mega-menu-wrapper">
                                <!-- <a class="dropdown-item" href="">Product 1</a>
                                            <a class="dropdown-item" href="">Product 2</a> -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 29</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="product-listing.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="product-listing.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-3  -->
                                        <div class="col-md-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 27</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="product-listing.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="product-listing.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 29</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="product-listing.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="product-listing.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-3  -->
                                        <div class="col-md-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 27</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="product-listing.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="product-listing.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 29</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="product-listing.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="product-listing.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-3  -->
                                        <div class="col-md-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="product-listing.html">Heading 27</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="product-listing.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="product-listing.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link" href="contact-us.html">Contact Us</a>
                        </li>
                        <!-- Popup Search Modal Anchor -->
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                            <a class="btn" data-toggle="modal" data-target="#searchpopupmodal"><i class="fa fa-search"></i></a>
                        </li>
                        <!-- Popup Search Modal Anchor Ends -->
                    </ul>
                </div>
                <div class="cart-wishlist desk-nav d-xl-block d-lg-block d-none">
                    <ul class="d-flex align-items-center justify-content-between m-0">
                        <li>
                            <a class="nav-link add-on px-xl-2 px-lg-1 px-md-2 px-2" data-toggle="modal" data-target="#nav-cart">
                                <span class="mr-1"><i class="fa fa-shopping-bag" aria-hidden="true"></i></span> <sup
                                    class="cart-items text-white">2</sup>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link add-on px-xl-2 px-lg-1 px-md-2 px-2" data-toggle="modal" data-target="#nav-cart">
                                <span class="mr-1"><i class="fa fa-heart-o" aria-hidden="true"></i></span> <sup class="cart-items text-white">2</sup>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Mobile Popup Search Modal Anchor -->
                <a class="btn d-xl-none d-lg-none d-md-block search-button" data-toggle="modal" data-target="#searchpopupmodal"><i
                        class="fa fa-search"></i></a>
                <!-- Mobile Popup Search Modal Anchor Ends -->
                <!-- Small Desktop & mobile Cart-wishlist and Profile -->
                <!-- Button trigger modal -->
                <div class="mobile-menu d-lg-none d-md-block mr-4 position-absolute" data-toggle="modal"
                    data-target="#rightsidebarfilter"><span class="mr-2"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></span>
                </div>
                <!-- Button trigger modal -->
                <!-- Small Desktop & mobile Cart-wishlist and Profile End-->
            </nav>
        </section>
        <!-- Navigation Ends -->
        <!-- Breadcrumbs -->
        <section id="breadcrumb-wrapper" class="position-relative">
            <div class="image">
                <img src="frontend/assets/images/banner/1.png" alt="breadcrumb-image" class="img-fluid">
            </div>
            <div class="overlay position-absolute">
                <div class="title p-4">Product Listing</div>
            </div>
        </section>
        <!-- Breadcrumbs Ends -->
        <!-- Product Listing -->
        <section id="product-listing-wrapper" class="py-5">
            <div class="container">
                <div class="product-lists">
                    <div class="row">
                    
                        <div class="col-xl-3 col-lg-3 col-12">
                            <div class="left-side-wrapper px-4 py-4 d-lg-block d-none">
                                <div class="row">
                                    <!-- Content -->
                                    <div class="col-12">
                                        <div class="card-wrapper mb-2">
                                            <div class="card-group-item">
                                                <div class="card-head">
                                                    <div class="heading d-flex align-items-center text-center flex-wrap">
                                                        <div class="head">
                                                            <h5 class="text-capitalize">Range</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="filter-content2 mt-3">
                                                    <div class="card-body">
                                                        <div class="slider" id="range-slider">
                                                        </div>
                                                    </div>
                                                    <!-- card-body.// -->
                                                </div>
                                            </div>
                                            <!-- card-group-item.// -->
                                        </div>
                                    </div>
                                    <!-- Content Ends -->
                                    <div class="col-12">
                                        <div class="card-wrapper mb-2">
                                            <div class="card-group-item">
                                                <div class="card-head">
                                                    <div class="heading d-flex align-items-center text-center flex-wrap">
                                                        <div class="head">
                                                            <h5 class="text-capitalize">Brands</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="our_brand pt-3">
                                                    <div class="our_brand_item">
                                                        <img src="https://montechbd.com/shopist/demo/public/uploads/1616788177-h-80-nike.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="our_brand_item">
                                                        <img src="https://montechbd.com/shopist/demo/public/uploads/1616788177-h-80-nike.png" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card-group-item.// -->
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <div class="card-wrapper mb-2">
                                            <div class="card-group-item">
                                                <div class="card-head">
                                                    <div class="heading d-flex align-items-center text-center flex-wrap">
                                                        <div class="head">
                                                            <h5 class="text-capitalize">Choose Color</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="colors_block p-3">
                                                    <label class="color_single"><small class="round"></small>
                                                <span class=""> Red</span>
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                              </label>
                                                    <label class="color_single">
                                                <small class="round bg-warning"></small>
                                                <span> Yellow</span>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                              </label>
                                                    <label class="color_single">
                                                <small class="round bg-primary"></small>
                                                <span>Blue</span>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                              </label>
                                                    <label class="color_single">
                                                <small class="round bg-success"></small>
                                                <span> Green</span>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                              </label>
                                                </div>
                                            </div>
                                            <!-- card-group-item.// -->
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <div class="card-wrapper mb-2">
                                            <div class="card-group-item">
                                                <div class="card-head">
                                                    <div class="heading d-flex align-items-center text-center flex-wrap">
                                                        <div class="head">
                                                            <h5 class="text-capitalize">Choose Size</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="colors_block p-3">
                                                    <label class="color_single"><span> Small</span>
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                              </label>
                                                    <label class="color_single">
                                                <span> Medium</span>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                              </label>
                                                    <label class="color_single">
                                                <span>Large</span>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                              </label>
                                                    <label class="color_single">
                                                <span> XL</span>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                              </label>
                                                    <label class="color_single">
                                                <span> XXL</span>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                              </label>
                                                </div>
                                            </div>
                                            <!-- card-group-item.// -->
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- Mobile Filter  -->
                            <!-- Button trigger modal -->
                            <button type="button" class="effect d-xl-none d-lg-none d-md-block mb-4" data-toggle="modal" data-target="#leftsidebarfilter">
                                            Product Filter
                                             <span class="ml-2">
                                                 <i class="fa fa-list" aria-hidden="true"></i>
                                                </span>
                                </button>
                            <!-- Mobile Filter Ends -->
                        </div>
                        <div class="col-xl-9 col-lg-9 col-12 text-center">
                            <ul class="show-filter d-flex justify-content-between align-items-center">
                                <li class="p-3">
                                    Showing all products
                                </li>
                                <li class="p-3 d-flex align-items-center">
                                    <select class="form-control mx-2">
                                        <option selected="">Choose a Filter</option>
                                        <option>Alphabetically</option>
                                        <option>Price High to Low</option>
                                        <option>Recently Added</option>
                                        <option>MOstly Purchased</option>
                                    </select>
                                    <!-- <select class="form-control filter mx-2">
                                                                                                                                                                                        <option selected="">Filter</option>
                                                                                                                                                                                        <option>Alphabetically</option>
                                                                                                                                                                                        <option>Price High to Low</option>
                                                                                                                                                                                        <option>Recently Added</option>
                                                                                                                                                                                        <option>MOstly Purchased</option>
                                                                                                                                                                                    </select> -->
                                </li>
                            </ul>
                            <div class="row right-side-wrapper">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4 post">
                                    <div class="product-grid-item2">
                                        <div class="product-grid-image2">
                                            <a href="product-detail.html"> <img
                                                    src="https://demo2.madrasthemes.com/cartzilla/grocery/wp-content/uploads/sites/5/2020/03/6.jpg" alt="img"
                                                    class="img-fluid pic-1"> </a>
                                            <ul class="social">
                                                <li>
                                                    <a href="" class="fa fa-shopping-bag"></a>
                                                </li>
                                                <li>
                                                    <a class="fa fa-shopping-cart" onclick="successMsg();"></a>
                                                </li>
                                                <li>
                                                    <a href="" class="fa fa-exchange"></a>
                                                </li>
                                            </ul> <span class="product-discount-label">-20%</span> </div>
                                        <div class="product-content">
                                            <h3 class="title text-center"> <a href="product-detail.html" class="font-weight-bold">Authentic Grana Padano </a></h3>
                                            <div class="price text-center mb-3"> £ 8.00 <span>£ 10.00</span> </div> <a class="all-deals effect"
                                                href="product-detail.html">View Product <i class="fa fa-angle-right icon"></i> </a> </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4 post">
                                    <div class="product-grid-item2">
                                        <div class="product-grid-image2">
                                            <a href="product-detail.html"> <img
                                                    src="https://demo2.madrasthemes.com/cartzilla/grocery/wp-content/uploads/sites/5/2020/03/6.jpg" alt="img"
                                                    class="img-fluid pic-1"> </a>
                                            <ul class="social">
                                                <li>
                                                    <a href="" class="fa fa-shopping-bag"></a>
                                                </li>
                                                <li>
                                                    <a class="fa fa-shopping-cart" onclick="successMsg();"></a>
                                                </li>
                                                <li>
                                                    <a href="" class="fa fa-exchange"></a>
                                                </li>
                                            </ul> <span class="product-discount-label">-20%</span> </div>
                                        <div class="product-content">
                                            <h3 class="title text-center"> <a href="product-detail.html" class="font-weight-bold">Authentic Grana Padano </a></h3>
                                            <div class="price text-center mb-3"> £ 8.00 <span>£ 10.00</span> </div> <a class="all-deals effect"
                                                href="product-detail.html">View Product <i class="fa fa-angle-right icon"></i> </a> </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4 post">
                                    <div class="product-grid-item2">
                                        <div class="product-grid-image2">
                                            <a href="product-detail.html"> <img
                                                    src="https://demo2.madrasthemes.com/cartzilla/grocery/wp-content/uploads/sites/5/2020/03/6.jpg" alt="img"
                                                    class="img-fluid pic-1"> </a>
                                            <ul class="social">
                                                <li>
                                                    <a href="" class="fa fa-shopping-bag"></a>
                                                </li>
                                                <li>
                                                    <a class="fa fa-shopping-cart" onclick="successMsg();"></a>
                                                </li>
                                                <li>
                                                    <a href="" class="fa fa-exchange"></a>
                                                </li>
                                            </ul> <span class="product-discount-label">-20%</span> </div>
                                        <div class="product-content">
                                            <h3 class="title text-center"> <a href="product-detail.html" class="font-weight-bold">Authentic Grana Padano </a></h3>
                                            <div class="price text-center mb-3"> £ 8.00 <span>£ 10.00</span> </div> <a class="all-deals effect"
                                                href="product-detail.html">View Product <i class="fa fa-angle-right icon"></i> </a> </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4 post">
                                    <div class="product-grid-item2">
                                        <div class="product-grid-image2">
                                            <a href="product-detail.html"> <img
                                                    src="https://demo2.madrasthemes.com/cartzilla/grocery/wp-content/uploads/sites/5/2020/03/6.jpg" alt="img"
                                                    class="img-fluid pic-1"> </a>
                                            <ul class="social">
                                                <li>
                                                    <a href="" class="fa fa-shopping-bag"></a>
                                                </li>
                                                <li>
                                                    <a class="fa fa-shopping-cart" onclick="successMsg();"></a>
                                                </li>
                                                <li>
                                                    <a href="" class="fa fa-exchange"></a>
                                                </li>
                                            </ul> <span class="product-discount-label">-20%</span> </div>
                                        <div class="product-content">
                                            <h3 class="title text-center"> <a href="product-detail.html" class="font-weight-bold">Authentic Grana Padano </a></h3>
                                            <div class="price text-center mb-3"> £ 8.00 <span>£ 10.00</span> </div> <a class="all-deals effect"
                                                href="product-detail.html">View Product <i class="fa fa-angle-right icon"></i> </a> </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4 post">
                                    <div class="product-grid-item2">
                                        <div class="product-grid-image2">
                                            <a href="product-detail.html"> <img
                                                    src="https://demo2.madrasthemes.com/cartzilla/grocery/wp-content/uploads/sites/5/2020/03/6.jpg" alt="img"
                                                    class="img-fluid pic-1"> </a>
                                            <ul class="social">
                                                <li>
                                                    <a href="" class="fa fa-shopping-bag"></a>
                                                </li>
                                                <li>
                                                    <a class="fa fa-shopping-cart" onclick="successMsg();"></a>
                                                </li>
                                                <li>
                                                    <a href="" class="fa fa-exchange"></a>
                                                </li>
                                            </ul> <span class="product-discount-label">-20%</span> </div>
                                        <div class="product-content">
                                            <h3 class="title text-center"> <a href="product-detail.html" class="font-weight-bold">Authentic Grana Padano </a></h3>
                                            <div class="price text-center mb-3"> £ 8.00 <span>£ 10.00</span> </div> <a class="all-deals effect"
                                                href="product-detail.html">View Product <i class="fa fa-angle-right icon"></i> </a> </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4 post">
                                    <div class="product-grid-item2">
                                        <div class="product-grid-image2">
                                            <a href="product-detail.html"> <img
                                                    src="https://demo2.madrasthemes.com/cartzilla/grocery/wp-content/uploads/sites/5/2020/03/6.jpg" alt="img"
                                                    class="img-fluid pic-1"> </a>
                                            <ul class="social">
                                                <li>
                                                    <a href="" class="fa fa-shopping-bag"></a>
                                                </li>
                                                <li>
                                                    <a class="fa fa-shopping-cart" onclick="successMsg();"></a>
                                                </li>
                                                <li>
                                                    <a href="" class="fa fa-exchange"></a>
                                                </li>
                                            </ul> <span class="product-discount-label">-20%</span> </div>
                                        <div class="product-content">
                                            <h3 class="title text-center"> <a href="product-detail.html" class="font-weight-bold">Authentic Grana Padano </a></h3>
                                            <div class="price text-center mb-3"> £ 8.00 <span>£ 10.00</span> </div> <a class="all-deals effect"
                                                href="product-detail.html">View Product <i class="fa fa-angle-right icon"></i> </a> </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4 post">
                                    <div class="product-grid-item2">
                                        <div class="product-grid-image2">
                                            <a href="product-detail.html"> <img
                                                    src="https://demo2.madrasthemes.com/cartzilla/grocery/wp-content/uploads/sites/5/2020/03/6.jpg" alt="img"
                                                    class="img-fluid pic-1"> </a>
                                            <ul class="social">
                                                <li>
                                                    <a href="" class="fa fa-shopping-bag"></a>
                                                </li>
                                                <li>
                                                    <a class="fa fa-shopping-cart" onclick="successMsg();"></a>
                                                </li>
                                                <li>
                                                    <a href="" class="fa fa-exchange"></a>
                                                </li>
                                            </ul> <span class="product-discount-label">-20%</span> </div>
                                        <div class="product-content">
                                            <h3 class="title text-center"> <a href="product-detail.html" class="font-weight-bold">Authentic Grana Padano </a></h3>
                                            <div class="price text-center mb-3"> £ 8.00 <span>£ 10.00</span> </div> <a class="all-deals effect"
                                                href="product-detail.html">View Product <i class="fa fa-angle-right icon"></i> </a> </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4 post">
                                    <div class="product-grid-item2">
                                        <div class="product-grid-image2">
                                            <a href="product-detail.html"> <img
                                                    src="https://demo2.madrasthemes.com/cartzilla/grocery/wp-content/uploads/sites/5/2020/03/6.jpg" alt="img"
                                                    class="img-fluid pic-1"> </a>
                                            <ul class="social">
                                                <li>
                                                    <a href="" class="fa fa-shopping-bag"></a>
                                                </li>
                                                <li>
                                                    <a class="fa fa-shopping-cart" onclick="successMsg();"></a>
                                                </li>
                                                <li>
                                                    <a href="" class="fa fa-exchange"></a>
                                                </li>
                                            </ul> <span class="product-discount-label">-20%</span> </div>
                                        <div class="product-content">
                                            <h3 class="title text-center"> <a href="product-detail.html" class="font-weight-bold">Authentic Grana Padano </a></h3>
                                            <div class="price text-center mb-3"> £ 8.00 <span>£ 10.00</span> </div> <a class="all-deals effect"
                                                href="product-detail.html">View Product <i class="fa fa-angle-right icon"></i> </a> </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4 post">
                                    <div class="product-grid-item2">
                                        <div class="product-grid-image2">
                                            <a href="product-detail.html"> <img
                                                    src="https://demo2.madrasthemes.com/cartzilla/grocery/wp-content/uploads/sites/5/2020/03/6.jpg" alt="img"
                                                    class="img-fluid pic-1"> </a>
                                            <ul class="social">
                                                <li>
                                                    <a href="" class="fa fa-shopping-bag"></a>
                                                </li>
                                                <li>
                                                    <a class="fa fa-shopping-cart" onclick="successMsg();"></a>
                                                </li>
                                                <li>
                                                    <a href="" class="fa fa-exchange"></a>
                                                </li>
                                            </ul> <span class="product-discount-label">-20%</span> </div>
                                        <div class="product-content">
                                            <h3 class="title text-center"> <a href="product-detail.html" class="font-weight-bold">Authentic Grana Padano </a></h3>
                                            <div class="price text-center mb-3"> £ 8.00 <span>£ 10.00</span> </div> <a class="all-deals effect"
                                                href="product-detail.html">View Product <i class="fa fa-angle-right icon"></i> </a> </div>
                                    </div>
                                </div>
                            </div> <button type="button" class="effect mt-4">View More</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Listing Ends -->
        <!-- Footer -->
        <section id="footer-wrapper" class="text-white pt-5 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-2">
                        <div class="image">
                            <a href="index.html"> <img src="frontend/assets/images/logo/3.png" alt="footer-logo-image" class="img-fluid"></a>
                            </div>
                            <div class="content mt-3">
                                <p class="text-white font-weight-normal m-0">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi, quia accusantium.
                                </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-2">
                        <ul class="footer-nav-list">
                            <div class="heading">
                                <div class="head">
                                    <a href="">
                                        <h2 class="mb-3">Quick Links</h2>
                                    </a>
                                </div>
                            </div>
                            <li>
                                <a href="index.html">Home</a></h5>
                            </li>
                            <li>
                                <a href="product-listing.html">Products</a></h5>
                            </li>
                            <li>
                                <a href="dashboard-cart.html">Cart</a></h5>
                                </li>
                                <li>
                                    <a href="contact-us.html">Contact Us</a></h5>
                                </li>
                                <li>
                                    <a href="about-us.html">About Us</a></h5>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-2">
                        <ul class="footer-nav-list">
                            <div class="heading">
                                <div class="head">
                                    <a href="">
                                        <h2 class="mb-3">Find Us</h2>
                                    </a>
                                </div>
                            </div>
                            <li>
                                <a href=" mailto:webmaster@example.com"><span class="mr-2"><i class="fa fa-envelope-square"
                                            aria-hidden="true"></i></span>pharmacy@gmail.com</a>
                                </h5>
                            </li>
                            <li>
                                <a href="tel:+4733378901"><span class="mr-2"><i class="fa fa-phone" aria-hidden="true"></i></span>01-123456789</a></h5>
                            </li>
                            <li>
                                <a href=""><span class="mr-2"><i class="fa fa-map" aria-hidden="true"></i></span>Kathmandu, Nepal</a></h5>
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
                                <a href=""><span class="mr-2"><i class="fa fa-facebook-official" aria-hidden="true"></i></span>Facebook_name</a>
                                </h5>
                            </li>
                            <li>
                                <a href=""><span class="mr-2"><i class="fa fa-instagram" aria-hidden="true"></i></span>Instagram_name</a></h5>
                            </li>
                            <li>
                                <a href=""><span class="mr-2"><i class="fa fa-google" aria-hidden="true"></i></span>Google_name</a></h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer Ends -->
    </section>
        <!-- Scroll Button -->
        <section id="scroll-btn">
            <a href="#"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
        </section>
        <!-- Scroll Button Ends -->
    <!-- Whole Body Wrapper Ends -->
    <!-- 1st Jquery Link Starts-->
    <script src="frontend/assets/jquery-3.5.1/jquery-3.5.1.js"></script>
    <!-- Jquery Link Ends-->
    <!-- 2nd Popper Js Starts -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <!-- Popper Js Ends -->
    <!-- 3rd Bootstrap Js Link Starts -->
    <script src="frontend/assets/bootstrap-4.3.1/js/bootstrap.min.js"></script>
    <script src="frontend/assets/bootstrap-4.3.1/js/bootstrap.min.js.map"></script>
    <!-- Bootstrap Js Link Ends -->
    <!-- Slick Js -->
    <script src="frontend/assets/slick/slick.min.js"></script>
    <!-- Slick Js Ends-->
    <!-- Isotope Js -->
    <script src="frontend/assets/isotope-js/isotope.pkgd.min.js"></script>
    <!-- Isotope Js Ends-->
    <!-- Bootstrap range slider js -->
    <script src="frontend/assets/bootstrap-range-slider-js/bootstrap-slider.min.js"></script>
    <!-- Bootstrap range slider js Ends-->
    <!-- Toastr -->
    <script src="frontend/assets/toastr/toastr.min.js"></script>
    <!-- Toastr Ends -->
    <script src="https://k1ngzed.com/dist/swiper/swiper.min.js"></script>
    <script src="https://k1ngzed.com/dist/EasyZoom/easyzoom.js"></script>
    <script src="frontend/assets/js/main.js"></script>
    <!-- Custom Js Ends -->
    <!-- Popup Search Modal -->
    <!-- Modal -->
    <div class="modal fade" id="searchpopupmodal" tabindex="-1" role="dialog" aria-labelledby="searchpopupmodallabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="searchpopupmodallabel">Search your favourite item here !</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <input type="text">
                </div>
                <div class="modal-footer my-auto border-0 w-100">
                    <ul class="search-list-wrapper w-100">
                        <li class="mb-2 p-1">
                            <a href="product-detail.html">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="image"> <img src="frontend/assets/images/product-images/1.jpg" alt="search-list-image" class="img-fluid"></div>
                                    </div>
                                    <div class="col-10 m-auto">
                                        <p class="m-0">Ham Cheese Burger</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-2 p-1">
                            <a href="product-detail.html">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="image"> <img src="frontend/assets/images/product-images/1.jpg" alt="search-list-image" class="img-fluid"></div>
                                    </div>
                                    <div class="col-10 m-auto">
                                        <p class="m-0">Ham Cheese Burger</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-2 p-1">
                            <a href="product-detail.html">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="image"> <img src="frontend/assets/images/product-images/1.jpg" alt="search-list-image" class="img-fluid"></div>
                                    </div>
                                    <div class="col-10 m-auto">
                                        <p class="m-0">Ham Cheese Burger</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Popup Search Modal Ends-->
    <!-- Nav Cart Pop Up -->
    <div class="modal fade" id="nav-cart" tabindex="-1" role="dialog" aria-labelledby="navcartlabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title m-auto" id="navcartlabel"> <span class="mr-2"><i class="fa fa-opencart"
                                aria-hidden="true"></i></span> Items List</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                </div>
                <div class="modal-body">
                    <table class="w-100">
                        <tbody>
                            <tr>
                                <td class="pr-4 py-3">
                                    <img src="frontend/assets/images/product-images/1.jpg" class="img-fluid">
                                </td>
                                <td class="px-4 py-3">
                                    <a href="product-detail.html">
                                        <div class="head font-weight-bold">
                                            Cheese Platter x <span class="cart-quantity">1</span>
                                        </div>
                                        <div class="price">
                                            Rs 1000
                                        </div>
                                    </a>
                                </td>
                                <td class="px-4 py-3">
                                    <a class="btn"> <span><i class="fa fa-trash" aria-hidden="true"></i></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pr-4 py-3">
                                    <img src="frontend/assets/images/product-images/6.jpg" class="img-fluid">
                                </td>
                                <td class="px-4 py-3">
                                    <a href="product-detail.html">
                                        <div class="head font-weight-bold">
                                            Cheese Platter x <span class="cart-quantity">1</span>
                                        </div>
                                        <div class="price">
                                            Rs 1000
                                        </div>
                                    </a>
                                </td>
                                <td class="px-4 py-3">
                                    <a class="btn"> <span><i class="fa fa-trash" aria-hidden="true"></i></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pr-4 py-3">
                                    <img src="frontend/assets/images/product-images/5.jpg" class="img-fluid">
                                </td>
                                <td class="px-4 py-3">
                                    <a href="product-detail.html">
                                        <div class="head font-weight-bold">
                                            Cheese Platter x <span class="cart-quantity">1</span>
                                        </div>
                                        <div class="price">
                                            Rs 1000
                                        </div>
                                    </a>
                                </td>
                                <td class="px-4 py-3">
                                    <a class="btn"> <span><i class="fa fa-trash" aria-hidden="true"></i></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pr-4 py-3">
                                    <img src="frontend/assets/images/product-images/3.jpg" class="img-fluid">
                                </td>
                                <td class="px-4 py-3">
                                    <a href="product-detail.html">
                                        <div class="head font-weight-bold">
                                            Cheese Platter x <span class="cart-quantity">1</span>
                                        </div>
                                        <div class="price">
                                            Rs 1000
                                        </div>
                                    </a>
                                </td>
                                <td class="px-4 py-3">
                                    <a class="btn"> <span><i class="fa fa-trash" aria-hidden="true"></i></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pr-4 py-3">
                                    <img src="frontend/assets/images/product-images/2.jpg" class="img-fluid">
                                </td>
                                <td class="px-4 py-3">
                                    <a href="product-detail.html">
                                        <div class="head font-weight-bold">
                                            Cheese Platter x <span class="cart-quantity">1</span>
                                        </div>
                                        <div class="price">
                                            Rs 1000
                                        </div>
                                    </a>
                                </td>
                                <td class="px-4 py-3">
                                    <a class="btn"> <span><i class="fa fa-trash" aria-hidden="true"></i></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pr-4 py-3">
                                    <img src="frontend/assets/images/product-images/1.jpg" class="img-fluid">
                                </td>
                                <td class="px-4 py-3">
                                    <a href="product-detail.html">
                                        <div class="head font-weight-bold">
                                            Cheese Platter x <span class="cart-quantity">1</span>
                                        </div>
                                        <div class="price">
                                            Rs 1000
                                        </div>
                                    </a>
                                </td>
                                <td class="px-4 py-3">
                                    <a class="btn"> <span><i class="fa fa-trash" aria-hidden="true"></i></span></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer flex-column">
                    <div class="total-amount pb-3 text-center d-block">
                        Total : <span class="font-weight-bold">Rs 1500</span>
                    </div>
                    <div class="d-flex justify-content-around align-items-center w-100">
                        <button type="button" class="effect m-auto">View Cart</button>
                        <button type="button" class="effect m-auto ">Proceed Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Cart Pop Up Ends -->
    <!-- Mobile Filter Pop Up -->
    <!-- Modal -->
    <div class="modal fade" id="leftsidebarfilter" tabindex="-1" role="dialog" aria-labelledby="leftsidebarfilterlabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="leftsidebarfilterlabel">Product Filter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="left-side-wrapper px-4 py-4">
                        <div class="row">
                            <!-- Content -->
                            <div class="col-12">
                                <div class="card-wrapper mb-2">
                                    <div class="card-group-item">
                                        <div class="card-head">
                                            <div class="heading d-flex align-items-center text-center flex-wrap">
                                                <div class="head">
                                                    <h5 class="text-capitalize">Range</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="filter-content2 mt-3">
                                            <div class="card-body">
                                                <div class="slider slider-horizontal" id="range-slider">
                                                    <div class="tooltip tooltip-min bs-tooltip-top show">
                                                        <div class="arrow"></div>
                                                        <div class="tooltip-inner">0</div>
                                                    </div>
                                                    <div class="tooltip tooltip-max bs-tooltip-top show" style="left: 95.5%;">
                                                        <div class="arrow"></div>
                                                        <div class="tooltip-inner">10000</div>
                                                    </div>
                                                    <input type="range" class="slider d-block w-100" value="5" data-slider-min="1" data-slider-max="1000" data-slider-step="1" data-slider-value="5" data-slider-orientation="horizontal" data-slider-enabled="true" data-slider-selection="after" data-slider-tooltip="always"
                                                        data-slider-range="true" />
                                                </div>
                                                <!-- card-body.// -->
                                            </div>
                                        </div>
                                        <!-- card-group-item.// -->
                                    </div>
                                </div>
                            </div>
                            <!-- Content Ends -->
                            <div class="col-12">
                                <div class="card-wrapper mb-2">
                                    <div class="card-group-item">
                                        <div class="card-head">
                                            <div class="heading d-flex align-items-center text-center flex-wrap">
                                                <div class="head">
                                                    <h5 class="text-capitalize">Brands</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="our_brand-2 pt-3">
                                            <div class="our_brand_item">
                                                <img src="https://montechbd.com/shopist/demo/public/uploads/1616788177-h-80-nike.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="our_brand_item">
                                                <img src="https://montechbd.com/shopist/demo/public/uploads/1616788177-h-80-nike.png" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card-group-item.// -->
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card-wrapper mb-2">
                                    <div class="card-group-item">
                                        <div class="card-head">
                                            <div class="heading d-flex align-items-center text-center flex-wrap">
                                                <div class="head">
                                                    <h5 class="text-capitalize">Choose Color</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="colors_block p-3">
                                            <label class="color_single"><small class="round"></small>
                                                <span class=""> Red</span>
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                                </label>
                                            <label class="color_single">
                                                <small class="round bg-warning"></small>
                                                <span> Yellow</span>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                </label>
                                            <label class="color_single">
                                                <small class="round bg-primary"></small>
                                                <span>Blue</span>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                </label>
                                            <label class="color_single">
                                                <small class="round bg-success"></small>
                                                <span> Green</span>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                </label>
                                        </div>
                                    </div>
                                    <!-- card-group-item.// -->
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card-wrapper mb-2">
                                    <div class="card-group-item">
                                        <div class="card-head">
                                            <div class="heading d-flex align-items-center text-center flex-wrap">
                                                <div class="head">
                                                    <h5 class="text-capitalize">Choose Size</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="colors_block p-3">
                                            <label class="color_single">
                                                <span> Small</span>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="color_single">
                                                <span> Medium</span>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                </label>
                                            <label class="color_single">
                                                <span>Large</span>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                </label>
                                            <label class="color_single">
                                                <span> XL</span>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                </label>
                                            <label class="color_single">
                                                <span> XXL</span>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                </label>
                                        </div>
                                    </div>
                                    <!-- card-group-item.// -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer">
            </div> -->
            </div>
        </div>
    </div>
    <!-- Mobile Filter Pop Up Ends -->
    <!-- Mobile Nav -->
    <div class="modal fade" id="rightsidebarfilter" tabindex="-1" role="dialog" aria-labelledby="rightsidebarfilterlabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content h-100">
                <div class="modal-header px-3 py-3 align-items-center">
                    <div class="cart-wishlist">
                        <div class="image">
                            <a class="navbar-brand" href="index.html">
                                <img src="frontend/assets/images/logo/3.png" alt="navigation-logo" class="img-fluid">
                                <!-- <h2 class="m-0 font-weight-bold"><span>Upachar</span> Pharmacy !</h2> -->
                            </a>
                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body d-flex justify-content-between h-100 px-4">
                    <ul class="navbar-nav w-100">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html"> <span class="nav-indication mr-2"><i
                                        class="fa fa-eercast" aria-hidden="true"></i></span> Home</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a class="nav-link add-on" data-toggle="modal" data-target="#nav-cart">
                                <span class="nav-indication mr-2"><i class="fa fa-eercast"
                                        aria-hidden="true"></i></span>My Cart <span class="mx-2"><i
                                        class="fa fa-shopping-bag" aria-hidden="true"></i></span> <sup class="cart-items text-white">2</sup>
                            </a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a class="nav-link add-on" data-toggle="modal" data-target="#nav-cart">
                                <span class="nav-indication mr-2"><i class="fa fa-eercast"
                                        aria-hidden="true"></i></span>Wishlist <span class="mx-2"><i
                                        class="fa fa-heart-o" aria-hidden="true"></i></span> <sup class="cart-items text-white">2</sup>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="nav-indication mr-2"><i class="fa fa-eercast"
                                        aria-hidden="true"></i></span>Products<span class="ml-1">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="container d-block">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="under-construction.html">Heading 29</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-12  -->
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="under-construction.html">Heading 27</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-12  -->
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="under-construction.html">Heading 39</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-12  -->
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="under-construction.html">Heading 4</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-12  -->
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="under-construction.html">Heading 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-12  -->
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="under-construction.html">Heading 2</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-12  -->
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="under-construction.html">Heading 3</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-12  -->
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="under-construction.html">Heading 4</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-12  -->
                                    </div>
                                </div>
                                <!--  /.container  -->
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="nav-indication mr-2"><i class="fa fa-eercast"
                                        aria-hidden="true"></i></span>Category<span class="ml-1">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="container d-block">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="under-construction.html">Heading 29</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-12  -->
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="under-construction.html">Heading 27</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-12  -->
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="under-construction.html">Heading 39</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-12  -->
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="under-construction.html">Heading 4</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-12  -->
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="under-construction.html">Heading 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-12  -->
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="under-construction.html">Heading 2</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-12  -->
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="under-construction.html">Heading 3</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-12  -->
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="under-construction.html">Heading 4</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-12  -->
                                    </div>
                                </div>
                                <!--  /.container  -->
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="nav-indication mr-2"><i class="fa fa-eercast"
                                        aria-hidden="true"></i></span> Recipes<span class="ml-1">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="container d-block">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="under-construction.html">Heading 29</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-12  -->
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="under-construction.html">Heading 27</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-12  -->
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="under-construction.html">Heading 39</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-12  -->
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="under-construction.html">Heading 4</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-12  -->
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="under-construction.html">Heading 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-12  -->
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="under-construction.html">Heading 2</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-12  -->
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="under-construction.html">Heading 3</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-12  -->
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold" href="under-construction.html">Heading 4</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-12  -->
                                    </div>
                                </div>
                                <!--  /.container  -->
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact-us.html"> <span class="nav-indication mr-2"><i
                                        class="fa fa-eercast" aria-hidden="true"></i></span> Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer py-3">
                    <a class="w-50 text-center" href="under-construction.html"> <span class="mr-2"><i
                                class="fa fa-sign-in" aria-hidden="true"></i></span>Login</a>
                    <a class="w-50 text-center" href="under-construction.html"> <span class="mr-2"><i
                                class="fa fa-paper-plane" aria-hidden="true"></i></span>Register</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Nav -->
    <!-- Mobile Profile Nav Pop Up -->
    <div class="modal fade" id="profilemobilenav" tabindex="-1" role="dialog" aria-labelledby="profilemobilenavtitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content h-100  border-0">
                <!-- <div class="modal-header">
                        <h5 class="modal-title" id="profilemobilenavtitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div> -->
                <div class="modal-body d-flex align-items-center justify-content-around h-100 w-100 p-0">
                    <div class="dashboard-list2 px-2 py-0">
                        <div class="d-user-avater text-center mb-4">
                            <img src="frontend/assets/images/product-images/1.jpg" class="img-fluid avater" alt="profile-image">
                            <h5>Adam Harshvardhan</h5>
                            <a href=""> <span class="mr-1"><i class="fa fa-pencil" aria-hidden="true"></i></span> Upload Image
                            </a>
                        </div>
                        <ul class="sidebar">
                            <li class="active mb-3 p-2">
                                <a href="dashboard-profile.html"><span class="mr-2"><i class="fa fa-user"
                                            aria-hidden="true"></i></span>Profile</a>
                            </li>
                            <li class="mb-3 p-2">
                                <a href="dashboard-order-status.html"><span class="mr-2"><i class="fa fa-sort"
                                            aria-hidden="true"></i></span>Order Status</a>
                            </li>
                            <li class="mb-3 p-2">
                                <a href="dashboard-cart.html"><span class="mr-2"><i class="fa fa-shopping-bag"
                                            aria-hidden="true"></i></span>My Cart</a>
                            </li>
                            <li class="mb-3 p-2">
                                <a href="dashboard-wishlist.html"><span class="mr-2"><i class="fa fa-shopping-bag"
                                            aria-hidden="true"></i></span>Wishlist</a>
                            </li>
                            <li class="mb-3 p-2">
                                <a href="dashboard-change-password.html"><span class="mr-2"><i class="fa fa-lock"
                                            aria-hidden="true"></i></span>Change Password</a>
                            </li>
                            <li class="mb-3 p-2">
                                <a href="index.html"><span class="mr-2"><i class="fa fa-sign-out"
                                            aria-hidden="true"></i></span>Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div> -->
            </div>
        </div>
    </div>
    <!-- Mobile Profile Nav Pop Up Ends -->
</body>

</html>