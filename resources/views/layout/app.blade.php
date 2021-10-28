<!doctype html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset(mix('/css/app/app.css'))}}" />
    <link rel="canonical" href="index.html" />
    <meta name="keywords" content=''>
{{--    @yield('meta-description')--}}
    <meta property="og:description" content="@yield('meta-description','your page desc here')">
    {{--<script type="application/ld+json">{"@context": "https://schema.org","@type": "Organization","url": "https://asarad.co.uk","name": "Asarad","logo": "https://www.asarad.co.uk/static/asarad.png","sameAs": ["https://www.facebook.com/AudaciaSoftware/","https://twitter.com/AudaciaSoftware","https://www.linkedin.com/company/asarad-consulting"],"address": {"addressCountry": "England","addressRegion": "Yorkshire","postalCode": "LS27EY","streetAddress": "46 The Calls, Leeds"}}</script>--}}
    <meta property="og:title" content="Bespoke Software Development Company - UK | Asarad" />
    <meta property="og:url" content="https://www.asarad.ir" />
    <meta property="og:type" content="website" />
{{--    <meta property="og:description" content="Asarad is a leading agile bespoke software development company in Leeds &amp; London, providing innovative &amp; robust business-critical solutions throughout the UK." />--}}
    <meta property="og:image" />
    <link rel="icon" type="image/png" sizes="32x32" href="/img/app/main/favicon/favicon 16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/app/main/favicon/favicon 32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/app/main/favicon/favicon 64x64.png">

    {{--<link rel="shortcut icon" href="static/favicon.ico" type="image/icon">--}}
    <meta name="theme-color" content="#132d45" />
    <meta name="format-detection" content="telephone=no">

    {{--<link rel="stylesheet" href='dist/base.css' />--}}

    <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="anonymous">

    <!--<link rel="preload" href="https://fonts.googleapis.com/css?family=Raleway:400,700" as="fetch" crossorigin="anonymous">-->
    <script type="text/javascript">
        !function(e,n,t){"use strict";var o="https://fonts.googleapis.com/css?family=Raleway:400,700",r="__3perf_googleFontsStylesheet";function c(e){(n.head||n.body).appendChild(e)}function a(){var e=n.createElement("link");e.href=o,e.rel="stylesheet",c(e)}function f(e){if(!n.getElementById(r)){var t=n.createElement("style");t.id=r,c(t)}n.getElementById(r).innerHTML=e}e.FontFace&&e.FontFace.prototype.hasOwnProperty("display")?(t[r]&&f(t[r]),fetch(o).then(function(e){return e.text()}).then(function(e){return e.replace(/@font-face {/g,"@font-face{font-display:swap;")}).then(function(e){return t[r]=e}).then(f).catch(a)):a()}(window,document,localStorage);
    </script>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield("styles")

    <title>
        @yield("titles")
    </title>
</head>
<body>

    <main>
        <div class="page-content">
            @yield("contents")
        </div>
    </main>

<script src="{{ asset('js/app.js') }}" defer></script>
@yield("scripts")

</body>
</html>
