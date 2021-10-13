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
            <!-- <img src="{{asset('/fe/img/9.png')}}" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12
            "> -->
            <img src="http://kopimalabarindonesia.com/wp-content/uploads/2013/06/profmal.jpg" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12
            ">
            <div class="section-content">
              <p class="py-4 text-gray-800">
                {{__("Indonesian Malabar Coffee cultivates Luwak with standard maintenance following the Five Animal Husbandry Business Program supported by experts in their fields. Indonesian Malabar Coffee has succeeded in cultivating civets, thus helping the conservation of this type of protected animal.")}}
              </p>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row-reverse">
            <img src="http://kopimalabarindonesia.com/wp-content/uploads/2013/05/pemberdayaan.jpg" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12
            ">
            <div class="section-content">
              <p class="py-4 text-right text-gray-800">
                {{__("Indonesian Malabar Coffee not only produces quality products but also applies a sustainable coffee production system by cultivating and gardening coffee that is environmentally friendly, not clearing forest areas. We are very concerned about the rules of forest conservation by maintaining stands in coffee plantation areas. Coffee plants, characteristically, plants will be able to carry out the ecological function of an area, the roots of coffee plants are able to open soil cavities and continue water to be stored in the soil layer, to withstand the rate of erosion that occurs. Coffee plants are also able to capture carbon emissions circulating in the air.")}}
              </p>
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
        ">{{__("MALABAR COFFEE JOURNEY")}}</h2>
        {{-- JOURNEY --}}
        <div class="section-content-wrap flex justify-center min-w-full my-28">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row">
            <!-- <img src="{{asset('/fe/img/lompat/1.jpg')}}" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12 lg:
            "> -->
            <img src="http://kopimalabarindonesia.com/wp-content/uploads/2013/05/pola1.jpg" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12 lg:
            ">
            <div class="section-content lg:w-7/12">
              <h4 class="text-black font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">2001</h4>
              <p class="py-4 text-gray-800">
                {{__("The Rahayu Farmers Group engaged in horticultural cultivation was inaugurated on 24 September 1992, then on 17 May 2001 based on the results of a member meeting under the leadership of Mr. Supriatna Dinuri, the Rahayu farmer group agreed to only plant one commodity, namely coffee. After switching to coffee plantations, this group shrunk to 7 members, some of the farmers did not want to join until they saw the benefits of coffee. Farmers have not gotten the maximum benefit from the coffee plant because they still sell coffee in the form of cherries.")}}
              </p>
              <p class="py-4 text-gray-800">
                {{__("Over time, with the ups and downs faced by the members and balanced by the better coffee yields, the number of members of the farmer group increased. In 2009, LMDH Rahayu Tani obtained the right to manage the Pangkuan Village Forest from PERHUTANI KPH South Bandung, BKPH Banjaran RPH Logawa covering an area of 60 hectares with a PHBM pattern.")}}
              </p>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center min-w-full">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row-reverse">
            <img src="http://kopimalabarindonesia.com/wp-content/uploads/2013/05/kegiatans1.jpg" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12 lg:
            ">
            <div class="section-content lg:w-7/12">
              <h4 class="text-black text-right font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">2009</h4>
              <p class="py-4 text-right text-gray-800">
                {{__("In 2009, the Pangalengan area experienced an earthquake, Ir. Jayaagama ME held a social service activity in the form of a Mass Kitchen for several days closed with Mass Medicine to at least reduce the burden and increase the motivation of earthquake victims in Margamulya Village, the majority of which are coffee farmers.")}}
              </p>
              <p class="py-4 text-right text-gray-800">
                {{__("This social service activity resulted in an idea, how to improve the welfare of the community, especially coffee farmers considering that coffee is an Indonesian export commodity.")}}
              </p>
              <p class="py-4 text-right text-gray-800">
                {{__('Furthermore, in order to approach the community to explore the existing potential, the Social Service Team implemented a coffee farmer community empowerment program through "caring livestock" activities which were the first step in an effort to help restore the economy of the Coffee Farmer community. The “Livestock Care” activity is a program to provide assistance for cattle, sheep and rabbits to several coffee farmers, the results of these efforts are redistributed to other farmers in need.')}}
              </p>
              <p class="py-4 text-right text-gray-800">
                {{__("This activity is the starting point for the business that was pioneered in the coffee sector, the forerunner of Indonesian Malabar Coffee with the principle of Partnering Sharing Care between Mr. Jayaagama and Mr. Supriatna Dinuri.")}}
              </p>
              <p class="py-4 text-right text-gray-800 font-bold">
                {{__("RAHAYU COFFEE FARMER GROUP AWARD")}}
              </p>
              <ol class="py-4 text-gray-800 list-decimal list-outside">
                <li>
                  {{__("Food Security Award Charter (Vice President of the Republic of Indonesia) – Rahayu Farmers Group")}}
                </li>
                <li>
                  {{__("Certificate of Award for Plantation Post-Harvest Business Actor (Director General of P2HP-Ministry of Agriculture")}}
                </li>
                <li>
                  {{__("Food Security Award in the Field of Processing and Marketing")}}
                </li>
                <li>
                  {{__("Award Charter for Exemplary Farmer Group Leader")}}
                </li>
                <li>
                  {{__("Award Charter for Integrated Pest Management (IPM) West Java Plantation Farmers Group")}}
                </li>
                <li>
                  {{__("Certificate of Quality Improvement of Coffee Plantation")}}
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center min-w-full my-28">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row">
            <img src="http://kopimalabarindonesia.com/wp-content/uploads/2013/05/kantor-desa1.jpg" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12 lg:
            ">
            <div class="section-content lg:w-7/12">
              <h4 class="text-black font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">2010</h4>
              <ol class="text-gray-800 list-decimal list-outside">
                <li class="font-bold pt-4">
                  {{__("ESTABLISHED PT NUGA RAMITRA (COFFEE MALABAR INDONESIA)")}}
                  <p class="font-normal pb-2">{{__("Cooperation Agreement on Plantation Management and Coffee Processing between Indonesian Malabar Coffee and LMDH Rahayu Tani Indonesian Malabar Coffee gets a patent for the MALABAR KOPI Brand from HAKI, September 2010 Construction and renovation of office facilities in Pasir Mulya Village")}}</p>
                </li>
                <li class="font-bold pt-4">
                  {{__("COFFEE LAND DEVELOPMENT")}}
                  <p class="font-normal pb-2">{{__("Revitalization of Abandoned Cultivated Land, New Coffee Garden Planting, Development of Indonesian Malabar Coffee Seedlings")}}</p>
                </li>
                <li class="font-bold pt-4">
                  {{__("DEVELOPMENT OF MALABAR LUWAK COFFEE")}}
                  <p class="font-normal pb-2">{{__("Civet Breeding, Civet Cultivation Development, Development, Civet Cultivation, Treatment Methods, Development of Representative Civet Cage Facilities")}}</p>
                </li>
                <li class="font-bold pt-4">
                  {{__("PARTNERSHIP PROGRAM WITH PERHUTANI")}}
                  <p class="font-normal pb-2">{{__("The achievement achieved by Kopi Malabar Indonesia has improved its image so that Perhutani has provided additional PHBM land from PERHUTANI of 100.00 Ha, bringing the total arable land to 238.50 Ha.")}}</p>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row-reverse">
            <img src="http://kopimalabarindonesia.com/wp-content/uploads/2013/05/roasting.jpg" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12 lg:
            ">
            <div class="section-content lg:w-7/12">
              <h4 class="text-black text-right font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">2011</h4>
              <ol class="text-gray-800 list-decimal list-outside">
                <li class="font-bold pt-4">
                  {{__("IMPROVING THE QUALITY OF INDONESIAN MALABAR COFFEE")}}
                  <ul class="text-gray-800 list-disc list-inside">
                    <li class="font-normal pb-2">{{__("Assistance by Experts from PUM Netherland, Mr. Sipke de Schriffat")}}</li>
                    <li class="font-normal pb-2">{{__("Addition of Coffee Processing Facilities in the form of Factories, Warehouses, and Roasting Machines.")}}</li>
                  </ul>
                </li>
                <li class="font-bold pt-4">
                  {{__("INDONESIA MALABAR COFFEE AWARD")}}
                  <ul class="text-gray-800 list-disc list-inside">
                    <li class="font-normal pb-2">{{__("Puslitkoka Jember : 3 Best National Coffee Flavors")}}</li>
                    <li class="font-normal pb-2">{{__("Puslitkoka Jember: Civet Cage Management is the CLEANEST in Indonesia")}}</li>
                    <li class="font-normal pb-2">{{__("Coffee Seed Certification from BP2MB JABAR.")}}</li>
                    <li class="font-normal pb-2">{{__("Determination as Middle Class P4S.")}}</li>
                  </ul>
                </li>
                <li class="font-bold pt-4">
                  {{__("DEVELOPMENT OF FACILITIES AND INFRASTRUCTURE")}}
                  <p class="font-normal pb-2">{{__("Operational Vehicles, Food Stalls, Downstream Processing Plants, Coffee Warehouses and Sorting Rooms, Malabar Training Building")}}</p>
                </li>
                <li class="font-bold pt-4">
                  {{__("COMMUNITY EMPOWERMENT PROGRAM PLANNING")}}
                  <p class="font-normal pb-2">{{__("Sustainable Development, One Village One Product / OVOP, Amanah Foundation, Malabar Coffee Village")}}</p>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center my-28">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row">
            <img src="http://kopimalabarindonesia.com/wp-content/uploads/2013/05/koperasis.jpg" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12 lg:
            ">
            <div class="section-content lg:w-7/12">
              <h4 class="text-black font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">2012</h4>
              <ol class="text-gray-800 list-decimal list-outside">
                <li class="font-bold pt-4">
                  {{__("ESTABLISHING PARTNERS COOPERATIVES MALABAR JABAR PROVINCE")}}
                  <ul class="text-gray-800 list-disc list-inside">
                    <li class="font-normal pb-2">{{__("Mitra Malabar Cooperative was established based on the Notarial Deed of T. Martin Arifin, SH No 16 (20 June 2012)")}}</li>
                    <li class="font-normal pb-2">{{__("Cooperative Activities: Coffee Trading, Training and Provision of Coffee Plant Production Facilities")}}</li>
                  </ul>
                </li>
                <li class="font-bold pt-4">
                  {{__("NATIONAL ASSESSMENT OF INDONESIAN MALABAR COFFEE")}}
                  <p class="font-normal pb-2">{{__("3 Best Flavors at SCAI Coffee Auction, Expert Team for Compilation of RSKKNI for Civet Coffee Production – Ministry of Agriculture, Head of AKLI (Indonesian Civet Coffee Association) West Java Province, Place for Competency Test for Civet Cultivation AKLI Recommendations, Malabar Training to become P4S Main level")}}</p>
                </li>
                <li class="font-bold pt-4">
                  {{__("DEVELOPMENT OF INDONESIAN MALABAR COFFEE FACILITIES")}}
                  <p class="font-normal pb-2">{{__("Cowshed, Gazebo, Saprotan Warehouse, Mini Café, Cooperative Office")}}</p>
                </li>
                <li class="font-bold pt-4">
                  {{__("PARTNERSHIP PROGRAM WITH PERHUTANI")}}
                  <p class="font-normal pb-2">{{__("Prestasi yang diraih Kopi Malabar Indonesia meningkatkan citra sehingga perhutani memberi tambahan lahan garapan PHBM dari PERHUTANI 100,00 Ha sehingga total lahan garapan menjadi 238.50 Ha.")}}</p>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection