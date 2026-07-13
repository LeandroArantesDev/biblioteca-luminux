<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
    @vite('resources/css/app.css')
    <title>{{ config("app.name") }}</title>
</head>
<body>
    <x-header/>
    <main>
        {{ $slot }}
    </main>
    <x-footer/>
</body>
</html>
