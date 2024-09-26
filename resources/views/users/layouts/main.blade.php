<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite('public/assets/css/style.css')
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/525a9b21ee.js" crossorigin="anonymous"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <style>
    body {
      /* background: linear-gradient(135deg, #A0DEFF 0%, #A0DEFF 100%); */
      min-height: 100vh;
      margin: 0;
      font-family: sans-serif;
    }
  </style>
</head>
<body>
  {{-- navbar --}}
  <div class="">
    @include('users.layouts.navbar')

    @yield('container')
    <footer>
      <div>
        
      </div>
    </footer>
  </div>  
  <script>
    const navbar = document.querySelector("header");
  
    window.addEventListener("scroll", function(){
        navbar.classList.toggle("bg-white", window.scrollY > 0)
    });

    document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.querySelector('#default-carousel');
    const items = carousel.querySelectorAll('[data-carousel-item]');
    const indicators = carousel.querySelectorAll('[data-carousel-slide-to]');
    const prevButton = carousel.querySelector('[data-carousel-prev]');
    const nextButton = carousel.querySelector('[data-carousel-next]');
    let currentIndex = 0;
    const totalItems = items.length;

    function showItem(index) {
        items.forEach((item, i) => {
            item.classList.toggle('hidden', i !== index);
        });
        indicators.forEach((indicator, i) => {
            indicator.setAttribute('aria-current', i === index);
        });
    }

    function goToNext() {
        currentIndex = (currentIndex + 1) % totalItems;
        showItem(currentIndex);
    }

    function goToPrev() {
        currentIndex = (currentIndex - 1 + totalItems) % totalItems;
        showItem(currentIndex);
    }

    nextButton.addEventListener('click', goToNext);
    prevButton.addEventListener('click', goToPrev);
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentIndex = index;
            showItem(currentIndex);
        });
    });

    // Initial display
    showItem(currentIndex);

    // Optional: Auto slide every 60 seconds
    setInterval(goToNext, 10000);
});

  </script>
</body>
</html>
