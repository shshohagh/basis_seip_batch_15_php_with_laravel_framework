<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('asset')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/style.css">
</head>
<body>
@include('frontEnd.inc.header')
@yield('content')
@include('frontEnd.inc.footer')
<script src="{{asset('asset')}}/js/bootstrap.bundle.min.js"></script>
</body>
</html>