<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/all-admin-lte.css') }}" rel="stylesheet">

    <!-- Google Font -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <b>{{ config('app.name', 'Laravel') }}</b>
    </div>
    <div class="login-box-body">
        <p>
            Repository: <a href="https://github.com/jramirezgranada/ipcompanies">https://github.com/jramirezgranada/ipcompanies</a><br><br>
            User: admin@admin.com <br><br>
            Pass: password <br><br>
            <a href="{{ route('home') }}" class="btn btn-success">Go To Demo</a>
        </p>
    </div>

</div>
<!-- /.login-box -->

<!-- Scripts -->
<script src="{{ asset('js/all-admin-lte.js') }}" defer></script>

</body>
</html>
