<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'Shaikh Al Amin') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900%7cTeko:300,400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/portfolio.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    @yield('css')
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-sm navbar-white mb-0" style="background-color: #000;">
            <div class="container">
                <a href="/" class="text-white navbar-brand">
                    <h2 class="navbar-brand text-white mt-1" style="font-size: 34px;">
                        <span class="" style="color: #17A2C2!important;">Shaikh</span> Dev
                    </h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active navbar-menu">
                            <a class="nav-link text-white " href="#">HOME</a>
                        </li>
                        <li class="nav-item active navbar-menu">
                            <a class="nav-link text-white" href="#">ABOUT</a>
                        </li>
                        <li class="nav-item active navbar-menu">
                            <a class="nav-link text-white" href="#">EXPERICENCE</a>
                        </li>
                        <li class="nav-item active navbar-menu">
                            <a class="nav-link text-white" href="#">SKILLS</a>
                        </li>
                        <li class="nav-item active navbar-menu">
                            <a class="nav-link text-white" href="#">PORTFOLIO</a>
                        </li>
                        <li class="nav-item active navbar-menu">
                            <a class="nav-link text-white" href="#">BLOG</a>
                        </li>
                        <li class="nav-item active">
                            <a class="btn btn-sm btn-info btn-block text-white mt-1 ml-1" style="background-color:#17A2C2!important;" href="#">CONTACT INFO</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('javascript')
</body>

</html>