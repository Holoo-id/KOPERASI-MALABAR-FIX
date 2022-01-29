<!-- Modal -->
@foreach($feeds as $feed)
  <div class="modal fade" id="deletePopup{{ $feed->id }}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hapus Data</h4>
        </div>
        <div class="modal-body">
          <center>Anda Yakin Ingin Menghapus Data</center>
        </div>
        <div class="modal-footer">
            <input type="text" value="{{ $feed->id }}" name="id" hidden>
            <input type="text" value="{{ $feed->gambar_sampul }}" name="gambar_sampul" hidden>
            <a href="{{ route('delete-berita',$feed->id) }}" class="btn btn-danger">Yakin</a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        </div>
      </div>
      
    </div>
  </div>
  @endforeach