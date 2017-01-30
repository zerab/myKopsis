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
    <header class="container-fluid nav-color">
      <nav class="">
        <div class="col-md-3"><a>myKopsis</a></div>
        <div class="col-md-4 col-md-offset-1">
          <form class="navbar-form">
        <div class="form-group">
          <input type="text" class="form-control no-border" placeholder="Cari">
        </div>
        <button type="submit" class="btn btn-default no-border"><span class="glyphicon glyphicon-search"></span></button>
      </form>
    </div>
    <a href="/katalog"><div class="col-md-1 col-md-offset-1 nav-btn"><center>Katalog</center></div></a>
    <a href="/anggota"><div class="col-md-1 nav-btn"><center>Anggota</center></div></a>
    <a>
  <div class="col-md-1">
    <div class="dropdown">
      <div class="cart">
      <div class="dropdown-toggle" type="button" data-toggle="dropdown">
    <center><span class="glyphicon glyphicon-shopping-cart white"></span>
    <span class="white caret"></span></center>
  </div>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
  </div>
</div>
  </div>
</div>
    </a>
      </nav>
    </header>
    <div class="content-container col-md-10 col-md-offset-1">
      @yield('content')
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
