@extends('Layout.app')

@section('css')
    <link rel="stylesheet" href="{{asset('Template/css/about-us.css')}}" type="text/css">
    
@endsection

@section('main')
       <!-------------------------------breadcrumb------------------------------------>
       <div class="c ">
        <div class="container ">
            <div class="nb-page-title-wrap" style="background-image: url(img/cropped-bg_title.jpg)">
                <div class="container layout-content">
                    <h1>Themes</h1>
                    <nav class="woocommerce-breadcrumb">
                        <a href="/">Home</a>&nbsp;/&nbsp;Themes
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------breadcrumb------------------------------------>




    <div class="product-thumb-nail">
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <div class="Product-side-aire">

                        <div class="wow">
                            <div class="title">
                                <h3 class="prig"> <span> Search By Price </span></h3>
                            </div>
                            <!-- Start slider -->
                            <div id="advance"></div>
                            <div id="advance_slide"></div>
                            <em>Amount</em> <span id="state"> price</span>


                            <!-- End slider -->
                        </div>

                        <div class="wow">
                            <div class="title">
                                <h3> <span> Product Visibility </span></h3>
                            </div>
                            <div class="file-list">
                                <label class="ggg"><input type="checkbox" checked="checked"> Exclude-From-Catalog <span>
                                        (0) </span></label>
                                <label class="ggg"><input type="checkbox"> Exclude-From-Search <span> (0)
                                    </span></label>
                                <label class="ggg"><input type="checkbox"> Featured <span> (0) </span></label>
                                <label class="ggg"><input type="checkbox"> Out OfStock <span> (0) </span></label>
                                <label class="ggg"><input type="checkbox"> Rated-1 <span> (0) </span></label>
                                <label class="ggg"><input type="checkbox"> Rated-2 <span> (0) </span></label>
                                <label class="ggg"><input type="checkbox"> Rated-3 <span> (0) </span></label>
                                <label class="ggg"><input type="checkbox"> Rated-4 <span> (0) </span></label>
                                <label class="ggg"><input type="checkbox"> Rated-5 <span> (0) </span></label>
                            </div>
                        </div>



                        <div class="wow">
                            <div class="title">
                                <h3> <span> Product Tags </span></h3>
                            </div>
                            <div class="file-list">
                                <label class="ggg"><input type="checkbox"> Beauty <span> (0) </span></label>
                            </div>
                        </div>

                        <div class="wow">
                            <div class="title">
                                <h3> <span> Product Colors </span></h3>
                            </div>
                            <div class="file-list">
                                <ul class="woof_list woof_list_color ">
                                    <li><span style="background:#000000"> </span></li>
                                    <li><span style="background:#1e73be"> </span></li>
                                    <li><span style="background:#81d742"> </span></li>
                                    <li><span style="background:#d935e8"> </span></li>
                                    <li><span style="background:#8224e3"> </span></li>
                                    <li><span style="background:#dd0000"> </span></li>
                                    <li><span style="background:#eeee22"> </span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="wow">
                            <div class="title">
                                <h3> <span> Product Size </span></h3>
                            </div>
                            <div class="file-list">
                                <label class="ggg"><input type="checkbox" checked="checked"> L <span> (0)
                                    </span></label>
                                <label class="ggg"><input type="checkbox"> M <span> (0) </span></label>
                                <label class="ggg"><input type="checkbox"> S <span> (0) </span></label>
                                <label class="ggg"><input type="checkbox"> XL <span> (0) </span></label>
                            </div>
                        </div>

                        <div class="wow">
                            <div class="title">
                                <h3> <span> Brands </span></h3>
                            </div>
                            <div class="file-list">
                                <label class="ggg"><input type="checkbox" checked="checked"> Art Print <span> (0)
                                    </span></label>
                                <label class="ggg"><input type="checkbox"> Canifa <span> (0) </span></label>
                                <label class="ggg"><input type="checkbox"> Forever21 <span> (0) </span></label>
                                <label class="ggg"><input type="checkbox"> print City <span> (0) </span></label>
                                <label class="ggg"><input type="checkbox"> print Point <span> (0) </span></label>
                                <label class="ggg"><input type="checkbox"> Tec Deisgn <span> (0) </span></label>
                            </div>
                        </div>

                        <button>Filter </button>

                    </div>
                </div>
                <div class="col-md-9">


                    <div class="shop-action">
                        <div class="product_archive_options">

                            <div class="product_per_page_options">
                                <span class="per_page_label">Show:</span>
                                <a href="#">8</a> <span class="per_page_separator"> / </span>
                                <a href="#">12</a> <span class="per_page_separator"> / </span>
                                <a class="activated" href="#">16</a> <span class="per_page_separator"> / </span>
                                <a href="#">20</a>
                            </div>
                        </div>


                        <form class="woocommerce-ordering" method="get"> <select name="orderby" class="orderby"
                                aria-label="Shop order">
                                <option value="menu_order" selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by latest</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select> <input type="hidden" name="paged" value="1"></form>
                    </div>



                    <div class="new-print-temp">
                        <div class="row produt__filter">
                            <div class="d-col mix bouquet">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/product-list/1.jpg">
                                        <div class="label">New</div>

                                        <div class="product__item__text">
                                            <a href="#" class="cart-btn">Edit Theme</a>
                                        </div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5><a href="#">Rustic Card Rem Purple</a></h5>
                                        <div class="price"><s>$52.00</s> <span>$23.00 </span></div>

                                    </div>
                                </div>
                            </div>
                            <div class="d-col mix flower-box">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/product-list/2.jpg">

                                        <div class="product__item__text">
                                            <a href="#" class="cart-btn">Edit Theme</a>
                                        </div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5><a href="#">Rustic Card Rem Pink</a></h5>
                                        <div class="price"><s>$52.00</s> <span>$23.00 </span></div>

                                    </div>
                                </div>
                            </div>
                            <div class="d-col mix flower-shelf">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/product-list/3.jpg">
                                        <div class="label">Sale</div>

                                        <div class="product__item__text">
                                            <a href="#" class="cart-btn">Edit Theme</a>
                                        </div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5><a href="#">Rustic Card Rem A</a></h5>
                                        <div class="price"><s>$52.00</s> <span>$23.00 </span></div>

                                    </div>
                                </div>
                            </div>
                            <div class="d-col mix basket">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/product-list/4.jpg">

                                        <div class="product__item__text">
                                            <a href="#" class="cart-btn">Edit Theme</a>
                                        </div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5><a href="#">Rustic Card Rem</a></h5>
                                        <div class="price"><s>$52.00</s> <span>$23.00 </span></div>

                                    </div>
                                </div>
                            </div>
                            <div class="d-col mix gift">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/product-list/5.jpg">

                                        <div class="product__item__text">
                                            <a href="#" class="cart-btn">Edit Theme</a>
                                        </div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5><a href="#">Rustic Card Purple A</a></h5>
                                        <div class="price"><s>$52.00</s> <span>$23.00 </span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-col mix bouquet">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/product-list/6.jpg">

                                        <div class="product__item__text">
                                            <a href="#" class="cart-btn">Edit Theme</a>
                                        </div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5><a href="#">Rustic Card Purple</a></h5>
                                        <div class="price"><s>$52.00</s> <span>$23.00 </span></div>

                                    </div>
                                </div>
                            </div>

                            <div class="d-col mix bouquet">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/product-list/7.jpg">

                                        <div class="product__item__text">
                                            <a href="#" class="cart-btn">Edit Theme</a>
                                        </div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5><a href="#">Rustic Card Purple</a></h5>
                                        <div class="price"><s>$52.00</s> <span>$23.00 </span></div>

                                    </div>
                                </div>
                            </div>

                            <div class="d-col mix bouquet">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/product-list/8.jpg">

                                        <div class="product__item__text">
                                            <a href="#" class="cart-btn">Edit Theme</a>
                                        </div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5><a href="#">Rustic Card Purple</a></h5>
                                        <div class="price"><s>$52.00</s> <span>$23.00 </span></div>

                                    </div>
                                </div>
                            </div>




                        </div>



                    </div>

                </div>
            </div>
        </div>
    </div>







    <div class="divider">
        <div class="container">
            <div class="dividers">

            </div>
        </div>
    </div>

@endsection

@section('js')
    
@endsection
