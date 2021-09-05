<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Koperasi Mitra Malabar</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
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
        if($(window).scrollTop() > 50) {
            $(".nav-wrap").removeClass("text-white");
            $(".nav-wrap").addClass("bg-white text-gray-600");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
          $(".nav-wrap").removeClass("bg-white text-gray-600");
          $(".nav-wrap").addClass("text-white");
        }
      });
    });
  </script>
</body>
</html>