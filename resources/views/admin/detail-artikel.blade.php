@extends('admin.sidebar')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <img src="{{ asset('storage/images/contents/'.$article->galeri->gambar) }}" alt="" srcset="">
        <h4 class="card-title">{{ $article->judul }}</h4>
        <p class="card-category">Dibuat oleh {{ $article->user->name }} pada {{ \Carbon\Carbon::parse($article->tanggal)->format('d F Y')}}</p>
      </div>
      <div class="card-body">
        {!! html_entity_decode ($article->deskripsi) !!}
      </div>
      <div class="card-footer">
        {{-- widget goes here --}}
      </div>
    </div>
  </div>
  <!-- end col-md-12 -->
</div>
@endsection