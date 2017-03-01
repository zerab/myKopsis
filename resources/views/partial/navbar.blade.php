<header class="container-fluid nav-color navbar-fixed-top">
      <nav>
        <div class="col-md-3"><div class="logo-header"><a href="/"><img src="{{ URL::asset('images/myKopsis-logo.png') }}"></a></div></div>
        <div class="col-md-3 col-md-offset-1">
          <form class="navbar-form">
        <div class="form-group">
          <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
          <input type="text" class="form-control no-border" placeholder="Cari">
        </div>
        <button type="submit" class="btn btn-default no-border"><span class="glyphicon glyphicon-search"></span></button>
      </form>
    </div>
    <a href="/katalog"><div class="col-md-1 col-md-1 nav-btn"><center>Katalog</center></div></a>
    <?php
    if(auth()->check() == true) {
        $akun = '/'.auth()->user()->id;
    }
    else {
        $akun = '';
    }
    ?>
    <a href="/akun{{ $akun }}"><div class="col-md-1 nav-btn"><center>Akun</center></div></a>
    <a>
      <a href="/keranjang"><div class="col-md-1 col-md-1 nav-btn"><center><span class="glyphicon glyphicon-shopping-cart"><span style="font-family:arial;font-weight:bold;position:relative;top:-2px;">({{ Cart::count() }})</span></span></center></div></a>
</a>
@if(auth()->check() == true)
<a href="/logout" method="POST">
  <div class="col-md-1 nav-btn"><center>Keluar</center></div>
</a>
@endif

@if(auth()->check() == true)
        @if (auth()->user()->level == 'A')
          <a href="/admin" method="POST">
            <div class="col-md-1 nav-btn"><center>Admin</center></div>
          </a>
        @endif
@endif

      </nav>
    </header>
