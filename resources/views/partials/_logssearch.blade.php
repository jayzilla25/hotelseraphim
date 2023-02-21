<div class="flex items-center mx-5">
    <form action={{url('/logs')}} class="flex items-center my-5 w-full">   
        @csrf
        <label for="search" class="sr-only">Search</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input name="search" type="text" id="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  " placeholder="Search here..." required>
        </div>
        <button type="submit" class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-blue-700 sm:text-white sm:bg-blue-700 rounded-lg sm:border sm:border-blue-700 sm:hover:bg-yellow-500 sm:hover:text-gray-100 sm:hover:border-yellow-500 sm:hover:shadow-lg hover:text-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
            <svg aria-hidden="true" class="w-5 h-5 sm:mr-2 sm:-ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg><span class="hidden md:flex">Search</span> 
        </button>
    </form>
    <div class="inline-flex items-center text-center py-1.5 px-3 ml-2 text-sm font-medium text-blue-600 sm:text-white sm:bg-blue-500 rounded-lg sm:border sm:border-blue-700 sm:hover:bg-yellow-500 sm:hover:text-gray-100 sm:hover:border-yellow-500 sm:hover:shadow-lg hover:text-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300">
        <a href="{{ url('/logs') }}" class="flex items-center" role="button"> <span class="text-lg sm:mr-2 sm:-ml-1"><i class="fa-solid fa-arrows-rotate"></i></span><span class="hidden sm:block">Reset</span></a>
    </div>
    </div>