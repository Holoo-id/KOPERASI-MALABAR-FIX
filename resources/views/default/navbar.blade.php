<header class="sticky z-50 flex top-0 items-center px-8 w-full justify-between font-medium nav-wrap text-white">
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
  <a href="{{ route('gallery', app()->getLocale()) }}" class="menu-item hover:underline px-4">{{ __('Gallery') }}</a>
  <a href="{{ route('contact', app()->getLocale()) }}" class="menu-item hover:underline px-4">{{ __('Contact') }}</a>
  </nav>
  <div class="hidden lg:block lang-switcher px-4">
    <a href="{{ route(Route::currentRouteName(), ['id', '']) }}" class="menu-item hover:underline">ID</a>
    <a href="{{ route(Route::currentRouteName(), ['en', '']) }}" class="menu-item px-4 hover:underline">EN</a>
  </div>
  <div class="block lg:hidden px-4">
    <button id="openMenu" class="bg-gray-200 text-gray-800 font-black rounded-2xl p-4">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd" />
      </svg>
    </button>
  </div>
</header>

<div id="menuOverlay" class="fixed top-0 left-0 w-full h-full z-50 hidden" style="background: rgba(0, 0, 0, .75)"></div>
<div id="mobileMenu" class="fixed flex flex-col items-end top-0 right-0 w-4/5 h-screen z-50 bg-gray-800 sm:p-8 hidden">
  <button id="closeMenu" class="text-white font-black outline-none px-4 pb-8">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
    </svg>
  </button>
  <div class="flex items-center justify-between w-full">
    <a href="{{ route('home', app()->getLocale()) }}" class="">
      <img src="{{ asset('/fe/img/kmm-logo.png') }}" alt="Logo Mitra Malabar" class="logo-image p-4 h-20">
    </a>
    <div class="text-white">
      <a href="{{ route(Route::currentRouteName(), ['id', '']) }}" class="menu-item hover:underline">ID</a>
      <a href="{{ route(Route::currentRouteName(), ['en', '']) }}" class="menu-item px-4 hover:underline">EN</a>
    </div>
  </div>
  <ul class="flex flex-col text-right text-white">
    <a href="{{ route('home', app()->getLocale()) }}" class="menu-item leading-loose text-xl hover:underline px-4">{{ __('Home') }}</a>
    <a href="{{ route('profil', app()->getLocale()) }}" class="menu-item leading-loose text-xl hover:underline px-4">{{ __('Profile') }}</a>
    <a href="{{ route('articles', app()->getLocale()) }}" class="menu-item leading-loose text-xl hover:underline px-4">{{ __('Article') }}</a>
    <a href="{{ route('gallery', app()->getLocale()) }}" class="menu-item leading-loose text-xl hover:underline px-4">{{ __('Gallery') }}</a>
    <a href="{{ route('contact', app()->getLocale()) }}" class="menu-item leading-loose text-xl hover:underline px-4">{{ __('Contact') }}</a>
  </ul>
</div>