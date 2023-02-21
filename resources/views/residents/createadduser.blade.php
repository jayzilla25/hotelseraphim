<x-app>
    @include('partials._officialnav')
    <main class="sm:container mx-5 sm:mx-auto sm:mt-10 pt-20 mb-32">
        <div class="max-w-full mx-auto shadow-lg">
    
            @include('partials._session')
    
            <section class="flex flex-col break-words bg-[url('/images/lightpaperfibers.png')] border-1 rounded-md shadow-lg">
    
                <header class="mb-5 font-semibold bg-sky-600 text-gray-50 py-5 px-6 sm:py-6 sm:px-8 rounded-t-md">
                    Create Resident
                    
                </header>
                @include('partials._addresidentsearch')
                @unless(count($users)==0)
                <div class="sm:px-16 px-1 h-40 overflow-y-auto">
                <div class="grid grid-cols-10 gap-1">
                    @foreach ($users as $user)
                    <div class="col">
                        <input type="number" name="id" id="id"  class="bg-gray-50 border-none text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" value= "{{$user->id}}" >
                    </div>
                    <div class="col-span-4 ">
                        <input type="text" name="fullname" id="fullname"  class="bg-gray-50 border-none text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" value= "{{$user->name}}">
                    </div>
                    <div class="col-span-4">
                        <input type="text" name="fullname" id="fullname"  class="bg-gray-50 border-none text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" value= "{{$user->email}}">
                    </div>
                    <a href="/residents/adduser/{{$user->id}}/createresidenthelper" class="flex items-center justify-center w-full bg-gray-100 rounded-md text-gray-800 hover:bg-gray-300 hover:text-blue-700">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </a>
                    @endforeach
                </div>
            </div>
            @else <p class="text-center text-gray-800 py-10 text-lg">No Households found</p>
            @endunless
                <div class="pt-10 px-5 border-t-8 border-white pb-5 rounded-b-lg bg-gray-100">

                <form action="/residents/{{$resident->id}}/storeuser" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-4 pb-4 sm:grid-cols-2 xl:grid-cols-4 grid-cols-1">
                        <div>
                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 ">Last Name</label>
                            <input type="text" name="last_name" id="last_name"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter Last Name" disabled value={{$resident->last_name}}>
                            @error('last_name')
                                <p class="text-red-500 text-xs mt-2">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">First Name</label>
                            <input type="text" name="first_name" id="first_name"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter First Name" disabled value={{$resident->first_name}}>
                            @error('first_name')
                                <p class="text-red-500 text-xs mt-2">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="middle_name" class="block mb-2 text-sm font-medium text-gray-900">Middle Name</label>
                            <input type="text" name="middle_name" id="middle_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter Middle Name" disabled value={{$resident->middle_name}}>
                            @error('middle_name')
                                <p class="text-red-500 text-xs mt-2">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="suffix" class="block mb-2 text-sm font-medium text-gray-900">Suffix</label>
                            <input type="text" name="suffix" id="suffix" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter Suffix" disabled value={{$resident->suffix}} >
                            @error('suffix')
                                <p class="text-red-500 text-xs mt-2">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900">User Id</label>
                            <input type="number" name="user_id" id="user_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter Household Id" value={{$data['id']}}>
                            @error('user_id')
                                <p class="text-red-500 text-xs mt-2">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">User Name</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter Household Head" disabled value="{{$data['fullname']}}">
                            @error('name')
                                <p class="text-red-500 text-xs mt-2">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="mt-2 text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                            Save User Info
                        </button>
                    </div>
                </form>
            </div>
            </section>
        </div>
    </main>
    @include('partials._residentbackbutton')
    </x-app>