@extends('default.base')
@section('content')
  <div class="default-page -mt-20 pt-20">
    {{-- banner --}}
    @include('default.header')
    <div class="page-section relative py-8">
      {{-- start products grid --}}
      <div class="mx-auto grid auto-rows-auto items-center gap-8 w-11/12 md:grid-cols-2 xl:grid-cols-3">
          {{$products}}
        @foreach ($products as $product)
          <div class="product-thumbnail shadow-xl bg-white flex flex-col flex-nowrap items-center justify-between">
            @foreach ($images as $image)
              @if($product->gambar_sampul === $image->id)
                  <img class="product-thumbnail-image" src="{{ asset('/fe/img/contents/'.$image->gambar) }}" alt="{{ $image->gambar }}">
              @endif
            @endforeach
            <div class="flex flex-col p-4 text-gray-800 items-center">
              <h5 class="w-full text-center text-2xl font-bold">{{ $product->judul }}</h5>
              <p class="w-full text-center text-sm">Dibuat oleh <b class="text-bold">{{ $product->user->name }}</b> pada {{ \Carbon\Carbon::parse($product->tanggal)->format('d F Y')}}
              </p>
              <p class="pt-4">{!! Str::limit( strip_tags($product->deskripsi) , 200, ENT_NOQUOTES) !!}</p>
              <a href="{{ route('product', ['language' => app()->getLocale(), 'link' => $product->id]) }}" class="primary-button text-right w-min rounded-full mt-4">{{__("More..")}}</a>
            </div>
          </div>
        @endforeach
      </div>
      <div class="py-8 px-20">
        {{ $products->links() }}
      </div>
    </div>
  </div>
@endsection