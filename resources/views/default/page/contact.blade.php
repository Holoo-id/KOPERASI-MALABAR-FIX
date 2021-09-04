@extends('default.base')
@section('content')
<div class="default-page -mt-20 pt-20">
  {{-- banner --}}
  @include('default.header')
  <div class="page-section relative bg-gray-100">
    {{-- contact form --}}
    <div class="mx-auto flex flex-col items-center justify-center w-full py-16">
      <div class="shadow bg-white w-9/12 flex flex-col-reverse lg:flex-row">
        <div class="flex flex-col p-8 lg:p-16">
          <h3 class="
            text-gray-800 text-center font-light text-2xl capitalize
            md:text-3xl
            lg:text-4xl
            xl:text-5xl
          ">Keep In Touch</h3>
          <form action="" method="post" class="contact-form flex flex-col">
            <input type="text" name="nama" id="" placeholder="Nama">
            <input type="email" name="email" id="" placeholder="Email">
            <input type="tel" name="phone" id="" placeholder="Telepon">
            <textarea name="pesan" id="" cols="30" rows="10" placeholder="Pesan Anda"></textarea>
            <input type="submit" value="Kirim" class="primary-button rounded-full mt-8 text-white">
          </form>
        </div>
        <div class="w-full">
          <iframe class="w-full h-full m-0" scrolling="no" src="https://maps.google.com/maps?width=100%25&amp;height=200&amp;hl=en&amp;q=Jl.%20Jupiter%20Utama%20No.E2/106,%20Sekejati,%20Kec.%20Buahbatu,%20Kota%20Bandung,%20Jawa%20Barat%2040286+(Koperasi%20Mitra%20Malabar)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection