<header class="relative flex items-center justify-between flex-shrink-0 p-4">
    <form action="#" class="flex-1">
      <!--  -->
    </form>
    <div class="items-center hidden ml-4 sm:flex">
      <!-- Settings button -->
      <button @click="isSettingsPanelOpen = true" class="p-2 mr-4 text-gray-400 bg-white rounded-lg shadow-md hover:text-gray-600 focus:outline-none focus:ring focus:ring-white focus:ring-offset-blue-gray-100 focus:ring-offset-4">
        <span class="sr-only">Settings</span>
        <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
      </button>
    </div>

    <!-- Mobile sub header button -->
    <button
      @click="isSubHeaderOpen = !isSubHeaderOpen"
      class="p-2 text-gray-400 bg-white rounded-lg shadow-md sm:hidden hover:text-gray-600 focus:outline-none focus:ring focus:ring-white focus:ring-offset-blue-gray-100 focus:ring-offset-4">
      <span class="sr-only">More</span>
      <i class="fa-solid fa-ellipsis-vertical h-5 w-5 mx-1"></i>
    </button>

    <!-- Mobile sub header -->
    <div x-transition:enter="transform transition-transform" x-transition:enter-start="translate-y-full opacity-0" x-transition:enter-end="translate-y-0 opacity-100" x-transition:leave="transform transition-transform" x-transition:leave-start="translate-y-0 opacity-100" x-transition:leave-end="translate-y-full opacity-0" x-show="isSubHeaderOpen" @click.away="isSubHeaderOpen = false" class="absolute flex items-center justify-between p-2 bg-white rounded-md shadow-lg sm:hidden top-16 left-5 right-5">
      <!-- Panel button -->
      <a href="#" class="p-2 text-gray-400 bg-white rounded-lg shadow-md hover:text-gray-600 focus:outline-none focus:ring focus:ring-white focus:ring-offset-blue-gray-100 focus:ring-offset-4">
        <span class="sr-only">Chart</span>
        <i class="fa-solid fa-chart-line text-xl mx-1" style="padding: 1px"></i>
      </a>
      <!-- Report button -->
      <button
        @click="isSidebarOpen = true; currentSidebarTab = 'reportTab'; isSubHeaderOpen = false"
        class="p-2 text-gray-400 bg-white rounded-lg shadow-md hover:text-gray-600 focus:outline-none focus:ring focus:ring-white focus:ring-offset-blue-gray-100 focus:ring-offset-4">
        <span class="sr-only">Reports</span>
        <i class="fa-solid fa-book-open-reader text-xl mx-1" style="padding: 1px"></i>
      </button>
      <!-- Download button -->
      <button
        @click="isSidebarOpen = true; currentSidebarTab = 'downloadTab'; isSubHeaderOpen = false"
        class="p-2 text-gray-400 bg-white rounded-lg shadow-md hover:text-gray-600 focus:outline-none focus:ring focus:ring-white focus:ring-offset-blue-gray-100 focus:ring-offset-4">
        <span class="sr-only"></span>
        <i class="fa-solid fa-print text-xl mx-1" style="padding: 1px"></i>
      </button>
      <!-- Admin button -->
      <button
        @click="isSidebarOpen = true; currentSidebarTab = 'adminTab'; isSubHeaderOpen = false"
        class="p-2 text-gray-400 bg-white rounded-lg shadow-md hover:text-gray-600 focus:outline-none focus:ring focus:ring-white focus:ring-offset-blue-gray-100 focus:ring-offset-4">
        <span class="sr-only"></span>
        <i class="fa-solid fa-user-tie text-xl mx-1" style="padding: 1px"></i>
      </button>
    </div>
  </header>