<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('styles')
    <title> @yield('title') </title>
</head>
<body>
    @include('layouts._partials.menu')
    @include('layouts._partials.messages')
    <main>
        @yield('content')
    </main>
</body>
</html>