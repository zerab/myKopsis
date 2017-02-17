@if(count($errors))
<div class="error-register">
  <div class="alert alert-danger alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Oops!</strong><br>
      <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
</div>
@endif
