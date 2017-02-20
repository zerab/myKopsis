@extends('layouts.header')
@section('content')
<div class="form__field">
  <span class="hidden">Kata Sandi</span>
  <input type="password" name="password" maxlength="24" class="form__input" placeholder="Kata Sandi" value="{{ $member->username }}" required>
</div>
<div class="form__field">
  <span class="hidden">Konfirmasi Kata Sandi</span>
  <input type="password" name="password_confirmation" maxlength="24" class="form__input" placeholder="Konfirmasi Kata Sandi" value="{{ $member->username }}" required>
</div>
@endsection
