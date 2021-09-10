@extends('admin.sidebar')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-success card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title">Data Galeri</h4>
        </div>
        <div class="card-body">
          <div class="toolbar">
            <div class="row mt-3">
              <div class="col">
                <a href="{{ route('create-article') }}" class="btn bg-primary" > Tambah Gambar </a>
              </div>
              <div class="col d-flex justify-content-end">
                {{-- <a href="" class="btn btn-danger">Cetak Sebagai PDF</a>
                <a href="" class="btn btn-success">Cetak Sebagai EXCEL</a> --}}
              </div>
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
                  <div class="card-footer">
                    <a href="{{ route('show-gambar') }}" class="btn btn-primary">
                      <i class="material-icons">assignment</i>
                    </a>
                    <a href="{{ route('show-gambar') }}" class="btn btn-green">
                      <i class="material-icons">assignment</i>
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
@endsection 