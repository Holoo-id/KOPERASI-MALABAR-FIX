@extends('admin.sidebar')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-success card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title">Edit Berita</h4>
        </div>
        <form action="{{ route('update-berita') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
          @csrf
          <div class="card-body">
            <div class="row px-5">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input type="text" name="uId" value="{{Auth::user()->id}}" class="form-control" hidden>
                      <input type="text" name="cId" value="{{ $feed->id }}" class="form-control" hidden>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-1 col-form-label">Judul</label>
                  <div class="col-sm-11">
                    <div class="form-group">
                      <input type="text" name="judul" class="form-control" value="{{ $feed->judul }}">
                      @if($errors->has('judul'))
                          <span class="text-danger">{{ $errors->first('judul') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-1 col-form-label">Konten</label>
                  <div class="col-sm-11">
                    <div class="form-group">
                      <textarea name="deskripsi" id="konten" class="form-control">{!! html_entity_decode ($feed->deskripsi) !!}</textarea>
                      @if($errors->has('konten'))
                          <span class="text-danger">{{ $errors->first('konten') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-1 col-form-label">Tanggal</label>
                  <div class="col-sm-11">
                    <div class="form-group">
                      <input type="date" name="tanggal" class="form-control" value="{{ $feed->tanggal }}">
                      @if($errors->has('tanggal'))
                          <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                @if($image->gambar)
                <div class="row mb-3">
                  <label class="col-sm-1 col-form-label">Gambar Sebelumnya</label>
                    <div class="col-sm-11">
                      <input type="text" name="imgId" value="{{ $feed->gambar_sampul }}" hidden>
                      <img src="{{ asset('/fe/img/contents/'.$image->gambar) }}" alt="{{ $image->gambar }}" style="max-height: 250px">
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-1 col-form-label">Gambar Baru</label>
                  <div class="col-sm-11">
                      <div class="col-12">
                        <input type="text" name="imgId" value="{{ $feed->gambar_sampul }}" hidden>
                        <input type="file" name="gambar" class="form-control">
                        @if($errors->has('gambar'))
                            <span class="text-danger">{{ $errors->first('gambar') }}</span>
                        @endif
                      </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-1 col-form-label">Judul Gambar</label>
                  <div class="col-sm-11">
                    <div class="form-group">
                      <input type="text" name="judul_gambar" class="form-control" value="{{ $image->judul }}">
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