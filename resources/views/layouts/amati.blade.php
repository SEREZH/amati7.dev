<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">   <!-- CSRF Token -->
    
    <title>{{config('app.name', 'Клиника лазерной медицины «АМАТИ»')}}</title>
    <link rel="shortcut icon" href="./favicon.ico" />

    @include('upld.head-fonts')
    @include('upld.head-css')
    @include('upld.head-libs')
</head>
<body>
<!--     @ include('chips.preloader') -->
    @include('parts.menu-login')
    @yield('content')

    @include('upld.foot-libs')
</body>
</html>
