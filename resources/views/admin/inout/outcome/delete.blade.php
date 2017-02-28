<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h1><b>Apakah anda yakin mau menghapus data ini?</b></h1>
      </div>
      <div class="modal-footer">
        
        <form class="" action="/admin/anggota/{{ $id }}/hapus" method="post">
          {{ method_field('DELETE') }}
          {{ csrf_field() }}
          <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Tidak</button>
          <input type="submit" class="btn btn-danger btn-lg" value="Ya"></button>
        </form>
      </div>
    </div>
  </div>
</div>
