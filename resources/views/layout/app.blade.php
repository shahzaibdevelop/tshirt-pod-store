<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vibrant Tees</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style/app.css')}}">
    <link href="{{asset('assets/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.min.css')}}" rel="stylesheet" type="text/css" />
  </head>
  <body>

    @include('layout.extras')
    @include('layout.navbar')
    @yield('content')
    @include('layout.footer')

    <script src="{{asset('assets/js/smooth-scroll.polyfills.min.js')}}"></script>
    <script src="{{asset('assets/js/gumshoe.polyfills.min.js')}}"></script>
    <script src="{{asset('assets/js/feather.js')}}"></script>
    <script src="{{asset('assets/js/unicons.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>

    <script src="{{asset('plugins/jquery/script.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/script.js')}}"></script>
</body>
</html>