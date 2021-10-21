<div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">                
        <div class="offcanvas__logo">
            <a href="/"><img src="{{asset('Template/img/logo.png')}}" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>

    <header class="header">
        <div class="container">
            <div class="topsss ">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="el-lang gggh">
                            <ul>
                                <li><i class="fa fa-phone"></i> <a href="#">+91 123 456 7890 </a></li>
                                <li><i class="icon-phone"></i> <a href="#">IND, ₹ </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="header__logo">
                            <a href="/"><img src="{{asset('Template/img/logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="header__option__right gggh">
                            
                            <div class="header__option__right__cart">
                                <ul>                                    
                                    @if(Auth::guest())
                                        <li>                    
                                            <a class="btn btn-primary px-4 py-2 btn-sm"  href="{{ route('login') }}"><i class="fa fa-user-circle mr-1"></i> Log In </a>
                                        </li>
                                    @else
                                        <li>
                                            <a class="px-4 btn btn-outline-primary btn-sm" href="{{route('user-dashboard')}}">
                                            Hi {{ucfirst(Auth::user()->name)}}
                                            </a>                                            
                                        </li>
                                    @endif                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="header__options">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="/">Home</a></li>
                                <li><a href="{{route('about')}}">About Us</a></li>

                                <li><a href="{{route('invitation')}}">Invitations</a>
                                    <ul class="dropdown mega-wifth">
                                        <li><a href="{{route('preview')}}">Birthday</a></li>                                        
                                        <li><a href="#">Christmas</a></li>                                        
                                        <li><a href="#">Easter</a></li>
                                        <li><a href="#">New Year</a></li>
                                        <li><a href="#">Ramadan</a></li>
                                        <li><a href="#">Valentines day</a></li>
                                        <li><a href="#">Wedding</a></li>
                                        <li><a href="#">Engagement party</a></li>
                                        <li><a href="#">Haldi & Mehndi Ceremony</a></li>
                                        <li><a href="#">Reception ceremony</a></li>
                                    </ul>
                                </li>
                                <!--
                                <li><a href="themes.html">Themes</a></li> -->
                                <li><a href="#">Blog</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
</div>