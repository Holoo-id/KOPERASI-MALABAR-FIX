@extends('admin.sidebar')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-success card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title">Data Event</h4>
        </div>
        <div class="card-body">
          <div class="toolbar">
            <div class="row mt-3">
              <div class="col-6">
                <a href="{{ route('event-baru') }}" class="btn bg-primary m-4" > Tambah Event </a>
                {{-- <a href="" class="btn btn-danger">Cetak Sebagai PDF</a>
                <a href="" class="btn btn-success">Cetak Sebagai EXCEL</a> --}}
              </div>
            </div>
            <!--        Here you can write extra buttons/actions for the toolbar              -->
          </div>
          <div class="row">
            @foreach ($events as $event)
              <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                <div class="card">
                  <div class="card-header card-header-success">
                    <a href="{{ route('detail-event', $event->id) }}" class="d-block blur-shadow-image">
                      @foreach ($images as $image)
                        @if($event->gambar_sampul === $image->id)
                          <img src="{{ asset('/fe/img/contents/'.$image->gambar) }}" alt="{{ $image->judul }}" class="img-fluid shadow border-radius-lg"> 
                        @endif
                      @endforeach
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="{{ route('detail-event', $event->id) }}">
                      <h4 class="card-title">{{ $event->judul }}</h4>
                    </a>
                    <p class="card-category">{!! Str::limit( strip_tags($event->deskripsi) , 200) !!}</p>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      {{ \Carbon\Carbon::parse($event->tanggal)->format('d F Y')}} dibuat oleh {{ $event->user->name }}
                    </div>
                    <div>
                      <a data-toggle="modal" data-target="#deletePopup{{ $event->id }}" class="btn btn-just-icon remove btn-danger text-white pull-right mx-1">
                          <i class="material-icons">delete</i>
                      </a>
                      <a href="{{ route('edit-event', $event->id) }}" class="btn btn-just-icon remove btn-warning text-white pull-right mx-1">
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
  @include('admin.event.hapus-event')
@endsection 