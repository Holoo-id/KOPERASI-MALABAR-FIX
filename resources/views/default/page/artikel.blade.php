@extends('default.base')
@section('content')
  <div class="default-page -mt-20 pt-20">
    {{-- banner --}}
    @include('default.header')
    <div class="page-section relative py-8">
      {{-- start articles grid --}}
      <div class="mx-auto grid auto-rows-auto items-center gap-8 w-11/12 md:grid-cols-2 xl:grid-cols-3">
        @foreach ($articles as $article)
          <div class="article-thumbnail shadow-xl bg-white flex flex-col flex-nowrap items-center justify-between">
            @foreach ($images as $image)
              @if($article->gambar_sampul === $image->id)
                  <img class="article-thumbnail-image" src="{{ asset('/fe/img/contents/'.$image->gambar) }}" alt="{{ $image->gambar }}">
              @endif
            @endforeach
            <div class="flex flex-col p-4 text-gray-800 items-center">
            <h5 class="w-full text-2xl text-center font-bold block h-16 overflow-hidden text-ellipsis">{{ $article->judul }}</h5>
              <p class="w-full text-center text-sm">Dibuat oleh <b class="text-bold">{{ $article->user->name }}</b> pada {{ \Carbon\Carbon::parse($article->tanggal)->format('d F Y')}}
              </p>
              <p class="pt-4 block overflow-hidden text-ellipsis" style="height: 88px">{!! Str::limit( strip_tags($article->deskripsi) , 200, ENT_NOQUOTES) !!}</p>
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