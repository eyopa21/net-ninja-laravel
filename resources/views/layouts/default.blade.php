<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/css/main.css" />

</head>

<body class="antialiased">
    <nav>
        <div class="topnav">
            <a class="active" href="/home">Home</a>
            <a href="/">Dashboard</a>
            @role('writer|admin')
            <a href="/pizzas/create">Create new</a>
            @endrole
            <a href="/pizzas">Pizzas</a>
          </div>

          <div style="padding-left:16px">
            @if(auth()->user())

            <h2>logged in as <strong style="color: red;">{{ auth()->user()->name }}</strong></h2>
            @endif

          </div>
    </nav>
    @yield('page')

    <footer>
        <div class="footer">
            <p>Footer</p>
          </div>
      </footer>
</body>

</html>
