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
              <div class="col-6">
                <a href="{{ route('create-article') }}" class="btn bg-primary m-4" > Tambah Artikel </a>
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
                  <div class="card-header card-header-success">
                    <a href="{{ route('article-detail', $article->id) }}" class="d-block blur-shadow-image">
                      @foreach ($images as $image)
                        @if($article->gambar_sampul === $image->id)
                          <img src="{{ asset('/public/fe/img/contents/'.$image->gambar) }}" alt="{{ $image->judul }}" class="img-fluid shadow border-radius-lg"> 
                        @endif
                      @endforeach
                          {{-- <img src="{{ asset('/fe/img/contents/'.$article->galeri->gambar) }}" alt="{{ $article->galeri->judul }}" class="img-fluid shadow border-radius-lg">  --}}
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="{{ route('article-detail', $article->id) }}">
                      <h4 class="card-title">{{ $article->judul }}</h4>
                    </a>
                    <p class="card-category">{!! Str::limit( strip_tags($article->deskripsi) , 200) !!}</p>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      {{ \Carbon\Carbon::parse($article->tanggal)->format('d F Y')}} dibuat oleh {{ $article->user->name }}
                    </div>
                    <div>
                      <a data-toggle="modal" data-target="#deletePopup{{ $article->id }}" class="btn btn-just-icon remove btn-danger text-white pull-right mx-1">
                          <i class="material-icons">delete</i>
                      </a>
                      <a href="{{ route('edit-article', $article->id) }}" class="btn btn-just-icon remove btn-warning text-white pull-right mx-1">
                          <i class="material-icons">edit</i>
                      </a>
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
  @include('admin.hapus-artikel')
@endsection 