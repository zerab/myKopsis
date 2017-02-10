<head>
  <link rel="stylesheet" href="/css/login.css">
</head>
@extends('layouts.header')
@section('title', 'Login - myKopsis')
@section('heading')
@endsection
@section('plain-content')
<div class="login-wrapper">
  <center><h3>Masuk</h3></center>
<form action="/login" method="POST" class="form login">
          {{ csrf_field() }}
        <div class="form__field">
          <label for="login__username"><span class="glyphicon glyphicon-user"></span><span class="hidden">Username</span></label>
          <input id="login__username" type="text" name="username" class="form__input" placeholder="Username" required>
        </div>

        <div class="form__field">
          <label for="login__password"><span class="glyphicon glyphicon-lock"></span><span class="hidden">Password</span></label>
          <input id="login__password" type="password" name="password" class="form__input" placeholder="Password" required>
        </div>

        <div class="form__field">
          <input type="submit" value="sign in">
        </div>
      </form>
    </div>
@endsection
