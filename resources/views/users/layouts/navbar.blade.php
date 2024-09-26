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
  </div>