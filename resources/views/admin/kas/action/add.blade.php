<head>
  <link rel="stylesheet" href="/css/login.css">
</head>
@include('layouts.error')
<div class="modal fade" id="addline" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><center><b>Tambah Akun</b></center></h4>
      </div>
      <div class="modal-body">
        <center>
        <form action="/admin/keuangan/kas/add" method="POST" class="form login" autocomplete="on">
                {{ csrf_field() }}
                <div class="form__field">
                  <span class="hidden">Total Kas</span>
                  <input type="number" name="total_cash" class="form__input" placeholder="Total Kas" required>
                </div>

                <div class="form__field">
                  <span class="hidden">Rincian</span>
                  <input type="textarea" name="username" maxlength="500" class="form__input" placeholder="Rincian">
                </div>
                <div class="form__field">
                  <input type="submit" value="Tambahkan">
                </div>
              </form>
            </center>
      </div>
    </div>
  </div>
</div>
