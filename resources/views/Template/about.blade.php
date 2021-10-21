@extends('Layout.app')

@section('css')
    <link rel="stylesheet" href="{{asset('Template/css/about-us.css')}}" type="text/css">
<style>

.contact .gradient-brand-color {
    background-image: -webkit-linear-gradient(0deg, #376be6 0%, #6470ef 100%);
    background-image: -ms-linear-gradient(0deg, #376be6 0%, #6470ef 100%);
    color: #fff;
}
.contact .contact-info__wrapper {
    overflow: hidden;
    border-radius: .625rem .625rem 0 0
}

@media (min-width: 1024px) {
    .contact .contact-info__wrapper {
        border-radius: 0 .625rem .625rem 0;
        padding: 5rem !important
    }
}
.contact .contact-info__list span.position-absolute {
    left: 0
}
.contact .z-index-101 {
    z-index: 101;
}
.contact .list-style--none {
    list-style: none;
}
.contact .contact__wrapper {
    background-color: #fff;
    border-radius: 0 0 .625rem .625rem
}

@media (min-width: 1024px) {
    .contact .contact__wrapper {
        border-radius: .625rem 0 .625rem .625rem
    }
}
@media (min-width: 1024px) {
    .contact-form__wrapper {
        padding: 5rem !important
    }
}
.contact .shadow-lg, .contact.shadow-lg--on-hover:hover {
    box-shadow: 0 1rem 3rem rgba(132,138,163,0.1) !important;
}
    </style>
@endsection

@section('main')
    <!------------- breadcrumb --------------->
    <div class="about_page ">
        <div class="container ">
            <div class="nb-page-title-wrap" style="background-image: url({{asset('Template/img/about-us-bg.jpg')}}">
                <div class="container layout-content">
                    <h1>About Us</h1>
                    <nav class="woocommerce-breadcrumb">
                        <a href="/">Home</a>&nbsp;/&nbsp;About Us
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-------------------------------about us------------------------------------>
    <div class="about-section_1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="about-s">
                        <h2><span>ABOUT</span> NEW HIGHT SHOP</h2>
                        <div class="uvc-heading-spacer image_only" style="top">
                            <img src="{{asset('Template/img/icon/heading-icon.png')}}">
                        </div>
                        <div class="text">
                            <p>All of our product is designed, developed, and deployed in-­house. We’re serious about
                                what we do, how we do it, and making sure we’re scaling quickly and smartly.</p>
                        </div>

                        <div class="new-btn-css">
                            <a href="#"> Read More</a>
                        </div>


                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img-b">
                        <img src="{{asset('Template/img/about-us-img.jpg')}}">
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-------------------------------team-section------------------------------------>
    <div class="team-section">
        <div class="container">
            <div class="row">
                <div class="all-title">
                    <h2> <span>Meet</span> OUR TEAMS</h2>
                    <div class="uvc-heading-spacer image_only" style="top">
                        <img src="img/icon/heading-icon.png">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non purus nisl. Morbi vitae
                        vulputate enim, in sagittis nisi. Etiam luctus odio odio nulla sed.</p>
                </div>
            </div>


            <div id="vc-our-team" class="row">
                <div class="col-md-3">
                    <div class="our-content">
                        <div class="our-thumbnail"><img
                                src="../../../demo9.cmsmart.net/aidoo_tf/home/wp-content/uploads/2019/01/meet-1.jpg">
                            <div class="ourteam-social-share">
                                <a href="#"><i class="fa fa-facebook"></i> </a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="our-info">
                            <h4 class="caption">Madison Payne</h4>
                            <div class="occupations">Web developer</div>
                            <div class="description">FB.TW.GIT</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="our-content">
                        <div class="our-thumbnail"><img
                                src="../../../demo9.cmsmart.net/aidoo_tf/home/wp-content/uploads/2019/01/meet-2.jpg">
                            <div class="ourteam-social-share">
                                <a href="#"><i class="fa fa-facebook"></i> </a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="our-info">
                            <h4 class="caption">Madison Payne</h4>
                            <div class="occupations">Web developer</div>
                            <div class="description">FB.TW.GIT</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="our-content">
                        <div class="our-thumbnail"><img
                                src="../../../demo9.cmsmart.net/aidoo_tf/home/wp-content/uploads/2019/01/meet-3.jpg">
                            <div class="ourteam-social-share">
                                <a href="#"><i class="fa fa-facebook"></i> </a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="our-info">
                            <h4 class="caption">Madison Payne</h4>
                            <div class="occupations">Web developer</div>
                            <div class="description">FB.TW.GIT</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="our-content">
                        <div class="our-thumbnail"><img
                                src="../../../demo9.cmsmart.net/aidoo_tf/home/wp-content/uploads/2019/01/meet-4.jpg">
                            <div class="ourteam-social-share">
                                <a href="#"><i class="fa fa-facebook"></i> </a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="our-info">
                            <h4 class="caption">Madison Payne</h4>
                            <div class="occupations">Web developer</div>
                            <div class="description">FB.TW.GIT</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection

@section('js')
    
@endsection
