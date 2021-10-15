@extends('admin.sidebar')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary" style="margin-top: -2.5rem">
        <h2 class="card-title h2 fw-bolder text-center text-capitalize">{{ $article->judul }}</h2>
      </div>
      <div class="card-body">
        <img src="{{ asset('/public/fe/img/contents/'.$image->gambar) }}" alt="{{ $image->gambar }}" class="w-100 border-bottom border-2 border-primary mb-4" style="padding: 1.5rem 2.5rem">
        {!! html_entity_decode ($article->deskripsi) !!}
      </div>
      <div class="card-footer">
        {{-- widget goes here --}}
        <p class="card-category">Dibuat oleh {{ $article->user->name }} pada {{ \Carbon\Carbon::parse($article->tanggal)->format('d F Y')}}</p>
      </div>
    </div>
  </div>
  <!-- end col-md-12 -->
</div>
@endsection