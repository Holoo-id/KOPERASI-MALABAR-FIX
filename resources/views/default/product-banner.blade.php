<div class="absolute flex flex-col justify-center items-center top-0 w-full bg-gray-900"
  style="
    background: url({{ asset('/fe/img/contents/'.$image->gambar) }}) no-repeat center center fixed;
    height: 465px;
    background-size: cover;
    width: 100%;
    z-index: -1;
    background-color: rgba(0, 0, 0, .5);
    background-blend-mode: darken;
  ">
  <h1 class="
    page-title w-11/12 text-white text-center font-black uppercase text-4xl pt-16
    md:text-5xl
    lg:text-6xl
    xl:text-7xl
  ">{{ $product->judul }}</h1>
  <h3 class="
    page-subtitle w-11/12 text-white text-center font-light text-base capitalize py-4
    md:text-lg
    lg:text-xl
    xl:text-2xl
  ">Di posting tanggal: {{ \Carbon\Carbon::parse($product->tanggal)->format('d-m-Y')}}</h3>
</div>