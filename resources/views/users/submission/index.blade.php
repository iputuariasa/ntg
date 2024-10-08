@extends('users.layouts.main')

@section('container')
<form class="px-6 pt-20 lg:px-8">
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Pengajuan Kredit</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Mohon untuk pengisian data sesuai dengan KTP calon debitur.</p>
  
        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Petugas</label>
            <div class="mt-2">
              <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
  
          <div class="sm:col-span-3">
            <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Referensi</label>
            <div class="mt-2">
                <select id="country" name="country" autocomplete="country-name" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                    <option>United States</option>
                    <option>Canada</option>
                    <option>Mexico</option>
                  </select>
            </div>
          </div>
  
          <div class="sm:col-span-4">
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Nama Nasabah</label>
            <div class="mt-2">
              <input id="email" name="email" type="text" autocomplete="email" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>

          <div class="col-span-full">
            <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Alamat</label>
            <div class="mt-2">
              <textarea id="about" name="about" rows="3" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>
          </div>

          <div class="sm:col-span-4">
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Plafon Kredit</label>
            <div class="mt-2">
              <input id="email" name="email" type="number" autocomplete="email" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>

          <div class="sm:col-span-4">
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Jangka Waktu (bulan)</label>
            <div class="mt-2">
              <input id="email" name="email" type="number" autocomplete="email" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>

          <div class="col-span-full">
            <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Tujuan Penggunaan</label>
            <div class="mt-2">
              <textarea id="about" name="about" rows="3" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="mt-6 mb-20 flex items-center justify-end gap-x-6">
      <a href="/" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Ajukan</button>
    </div>
  </form>
  
@endsection