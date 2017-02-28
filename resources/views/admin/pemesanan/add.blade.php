<head>
  <link rel="stylesheet" href="/css/login.css">
</head>
@include('layouts.error')
<div class="modal fade" id="addline" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><center><b>Tambah Data</b></center></h4>
      </div>
      <div class="modal-body">
        <center>
        <form action="/admin/anggota/add" method="POST" class="form login" autocomplete="on">
                {{ csrf_field() }}
                <div class="form__field">
                  <span class="hidden">Nama lengkap</span>
                  <input type="text" name="fullname" class="form__input" placeholder="Nama Lengkap" required>
                </div>

                <div class="form__field">
                  <span class="hidden">Username</span>
                  <input type="text" name="username" maxlength="30" class="form__input" placeholder="Username" required>
                </div>
                <div class="form__field">
                  <span class="hidden">Jenis Kelamin</span>
                  <select class="form__input" name="gender">
                    <option selected>Jenis  Kelamin</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="form__field">
                  <span class="hidden">Tanggal Lahir</span>
                  <select class="form__input" name="birthdate">
                    <option selected>Tanggal Lahir</option>
                    <?php for($x = 1; $x <= 31; $x++){?>
                    <option value="<?= $x ?> "><?= $x ?></option>
                    <?php } ?>
                  </select>
                  <select class="form__input" name="birthmonth">
                    <option selected>Bulan Lahir</option>
                    <option value="1 ">Januari</option>
                    <option value="2 ">Februari</option>
                    <option value="3 ">Maret</option>
                    <option value="4 ">April</option>
                    <option value="5 ">Mei</option>
                    <option value="6 ">Juni</option>
                    <option value="7 ">Juli</option>
                    <option value="8 ">Agustus</option>
                    <option value="9 ">September</option>
                    <option value="10 ">Oktober</option>
                    <option value="11 ">November</option>
                    <option value="12 ">Desember</option>
                  </select>
                  <select class="form__input" name="birthyear">
                    <option selected>Tahun Lahir</option>
                    <?php for($x = 1950; $x <= 2003; $x++){?>
                    <option value="<?= $x ?>"><?= $x ?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form__field">
                  <span class="hidden">Email</span>
                  <input type="text" name="email" maxlength="30" class="form__input" placeholder="Email" required>
                </div>

                <div class="form__field">
                  <span class="hidden">No. Telepon</span>
                  <input type="number" name="phone" class="form__input" placeholder="No. Telepon" maxlength="15" required>
                </div>

                <div class="form__field">
                  <span class="hidden">Kata Sandi</span>
                  <input type="password" name="password" maxlength="24" class="form__input" placeholder="Kata Sandi" required>
                </div>
                <div class="form__field">
                  <span class="hidden">Konfirmasi Kata Sandi</span>
                  <input type="password" name="password_confirmation" maxlength="24" class="form__input" placeholder="Konfirmasi Kata Sandi" required>
                </div>
                <div class="form__field">
                  <span class="hidden">Level</span>
                <select class="form__input" name="level">
                  <option selected>Level</option>
                  <option>Member</option>
                  <option value="A">Admin</option>
                </select>
              </div>
                <div class="form__field">
                  <input type="submit" value="Register">
                </div>
              </form>
            </center>
      </div>
    </div>
  </div>
</div>
