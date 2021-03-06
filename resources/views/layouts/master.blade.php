<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ URL::to('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap-theme.css') }}"/>
    <link rel="stylesheet" href="{{ URL::to('css/index.css') }}"/>
    <link rel="stylesheet" href="{{ URL::to('css/font-awesome.min.css') }}"/>

    <title>@yield('title')</title>
</head>
<body>

@include('includes.header')

@yield('content')


<div class="container footer ">
    <p class="text-muted">&copy; NURE 2016</p>
</div>
</body>
<script type="text/javascript" src="{{ URL::to('js/jquery-3.1.1.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/bootstrap-filestyle.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/index.js') }}"></script>

</html>