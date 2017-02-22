<head>
  <link rel="stylesheet" href="/css/login.css">
</head>
@include('layouts.error')
<div class="modal fade" id="addline" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><center><b>Tambah Produk</b></center></h4>
      </div>
      <div class="modal-body">
        <center>
        <form action="/admin/produk/add" method="POST" class="form login" autocomplete="on">
                {{ csrf_field() }}
                <div class="form__field">
                  <span class="hidden">Nama Produk</span>
                  <input type="text" name="product_name" class="form__input" placeholder="Nama Produk" required>
                </div>

                <div class="form__field">
                  <span class="hidden">Kategori</span>
                  <select class="form__input" name="category">
                    <option selected>Kategori</option>
                    <option value="makanan">Makanan</option>
                    <option value="minuman">Minuman</option>
                    <option value="perlengkapan">Perlengkapan Sekolah</option>
                    <option value="lain">Lain-lain</option>
                    optgroup
                  </select>
                </div>

                <div class="form__field">
                  <span class="hidden">Harga Beli</span>
                  <input type="number" name="purchase_price" class="form__input" maxlength="11" placeholder="Harga Beli" required>
                </div>

                <div class="form__field">
                  <span class="hidden">Harga Jual</span>
                  <input type="number" name="selling_price" class="form__input" maxlength="11" placeholder="Harga Jual" required>
                </div>

                <div class="form__field">
                  <span class="hidden">Stock</span>
                  <input type="number" name="stock" class="form__input" placeholder="Stok" required>
                </div>

                <div class="form__field">
                  <input type="submit" value="Submit">
                </div>
              </form>
            </center>
      </div>
    </div>
  </div>
</div>
