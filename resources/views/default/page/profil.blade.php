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
        ">Tentang Kami</h2>
        <div class="section-content-wrap flex justify-center mb-28">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row">
            <img src="https://wallpapercave.com/wp/wp7303165.jpg" alt="" class="
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
                Sebuah badan usaha koperasi yang bergerak di bidang
                <span class="font-bold">agribisnis</span>, beranggotakan orang-orang yang peduli dengan 
                <span class="font-bold">ekonomi kerakyatan</span> dan 
                <span class="font-bold">pengembangan pertanian-perkebunan</span> Indonesia, terdiri dari berbagai lintas profesi.
              </p>
              <p class="py-4 text-gray-800">
                <span class="font-bold">Koperasi Mitra Malabar (KMM)</span> Jawa Barat berangkat dari kepedulian pada petani dan masyarakat desa. Melalui pendirian Koperasi diharapkan mampu 
                <span class="font-bold">menumbuh-kembangkan</span> perekonomian di desa dan meningkatkan kesejahteraan petani.
              </p>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row-reverse">
            <img src="https://www.xtrafondos.com/en/descargar.php?id=6348&resolucion=3840x2160" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12
            ">
            <div class="section-content">
              {{-- <h4 class="text-black font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">2009 - Titik Tolak</h4> --}}
              <p class="py-4 text-right text-gray-800">
                Fokus pada peningkatan 
                <span class="font-bold">nilai tambah</span> produk-produk hasil 
                <span class="font-bold">pertanian & perkebunan</span> untuk meningkatkan 
                <span class="font-bold">kesejahteraan</span> anggota bersama dengan masyarakat secara umum.
              </p>
              <p class="py-4 text-right text-gray-800">
                Melalui koperasi inilah 
                <span class="font-bold">berwirausaha</span> akan dikembangkan sesuai perubahan lingkungan bisnis, tanpa meninggalkan 
                <span class="font-bold">semangat gotong royong</span> dan semangat berjamaah.
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
        ">Visi & Misi</h2>
        <p class="
          text-center w-10/12 text-lg text-gray-800
          md:text-xl
          lg:text-2xl
          xl:text-3xl
          ">Menjadi 
            <span class="font-bold">jaringan koperasi produksi</span> terbesar di Jawa Barat 
            <span class="font-bold">pada tahun 2025</span>, mampu mengintegrasikan para pihak yang peduli dengan 
            <span class="font-bold">ekonomi kerakyatan</span> dan 
            <span class="font-bold">komoditi unggulan</span> Indonesia, serta bermitra dengan 
            <span class="font-bold">falsafah berbagi</span> yang berkeadilan dan ramah lingkungan.
        </p>
        <div class="border-1 border-black w-8/12 h-px bg-black my-12"></div>
        <ul class="
          text-left w-10/12 text-lg mb-4 text-gray-800 list-disc px-12
          md:text-xl
          lg:text-2xl
          xl:text-3xl
          ">
          <li>Meningkatkan kesejahteraan bersama dengan <span class="font-bold">petani, pengolah & pemasar</span>.</li>
          <li>Mengangkat <span class="font-bold">komoditi lokal</span> yang berkualitas, memiliki nilai tambah dan bermanfaat.</li>
          <li>Mengintegrasikan kegiatan <span class="font-bold">hulu, pengolahan</span> dan <span class="font-bold">kegiatan hilir</span>.</li>
          <li>Memberikan produk yang <span class="font-bold">bermanfaat</span> dan <span class="font-bold">berkualitas</span> pada konsumen.</li>
          <li>Menumbuhkan semangat dan <span class="font-bold">jiwa berkoperasi</span> bagi <span class="font-bold">generasi muda</span>.</li>
          <li>Membangun <span class="font-bold">agroforestry</span> dan <span class="font-bold">agroindustry</span> terpadu di <span class="font-bold">DAS Hulu, Tengah</span> dan <span class="font-bold">Hilir</span>.</li>
        </ul>
      </div>
      {{-- struktur --}}
      <div class="mx-auto flex flex-col items-center">
        <h2 class="
          section-title py-8 text-center font-black capitalize text-2xl mt-24 mb-4
          md:text-3xl
          lg:text-4xl
          xl:text-5xl
        ">Struktur Organisasi</h2>
        <div class="flex flex-wrap flex-row items-center sm:gap-6">
          <div class="content-image2 flex-grow flex-1 border-4 border-white shadow-md relative">
            <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c2lkZSUyMHBvcnRyYWl0fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="" srcset="">
            <div class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">DEWAN PAKAR</div>
              <p class="font-medium text-white">Drs. Dodi Syaripudin, S.AK, MBA.</p>
            </div>
          </div>
          <div class="content-image2 flex-grow flex-1 border-4 border-white shadow-md relative">
            <img src="http://fc05.deviantart.net/fs70/f/2011/070/0/d/katerina2_by_nerysoul-d3bezxd.jpg" alt="" srcset="">
            <div class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">DEWAN PAKAR</div>
              <p class="font-medium text-white">DR. Sulistyo Rabono</p>
            </div>
          </div>
          <div class="content-image2 flex-grow flex-1 border-4 border-white shadow-md relative">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR71_ym1PTYZqW18pZbzxmOMvL3mBSx6lKq9g&usqp=CAU" alt="" srcset="">
            <div class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">DEWAN PAKAR</div>
              <p class="font-medium text-white">Prof. Wisnu Gardjito, M.Sc</p>
            </div>
          </div>
          <div class="content-image2 flex-grow flex-1 border-4 border-white shadow-md relative">
            <img src="https://buffer.com/library/content/images/2020/05/Ash-Read.png" alt="" srcset="">
            <div class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">DEWAN PAKAR</div>
              <p class="font-medium text-white">Ir. Elly Amalia, MP</p>
            </div>
          </div>
          <div class="content-image2 flex-grow flex-1 border-4 border-white shadow-md relative">
            <img src="https://www.adobe.com/express/create/media_141efea30cca217e8cb7fb3abb8ed9d663c29d550.jpeg?width=2000&format=webply&optimize=medium" alt="" srcset="">
            <div class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">PENGURUS</div>
              <p class="font-medium text-white">Ketua: Ir. Jayagama ME</p>
            </div>
          </div>
          <div class="content-image2 flex-grow flex-1 border-4 border-white shadow-md relative">
            <img src="https://d2qp0siotla746.cloudfront.net/img/use-cases/profile-picture/template_1.jpg" alt="" srcset="">
            <div class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">PENGURUS</div>
              <p class="font-medium text-white">Sekretaris: Dhanny R. N, S.Hut</p>
            </div>
          </div>
          <div class="content-image2 flex-grow flex-1 border-4 border-white shadow-md relative">
            <img src="https://media.istockphoto.com/vectors/profile-picture-vector-illustration-vector-id587805156?k=20&m=587805156&s=612x612&w=0&h=Ok_jDFC5J1NgH20plEgbQZ46XheiAF8sVUKPvocne6Y=" alt="" srcset="">
            <div class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">PENGURUS</div>
              <p class="font-medium text-white">Bendahara: Evi Sri Mulyati</p>
            </div>
          </div>
          <div class="content-image2 flex-grow flex-1 border-4 border-white shadow-md relative">
            <img src="https://images.unsplash.com/photo-1542909168-82c3e7fdca5c?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBvcnRyYWl0fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="" srcset="">
            <div class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">PENGAWAS</div>
              <p class="font-medium text-white">Dr.Deni Heriyadi Ir. MS (Ketua)</p>
            </div>
          </div>
          <div class="content-image2 flex-grow flex-1 border-4 border-white shadow-md relative">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQx5miKgDTr7Gyopi7_Wd0-viiy9SvhuL4o5Q&usqp=CAU" alt="" srcset="">
            <div class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">PENGAWAS</div>
              <p class="font-medium text-white">Drs. Daeng M Ma’mur Thahir</p>
            </div>
          </div>
          <div class="content-image2 flex-grow flex-1 border-4 border-white shadow-md relative">
            <img src="https://www.nationalgallery.org.uk/media/33502/n-2082-00-000020-hd.jpg?center=0.3190984578884935,0.65248226950354615&mode=crop&width=350&height=350&rnd=132385865221430000&bgcolor=fff" alt="" srcset="">
            <div class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">PENGAWAS</div>
              <p class="font-medium text-white">Ir. Muhammad Sholeh</p>
            </div>
          </div>
          <div class="content-image2 flex-grow flex-1 border-4 border-white shadow-md relative">
            <img src="https://cdn.idntimes.com/content-images/community/2020/10/lino9-283697ddadbf954d93a7ac66876270be.jpg" alt="" srcset="">
            <div class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">MANAJEMEN</div>
              <p class="font-medium text-white">Kepala Divisi Trading: Robbie Sartana</p>
            </div>
          </div>
          <div class="content-image2 flex-grow flex-1 border-4 border-white shadow-md relative">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFDYWTmPfgdRdqBuJIpKmMxxtvqd8JaffZhQ&usqp=CAU" alt="" srcset="">
            <div class="image-content absolute bottom-0 p-4">
              <div class="text-white font-black">MANAJEMEN</div>
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
        ">SEJARAH</h2>
        <div class="video-content-wrap flex flex-col items-center p-8 mt-36 w-full">
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
          "><span class="font-normal">Video Profile</span> Kopi Mitra Malabar</h2>
        </div>
        {{-- lompat --}}
        <div class="section-content-wrap flex justify-center my-28">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row">
            <img src="https://c4.wallpaperflare.com/wallpaper/410/867/750/vector-forest-sunset-forest-sunset-forest-wallpaper-preview.jpg" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12
            ">
            <div class="section-content">
              <h4 class="text-black font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">2009 - Titik Tolak</h4>
              <p class="py-4 text-gray-800">
                Hikmah dari setiap peristiwa. Tahun 2009 terjadi bencana gempa di 
                <span class="font-bold">Pangalengan, Bandung Selatan</span>.
              </p>
              <p class="py-4 text-gray-800">
                <span class="font-bold">Haji Jayagama</span> bersama dengan komunitasnya, melakukan 
                <span class="font-bold">kegiatan recovery</span> pasca gempa disana.
              </p>
              <p class="py-4 text-gray-800">
                Dipertemukan dengan tokoh-tokoh masyarakat disana yang memiliki 
                <span class="font-bold">komitmen</span> dan 
                <span class="font-bold">semangat</span> yang luar biasa untuk membangun kembali desa-nya yang terdampak bencana gempa bumi.
              </p>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row-reverse">
            <img src="https://c4.wallpaperflare.com/wallpaper/760/955/638/artwork-landscape-sky-mountains-wallpaper-preview.jpg" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12
            ">
            <div class="section-content">
              <h4 class="text-black text-right font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">2010-2011 - Mengangkat Potensi Ekonomi Desa</h4>
              <p class="py-4 text-right text-gray-800">
                Salah satu kegiatan recovery pasca gempa dibidang ekonomi adalah 
                <span class="font-bold">mengembangkan potensi</span> perkebunan rakyat di daerah 
                <span class="font-bold">Pangalengan</span> yang telah terkenal sebagai salah satu 
                <span class="font-bold">sentra produksi kopi</span> Jawa Barat.
              </p>
              <p class="py-4 text-right text-gray-800">
                2 tahun membangun 
                <span class="font-bold">Kopi Malabar</span>, banyak hal yang diluar dugaan, disamping peluang ekonominya yang tinggi, disisi lain banyak 
                <span class="font-bold">‘ilmu’</span> yang tidak diketahui oleh petani dan masyarakat awam tentang kopi dan seluk beluknya.
              </p>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center my-28">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row">
            <img src="https://wallpapershome.com/images/pages/ico_h/21456.jpg" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12
            ">
            <div class="section-content">
              <h4 class="text-black font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">2012 - Mendirikan Koperasi</h4>
              <p class="py-4 text-gray-800">
                Selama 2 tahun mengangkat potensi ekonomi desa, para pendiri 
                <span class="font-bold">Kopi Malabar</span> sepakat mendirikan 
                <span class="font-bold">koperasi</span> yang akan mewadahi petani dan pengolah kopi di Bandung.
              </p>
              <p class="py-4 text-gray-800">
                Hasil konsultasi dengan para 
                <span class="font-bold">tokoh perkoperasian Jawa Barat</span> dan 
                <span class="font-bold">Dinas Koperasi Provinsi</span>, disarankan untuk pendirian koperasi ini setingkat provinsi agar dapat menjadi wadah bagi seluruh 
                <span class="font-bold">petani, prosesor</span> dan 
                <span class="font-bold">penggiat kopi se-Jawa Barat</span>.
              </p>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row-reverse">
            <img src="https://wallpaperaccess.com/full/12887.jpg" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12
            ">
            <div class="section-content">
              <h4 class="text-black text-right font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">2012-2013 - Lompatan Pertama</h4>
              <p class="py-4 text-right text-gray-800">
                Keunggulan dan popularitas kopi 
                <span class="font-bold">Java Preanger</span> didalam negeri sudah lama menjadi “cerita”, tapi tidak semua kopi yang dibudidayakan dan diolah sebagai kopi unggul dengan citarasa seperti jaman dulu.
              </p>
              <p class="py-4 text-right text-gray-800">
                Pemuliaan tanaman kopi inilah salah satu pondasi yang harus disiapkan oleh masyarakat perkopian 
                <span class="font-bold">Jawa Barat</span>, dilakukan dengan swadaya untuk 
                <span class="font-bold">‘menggelitik’</span> para stakeholders agar peduli terhadap pentingnya bibit unggul dalam budidaya kopi.
              </p>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center my-28">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row">
            <img src="https://c4.wallpaperflare.com/wallpaper/826/153/158/artwork-anime-landscape-painting-wallpaper-preview.jpg" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12
            ">
            <div class="section-content">
              <h4 class="text-black font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">2013 - Melompat Bersama</h4>
              <p class="py-4 text-gray-800">
                sadar masalah perkopian di hulu, tengah dan hilir ini tidak sedikit dan kompleks. KMM menginisiasi terbentuknya Forum Clearing House Kopi Jawa Barat (CHK Jabar). Forum yang dimaksudkan untuk media berkumpulnya para stakeholders lintas profesi & tugas, mencakup dari hulu sampai hilir. Forum yang diharapkan mampu mengurai bersama benangkusut yang selama ini tidak ketemu ujung-pangkalnya. Forum yang diharapkan dapat memberikan informasi yang ‘clear’ dan sekaligus mendistribusikan informasi ini ke semua pihak, sehingga perdagangan kopi jawa barat akan tertata dengan baik.
              </p>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row-reverse">
            <img src="https://cdn.dribbble.com/users/234525/screenshots/5853076/eggsacrosstheuniverse.jpg" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12
            ">
            <div class="section-content">
              <h4 class="text-black text-right font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">2013 - Lompatan Ketiga yang Beresiko Tinggi</h4>
              <p class="py-4 text-right text-gray-800">
                forum clearing house kopi jawa barat dilantik oleh gubernur Jawa Barat, pada tahun yang sama kopi rakyat jawa barat memperoleh order dari maroko. Skema perdagangan yang dibangun dengan pola fair-trade (perdagangan yang berkeadilan). Konsep kemitraan yang dibangun adalah harga dari petani jawa barat dibuka apa adanya dan harga jual di maroko akan dibuka apa adanya oleh buyer/importir. Beresiko karena barang dilepas tanpa LC, dibayar setelah laku di maroko.
              </p>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center my-28">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row">
            <img src="https://lh3.googleusercontent.com/proxy/BfZravpTqw6vyz_9fFjwlUxwLMAvEwEXBYy6IK8gGp0-h3aIpZn0-5BbmWCFw6NQaQl5Qtw3tMkAwatTLO-yLMmTyBF2RbK0K9E9DajPAsW0ge_LPTkN_rr-AtIGoI8wTKmCAT1jjuJFezi8" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12
            ">
            <div class="section-content">
              <h4 class="text-black font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">2014-2015 - Lompatan Keempat</h4>
              <p class="py-4 text-gray-800">
                Budaya kopi nusantara tidak dapat dipisahkan dengan ke-arifan lokal yang sangat beragam di bumi Indonesia. KMM bersama dengan Kementerian Koperasi dan UKM menginisiasi forum pemasaran bersama kopi petani Indonesia, pertemuan awal di akhir 2013 dilakukan di Bandung. Tahun 2014 bersama dengan kementerian koperasi dan UKM melalui program promosi produk unggulan daerah, dengan membuka Rumah Kopi Nusantara di Taman Mini Indonesia Indah Jakarta.
              </p>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row-reverse">
            <img src="https://cdn.pixabay.com/photo/2020/03/17/14/59/illustration-4940622_960_720.jpg" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12
            ">
            <div class="section-content">
              <h4 class="text-black text-right font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">2016-2017 - Lompatan Kelima</h4>
              <p class="py-4 text-right text-gray-800">
                Sejak awal tahun 2016, Pengurus Koperasi Mitra Malabar Jawa Barat melakukan diskusi dengan petani dan tokoh masyarakat di kecamatan parigi, kabupaten pangandaran, jawa barat yang memiliki potensi komoditas kelapa tapi belum optimal dalam pengembangan peluangnya, maka pada Nopember tahun 2016 KMM menginisiasi pembentukan Koperasi Produsen Mitra Kelapa (KPMK) Kabupaten Pangandaran. Setahun kemudian di Oktober 2017, KMM mendirikan pabrik pengolahan kelapa terpadu yang bertujuan untuk meningkatkan nilai tambah kelapa.
              </p>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center my-28">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row">
            <img src="https://c4.wallpaperflare.com/wallpaper/531/951/621/digital-digital-art-artwork-illustration-minimalism-hd-wallpaper-preview.jpg" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12
            ">
            <div class="section-content">
              <h4 class="text-black font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">2017-2018 - Lompatan Keenam</h4>
              <p class="py-4 text-gray-800">
                Optimalisasi lahan sekitar kebun kelapa, untuk budidaya sereh wangi. Sebagai alternatif sumber pendapatan petani saat tidak panen kelapa. Untuk meningkatkan nilai tambah daun sereh wangi setelah disuling menjad minyak atsiri (essential oil), diolah menjadi produk-produk turunan sereh wangi, seperti: sabun dan karbol.
              </p>
            </div>
          </div>
        </div>
        <div class="section-content-wrap flex justify-center mb-28">
          <div class="flex items-center flex-col w-11/12 gap-8 lg:flex-row-reverse">
            <img src="https://wallpapercave.com/wp/wp2072884.jpg" alt="" class="
              border-4 border-white -my-8 flex-1 w-11/12
              lg:w-5/12
            ">
            <div class="section-content">
              <h4 class="text-black text-right font-black py-4 text-xl
                md:text-2xl
                lg:text-3xl
                xl:text-4xl
              ">2019-2020 - Lompatan Ketujuh</h4>
              <p class="py-4 text-right text-gray-800">
                Program Perhutanan Sosial Kementerian Lingkungan Hidup & Kehutanan RI sudah dikampanyekan sejak 4 tahun terakhir, dalam rangka mendukung program PS ini KMM memberikan pendampingan ke beberapa desa dan lembaga masyarakat desa hutan (LMDH) di provinsi jawa barat. Salah satunya di desa loa dan drawati, kecamatan paseh, kabupaten bandung, yang memiliki potensi agribisnis kopi dan hasil hutan lainnya. Pendampingan dimulai sejak pengajuan Perhutanan Sosial, kemudian penguatan kelembagaan petani dengan mendirikan koperasi produsen, sampai ke tahapan pendampingan pengolahan kopi (pasca panen).
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection