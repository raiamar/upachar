@extends('frontend.layouts.app')

@section('content')
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <img src="frontend/assets/images/banner/1.png" alt="breadcrumb-image" class="img-fluid">
    </div>
    <div class="overlay position-absolute">
        <div class="title p-4">Blog Details</div>
    </div>
</section>
<!-- Breadcrumbs Ends -->
<!-- Checkout -->

<section id="blog-detail-wrapper" class="py-5">
    <div class="container">
        <div class="row">
            
            
            
            <div class="col-xl-8 col-lg-7 col-md-12 p-0">
                <div class="col-lg-12 col-12 order-2 order-lg-1">
                    <div class="image-block">
                        <img src="{{ asset($blog->photo) }}" alt="blog" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-12 col-12 mb-5 mb-lg-0 order-3 order-lg-3">
                    <div class="section-title h-100 d-flex flex-column justify-content-center">
                        <h2 class="pt-4 font-weight-bold">{{ $blog->title }}.
                        </h2>
                        {{-- <p class="text_gray_ptext">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nullam faucibus imperdiet metus at congue. Praesent cursus a ante ut facilisis..</p> --}}
                        <p class="text_gray_ptext"> {{ $blog->description }}.</p>
                        

                    </div>

                </div>

            </div>
            
            <div class="col-xl-4 col-lg-5 col-md-12">
                {{-- <div class="sidebar mb-5 p-4">
                    <div class="popular-tags">
                        <div class="title position-relative">
                            <h4 class="title font-weight-bold mb-4"> Popular Tags </h4>
                        </div>
                        <ul class="m-0 p-0">
                            <li class="buttons">
                                <a href="#">T-shirt</a>
                            </li>
                            <li class="buttons">
                                <a href="#">Jeans</a>
                            </li>
                            <li class="buttons">
                                <a href="#">Medicine</a>
                            </li>
                            <li class="buttons">
                                <a href="#">Health</a>
                            </li>
                            <li class="buttons">
                                <a href="#">Daily Need</a>
                            </li>
                            <li class="buttons">
                                <a href="#">Physics</a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                {{-- <div class="sidebar mb-5 p-4">
                    <div class="popular-post">
                        <div class="title position-relative">
                            <h4 class="title font-weight-bold mb-4"> Popular Post </h4>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="post-image mr-4 w-xl-25 w-md-0">
                                <img src="frontend/assets/images/product-images/1.jpg" alt="">
                            </div>
                            <div class="post-content w-75">
                                <div class="date">
                                    <p class="text-uppercase mb-1"> Jan 21, 2021 </p>
                                </div>
                                <div class="post-title">
                                    <a href="blog-detail.html">
                                        <h5 class="font-weight-bold"> Market is Changing</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="post-image mr-4 w-xl-25 w-md-0">
                                <img src="frontend/assets/images/product-images/1.jpg" alt="">
                            </div>
                            <div class="post-content w-75">
                                <div class="date">
                                    <p class="text-uppercase mb-1"> Jan 21, 2021 </p>
                                </div>
                                <div class="post-title">
                                    <a href="blog-detail.html">
                                        <h5 class="font-weight-bold">E-comerce is everywhere </h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="post-image mr-4 w-xl-25 w-md-0">
                                <img src="frontend/assets/images/product-images/1.jpg" alt="">
                            </div>
                            <div class="post-content w-75">
                                <div class="date">
                                    <p class="text-uppercase mb-1"> Jan 21, 2021 </p>
                                </div>
                                <div class="post-title">
                                    <a href="blog-detail.html">
                                        <h5 class="font-weight-bold"> Digital Marketing Strategies in top
                                            companies
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="post-image mr-4 w-xl-25 w-md-0">
                                <img src="frontend/assets/images/product-images/1.jpg" alt="">
                            </div>
                            <div class="post-content w-75">
                                <div class="date">
                                    <p class="text-uppercase mb-1"> Jan 21, 2021 </p>
                                </div>
                                <div class="post-title">
                                    <a href="blog-detail.html">
                                        <h5 class="font-weight-bold"> Single Vender Multi Vender all over the
                                            world
                                        </h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}


            </div>
        </div>
        {{-- <div class="row">
            <div class="col-xl-8">
                <div class="blog-comment-section pt-3 pb-3 pl-5 pr-5 mb-5">
                    <div class="col-lg-12 my-4">
                        <div class="col-lg-12 mb-xl-4 mb-md-2 pl-0">
                            <div class="user-title">
                                <h2>User Comment</h2>
                            </div>
                        </div>
                        <div class="d-md-flex comment-box-wrapper comment-box mb-xl-4 mb-md-2 mb-2 pb-3">
                            <div class="user-comment">
                                <a href="#">
                                    <img class="img-responsive user-photo"
                                        src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                                </a>
                            </div>
                            <div class="media-body ml-md-5 mt-md-0 mt-3">
                                <h4>Azar Hank</h4>
                                <div class="comment-date mb-2">
                                    <p class="m-0 text-uppercase"> 12 March, 2021 AT 10:50 </p>
                                </div>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed consequuntur
                                    repudiandae, ducimus error animi neque recusandae optio tempora non sequi
                                    cupiditate ipsum perspiciatis porro maxime praesentium doloribus amet
                                    delectus velit.</p>
                                <div class="comment-reply">
                                    <div class="d-md-flex comment-box mb-xl-4 mb-md-2">
                                        <div class="user-comment">
                                            <a href="#">
                                                <img class="img-responsive user-photo"
                                                    src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                                            </a>
                                        </div>
                                        <div class="media-body ml-md-5 mt-md-0 mt-3">
                                            <h4>Azar Hank</h4>
                                            <div class="comment-date mb-2">
                                                <p class="m-0 text-uppercase"> 12 March, 2021 AT 10:50 </p>
                                            </div>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed
                                                consequuntur repudiandae, ducimus error animi neque recusandae
                                                optio tempora non sequi cupiditate ipsum perspiciatis porro
                                                maxime praesentium doloribus amet delectus velit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="button">
                                    <a href="
                                #"> Reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex comment-box-wrapper comment-box mb-xl-4 mb-md-2 mb-2 pb-3">
                            <div class="user-comment">
                                <a href="#">
                                    <img class="img-responsive user-photo"
                                        src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                                </a>
                            </div>
                            <div class="media-body ml-md-5 mt-md-0 mt-3">
                                <h4>Azar Hank</h4>
                                <div class="comment-date mb-2">
                                    <p class="m-0 text-uppercase"> 12 March, 2021 AT 10:50 </p>
                                </div>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed consequuntur
                                    repudiandae, ducimus error animi neque recusandae optio tempora non sequi
                                    cupiditate ipsum perspiciatis porro maxime praesentium doloribus amet
                                    delectus velit.</p>
                                <div class="comment-reply">
                                    <div class="d-md-flex comment-box mb-xl-4 mb-md-2">
                                        <div class="user-comment">
                                            <a href="#">
                                                <img class="img-responsive user-photo"
                                                    src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                                            </a>
                                        </div>
                                        <div class="media-body ml-md-5 mt-md-0 mt-3">
                                            <h4>Azar Hank</h4>
                                            <div class="comment-date mb-2">
                                                <p class="m-0 text-uppercase"> 12 March, 2021 AT 10:50 </p>
                                            </div>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed
                                                consequuntur repudiandae, ducimus error animi neque recusandae
                                                optio tempora non sequi cupiditate ipsum perspiciatis porro
                                                maxime praesentium doloribus amet delectus velit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="button">
                                    <a href="
                                #"> Reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> --}}
        {{-- <div class="row p-3">
            <div class="col-xl-8 col-12 blog-comment-bg p-xl-5 p-2">
                <div class="col-lg-12 mb-4 text-center">
                    <h2 class="font-weight-bold mb-4">Add a comment</h2>
                </div>
                <div class="col-xl-12">
                    <form>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 mb-md-0 mb-4">
                                <input type="text" class="form-control border-0 rounded-0" placeholder="Name">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <input type="email" class="form-control border-0 rounded-0"
                                    placeholder="Email address">
                            </div>
                            <div class="col-12 my-md-5 my-4">
                                <div class="col-text-are d-flex justify-content-center">
                                    <textarea class="w-100 p-3 border-0 rounded-0"
                                        placeholder="Add Comment"></textarea>
                                </div>
                            </div>
                            <div class="button-wrapper m-auto">
                                <a href="#" class="effect anchor-btn px-5">Send</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
    </div>
</section>
@endsection