<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!--CSS Files-->
    <link href="https://fonts.googleapis.com/css?family=Changa:400,700&display=swap" rel="stylesheet">
    <link href="{{ asset('front/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">


   
</head>

<body>
    <!--NavBar Start-->

    <nav class="navbar navbar-expand-lg navbar-light scrollNav">
        <a class="navbar-brand" href="#">طرحة</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                    <a class="nav-item nav-link  " href="{{route('index')}}">الرئيسية</a>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           خدمات
                          </a>
                            <!-- Here's the magic. Add the .animate and .slide-in classes to your .dropdown-menu and you're all set! -->
                            <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                              @foreach ($forNav as $cat)
                              <a class="dropdown-item" href="{{route('service_page',['$id'=> $cat->id])}}">{{$cat->name}}</a>   
                              @endforeach
                            </div>
                    <a class="nav-item nav-link" href="{{route('index')}}">من نحن</a>
                    <a class="nav-item nav-link " href="{{route('index')}}">عروض </a>
                <a class="nav-item nav-link " href="#contact">تواصل معنا </a>
               
          
            </div>
        </div>
    </nav>

    <!------------------------------NAvbar End---------------------------->

     <!--Page Content Start-->

     @yield('content')
     <!--Page Content Start-->









    <script src="{{ asset('front/js/jquery-3.3.1.min.js') }}" defer></script>
    <script src="{{ asset('front/js/popper.js') }}" defer></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('front/js/main.js') }}" defer></script>

</body>

</html>