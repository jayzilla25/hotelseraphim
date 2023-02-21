<header 
class="fixed top-0 left-0 right-0 z-10"
style="background: rgba(226, 167, 6, 0.7);
box-shadow: 0 8px 32px 0 rgba(226, 167, 6, 0.7);
backdrop-filter: blur( 5px );
-webkit-backdrop-filter: blur( 5px );
border-radius: 0 0 10px 10px;
border: 1px solid rgba(226, 167, 6, 0.7)"
>
    <nav class="px-4 lg:px-6 py-2.5">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-2xl">
            <a href="{{ url('/') }}" class="flex items-center">
                <span class="self-center text-xl font-semibold whitespace-nowrap text-white">{{ config('app.name', 'Laravel') }}</span>
            </a>
            <div class="flex items-center lg:order-2">
                <x-welcomenavitems />
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-amber-500 rounded-lg lg:hidden hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-700" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="/" class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 border-b border-gray-100 lg:border-0 hover:text-amber-50" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/services" class="block py-2 pr-4 pl-3 text-gray-200 border-b border-gray-100  hover:text-amber-50 lg:border-0 lg:hover:text-primary-700 lg:p-0">Services</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 text-gray-200 border-b border-gray-100 hover:text-amber-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">News & Updates</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
</header>