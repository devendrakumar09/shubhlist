@extends('Layout.app')

@section('css')
<style>
        .mega-dropdown {
            position: static !important;
        }

        .mega-dropdown-menu {
            padding: 20px 0px;
            width: 100%;
            box-shadow: none;
            -webkit-box-shadow: none;
        }

        .mega-dropdown-menu>li>ul {
            padding: 0;
            margin: 0;
        }

        .mega-dropdown-menu>li>ul>li {
            list-style: none;
        }

        .mega-dropdown-menu>li>ul>li>a {
            display: block;
            color: #222;
            padding: 3px 5px;
        }

        .mega-dropdown-menu>li ul>li>a:hover,
        .mega-dropdown-menu>li ul>li>a:focus {
            text-decoration: none;
        }

        .mega-dropdown-menu .dropdown-header {
            font-size: 18px;
            color: #ff3546;
            padding: 5px 60px 5px 5px;
            line-height: 30px;
        }

        .carousel-control {
            width: 30px;
            height: 30px;
            top: -35px;

        }

        .left.carousel-control {
            right: 30px;
            left: inherit;
        }

        .carousel-control .glyphicon-chevron-left,
        .carousel-control .glyphicon-chevron-right {
            font-size: 12px;
            background-color: #fff;
            line-height: 30px;
            text-shadow: none;
            color: #333;
            border: 1px solid #ddd;
        }


        /**CATEGORY */
        

.categories .title {
    color: #1a1a1a;
    text-align: center;
    margin-bottom: 10px
}

.categories .content {
    position: relative;
    width: 90%;
    max-width: 400px;
    margin: auto;
    overflow: hidden;
    margin-top:20px;
}

.categories .content .content-overlay {
    background: rgba(0, 0, 0, 0.7);
    position: absolute;
    height: 99%;
    width: 100%;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    opacity: 0;
    -webkit-transition: all 0.4s ease-in-out 0s;
    -moz-transition: all 0.4s ease-in-out 0s;
    transition: all 0.4s ease-in-out 0s
}

.categories .content:hover .content-overlay {
    opacity: 1
}

.categories .content-image {
    width: 100%
}

.categories img {
    box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.1);
    border-radius: 5px
}

.categories .content-details {
    position: absolute;
    text-align: center;
    padding-left: 1em;
    padding-right: 1em;
    width: 100%;
    top: 50%;
    left: 50%;
    opacity: 0;
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    -webkit-transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s
}

.categories .content:hover .content-details {
    top: 50%;
    left: 50%;
    opacity: 1
}

.categories .content-details h3 {
    color: #fff;
    font-weight: 500;
    letter-spacing: 0.15em;
    margin-bottom: 0.5em;
    text-transform: uppercase
}

.categories .content-details p {
    color: #fff;
    font-size: 0.8em
}

.categories .fadeIn-bottom {
    top: 80%
}

.categories .links-wrap a .go-create{
    font-family: 'Raleway';
    font-weight: 500;
    display: inline-block;
    margin-bottom: 0;
    background: linear-gradient(to right, rgb(229 52 52) 0%,rgb(235 164 12) 100%);
    color: #fff;
    border-radius: 0;
    line-height: 24px;
    padding: 8px 25px;
}

    </style>
