<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/master.css') }}">
  </head>
  <body style="background-image:url('{{ URL::asset('images/business-wallpaper-13.jpg') }}');background-repeat: no-repeat; background-position: right top;background-attachment: fixed;">
      <div class="wrapper">
@include('partial.navbar')
    <div class="akun-container col-md-10 col-md-offset-1">
      @yield('content')
    </div>
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
