@extends('admin.sidebar')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-success card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title">Data Artikel</h4>
        </div>
        <div class="card-body">
          <div class="toolbar">
            <div class="row mt-3">
              <div class="col">
              </div>
              <div class="col d-flex justify-content-end">
                <a href="{{ route('create-article') }}" class="btn bg-primary" > Tambah Artikel </a>
                {{-- <a href="" class="btn btn-danger">Cetak Sebagai PDF</a>
                <a href="" class="btn btn-success">Cetak Sebagai EXCEL</a> --}}
              </div>
            </div>
            <!--        Here you can write extra buttons/actions for the toolbar              -->
          </div>
          <div class="row">
            @foreach ($articles as $article)
              <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                <div class="card">
                  <div class="card-header card-header-danger">
                    <a href="{{ route('edit-article', $article->id) }}" class="d-block blur-shadow-image">
                      <img src="{{ asset('storage/images/contents/'.$article->galeri->gambar) }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="{{ route('article-detail', $article->id) }}">
                      <h4 class="card-title">{{ $article->judul }}</h4>
                    </a>
                    <p class="card-category">{!! Str::limit( html_entity_decode ($article->deskripsi) , 200) !!}</p>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      {{ \Carbon\Carbon::parse($article->tanggal)->format('d F Y')}} dibuat oleh {{ $article->user->name }}
                    </div>
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