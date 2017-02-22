<head>
  <link rel="stylesheet" href="/css/login.css">
</head>
@extends('layouts.header')
@section('title', 'Perbarui Informasi - myKopsis')
@section('heading')
@endsection
@section('plain-content')
<div class="register-wrapper">
  <center><h3>Perbarui Informasi</h3></center>
  <?php
  if(auth()->check() == true) {
      $akun = '/'.auth()->user()->id;
  }
  ?>
<form action="/akun{{ $akun }}/update" method="POST" class="form login" autocomplete="on">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="form__field">
          <span class="hidden">Nama lengkap</span>
          <input type="text" name="fullname" class="form__input" placeholder="Nama Lengkap" value="{{ $member->fullname }}" required>
        </div>

        <div class="form__field">
          <span class="hidden">Username</span>
          <input type="text" name="username" maxlength="30" class="form__input" placeholder="Username" value="{{ $member->username }}" required>
        </div>
        <div class="form__field">
          <span class="hidden">Jenis Kelamin</span>
          <select class="form__input" name="gender">
            <option>Jenis  Kelamin</option>
            <option value="laki-laki" <?php if ($member->gender == "laki-laki") echo "selected='selected'";?>>Laki-laki</option>
            <option value="perempuan" <?php if ($member->gender == "perempuan") echo "selected='selected'";?>>Perempuan</option>
          </select>
        </div>
        <div class="form__field">
          <span class="hidden">Tanggal Lahir</span>
          <select class="form__input" name="birthdate">
            <option>Tanggal Lahir</option>
            <?php for($x = 1; $x <= 31; $x++){?>
            <option value="<?= $x ?> " <?php if ($member->birthdate == $x) echo "selected='selected'";?>><?= $x ?></option>
            <?php } ?>
          </select>
          <select class="form__input" name="birthmonth">
            <option selected>Bulan Lahir</option>
            <option value="1" <?php if ($member->birthmonth == '1') echo "selected='selected'";?>>Januari</option>
            <option value="2" <?php if ($member->birthmonth == '2') echo "selected='selected'";?>>Februari</option>
            <option value="3" <?php if ($member->birthmonth == '3') echo "selected='selected'";?>>Maret</option>
            <option value="4" <?php if ($member->birthmonth == '4') echo "selected='selected'";?>>April</option>
            <option value="5" <?php if ($member->birthmonth == '5') echo "selected='selected'";?>>Mei</option>
            <option value="6" <?php if ($member->birthmonth == '6') echo "selected='selected'";?>>Juni</option>
            <option value="7" <?php if ($member->birthmonth == '7') echo "selected='selected'";?>>Juli</option>
            <option value="8" <?php if ($member->birthmonth == '8') echo "selected='selected'";?>>Agustus</option>
            <option value="9" <?php if ($member->birthmonth == '9') echo "selected='selected'";?>>September</option>
            <option value="10" <?php if ($member->birthmonth == '10') echo "selected='selected'";?>>Oktober</option>
            <option value="11" <?php if ($member->birthmonth == '11') echo "selected='selected'";?>>November</option>
            <option value="12" <?php if ($member->birthmonth == '12') echo "selected='selected'";?>>Desember</option>
          </select>
          <select class="form__input" name="birthyear">
            <option selected>Tahun Lahir</option>
            <?php for($x = 1950; $x <= 2003; $x++){?>
            <option value="<?= $x ?>"  <?php if ($member->birthyear == $x) echo "selected='selected'";?>><?= $x ?></option>
            <?php } ?>
          </select>
        </div>

        <div class="form__field">
          <span class="hidden">Email</span>
          <input type="text" name="email" maxlength="30" class="form__input" placeholder="Email" value="{{ $member->email }}" required>
        </div>

        <div class="form__field">
          <span class="hidden">No. Telepon</span>
          <input type="number" name="phone" class="form__input" placeholder="No. Telepon" maxlength="15" value="{{ $member->phone }}" required>
        </div>

        <div class="form__field">
          <input type="submit" value="Perbarui">
        </div>
      </form>
    </div>
    @include('layouts.error')
@endsection
