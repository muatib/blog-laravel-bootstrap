<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body  data-bs-theme="dark">
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Accueil</a>
          <div>
            <a href="{{route('auth.register')}}" class="btn btn-info">Inscription</a>
            <a href="{{route('auth.login')}}" class="btn btn-info">Connection</a>
          </div>
        </div>
      </nav>

@yield('body')
</body>
</html>
