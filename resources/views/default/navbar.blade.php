<header class="nav-wrap flex top-0 bg-transparent items-center px-8 w-full justify-between text-white font-medium">
  <a href="{{ route('home') }}" class="">
    <img src="{{ asset('/fe/img/kmm-logo.png') }}" alt="Logo Mitra Malabar" class="logo-image p-4 h-20">
  </a>
  <nav class="
    navbar justify-center px-4 hidden
    lg:flex flex-1
  ">
    <a href="{{ route('home') }}" class="menu-item hover:underline px-4">Beranda</a>
    <a href="{{ route('profil') }}" class="menu-item hover:underline px-4">Profil</a>
    <a href="{{ route('articles') }}" class="menu-item hover:underline px-4">Artikel</a>
    <a href="{{ route('home') }}" class="menu-item hover:underline px-4">Produk</a>
    <a href="{{ route('home') }}" class="menu-item hover:underline px-4">Pelatihan</a>
    <a href="{{ route('home') }}" class="menu-item hover:underline px-4">Galeri</a>
    <a href="{{ route('contact') }}" class="menu-item hover:underline px-4">Kontak</a>
  </nav>
  <div class="lang-switcher px-4">
    <a href="" class="menu-item hover:underline">ID</a>
    <a href="" class="menu-item px-4 hover:underline">EN</a>
  </div>
</header>