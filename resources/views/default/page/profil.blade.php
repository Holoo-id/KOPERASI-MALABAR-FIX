@extends('default.base')
@section('content')
  <div class="default-page -mt-20 pt-20">
    {{-- banner --}}
    @include('default.header')
    <div class="page-section relative">
      {{-- tentang --}}
      <div class="mx-auto flex flex-col items-center">
        <h2 class="
          section-title py-8 text-center font-black capitalize text-2xl my-16
          md:text-3xl
          lg:text-4xl
          xl:text-5xl
        ">{{__('About Us')}}</h2>
        <div class="section-content-wrap flex justify-center mb-28">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row">
            <img src="{{asset('/fe/img/9.png')}}" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12
            ">
            <div class="section-content">
              <p class="py-4 text-gray-800">
                {{__("A cooperatives production that specialized in agribusiness consist of people that cares in Indonesian social economy and plantation and agricultural development, involving people from various professions")}}
              </p>
              <p class="py-4 text-gray-800">
                {{__("West Java Koperasi Mitra Malabar (KMM) was established based on the concern of farmers and villagers. We hope that starting this cooperatives production will make the village's economy and the farmer's prosperity thrive fluently.")}}
              </p>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row-reverse">
            <img src="{{asset('/fe/img/Aset_MitraMalabar_ (6 of 8).jpg')}}" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12
            ">
            <div class="section-content">
              <p class="py-4 text-right text-gray-800">
                {{__("Focused on the enhancement of the added value of plantation and agricultural products to improve the prosperity of our members and also society in general")}}
              </p>
              <p class="py-4 text-right text-gray-800">
                {{__("We develop existing entrepreneurship to match the changes in the business environment without neglecting the spirit of team working and cooperation")}}
              </p>
            </div>
          </div>
        </div>
      </div>
      {{-- visi misi --}}
      <div class="mx-auto flex flex-col items-center">
        <h2 class="
          section-title py-8 text-center font-black capitalize text-2xl mt-24 mb-4
          md:text-3xl
          lg:text-4xl
          xl:text-5xl
        ">{{__("Vision & Mission")}}</h2>
        <p class="
          text-center w-10/12 text-lg text-gray-800
          md:text-xl
          lg:text-2xl
          xl:text-3xl
          ">{{__("To become the biggest cooperatives production network in West Java in 2025, integrate with other parties that also concern with social economy and indonesian prime commodity, and become partnership using the \"philosophy of sharing\" that is fair and environmentally friendly.")}}
        </p>
        <div class="border-1 border-black w-8/12 h-px bg-black my-12"></div>
        <ul class="
          text-left w-10/12 text-lg mb-4 text-gray-800 list-disc px-12
          md:text-xl
          lg:text-2xl
          xl:text-3xl
          ">
          <li>{{__("Improve the prosperity of farmer, food processor, and marketer")}}</li>
          <li>{{__("Uplift excellent local commodities that have added value and are beneficial")}}</li>
          <li>{{__("Integrate upstream, processing, and downstream activities.")}}</li>
          <li>{{__("Give excellent and beneficial products to consumers")}}</li>
          <li>{{__("Grow the spirit of \"cooperating\" to the young generation.")}}</li>
          <li>{{__("Build integrated agroforestry and agro-industry in the upstream, midstream, and downstream drainage basin.")}}</li>
        </ul>
      </div>
      {{-- struktur --}}
      <div class="mx-auto flex flex-col items-center">
        <h2 class="
          section-title py-8 text-center font-black capitalize text-2xl mt-24 mb-4
          md:text-3xl
          lg:text-4xl
          xl:text-5xl
        ">{{__("Organizational Structure")}}</h2>
        <div class="flex flex-wrap flex-row items-center sm:gap-6">
          <div class="content-image2 flex-grow flex-1 border-4 border-white shadow-md relative">
            <img src="https://media.istockphoto.com/vectors/profile-picture-vector-illustration-vector-id587805156?k=20&m=587805156&s=612x612&w=0&h=Ok_jDFC5J1NgH20plEgbQZ46XheiAF8sVUKPvocne6Y=" alt="" srcset="">
            <div class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">{{__("Expert Council")}}</div>
              <p class="font-medium text-white">Drs. Dodi Syaripudin, S.AK, MBA.</p>
            </div>
          </div>
          <div class="content-image2 flex-grow flex-1 border-4 border-white shadow-md relative">
            <img src="https://media.istockphoto.com/vectors/profile-picture-vector-illustration-vector-id587805156?k=20&m=587805156&s=612x612&w=0&h=Ok_jDFC5J1NgH20plEgbQZ46XheiAF8sVUKPvocne6Y=" alt="" srcset="">
            <div class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">{{__("Expert Council")}}</div>
              <p class="font-medium text-white">DR. Sulistyo Rabono</p>
            </div>
          </div>
          <div class="content-image2 flex-grow flex-1 border-4 border-white shadow-md relative">
            <img src="https://media.istockphoto.com/vectors/profile-picture-vector-illustration-vector-id587805156?k=20&m=587805156&s=612x612&w=0&h=Ok_jDFC5J1NgH20plEgbQZ46XheiAF8sVUKPvocne6Y=" alt="" srcset="">
            <div class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">{{__("Expert Council")}}</div>
              <p class="font-medium text-white">Prof. Wisnu Gardjito, M.Sc</p>
            </div>
          </div>
          <div class="content-image2 flex-grow flex-1 border-4 border-white shadow-md relative">
            <img src="https://media.istockphoto.com/vectors/profile-picture-vector-illustration-vector-id587805156?k=20&m=587805156&s=612x612&w=0&h=Ok_jDFC5J1NgH20plEgbQZ46XheiAF8sVUKPvocne6Y=" alt="" srcset="">
            <div class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">{{__("Expert Council")}}</div>
              <p class="font-medium text-white">Ir. Elly Amalia, MP</p>
            </div>
          </div>
          <div class="content-image2 flex-grow flex-1 border-4 border-white shadow-md relative">
            <img src="{{asset('/fe/img/organisasi/Jayagama_Masri.jpg')}}" alt="" srcset="">
            <div class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">{{__("Administrator")}}</div>
              <p class="font-medium text-white">Ketua: Ir. Jayagama ME</p>
            </div>
          </div>
          <div class="content-image2 flex-grow flex-1 border-4 border-white shadow-md relative">
            <img src="{{asset('/fe/img/organisasi/M_Dhanny_R_N_S_Hut.jpg')}}" alt="" srcset="">
            <div class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">{{__("Administrator")}}</div>
              <p class="font-medium text-white">Sekretaris: Dhanny R. N, S.Hut</p>
            </div>
          </div>
          <div class="content-image2 flex-grow flex-1 border-4 border-white shadow-md relative">
            <img src="{{asset('/fe/img/organisasi/Evi_Sri_Mulyati.jpg')}}" alt="" srcset="">
            <div class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">{{__("Administrator")}}</div>
              <p class="font-medium text-white">Bendahara: Evi Sri Mulyati</p>
            </div>
          </div>
          <div class="content-image2 flex-grow flex-1 border-4 border-white shadow-md relative">
            <img src="{{asset('/fe/img/organisasi/Dr_Denie_Heriyadi_Ir_MS.jpg')}}" alt="" srcset="">
            <div class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">{{__("Supervisor")}}</div>
              <p class="font-medium text-white">Dr.Deni Heriyadi Ir. MS (Ketua)</p>
            </div>
          </div>
          <div class="content-image2 flex-grow flex-1 border-4 border-white shadow-md relative">
            <img src="{{asset('/fe/img/organisasi/Drs_Daeng_M_Ma’mur_Thahir.jpg')}}" alt="" srcset="">
            <div class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">{{__("Supervisor")}}</div>
              <p class="font-medium text-white">Drs. Daeng M Ma’mur Thahir</p>
            </div>
          </div>
          <div class="content-image2 flex-grow flex-1 border-4 border-white shadow-md relative">
            <img src="{{asset('/fe/img/organisasi/Ir_Muhammad_Sholeh.jpg')}}" alt="" srcset="">
            <div class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">{{__("Supervisor")}}</div>
              <p class="font-medium text-white">Ir. Muhammad Sholeh</p>
            </div>
          </div>
          <div class="content-image2 flex-grow flex-1 border-4 border-white shadow-md relative">
            <img src="{{asset('/fe/img/organisasi/Robbie_Sartana.jpg')}}" alt="" srcset="">
            <div class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">{{__("Manager")}}</div>
              <p class="font-medium text-white">Kepala Divisi Trading: Robbie Sartana</p>
            </div>
          </div>
          <div class="content-image2 flex-grow flex-1 border-4 border-white shadow-md relative">
            <img src="{{asset('/fe/img/organisasi/Faqih_Asyikin.jpg')}}" alt="" srcset="">
            <div class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">{{__("Manager")}}</div>
              <p class="font-medium text-white">Kepala Divisi Community Dev: Faqih Asyikin</p>
            </div>
          </div>
        </div>
      </div>
      {{-- sejarah --}}
      <div class="mx-auto flex flex-col items-center">
        <h2 class="
          section-title py-8 text-center font-black capitalize text-2xl mt-24
          md:text-3xl
          lg:text-4xl
          xl:text-5xl
        ">{{__("HISTORY")}}</h2>
        <div class="video-content-wrap flex flex-col items-center p-8 mt-36 w-full">
          <div class="
            video-thumbnail border-white w-full
            md:w-9/12
            xl:w-7/12
            2xl:w-6/12
          ">
            <iframe class="w-full h-96" src="https://www.youtube.com/embed/VhE8IKetDD0" controls playsinline></iframe>
          </div>
          <h2 class="
            py-8 text-center font-normal capitalize text-2xl text-white
            md:text-3xl
            lg:text-4xl
            xl:text-5xl
          ">{{__("Kopi Mitra Malabar Video Profile")}}
        </div>
        {{-- lompat --}}
        <div class="section-content-wrap flex justify-center min-w-full my-28">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row">
            <img src="{{asset('/fe/img/lompat/1.jpg')}}" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12 lg:min-h-full
            ">
            <div class="section-content lg:w-7/12">
              <h4 class="text-black font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">{{__("2009 - Starting Point")}}</h4>
              <p class="py-4 text-gray-800">
                {{__("\"There is always wisdom in every event\". In the year 2009, an earthquake happened in Pangalengan, South Bandung.")}}
              </p>
              <p class="py-4 text-gray-800">
                {{__("Haji Jayagama with his community did some post-earthquake recovery activities there.")}}
              </p>
              <p class="py-4 text-gray-800">
                {{__("He met various public figures who have remarkable commitment and passion in revitalizing villages after being badly affected by the earthquake.")}}
              </p>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center min-w-full">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row-reverse">
            <img src="{{asset('/fe/img/lompat/2.jpg')}}" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12 lg:min-h-full
            ">
            <div class="section-content lg:w-7/12">
              <h4 class="text-black text-right font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">{{__("2010-2011 - Uplifting The Village Economy Potention")}}</h4>
              <p class="py-4 text-right text-gray-800">
                {{__("One of the post-earthquake recovery activities relevant to the economic sector was developing public plantations in the Pangalengan region, one of the famous production centers of coffee in West Java.")}}
              </p>
              <p class="py-4 text-right text-gray-800">
                {{__("Two years building the Kopi Malabar, many unexpected things happened. Besides the surprisingly high economic opportunity, it turns out there were lots of knowledge about coffee and its ins and outs that were unknown to farmers and people.")}}
              </p>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center min-w-full my-28">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row">
            <img src="{{asset('/fe/img/lompat/3.jpg')}}" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12 lg:min-h-full
            ">
            <div class="section-content lg:w-7/12">
              <h4 class="text-black font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">{{__("2012 - Establishing the Cooperatives")}}</h4>
              <p class="py-4 text-gray-800">
                {{__("During the two years in uplifting the village economic potential, Kopi Malabar founders agree to establish cooperatives that accommodate Bandung's farmers and coffee processors.")}}
              </p>
              <p class="py-4 text-gray-800">
                {{__("After consulting with many West Java cooperatives figures and the provincial cooperative service, they advised establishing these cooperatives as provincial-level cooperatives. The reason was to accommodate all farmers, processors, and activists in West Java.")}}
              </p>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row-reverse">
            <img src="{{asset('/fe/img/lompat/4.jpg')}}" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12 lg:min-h-full
            ">
            <div class="section-content lg:w-7/12">
              <h4 class="text-black text-right font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">{{__("2012-2013 - The First Leap")}}</h4>
              <p class="py-4 text-right text-gray-800">
                {{__("The excellence and popularity of the Java Preanger Coffee have been a legend in our country since the old days. The excellence and popularity of the Java Preanger Coffee have been a legend in our country since the old days. But not all coffee can be cultivated and processed to become an excellent coffee with the old day's taste.")}}
              </p>
              <p class="py-4 text-right text-gray-800">
                {{__("This fact in the ways of breeding coffee was one of the foundations that the coffee society needs to prepare by empowering resources to stimulate the stakeholders to have concern on the importance of excel seeds in coffee cultivation.")}}
              </p>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center my-28">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row">
            <img src="{{asset('/fe/img/lompat/5.jpg')}}" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12 lg:min-h-full
            ">
            <div class="section-content lg:w-7/12">
              <h4 class="text-black font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">{{__("2013 - Leaping Together")}}</h4>
              <p class="py-4 text-gray-800">
                {{__("We realize that problems in upstream, midstream, and downstream coffee production stages were complex and not just a few. KMM initiate the forming the \"Clearing House Kopi Jawa Barat\" forum (CHK Jabar). This forum was for mediating stakeholders with various professions and jobs, covering from upstream to downstream production. We hoped that this forum would solve the likely-unsolvable dire straits. We also hoped that this forum would give us clear information while also distribute it to all involving parties so that West Java's coffee trading would be well-arranged.")}}
              </p>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row-reverse">
            <img src="{{asset('/fe/img/lompat/6.jpg')}}" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12 lg:min-h-full
            ">
            <div class="section-content lg:w-7/12">
              <h4 class="text-black text-right font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">{{__("2013 - The High-Risk Third Leap")}}</h4>
              <p class="py-4 text-right text-gray-800">
                {{__("The Clearing House Kopi Jawa Barat forum was appointed by the governor of West Java in the same year when West Java society's coffee got an order from Morocco. The trading scheme was built upon fair-trade patterned trading. The partnership concept was disclosing the price from the West Java farmers without concealing it, the same as for Morocco's buyer or importer. This trade was hazardous because the product was not using any letter of credit and would only be paid after it was sold in Morocco.")}}
              </p>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center my-28">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row">
            <img src="{{asset('/fe/img/lompat/7.jpg')}}" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12 lg:min-h-full
            ">
            <div class="section-content lg:w-7/12">
              <h4 class="text-black font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">{{__("2014-2015 - The Fourth Leap")}}</h4>
              <p class="py-4 text-gray-800">
                {{__("We cannot simply separate Nusantara's Coffee Culture from the various local wisdom in Indonesia. KMM with the Ministry of Cooperative and SMEs initiate the market's forum with Indonesian coffee farmers. Our first meeting regarding the topic was at Bandung in late 2003. In 2014, through the Promotion of Excel Products in the Region with SMEs and the Ministry of Cooperative, we opened the Rumah Kopi Nusantara in Jakarta's Taman Mini Indonesia Indah.")}}
              </p>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row-reverse">
            <img src="{{asset('/fe/img/lompat/8.jpg')}}" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12 lg:min-h-full
            ">
            <div class="section-content lg:w-7/12">
              <h4 class="text-black text-right font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">{{__("2016-2017 - The Fifth Leap")}}</h4>
              <p class="py-4 text-right text-gray-800">
                {{__("In early 2016, Koperasi Mitra Malabar Jawa Barat was discussing with farmers and other public figures at Parigi, District Pangandaran, West Java, which is a region that was known to have coconut commodity potential but yet to optimized its potential. And so in November 2016, KMM established of Koperasi Produsen Mitra Kelapa (KPMK) of Pangandaran District. A year later, in October 2017, KMM built an integrated coconut processing factory to increase the added value of coconut.")}}
              </p>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center my-28">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row">
            <img src="{{asset('/fe/img/lompat/9.jpg')}}" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12 lg:min-h-full
            ">
            <div class="section-content lg:w-7/12">
              <h4 class="text-black font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">{{__("2017-2018 - The Sixth Leap")}}</h4>
              <p class="py-4 text-gray-800">
                {{__("We optimized the land around the coconut plantation for cultivating fragrant lemongrass as an alternative source of income for farmers when not harvesting coconut. We optimized the land around the coconut plantation for cultivating fragrant lemongrass as an alternative source of income for farmers when not harvesting coconut. To raise the added value of the leaf of fragrant lemongrass, the leaf will be distilled and turn into essential oil. And then, it will be processed into derivative products like soap or carbolic acid.")}}
              </p>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center mb-28">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row-reverse">
            <img src="{{asset('/fe/img/lompat/10.jpg')}}" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12 lg:min-h-full
            ">
            <div class="section-content lg:w-7/12">
              <h4 class="text-black text-right font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">{{__("2019-2020 - The Seventh Leap")}}</h4>
              <p class="py-4 text-right text-gray-800">
                {{__("The Ministry of Environment & Forestry's Social Forestry Program campaigned in the last four years. To support this Social Forestry Program, KMM gives guidance to several villages and the Lembaga Masyarakat Desa Hutan (LMDH) in West Java. One of the villages was Loa and Drawati in Paseh, Bandung, which has agribusiness potential in coffee and other forest products. The guidance starts from the submission of the Social Forestry Program, enforcement of farmer institutions by making producer cooperatives until the guidance in the coffee processing phase (post-harvest phase).")}}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection