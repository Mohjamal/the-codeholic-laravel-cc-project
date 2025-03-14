<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Codeholic Laravel CC Project</title>

    {{-- Instead of put css folder inside public folder and call app.css file like this.

    <link rel="stylesheet" href="css/app.css">

    We use vite by npm run dev --}}

    @vite(['resources/css/app.css',
    'resources/js/app.js'])

</head>



<body class="antialiased">

    @session('message')
    <div class="success-message">
        {{ session('message') }}
    </div>
    @endsession


    {{ $slot }}

</body>

</html>