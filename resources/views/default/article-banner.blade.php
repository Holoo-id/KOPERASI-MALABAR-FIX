<div class="absolute flex flex-col justify-center items-center top-0 w-full bg-gray-900"
  style="
    background: url({{ asset('storage/images/contents/'.$article->galeri->gambar) }}) no-repeat center center fixed;
    height: 465px;
    background-size: cover;
    width: 100%;
    z-index: -1;
  ">
  <h1 class="
    page-title w-11/12 text-white text-center font-black uppercase text-4xl
    md:text-5xl
    lg:text-6xl
    xl:text-7xl
  ">{{ $article->judul }}</h1>
  <h3 class="
    page-subtitle w-11/12 text-white text-center font-light text-base capitalize py-4
    md:text-lg
    lg:text-xl
    xl:text-2xl
  ">Di posting tanggal: {{ \Carbon\Carbon::parse($article->tanggal)->format('d-m-Y')}}</h3>
</div>