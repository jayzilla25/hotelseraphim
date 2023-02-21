<x-app>
    @include('partials._adminnav')
    <main class="sm:container sm:mx-auto sm:mt-10 sm:pt-20 pt-24 min-h-full mb-12">
        <div class="max-w-xl sm:mx-auto sm:px-6 mx-5">
    
            @include('partials._session')
    
            <section class="flex flex-col break-words bg-[url('/images/lightpaperfibers.png')] border-1 rounded-md shadow-lg">
    
                <header class="font-semibold bg-sky-600 text-gray-50 py-5 px-6 sm:py-6 sm:px-8 rounded-t-md">
                    {{ __('Edit')}} {{$official->role}} {{$official->barangayofficial_name}}
                    
                </header>
                <div class="px-12 sm:pb-5 rounded-b-lg pt-10">
                    <form action="/officials/{{$official->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <div class="mb-5">
                                <label for="resident_id" class="block mb-2 text-sm font-medium text-gray-900 ">Resident Id</label>
                                <input type="number" name="resident_id" id="resident_id"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter Resident Id" value="{{$official->resident_id}}" >
                                @error('resident_id')
                                    <p class="text-red-500 text-xs mt-2">
                                        {{$message}}
                                    </p>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="barangayofficial_name" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                                <input type="text" name="barangayofficial_name" id="barangayofficial_name"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter Name" value="{{$official->barangayofficial_name}}" >
                                @error('barangayofficial_name')
                                    <p class="text-red-500 text-xs mt-2">
                                        {{$message}}
                                    </p>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="role" class="block mb-2 text-sm font-medium text-gray-900 ">Role</label>
                                <select id="role" name="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                    <option value="" {{$official->role == "" ? 'selected' : ''}}></option>
                                    <option value="Chairman" {{$official->role == "Chairman" ? 'selected' : 'Chairman'}}>Chairman</option>
                                    <option value="Kagawad" {{$official->role == "Kagawad" ? 'selected' : 'Kagawad'}}>Kagawad</option>
                                    <option value="Sanguniang Kabataan Chairman" {{$official->role == "Sanguniang Kabataan Chairman" ? 'selected' : 'Sanguniang Kabataan Chairman'}}>SK Chairman</option>
                                    <option value="Secretary" {{$official->role == "Secretary" ? 'selected' : 'Secretary'}}>Secretary</option>
                                    <option value="Treasurer" {{$official->role == "Treasurer" ? 'selected' : 'Treasurer'}}>Treasurer</option>
                                </select>
                                  @error('role')
                                      <p class="text-red-500 text-xs mt-2">
                                          {{$message}}
                                      </p>
                                  @enderror
                              </div>
                            <div class="mb-5">
                                <label for="term_start" class="block mb-2 text-sm font-medium text-gray-900">Start Date</label>
                                <input type="date" name="term_start" id="term_start" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter term_start" value={{$official->term_start}}>
                                @error('term_start')
                                    <p class="text-red-500 text-xs mt-2">
                                        {{$message}}
                                    </p>
                                @enderror
                            </div>
                            <div class="mb-10">
                                <label for="term_end" class="block mb-2 text-sm font-medium text-gray-900">End Date</label>
                                <input type="date" name="term_end" id="term_end" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter term_end" value={{$official->term_end}}>
                                @error('term_end')
                                    <p class="text-red-500 text-xs mt-2">
                                        {{$message}}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="mt-2 sm:mx-0 sm:w-2/5 w-1/2 mb-6 text-white flex items-center justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                            Edit Official
                        </button>
                    </form>
                </div>
            </section>
        </div>
    </main>
    @include('partials._officialsbackbutton')
    </x-app>