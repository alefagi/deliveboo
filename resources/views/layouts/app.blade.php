<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('cdn')
</head>
<body>
  

        <main style="background: rgb(208,235,153);
        background: linear-gradient(149deg, rgba(208,235,153,1) 0%, rgba(208,235,153,1) 50%, rgba(0,204,188,1) 50%);" class="vh-100 vw-100">
            @yield('content')
        </main>
    </div>

    @yield('script')
</body>
</html>
