<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md sm:mx-auto px-6 py-4 bg-white shadow-md overflow-hidden rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>
</html>
