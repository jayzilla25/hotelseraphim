<x-app>
    @include('partials._officialnav')
    <main class="sm:container mx-5 sm:mx-auto sm:mt-10 pt-20 mb-32">
        <div class="max-w-full mx-auto shadow-lg">
    
            @include('partials._session')
    
            <section class="flex flex-col break-words bg-[url('/images/lightpaperfibers.png')] border-1 rounded-md shadow-lg">
    
                <header class="mb-5 font-semibold bg-sky-600 text-gray-50 py-5 px-6 sm:py-6 sm:px-8 rounded-t-md">
                    Create Resident
                    
                </header>
                <div class="px-5 mb-5 rounded-b-lg">
                <form action="/residents/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-4 mb-4 sm:grid-cols-2 xl:grid-cols-4 grid-cols-1">
                        <div x-data="{photoName: null, photoPreview: null}" class="sm:col-span-2 xl:col-span-4 xl:ml-10 xl:mb-2">
                            <!-- Photo File Input -->
                            <input name="avatar" type="file" class="hidden" x-ref="photo" x-on:change="
                                                photoName = $refs.photo.files[0].name;
                                                const reader = new FileReader();
                                                reader.onload = (e) => {
                                                    photoPreview = e.target.result;
                                                };
                                                reader.readAsDataURL($refs.photo.files[0]);
                            ">
                        

                            
                            <div class="flex items-center">
                                <!-- Current Profile Photo -->
                                <div class="mt-2" x-show="! photoPreview">
                                    <img src="https://images.unsplash.com/photo-1531316282956-d38457be0993?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80" class="w-20 h-20 m-auto rounded-full shadow">
                                </div>
                                <!-- New Profile Photo Preview -->
                                <div class="mt-2" x-show="photoPreview" style="display: none;">
                                    <span class="block w-20 h-20 rounded-full m-auto shadow" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
                                    </span>
                                </div>
                                <div class="">
                                    <label class="text-base font-medium text-gray-900 px-4 block" for="photo">
                                        Resident Photo <span class="text-red-600"> </span>
                                    </label>
                                    <button type="button" class="px-1 font-light text-xs text-gray-500 tracking-widest hover:text-blue-500 border-0 rounded-md focus:ring-1 focus:ring-blue-500 focus:outline-none active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-1 ml-3" x-on:click.prevent="$refs.photo.click()">
                                        Select New Photo
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 ">Last Name</label>
                            <input type="text" name="last_name" id="last_name"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter Last Name" value={{old('last_name')}}>
                            @error('last_name')
                                <p class="text-red-500 text-xs mt-2">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">First Name</label>
                            <input type="text" name="first_name" id="first_name"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter First Name" value={{old('first_name')}}>
                            @error('first_name')
                                <p class="text-red-500 text-xs mt-2">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="middle_name" class="block mb-2 text-sm font-medium text-gray-900">Middle Name</label>
                            <input type="text" name="middle_name" id="middle_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter Middle Name" value={{old('middle_name')}}>
                            @error('middle_name')
                                <p class="text-red-500 text-xs mt-2">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="suffix" class="block mb-2 text-sm font-medium text-gray-900">Suffix</label>
                            <input type="text" name="suffix" id="suffix" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter Suffix" value={{old('suffix')}}>
                            @error('suffix')
                                <p class="text-red-500 text-xs mt-2">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="b_date" class="block mb-2 text-sm font-medium text-gray-900">Birthday</label>
                            <input type="date" name="b_date" id="b_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter Birthday" value={{old('b_date')}}>
                            @error('b_date')
                                <p class="text-red-500 text-xs mt-2">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="birthplace" class="block mb-2 text-sm font-medium text-gray-900 ">Birthplace</label>
                            <input type="text" name="b_place" id="birthplace" value="{{old('b_place')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter Birthplace..." value={{old('b_place')}}>
                            @error('b_place')
                                <p class="text-red-500 text-xs mt-2">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 ">Gender</label>
                            <select id="gender" name="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                <option value="" {{old('gender') == "" ? 'selected' : ''}}></option>
                                <option value="Male" {{old('gender') == "Male" ? 'selected' : 'Male'}}>Male</option>
                                <option value="Female" {{old('gender') == "Female" ? 'selected' : 'Female'}}>Female</option>
                            </select>
                              @error('gender')
                                  <p class="text-red-500 text-xs mt-2">
                                      {{$message}}
                                  </p>
                              @enderror
                          </div>
                        <div>
                            <label for="civil_status" class="block mb-2 text-sm font-medium text-gray-900 ">Civil Status</label>
                            <select id="civil_status" name="civil_status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                <option value="" {{old('civil_status') == "" ? 'selected' : ''}}></option>
                                <option value="Single" {{old('civil_status') == "Single" ? 'selected' : 'Single'}}>Single</option>
                                <option value="Married" {{old('civil_status') == "Married" ? 'selected' : 'Married'}}>Married</option>
                                <option value="Separated" {{old('civil_status') == "Separated" ? 'selected' : 'Separated'}}>Separated</option>
                                <option value="Widowed" {{old('civil_status') == "Widowed" ? 'selected' : 'Widowed'}}>Widowed</option>
                            </select>
                              @error('civil_status')
                                  <p class="text-red-500 text-xs mt-2">
                                      {{$message}}
                                  </p>
                              @enderror
                        </div>
                        <div>
                            <label for="religion" class="block mb-2 text-sm font-medium text-gray-900 ">Religion</label>
                            <input type="text" name="religion" id="religion" value="{{old('religion')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter Religion..." value={{old('religion')}}>
                            @error('religion')
                            <p class="text-red-500 text-xs mt-2">
                                {{$message}}
                            </p>
                            @enderror
                        </div>
                        <div>
                            <label for="nationality" class="block mb-2 text-sm font-medium text-gray-900 ">Nationality</label>
                            <input type="text" name="nationality" id="nationality" value="{{old('nationality')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter nationality..." value={{old('nationality')}}>
                            @error('nationality')
                                <p class="text-red-500 text-xs mt-2">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="citizenship" class="block mb-2 text-sm font-medium text-gray-900 ">Citizenship</label>
                            <input type="text" name="citizenship" id="citizenship" value="{{old('citizenship')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter Citizenship..." value={{old('citizenship')}}>
                            @error('citizenship')
                                <p class="text-red-500 text-xs mt-2">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="educational_attainment" class="block mb-2 text-sm font-medium text-gray-900 ">Educational Attainment</label>
                            <select id="educational_attainment" name="educational_attainment" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                <option value="" {{old('educational_attainment') == "" ? 'selected' : ''}}></option>
                                <option value="Doctor" {{old('educational_attainment') == "Doctor" ? 'selected' : 'Doctor'}}>Doctor</option>
                                <option value="Master" {{old('educational_attainment') == "Master" ? 'selected' : 'Master'}}>Master</option>
                                <option value="College Graduate" {{old('educational_attainment') == "College Graduate" ? 'selected' : 'College Graduate'}}>College Graduate</option>
                                <option value="College Undergrad" {{old('educational_attainment') == "College Undergrad" ? 'selected' : 'College Undergrad'}}>College Undergrad</option>
                                <option value="HS Graduate" {{old('educational_attainment') == "HS Graduate" ? 'selected' : 'HS Graduate'}}>HS Graduate</option>
                                <option value="ES Graduate" {{old('educational_attainment') == "ES Graduate" ? 'selected' : 'ES Graduate'}}>ES Graduate</option>
                                <option value="ES Undergrad" {{old('educational_attainment') == "ES Undergrad" ? 'selected' : 'ES Undergrad'}}>ES Undergrad</option>
                                <option value="No Formal Schooling" {{old('educational_attainment') == "No Formal Schooling" ? 'selected' : 'No Formal Schooling'}}>No Formal Schooling</option>
                            </select>
                              @error('educational_attainment')
                                  <p class="text-red-500 text-xs mt-2">
                                      {{$message}}
                                  </p>
                              @enderror
                        </div>
                        <div>
                            <label for="blood_type" class="block mb-2 text-sm font-medium text-gray-900 ">Blood Type</label>
                            <select id="blood_type" name="blood_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                <option value="" {{old('blood_type') == "" ? 'selected' : ''}}></option>
                                <option value="O+" {{old('blood_type') == "O+" ? 'selected' : 'O+'}}>O+</option>
                                <option value="O-" {{old('blood_type') == "O-" ? 'selected' : 'O-'}}>O-</option>
                                <option value="A+" {{old('blood_type') == "A+" ? 'selected' : 'A+'}}>A+</option>
                                <option value="A-" {{old('blood_type') == "A-" ? 'selected' : 'A-'}}>A-</option>
                                <option value="B+" {{old('blood_type') == "B+" ? 'selected' : 'B+'}}>B+</option>
                                <option value="B-" {{old('blood_type') == "B-" ? 'selected' : 'B-'}}>B-</option>
                                <option value="AB+" {{old('blood_type') == "AB+" ? 'selected' : 'AB+'}}>AB+</option>
                                <option value="AB-" {{old('blood_type') == "AB-" ? 'selected' : 'AB-'}}>AB-</option>
                            </select>
                              @error('blood_type')
                                  <p class="text-red-500 text-xs mt-2">
                                      {{$message}}
                                  </p>
                              @enderror
                        </div>
                        <div>
                            <label for="has_philhealth" class="block mb-2 text-sm font-medium text-gray-900 ">Philhealth Member</label>
                            <select id="has_philhealth" name="has_philhealth" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                <option value="" {{old('has_philhealth') == "" ? 'selected' : ''}}></option>
                                <option value="1" {{old('has_philhealth') == "1" ? 'selected' : 'Yes'}}>Yes</option>
                                <option value="0" {{old('has_philhealth') == "0" ? 'selected' : 'No'}}>No</option>
                            </select>
                              @error('has_philhealth')
                                  <p class="text-red-500 text-xs mt-2">
                                      {{$message}}
                                  </p>
                              @enderror
                        </div>
                        <div>
                            <label for="Occupation" class="block mb-2 text-sm font-medium text-gray-900 ">Occupation</label>
                            <input type="text" name="occupation" id="Occupation" value="{{old('occupation')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter Occupation..." value={{old('occupation')}}>
                            @error('occupation')
                                <p class="text-red-500 text-xs mt-2">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="employment_status" class="block mb-2 text-sm font-medium text-gray-900 ">Employment Status</label>
                            <select id="employment_status" name="employment_status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                <option value="" {{old('employment_status') == "" ? 'selected' : ''}}></option>
                                <option value="Self-employed" {{old('employment_status') == "Self-employed" ? 'selected' : 'Self-employed'}}>Self-employed</option>
                                <option value="Unemployed" {{old('employment_status') == "Unemployed" ? 'selected' : 'Unemployed'}}>Unemployed</option>
                                <option value="Regular" {{old('employment_status') == "Regular" ? 'selected' : 'Regular'}}>Regular</option>
                                <option value="Contractual" {{old('employment_status') == "Contractual" ? 'selected' : 'Contractual'}}>Contractual</option>
                                <option value="Casual" {{old('employment_status') == "Casual" ? 'selected' : 'Casual'}}>Casual</option>
                                <option value="Retired" {{old('employment_status') == "Retired" ? 'selected' : 'Retired'}}>Retired</option>
                            </select>
                              @error('employment_status')
                                  <p class="text-red-500 text-xs mt-2">
                                      {{$message}}
                                  </p>
                              @enderror
                        </div>
                        <div>
                            <label for="Monthly Income" class="block mb-2 text-sm font-medium text-gray-900 ">Monthly Income</label>
                            <input type="number" name="monthly_income" id="Monthly Income" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter Monthly Income..." value={{old('monthly_income')}}>
                            @error('monthly_income')
                                <p class="text-red-500 text-xs mt-2">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="Phone Number" class="block mb-2 text-sm font-medium text-gray-900 ">Phone Number</label>
                            <input type="text" name="contact_phone" id="Phone Number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter Phone Number..." value={{old('contact_phone')}}>
                            @error('contact_phone')
                                <p class="text-red-500 text-xs mt-2">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="Email Address" class=" block mb-2 text-sm font-medium text-gray-900 ">Email Address</label>
                            <input type="email" name="contact_email" id="Email Address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter Email Address..." value={{old('contact_email')}}>
                            @error('contact_email')
                                <p class="text-red-500 text-xs mt-2">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="Mailing Address" class=" block mb-2 text-sm font-medium text-gray-900 ">Mailing Address</label>
                            <input type="text" name="mailing_address" id="Mailing Address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter Mailing Address..." value={{old('mailing_address')}}>
                            @error('mailing_address')
                                <p class="text-red-500 text-xs mt-2">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>

                    </div>
                    <button type="submit" class="mt-2 text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                        Save -> Add Household Info
                    </button>
                </form>
            </div>
            </section>
        </div>
    </main>
    @include('partials._residentbackbutton')
    </x-app>