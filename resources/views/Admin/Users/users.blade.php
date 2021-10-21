@extends('Admin.Layout.app') 
@section('meta-data')
    
@endsection 

@section('external-css')
<link rel="stylesheet" href="{{asset('Admin/css/users.css')}}">

@endsection  
@section('main-content')
<div class="container rounded mt-5 bg-white p-md-5 users">
    <div class="row border-bottom">
        <div class="col-sm-4">
            <h2 class="font-weight-bolder">
                <i class="fa fa-user-circle mb-2"></i>&nbsp;Users
            </h2>
        </div>
        <div class="col-sm-8">
            <form action="{{route('admin-users-search')}}" method="post">                
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Email" aria-describedby="search" name="search">
                    <div class="input-group-append">
                        <button class="btn btn-success" id="search">Search</button>                        
                    </div>
                </div>
            </form>
        </div>
    </div>    
    @if(isset($users) && $users->count() > 0)
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Invitations</th>
                        <th scope="col">View</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr class="bg-blue">
                            <td class="pt-2"> 
                                <div class="pl-lg-2 pl-md-2 pl-1 name">
                                    <h6>{{ucfirst($user->name)}}</h6>
                                </div>
                            </td>
                            <td class="pt-3 mt-1">{{$user->created_at->diffForHumans()}}</td>
                            <td class="pt-3">{{$user->invitation->count()}}</td>
                            <td class="pt-3"><a href="{{route('admin-users-details',$user->id)}}" class="btn btn-success btn-sm px-4">View</a></td>
                            
                        </tr>
                        <tr id="spacing-row">
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$users->links()}}
    @else
    <div class="no-data">
        <p class="alert">No Data Found</p>
    </div>    
    @endif
</div>
@endsection

@section('external-js')
@show