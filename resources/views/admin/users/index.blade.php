@extends('layouts.main')

@section('container')
    <div class="relative overflow-x-auto shadow-md w-full h-full bg-white rounded-md hidden-scrollbar overflow-auto">
        <div class="pb-4 bg-white p-4 flex justify-between items-center">
            <div>
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mt-1">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="text" id="table-search" class="block py-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for items">
                </div>
            </div>
            <div class="flex">
                <div x-data="{ openModalInsert: false }">
                    <button @click="openModalInsert = true" class="mx-1 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center">
                        <i class="fa-solid fa-square-plus"></i> Tambah Data
                    </button>
                    <!-- Main modal Insert-->
                    <div x-show="openModalInsert" class="fixed inset-0 z-50 flex justify-center items-center w-full max-h-full">
                        <div class="w-full h-full absolute top-0 left-0 bg-black opacity-40"></div>
                        <div class="transparent-scrollbar relative p-4 w-9/12 max-h-full z-50 overflow-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                    <h3 class="text-xl font-semibold text-gray-900">
                                        Tambah Data User
                                    </h3>
                                    <button @click="openModalInsert = false" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 space-y-4">
                                    <form action="/admins/users_store" method="POST">
                                        @csrf
                                        <div>
                                          <div class="border-b border-gray-900/10 pb-12">
                                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                              <div class="sm:col-span-3">
                                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                                                <div class="mt-2">
                                                  <input type="text" name="name" id="name" class="@error('name') is-invalid @enderror px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                  @error('name')
                                                    <div class="invalid-feedback text-start">
                                                        {{ $message }}
                                                    </div>
                                                  @enderror
                                                </div>
                                              </div>
                                      
                                              <div class="sm:col-span-3">
                                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                                                <div class="mt-2">
                                                  <input type="text" name="username" id="username" class="@error('username') is-invalid @enderror px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                  @error('username')
                                                    <div class="invalid-feedback text-start">
                                                        {{ $message }}
                                                    </div>
                                                  @enderror
                                                </div>
                                              </div>
                                      
                                              <div class="col-span-full">
                                                <label for="position" class="block text-sm font-medium leading-6 text-gray-900">Jabatan</label>
                                                <div class="mt-2">
                                                    <input type="text" name="position" id="position" class="@error('position') is-invalid @enderror px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    @error('position')
                                                    <div class="invalid-feedback text-start">
                                                        {{ $message }}
                                                    </div>
                                                  @enderror
                                                </div>
                                              </div>
                                      
                                              <div class="sm:col-span-2 sm:col-start-1">
                                                <label for="branches" class="block text-sm font-medium leading-6 text-gray-900">Cabang</label>
                                                <div class="mt-2">
                                                    <select id="branches" name="branches_id" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                                        @foreach ($branches as $branch)
                                                            <option value="{{ $branch->id }}">{{ $branch->name_branch }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                              </div>
                                      
                                              <div class="sm:col-span-2">
                                                <label for="incentive" class="block text-sm font-medium leading-6 text-gray-900">Jenis Insentif</label>
                                                <div class="mt-2">
                                                    <select id="incentive" name="incentive_id" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                                        @foreach ($incentives as $incentive)
                                                            <option value="{{ $incentive->id }}">{{ $incentive->name_incentive }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                              </div>
                                      
                                              <div class="sm:col-span-2">
                                                <label for="role" class="block text-sm font-medium leading-6 text-gray-900">Role User</label>
                                                <div class="mt-2">
                                                    <select id="role" name="role" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                                        <option value="user">User</option>
                                                        <option value="cs">CS</option>
                                                        <option value="operator">Operator</option>
                                                        <option value="admin">Admin</option>
                                                    </select>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      
                                        <div class="mt-6 flex items-center justify-end gap-x-6">
                                            <button @click="openModalInsert = false" type="button" class="me-2 py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Kembali</button>
                                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                                        </div>
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div x-data="{ openModalImport: false }">
                    <button @click="openModalImport = true" class="mx-1 block text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center">
                        <i class="fa-solid fa-file-import"></i> Import Data
                    </button>
                    <!-- Main modal Insert-->
                    <div x-show="openModalImport" class="fixed inset-0 z-50 flex justify-center items-center w-full max-h-full">
                        <div class="w-full h-full absolute top-0 left-0 bg-black opacity-40"></div>
                        <div class="transparent-scrollbar relative p-4 w-9/12 max-h-full z-50 overflow-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                    <h3 class="text-xl font-semibold text-gray-900">
                                        Tambah Data User
                                    </h3>
                                    <button @click="openModalImport = false" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 space-y-4">
                                    <form action="/admins/users_import" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div>
                                          <div class="border-b border-gray-900/10 pb-12">
                                            <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload file</label>
                                            <input class="p-2 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none" aria-describedby="file_input_help" id="file_input" type="file" name="file">
                                            <p class="mt-3 text-sm text-gray-500" id="file_input_help">Template : <a href="{{ asset('storage/template/template_import_user.xlsx') }}" class="bg-green-600 px-3 text-white rounded-md">download disini!</a></p>
                                          </div>
                                        </div>
                                      
                                        <div class="mt-6 flex items-center justify-end gap-x-6">
                                            <button @click="openModalImport = false" type="button" class="me-2 py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Kembali</button>
                                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                                        </div>
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (session()->has('success'))
            <div class="alert w-1/2 float-end flex items-center p-4 mb-4 text-yellow-800 rounded-lg bg-yellow-50" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    {{ session('success') }}
                </div>
                <button type="button" class="close-alert ms-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex items-center justify-center h-8 w-8" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert w-1/2 float-end flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    {{ session('error') }}
                </div>
                <button type="button" class="close-alert ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
        @endif
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Username
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jabatan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Role
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="bg-white border-b  hover:bg-gray-50">
                        <td td class="px-6 py-4">
                            {{ $loop->iteration }}
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $user->name }}
                        </th>
                        <td td class="px-6 py-4">
                            {{ $user->username }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->position }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->role }}
                        </td>
                        <td class="px-6 py-4 flex">
                            <a href="" class="px-2 py-1 rounded-md bg-orange-300"><i class="fa-solid fa-user-pen text-white"></i></a>
                            <form action="/admins/users_destroy/{{ $user->id }}" method="post" class="d-inline" id="data-{{ $user->id }}">
                                @method('delete')
                                @csrf
                            </form>
                            <button class="ms-2 px-2 py-1 rounded-md bg-red-600" onclick="deleteRow({{ $user->id }})">
                                <i class="fa-solid fa-trash text-white"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        
    </script>

    
    


@endsection