@endsection
@section('main')
    <div class="main-slider">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="slider-img">
                        <img src="{{asset('Template/img/slider1.jpg')}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="slider-content">
                        <h3>Wedding Invitations</h3>
                        <div class="pra">
                            <p>Looking for paper? Shop our printed wedding collection exclusively at paper
                                source, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis cursus
                                arcu. Duis magna nibh, rhoncus vel</p>
                        </div>

                        <div class="shop-now">
                            <a href="#"> Create </a>
                        </div>

                        <div class="social-tag">
                            <ul>
                                <li><a href="#" target="_blank"> Facebook </a></li>
                                <li><a href="#" target="_blank"> twitter </a></li>
                                <li><a href="#" target="_blank"> Instagram </a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ------------- categories ------------- -->
    <div class="categories">
        <div class="container">

            <div class="row">
                <div class="all-title">
                    <h2> Create your own Invitations </h2>
                    <p>Choose an existing template and personalize it.</p>
                </div>
            </div>
            <div class="row product-online-desginer mt-0">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="content"> 
                        <div class="content-overlay"></div> 
                        <img class="content-image" src="{{asset('Template/img/categories/categories-1.jpg')}}">
                        <div class="content-details fadeIn-bottom links-wrap">
                            <a href="{{route('preview')}}">
                                <h6 class="go-create">DESIGN NOW</h6>
                            </a>
                        </div>                        
                    </div>
                    <a href="#" class="">
                        <h6 class=" ml-3 mt-1">Pressed Blossoms - Pink</h6>
                    </a>
                </div>

                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="content"> 
                        <div class="content-overlay"></div> 
                        <img class="content-image" src="{{asset('Template/img/categories/categories-2.jpg')}}">
                        <div class="content-details fadeIn-bottom links-wrap">
                            <a href="{{route('preview')}}">
                                <h6 class="go-create">DESIGN NOW</h6>
                            </a>
                        </div>                        
                    </div>
                    <a href="#" class="">
                        <h6 class=" ml-3 mt-1">Pressed Blossoms - Yellow A</h6>
                    </a>
                </div>

                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="content"> 
                        <div class="content-overlay"></div> 
                        <img class="content-image" src="{{asset('Template/img/categories/categories-3.jpg')}}">
                        <div class="content-details fadeIn-bottom links-wrap">
                            <a href="{{route('preview')}}">
                                <h6 class="go-create">DESIGN NOW</h6>
                            </a>
                        </div>                        
                    </div>
                    <a href="#" class="">
                        <h6 class=" ml-3 mt-1">Chincoteague</h6>
                    </a>
                </div>

                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="content"> 
                        <div class="content-overlay"></div> 
                        <img class="content-image" src="{{asset('Template/img/categories/categories-5.jpg')}}">
                        <div class="content-details fadeIn-bottom links-wrap">
                            <a href="{{route('preview')}}">
                                <h6 class="go-create">DESIGN NOW</h6>
                            </a>
                        </div>                        
                    </div>
                    <a href="#" class="">
                        <h6 class=" ml-3 mt-1">Romantic Card</h6>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- ------------- Demo Card ------------- -->
    <div class="vc_row wpb_row vc_row-fluid vc_custom_1551329596686">
        <div class="container">
            <div class="row">
                <div class="wpb_column vc_column_container col-lg-6">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="nb-fw banner  border-inside ">
                                <div class="nbfw_banner-container">
                                    <a class="image-link" href="#">
                                        <img src="{{asset('Template/img/image-banner2-1.jpg')}}" alt="banner"></a>
                                    <a href="#">
                                        <div class="info-wrapper bg-black">
                                            <div class="nbfw-txt-info text-left p-bottom-left">
                                                <h4 class="txt-primary"> CREATE INVITATIONS</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container col-lg-6">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="nb-fw banner  zoom-in ">
                                                <div class="nbfw_banner-container">
                                                    <a class="image-link" href="#">
                                                        <img src="{{asset('Template/img/image-banner2-2.jpg')}}" alt="banner"></a>

                                                    <a href="#">
                                                        <div class="info-wrapper bg-black">
                                                            <div class="nbfw-txt-info text-left p-bottom-left">
                                                                <h4 class="txt-primary"> CREATE INVITATIONS</h4>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                <div
                                    class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6 vc_hidden-sm vc_hidden-xs">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="nb-fw banner  lightning ">
                                                <div class="nbfw_banner-container">
                                                    <a class="image-link" href="#">
                                                        <img src="{{asset('Template/img/image-banner2-3.jpg')}}" alt="banner"></a>
                                                    <a href="#">
                                                        <div class="info-wrapper bg-black"></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6 vc_hidden-sm vc_hidden-xs">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="nb-fw banner  flashing ">
                                                <div class="nbfw_banner-container">
                                                    <a class="image-link" href="#">
                                                        <img src="{{asset('Template/img/image-banner2-4.jpg')}}" alt="banner"></a>
                                                    <a href="#">
                                                        <div class="info-wrapper bg-black">
                                                            <div class="nbfw-txt-info text-left p-bottom-left">
                                                                <h4 class="txt-primary"> CREATE INVITATIONS</h4>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ------------- about-section (Why choose us) ------------- -->
    <div class="about-section mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="all-title">
                        <h2> Why choose us</h2>
                        <p>We are dedicated in helping make each bride’s dream day come true. We are committed to
                            removing all the hassles when buying wedding stationery.</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                            <div class="whole">
                                <div class="aio-icon-left">
                                    <div class="img-ef">
                                        <img src="{{asset('Template/img/1.jpg')}}">
                                    </div>
                                </div>
                                <div class="aio-ibd-block">
                                    <h3 class="fg">700+ TEMPLATES</h3>
                                    <p> With dozens of templates, you can easily create your own wedding card for any
                                        style & theme. </p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="whole">
                                <div class="aio-icon-left">
                                    <div class="img-ef">
                                        <img src="{{asset('Template/img/2.jpg')}}">
                                    </div>
                                </div>
                                <div class="aio-ibd-block">
                                    <h3>POWERFULL TOOL</h3>
                                    <p> Powerful design and editing tools enable you to achieve high-quality results
                                        without any hassles. </p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="whole">
                                <div class="aio-icon-left">
                                    <div class="img-ef">
                                        <img src="{{asset('Template/img/3.jpg')}}">
                                    </div>
                                </div>
                                <div class="aio-ibd-block">
                                    <h3>EASY TO USE</h3>
                                    <p> With only a few clicks, anyone can create professional artworks, even without
                                        any experience </p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="whole">
                                <div class="aio-icon-left">
                                    <div class="img-ef">
                                        <img src="{{asset('Template/img/4.jpg')}}">
                                    </div>
                                </div>
                                <div class="aio-ibd-block">
                                    <h3>
                                        NO REGISTRATION REQUIRED</h3>
                                    <p>Try it for free! No download or registration required; effortless and
                                        time-saving! </p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="shop-now">
                                <a href="#"> Create Now </a>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="col-md-6">
                    <div class="aboiut-img">
                        <img src="{{asset('Template/img/bridal.jpg')}}">

                    </div>
                </div>
            </div>
        </div>
    </div>    
    

    <!-- ------------- New Print Template ------------- -->
    <div class="new-print-temp">

        <div class="container">

            <div class="row">
                <div class="all-title">
                    <h2> New Invitations Templates</h2>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-xs-12 ">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                role="tab" aria-controls="nav-home" aria-selected="true"><span>ALL CATEGORIES</span></a>
                            <!-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><span>CLASSIC</span></a>
                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><span>MODERN</span></a>
                      <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false"><span>Romantic</span></a>
					  <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#rustic" role="tab" aria-controls="nav-about" aria-selected="false"><span>Rustic</span></a>-->
                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active " id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">

                            <div class="tbabs align-items-center">
                                <div class="col-md5">
                                    <div class="cat_img">
                                        <a href="#">
                                            <img src="{{asset('Template/img/Templates-banner.jpg')}}"
                                                alt="image-cat">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md7">

                                    <div class="row produt__filter">
                                        <div class="d-col mix bouquet">
                                            <div class="product__item">
                                                <div class="product__item__pic set-bg" data-setbg="{{asset('Template/img/Templates1.jpg')}}">
                                                    <div class="label">New</div>
                                                    
                                                    <div class="product__item__text">
                                                        <a href="#" class="cart-btn">Create</a>
                                                    </div>
                                                </div>
                                                <div class="product__item__text">
                                                    <h5><a href="#">Rustic Card Rem Purple</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-col mix flower-box">
                                            <div class="product__item">
                                                <div class="product__item__pic set-bg" data-setbg="{{asset('Template/img/Templates2.jpg')}}">
                                                    
                                                    <div class="product__item__text">
                                                        <a href="#" class="cart-btn">Create</a>
                                                    </div>
                                                </div>
                                                <div class="product__item__text">
                                                    <h5><a href="#">Rustic Card Rem Pink</a></h5>
                                                    

                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-col mix flower-shelf">
                                            <div class="product__item">
                                                <div class="product__item__pic set-bg" data-setbg="{{asset('Template/img/Templates3.jpg')}}">
                                                    <div class="label">New</div>
                                                    
                                                    <div class="product__item__text">
                                                        <a href="#" class="cart-btn">Create</a>
                                                    </div>
                                                </div>
                                                <div class="product__item__text">
                                                    <h5><a href="#">Rustic Card Rem A</a></h5>
                                                    

                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-col mix basket">
                                            <div class="product__item">
                                                <div class="product__item__pic set-bg" data-setbg="{{asset('Template/img/Templates4.jpg')}}">
                                                    
                                                    <div class="product__item__text">
                                                        <a href="#" class="cart-btn">Create</a>
                                                    </div>
                                                </div>
                                                <div class="product__item__text">
                                                    <h5><a href="#">Rustic Card Rem</a></h5>
                                                    

                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-col mix gift">
                                            <div class="product__item">
                                                <div class="product__item__pic set-bg" data-setbg="{{asset('Template/img/Templates5.jpg')}}">
                                                    
                                                    <div class="product__item__text">
                                                        <a href="#" class="cart-btn">Create</a>
                                                    </div>
                                                </div>
                                                <div class="product__item__text">
                                                    <h5><a href="#">Rustic Card Purple A</a></h5>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-col mix bouquet">
                                            <div class="product__item">
                                                <div class="product__item__pic set-bg" data-setbg="{{asset('Template/img/Templates6.jpg')}}">
                                                    
                                                    <div class="product__item__text">
                                                        <a href="#" class="cart-btn">Create</a>
                                                    </div>
                                                </div>
                                                <div class="product__item__text">
                                                    <h5><a href="#">Rustic Card Purple</a></h5>
                                                    

                                                </div>
                                            </div>
                                        </div>



                                    </div>



                                </div>
                            </div>






                        </div>
                        <!--  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                     
					 
					  
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
	
                    </div>
                    <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
	
                    </div>
					 <div class="tab-pane fade" id="rustic" role="tabpanel" aria-labelledby="nav-about-tab">
	
                    </div>--->
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- ------------- News Print (We love my client) ------------- -->
    <div class="testimonial mt-5">

        <div class="container">

            <div class="row">
                <div class="all-title">
                    <div class="wif">
                        <h2> We love my client</h2>
                        <p>Thanks our beloved customers for sharing their testimonials with us. Don’t hear we say good
                            about us, listen to our customers say about us</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial__slider owl-carousel">
                        <div class="testimonial__item">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-12">
                                    <div class="testimonial__text">

                                        <div class="vc-item-testimonial">
                                            <div class="vc-avatar-img">
                                                <div class="wrap-image">
                                                    <img class="image-avatar" src="{{asset('Template/img/testimonial-i1.png')}}"
                                                        alt="testimonial-image">
                                                </div>
                                            </div>
                                            <div class="vc-content-nameposition">
                                                <div class="client-name"> Jonh Hee</div>
                                                <p class="client-position">(Web Designer)</p>
                                                <p class="title"></p>
                                                <p class="description">This PSD is so well organised - the best Ive ever
                                                    downloaded from here. The ideas are also really fresh and new great
                                                    work. This PSD is so well organised - the best Ive ever downloaded
                                                    from here. The ideas are also really fresh and new - great work.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__item">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-12">
                                    <div class="testimonial__text">

                                        <div class="vc-item-testimonial">
                                            <div class="vc-avatar-img">
                                                <div class="wrap-image">
                                                    <img class="image-avatar" src="{{asset('Template/img/testimonial-i1.png')}}"
                                                        alt="testimonial-image">
                                                </div>
                                            </div>
                                            <div class="vc-content-nameposition">
                                                <div class="client-name"> Jonh Hee</div>
                                                <p class="client-position">(Web Designer)</p>
                                                <p class="title"></p>
                                                <p class="description">This PSD is so well organised - the best Ive ever
                                                    downloaded from here. The ideas are also really fresh and new great
                                                    work. This PSD is so well organised - the best Ive ever downloaded
                                                    from here. The ideas are also really fresh and new - great work.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- ------------- blog-section ------------- -->
    <div class="blog-section">


        <div class="container">

            <div class="row">
                <div class="all-title">
                    <h2> Our blog</h2>
                    <p>Read our blog to update the trend of the phone case’s world and get new information</p>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="nb_wp_post-i">
                        <div class="nb-post-thumb thumb_1-1">
                            <div class="nb-post-thumb-i"> <a href="#"
                                    style="background-image:url({{asset('Template/img/Blog-A1.jpg')}});"></a></div>
                        </div>
                        <div class="nb-post-block">
                            <div class="nb-post-header">
                                <div class="nb-post-cats">Category <a href="#" rel="category tag">Blog</a></div>
                                <div class="nb-post-meta"> <span class="nb-post-author"><span>By </span> <span>26
                                            February,19</span> </span>
                                </div>
                                <h4 class="nb-title-post"> <a href="#"> A Very Anthropologie Holiday with Jodie Harrison
                                    </a></h4>
                            </div>
                            <div class="nb-post-content">
                                <p>One of my favorite illustrators, Dan who goes by the creative name of Roach
                                    Graphics,...</p>
                                <div class="nb-post-readmore ">
                                    <div class="shop-now">
                                        <a href="#"> Shop Now </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="nb_wp_post-i">
                        <div class="nb-post-thumb thumb_1-1">
                            <div class="nb-post-thumb-i">
                                <a href="#" style="background-image:url({{asset('Template/img/Blog-A2.jpg')}});"></a>
                            </div>
                        </div>
                        <div class="nb-post-block">
                            <div class="nb-post-header">
                                <div class="nb-post-cats">Category
                                    <a href="#" rel="category tag">Blog</a>
                                </div>
                                <div class="nb-post-meta"> <span class="nb-post-author"><span>By </span> <span>26
                                            February,19</span> </span>
                                </div>
                                <h4 class="nb-title-post"> <a href="#"> A Very Anthropologie Holiday with Jodie Harrison
                                    </a></h4>
                            </div>
                            <div class="nb-post-content">
                                <p>One of my favorite illustrators, Dan who goes by the creative name of Roach
                                    Graphics,...</p>
                                <div class="nb-post-readmore ">
                                    <div class="shop-now">
                                        <a href="#"> Shop Now </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>

    <!-- ------------- grantee-section ------------- -->
    <div class="grantee-section">
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <div class="el">
                        <div class="icon">
                            <img src="{{asset('Template/img/quality.png')}}">
                        </div>

                        <div class="det">
                            <h3>Quality Printing</h3>
                            <p>Bright inks. Thick Paper. Precise</p>
                        </div>

                    </div>
                </div>



                <div class="col-md-3">
                    <div class="el">
                        <div class="icon">
                            <img src="{{asset('Template/img/24.png')}}">
                        </div>

                        <div class="det">
                            <h3>Timely Delivery</h3>
                            <p>Bright inks. Thick Paper. Precise</p>
                        </div>

                    </div>
                </div>



                <div class="col-md-3">
                    <div class="el">
                        <div class="icon">
                            <img src="{{asset('Template/img/eco.png')}}">
                        </div>

                        <div class="det">
                            <h3>Eco-Minded</h3>
                            <p>Bright inks. Thick Paper. Precise</p>
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="el">
                        <div class="icon">
                            <img src="{{asset('Template/img/wallet.png')}}">
                        </div>

                        <div class="det">
                            <h3>Money Back Guaranteed</h3>
                            <p>Bright inks. Thick Paper. Precise</p>
                        </div>

                    </div>
                </div>




            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
                    $(this).toggleClass('open');
                }
            );
        });

    </script>
    <script>
        var options = { "particles": { "number": { "value": 99, "density": { "enable": true, "value_area": 552.4033491425909 } }, "color": { "value": "#ffffff" }, "shape": { "type": "circle", "stroke": { "width": 0, "color": "#000000" }, "polygon": { "nb_sides": 3 }, "image": { "src": "img/github.svg", "width": 70, "height": 100 } }, "opacity": { "value": 1, "random": true, "anim": { "enable": false, "speed": 1, "opacity_min": 0.1, "sync": false } }, "size": { "value": 2, "random": true, "anim": { "enable": false, "speed": 40, "size_min": 0.1, "sync": false } }, "line_linked": { "enable": false, "distance": 150, "color": "#ffffff", "opacity": 0.4, "width": 1 }, "move": { "enable": true, "speed": 1.5782952832645452, "direction": "none", "random": true, "straight": false, "out_mode": "out", "bounce": false, "attract": { "enable": false, "rotateX": 600, "rotateY": 1200 } } }, "interactivity": { "detect_on": "canvas", "events": { "onhover": { "enable": false, "mode": "repulse" }, "onclick": { "enable": true, "mode": "repulse" }, "resize": true }, "modes": { "grab": { "distance": 400, "line_linked": { "opacity": 1 } }, "bubble": { "distance": 400, "size": 40, "duration": 2, "opacity": 8, "speed": 3 }, "repulse": { "distance": 200, "duration": 0.4 }, "push": { "particles_nb": 4 }, "remove": { "particles_nb": 2 } } }, "retina_detect": false };
        particlesJS("particle", options);
    </script>
@endsection