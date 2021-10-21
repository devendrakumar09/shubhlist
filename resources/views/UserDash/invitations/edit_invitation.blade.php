@extends('Template.invi.Layout.app')

@section('css') 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/invitation.css')}}">
<link rel="stylesheet" href="{{asset('UserDash/css/edit_invi.css')}}">   
@endsection

@section('main')
<form action="{{route('my-invitations.update',$invite->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="container">
    <div class="row">
        <div class="col-sm-10 mx-auto">
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
    </div>
</div>

    <div class="container-flude wish-top py-5 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="d-flex justify-content-center">
                        <div class="image mb-3">
                            @if (file_exists(public_path().'/upload/invi/'.$invite->image_1 ))
                                <img  src="{{asset('/upload/invi/')}}/{{$invite->image_1}}" class="img-thumbnail"/>
                            @else
                                <img src="{{asset('Template/img/preview/children.png')}}" class="img-thumbnail" >
                            @endif

                        </div>
                    </div>
                    <div class="image-uploade mb-2 text-center d-flex justify-content-center">
                        <input type="file" name="img_1" id="" class="form-control w-50">
                    </div>
                </div>
                <div class="col-sm-6 text-center">

                    <h2 class="title">HAPPY
                        <br>
                        <span>
                            Birthday
                        </span>                    
                    </h2>
                    <textarea class="form-control" name="quote_1" cols="10" rows="5">{{$invite->quote_1}}</textarea>
                </div>
            </div>
        </div>
    </div>

    <!-- ---- Histroy-of ----- -->
    <div class="container-flude history-Of mt-4 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="image">
                        @if (file_exists(public_path().'/upload/invi/'.$invite->image_2 ))
                            <img  src="{{asset('/upload/invi/')}}/{{$invite->image_2}}" class="img-thumbnail"/>
                        @else
                            <img src="{{asset('Template/img/preview/about-left-img.png')}}" class="img-thumbnail" >
                        @endif
                    </div>
                    <div class="image-uploade mb-2 text-center d-flex justify-content-center">
                        <input type="file" name="img_2" id="" class="form-control ">
                    </div>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control heading mb-4" value="{{$invite->heading_2}}" name="heading_2">
                    <textarea class="form-control" name="quote_2" cols="10" rows="10">{{$invite->quote_2}}</textarea>
                </div>
            </div>
        </div>
    </div>

    <!-- ---- Gift-Proposal ----- -->
    <div class="container-flude Gift-Proposal mt-5 py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-8">
                    <input type="text" class="form-control heading mb-4" value="{{$invite->heading_3}}" name="heading_3">
                    <textarea class="form-control" name="quote_3" cols="10" rows="5">{{$invite->quote_3}}</textarea>
                </div>

                <div class="col-sm-4">
                    <div class="image">
                        @if (file_exists(public_path().'/upload/invi/'.$invite->image_3 ))
                            <img  src="{{asset('/upload/invi/')}}/{{$invite->image_3}}" class="img-thumbnail"/>
                        @else
                            <img src="{{asset('Template/img/preview/gift-img.png')}}" class="img-thumbnail" >
                        @endif                    

                    </div>
                    <div class="image-uploade mb-2 text-center d-flex justify-content-center">
                        <input type="file" name="img_3" id="" class="form-control ">
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
                    <input type="text" class="form-control heading mb-4" value="{{$invite->heading_4}}" name="heading_4">
                    <textarea class="form-control" name="quote_4" cols="10" rows="10">{{$invite->quote_4}}</textarea>
                </div>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card border-0 mt-2">
                                <div class="card-body">
                                    <input type="text" class="form-control heading mb-4" value="{{$invite->heading_5}}" name="heading_5">
                                    <textarea class="form-control" name="quote_5" cols="10" rows="3">{{$invite->quote_5}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="card border-0 mt-2">
                                <div class="card-body">
                                    <input type="text" class="form-control heading mb-4" value="{{$invite->heading_6}}" name="heading_6">
                                    <textarea class="form-control" name="quote_6" cols="10" rows="3">{{$invite->quote_6}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="card border-0 mt-2">
                                <div class="card-body">
                                    <input type="text" class="form-control heading mb-4" value="{{$invite->heading_7}}" name="heading_7">
                                    <textarea class="form-control" name="quote_7" cols="10" rows="3">{{$invite->quote_7}}</textarea>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="card border-0 mt-2">
                                <div class="card-body">
                                    <input type="text" class="form-control heading mb-4" value="{{$invite->heading_8}}" name="heading_8">
                                    <textarea class="form-control" name="quote_8" cols="10" rows="3">{{$invite->quote_8}}</textarea>
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
                    <input type="text" class="form-control heading mb-4" value="{{$invite->heading_9}}" name="heading_9">
                    <textarea class="form-control" name="quote_9" cols="10" rows="5">{{$invite->quote_9}}</textarea>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ---- IMAGE GALLERY ----- -->
    <div class="container image-gallery mt-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="img-box mt-2 border">
                                @if (file_exists(public_path().'/upload/invi/'.$invite->memories_1 ))
                                    <img  src="{{asset('/upload/invi/')}}/{{$invite->memories_1}}" class="img-thumbnail"/>
                                @else
                                    <img src="{{asset('Template/img/none.png')}}"  >
                                @endif
                            </div>
                            <input type="file" name="bday_memo_1" id="" class="mt-1 mb-1">
                        </div>

                        <div class="col-sm-6">
                            <div class="img-box mt-2 border">
                                @if (file_exists(public_path().'/upload/invi/'.$invite->memories_2 ))
                                    <img  src="{{asset('/upload/invi/')}}/{{$invite->memories_2}}" class="img-thumbnail"/>
                                @else
                                    <img src="{{asset('Template/img/none.png')}}"  >
                                @endif
                            </div>
                            <input type="file" name="bday_memo_2" id="" class="mt-1 mb-1">
                        </div>

                        <div class="col-sm-6">
                            <div class="img-box mt-2 border">
                                @if (file_exists(public_path().'/upload/invi/'.$invite->memories_3 ))
                                    <img  src="{{asset('/upload/invi/')}}/{{$invite->memories_3}}" class="img-thumbnail"/>
                                @else
                                    <img src="{{asset('Template/img/none.png')}}"  >
                                @endif
                            </div>
                            <input type="file" name="bday_memo_3" id="" class="mt-1 mb-1">
                        </div>

                        <div class="col-sm-6">
                            <div class="img-box mt-2 border">
                                @if (file_exists(public_path().'/upload/invi/'.$invite->memories_4 ))
                                    <img  src="{{asset('/upload/invi/')}}/{{$invite->memories_4}}" class="img-thumbnail"/>
                                @else
                                    <img src="{{asset('Template/img/none.png')}}"  >
                                @endif               
                            </div>
                            <input type="file" name="bday_memo_4" id="" class="mt-1 mb-1">
                        </div>                    
                    </div>
                </div>
                <div class="col-sm-4 text-right">
                    <input type="text" class="form-control heading mb-4" value="{{$invite->heading_10}}" name="heading_10">
                    <textarea class="form-control" name="quote_10" cols="10" rows="5">{{$invite->quote_10}}</textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="container flude Follow-Us mt-5 py-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-primary px-5 btn-rounded shadow py-3 px-5 mt-2 create-btn w-30 font-weight-bolder">Update</button>
                </div>
            </div>
        </div>    
    </div>

<form>
@endsection

@section('js')
    
@endsection
