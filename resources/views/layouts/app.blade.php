<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        @yield('content header')
    </header>
    <main>
        @yield('content main')
    </main>
    <footer>
        @yield('content footer')
    </footer>
</body>
</html>