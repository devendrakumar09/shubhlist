@extends('Admin.Layout.app') 
@section('meta-data')
    
@endsection 

@section('external-css')
<link rel="stylesheet" href="{{asset('Admin/css/dashboard.css')}}">

@endsection  
@section('main-content')

<div class="container mt-5 mb-5 dashboard ">
    <div class="card p-2 shadow py-4">
        <div class="row align-items-center" >
            <div class="col-sm-4 d-flex justify-content-center user-profile">
                <div class="image">
                    @if (file_exists(public_path().'/upload/admin_profile/'.Auth::user()->profile->image ))
                                <img class="rounded-circle border img-thumbnail"  src="{{asset('/upload/admin_profile/')}}/{{Auth::user()->profile->image}}" />
                            @else
                                <img class="rounded-circle"  src="{{asset('Template/img/none.png')}}" />
                            @endif
                </div>
            </div>
            <div class="col-sm-5">
                <h2 class="mt-2 font-weight-bolder">{{ucfirst(Auth::user()->name)}}
                    <span class="edit-button">
                        <button type="button" class="btn btn-sm " data-toggle="modal" data-target="#exampleModalCenter">
                            <i class="fa fa-edit"></i>
                        </button>
                    </span>
                </h2> 
                <span class="address-content small"> 
                    <i class="fa fa-"></i> 
                    <strong>Email - </strong> {{Auth::user()->email}}
                </span>
                <div class="profile-info mt-1 small">                    
                    <span class="address-content"> 
                        <i class="fa fa-"></i> <strong>Numabe - </strong> 
                        {{@Auth::user()->profile->phone}}                        
                    </span>
                    <br>
                    
                    <span class="address-content"> 
                        <i class="fa fa-"></i> <strong>Address - </strong> 
                        {{@ucfirst(Auth::user()->profile->address)}}
                    </span>
                </div>                
            </div>
            <div class="col-sm-3">
                <a href="{{route('admin-users-details',Auth::user()->id)}}" class="btn btn-outline-primary px-4">Details</a>
            </div>
        </div>
    </div>   
</div>

<div class="container dashboard">
    <div class="row">

        <div class="col-sm-4">
            <div class="card-border-0 shadow p-2 quick-card bg-white mb-2">
                <div class="card-body">
                    <h3 class="card-heading font-weight-bolder">Users</h3>
                    <p class="card-text small">These cuties will need a new place where thay can live with their owner.</p>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-start align-items-center"> 
                            <a href="{{route('admin-users')}}" class="btn btn-sm btn-outline-success rounded px-4">Explore</a>
                        </div>
                        <div class="d-flex justify-content-end"> 
                            {{$users->count()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card-border-0 shadow p-2 quick-card bg-white mb-2">
                <div class="card-body">
                    <h3 class="card-heading font-weight-bolder">Invitations</h3>
                    <p class="card-text small">These cuties will need a new place where thay can live with their owner.</p>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-start align-items-center"> 
                            <a href="{{route('admin-invitations')}}" class="btn btn-sm btn-outline-success rounded px-4">Explore</a>
                        </div>
                        <div class="d-flex justify-content-end"> 
                            {{$invitations->count()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-sm-4">
            <div class="card-border-0 shadow p-2 quick-card bg-white mb-2">
                <div class="card-body">
                    <h3 class="card-heading font-weight-bolder">Feedbacks</h3>
                    <p class="card-text small">These cuties will need a new place where thay can live with their owner.</p>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-start align-items-center"> 
                            <a href="{{route('admin-feedbacks')}}" class="btn btn-sm btn-outline-success rounded px-4">Explore</a>
                        </div>
                        <div class="d-flex justify-content-end"> 
                            {{$feedbacks->count()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('update-user-profile')}}" method="post"  enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
        
            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Name" name="name" value="{{Auth::user()->name}}">
            </div>
            <div class="form-group">
                <label for="Phone">Phone</label>
                <input type="text" class="form-control" id="Phone" placeholder="Phone Number" name="phone" value="{{Auth::user()->profile->phone}}">
            </div>
            <div class="form-group">
                <label for="Phone">Address</label>
                <textarea  class="form-control" placeholder="Address.." name="address" >{{Auth::user()->profile->address}}</textarea>
                
            </div>
            <div class="form-group">
                <label for="image">Profile</label>
                <br>
                <input type="file"  id="image" placeholder="Image" name="profile">
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('external-js')
@show