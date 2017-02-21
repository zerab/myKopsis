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
    <div class="content-heading col-md-10 col-md-offset-1">
      <center><b>@yield('heading')<b></center>
    </div>
    <div class="content-container col-md-10 col-md-offset-1">
      @yield('content')
    </div>
  </div>
    <footer class="site-footer col-md-10 col-md-offset-1">
      <div class="upper-footer">
        <img src="{{ URL::asset('images/myKopsis-logo.png') }}">
      </div>
      <hr>
      <div class="lower-footer">
        &copy; myKopsis 2017. All rights reserved.<br>
        Crafted with <span class="pink glyphicon glyphicon-heart"></span> in Surabaya
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>
