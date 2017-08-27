<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EOT</title>

    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" type="text/css">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />

</head>
<body id="app-layout">
@include('includes.nav')

@yield('content')

<footer class="footer">
    <div class="container">
        <p class="copyright">کلیه حقوق محفوظ است.</p>
        <p class="text-muted">طراحی و توسعه توسط <a href="/">مشترک</a></p>
    </div>
</footer>

<!-- JavaScripts -->
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
