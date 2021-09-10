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
          <div class="row">
            @foreach ($gambar as $g)
              <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                <div class="card">
                  <div class="card-header card-header-danger">
                    <a href="#" class="d-block blur-shadow-image">
                      <img src="{{ asset('storage/images/contents/'.$g->gambar) }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="#">
                      <h4 class="card-title">{{ $g->judul }}</h4>
                    </a>
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
  
  <div class="modal fade" id="gambarBaru" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Gambar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <i class="material-icons">clear</i>
        </button>
      </div>
      <form action="{{ route('post-gambar') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="modal-body">
          
          <div class="row">
            <div class="col-sm-8">
              <div class="form-group">
                <input type="text" name="id" class="form-control" value="{{Session::get('id')}}" hidden>
                <span class="bmd-help">Errors message goes here</span>
              </div>
            </div>
          </div>
          <div class="row">
            <label class="col-sm-4 col-form-label">Judul</label>
            <div class="col-sm-8">
              <div class="form-group">
                <input type="text" name="judul_gambar" class="form-control">
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
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-success btn-link">
          <input type="reset" class="btn btn-danger btn-link">
        </div>
      </form>
    </div>
  </div>
</div>

@endsection 