@extends('Template.invi.Layout.app')

@section('css') 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
<style>
    .wish-top{
        background-color: #FFFCFD;
    
    }
    .wish-top .title {
        font-size:50px;
        font-weight:bolder;
    }
    .wish-top .title span{
        color:#D50A51;
        font-family: 'Dancing Script', cursive;
    }

    .wish-top .create-Button{
        border-radius:50px;
        border:1px solid;
        font-weight:700;
    }

    .wish-top .image{                
        height:300px;
        width:300px;
        overflow:hidden;    
        border-radius:50%;
        border:5px solid transparent; /*2*/
        background:linear-gradient(45deg,red,blue) border-box; /*3*/ 

    }
    .wish-top .image>img{
        border:none;
        width:100%;
        height:100%;                
    }

    /** --------- offer-services ------------ */
    .history-Of .image{        
        border:none;
        height:400px;
        width:90%;
        overflow:hidden;    
    }
    .history-Of .image>img{
        border:none;
        height:100%;
        width:100%;       
    }

    .history-Of .title {        
        font-weight:bolder;
    }
    .history-Of .title span{
        color:#D50A51;        
    }

    /** --------- Gift ------------ */
    .Gift-Proposal{
        background-color:rgba(255,246,218,255);
    }   

    .Gift-Proposal .image{        
        border:none;
        height:300px;
        width:100%;
        overflow:hidden;    
    }
    .Gift-Proposal .image>img{
        border:none;
        height:100%;
        width:100%;       
    }

    .Gift-Proposal .title {        
        font-weight:bolder;
    }
    .Gift-Proposal .title span{
        color:#D50A51;        
    }

    /** --------- offer-services ------------ */
    .offer-services .card:hover{
        box-shadow:2px 0px 5px #D50A51;
    }
    .offer-services{
        background-color:rgba(254,247,250,255);
    }    

    .offer-services .title {        
        font-weight:bolder;
    }
    .offer-services .title span{
        color:#D50A51;        
    }

    /**---------invite-date------- */

    .invite-date{        
        padding-top:70px;
        padding-bottom:70px;
        background:rgba(0,0,0,.1);
    }

    .invite-date .title{        
        font-size:50px;
        font-weight:700;
        color:#D50A51;
    }

    /**----------Image Gallery -- */
    .image-gallery .img-box{        
        height: 300px;
        background: transparent;
        overflow: hidden;
    }
    .image-gallery .img-box>img{
        height: 100%;
        width: 100%;
    }

    .image-gallery .title span{
        color:#D50A51;
        font-weight:bolder;
    }

    /**Follow */
    .Follow-Us .title{
        color:#D50A51;
        font-weight:bolder;
    }
    .Follow-Us .follow-buttons img{
        border: 2spx solid white;        
        height:50px;        
        border-radius: 50%;
    }

</style>
    
@endsection

@section('main')

<div class="container-flude wish-top py-5 ">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 d-flex justify-content-center">
                <div class="image mb-3">
                    <img src="{{asset('Template/img/preview/children.png')}}" class="img-thumbnail" >
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <h2 class="title">HAPPY
                    <br>
                    <span>
                        Birthday
                    </span>                    
                </h2>
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                </p>
                <a href="{{route('my-invitations.create')}}" class="btn btn-outline-danger btn-rounded px-5 create-Button">Design Your Own </a>
            </div>
        </div>
    </div>
</div>

<!-- ---- Histroy-of ----- -->
<div class="container-flude history-Of mt-4 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 d-flex justify-content-center">
                <div class="image">
                    <img src="{{asset('Template/img/preview/about-left-img.png')}}" class="img-thumbnail" >
                </div>
            </div>
            <div class="col-sm-6">
                <h2 class="title">
                    History Of
                    <br>
                    <span>Valentine</span>
                </h2>
                <p class="text">Saint Valentine (Italian: San Valentino, Latin: Valentinus), officially Saint Valentine of Terni, is a widely recognized third-century Roman saint commemorated on February 14 and since the High Middle Ages is associated with a tradition of courtly love.</p>
                <p class="text">All that is reliably known of the saint commemorated on February 14 is his name and that he was martyred and buried at a cemetery on the Via Flaminia close to the Ponte Milvio to the north of Rome on that day. It is uncertain whether St. Valentine is to be identified as one saint or the conflation of two saints of the same name. Several different martyrologies have been added to later hagiographies that are unreliable. Because so little is reliably known of him, in 1969 the Catholic Church removed his name from the General Roman Calendar.</p>
            </div>
        </div>
    </div>
</div>

<!-- ---- Gift-Proposal ----- -->
<div class="container-flude Gift-Proposal mt-5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
            <h2 class="title">
                    Birthday
                    <br>
                    <span>Gift & Proposal</span>
                </h2>
                <p class="text">A gift or a present is an item given to someone without the expectation of payment or return. An item is not a gift, if that item, itself, is already owned by the one to whom it is given. Although gift-giving might involve an expectation of reciprocity, a gift is meant to be free. In many countries, the act of mutually exchanging money, goods, etc. may sustain social relations and contribute to social cohesion. Economists have elaborated the economics of gift-giving into the notion of a gift economy.</p>                
            </div>

            <div class="col-sm-4">
                <div class="image">
                    <img src="{{asset('Template/img/preview/gift-img.png')}}" class="img-thumbnail" >
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ---- Offers & Services ----- -->
<div class="container-flude offer-services mt-5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h2 class="title">
                    Valentine
                    <br>
                    <span>Offers & Services</span>
                </h2>
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card border-0 mt-2">
                            <div class="card-body">
                                <h2 class="title">Romantic Music</h2>
                                <p class="text">Lorem ipsum dolor sit amet, consetur elit, sed do eiusmod tempor incididunt ut amar ambore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card border-0 mt-2">
                            <div class="card-body">
                                <h2 class="title">Valentine Gift</h2>
                                <p class="text">Lorem ipsum dolor sit amet, consetur elit, sed do eiusmod tempor incididunt ut amar ambore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card border-0 mt-2">
                            <div class="card-body">
                                <h2 class="title">Romantic Dinner</h2>
                                <p class="text">Lorem ipsum dolor sit amet, consetur elit, sed do eiusmod tempor incididunt ut amar ambore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-6">
                        <div class="card border-0 mt-2">
                            <div class="card-body">
                                <h2 class="title">Free Drinks</h2>
                                <p class="text">Lorem ipsum dolor sit amet, consetur elit, sed do eiusmod tempor incididunt ut amar ambore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ---- Invite-date ----- -->
<div class="container-flude invite-date mt-4" style="background-image: url({{asset('Template/img/preview/counter-love2.png')}}">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="title"> Date </h2>
            </div>
        </div>
    </div>
</div>

<!-- ---- IMAGE GALLERY ----- -->
<div class="container image-gallery mt-4 mb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="img-box mt-2 border">
                            <img src="{{asset('Template/img/preview/gallary-img.jpg')}}"  >
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="img-box mt-2 border">
                            <img src="{{asset('Template/img/preview/gallary-img2.jpg')}}"  >
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="img-box mt-2 border">
                            <img src="{{asset('Template/img/preview/gallary-img3.jpg')}}"  >
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="img-box mt-2 border">
                            <img src="{{asset('Template/img/preview/feedback2.png')}}"  >
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="col-sm-4 text-right">
                <h2 class="title">
                        Valentine
                        <br>
                    <span>Captures & Shoots</span>
                </h2>
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur ading elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud aliquip.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                </p>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
    
@endsection
