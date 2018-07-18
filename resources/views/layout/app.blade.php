<!doctype html>
<html lang="{{config('app.locale')}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{config('app.name','Lartest!')}}</title>
</head>
<body>
    @include('inc.navbar')
    <div class="container">
        @include('inc.message')
        @yield('content')
    </div>



    <!-- Scripts -->
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    {{--<script rel="text/javascript" href="{{URL::asset('assets/js/bootstrap.js')}}"></script>--}}
    <script rel="text/javascript" src="{{ mix('/js/app.js') }}"></script>

</body>
</html>
