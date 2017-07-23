<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/landing-page.css">
    <script src="https://use.fontawesome.com/a65369228a.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Styles -->
    <style>

    </style>
</head>
<body>

@include('partials.nav')

@if($view_name == 'home.index')
    @include('layouts.intro-header')
@endif


<div class="container" style="margin-top: 80px">
    <div class="col-md-10">
        @yield('content')
    </div>


    <div class="col-md-2">
        @include('sidebar.last-games')
    </div>
</div>

@include('partials.footer')

</body>
</html>