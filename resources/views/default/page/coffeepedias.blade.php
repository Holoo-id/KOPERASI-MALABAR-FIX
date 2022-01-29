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
        ">{{__("Kinds of Coffee")}}</h2>
      {{-- start types grid --}}
      <div class="mx-auto grid auto-rows-auto items-center gap-8 w-11/12 md:grid-cols-2 xl:grid-cols-3">
        @foreach ($types as $type)
          <div class="article-thumbnail shadow-xl bg-white flex flex-col flex-nowrap items-center justify-between">
            @foreach ($images as $image)
              @if($type->gambar_sampul === $image->id)
                  <img class="article-thumbnail-image" src="{{ asset('/fe/img/contents/'.$image->gambar) }}" alt="{{ $image->gambar }}">
              @endif
            @endforeach
            <div class="flex flex-col p-4 text-gray-800 items-center">
              <h5 class="w-full text-2xl text-center font-bold block h-16 overflow-hidden text-ellipsis">{{ $type->judul }}</h5>
              <p class="w-full text-center text-sm">Dibuat oleh <b class="text-bold">{{ $type->user->name }}</b> pada {{ \Carbon\Carbon::parse($type->tanggal)->format('d F Y')}}
              </p>
              <p class="pt-4 block overflow-hidden text-ellipsis" style="height: 88px">{!! Str::limit( strip_tags($type->deskripsi) , 200, ENT_NOQUOTES) !!}</p>
              <a href="{{ route('article', ['language' => app()->getLocale(), 'link' => $type->id]) }}" class="primary-button text-right w-min rounded-full mt-4">{{__("More..")}}</a>
            </div>
          </div>
        @endforeach
      </div>
      <div class="pt-8 pb-12 px-20">
        {{ $types->links() }}
      </div>
        <h2 class="
        section-title py-8 text-center font-black capitalize text-2xl
        md:text-3xl
        lg:text-4xl
        xl:text-5xl
        ">{{__("Coffee Cultivations")}}</h2>
      {{-- start cultivations grid --}}
      <div class="mx-auto grid auto-rows-auto items-center gap-8 w-11/12 md:grid-cols-2 xl:grid-cols-3">
        @foreach ($cultivations as $cultivation)
          <div class="article-thumbnail shadow-xl bg-white flex flex-col flex-nowrap items-center justify-between">
            @foreach ($images as $image)
              @if($cultivation->gambar_sampul === $image->id)
                  <img class="article-thumbnail-image" src="{{ asset('/fe/img/contents/'.$image->gambar) }}" alt="{{ $image->gambar }}">
              @endif
            @endforeach
            <div class="flex flex-col p-4 text-gray-800 items-center">
              <h5 class="w-full text-2xl text-center font-bold block h-16 overflow-hidden text-ellipsis">{{ $cultivation->judul }}</h5>
              <p class="w-full text-center text-sm">Dibuat oleh <b class="text-bold">{{ $cultivation->user->name }}</b> pada {{ \Carbon\Carbon::parse($cultivation->tanggal)->format('d F Y')}}
              </p>
              <p class="pt-4 block overflow-hidden text-ellipsis" style="height: 88px">{!! Str::limit( strip_tags($cultivation->deskripsi) , 200, ENT_NOQUOTES) !!}</p>
              <a href="{{ route('article', ['language' => app()->getLocale(), 'link' => $cultivation->id]) }}" class="primary-button text-right w-min rounded-full mt-4">{{__("More..")}}</a>
            </div>
          </div>
        @endforeach
      </div>
      <div class="py-8 px-20">
        {{ $cultivations->links() }}
      </div>
        <h2 class="
        section-title py-8 text-center font-black capitalize text-2xl
        md:text-3xl
        lg:text-4xl
        xl:text-5xl
        ">{{__("Coffee Processing")}}</h2>
      {{-- start processing grid --}}
      <div class="mx-auto grid auto-rows-auto items-center gap-8 w-11/12 md:grid-cols-2 xl:grid-cols-3">
        @foreach ($processing as $process)
          <div class="article-thumbnail shadow-xl bg-white flex flex-col flex-nowrap items-center justify-between">
            @foreach ($images as $image)
              @if($process->gambar_sampul === $image->id)
                  <img class="article-thumbnail-image" src="{{ asset('/fe/img/contents/'.$image->gambar) }}" alt="{{ $image->gambar }}">
              @endif
            @endforeach
            <div class="flex flex-col p-4 text-gray-800 items-center">
              <h5 class="w-full text-2xl text-center font-bold block h-16 overflow-hidden text-ellipsis">{{ $process->judul }}</h5>
              <p class="w-full text-center text-sm">Dibuat oleh <b class="text-bold">{{ $process->user->name }}</b> pada {{ \Carbon\Carbon::parse($process->tanggal)->format('d F Y')}}
              </p>
              <p class="pt-4 block overflow-hidden text-ellipsis" style="height: 88px">{!! Str::limit( strip_tags($process->deskripsi) , 200, ENT_NOQUOTES) !!}</p>
              <a href="{{ route('article', ['language' => app()->getLocale(), 'link' => $process->id]) }}" class="primary-button text-right w-min rounded-full mt-4">{{__("More..")}}</a>
            </div>
          </div>
        @endforeach
      </div>
      <div class="py-8 px-20">
        {{ $processing->links() }}
      </div>
    </div>
  </div>
@endsection