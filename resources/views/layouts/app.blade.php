<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin/base_css_admin/admin_base_css.css">

    @yield('styles')
</head>
<body>
    <div id="app">
        <main class="py-4">

            @yield("content")

        </main>
    </div>

    <script src="/js/app/base_js/base_admin_js.js"></script>
    <script src="/js/app/plugin/metisMenu/jquery.metisMenu.js"></script>
    <script src="/js/app/plugin/validate/jquery.validate.min.js"></script>
    <script src="/js/app/plugin/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/js/app/app.js"></script>
    <script>

    </script>
@yield('scripts')
</body>
</html>
