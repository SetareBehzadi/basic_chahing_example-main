<!doctype html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/admin/base_admin_css/base_admin_css.css">
    <link rel="stylesheet" href="/css/app/plugin/iCheck/custom.css">
    <link rel="stylesheet" href="/css/app/plugin/toastr/toastr.min.css">

    @yield('styles')

    <title>
        @yield('title')
    </title>
</head>
<body class="rtls">

<div id="wrapper">

@include("include.admin.navbar")

    <div id="page-wrapper" class="gray-bg">
      @include("include.admin.topHeader")

        @yield("contents")


@include("include.admin.footer")

    </div>
</div>


<script src="/js/admin/base_js/base_admin_js.js"></script>
<script src="/js/app/plugin/metisMenu/jquery.metisMenu.js"></script>
<script src="/js/app/plugin/validate/jquery.validate.min.js"></script>
<script src="/js/app/plugin/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/js/app/main.js"></script>

<!-- iCheck -->
<script src="/js/app/plugin/iCheck/icheck.min.js"></script>
<script src="/js/app/plugin/toastr/toastr.min.js"></script>

<script>
    $(document).ready(function(){
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });

        toastr.options = {
            "closeButton": true,
            "progressBar": true,
        };


        @if(session()->has('flash_message'))
        toastr.success("{{ @session('flash_message') }}");

        @endif
        @if(session()->has('flash_d_message'))
                toastr.warning("{{ @session('flash_d_message') }}");

        @endif

    });

</script>

@yield('scripts')

</body>
</html>
