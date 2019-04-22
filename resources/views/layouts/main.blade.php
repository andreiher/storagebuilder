<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@lang("messages.website_title")</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.min.css" />
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="d-flex flex-grow-1">
        <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
        <a class="navbar-brand d-none d-lg-inline-block" href="#">
            Navbar 6
        </a>
        <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="#">
            <img src="//placehold.it/40?text=LOGO" alt="logo">
        </a>
        <div class="w-100 text-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
        <ul class="navbar-nav ml-auto flex-nowrap">
            <li class="nav-item">
                <a href="#" class="nav-link m-2 menu-item nav-active">Our Solution</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link m-2 menu-item">How We Help</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link m-2 menu-item">Blog</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link m-2 menu-item">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="d-flex flex-grow-1">
        <span class="w-100 d-lg-none d-block"></span>
        <a class="navbar-brand" href="{{ route("home") }}">
            <img src="/images/rap-dev-logo.png" alt="Rap Development">
        </a>
        <div class="w-100 text-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>

    <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarsDefault">
        <ul class="navbar-nav ml-auto flex-nowrap">
            <li class="nav-item">
                <a class="nav-link" href="{{ route("home") }}">@lang("messages.menu_home")</a>
            </li>
            <li class="nav-item lang-switcher">
                <a href="/lang/ro">
                     <img src="/images/lang-ro.png" alt="Romana">
                </a>
                <a href="/lang/en">
                     <img src="/images/lang-en.png" alt="English">
                </a>
            </li>
        </ul>
    </div>
</nav>

<main class="container align-items-center" style="margin-top:110px; padding-bottom:30px;">

    @yield('content')

</main><!-- /.container -->

<footer class="text-muted website-footer">
    <div class="container text-right">
        <p>&copy; 2019 RAP Development</p>
    </div>
</footer>

@section("scripts")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
    @if(\App::isLocale('ro'))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/localization/messages_ro.min.js"></script>
    @endif
    <script src="js/main.js"></script>
@show 

</body>
</html>
