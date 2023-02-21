<x-app>
    @include('partials._adminnav')
    <main class="sm:container mx-5 sm:mx-auto sm:max-w-5xl pt-28 mb-10 ">
        <div class="flex ">
            <div class="w-full pb-20">
                @include('partials._session')
                <section class="flex flex-col break-words bg-gray-50 border-1 rounded-md shadow-lg pb-10">
    
                    <header class="text-lg shadow-lg bg-sky-600 text-gray-50 py-5 px-6 sm:py-6 sm:px-8 rounded-t-md">
                        Update User: <span class="font-semibold text-white">{{$user->name}}</span> 
                    </header>
                    <div class="grid gap-2 mb-4 sm:grid-cols-2">
                    <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                        action="/users/{{$user->id}}">
                        @csrf
                        @method('PUT')
                        <div class="flex flex-wrap">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Name') }}:
                            </label>
    
                            <input id="name" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                                name="name" value="{{ $user->name}}" required autocomplete="name" autofocus>
    
                            @error('name')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
    
                        <div class="flex flex-wrap">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('E-Mail Address') }}:
                            </label>
    
                            <input id="email" type="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" name="email"
                                value="{{ $user->email }}" required autocomplete="email">
    
                            @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div>
                            <label for="type" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">User Type</label>
                            <select id="type" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                <option value="" {{$user->type == "" ? 'selected' : ''}}></option>
                                <option value=0 {{$user->type == 'user' ? 'selected' : 'User'}}>User</option>
                                <option value=1 {{$user->type == 'official' ? 'selected' : 'Official'}}>Official</option>
                                <option value=2 {{$user->type == 'admin' ? 'selected' : 'Admin'}}>Admin</option>
                            </select>
                              @error('type')
                                  <p class="text-red-500 text-xs mt-2">
                                      {{$message}}
                                  </p>
                              @enderror
                        </div>
                        <div class="flex flex-wrap">
                            <button type="submit"
                                class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-600 sm:py-4">
                                {{ __('Submit') }}
                            </button>
                        </div>
                        
                    </form>
    
                    <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                        action="/users/{{$user->id}}/password">
                        @csrf
                        @method('PUT')
                        <div class="flex flex-wrap">
                            <label for="oldPasswordInput" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">Old Password</label>
                            <input name="old_password" type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" id="oldPasswordInput"
                                placeholder="Old Password">
                            @error('old_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
    
                        <div class="flex flex-wrap">
                            <label for="newPasswordInput" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('New Password') }}:
                            </label>
    
                            <input id="newPasswordInput" type="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" name="new_password"
                                required autocomplete="new-password">
    
                            @error('password')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
    
                        <div class="flex flex-wrap">
                            <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Confirm Password') }}:
                            </label>
    
                            <input id="password-confirm" type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                                name="new_password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="flex flex-wrap">
                            <button type="submit"
                                class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-600 sm:py-4">
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </form>
                </div>
                </section>
            </div>
        </div>
    </main>
    @include('partials._usersbackbutton')
    
    </x-app>