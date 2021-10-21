@extends('Layout.app')

@section('css')
    <link rel="stylesheet" href="{{asset('Template/css/about-us.css')}}" type="text/css">
    
@endsection

@section('main')
    <!-------------------------------breadcrumb------------------------------------>
    <div class="c ">
        <div class="container ">
            <div class="nb-page-title-wrap" style="background-image: url({{asset('Template/img/cropped-bg_title.jpg')}}">
                <div class="container layout-content">
                    <h1>Invitaions</h1>
                    <nav class="woocommerce-breadcrumb">
                        <a href="/">Home</a>&nbsp;/&nbsp;Invitaions
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-------------------------------We’ll Make Your Next Celebration------------------------------------>
    <section class="ttm-row row-text-section ttm-bgcolor-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sep-box text-center">
                        <h2 class="title">We’ll Make Your Next Celebration Very Special!</h2>
                        <h6>Friendly customer service staff for your all questions!</h6>
                        <div class="sep_holder_box width-30 pt-10">
                            <span class="sep_holder"><span class="sep_line"></span></span>
                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                <i class="fa fa-phone"></i>
                            </div>
                            <span class="sep_holder"><span class="sep_line"></span></span>
                        </div>
                        <h4><strong>Call Us</strong>: 1800-200-45678</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!----------------------------------Invitaions thumbnail----------------------------------->
    <section class="ttm-row service-section3 clearfix">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class=" section-title clearfix">
                        <h4>GREAT PROVIDE PLANWEY</h4>

                        <div class="all-title">
                            <div class="wif">
                                <h2> Provide Best Services</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="featured-imagebox static-title mb-45">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{asset('Template/img/blog-01.jpg')}}" alt="">
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h5><a href="{{route('preview')}}"> Birthday</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="featured-imagebox static-title mb-45">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{asset('Template/img/blog-02.jpg')}}" alt="">
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h5><a href="#">Baby shower</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="featured-imagebox static-title mb-45">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{asset('Template/img/blog-03.jpg')}}" alt="">
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h5><a href="#">Christmas</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="featured-imagebox static-title mb-45">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{asset('Template/img/blog-04.jpg')}}" alt="">
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h5><a href="#"> Diwali</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="featured-imagebox static-title mb-45">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{asset('Template/img/blog-05.jpg')}}" alt="">
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h5><a href="#">Easter</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="featured-imagebox static-title mb-45">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{asset('Template/img/blog-06.jpg')}}" alt="">
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h5><a href="#">Fathers day</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')    
@endsection
