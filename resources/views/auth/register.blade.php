<head>
  <link rel="stylesheet" href="/css/login.css">
</head>
@extends('layouts.header')
@section('title', 'Daftar - myKopsis')
@section('heading')
@endsection
@section('plain-content')
<div class="login-wrapper">
  <center><h3>Daftar</h3></center>
<form action="https://httpbin.org/post" method="POST" class="form login">

        <div class="form__field">
          <span class="hidden">Nama lengkap</span>
          <input id="login__username" type="text" name="fullname" class="form__input" placeholder="Nama Lengkap" required>
        </div>

        <div class="form__field">
          <span class="hidden">Username</span>
          <input id="login__password" type="text" name="username" class="form__input" placeholder="Username" required>
        </div>

        <div class="form__field">
          <input type="submit" value="sign in">
        </div>
      </form>
    </div>
@endsection
