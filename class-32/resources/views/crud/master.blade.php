<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('asset')}}/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('asset') }}/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset') }}/css/style.css">
</head>
<body>
<section class="bg-light bg-gradient sticky-top shadow-sm rounded-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand text-dark fw-bolder" href="#">BITM<img src="{{asset('asset')}}/img/favicon.png" width="15" class="img-fluid" alt=""></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item"><a class="nav-link text-dark @if(Route::currentRouteName() == 'home')        fw-normal border-bottom border-success rounded-bottom @else fw-normal @endif" href="{{ route('home') }}">Student Add Form</a></li>
                                <li class="nav-item"><a class="nav-link text-dark @if(Route::currentRouteName() == 'manage')      fw-normal border-bottom border-success rounded-bottom @else fw-normal @endif" href="{{ route('manage') }}">Student manage table</a></li>
                                <li class="nav-item"><a class="nav-link text-dark @if(Route::currentRouteName() == 'dept.add')    fw-normal border-bottom border-success rounded-bottom @else fw-normal @endif" href="{{ route('dept.add') }}">Department Add Form</a></li>
                                <li class="nav-item"><a class="nav-link text-dark @if(Route::currentRouteName() == 'dept.manage') fw-normal border-bottom border-success rounded-bottom @else fw-normal @endif" href="{{ route('dept.manage') }}">Department manage table</a></li>

                            </ul>
                                                                                

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>

@yield('content')

<section class="mt-5 sticky-bottom bg-light rounded-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-3 mb-3">Copyright &copy; <?php echo date("d M, Y");?>, Developed By BITM<img src="{{asset('asset')}}/img/favicon.png" width="15" class="img-fluid" alt=""></div>
        </div>
    </div>
</section>
<script src="{{ asset('asset') }}/js/bootstrap.bundle.js"></script>
</body>
</html>
