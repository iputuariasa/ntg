<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="assets/images/favicon.png" />
    <title>Kredit NTG</title>
    @vite('resources/css/app.css')
    @vite('public/assets/css/tailwind.css')
    @vite('public/assets/css/style.css')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/525a9b21ee.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
  </head>
  <body>
    <div x-data="setup()" x-init="$refs.loading.classList.add('hidden');" @resize.window="watchScreen()">
      <div class="flex h-screen antialiased text-gray-900 bg-blue-gray-100 dark:bg-dark dark:text-light">
        @include('layouts.nav')
        <div class="flex flex-col flex-1">
          @include('layouts.navmobile')

          <div class="flex flex-1 overflow-auto">
            <!-- Main -->
            <main class="flex items-center justify-center flex-1 px-4">
              @yield('container')
            </main>
          </div>
        </div>
      </div>
      <!-- Panels -->

      <!-- Settings Panel -->
      <!-- Backdrop -->
      <div x-show="isSettingsPanelOpen" class="fixed inset-0 bg-black bg-opacity-50" @click="isSettingsPanelOpen = false" aria-hidden="true"></div>
      <!-- Panel -->
      <section x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" x-show="isSettingsPanelOpen" class="fixed inset-y-0 right-0 w-64 bg-white border-l border-primary-100 rounded-l-3xl">
        <div class="px-4 py-8">
          <h2 class="text-lg font-semibold">Settings</h2>
        </div>
      </section>
    </div>

    <script>
      const setup = () => {
        return {
          isSidebarOpen: false,
          currentSidebarTab: null,
          isSettingsPanelOpen: false,
          isSubHeaderOpen: false,
          watchScreen() {
            if (window.innerWidth <= 1024) {
              this.isSidebarOpen = false
            }
          },
        }
      }

      // Tambahkan event listener untuk semua tombol dengan class "close-alert"
      document.querySelectorAll('.close-alert').forEach(button => {
        button.addEventListener('click', function () {
          const alertBox = this.closest('.alert'); // Mencari elemen dengan class "alert" terdekat
          alertBox.style.display = 'none'; // Sembunyikan alert
        });
      });

      function deleteRow(id) {
        swal({
            title: "Anda Yakin Ingin Menghapus Data Ini?",
            text: "Data yang dihapus tidak dapat dikembalikan",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                document.getElementById('data-' + id).submit();
            } else {
                swal("Data Tidak Jadi Dihapus");
            }
        });
      }
    </script>
  </body>
</html>
