<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
    <!--fontawesome -->
    <link rel="stylesheet" href="{{asset('Template/fontawesome/css/font-awesome.min.css')}}" type="text/css">

    
    
    <style>
        body{
            background-color:white;
        }
    </style>

    
    @section('css')
    @show

</head>
<body>   
    @section('main')
    @show
    <script src="{{asset('js/app.js')}}"></script>

    <script src="{{asset('Template/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('Template/js/bootstrap.min.js%2bjquery.magnific-popup.min.js.pagespeed.jc.XMO3siFVXl.js')}}"></script>
    
    
    <!-- OWL Carousel-->    
    
    @section('js')
    @show
</body>
</html>