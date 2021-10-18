<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Koperasi Mitra Malabar</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  @include('default.navbar')
  @yield('content')
  @include('default.footer')

  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
  <script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function changeSlide(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("homeSlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
  </script>
  <script>
    $(function() {
      $(window).on("scroll", function() {
        if($(window).scrollTop() > 64) {
            $(".nav-wrap").addClass("bg-black bg-opacity-50");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
          $(".nav-wrap").removeClass("bg-black bg-opacity-50");
        }
      });
    });
  </script>
  <script>
    var modal = document.querySelector("#mobileMenu");
    var modalOverlay = document.querySelector("#menuOverlay");
    var closeButton = document.querySelector("#closeMenu");
    var openButton = document.querySelector("#openMenu");

    closeButton.addEventListener("click", function() {
      modal.classList.toggle("hidden");
      modalOverlay.classList.toggle("hidden");
    });

    openButton.addEventListener("click", function() {
      modal.classList.toggle("hidden");
      modalOverlay.classList.toggle("hidden");
    });
  </script>
</body>
</html>