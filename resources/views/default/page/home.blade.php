@extends('default.base')
@section('content')
    <div class="home-page -mt-20">
      {{-- banner --}}
      <div class="slideshow-container">

        <div class="homeSlides fade">
          <img src="{{ asset('/fe/img/Aset_MitraMalabar_ (2 of 8).jpg') }}">
          <div class="absolute bottom-1/2 text-center w-full text-2xl flex flex-col items-center">
            <h1 class="
              page-title w-11/12 text-white text-center font-black uppercase text-4xl
              md:text-5xl
              lg:text-6xl
              xl:text-7xl
            ">KOPERASI MITRA MALABAR</h1>
            <h3 class="
              page-subtitle w-11/12 text-white text-center font-light text-2xl capitalize
              md:text-3xl
              lg:text-4xl
              xl:text-5xl
            ">{{ __('Agribusiness, Farming, Plantation') }}</h3>
          </div>
        </div>
        <div class="homeSlides fade">
          <img src="{{ asset('/fe/img/Aset_MitraMalabar_ (1 of 8).jpg') }}">
          <div class="absolute bottom-1/2 text-center w-full text-2xl flex flex-col items-center">
            <h1 class="
              page-title w-11/12 text-white text-center font-black uppercase text-4xl
              md:text-5xl
              lg:text-6xl
              xl:text-7xl
            ">KOPERASI MITRA MALABAR</h1>
            <h3 class="
              page-subtitle w-11/12 text-white text-center font-light text-2xl capitalize
              md:text-3xl
              lg:text-4xl
              xl:text-5xl
            ">{{ __('Agribusiness, Farming, Plantation') }}</h3>
          </div>
        </div>
        <div class="homeSlides fade">
          <img src="{{ asset('/fe/img/Aset_MitraMalabar_ (3 of 8).jpg') }}">
          <div class="absolute bottom-1/2 text-center w-full text-2xl flex flex-col items-center">
            <h1 class="
              page-title w-11/12 text-white text-center font-black uppercase text-4xl
              md:text-5xl
              lg:text-6xl
              xl:text-7xl
            ">KOPERASI MITRA MALABAR</h1>
            <h3 class="
              page-subtitle w-11/12 text-white text-center font-light text-2xl capitalize
              md:text-3xl
              lg:text-4xl
              xl:text-5xl
            ">{{ __('Agribusiness, Farming, Plantation') }}</h3>
          </div>
        </div>
        
        <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
        <a class="next" onclick="changeSlide(1)">&#10095;</a>
        
      </div>
        <br>
        
      {{-- <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
      </div> --}}
      <div class="page-section relative">
        {{-- card --}}
        <div class="
          card bg-white p-10 flex text-center shadow w-11/12 flex-col gap-4
          md:w-10/12 md:flex-row
          xl:w-9/12
          2xl:w-8/12
        ">
          <div class="card-item flex-1">
            <div class="mark p-8 bg-blue-100 text-4xl w-min rounded-2xl">1</div>
            <div class="card-item-title font-bold">{{ __('PARTNER') }}</div>
            <p class="card-item-text text-gray-600">{{ __('Based upon the principles of cooperation, We are ready to become partners with various parties') }}</p>
          </div>
          <div class="card-item flex-1">
            <div class="mark p-8 bg-blue-100 text-4xl w-min rounded-2xl">2</div>
            <div class="card-item-title font-bold">{{ __('SHARING') }}</div>
            <p class="card-item-text text-gray-600">{{ __("We are committed to initiate and liven up 'the culture of sharing' to the public") }}</p>
          </div>
          <div class="card-item flex-1">
            <div class="mark p-8 bg-blue-100 text-4xl w-min rounded-2xl">3</div>
            <div class="card-item-title font-bold">{{ __('CARING') }}</div>
            <p class="card-item-text text-gray-600">{{ __('Try to bring prosperity and hapiness to all side') }}</p>
          </div>
        </div>
        {{-- tentang kami --}}
        <div class="mx-auto flex flex-col items-center justify-center">
          <h2 class="
            section-title py-8 text-center font-black capitalize text-2xl mt-16
            md:text-3xl
            lg:text-4xl
            xl:text-5xl
          ">{{__('About Us')}}</h2>
          <p class="
            text-center w-10/12 text-lg mb-4 text-gray-800
            md:text-xl md:w-9/12
            lg:text-2xl
            xl:text-3xl
            2xl:w-7/12
          ">{{__("Koperasi Mitra Malabar is a cooperatives production that has massive potential in supporting the well-being of West Java people's social economy")}}</p>
          <p class="
            text-center w-10/12 mt-4 mb-36 text-gray-800
            md:w-9/12
            2xl:w-7/12
          ">{{__("We develop existing entrepreneurship to match the changes in the business environment without neglecting the spirit of team working and cooperation")}}</p>
          <div class="section-content-wrap flex justify-center">
            <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row">
              <img src="{{ asset('/fe/img/Aset_MitraMalabar_ (2 of 8).jpg') }}" alt="" class="
                border-4 border-white -my-8 flex-1 w-11/12
                lg:w-5/12
              ">
              <div class="section-content">
                {{-- <h4 class="text-black font-black py-4 text-xl
                  md:text-2xl
                  lg:text-3xl
                  xl:text-4xl
                ">2009 - Titik Tolak</h4> --}}
                <p class="py-4 text-gray-800">
                  Jawa Barat merupakan provinsi pertama yang dibentuk sejak masa kolonial 
                  Undang-Undang Nomor 11 tahun 1950, Provinsi Jawa Barat berdiri pada tanggal 4 Juli 1950, saat ditetapkan dan mulai diberlakukan oleh pemerintah. Pusat pemerintahannya berada di 
                  Belanda tahun 1925. Namun demikian, sesuai dengan
                  Bandung.
                </p>
                <p class="py-4 text-gray-800">
                  Dengan luas 
                  35.377,76 kilometer persegi atau sekitar 
                  1,85 persen dari luas daratan Indonesia, Jawa Barat terluas kedua di Pulau Jawa setelah Jawa Timur (47.921 km²). Populasi penduduknya mencapai 49,93 juta jiwa (BPS 2019) dan terbanyak di Indonesia.
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
            text-center text-lg mb-4 text-gray-800 w-11/12
            md:text-xl md:w-10/12
            lg:text-2xl
            xl:text-3xl xl:w-9/12
          ">{{__("Koperasi Mitra Malabar has its finest division units, which is :")}}</p>
          <div class="flex flex-nowrap md:flex-row flex-col text-center gap-8 mt-16 mb-24">
            <div class="card-item flex-1 bg-gray-100 p-4">
              <div class="mark p-8 bg-blue-100 text-4xl w-min rounded-2xl -mt-16">1</div>
              <div class="card-item-title font-bold -mt-4 pb-4">{{__("COFFEE")}}</div>
              {{-- <p class="card-item-text text-gray-600">Koperasi Mitra Malabar siap bermitra dengan berbagai pihak berdasarkan prinsip-prinsip koperasi</p> --}}
            </div>
            <div class="card-item flex-1 bg-gray-100 p-4">
              <div class="mark p-8 bg-blue-100 text-4xl w-min rounded-2xl -mt-16">2</div>
              <div class="card-item-title font-bold -mt-4 pb-4">{{__("ESSENTIAL OIL")}}</div>
              {{-- <p class="card-item-text text-gray-600">Berkomitmen untuk menginisiasi dan menghidupkan budaya berbagi kepada masyarakat</p> --}}
            </div>
            <div class="card-item flex-1 bg-gray-100 p-4">
              <div class="mark p-8 bg-blue-100 text-4xl w-min rounded-2xl -mt-16">3</div>
              <div class="card-item-title font-bold -mt-4 pb-4">{{__("COCONUT")}}</div>
              {{-- <p class="card-item-text text-gray-600">Berusaha menghadirkan kesejahteraan dan kebahagiaan untuk sesama</p> --}}
            </div>
            <div class="card-item flex-1 bg-gray-100 p-4">
              <div class="mark p-8 bg-blue-100 text-4xl w-min rounded-2xl -mt-16">3</div>
              <div class="card-item-title font-bold -mt-4 pb-4">{{__("PREMIUM RICE")}}</div>
              {{-- <p class="card-item-text text-gray-600">Berusaha menghadirkan kesejahteraan dan kebahagiaan untuk sesama</p> --}}
            </div>
          </div>
        </div>
        <div class="flex flex-col items-center lg:flex-row">
          <div class="
            content-image flex-1 border-4 border-white shadow-md w-11/12 relative
            md:w-9/12
            lg:w-1/3
          ">
            <img src="{{asset('/fe/img/9.png')}}" alt="" srcset="">
            <a href="" class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">{{__("PROFILE")}}</div>
              <p class="font-medium text-white">{{__("To know more about us")}}</p>
            </a>
          </div>
          <div class="
            content-image flex-1 border-4 border-white shadow-md w-11/12 relative
            md:w-9/12
            lg:w-1/3
          ">
            <img src="{{asset('/fe/img/10.png')}}" alt="" srcset="">
            <a href="" class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">{{__("TRAINING")}}</div>
              <p class="font-medium text-white">{{__("To join our training in agribusiness")}}</p>
            </a>
          </div>
          <div class="
            content-image flex-1 border-4 border-white shadow-md w-11/12 relative
            md:w-9/12
            lg:w-1/3
          ">
            <img src="{{asset('/fe/img/11.png')}}" alt="" srcset="">
            <a href="" class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">{{__("GALLERY")}}</div>
              <p class="font-medium text-white">{{__("To see the documentations of our programs")}}</p>
            </a>
          </div>
        </div>
        {{-- bergabung --}}
        <div class="video-content-wrap flex flex-col items-center p-8 mt-60">
          <div class="
            video-thumbnail border-white w-full
            md:w-9/12
            xl:w-7/12
            2xl:w-6/12
          ">
            <video class="w-full" src="https://www.youtube.com/watch?v=8kiPjEeTaW4" controls playsinline></video>
          </div>
          <h2 class="
            py-8 text-center font-black capitalize text-2xl text-white
            md:text-3xl
            lg:text-4xl
            xl:text-5xl
          ">{{__("Join Us")}}</h2>
          <p class="text-center text-white">{{__("")}}</p>
          <a href="text-center" class="primary-button rounded-full mt-8">{{__("")}}</a>
        </div>
        {{-- info --}}
        <div class="mx-auto bg-gray-200 py-32">
          <h2 class="
            section-title pb-8 text-center font-black capitalize text-2xl
            md:text-3xl
            lg:text-4xl
            xl:text-5xl
          ">{{__("Latest Information")}}</h2>
          {{-- start articles grid --}}
          <div class="w-11/12 mx-auto grid auto-rows-auto items-center gap-8 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($articles as $article)
              <div class="article-thumbnail shadow-xl bg-white flex flex-col flex-nowrap items-center justify-between rounded-2xl w-full">
                <img class="article-thumbnail-image" src="{{ asset('storage/images/contents/'.$article->galeri->gambar) }}" alt="{{ $article->galeri->gambar }}">
                <div class="flex flex-col p-4 text-gray-800 items-end">
                  <h5 class="w-full text-lg text-left font-bold">{{ $article->judul }}</h5>
                  <p class="w-full text-left text-sm">Dibuat oleh {{ $article->user->name }} pada {{ \Carbon\Carbon::parse($article->tanggal)->format('d F Y')}}</p>
                  <p class="pt-4">{!! Str::limit( html_entity_decode ($article->deskripsi) , 200) !!}</p>
                  <a href="{{ route('article', ['language' => app()->getLocale(), 'link' => $article->id]) }}" class="primary-button text-right w-min rounded-full mt-4">{{__("More..")}}</a>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
@endsection