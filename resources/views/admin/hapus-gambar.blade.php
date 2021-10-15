@foreach($gambar as $g)
  <div class="modal fade" id="deleteImagePopup{{ $g->id }}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hapus Gambar</h4>
        </div>
        <div class="modal-body">
          <center>Anda Yakin Ingin Menghapus Gambar</center>
        </div>
        <div class="modal-footer">
            <input type="text" value="{{ $g->id }}" name="id" hidden>
            <a href="{{ route('delete-gambar',$g->id) }}" class="btn btn-danger">Yakin</a>
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        </div>
      </div>
      
    </div>
  </div>
@endforeach