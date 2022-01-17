@extends('frontend.layouts.app')

@section('content')

        <!-- Vendor Profile -->
        <section id="vendor-profile-wrapper">
            <div class="vendor-banner">
                <div class="image">
                    <img src="frontend/assets/images/banner/1.png" class="img-fluid" alt="vendor-banner-image">
                </div>
            </div>
            <div class="container custom-container">
                <div class="row pb-5">
                    <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12 p-0">
                        <div class="vendor-profile-content">
                            <div class="container">
                                <div class="row">
                                    <div class="sidebarcus col-xl-11 col-lg-11 col-md-12 mx-auto">
                                        <div class="profile-side-detail-edit mb-3">
                                            <div class="dashboard-content d-flex align-items-center h-100">
                                                <div class="d-user-avater">
                                                    <div class="image position-relative d-flex mb-1">
                                                        <img src="frontend/assets/images/product-images/1.jpg" class="img-fluid avater" alt="profile-image">
                                                        <a class="position-absolute upload text-dark"> <span class="mr-1"><i class="fa fa-pencil" aria-hidden="true"></i></span> Upload Image</a>
                                                    </div>
                                                    <div class="content text-center">
                                                        @php
                                                            $seller_package = \App\Seller::find(Auth::user()->seller->seller_package_id);
                                                        @endphp
                                                        <h5 class="font-weight-bold m-0">The Pharmacy <span class="ml-2"><i class="fa fa-check" aria-hidden="true"></i></span> </h5>
                                                        <!-- <div class="category">
                                Category: <span class="ml-1">  Health & Fitness</span>
                                
                            </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebarcus col-xl-12 col-lg-12 col-md-6 mt-xl-0 mt-lg-0 mt-md-5 mt-5">
                                        <div class="sidebar-contents mb-xl-5 mb-lg-5 mb-3">
                                            <div class="title">
                                                <h5 class="mb-0">{{$seller_package}} Shop Location</h5>
                                            </div>
                                            <div class="card border-0">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15905.097732956485!2d85.32549341514847!3d27.71570751415664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1640345157005!5m2!1sen!2snp" style="border:0;" allowfullscreen=""
                                                    loading="lazy"></iframe> </div>
                                        </div>
                                    </div>
                                    <div class="sidebarcus col-xl-12 col-lg-12 col-md-6 mt-xl-0 mt-lg-0 mt-md-5 mt-1">
                                        <div class="sidebar-contents mb-xl-5 mb-lg-5 mb-3">
                                            <div class="title">
                                                <h5 class="mb-0"> Contact Us</h5>
                                            </div>
                                            <div class="card border-0">
                                                <form class="contact-form">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group text-center">
                                                        <button class="effect px-5">Send</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12 mt-4">
                        <div class="dashboard-rightsidebar my-3">
                            <div class="vendor-contact-info">
                                <ul class="social-links d-flex align-items-center pl-0">
                                    <h6 class="mb-0 mr-2">Follow Us On:</h6>
                                    <li class="logo-bg">
                                        <a href="https://www.facebook.com" class="text-white"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="feature_in_bg ml-3">
                                        <a href="https://www.instagram.com" class="text-white"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="logo-bg ml-3">
                                        <a href="https://www.google.com" class="text-white"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="logo-bg ml-3">
                                        <a href="https://np.linkedin.com" class="text-white"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="sidebar vendor-rightside-nav d-flex justify-content-between align-items-center flex-wrap py-2 mt-4">
                                <li class="">
                                    Showing all products
                                </li>
                                <li class="d-flex align-items-center">
                                    <select class="form-control mr-2">
                                        <option selected>Choose a Category</option>
                                        <option>Alphabetically</option>
                                        <option>Price High to Low</option>
                                        <option>Recently Added</option>
                                        <option>MOstly Purchased</option>
                                      </select>
                                    <select class="form-control filter mr-2">
                                     <option selected>Filter</option>
                                        <option>Alphabetically</option>
                                        <option>Price High to Low</option>
                                        <option>Recently Added</option>
                                        <option>MOstly Purchased</option>
                                      </select>
                                </li>
                            </ul>
                        </div>
                        <!-- Product Listing -->
                        <section id="product-listing-wrapper" class="py-5">
                            <div class="container">
                                <div class="product-lists">
                                    <div class="row right-side-wrapper">
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 mt-4 post">
                                            <div class="product-grid-item2">
                                                <div class="product-grid-image2">
                                                    <a href="#"> <img src="https://demo2.madrasthemes.com/cartzilla/grocery/wp-content/uploads/sites/5/2020/03/6.jpg" alt="img" class="img-fluid pic-1"> </a>
                                                    <ul class="social">
                                                        <li>
                                                            <a class="fa fa-shopping-bag"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-shopping-cart" onclick="successMsg();"></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="fa fa-exchange"></a>
                                                        </li>
                                                    </ul> <span class="product-discount-label">-20%</span> </div>
                                                <div class="product-content">
                                                    <h3 class="title text-center"> <a href="#" class="font-weight-bold">Authentic Grana Padano </a></h3>
                                                    <div class="price text-center mb-3"> £ 8.00 <span>£ 10.00</span> </div> <a class="all-deals effect" href="">View Product <i class="fa fa-angle-right icon"></i>    </a> </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 mt-4 post">
                                            <div class="product-grid-item2">
                                                <div class="product-grid-image2">
                                                    <a href="#"> <img src="https://demo2.madrasthemes.com/cartzilla/grocery/wp-content/uploads/sites/5/2020/03/6.jpg" alt="img" class="img-fluid pic-1"> </a>
                                                    <ul class="social">
                                                        <li>
                                                            <a class="fa fa-shopping-bag"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-shopping-cart" onclick="successMsg();"></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="fa fa-exchange"></a>
                                                        </li>
                                                    </ul> <span class="product-discount-label">-20%</span> </div>
                                                <div class="product-content">
                                                    <h3 class="title text-center"> <a href="#" class="font-weight-bold">Authentic Grana Padano </a></h3>
                                                    <div class="price text-center mb-3"> £ 8.00 <span>£ 10.00</span> </div> <a class="all-deals effect" href="">View Product <i class="fa fa-angle-right icon"></i>    </a> </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 mt-4 post">
                                            <div class="product-grid-item2">
                                                <div class="product-grid-image2">
                                                    <a href="#"> <img src="https://demo2.madrasthemes.com/cartzilla/grocery/wp-content/uploads/sites/5/2020/03/6.jpg" alt="img" class="img-fluid pic-1"> </a>
                                                    <ul class="social">
                                                        <li>
                                                            <a class="fa fa-shopping-bag"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-shopping-cart" onclick="successMsg();"></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="fa fa-exchange"></a>
                                                        </li>
                                                    </ul> <span class="product-discount-label">-20%</span> </div>
                                                <div class="product-content">
                                                    <h3 class="title text-center"> <a href="#" class="font-weight-bold">Authentic Grana Padano </a></h3>
                                                    <div class="price text-center mb-3"> £ 8.00 <span>£ 10.00</span> </div> <a class="all-deals effect" href="">View Product <i class="fa fa-angle-right icon"></i>    </a> </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 mt-4 post">
                                            <div class="product-grid-item2">
                                                <div class="product-grid-image2">
                                                    <a href="#"> <img src="https://demo2.madrasthemes.com/cartzilla/grocery/wp-content/uploads/sites/5/2020/03/6.jpg" alt="img" class="img-fluid pic-1"> </a>
                                                    <ul class="social">
                                                        <li>
                                                            <a class="fa fa-shopping-bag"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-shopping-cart" onclick="successMsg();"></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="fa fa-exchange"></a>
                                                        </li>
                                                    </ul> <span class="product-discount-label">-20%</span> </div>
                                                <div class="product-content">
                                                    <h3 class="title text-center"> <a href="#" class="font-weight-bold">Authentic Grana Padano </a></h3>
                                                    <div class="price text-center mb-3"> £ 8.00 <span>£ 10.00</span> </div> <a class="all-deals effect" href="">View Product <i class="fa fa-angle-right icon"></i>    </a> </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 mt-4 post">
                                            <div class="product-grid-item2">
                                                <div class="product-grid-image2">
                                                    <a href="#"> <img src="https://demo2.madrasthemes.com/cartzilla/grocery/wp-content/uploads/sites/5/2020/03/6.jpg" alt="img" class="img-fluid pic-1"> </a>
                                                    <ul class="social">
                                                        <li>
                                                            <a class="fa fa-shopping-bag"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-shopping-cart" onclick="successMsg();"></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="fa fa-exchange"></a>
                                                        </li>
                                                    </ul> <span class="product-discount-label">-20%</span> </div>
                                                <div class="product-content">
                                                    <h3 class="title text-center"> <a href="#" class="font-weight-bold">Authentic Grana Padano </a></h3>
                                                    <div class="price text-center mb-3"> £ 8.00 <span>£ 10.00</span> </div> <a class="all-deals effect" href="">View Product <i class="fa fa-angle-right icon"></i>    </a> </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 mt-4 post">
                                            <div class="product-grid-item2">
                                                <div class="product-grid-image2">
                                                    <a href="#"> <img src="https://demo2.madrasthemes.com/cartzilla/grocery/wp-content/uploads/sites/5/2020/03/6.jpg" alt="img" class="img-fluid pic-1"> </a>
                                                    <ul class="social">
                                                        <li>
                                                            <a class="fa fa-shopping-bag"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-shopping-cart" onclick="successMsg();"></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="fa fa-exchange"></a>
                                                        </li>
                                                    </ul> <span class="product-discount-label">-20%</span> </div>
                                                <div class="product-content">
                                                    <h3 class="title text-center"> <a href="#" class="font-weight-bold">Authentic Grana Padano </a></h3>
                                                    <div class="price text-center mb-3"> £ 8.00 <span>£ 10.00</span> </div> <a class="all-deals effect" href="">View Product <i class="fa fa-angle-right icon"></i>    </a> </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 mt-4 post">
                                            <div class="product-grid-item2">
                                                <div class="product-grid-image2">
                                                    <a href="#"> <img src="https://demo2.madrasthemes.com/cartzilla/grocery/wp-content/uploads/sites/5/2020/03/6.jpg" alt="img" class="img-fluid pic-1"> </a>
                                                    <ul class="social">
                                                        <li>
                                                            <a class="fa fa-shopping-bag"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-shopping-cart" onclick="successMsg();"></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="fa fa-exchange"></a>
                                                        </li>
                                                    </ul> <span class="product-discount-label">-20%</span> </div>
                                                <div class="product-content">
                                                    <h3 class="title text-center"> <a href="#" class="font-weight-bold">Authentic Grana Padano </a></h3>
                                                    <div class="price text-center mb-3"> £ 8.00 <span>£ 10.00</span> </div> <a class="all-deals effect" href="">View Product <i class="fa fa-angle-right icon"></i>    </a> </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 mt-4 post">
                                            <div class="product-grid-item2">
                                                <div class="product-grid-image2">
                                                    <a href="#"> <img src="https://demo2.madrasthemes.com/cartzilla/grocery/wp-content/uploads/sites/5/2020/03/6.jpg" alt="img" class="img-fluid pic-1"> </a>
                                                    <ul class="social">
                                                        <li>
                                                            <a class="fa fa-shopping-bag"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-shopping-cart" onclick="successMsg();"></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="fa fa-exchange"></a>
                                                        </li>
                                                    </ul> <span class="product-discount-label">-20%</span> </div>
                                                <div class="product-content">
                                                    <h3 class="title text-center"> <a href="#" class="font-weight-bold">Authentic Grana Padano </a></h3>
                                                    <div class="price text-center mb-3"> £ 8.00 <span>£ 10.00</span> </div> <a class="all-deals effect" href="">View Product <i class="fa fa-angle-right icon"></i>    </a> </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 mt-4 post">
                                            <div class="product-grid-item2">
                                                <div class="product-grid-image2">
                                                    <a href="#"> <img src="https://demo2.madrasthemes.com/cartzilla/grocery/wp-content/uploads/sites/5/2020/03/6.jpg" alt="img" class="img-fluid pic-1"> </a>
                                                    <ul class="social">
                                                        <li>
                                                            <a class="fa fa-shopping-bag"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-shopping-cart" onclick="successMsg();"></a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="fa fa-exchange"></a>
                                                        </li>
                                                    </ul> <span class="product-discount-label">-20%</span> </div>
                                                <div class="product-content">
                                                    <h3 class="title text-center"> <a href="#" class="font-weight-bold">Authentic Grana Padano </a></h3>
                                                    <div class="price text-center mb-3"> £ 8.00 <span>£ 10.00</span> </div> <a class="all-deals effect" href="">View Product <i class="fa fa-angle-right icon"></i>    </a> </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <button type="button" class="effect mx-auto mt-4">View More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Product Listing Ends -->
                    </div>
                </div>
            </div>
        </section>


@endsection