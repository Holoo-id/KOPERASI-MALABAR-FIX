@extends('default.base')
@section('content')
  <div class="default-page -mt-20 pt-20">
    {{-- banner --}}
    @include('default.header')
    <div class="page-section relative py-8">
      {{-- start articles grid --}}
      <div class="mx-auto grid auto-rows-auto items-center gap-8 w-11/12 md:grid-cols-2 xl:grid-cols-3">
        @foreach ($articles as $article)
          <div class="article-thumbnail shadow-xl bg-gray-200 flex flex-col flex-nowrap items-center justify-between rounded-2xl w-full">
            <img class="article-thumbnail-image" src="{{ asset('storage/images/contents/'.$article->galeri->gambar) }}" alt="{{ $article->galeri->gambar }}">
            <div class="flex flex-col p-4 text-gray-800 items-end">
              <h5 class="w-full text-lg text-left font-bold">{{ $article->judul }}</h5>
              <p class="w-full text-left text-sm">Dibuat oleh {{ $article->user->name }} pada {{ \Carbon\Carbon::parse($article->tanggal)->format('d F Y')}}</p>
              <p class="pt-4">{!! Str::limit( html_entity_decode ($article->deskripsi) , 200) !!}</p>
              <a href="{{ route('article', $article->id) }}" class="primary-button text-right w-min rounded-full mt-4">Selengkapnya</a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection