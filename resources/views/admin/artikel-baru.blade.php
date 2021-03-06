@extends('admin.sidebar')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-success card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title">Artikel Baru</h4>
        </div>
        <form action="{{ route('buatArtikel') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
          @csrf
          <div class="card-body">
            <div class="row px-5">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      {{-- <input type="text" name="id" value="{{Auth::user()->id}}" class="form-control" hidden> --}}
                      <input type="text" name="id" value="1" class="form-control" hidden>
                      <span class="bmd-help">{{ $errors->first('id') }}</span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-1 col-form-label">Judul</label>
                  <div class="col-sm-11">
                    <div class="form-group">
                      <input type="text" name="judul" class="form-control">
                      @if($errors->has('judul'))
                          <span class="text-danger">{{ $errors->first('judul') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                {{-- <div class="row mb-4">
                  <label class="col-sm-1 col-form-label">Kategori</label>
                  <div class="col-sm-11">
                    <div class="form-group">
                      <select name="kategori" id="" class="form-control">
                        <option value="artikel">Artikel</option>
                        <option value="berita">Berita</option>
                      </select>
                      @if($errors->has('kategori'))
                          <span class="text-danger">{{ $errors->first('kategori') }}</span>
                      @endif
                    </div>
                  </div>
                </div> --}}
                <div class="row">
                  <label class="col-sm-1 col-form-label">Konten</label>
                  <div class="col-sm-11">
                    <div class="form-group">
                      <textarea name="deskripsi" id="konten" class="form-control"></textarea>
                      @if($errors->has('deskripsi'))
                          <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-1 col-form-label">Tanggal</label>
                  <div class="col-sm-11">
                    <div class="form-group">
                      <input type="date" name="tanggal" class="form-control">
                      @if($errors->has('tanggal'))
                          <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-1 col-form-label">Gambar</label>
                  <div class="col-sm-11">
                    
                      <input type="file" name="gambar" class="form-control">
                      @if($errors->has('gambar'))
                          <span class="text-danger">{{ $errors->first('gambar') }}</span>
                      @endif
                  
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-1 col-form-label">Judul Gambar</label>
                  <div class="col-sm-11">
                    <div class="form-group">
                      <input type="text" name="judul_gambar" class="form-control">
                      @if($errors->has('judul_gambar'))
                          <span class="text-danger">{{ $errors->first('judul_gambar') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer px-5">
            <input type="reset" class="btn btn-danger btn-link">
            <input type="submit" class="btn btn-success btn-link">
          </div>
        </form>
        <!-- end content-->
      </div>
      <!--  end card  -->
    </div>
    <!-- end col-md-12 -->
  </div>
  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
  <script>
      CKEDITOR.replace('deskripsi',{
        filebrowserUploadUrl: "{{ route('upload-gambar',['_token'=> csrf_token()]) }}",
        filebrowserUploadMethod:"form"
      });
  </script>
@endsection