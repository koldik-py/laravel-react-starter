<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    @viteReactRefresh
    @vite(['resources/js/app.tsx', 'resources/scss/app.scss'])
</head>
<body>
    <div id="root"></div>
</body>
</html>
