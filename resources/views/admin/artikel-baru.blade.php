<!-- Classic Modal -->
<div class="modal fade" id="artikelBaru" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Artikel</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <i class="material-icons">clear</i>
        </button>
      </div>
      <form action="{{ route('buatArtikel') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-8">
              <div class="form-group">
                <input type="text" name="id" value="{{Session::get('id')}}" class="form-control" hidden>
                <span class="bmd-help">Errors message goes here</span>
              </div>
            </div>
          </div>
          <div class="row">
            <label class="col-sm-4 col-form-label">Judul</label>
            <div class="col-sm-8">
              <div class="form-group">
                <input type="text" name="judul" class="form-control">
                <span class="bmd-help">Errors message goes here</span>
              </div>
            </div>
          </div>
          <div class="row">
            <label class="col-sm-4 col-form-label">Konten</label>
            <div class="col-sm-8">
              <div class="form-group">
                <textarea name="deskripsi" id="konten" class="form-control"></textarea>
                <span class="bmd-help">Errors message goes here</span>
              </div>
            </div>
          </div>
          <div class="row">
            <label class="col-sm-4 col-form-label">Tanggal</label>
            <div class="col-sm-8">
              <div class="form-group">
                <input type="date" name="tanggal" class="form-control">
                <span class="bmd-help">Errors message goes here</span>
              </div>
            </div>
          </div>
          <div class="row">
            <label class="col-sm-4 col-form-label">Gambar</label>
            <div class="col-sm-8">
              
                <input type="file" name="gambar" class="form-control">
                <span class="bmd-help">Errors message goes here</span>
            
            </div>
          </div>
          <div class="row">
            <label class="col-sm-4 col-form-label">Judul Gambar</label>
            <div class="col-sm-8">
              <div class="form-group">
                <input type="text" name="judul_gambar" class="form-control">
                <span class="bmd-help">Errors message goes here</span>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-success btn-link">
          <input type="reset" class="btn btn-danger btn-link">
        </div>
      </form>
    </div>
  </div>
</div>
<!--  End Modal -->
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('deskripsi',{
      filebrowserUploadUrl: "{{ route('upload-gambar',['_token'=> csrf_token()]) }}",
      filebrowserUploadMethod:"form"
    });
</script>