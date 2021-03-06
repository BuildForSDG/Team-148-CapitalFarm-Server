<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Capital Farm Server</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .button {
            box-shadow: 0px 2px 12px -2px #3dc21b;
            background-color: #067d24;
            border-radius: 7px;
            border: 2px solid #0f851a;
            display: inline-block;
            cursor: pointer;
            color: #ffffff !important;
            font-family: Arial;
            font-size: 17px;
            padding: 11px 48px !important;
            text-decoration: none;
            text-shadow: 0px 1px 0px #28661e;
        }

        .button:hover {
            background-color: #5cbf2a;
        }

        .button:active {
            position: relative;
            top: 1px;
        }

    </style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Capital Farm Server
            </div>


            <div class="links">
                <a target="_blank" class="button" href="https://capital-farm.web.app">Visit the Capital Farm Client Site</a>
            </div>
            <center>
                <p> By BuildForSDG Team 148 </p>
            </center>
        </div>
</body>
</html>
