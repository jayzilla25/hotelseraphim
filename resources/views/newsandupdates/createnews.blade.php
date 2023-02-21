<x-app>
    @include('partials._officialnav')
    <main class="sm:container mx-5 sm:mx-auto sm:mt-10 pt-20 mb-20">
        <div class="max-w-xl mx-auto shadow-lg">
            @include('partials._session')
            <section class="flex flex-col break-words bg-[url('/images/lightpaperfibers.png')] border-1 rounded-md shadow-lg">
    
                <header class="mb-3 font-semibold bg-sky-600 text-gray-50 py-5 px-6 sm:py-6 sm:px-8 rounded-t-md">
                    {{ __('Create a Post')}}
                    
                </header>
                <div class="sm:px-5 mb-5 rounded-b-lg">
                    <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="/newsandupdates/store" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="flex flex-wrap">
                        <label for="title" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Title') }}:
                        </label>

                        <input id="title" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                            name="title" value="{{ old('title') }}" required autocomplete="title" autofocus placeholder="Enter title...">

                        @error('title')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="sub-title" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Sub-Title') }}:
                        </label>

                        <input id="sub-title" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                            name="sub_title" value="{{ old('sub_title') }}" required autocomplete="sub-title" autofocus placeholder="Enter sub-title...">

                        @error('sub_title')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="category" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Category') }}:
                        </label>

                        <input id="category" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" name="category"
                            value="{{ old('category') }}" required autocomplete="category" placeholder="Enter category...">

                        @error('category')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        
                        <label for="body" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">Article Body</label>
                        <textarea id="body" name="body" rows="15" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="Please separate your paragraphs with @@">{{ old('body')}}</textarea>
                        @error('body')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap relative">
                        <label for="dropzone-file" class="mx-auto cursor-pointer flex w-full max-w-lg flex-col items-center rounded-xl border-2 border-dashed border-gray-300 bg-white hover:border-blue-600 p-6 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            <p class="mt-2 text-sm text-gray-500 tracking-wide">Upload or drag & drop your image file SVG, PNG, JPG or GIF. </p>
                            <input id="dropzone-file" type="file" name="image" class="opacity-0 w-full absolute top-14"/>
                        </label>
                        @error('image')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap pb-5">
                        <button type="submit"
                            class="w-auto select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-600 sm:py-4 sm:px-5">
                            {{ __('Publish Post') }}
                        </button>
                    </div>
                </form>
            </div>
            </section>
        </div>
    </main>
    @include('partials._newsbackbutton')
    </x-app>