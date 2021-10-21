@extends('Admin.Layout.app') 
@section('meta-data')
    
@endsection 

@section('external-css')
<link rel="stylesheet" href="{{asset('Admin/css/user_details.css')}}">

@endsection  
@section('main-content')
<div class="container mt-5 mb-5 dashboard">
    <div class="card p-2">
        <div class="row align-items-center" >
            <div class="col-sm-4 d-flex justify-content-center user-profile">
                <div class="image">
                    @if (file_exists(public_path().'/upload/admin_profile/'.Auth::user()->profile->image ))
                        <img class="rounded-circle border"  src="{{asset('/upload/admin_profile/')}}/{{Auth::user()->profile->image}}" />
                    @else
                        <img class="rounded-circle"  src="{{asset('Template/img/none.png')}}" />
                    @endif                    
                </div>
            </div>
            <div class="col-sm-8 ">
                <h2 class="mt-2">{{ucfirst($user->name)}}</h2> 
                <span class="address-content"> <i class="fa fa-"></i> <strong>Email - </strong> {{$user->email}}</span>
                <p><span class="address-content"> <i class="fa fa-"></i> <strong>Password - </strong> {{$user->password}}</span></p>
                
                <div class="profile-info mt-4">                    
                    <p><span class="address-content"> <i class="fa fa-"></i> <strong>Mobile - </strong> {{@$user->profile->phone}}</span></p>
                    <p><span class="address-content"> <i class="fa fa-"></i> <strong>Address - </strong> {{@ucfirst($user->profile->address)}}</span></p>
                </div>
                @if($user->role->title != 'admin')
                    <form action="{{route('admin-users-delete',$user->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete ({{ucfirst($user->name)}})</button>
                    </form>
                @endif
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-sm-12">
            <h3 class="font-weight-bolder">Invitations</h3>
        </div>        
    </div>

    <div class="row mt-2">
        @if(isset($invitations) && $invitations->count() > 0)
            @foreach($invitations as $invi)
                <div class="col-sm-3 d-flex">
                    <div class="card rounded my-invitation shadowss mb-0">
                        <figure class="mb-0">
                            <img class="card-img-top img-thumbnail" src="{{asset('Template/img/blog-01.jpg')}}">
                        </figure>                                
                        <div class="card-body d-block justify-content-center text-center mb-0 mt-0 pb-2 pt-3">
                            <h5 class="">Happy Birthday</h5>                                    
                        </div>
                        <div class="card-footer mt-0 border-0 bg-white">
                            <a href="{{route('invite',$invi->slug)}}" class="btn btn-primary btn-sm Priview w-100">Preview</a>                                            
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-sm-6 mx-auto ">
                <div class="card p-4">
                    <h1 class="font-weight-bolder">No Data Found!!!!</h1>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection

@section('external-js')
@show