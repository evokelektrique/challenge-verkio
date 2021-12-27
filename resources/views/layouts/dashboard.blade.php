<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Verkio - @yield("title")</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                <img src="https://verkio.de/stilrool/assets/img/logo.svg" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="dashboard_navbar">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="dashboard_navbar" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="{{ route('dashboard') }}">
                    Dashboard
                </a>

                <a class="navbar-item" href="{{ route('dashboard.new_user') }}">
                    New User
                </a>
                <a class="navbar-item" href="{{ route('dashboard.lottery') }}">
                    Lottery
                </a>
            </div>
        </div>
    </nav>

    <div class="container my-6">
        @yield("content")
    </div>
</body>
</html>
