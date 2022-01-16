@extends('default.base')
@section('content')
  <div class="default-page -mt-20 mb-8 pt-20">
    {{-- banner --}}
    @include('default.product-banner')
    <div class="page-section flex flex-col justify-center relative items-center">
      {{-- content product start --}}
      <div class="product-content w-9/12">
          <br><br><br>
        {!! html_entity_decode ($product->deskripsi) !!}
      </div>
      <a href="{{ route('products', app()->getLocale()) }}" class="primary-button rounded-full w-max">Kembali ke Artikel</a>
    </div>
  </div>
@endsection