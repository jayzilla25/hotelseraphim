<x-app>
    @if((Auth::user()->type)=='official') @include('partials._officialnav') @else @include('partials._usernav')@endif
    <main class="sm:container mx-5 sm:mx-auto sm:max-w-lg pt-28">
        <div class="flex">
            <div class="w-full pb-20">
                @include('partials._session')
                <section class="flex flex-col break-words bg-gray-50 border-1 rounded-md shadow-lg pb-10">
    
                    <header class="font-semibold bg-sky-600 text-gray-50 py-5 px-6 sm:py-6 sm:px-8 rounded-t-md">
                        {{ __('Update your profile') }}
                    </header>
    
                    <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8 bg-gray-100 pb-10" method="POST"
                        action="{{ route('official-update-profile') }}">
                        @csrf
    
                        <div class="flex flex-wrap">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Name') }}:
                            </label>
    
                            <input id="name" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                                name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus>
    
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
                                value="{{ Auth::user()->email }}" required autocomplete="email">
    
                            @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="flex flex-wrap">
                            <button type="submit"
                                class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </form>
    
                    <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                        action="{{ route('official-update-password') }}">
                        @csrf
    
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
                                class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </form>
    
                </section>
            </div>
        </div>
    </main>
    
    
    </x-app>