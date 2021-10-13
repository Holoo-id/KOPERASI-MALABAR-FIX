@extends('default.base')
@section('content')
  <div class="default-page -mt-20 pt-20">
    {{-- banner --}}
    @include('default.header')
    <div class="page-section relative py-8">
      {{-- start articles grid --}}
      <div class="mx-auto grid auto-rows-auto items-center gap-8 w-11/12 md:grid-cols-2 xl:grid-cols-3">
        @foreach ($articles as $article)
          <div class="article-thumbnail shadow-xl bg-white flex flex-col flex-nowrap items-center justify-between w-full">
            @foreach ($images as $image)
              @if($article->gambar_sampul === $image->id)
                <img class="article-thumbnail-image" src="{{ asset('/fe/img/contents/'.$image->gambar) }}" alt="{{ $image->gambar }}">
              @endif
            @endforeach
            <div class="flex flex-col p-4 text-gray-800 items-center justify-between h-1/2">
              <h5 class="w-full text-lg text-center text-2xl font-bold">{{ $article->judul }}</h5>
              <p class="w-full text-center text-sm">Dibuat oleh <b class="text-bold">{{ $article->user->name }}</b> pada {{ \Carbon\Carbon::parse($article->tanggal)->format('d F Y')}}
              </p>
              <p class="pt-4">{!! Str::limit( strip_tags($article->deskripsi) , 200, ENT_NOQUOTES) !!}</p>
              <a href="{{ route('article', ['language' => app()->getLocale(), 'link' => $article->id]) }}" class="primary-button text-right w-min rounded-full mt-4">{{__("More..")}}</a>
            </div>
          </div>
        @endforeach
      </div>
      <div class="py-8 px-20">
        {{ $articles->links() }}
      </div>
    </div>
  </div>
@endsection