<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Car Rental</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/fontAwesome.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/hero-slider.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/owl-carousel.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="{{asset('frontend/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>

<body>
 
    @include('frontend.partials.header')
      
    @yield('content')

    @include('frontend.partials.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="{{asset('frontend/js/vendor/bootstrap.min.js')}}"></script>
    
    <script src="{{asset('frontend/js/datepicker.js')}}"></script>
    <script src="{{asset('frontend/js/plugins.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>