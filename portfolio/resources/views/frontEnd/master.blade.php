<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="TemplateMo">

        <title>@yield('title')</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <link href="{{asset('frontEnd')}}/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{asset('frontEnd')}}/css/bootstrap-icons.css" rel="stylesheet">
        <link href="{{asset('frontEnd')}}/css/magnific-popup.css" rel="stylesheet">
        <link href="{{asset('frontEnd')}}/css/templatemo-first-portfolio-style.css" rel="stylesheet">
        
<!--

TemplateMo 578 First Portfolio

https://templatemo.com/tm-578-first-portfolio

-->
    </head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="spinner-rotate"></span>    
            </div>
        </section>
        @include('frontEnd.include.navbar')
        @yield('content')
        @include('frontEnd.include.footer')

        <!-- JAVASCRIPT FILES -->
        <script src="{{asset('frontEnd')}}/js/jquery.min.js"></script>
        <script src="{{asset('frontEnd')}}/js/bootstrap.min.js"></script>
        <script src="{{asset('frontEnd')}}/js/jquery.sticky.js"></script>
        <script src="{{asset('frontEnd')}}/js/click-scroll.js"></script>
        <script src="{{asset('frontEnd')}}/js/jquery.magnific-popup.min.js"></script>
        <script src="{{asset('frontEnd')}}/js/magnific-popup-options.js"></script>
        <script src="{{asset('frontEnd')}}/js/custom.js"></script>

    </body>
</html>