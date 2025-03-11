<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href={{ asset('favicon.png')}} />

    <link rel="apple-touch-icon" sizes="57x57" href={{ asset('apple-icon-57x57.png')}}>
    <link rel="apple-touch-icon" sizes="60x60" href={{ asset('apple-icon-60x60.png')}}>
    <link rel="apple-touch-icon" sizes="72x72" href={{ asset('apple-icon-72x72.png')}}>
    <link rel="apple-touch-icon" sizes="76x76" href={{ asset('apple-icon-76x76.png')}}>
    <link rel="apple-touch-icon" sizes="114x114" href={{ asset('apple-icon-114x114.png')}}>
    <link rel="apple-touch-icon" sizes="120x120" href={{ asset('apple-icon-120x120.png')}}>
    <link rel="apple-touch-icon" sizes="144x144" href={{ asset('apple-icon-144x144.png')}}>
    <link rel="apple-touch-icon" sizes="152x152" href={{ asset('apple-icon-152x152.png')}}>
    <link rel="apple-touch-icon" sizes="180x180" href={{ asset('apple-icon-180x180.png')}}>
    <link rel="icon" type="image/png" sizes="192x192"  href={{ asset('android-icon-192x192.png')}}>
    <link rel="icon" type="image/png" sizes="32x32" href={{ asset('favicon-32x32.png')}}>
    <link rel="icon" type="image/png" sizes="96x96" href={{ asset('favicon-96x96.png')}}>
    <link rel="icon" type="image/png" sizes="16x16" href={{ asset('favicon-16x16.png')}}>

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicon.png">


    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @routes
    @viteReactRefresh
    @translations('it')
    @vite(['resources/js/app.jsx', "resources/js/Pages/{$page['component']}.jsx"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
@inertia
</body>

</html>
