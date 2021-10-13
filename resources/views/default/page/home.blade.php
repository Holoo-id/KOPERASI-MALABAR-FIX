@extends('default.base')
@section('content')
    <div class="home-page -mt-20">
      {{-- banner --}}
      <div class="slideshow-container">
        <div class="homeSlides fade">
          <img src="{{ asset('/fe/img/Aset_MitraMalabar_ (3 of 8).jpg') }}">
          <div class="absolute bottom-1/2 -my-16 text-center w-full text-2xl flex flex-col items-center">
            <h1 class="
              page-title w-11/12 text-white text-center font-black uppercase text-4xl
              md:text-5xl
              lg:text-6xl
              xl:text-7xl
            ">{{ __("INDONESIAN MALABAR COFFEE")}}</h1>
            <h3 class="
              page-subtitle text-white text-center font-light text-2xl capitalize w-10/12
              md:text-3xl
              lg:text-4xl
              xl:text-5xl
            ">{{ __("Special Selection of Coffee From Indonesia Malabar Mountain - West Java") }}</h3>
          </div>
        </div>
        {{-- <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
        <a class="next" onclick="changeSlide(1)">&#10095;</a> --}}
      </div>
        <br>
        
      {{-- <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
      </div> --}}
      <div class="page-section relative">
        {{-- tentang kami --}}
        <div class="mx-auto flex flex-col items-center justify-center">
          <h2 class="
            section-title py-8 text-center font-black capitalize text-2xl w-11/12
            md:text-3xl md:w-10/12
            lg:text-4xl
            xl:text-5xl xl:w-9/12
            2xl:w-8/12
          ">{{__("About Us")}}</h2>
          <p class="
            text-center text-lg mb-4 text-gray-800 w-11/12 mb-28
            md:text-xl md:w-10/12
            lg:text-2xl
            xl:text-3xl xl:w-9/12
          ">{{__("Koperasi Mitra Malabar has its finest division units, which is :")}}</p>
          <div class="section-content-wrap flex justify-center">
            <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row">
              <img src="{{ asset('/fe/img/Aset_MitraMalabar_ (2 of 8).jpg') }}" alt="" class="
                border-4 border-white -my-8 flex-1 w-11/12
                lg:w-5/12
              ">
              <div class="section-content">
                <p class="py-4 text-gray-800 text-xl font-medium">
                  {{__("Koperasi Mitra Malabar is a cooperatives production that has massive potential in supporting the well-being of West Java people's social economy")}}
                </p>
                <p class="py-4 text-gray-800 text-lg">
                  {{__("We develop existing entrepreneurship to match the changes in the business environment without neglecting the spirit of team working and cooperation")}}
                </p>
              </div>
            </div>
          </div>
        </div>
        {{-- divisi --}}
        <div class="w-11/12 mx-auto mt-28 flex flex-col items-center justify-center">
          <h2 class="
            section-title py-8 text-center font-black capitalize text-2xl w-11/12
            md:text-3xl md:w-10/12
            lg:text-4xl
            xl:text-5xl xl:w-9/12
            2xl:w-8/12
          ">{{__("Our Division")}}</h2>
          <p class="
            text-center text-lg mb-8 text-gray-800 w-11/12
            md:text-xl md:w-10/12
            lg:text-2xl
            xl:text-3xl xl:w-9/12
          ">{{__("Koperasi Mitra Malabar has its finest division units, which is :")}}</p>
        </div>
        <div class="flex flex-col items-center lg:flex-row justify-evenly gap-8">
          <div class="content-image flex-1 border-4 border-white shadow-md relative">
            <img src="{{asset('/fe/img/9.png')}}" alt="" srcset="">
            <a href="{{ route('profil', app()->getLocale()) }}" class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">{{__("PROFILE")}}</div>
              <p class="font-medium text-white">{{__("To know more about us")}}</p>
            </a>
          </div>
          <div class="content-image flex-1 border-4 border-white shadow-md relative">
            <img src="{{asset('/fe/img/10.png')}}" alt="" srcset="">
            <a href="" class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">{{__("TRAINING")}}</div>
              <p class="font-medium text-white">{{__("To join our training in agribusiness")}}</p>
            </a>
          </div>
        </div>
        {{-- info --}}
        <div class="mx-auto bg-gray-200 pt-32 pb-16">
          <h2 class="
            section-title pb-16 text-center font-black capitalize text-2xl
            md:text-3xl
            lg:text-4xl
            xl:text-5xl
          ">{{__("Latest Information")}}</h2>
          {{-- start articles grid --}}
          <div class="w-11/12 mx-auto grid auto-rows-auto items-center gap-8 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($articles as $article)
              <div class="article-thumbnail shadow-xl bg-white flex flex-col flex-nowrap items-center justify-between w-full">
                @foreach ($images as $image)
                @if($article->gambar_sampul === $image->id)
                    <img class="article-thumbnail-image" src="{{ asset('/fe/img/contents/'.$image->gambar) }}" alt="{{ $image->gambar }}">
                @endif
                @endforeach
                <div class="flex flex-col p-4 text-gray-800 items-center">
                  <h5 class="w-full text-lg text-center text-2xl font-bold">{{ $article->judul }}</h5>
                  <p class="w-full text-center text-sm">Dibuat oleh <b class="text-bold">{{ $article->user->name }}</b> pada {{ \Carbon\Carbon::parse($article->tanggal)->format('d F Y')}}
                  </p>
                  <p class="pt-4">{!! Str::limit( strip_tags($article->deskripsi) , 200, ENT_NOQUOTES) !!}</p>
                  <a href="{{ route('article', ['language' => app()->getLocale(), 'link' => $article->id]) }}" class="primary-button text-right w-min rounded-full mt-4">{{__("More..")}}</a>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
@endsection