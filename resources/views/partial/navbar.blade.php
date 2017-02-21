<header class="container-fluid nav-color navbar-fixed-top">
      <nav class="">
        <div class="col-md-3"><div class="logo-header"><a href="/"><img src="{{ URL::asset('images/myKopsis-logo.png') }}"></a></div></div>
        <div class="col-md-3 col-md-offset-1">
          <form class="navbar-form">
        <div class="form-group">
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

      <div class="dropdown col-md-1">
            <div class="dropdown-toggle nav-dropdown" type="button" data-toggle="dropdown">
          <center><span class="glyphicon glyphicon-shopping-cart"></span>
                  <span class="caret"></span></center>
            </div>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                  <div class="dropdown-content">

                  </div>
                  </div>
      </div>
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
