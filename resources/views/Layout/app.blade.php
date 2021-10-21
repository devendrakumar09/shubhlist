<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
    <!-- Template CSS -->    
    <link rel="stylesheet" href="{{asset('Template/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Template/css/layout.css')}}" type="text/css">
    
    <!--fontawesome -->
    <link rel="stylesheet" href="{{asset('Template/fontawesome/css/font-awesome.min.css')}}" type="text/css">

    <!-- Google Font OR Online Css-->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&amp;display=swap" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css2?family=Federo&amp;display=swap" rel="stylesheet">    
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap" rel="stylesheet">   
    
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&amp;display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Federo&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- OWL Carousel -->
    <link rel="stylesheet" href="{{asset('Template/js/OwlCarousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('Template/js/OwlCarousel/dist/assets/owl.theme.default.min.css')}}">
    <style>
        body{
            background-color:white;
        }
    </style>

    
    @section('css')
    @show

</head>
<body>
    @include('Layout.navbar')
    
    @section('main')
    @show
    
    @include('Layout.footer')    
    <script src="{{asset('js/app.js')}}"></script>

    <script src="{{asset('Template/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('Template/js/bootstrap.min.js%2bjquery.magnific-popup.min.js.pagespeed.jc.XMO3siFVXl.js')}}"></script>
    
    <script>eval(mod_pagespeed_tOmABSi9uX);</script>
    <script>eval(mod_pagespeed_SbIUlRs8DF);</script>
    
    <script src="{{asset('Template/js/mixitup.min.js%2bjquery.nice-select.min.js.pagespeed.jc.DIympxnjya.js')}}"></script>
    
    <script>eval(mod_pagespeed_j_rLt6wKUc);</script>
    <script>eval(mod_pagespeed_nhJv3I69AI);</script>
    
    <script src="{{asset('Template/js/jquery.nicescroll.min.js%2bjquery.slicknav.js.pagespeed.jc.lzftOZuISa.js')}}"></script>
    
    <script>eval(mod_pagespeed_3JCdMYBeD9);</script>
    <script>eval(mod_pagespeed_Ewc5ewEDBx);</script>
    
    <script src="{{asset('Template/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('Template/js/main.js')}}"></script>
    

    <!-- OWL Carousel-->    
    <script src="{{asset('Template/js/OwlCarousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('Template/js/layout.js')}}"></script>

    <script >
        $(document).ready(function(){
          $(".owl-carousel").owlCarousel();
        });
    </script>
    @section('js')
    @show
</body>
</html>