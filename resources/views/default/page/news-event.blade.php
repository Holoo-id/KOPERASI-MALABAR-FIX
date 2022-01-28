@extends('default.base')
@section('content')
  <div class="default-page">
    {{-- banner --}}
    @include('default.header')
    <div class="page-section relative py-8">
        <h2 class="
        section-title py-8 text-center font-black capitalize text-2xl
        md:text-3xl
        lg:text-4xl
        xl:text-5xl
        ">{{__("Upcoming Events")}}</h2>
      {{-- start events grid --}}
      <div class="mx-auto grid auto-rows-auto items-center gap-8 w-11/12 md:grid-cols-2 xl:grid-cols-3">
        @foreach ($events as $event)
          <div class="article-thumbnail shadow-xl bg-white flex flex-col flex-nowrap items-center justify-between">
            @foreach ($images as $image)
              @if($event->gambar_sampul === $image->id)
                  <img class="article-thumbnail-image" src="{{ asset('/fe/img/contents/'.$image->gambar) }}" alt="{{ $image->gambar }}">
              @endif
            @endforeach
            <div class="flex flex-col p-4 text-gray-800 items-center">
              <h5 class="w-full text-2xl text-center font-bold block h-16 overflow-hidden text-ellipsis">{{ $event->judul }}</h5>
              <p class="w-full text-center text-sm">Dibuat oleh <b class="text-bold">{{ $event->user->name }}</b> pada {{ \Carbon\Carbon::parse($event->tanggal)->format('d F Y')}}
              </p>
              <p class="pt-4 block overflow-hidden text-ellipsis" style="height: 88px">{!! Str::limit( strip_tags($event->deskripsi) , 200, ENT_NOQUOTES) !!}</p>
              <a href="{{ route('article', ['language' => app()->getLocale(), 'link' => $event->id]) }}" class="primary-button text-right w-min rounded-full mt-4">{{__("More..")}}</a>
            </div>
          </div>
        @endforeach
      </div>
      <div class="pt-8 pb-12 px-20">
        {{ $events->links() }}
      </div>
        <h2 class="
        section-title py-8 text-center font-black capitalize text-2xl
        md:text-3xl
        lg:text-4xl
        xl:text-5xl
        ">{{__("News")}}</h2>
      {{-- start news grid --}}
      <div class="mx-auto grid auto-rows-auto items-center gap-8 w-11/12 md:grid-cols-2 xl:grid-cols-3">
        @foreach ($news as $feed)
          <div class="article-thumbnail shadow-xl bg-white flex flex-col flex-nowrap items-center justify-between">
            @foreach ($images as $image)
              @if($feed->gambar_sampul === $image->id)
                  <img class="article-thumbnail-image" src="{{ asset('/fe/img/contents/'.$image->gambar) }}" alt="{{ $image->gambar }}">
              @endif
            @endforeach
            <div class="flex flex-col p-4 text-gray-800 items-center">
              <h5 class="w-full text-2xl text-center font-bold block h-16 overflow-hidden text-ellipsis">{{ $feed->judul }}</h5>
              <p class="w-full text-center text-sm">Dibuat oleh <b class="text-bold">{{ $feed->user->name }}</b> pada {{ \Carbon\Carbon::parse($feed->tanggal)->format('d F Y')}}
              </p>
              <p class="pt-4 block overflow-hidden text-ellipsis" style="height: 88px">{!! Str::limit( strip_tags($feed->deskripsi) , 200, ENT_NOQUOTES) !!}</p>
              <a href="{{ route('article', ['language' => app()->getLocale(), 'link' => $feed->id]) }}" class="primary-button text-right w-min rounded-full mt-4">{{__("More..")}}</a>
            </div>
          </div>
        @endforeach
      </div>
      <div class="py-8 px-20">
        {{ $news->links() }}
      </div>
    </div>
  </div>
@endsection