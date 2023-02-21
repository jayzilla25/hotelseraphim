<x-app>
@include('partials._usernav')
<main class="sm:container mx-5 sm:mx-auto pt-28 mb-20">
    <div class="w-full sm:px-6">

        @include('partials._session')

        <section class="flex flex-col break-words bg-white border-1 rounded-md shadow-lg">

            <header class="font-semibold bg-sky-600 text-gray-50 py-5 px-6 sm:py-6 sm:px-8 rounded-t-md">
                Dashboard
            </header>

            <div class="w-full p-6">
                <p class="text-gray-700">
                    You are logged in as a User!
                </p>
            </div>
        </section>
    </div>
</x-app>

