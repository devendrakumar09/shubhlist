@extends('Admin.Layout.app') 
@section('meta-data')
    
@endsection 

@section('external-css')
<link rel="stylesheet" href="{{asset('Admin/css/feedbacks.css')}}">
@endsection  
@section('main-content')
<div class="container feedbacks">    
    <div class="content d-flex align-items-start flex-wrap">
        <div class="list bg-white py-3 border">
            <div class="row m-0 px-2 pb-1 border-bottom">
                <div class="col-lg-6 d-flex align-items-center flex-wrap">
                    <div class="lamp"> <img src="https://www.freepnglogos.com/uploads/lamp/lamp-logo-mpada-luz-brilho-imagens-tis-pixabay-0.png" alt="" id="lamp"> </div>
                    <div class="title mx-lg-2 mx-1">Feedbacks</div>
                    <div class="pink-label mx-1">{{$feedbacks->count()}} E-Mails</div>
                </div>                
            </div>
            @if(isset($feedbacks) && $feedbacks->count() > 0)                            
                <div class="table-responsive-lg mt-4 w-100">
                    <table class="table">
                        <tbody>
                            @foreach($feedbacks as $feed)
                                <tr>
                                    
                                    <td>
                                        <div class="d-flex flex-column">
                                            <div class="blue-label">{{$feed->name}}</div>
                                            <div class="fs-08"> <span class="small"> <i class="fa fa-envelope" aria-hidden="true"></i> {{$feed->email}}</span></div>
                                            <div class="fs-08"> <span class="small"><i class="fa fa-phone"></i> {{$feed->number}}</span></div>
                                            <div class="fs-08"> {{$feed->msg}}</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column text-center">
                                            <div class="blue-label">
                                                <a href="" class="fb-view px-5 py-2">Reply</a>
                                            </div>
                                            <div class="fs-08">{{$feed->created_at->diffForHumans()}}</div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                <div class="links mt-4 text-center">
                    {{$feedbacks->links()}}
                </div>
             @endif
        </div>
        
    </div>
</div>
@endsection

@section('external-js')
@show