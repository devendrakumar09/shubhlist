@extends('Layout.app')

@section('css')
    <link rel="stylesheet" href="{{asset('Template/css/about-us.css')}}" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/invitation.css')}}">    
@endsection

@section('main')
<div class="container-flude wish-top py-5 ">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 d-flex justify-content-center">
                <div class="image mb-3">
                    @if (file_exists(public_path().'/upload/invi/'.$invite->image_1 ))
                        <img  src="{{asset('/upload/invi/')}}/{{$invite->image_1}}" class="img-thumbnail"/>
                    @else
                        <img src="{{asset('Template/img/preview/children.png')}}" class="img-thumbnail" >
                    @endif
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
                    {{ucfirst($invite->quote_1)}}
                </p>
                <div class="buttons">
                    <a href="{{route('my-invitations.edit',$invite->id)}}" class="btn btn-outline-danger btn-rounded px-5 create-Button">Edit</a>
                    <form action="{{route('my-invitations.destroy',$invite->id)}}" method="post" class="mt-1">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-dark btn-rounded px-5 create-Button">Delete</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>

<!-- ---- Histroy-of ----- -->
<div class="container-flude history-Of mt-4 bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6 d-flex justify-content-center">
                <div class="image">
                    @if (file_exists(public_path().'/upload/invi/'.$invite->image_2 ))
                        <img  src="{{asset('/upload/invi/')}}/{{$invite->image_2}}" class="img-thumbnail"/>
                    @else
                        <img src="{{asset('Template/img/preview/about-left-img.png')}}" class="img-thumbnail" >
                    @endif                   
                </div>
            </div>
            <div class="col-sm-6">
                <h2 class="title">
                    {{ucfirst($invite->heading_2)}}
                </h2>
                <p class="text">{{ucfirst($invite->quote_2)}}</p>
            </div>
        </div>
    </div>
</div>

<!-- ---- Gift-Proposal ----- -->
<div class="container-flude Gift-Proposal mt-5 py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-8">
                <h2 class="title">
                    {{ucfirst($invite->heading_3)}}
                </h2>
                <p class="text">{{ucfirst($invite->quote_3)}}</p>                
            </div>

            <div class="col-sm-4">
                <div class="image">
                    @if (file_exists(public_path().'/upload/invi/'.$invite->image_3 ))
                        <img  src="{{asset('/upload/invi/')}}/{{$invite->image_3}}" class="img-thumbnail"/>
                    @else
                        <img src="{{asset('Template/img/preview/gift-img.png')}}" class="img-thumbnail" >
                    @endif                    
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ---- Offers & Services ----- -->
<div class="container-flude offer-services mt-5 py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-4">
                <h2 class="title">
                    {{ucfirst($invite->heading_4)}}
                </h2>
                <p class="text">{{ucfirst($invite->quote_4)}}</p>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card border-0 mt-2">
                            <div class="card-body">
                                <h2 class="title">{{ucfirst($invite->heading_5)}}</h2>
                                <p class="text">{{ucfirst($invite->quote_5)}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card border-0 mt-2">
                            <div class="card-body">
                                <h2 class="title">{{ucfirst($invite->heading_6)}}</h2>
                                <p class="text">{{ucfirst($invite->quote_6)}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card border-0 mt-2">
                            <div class="card-body">
                                <h2 class="title">{{ucfirst($invite->heading_7)}}</h2>
                                <p class="text">{{ucfirst($invite->quote_7)}}</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-6">
                        <div class="card border-0 mt-2">
                            <div class="card-body">
                                <h2 class="title">{{ucfirst($invite->heading_8)}}</h2>
                                <p class="text">{{ucfirst($invite->quote_8)}}</p>
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
            <div class="col-sm-6 text-center mx-auto">
            <h2 class="title">
                    {{ucfirst($invite->heading_9)}}
                </h2>
                <p class="text">
                    {{ucfirst($invite->quote_9)}}
                </p>
            </div>
        </div>
    </div>
</div>
<!-- ---- IMAGE GALLERY ----- -->
<div class="container image-gallery mt-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-8">
                <div class="row align-items-center">                    
                        <div class="col-sm-6">
                            <div class="img-box mt-2 border">
                                @if (file_exists(public_path().'/upload/invi/'.$invite->memories_1 ))
                                    <img  src="{{asset('/upload/invi/')}}/{{$invite->memories_1}}" class="img-thumbnail"/>
                                @else
                                    <img src="{{asset('Template/img/preview/gallary-img3.jpg')}}"  >
                                @endif                                
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="img-box mt-2 border">
                                @if (file_exists(public_path().'/upload/invi/'.$invite->memories_2 ))
                                    <img  src="{{asset('/upload/invi/')}}/{{$invite->memories_2}}" class="img-thumbnail"/>
                                @else
                                    <img src="{{asset('Template/img/preview/gallary-img3.jpg')}}"  >
                                @endif                                
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="img-box mt-2 border">
                                @if (file_exists(public_path().'/upload/invi/'.$invite->memories_3 ))
                                    <img  src="{{asset('/upload/invi/')}}/{{$invite->memories_3}}" class="img-thumbnail"/>
                                @else
                                    <img src="{{asset('Template/img/preview/gallary-img3.jpg')}}"  >
                                @endif                                
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="img-box mt-2 border">
                                @if (file_exists(public_path().'/upload/invi/'.$invite->memories_3 ))
                                    <img  src="{{asset('/upload/invi/')}}/{{$invite->memories_3}}" class="img-thumbnail"/>
                                @else
                                    <img src="{{asset('Template/img/preview/gallary-img3.jpg')}}"  >
                                @endif
                            </div>
                        </div>                       
                    
                </div>
            </div>
            <div class="col-sm-4 text-right mt-4">
                <h2 class="title">
                    {{ucfirst($invite->heading_10)}}
                </h2>
                <p class="text">
                    {{ucfirst($invite->quote_10)}}
                </p> 
            </div>
        </div>
    </div>
</div>

<div class="container flude Follow-Us mt-5 py-4">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="follow-links py-4">
                    <h2 class="title font-weight-bolder">Follow-Us</h2>
                    <a href="" class="facebook follow-buttons mr-2">
                        <img src="{{asset('Template/img/social-media/64px/facebook.png')}}" >
                    </a>
                    <a href="" class="facebook follow-buttons mr-2">
                        <img src="{{asset('Template/img/social-media/64px/instagram.png')}}" >
                    </a>
                    <a href="whatsapp://send?text=Happy-Birthday http://127.0.0.1:8000/invi/birthday/{{ $invite->slug }}" data-action="share/whatsapp/share" target="_blank" class="facebook follow-buttons mr-2">
                        <img src="{{asset('Template/img/social-media/64px/whatsapp.png')}}" >
                    </a>

                    <a href="" class="facebook follow-buttons ">
                        <img src="{{asset('Template/img/social-media/64px/telegram.png')}}" >
                    </a>
                    
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection

@section('js')
@endsection
