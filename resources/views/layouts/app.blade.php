<html>
<head>
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <main class="flex-shrink-0" id="app">
        <div class="container mb-3">
            @yield('content')
        </div>
    </main>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
