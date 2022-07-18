<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/font-awesome.min.css') }}" type="text/css">


    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>
</body>

</html>

<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quas perferendis eaque eos vero ea ratione tempore
    tenetur cumque repellat. Totam dolor in illo dolorem voluptatum id omnis officiis repellendus praesentium sit at
    consequatur, nostrum neque esse magni dicta saepe vitae asperiores culpa nihil fugiat similique deserunt! Nemo,
    officiis nulla.</p>
