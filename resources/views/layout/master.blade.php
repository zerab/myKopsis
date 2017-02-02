<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
      <div class="wrapper">
      <header class="container-fluid nav-color navbar-fixed-top">
      <nav class="">
        <div class="col-md-3"><div class="logo-header"><a href="/"><img src="images/myKopsis-logo.png"></a></div></div>
        <div class="col-md-4 col-md-offset-1">
          <form class="navbar-form">
        <div class="form-group">
          <input type="text" class="form-control no-border" placeholder="Cari">
        </div>
        <button type="submit" class="btn btn-default no-border"><span class="glyphicon glyphicon-search"></span></button>
      </form>
    </div>
    <a href="/katalog"><div class="col-md-1 col-md-offset-1 nav-btn"><center>Katalog</center></div></a>
    <a href="/akun"><div class="col-md-1 nav-btn"><center>Akun</center></div></a>
    <a>
  <div class="col-md-1">
    <div class="dropdown">
      <div class="cart">
      <div class="dropdown-toggle" type="button" data-toggle="dropdown">
    <center><span class="glyphicon glyphicon-shopping-cart"></span>
    <span class="caret"></span></center>
  </div>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
    <div class="dropdown-content">

    </div>
  </div>
</div>
  </div>
</div>
    </a>
      </nav>
    </header>
    <div class="content-heading col-md-10 col-md-offset-1">
      @yield('heading')
    </div>
    <div class="content-container col-md-10 col-md-offset-1">
      @yield('content')
    </div>
  </div>
    <footer class="site-footer col-md-10 col-md-offset-1">
      <div class="upper-footer">
        <img src="images/myKopsis-logo.png">
      </div>
      <hr>
      <div class="lower-footer">
        &copy; myKopsis 2017. All rights reserved.<br>
        Crafted with <span class="pink glyphicon glyphicon-heart"></span> in Surabaya
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
