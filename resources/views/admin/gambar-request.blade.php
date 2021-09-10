@extends('admin.sidebar')
@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-success card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title">Data Gambar</h4>
        </div>
        <div class="card-body">
          <div class="toolbar">
            <div class="row mt-3">
            <button class="btn bg-primary" data-toggle="modal" data-target="#gambarBaru">
                  Tambah Gambar
                </button>
             
            </div>
            <!--        Here you can write extra buttons/actions for the toolbar              -->
          </div>
          <div class="row" >
            @foreach ($gambar as $g)
              <div class="col-lg-4 col-md-6 mt-5 mt-md-0" >
                <div class="card" >
                  <div class="card-header card-header-danger">
                      <img src="{{ asset('storage/images/contents/'.$g->gambar) }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                  </div>
                  <div class="card-footer">
                    <h4 class="card-title">{{ $g->judul }}</h4>
                    <button class="btn bg-primary btn-primary me-auto border-0" data-toggle="modal" data-target="#modalEdit{{ $g->id }}">
                      <i class="material-icons text-lg">edit</i>
                    </button>
                  </div>
                </div>
              </div>
              @endforeach
          </div>
        </div>
        <!-- end content-->
      </div>
      <!--  end card  -->
    </div>
    <!-- end col-md-12 -->
  </div>
  
  @foreach ($gambar as $g)
  <div class="modal fade" id="modalEdit{{ $g->id }}" tabindex="-1" role="dialog" aria-labelledby="modalEdit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Gambar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" aria-label="Close">
          <i class="material-icons">clear</i>
        </button>
      </div>
      <form action="{{ route('post-req-gambar') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          
          <div class="row">
            <label class="col-sm-4 col-form-label">Judul</label>
            <div class="col-sm-8">
              <div class="form-group">
              <input type="text" name="id" class="form-control" value="{{ $g->id }}" hidden>
                <input type="text" name="judul" class="form-control" value="{{ $g->judul }}">
                <input type="text" name="added_by" class="form-control" value="{{Session::get('id')}}" hidden>
                <input type="text" name="gambar" class="form-control" value="{{ $g->gambar }}" hidden>
                <input type="text" name="path" class="form-control" value="{{ $g->path }}" hidden>
                <span class="bmd-help">Errors message goes here</span>
              </div>
            </div>
          </div>
          <div class="row">
            <label class="col-sm-4 col-form-label">Status</label>
            <div class="col-sm-8">
              <div class="form-group">
                <select class="form-control" name="status" id="status" >
                  <option value="0">Jangan Tampilkan</option>
                  <option value="1">Tampilkan</option>
                </select>
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
@endforeach

@endsection 