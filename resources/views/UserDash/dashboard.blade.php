@extends('Layout.app')

@section('css')
<link rel="stylesheet" href="{{asset('UserDash/css/dashboard.css')}}">   
@endsection

@section('main')
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

<div class="container mt-5 mb-5 dashboard">
    <div class="card"> 
        <div class="row g-2">
            <div class="col-md-4 user-profile">
                <div class="p-3 text-center border-end mt-4 "> 
                    <div class="progilr-image d-flex justify-content-center">
                        <figure>                            
                            @if (file_exists(public_path().'/upload/admin_profile/'.$user->profile->image ))
                                <img class="rounded-circle border img-thumbnail"  src="{{asset('/upload/admin_profile/')}}/{{$user->profile->image}}" />
                            @else
                                <img class="rounded-circle"  src="{{asset('Template/img/none.png')}}" />
                            @endif                            
                        </figure>
                    </div>
                    <h2 class="mt-2">{{ucfirst($user->name)}}</h2> 
                    <span class="address-content">{{$user->email}}
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm " data-toggle="modal" data-target="#exampleModalCenter">
                            <i class="fa fa-edit"></i>
                        </button>
                    </span>

                    
                    <div class="profile-info text-left mt-3">
                        <p class="profile-text">
                            <span>Phone</span>
                            <br/>
                            {{$user->profile->phone}}
                        </p>

                        <p class="profile-text">
                            <span>DOB</span>
                            <br/>
                            {{$user->profile->dob}}
                        </p>

                        <p class="profile-text">
                            <span>Address</span>
                            <br/>
                            {{ucfirst($user->profile->address)}}
                        </p>
                    </div>



                    <div class="content-aboutme mt-1 p-3">
                        <a class="btn btn-danger btn-sm w-100" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>                            
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="p-3 board">
                    <div class="d-flex justify-content-between align-items-center mb-4"> 
                        <h4 class="font-weight-bolder text-success">My Invitation</h4>                         
                    </div>
                    <div class="row">
                        @if(isset($invitations) && $invitations->count() > 0)
                            @foreach($invitations as $invi)
                                <div class="col-sm-6 mb-4">
                                    <div class="card rounded my-invitation shadowss">
                                        <figure class="mb-0">
                                            <img class="card-img-top img-thumbnail" src="{{asset('Template/img/blog-01.jpg')}}">
                                        </figure>                                
                                        <div class="card-body d-block justify-content-center text-center mb-0 mt-0 pb-2 pt-3">
                                            <h5 class="">Happy Birthday</h5>                                    
                                        </div>
                                        <div class="card-footer mt-1">
                                            <a href="{{route('my-invitations.show',$invi->slug)}}" class="btn  btn-sm Priview ">Preview</a>                                            
                                            <a href="whatsapp://send?text=Happy-Birthday http://127.0.0.1:8000/invi/birthday/{{$invi->slug}}" data-action="share/whatsapp/share" target="_blank" class="btn btn-outline-primary btn-sm text-dark">
                                                <i class="fa fa-share"></i>
                                            </a>
                                            
                                            <button onclick="copyToClipboard('#text')" class="btn btn-outline-info btn-sm text-dark"><i class="fa fa-copy" title="Copy to Clipboard"></i></button>
                                            
                                            <a href="{{route('invite',$invi->slug)}}" class="btn btn-outline-success btn-sm text-dark"><i class="fa fa-eye"></i></a>
                                            <p id="text" value="" style="display:none">http://127.0.0.1:8000/invi/birthday/{{$invi->slug}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    
                    <div class="portfolio-content mt-5">
                        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ------------- categories ------------- -->
    <div class="categories">
        <div class="container">

            <div class="row">
                <div class="all-title">
                    <h2> Create your own Invitations </h2>
                    <p>Choose an existing template and personalize it.</p>
                </div>
            </div>
            <div class="row product-online-desginer mt-0">
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="content"> 
                        <div class="content-overlay"></div> 
                        <img class="content-image" src="{{asset('Template/img/categories/categories-1.jpg')}}">
                        <div class="content-details fadeIn-bottom links-wrap">
                            <a href="#">
                                <h6 class="go-create">DESIGN NOW</h6>
                            </a>
                        </div>                        
                    </div>
                    <a href="#" class="">
                        <h6 class=" ml-3 mt-1">Pressed Blossoms - Pink</h6>
                    </a>
                </div>

                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="content"> 
                        <div class="content-overlay"></div> 
                        <img class="content-image" src="{{asset('Template/img/categories/categories-2.jpg')}}">
                        <div class="content-details fadeIn-bottom links-wrap">
                            <a href="#">
                                <h6 class="go-create">DESIGN NOW</h6>
                            </a>
                        </div>                        
                    </div>
                    <a href="#" class="">
                        <h6 class=" ml-3 mt-1">Pressed Blossoms - Yellow A</h6>
                    </a>
                </div>

                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="content"> 
                        <div class="content-overlay"></div> 
                        <img class="content-image" src="{{asset('Template/img/categories/categories-3.jpg')}}">
                        <div class="content-details fadeIn-bottom links-wrap">
                            <a href="#">
                                <h6 class="go-create">DESIGN NOW</h6>
                            </a>
                        </div>                        
                    </div>
                    <a href="#" class="">
                        <h6 class=" ml-3 mt-1">Chincoteague</h6>
                    </a>
                </div>

                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="content"> 
                        <div class="content-overlay"></div> 
                        <img class="content-image" src="{{asset('Template/img/categories/categories-5.jpg')}}">
                        <div class="content-details fadeIn-bottom links-wrap">
                            <a href="#">
                                <h6 class="go-create">DESIGN NOW</h6>
                            </a>
                        </div>                        
                    </div>
                    <a href="#" class="">
                        <h6 class=" ml-3 mt-1">Romantic Card</h6>
                    </a>
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
                <input type="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Name" name="name" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label for="Phone">Phone</label>
                <input type="text" class="form-control" id="Phone" placeholder="Phone Number" name="phone" value="{{$user->profile->phone}}" max="10">
            </div>
            <div class="form-group">
                <label for="DOB">DOB</label>
                <input type="date" class="form-control" id="DOB" placeholder="DOB" name="DOB" value="{{$user->profile->dob}}">
            </div>
            <div class="form-group">
                <label for="Phone">Address</label>
                <textarea  class="form-control" placeholder="Address.." name="address" >{{$user->profile->address}}</textarea>
                
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

@section('js')
<script>
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>
@endsection