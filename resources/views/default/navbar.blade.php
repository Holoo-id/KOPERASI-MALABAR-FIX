<header class="sticky z-50 flex top-0 items-center px-8 w-full justify-between font-medium text-white nav-wrap">
  <a href="{{ route('home', app()->getLocale()) }}" class="">
    <img src="{{ asset('/fe/img/kmm-logo.png') }}" alt="Logo Mitra Malabar" class="logo-image p-4 h-20">
  </a>
  <nav class="
    navbar justify-center px-4 hidden
    lg:flex flex-1
  ">
    <a href="{{ route('home', app()->getLocale()) }}" class="menu-item hover:underline px-4">{{ __('Home') }}</a>
    <a href="{{ route('profil', app()->getLocale()) }}" class="menu-item hover:underline px-4">{{ __('Profile') }}</a>
    <a href="{{ route('articles', app()->getLocale()) }}" class="menu-item hover:underline px-4">{{ __('Article') }}</a>
    <a href="{{ route('home', app()->getLocale()) }}" class="menu-item hover:underline px-4">{{ __('Product') }}</a>
    <a href="{{ route('home', app()->getLocale()) }}" class="menu-item hover:underline px-4">{{ __('Training') }}</a>
    <a href="{{ route('gallery', app()->getLocale()) }}" class="menu-item hover:underline px-4">{{ __('Gallery') }}</a>
    <a href="{{ route('contact', app()->getLocale()) }}" class="menu-item hover:underline px-4">{{ __('Contact') }}</a>
  </nav>
  <div class="lang-switcher px-4">
    <a href="{{ route('home', 'id') }}" class="menu-item hover:underline">ID</a>
    <a href="{{ route('home', 'en') }}" class="menu-item px-4 hover:underline">EN</a>
  </div>
</header>