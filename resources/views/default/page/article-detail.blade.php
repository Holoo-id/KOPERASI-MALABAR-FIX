@extends('default.base')
@section('content')
  <div class="default-page -mt-20 mb-8 pt-20">
    {{-- banner --}}
    @include('default.article-banner')
    <div class="page-section flex flex-col justify-center relative items-center">
      {{-- content article start --}}
      <div class="article-content w-9/12">
        {!! html_entity_decode ($article->deskripsi) !!}
      </div>
      <a href="{{ route('articles', app()->getLocale()) }}" class="primary-button rounded-full w-max">Kembali ke Artikel</a>
    </div>
  </div>
@endsection