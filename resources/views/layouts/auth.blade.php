<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Auth') | {{ config('app.name', 'Gampangan') }}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">
    </head>
    <body class="hold-transition login-page">
        <main role="main">
            @yield('content')
        </main>
        <a href="{{ url('/') }}">Back to {{ config('app.name', 'Gampangan') }}</a>
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="{{ route('login') }}">Login</a>
            </li>
            <li class="list-inline-item">
                <a href="{{ route('register') }}">Register</a>
            </li>
            <li class="list-inline-item">
                <a href="{{ route('password.email') }}">Forgot Password</a>
            </li>
        </ul>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/adminlte.min.js"></script>
    </body>
</html>