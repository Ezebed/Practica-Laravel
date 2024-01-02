<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hola</title>
    @viteReactRefresh
    @vite('resourse/js/app.js')
</head>
<body>
    
    <div id='hola' ></div>

    <div>como estas</div>

</body>
</html>