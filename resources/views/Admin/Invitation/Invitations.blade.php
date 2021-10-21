@extends('Admin.Layout.app') 
@section('meta-data')
    
@endsection 

@section('external-css')
<link rel="stylesheet" href="{{asset('Admin/css/invitations.css')}}">
 
@endsection  
@section('main-content')
<div class="page-content page-container invitations" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h2 class="font-weight-bolder">Invitations</h2>                        
                        @if(isset($invitations) && $invitations->count() >0)
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Invitations</th>
                                            <th>User</th>
                                            <th>Date</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($invitations as $invi)                                
                                            <tr>
                                                <td>
                                                    <a href="" class="btn btn-link text-dark">Birthday</a>
                                                </td>
                                                <td>
                                                    <a href="{{route('admin-users-details',$invi->user->id)}}" class="btn btn-link">
                                                        {{ucfirst($invi->user->name)}}
                                                    </a>
                                                </td>
                                                <td > 
                                                    <span class="btn">
                                                        {{$invi->created_at->diffForHumans()}}
                                                    </span>                                            
                                                </td>
                                                <td>
                                                    <a href="{{route('invite',$invi->slug)}}" class="btn btn-success px-3 btn-sm">View</a>
                                                </td>
                                            </tr>                                        
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="lilnks">
                                {{$invitations->links()}}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('external-js')
@show