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
          ">{{__("Indonesian Malabar Coffee cultivates Luwak with standard maintenance following the Five Animal Husbandry Business Program supported by experts in their fields. Indonesian Malabar Coffee has succeeded in cultivating civets, thus helping the conservation of this type of protected animal.")}}</p>
          <div class="section-content-wrap flex justify-center">
            <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row">
              <!-- <img src="{{ asset('/fe/img/Aset_MitraMalabar_ (2 of 8).jpg') }}" alt="" class="
                border-4 border-white -my-8 flex-1 w-11/12
                lg:w-5/12
              "> -->
              <img src="http://kopimalabarindonesia.com/wp-content/uploads/2013/05/32.jpg" alt="" class="
                border-4 border-white -my-8 flex-1 w-11/12
                lg:w-5/12
              " style="height:20rem">
              <div class="section-content">
                <p class="py-4 text-gray-800 text-xl font-medium">
                  {{__("Indonesian Malabar Coffee not only produces quality products but also applies a sustainable coffee production system by cultivating and gardening coffee that is environmentally friendly, not clearing forest areas. We are very concerned about the rules of forest conservation by maintaining stands in coffee plantation areas. Coffee plants, characteristically, plants will be able to carry out the ecological function of an area, the roots of coffee plants are able to open soil cavities and continue water to be stored in the soil layer, to withstand the rate of erosion that occurs. Coffee plants are also able to capture carbon emissions circulating in the air.")}}
                </p>
              </div>
            </div>
          </div>
        </div>
        {{-- program --}}
        <div id="program" class="w-11/12 mx-auto mt-28 flex flex-col items-center justify-center">
          <h2 class="
            section-title py-8 text-center font-black capitalize text-2xl w-11/12
            md:text-3xl md:w-10/12
            lg:text-4xl
            xl:text-5xl xl:w-9/12
            2xl:w-8/12
          ">{{__("Our Program")}}</h2>
          <p class="
            text-center text-lg mb-8 text-gray-800 w-11/12
            md:text-xl md:w-10/12
            lg:text-2xl
            xl:text-3xl xl:w-9/12
          ">{{__("The following is our program to achieve a prosperous and prosperous society")}}</p>
        </div>
        <div class="flex flex-col items-center lg:flex-row justify-evenly gap-8">
          <div class="content-image flex-1 border-4 border-white shadow-md relative">
            <!-- <img src="{{asset('/fe/img/9.png')}}" alt="" srcset=""> -->
            <img src="http://kopimalabarindonesia.com/wp-content/uploads/2013/05/5.jpg" alt="" srcset="">
            <a href="{{ route('profil', app()->getLocale()) }}" class="image-content absolute bottom-0 p-4">
              <!-- <div class="text-white font-black">{{__("PROFILE")}}</div> -->
              <div class="text-white font-black">LMDH - KTH RAHAYU TANI</div>
              <p class="font-medium text-white">{{__("Realizing forest conservation to achieve a prosperous and prosperous society")}}</p>
            </a>
          </div>
          <div class="content-image flex-1 border-4 border-white shadow-md relative">
            <img src="http://kopimalabarindonesia.com/wp-content/uploads/2013/05/42.jpg" alt="" srcset="">
            <a href="" class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">P4S Rahayu Tani Malabar</div>
              <p class="font-medium text-white">{{__("Educational institutions in agriculture and rural areas")}}</p>
            </a>
          </div>
        </div>
        {{-- info --}}
        <div class="mx-auto bg-gray-100 pt-32 pb-16">
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