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
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-sm navbar-white mb-0" style="background-color: #000;">
            <div class="container">
                <a href="/" class="text-white navbar-brand">
                    <h2 class="navbar-brand text-white mt-1" href="#" style="font-size: 34px;font-weight:bold">
                        <span class="" style="color: #17A2C2!important;">Shaikh</span> Dev
                    </h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto font-weight-bold">
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="#">HOME</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="#">ABOUT</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="#">EXPERICENCE</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="#">SKILLS</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="#">PORTFOLIO</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="#">BLOG</a>
                        </li>
                        <li class="nav-item active">
                            <a class="btn btn-sm btn-info btn-block text-white mt-1 ml-1" style="background-color:#17A2C2!important;font-weight:bold" href="#">CONTACT INFO</a>
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
</body>

</html>