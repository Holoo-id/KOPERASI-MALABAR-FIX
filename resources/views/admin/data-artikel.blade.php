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
                <button class="btn bg-primary" data-toggle="modal" data-target="#artikelBaru">
                  Tambah Artikel
                </button>
              </div>
              <div class="col d-flex justify-content-end">
                <a href="" class="btn btn-danger">Cetak Sebagai PDF</a>
                <a href="" class="btn btn-success">Cetak Sebagai EXCEL</a>
              </div>
            </div>
            <!--        Here you can write extra buttons/actions for the toolbar              -->
          </div>
          <div class="row mt-5">
            @foreach ($articles as $article)
              <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                <div class="card" data-animation="true">
                  <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <a class="d-block blur-shadow-image">
                      <img src="{{ asset('storage/images/contents/'.$article->gambar) }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                    </a>
                    <div class="colored-shadow" style="background-image: url(&quot;/be/img/products/product-2-min.jpg&quot;);"></div>
                  </div>
                  <div class="card-body text-center">
                    <div class="d-flex mt-n6 mx-auto">
                      <a class="btn btn-link text-primary ms-auto border-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Refresh">
                        <i class="material-icons text-lg">refresh</i>
                      </a>
                      <button class="btn btn-link text-info me-auto border-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit">
                        <i class="material-icons text-lg">edit</i>
                      </button>
                    </div>
                    <h5 class="font-weight-normal mt-3">
                      <a href="javascript:;">{{ $article->judul }}</a>
                    </h5>
                    <p class="mb-0">
                      {!! Str::limit( html_entity_decode ($article->deskripsi) , 200) !!}
                    </p>
                  </div>
                  <hr class="dark horizontal my-0">
                  <div class="card-footer d-flex">
                    <p class="font-weight-normal my-auto">{{ $article->nama }}</p>
                    {{-- <i class="material-icons position-relative ms-auto text-lg me-1 my-auto">place</i> --}}
                    <p class="text-sm my-auto">{{ \Carbon\Carbon::parse($article->tanggal)->format('d F Y')}}</p>
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
  @include('admin.artikel-baru')
@endsection 