@extends('cs.layouts.main')

@section('container')
<nav class="navbar navbar-main navbar-expand-lg px-0 shadow-none border-radius-xl w-full flex justify-between" id="navbarBlur" navbar-scroll="true">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5 flex">
          <li class="breadcrumb-item text-sm"><a class="opacity-50 text-dark" href="javascript:;"> Pages</a><span class="px-2">/</span></li>
          <li class="breadcrumb-item text-sm text-dark" aria-current="page">Pengajuan Kredit</li>
        </ol>
        <h6 class="font-bold mb-0">Pengajuan Kredit</h6>
    </nav>
    <div class="">
        <!-- component -->
        <div class='max-w-md mx-auto'>
            <div class="relative flex items-center w-full h-12 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
                <div class="grid place-items-center h-full w-12 text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>

                <input
                class="peer h-full w-full outline-none text-sm text-gray-700 pr-2"
                type="text"
                id="search"
                placeholder="Search something.." /> 
            </div>
        </div>
    </div>
</nav>
<section>
    <!-- component -->
    <div class="flex flex-wrap">
    <div class="w-full max-w-full mx-auto">
        <div class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] bg-white mt-5">
        <div class="relative flex flex-col min-w-0 break-words border border-dashed bg-clip-border rounded-2xl border-stone-200 bg-light/30">
            <!-- card header -->
            <div class="px-9 pt-5 flex justify-between items-stretch flex-wrap min-h-[70px] pb-0 bg-transparent">
            <h3 class="flex flex-col items-start justify-center m-2 ml-0 font-medium text-xl/tight text-dark">
                <span class="mr-3 font-semibold text-dark">Pengajuan Kredit</span>
                {{-- <span class="mt-1 font-medium text-secondary-dark text-lg/normal">All projects from the Loopple team</span> --}}
            </h3>
            </div>
            <!-- end card header -->
            <!-- card body  -->
            <div class="flex-auto block py-8 pt-6 px-9">
            <div class="overflow-x-auto">
                <table class="w-full my-0 align-middle text-dark border-neutral-200">
                <thead class="align-bottom">
                    <tr class="font-semibold text-[0.95rem] text-secondary-dark">
                        <th class="pb-3 text-center min-w-[75px]">PETUGAS</th>
                        <th class="pb-3 text-center min-w-[175px]">DEBITUR</th>
                        <th class="pb-3 text-center min-w-[100px]">TGL PERMOHONAN</th>
                        <th class="pb-3 text-center min-w-[100px]">NOMINAL</th>
                        <th class="pb-3 pr-12 text-center min-w-[50px]">JK</th>
                        <th class="pb-3 pr-12 text-center min-w-[100px]">REFERENSI</th>
                        <th class="pb-3 text-center min-w-[50px]">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-dashed last:border-b-0">
                        <td class="p-3 pl-0 text-center">
                            <span class="font-semibold text-light-inverse text-md/normal">Sari</span>
                        </td>
                        <td class="p-3 pl-0 text-center">
                            <span class="font-semibold text-light-inverse text-md/normal">I Putu Ariasa</span>
                        </td>
                        <td class="p-3 pr-0 text-center">
                            <span class="font-semibold text-light-inverse text-md/normal">2023-08-23</span>
                        </td>
                        <td class="p-3 pr-0 text-center">
                            <span class="font-semibold text-light-inverse text-md/normal">Rp. <span>10000000</span></span>
                        </td>
                        <td class="p-3 pr-12 text-center">
                            <span class="font-semibold text-light-inverse text-md/normal">12</span>
                        </td>
                        <td class="pr-0 text-center">
                            <span class="font-semibold text-light-inverse text-md/normal">I Wayan Suardana</span>
                        </td>
                        <td class="p-3 pr-0 text-center">
                            <div>
                                <button class="px-2 py-1 rounded-md bg-sky-300 hover:bg-sky-600 font-semibold">Preview</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>

    <!-- Main modal -->
    <div x-data="{ openInsert: false }">
        <div x-show="openInsert" class="fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full h-full bg-black bg-opacity-50">
            <div class="relative p-4 w-full max-w-2xl bg-white rounded-lg shadow-lg">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b">
                    <h3 class="text-xl font-semibold text-gray-900">Static modal</h3>
                    <button @click="openInsert = false" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 space-y-4">
                    <p class="text-base leading-relaxed text-gray-500">This is a sample modal content.</p>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 border-t border-gray-200">
                    <button @click="openInsert = false" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">I accept</button>
                    <button @click="openInsert = false" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100">Decline</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Main modal -->
    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Static modal
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                    </p>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="static-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                    <button data-modal-hide="static-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection