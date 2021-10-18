@extends('default.base')
@section('content')
<div class="default-page -mt-20 pt-20">
  {{-- banner --}}
  @include('default.header')
  <div class="page-section relative bg-gray-100">
    {{-- contact form --}}
    <div class="w-9/12 mx-auto flex flex-col items-center justify-center pt-16">
      <div class="flex flex-nowrap md:flex-row flex-col text-center gap-8 mt-16">
        <div class="card-item flex-1 flex flex-col items-center bg-gray-100 p-4">
          <a class="mark px-8 py-6 text-4xl w-min">
            <svg height="128px" viewBox="0 0 128 128" width="128px" xmlns="http://www.w3.org/2000/svg"><g><path d="m77.3 75.72a85.563 85.563 0 0 0 -26.6 0c-16.82 2.71-28.34 10.56-28.34 20.33 0 12.17 17.9 21.36 41.64 21.36s41.64-9.19 41.64-21.36c0-9.77-11.52-17.62-28.34-20.33zm-13.3 31.69c-19.02 0-31.64-6.84-31.64-11.36 0-3.84 9.06-9.33 23.39-10.92a75.85 75.85 0 0 1 16.5 0c14.33 1.59 23.39 7.08 23.39 10.92 0 4.52-12.62 11.36-31.64 11.36z" fill="#ffc244"/><path d="m64 10.59a27.719 27.719 0 0 0 -27.72 27.72c0 7.86 7.31 23.78 14.42 37.41 1.73 3.32 3.45 6.51 5.05 9.41 4.63 8.38 8.25 14.37 8.25 14.37s3.62-5.99 8.25-14.37c1.6-2.9 3.32-6.09 5.05-9.41 7.11-13.63 14.42-29.55 14.42-37.41a27.719 27.719 0 0 0 -27.72-27.72zm0 12.9a10.68 10.68 0 1 1 -10.68 10.68 10.678 10.678 0 0 1 10.68-10.68z" fill="#cf462a"/></g><g><path d="m79.94 74.417c8.971-17.45 13.53-29.6 13.53-36.107a29.474 29.474 0 0 0 -58.791-3.028 1.75 1.75 0 0 0 3.482.356 25.974 25.974 0 0 1 51.809 2.672c0 12.407-19.67 47.062-25.97 57.763-4.585-7.8-9.972-17.5-13.984-25.525a1.75 1.75 0 0 0 -3.131 1.564c.388.777.786 1.536 1.181 2.3-16.76 3.27-27.456 11.619-27.456 21.638 0 13.175 18.654 23.11 43.39 23.11a77.059 77.059 0 0 0 23.012-3.272 1.75 1.75 0 0 0 -1.063-3.335 73.531 73.531 0 0 1 -21.949 3.107c-22.368 0-39.89-8.614-39.89-19.61 0-8.45 10.019-15.6 25.637-18.391q1.572 3 3.246 6.066c-12.741 1.907-22.383 7.122-22.383 12.325 0 6.188 14.28 13.11 33.39 13.11s33.39-6.922 33.39-13.11c0-5.2-9.642-10.418-22.383-12.325 1.119-2.054 2.2-4.081 3.247-6.065 15.616 2.792 25.636 9.94 25.636 18.39 0 5.663-4.45 9.692-8.181 12.075a1.75 1.75 0 1 0 1.883 2.95c6.41-4.092 9.8-9.288 9.8-15.025-.002-10.018-10.692-18.366-27.452-21.633zm13.95 21.633c0 2.935-11.292 9.61-29.89 9.61s-29.89-6.675-29.89-9.61c0-2.23 7.3-7.309 20.687-9.031 4.316 7.769 7.67 13.328 7.705 13.386a1.75 1.75 0 0 0 3 0c.035-.058 3.388-5.617 7.7-13.386 13.386 1.722 20.688 6.801 20.688 9.031z"/><path d="m43.581 62.98a1.75 1.75 0 0 0 1.592-2.474 120.084 120.084 0 0 1 -5.673-14.506 1.75 1.75 0 1 0 -3.356 1 123.181 123.181 0 0 0 5.843 14.951 1.75 1.75 0 0 0 1.594 1.029z"/><path d="m64 46.6a12.43 12.43 0 1 0 -12.43-12.43 12.445 12.445 0 0 0 12.43 12.43zm0-21.36a8.93 8.93 0 1 1 -8.93 8.93 8.94 8.94 0 0 1 8.93-8.93z"/></g></svg>
          </a>
          <div class="card-item-title font-bold text-2xl pb-1">{{__("ADDRESS")}}</div>
          <p class="card-item-text text-gray-600">Jl. Jupiter Utama No.E2/106, Sekejati, Kec. Buahbatu, Kota Bandung, Jawa Barat 40286</p>
        </div>
        <div class="card-item flex-1 bg-gray-100 p-4">
          <a class="mark px-8 py-6 w-min">
            <img src="{{asset('public/fe/img/phone.png')}}" width="128px" height="128px" style="margin: 0 auto">
          </a>
          <div class="card-item-title font-bold text-2xl pb-1">{{__("PHONE")}}</div>
          <p class="card-item-text text-gray-600 flex flex-row justify-around">
            <a href="tel:+62227503856">+62-22 750 38 56</a>
            <a href="tel:+62895389994768">+62895-3899-94768</a>
          </p>
        </div>
        <div class="card-item flex-1 flex flex-col items-center bg-gray-100 p-4">
          <a target="_blank" href="mailto:office@koperasimitramalabar.com" class="mark px-8 py-6 text-4xl w-min">
            <svg id="Capa_1" enable-background="new 0 0 511.981 511.981" height="128" viewBox="0 0 511.981 511.981" width="128px" xmlns="http://www.w3.org/2000/svg"><g><g fill="#bc9bdd"><path d="m198.004 495.412c-12.117 12.117-31.763 12.117-43.88 0s-12.117-31.763 0-43.88l70.321-70.321 43.88 43.88z"/><path d="m143.707 307.607-1.268 1.268-42.918-42.918-70.321 70.322c-12.117 12.117-12.117 31.763 0 43.88 9.878 9.878 24.758 11.698 36.485 5.47l-25.934 25.934c-12.117 12.117-12.117 31.763 0 43.88s31.763 12.117 43.88 0l103.956-103.956z"/><path d="m99.521 265.958-70.321 70.321c-12.117 12.117-12.117 31.763 0 43.88 9.878 9.878 24.758 11.698 36.485 5.47l-25.934 25.934c-12.117 12.117-12.117 31.763 0 43.88s31.763 12.117 43.88 0l103.956-103.956z"/></g><path d="m476.467 224.447-212.195 212.196c-20.511 20.511-53.766 20.511-74.277 0l-102.314-102.313c-20.511-20.511-20.511-53.766 0-74.277l212.196-212.196c20.511-20.511 53.766-20.511 74.277 0l102.313 102.313c20.511 20.511 20.511 53.766 0 74.277z" fill="#eeecff"/><path d="m374.154 47.857c-20.511-20.511-53.766-20.511-74.277 0l-212.196 212.196c-17.537 17.537-20.066 44.383-7.615 64.621h208.369c41.941 0 76.064-34.122 76.064-76.064v-141.675c12.836-11.149 21.798-26.644 24.559-44.174z" fill="#d3d3ff"/><path d="m299.877 47.857-212.196 212.196c-9.615 9.615-14.723 22.031-15.323 34.621h216.076c25.441 0 46.064-20.624 46.064-46.064v-216.076c-12.59.6-25.006 5.708-34.621 15.323z" fill="#7292de"/><path d="m255.145 92.589c13.279 19.554 35.692 32.427 61.058 32.427 6.313 0 12.443-.8 18.295-2.299v-90.183c-12.591.601-25.006 5.708-34.621 15.323z" fill="#4677d4"/><ellipse cx="316.203" cy="51.258" fill="#ff6e80" rx="43.758" ry="43.758" transform="matrix(.707 -.707 .707 .707 56.369 238.603)"/><path d="m188.456 226.34c-2.93-2.929-7.678-2.929-10.607 0s-2.929 7.678 0 10.607l8.485 8.485c2.93 2.929 7.678 2.929 10.607 0s2.929-7.678 0-10.606zm296.837-77.635c-2.666-3.169-7.398-3.576-10.567-.909s-3.576 7.398-.909 10.567c14.896 17.7 13.73 44.398-2.652 60.781l-212.197 212.196c-17.553 17.554-46.117 17.554-63.67 0l-102.313-102.314c-7.255-7.255-11.773-16.77-12.905-26.853h137.298v91.789c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-91.789h56.056c29.535 0 53.564-24.029 53.564-53.564v-56.056h91.789c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-91.789v-82.03c15.054-8.807 25.236-25.061 25.448-43.676 2.471 2.268-5.339-5.374 81.52 81.427 2.93 2.929 7.678 2.929 10.607 0s2.929-7.678 0-10.606l-80.116-80.116c-4.744-4.744-10.172-8.604-16.161-11.515-7.86-18.236-26.007-31.037-47.093-31.037-28.264 0-51.258 22.994-51.258 51.258 0 6.238 1.123 12.217 3.173 17.751l-185.739 185.741c-9.454 9.453-15.413 21.68-17.085 34.828l-41.397 41.398c-15.021 15.022-15.021 39.464 0 54.487 5.788 5.789 12.994 9.426 20.59 10.758l-10.04 10.039c-15.021 15.022-15.021 39.465 0 54.487 8.364 8.364 19.89 12.368 31.61 11.038 4.115-.467 7.073-4.183 6.605-8.298-.467-4.116-4.183-7.068-8.299-6.606-7.174.811-14.213-1.642-19.31-6.74-9.174-9.174-9.174-24.1 0-33.274l25.935-25.934c2.625-2.626 2.935-6.777.727-9.763s-6.268-3.906-9.548-2.164c-9.188 4.879-20.304 3.211-27.664-4.149-9.174-9.174-9.174-24.101 0-33.274l31.669-31.669c2.427 11.155 8.006 21.519 16.205 29.72l53.229 53.229-46.914 46.914c-2.929 2.929-2.929 7.678 0 10.606 2.929 2.929 7.677 2.929 10.607 0l46.914-46.913 22.683 22.683-20.077 20.077c-15.021 15.022-15.021 39.465 0 54.487 15.02 15.02 39.463 15.023 54.488 0l45.111-45.112c7.717-2.915 14.954-7.456 21.155-13.657l212.196-212.196c22.193-22.193 23.385-57.448 3.524-81.047zm-169.09-133.705c19.992 0 36.258 16.265 36.258 36.258s-16.266 36.258-36.258 36.258-36.258-16.266-36.258-36.258c0-19.993 16.266-36.258 36.258-36.258zm-223.218 250.356 182.725-182.726c12.02 15.479 31.78 22.931 51.288 18.732v147.248c0 21.264-17.3 38.564-38.564 38.564h-207.513c1.868-8.211 6.015-15.77 12.064-21.818zm99.717 224.752c-9.175 9.174-24.102 9.173-33.274 0-9.174-9.174-9.174-24.1 0-33.274l20.076-20.076c2.719 1.983 16.074 20.909 43.935 22.612zm53.968-313.514c-4.132.284-7.252 3.865-6.968 7.997.285 4.143-1.231 8.2-4.158 11.127-2.93 2.928-6.983 4.443-11.129 4.159-4.114-.285-7.713 2.837-7.996 6.968-.284 4.133 2.836 7.713 6.969 7.997 8.457.581 16.759-2.515 22.763-8.518 5.995-5.996 9.099-14.293 8.517-22.763-.285-4.131-3.874-7.241-7.998-6.967zm30.1-38.569c-2.928-2.93-7.677-2.929-10.606 0s-2.929 7.678.001 10.606l8.485 8.485c2.927 2.929 7.677 2.929 10.607 0 2.929-2.929 2.929-7.678-.001-10.606z"/></g></svg>
          </a>
          <div class="card-item-title font-bold text-2xl pb-1">{{__("EMAIL")}}</div>
          <p class="card-item-text text-gray-600">office@koperasimitramalabar.com</p>
        </div>
      </div>
    </div>
    <div class="mx-auto flex flex-col items-center justify-center w-full py-16">
      <div class="shadow bg-white w-9/12 flex flex-col-reverse lg:flex-row">
        <div class="flex flex-col p-8 lg:p-16">
          <h3 class="
            text-gray-800 text-center font-light text-2xl capitalize
            md:text-3xl
            lg:text-4xl
            xl:text-5xl
          ">Keep In Touch</h3>
          <form action="#" onsubmit="contactOn()" class="contact-form flex flex-col">
            <input type="text" name="nama" id="nama" placeholder="{{__("Name")}}">
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="tel" name="phone" id="phone" placeholder="{{__("Phone")}}">
            <textarea name="pesan" id="pesan" cols="30" rows="10" placeholder="{{__("Your Message")}}"></textarea>
            <input type="submit" value="{{__("Send")}}" class="primary-button rounded-full mt-8 text-white">
          </form>
        </div>
        <div class="w-full">
          <iframe class="w-full h-full m-0" scrolling="no" src="https://maps.google.com/maps?width=100%25&amp;height=200&amp;hl=en&amp;q=Jl.%20Jupiter%20Utama%20No.E2/106,%20Sekejati,%20Kec.%20Buahbatu,%20Kota%20Bandung,%20Jawa%20Barat%2040286+(Koperasi%20Mitra%20Malabar)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
function contactOn() {
  let nama = document.getElementById("nama").value;
  let email = document.getElementById("email").value;
  let phone = document.getElementById("phone").value;
  let pesan = document.getElementById("pesan").value;
  
  window.location.href = "mailto:office@koperasimitramalabar.com?subject=Saya%20bernama%20"+nama+"%20memiliki%20pesan&body="+pesan;
}
</script>
@endsection