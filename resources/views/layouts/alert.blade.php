<h1>
  @if ($alert = Session::get('alert-success-login'))
  <div class="alert alert-success dismissable fade-in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      {{ $alert }}
  </div>
@endif
@if ($alert = Session::get('alert-success-register'))
<div class="alert alert-success dismissable fade-in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ $alert }}
</div>
@endif
@if ($alert = Session::get('alert-success-delete'))
<div class="alert alert-success dismissable fade-in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ $alert }}
</div>
@endif
@if ($alert = Session::get('alert-success-update'))
<div class="alert alert-success dismissable fade-in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ $alert }}
</div>
@endif
@if ($alert = Session::get('alert-success-keluar'))
<div class="alert alert-success dismissable fade-in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ $alert }}
</div>
@endif
@if ($alert = Session::get('alert-not-admin'))
<div class="alert alert-danger dismissable fade-in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ $alert }}
</div>
@endif
@if ($alert = Session::get('alert-failed-account'))
<div class="alert alert-danger dismissable fade-in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ $alert }}
</div>
@endif
@if ($alert = Session::get('alert-failed-edit'))
<div class="alert alert-danger dismissable fade-in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ $alert }}
</div>
@endif
@if ($alert = Session::get('alert-failed'))
<div class="alert alert-danger dismissable fade-in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ $alert }}
</div>
@endif
@if ($alert = Session::get('alert-admin-success-update'))
<div class="alert alert-success dismissable fade-in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ $alert }}
</div>
@endif
@if ($alert = Session::get('alert-admin-success-delete'))
<div class="alert alert-success dismissable fade-in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ $alert }}
</div>
@endif
@if ($alert = Session::get('alert-admin-failed-delete'))
<div class="alert alert-danger dismissable fade-in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ $alert }}
</div>
@endif
@if ($alert = Session::get('alert-admin-success-add'))
<div class="alert alert-success dismissable fade-in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ $alert }}
</div>
@endif
@if ($alert = Session::get('alert-admin-success-edit'))
<div class="alert alert-success dismissable fade-in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ $alert }}
</div>
@endif
</h1>
 
