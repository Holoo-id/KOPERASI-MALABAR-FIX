@extends('default.base')
@section('content')
<div class="default-page -mt-20 pt-20">
  {{-- banner --}}
  @include('default.header')
  <div class="page-section relative">
    {{-- contact form --}}
    <div class="mx-auto flex flex-col items-center justify-center w-full py-16">
      <div class="w-11/12 mx-auto grid auto-rows-auto items-center gap-8 md:grid-cols-2 xl:grid-cols-3">
        @foreach ($images as $image)
        <div class="p-4 border-2 border-gray-400">
          <img src="{{ asset('storage/images/contents/'.$image->gambar) }}" alt="" srcset="">
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection