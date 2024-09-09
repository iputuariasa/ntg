<!-- Loading screen -->
<div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-primary-darker">
    Loading.....
  </div>

  <!-- Sidebar -->
  <div class="flex flex-shrink-0 transition-all">
    <div
      x-show="isSidebarOpen"
      @click="isSidebarOpen = false"
      class="fixed inset-0 z-10 bg-black bg-opacity-50 lg:hidden">
    </div>
    <div x-show="isSidebarOpen" class="fixed inset-y-0 z-10 w-16 bg-white"></div>

    <!-- Mobile bottom bar -->
    <nav aria-label="Options" class="fixed inset-x-0 bottom-0 flex flex-row-reverse items-center justify-between px-4 py-2 bg-white border-t sm:hidden shadow-t border-primary-100 rounded-t-3xl">
      <!-- Panel button -->
      <button
        @click="(isSidebarOpen && currentSidebarTab == 'panelTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'panelTab'"
        class="p-2 transition-colors rounded-lg shadow-md hover:bg-primary-darker hover:text-white focus:outline-none focus:ring focus:ring-primary focus:ring-offset-white focus:ring-offset-2" :class="(isSidebarOpen && currentSidebarTab == 'panelTab') ? 'text-white bg-primary' : 'text-gray-500 bg-white'">
        {{-- <span class="sr-only">Toggle sidebar</span> --}}
        <i class="fa-solid fa-sliders text-lg mx-1 "></i>
      </button>

      <!-- Logo -->
      <a href="#">
        <img class="w-10 h-auto" src="/assets/images/logo.png" alt="NTG" />
      </a>

      <!-- User avatar button -->
      <div class="relative flex items-center flex-shrink-0 p-2" x-data="{ isOpen: false }">
        <button
          @click="isOpen = !isOpen; $nextTick(() => {isOpen ? $refs.userMenu.focus() : null})"
          class="transition-opacity rounded-lg opacity-80 hover:opacity-100 focus:outline-none focus:ring focus:ring-primary focus:ring-offset-white focus:ring-offset-2">
          <img class="w-8 h-8 rounded-lg shadow-md" src="/assets/images/user.png" alt="user"/>
          <span class="sr-only">User menu</span>
        </button>
        <div x-show="isOpen" @click.away="isOpen = false" @keydown.escape="isOpen = false" x-ref="userMenu" tabindex="-1" class="absolute w-48 py-1 mt-2 origin-bottom-left bg-white rounded-md shadow-lg left-10 bottom-14 focus:outline-none" role="menu" aria-orientation="vertical" aria-label="user menu">
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Profil</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Pengaturan</a>
          <form action="/logout" method="post" class="w-full text-start">
            @csrf
            <button type="submit" class="text-start w-full block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
              Keluar
            </button>
          </form>
        </div>
      </div>
    </nav>

    <!-- Left mini bar -->
    <nav aria-label="Options" class="z-20 flex-col items-center flex-shrink-0 hidden w-16 py-4 bg-white border-r-2 shadow-md sm:flex rounded-tr-3xl rounded-br-3xl border-primary-100">
      <!-- Logo -->
      <div class="flex-shrink-0 py-4">
        <a href="#">
          <img class="w-10 h-auto" src="/assets/images/logo.png" alt="NTG" />
        </a>
      </div>
      <div class="flex flex-col items-center flex-1 p-2 space-y-4">
        <!-- Chart button -->
        <button class="p-2 transition-colors rounded-lg shadow-md hover:bg-primary-darker hover:text-white focus:outline-none focus:ring focus:ring-primary focus:ring-offset-white focus:ring-offset-2 flex justify-center items-center">
          <span class="sr-only">Toggle sidebar</span>
          <i class="fa-solid fa-chart-line text-xl mx-1" style="padding: 2px"></i>
        </button>

        <!-- Panel button -->
        <button @click="(isSidebarOpen && currentSidebarTab == 'panelTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'panelTab'" class="p-2 transition-colors rounded-lg shadow-md hover:bg-primary-darker hover:text-white focus:outline-none focus:ring focus:ring-primary focus:ring-offset-white focus:ring-offset-2 flex justify-center items-center" :class="(isSidebarOpen && currentSidebarTab == 'panelTab') ? 'text-white bg-primary' : 'text-gray-500 bg-white'">
          <span class="sr-only">Toggle sidebar</span>
          <i class="fa-solid fa-sliders text-xl mx-1" style="padding: 2px"></i>
        </button>

        <!-- Reports button -->
        <button @click="(isSidebarOpen && currentSidebarTab == 'reportTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'reportTab'" class="p-2 transition-colors rounded-lg shadow-md hover:bg-primary-darker hover:text-white focus:outline-none focus:ring focus:ring-primary focus:ring-offset-white focus:ring-offset-2" :class="(isSidebarOpen && currentSidebarTab == 'reportTab') ? 'text-white bg-primary' : 'text-gray-500 bg-white'">
          <span class="sr-only">Toggle message panel</span>
          <i class="fa-solid fa-book-open-reader text-xl mx-1" style="padding: 2px"></i>
        </button>
        <!-- Download button -->
        <button @click="(isSidebarOpen && currentSidebarTab == 'downloadTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'downloadTab'" class="p-2 transition-colors rounded-lg shadow-md hover:bg-primary-darker hover:text-white focus:outline-none focus:ring focus:ring-primary focus:ring-offset-white focus:ring-offset-2" :class="(isSidebarOpen && currentSidebarTab == 'downloadTab') ? 'text-white bg-primary' : 'text-gray-500 bg-white'">
          <span class="sr-only">Toggle notifications panel</span>
          <i class="fa-solid fa-print text-xl mx-1" style="padding: 2px"></i>
        </button>

        <!-- admin button -->
        <button @click="(isSidebarOpen && currentSidebarTab == 'adminTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'adminTab'" class="p-2 transition-colors rounded-lg shadow-md hover:bg-primary-darker hover:text-white focus:outline-none focus:ring focus:ring-primary focus:ring-offset-white focus:ring-offset-2" :class="(isSidebarOpen && currentSidebarTab == 'adminTab') ? 'text-white bg-primary' : 'text-gray-500 bg-white'">
          <span class="sr-only">Toggle message panel</span>
          <i class="fa-solid fa-user-tie text-xl mx-1" style="padding: 2px"></i>
        </button>
      </div>

      <!-- User avatar -->
      <div class="relative flex items-center flex-shrink-0 p-2" x-data="{ isOpen: false }">
        <button @click="isOpen = !isOpen; $nextTick(() => {isOpen ? $refs.userMenu.focus() : null})" class="transition-opacity rounded-lg opacity-80 hover:opacity-100 focus:outline-none focus:ring focus:ring-primary focus:ring-offset-white focus:ring-offset-2">
          <img class="w-10 h-10 rounded-lg shadow-md" src="/assets/images/user.png" alt="Ahmed Kamel"/>
          <span class="sr-only">User menu</span>
        </button>
        <div x-show="isOpen" @click.away="isOpen = false" @keydown.escape="isOpen = false" x-ref="userMenu" tabindex="-1" class="absolute w-48 py-1 mt-2 origin-bottom-left  bg-white rounded-md shadow-lg left-10 bottom-14 focus:outline-none" role="menu" aria-orientation="vertical" aria-label="user menu">
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Profil</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Pengaturan</a>
          <form action="/logout" method="post" class="w-full text-start">
            @csrf
            <button type="submit" class="text-start w-full block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
              Keluar
            </button>
          </form>
          {{-- <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Keluar</a> --}}
        </div>
      </div>
    </nav>

    <div x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-show="isSidebarOpen" class="fixed inset-y-0 left-0 z-10 flex-shrink-0 w-64 bg-white border-r-2 shadow-lg sm:left-16 border-primary-100 rounded-tr-3xl rounded-br-3xl sm:w-72 lg:static lg:w-64">
      <nav x-show="currentSidebarTab == 'panelTab'" aria-label="Main" class="flex flex-col h-full">
        <!-- Logo -->
        <div class="flex items-center justify-center flex-shrink-0 py-10">
          <a href="#">
            <img src="/assets/images/logo.png" alt="" srcset="" width="96" height="53">
          </a>
        </div>

        <div class="flex-1 px-4 space-y-2 overflow-hidden hover:overflow-auto">
          <a href="#" class="flex items-center w-full space-x-2 text-white rounded-lg bg-primary">
            <span aria-hidden="true" class="p-2 rounded-lg bg-primary-dark">
              <i class="fa-solid fa-keyboard text-xl" style="padding: 2px"></i>
            </span>
            <span>Register Kredit</span>
          </a>
          <a href="#"
            class="flex items-center space-x-2 transition-colors rounded-lg group text-primary hover:bg-primary hover:text-white">
            <span aria-hidden="true" class="p-2 transition-colors rounded-lg group-hover:bg-primary-dark group-hover:text-white">
              <i class="fa-solid fa-gears text-xl" style="padding: 2px"></i>
            </span>
            <span>Konfigurasi</span>
          </a>
        </div>
      </nav>

      <section x-show="currentSidebarTab == 'reportTab'" class="flex flex-col h-full">
        <!-- Logo -->
        <div class="flex items-center justify-center flex-shrink-0 pt-10 pb-3">
          <a href="#">
            <img src="/assets/images/logo.png" alt="" srcset="" width="96" height="53">
          </a>
        </div>
        <h2 class="text-xl text-center pb-2">Data Laporan</h2>
        <div class="flex-1 px-4 space-y-2 overflow-hidden hover:overflow-auto">
          <a href="#" class="flex items-center w-full space-x-2 text-white rounded-lg bg-primary">
            <span aria-hidden="true" class="p-2 rounded-lg bg-primary-dark">
              <i class="fa-solid fa-keyboard text-xl w-7" style="padding: 2px"></i>
            </span>
            <span>Laporan Umum</span>
          </a>
          <a href="#"
            class="flex items-center space-x-2 transition-colors rounded-lg group text-primary hover:bg-primary hover:text-white">
            <span aria-hidden="true" class="p-2 transition-colors rounded-lg group-hover:bg-primary-dark group-hover:text-white">
              <i class="fa-solid fa-diagram-project text-xl w-7" style="padding: 2px"></i>
            </span>
            <span>Referensi</span>
          </a>
          <a href="#"
            class="flex items-center space-x-2 transition-colors rounded-lg group text-primary hover:bg-primary hover:text-white">
            <span aria-hidden="true" class="p-2 transition-colors rounded-lg group-hover:bg-primary-dark group-hover:text-white">
              <i class="fa-solid fa-arrow-up-right-dots text-xl w-7" style="padding: 2px"></i>
            </span>
            <span>Perkembangan</span>
          </a>
          <a href="#"
            class="flex items-center space-x-2 transition-colors rounded-lg group text-primary hover:bg-primary hover:text-white">
            <span aria-hidden="true" class="p-2 transition-colors rounded-lg group-hover:bg-primary-dark group-hover:text-white">
              <i class="fa-solid fa-chart-simple text-xl w-7" style="padding: 2px"></i>
            </span>
            <span>Real Pilar</span>
          </a>
          <a href="#"
            class="flex items-center space-x-2 transition-colors rounded-lg group text-primary hover:bg-primary hover:text-white">
            <span aria-hidden="true" class="p-2 transition-colors rounded-lg group-hover:bg-primary-dark group-hover:text-white">
              <i class="fa-solid fa-person-arrow-up-from-line text-xl w-7" style="padding: 2px"></i>
            </span>
            <span>Pencapaian AO</span>
          </a>
          <a href="#"
            class="flex items-center space-x-2 transition-colors rounded-lg group text-primary hover:bg-primary hover:text-white">
            <span aria-hidden="true" class="p-2 transition-colors rounded-lg group-hover:bg-primary-dark group-hover:text-white">
              <i class="fa-solid fa-money-bill-transfer text-xl w-7" style="padding: 2px"></i>
            </span>
            <span>Insentif</span>
          </a>
        </div>
      </section>

      <section x-show="currentSidebarTab == 'downloadTab'" class="px-4 py-6">
        <h2 class="text-xl">Download Data</h2>
      </section>

      <section x-show="currentSidebarTab == 'adminTab'" class="flex flex-col h-full">
        <!-- Logo -->
        <div class="flex items-center justify-center flex-shrink-0 pt-10 pb-3">
          <a href="#">
            <img src="/assets/images/logo.png" alt="" srcset="" width="96" height="53">
          </a>
        </div>
        <h2 class="text-xl text-center pb-2">Admin</h2>
        <div class="flex-1 px-4 space-y-2 overflow-hidden hover:overflow-auto">
          <a href="#" class="flex items-center w-full space-x-2 text-white rounded-lg bg-primary">
            <span aria-hidden="true" class="p-2 rounded-lg bg-primary-dark">
              <i class="fa-solid fa-users-gear text-xl w-7" style="padding: 2px"></i>
            </span>
            <span>Users</span>
          </a>
          <a href="#"
            class="flex items-center space-x-2 transition-colors rounded-lg group text-primary hover:bg-primary hover:text-white">
            <span aria-hidden="true" class="p-2 transition-colors rounded-lg group-hover:bg-primary-dark group-hover:text-white">
              <i class="fa-solid fa-building-user text-xl w-7" style="padding: 2px"></i>
            </span>
            <span>Role</span>
          </a>
        </div>
      </section>
    </div>
  </div>