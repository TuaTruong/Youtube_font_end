<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('font/themify-icons.css') }}" />
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" /> --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet" />
    <style>
        * {
            box-sizing: border-box;
            font-family: "Inter", sans-serif;
        }

        .dropdown {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            z-index: 1;
        }
    </style>
    @yield('styles')
    <title>Youtube</title>
</head>

<body class="h-screen">
    <div class="wrapper">
        @include('partials.header')
        @include("partials.sidebar")
        @yield("content")
    </div>

    @yield('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>
