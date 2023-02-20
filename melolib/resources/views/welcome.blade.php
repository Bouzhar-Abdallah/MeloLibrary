<!DOCTYPE html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
@vite(['resources/css/app.css','resources/js/app.js'])

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Melolib</title>
    <link rel = "icon" href = 
"https://png.pngtree.com/png-clipart/20210418/original/pngtree-playing-music-headphones-travel-watercolor-clip-art-png-image_6238605.jpg" 
        type = "image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

</head>

<body class="antialiased">
@include('layouts.navigation')
    
</body>

</html>