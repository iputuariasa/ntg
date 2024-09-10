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
  <div class="">
    <div class="relative" x-data="{ open: false }">
      <header class="fixed inset-x-0 top-0 z-50">
        <nav class="flex items-center justify-between px-6 py-4 lg:px-8" aria-label="Global">
          <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
              <img class="h-8 w-auto" src="assets/images/logo.png" alt="Logo Nusamba Tegallalang">
            </a>
          </div>
          <div class="flex">
            <button type="button" class="w-9 h-9 flex items-center justify-center rounded-md text-gray-700">
              <i class="fa-solid fa-bell text-2xl"></i>
            </button>
            <button type="button" @click="open = ! open" class="w-9 h-9 flex items-center justify-center rounded-md text-gray-700">
              <img src="assets/images/user.png" alt="" class="rounded-full">
            </button>
          </div>
        </nav>
      </header>
  
      {{-- Profile Card --}}
      <div class="fixed top-16 z-50 right-7 bg-gradient-to-r from-sky-300 to-slate-50 shadow-md w-64 h-auto rounded-xl" x-show="open" @click.outside="open = false" x-transition.duration.500ms>
        <div class="w-full h-24 flex justify-center items-center mt-4 flex-col">
          <img src="assets/images/user.png" alt="" class="w-20 rounded-full">
          <span class="font-semibold">Arik Arnawa</span>
        </div>
        <div class="w-full flex justify-center items-center mt-5 mb-5">
          <a href="" class="bg-blue-700 w-1/2 ms-4 me-2 p-1 rounded-md text-white text-center">Profil</a>
          <form action="/logout" method="post" class="w-full text-start">
            @csrf
            <button type="submit" class="bg-red-700 w-1/2 ms-4 me-2 p-1 rounded-md text-white text-center" role="menuitem">
              Keluar
            </button>
          </form>
        </div>
      </div>

      <div class="px-6 pt-20 lg:px-8">
        <h1 class="font-bold">Insentif</h1>
        <h1 class="font-bold text-2xl">Rp5.000.000</h1>
      </div>
    </div>

    {{-- Card --}}
    <div class="relative isolate px-6 mt-6 lg:px-8">
      <div class="relative flex justify-center items-center">
        <div class="balldatabase -me-5 z-10">
          <div class="flex flex-col w-full h-full justify-center items-center">
            <div class="flex flex-col justify-center items-center -mt-3">
              <i class="fa-solid fa-server text-blue-700 text-lg"></i>
              <span class="font-semibold text-md text-slate-600">Permohonan</span>
            </div>
            <span class="text-4xl font-extrabold text-slate-800">5430</span> Juta
          </div>
        </div>
        <div class="ballpoint -ms-5">
          <div class="flex flex-col w-full h-full justify-center items-center">
            <div class="flex flex-col justify-center items-center -mt-3">
              <i class="fa-solid fa-file-powerpoint text-blue-700 text-lg"></i>
              <span class="font-semibold text-md text-slate-600">Debitur</span>
            </div>
            <span class="text-4xl font-extrabold text-slate-800">54</span>Orang
          </div>
        </div>
      </div>
    </div> 

    {{-- Menu --}}
    <div class="relative isolate px-6 mt-10 lg:px-8">
      <div class="p-3 rounded-2xl border-solid border-2 border-slate-200" style="background-color: #1b75bc">
        <div class="flex justify-between">
          <span class="font-semibold text-lg text-white">Menu</span>
          <div>
            <span class="font-semibold text-lg text-white">16-Jun-2024</span>
          </div>
        </div>
        <div style="height: 0.5px" class="w-full bg-slate-300 mt-1 mb-3"></div>
        <div class="flex justify-around">
          <a href="" class="w-16 h-16 flex justify-center items-center">
            <div class="flex flex-col justify-center items-center">
              <i class="fa-solid fa-circle-plus text-3xl text-white"></i>
              <span class="text-sm text-slate-50">Tambah</span>
            </div>
          </a>
          <a href="" class="w-16 h-16 flex justify-center items-center">
            <div class="flex flex-col justify-center items-center">
              <i class="fa-solid fa-paper-plane text-3xl text-white"></i>
              <span class="text-sm text-slate-50">Ajukan</span>
            </div>
          </a>
          <a href="" class="w-16 h-16 flex justify-center items-center">
            <div class="flex flex-col justify-center items-center">
              <i class="fa-solid fa-eye text-3xl text-white"></i>
              <span class="text-sm text-slate-50">Data</span>
            </div>
          </a>
          <a href="" class="w-16 h-16 flex justify-center items-center">
            <div class="flex flex-col justify-center items-center">
              <i class="fa-solid fa-street-view text-3xl text-white"></i>
              <span class="text-sm text-slate-50">Kunjungan</span>
            </div>
          </a>
        </div>
      </div>
    </div>

    {{-- Tampilan Laporan --}}
    <div class="relative isolate px-6 mt-3 lg:px-8">
      <div class="bg-white p-3 rounded-2xl border-solid border-2 border-slate-200">
        <div class="flex justify-between">
          <span class="font-semibold text-lg">Kunjungan</span>
          <div>
            <button class="px-3 rounded-md ring-2 ring-blue-500 hover:bg-blue-500 hover:text-white">
              <span>Bagikan</span>
              <i class="fa-solid fa-share"></i>
            </button>
          </div>
        </div>
        <div style="height: 0.5px" class="w-full bg-slate-300 mt-1 mb-3"></div>
        <div>
          <div class="flex justify-between items-center">
            <div class="flex flex-col">
              <span>I Nyoman Dangin</span>
              <span style="font-size: 12px" class="text-slate-400">3 jam yang lalu</span>
            </div>
            <div>
              <button class="px-3 rounded-md ring-2 ring-slate-400 hover:bg-blue-500 hover:text-white">
                <span>Lihat</span>
              </button>
            </div>
          </div>
          <div style="height: 0.5px" class="w-full bg-slate-100 mt-1 mb-3"></div>
        </div>
        <div>
          <div class="flex justify-between items-center">
            <div class="flex flex-col">
              <span>I Nyoman Dangin</span>
              <span style="font-size: 12px" class="text-slate-400">3 jam yang lalu</span>
            </div>
            <div>
              <button class="px-3 rounded-md ring-2 ring-slate-400 hover:bg-blue-500 hover:text-white">
                <span>Lihat</span>
              </button>
            </div>
          </div>
          <div style="height: 0.5px" class="w-full bg-slate-100 mt-1 mb-3"></div>
        </div>
        <div>
          <div class="flex justify-between items-center">
            <div class="flex flex-col">
              <span>I Nyoman Dangin</span>
              <span style="font-size: 12px" class="text-slate-400">3 jam yang lalu</span>
            </div>
            <div>
              <button class="px-3 rounded-md ring-2 ring-slate-400 hover:bg-blue-500 hover:text-white">
                <span>Lihat</span>
              </button>
            </div>
          </div>
          <div style="height: 0.5px" class="w-full bg-slate-100 mt-1 mb-3"></div>
        </div>
      </div>
    </div>
  
    <div class="relative isolate px-6 pt-7 lg:px-8">
      <div class="mx-auto max-w-2xl">
        <div class="mb-2">
          <span class="text-xl font-semibold">Poster Nusamba</span>
        </div>
        <div class="text-center">
          <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="assets/images/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="assets/images/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="assets/images/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="assets/images/carousel-4.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="assets/images/carousel-5.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white opacity-15 dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white opacity-15 dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
          </div>
        </div>
      </div>
      <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
    </div>
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
