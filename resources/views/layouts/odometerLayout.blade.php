<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 ie9-and-less ie8-and-less ie7-and-less" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 ie9-and-less ie8-and-less ie7-and-less" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 ie9-and-less ie8-and-less" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 ie9-and-less" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <title>TextRoller — Transition numbers with ease</title>
       
         <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  
        <link rel="stylesheet" href="{{ URL::asset('/css/odometer-theme-minimal.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('/css/odometer-theme-default.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('/css/odometer-theme-digital.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('/css/odometer-theme-plaza.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('/css/odometer-theme-slot-machine.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('/css/odometer-theme-car.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('/css/odometer-theme-train-station.css') }}" />

        <script src="{{ URL::asset('js/textroller.js')}}"></script>

         
    </head>
    <body>
        <div class="main">

                 <div class="content">
                    @yield('odometer')  
                </div>

        </div>
    </body>
</html>