<x-app>
@include('partials._officialnav')
<main class="sm:container mx-5 sm:mx-auto sm:mt-10 pt-20 mb-16">
    <div class="max-w-xl mx-auto shadow-lg">

        @include('partials._session')

        <section class="flex flex-col break-words bg-[url('/images/lightpaperfibers.png')] border-1 rounded-md shadow-lg">

            <header class="mb-5 font-semibold bg-sky-600 text-gray-50 py-5 px-6 sm:py-6 sm:px-8 rounded-t-md">
                Create Household
                
            </header>
            <div class="px-5 mb-5 rounded-b-lg">
            <form action="/households/store" method="POST">
                @csrf
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div class="col-span-2">
                        <label for="household_head" class="block mb-2 text-sm font-medium text-gray-900 ">Household Head</label>
                        <input type="text" name="household_head" id="household_head"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="LastName, FirstName MiddleName Suffix" value={{old('household_head')}}>
                        @error('household_head')
                            <p class="text-red-500 text-xs mt-2">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    <div>
                        <label for="province" class="block mb-2 text-sm font-medium text-gray-900 ">Province</label>
                        <input type="text" name="province" id="province"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter Province" value={{old('province')}}>
                        @error('province')
                            <p class="text-red-500 text-xs mt-2">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    <div>
                        <label for="city" class="block mb-2 text-sm font-medium text-gray-900">City</label>
                        <input type="text" name="city" id="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter City" value={{old('city')}}>
                        @error('city')
                            <p class="text-red-500 text-xs mt-2">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    <div>
                        <label for="barangay" class="block mb-2 text-sm font-medium text-gray-900">Barangay</label>
                        <input type="text" name="barangay" id="barangay" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter Barangay" value={{old('barangay')}}>
                        @error('barangay')
                            <p class="text-red-500 text-xs mt-2">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    <div>
                        <label for="zone_id" class="block mb-2 text-sm font-medium text-gray-900">Zone Id</label>
                        <input type="number" name="zone_id" id="zone_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter Zone Id" value={{old('zone_id')}}>
                        @error('zone_id')
                            <p class="text-red-500 text-xs mt-2">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    <div>
                        <label for="streetaddress" class="block mb-2 text-sm font-medium text-gray-900 ">Street Address</label>
                        <input type="text" name="street_address" id="streetaddress" value="{{old('street_address')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter Street Address..." value={{old('street_address')}}>
                        @error('street_address')
                            <p class="text-red-500 text-xs mt-2">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    <div>
                      <label for="ownership_status" class="block mb-2 text-sm font-medium text-gray-900 ">Ownership Status</label>
                      <select id="ownership_status" name="ownership_status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                          <option value="" {{old('ownership_status') == "" ? 'selected' : ''}}></option>
                          <option value="Owned" {{old('ownership_status') == "Owned" ? 'selected' : ''}}>Owned</option>
                          <option value="Leased" {{old('ownership_status') == "Leased" ? 'selected' : ''}}>Leased</option>
                          <option value="Rented" {{old('ownership_status') == "Rented" ? 'selected' : ''}}>Rented</option>
                      </select>
                        @error('ownership_status')
                            <p class="text-red-500 text-xs mt-2">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    <div>
                      <label for="dwelling_type" class="block mb-2 text-sm font-medium text-gray-900 ">Dwelling Type</label>
                      <select id="dwelling_type" name="dwelling_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                          <option selected="" {{old('dwelling_type') == "" ? 'selected' : ''}}></option>
                          <option value="Concrete" {{old('dwelling_type') == "Concrete" ? 'selected' : ''}}>Concrete</option>
                          <option value="Light Materials" {{old('dwelling_type') == "Light Materials" ? 'selected' : ''}}>Light Materials</option>
                          <option value="Wooden" {{old('dwelling_type') == "Wooden" ? 'selected' : ''}}>Wooden</option>
                      </select>
                      @error('dwelling_type')
                            <p class="text-red-500 text-xs mt-2">
                                {{$message}}
                            </p>
                        @enderror
                  </div>
                  <div>
                    <label for="water_source" class="block mb-2 text-sm font-medium text-gray-900 ">Water Source</label>
                    <select id="water_source" name="water_source" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                        <option selected="" {{old('water_source') == "" ? 'selected' : ''}}></option>
                        <option value="Deep Well" {{old('water_source') == "Deep Well" ? 'selected' : ''}}>Deep Well</option>
                        <option value="Faucet" {{old('water_source') == "Faucet" ? 'selected' : ''}}>Faucet</option>
                        <option value="Open Well" {{old('water_source') == "Open Well" ? 'selected' : ''}}>Open Well</option>
                    </select>
                    @error('water_source')
                            <p class="text-red-500 text-xs mt-2">
                                {{$message}}
                            </p>
                    @enderror
                  </div>
                  <div>
                    <label for="lighting_source" class="block mb-2 text-sm font-medium text-gray-900 ">Lighting Source</label>
                    <select id="lighting_source" name="lighting_source" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                        <option selected="" {{old('lighting_source') == "" ? 'selected' : ''}}></option>
                        <option value="Electric" {{old('lighting_source') == "Electric" ? 'selected' : ''}}>Electric</option>
                        <option value="Solar Powered" {{old('lighting_source') == "Solar Powered" ? 'selected' : ''}}>Solar Powered</option>
                        <option value="Fuel Lamp" {{old('lighting_source') == "Fuel Lamp" ? 'selected' : ''}}>Fuel Lamp</option>
                    </select>
                    @error('lighting_source')
                            <p class="text-red-500 text-xs mt-2">
                                {{$message}}
                            </p>
                    @enderror
                  </div>
                  <div>
                    <label for="toilet_type" class="block mb-2 text-sm font-medium text-gray-900 ">Toilet Type</label>
                    <select id="toilet_type" name="toilet_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                        <option selected="" {{old('toilet_type') == "" ? 'selected' : ''}}></option>
                        <option value="Water Sealed" {{old('toilet_type') == "Water Sealed" ? 'selected' : ''}}>Water Sealed</option>
                        <option value="Open Pit" {{old('toilet_type') == "Open Pit" ? 'selected' : ''}}>Open Pit</option>
                        <option value="Closed Pit" {{old('toilet_type') == "Closed Pit" ? 'selected' : ''}}>Closed Pit</option>
                    </select>
                    @error('toilet_type')
                            <p class="text-red-500 text-xs mt-2">
                                {{$message}}
                            </p>
                    @enderror
                  </div>
                </div>
                <button type="submit" class="mt-2 text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Create Household
                </button>
            </form>
        </div>
        </section>
    </div>
</main>
@include('partials._householdsbackbutton')
</x-app>