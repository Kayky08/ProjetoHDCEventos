<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!--Fonte do Google-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!--Bootstrap-->

        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>
    </head>
    <body class="bg-[#FDFDFC]">

        @yield('content')

        <footer>
            <p>HDC Events &copy; 2025</p>
        </footer>
    </body>
</html>
