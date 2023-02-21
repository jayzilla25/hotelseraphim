<x-app>
    @include('partials._adminnav')
    <main class="sm:container sm:mx-auto sm:mt-10 mx-5 pt-20 mb-10">
        <div class="max-w-lg mx-auto sm:px-6">
    
            @include('partials._session')
    
            <section class="shadow-lg flex flex-col break-words bg-[url('/images/lightpaperfibers.png')] sm:border-1 rounded-md sm:shadow-lg">
    
                <header class="text-lg font-semibold bg-sky-600 text-gray-50 py-5 px-6 sm:py-6 sm:px-8 rounded-t-md">
                    Users
                    
                </header>
                @include('partials._logssearch')
            
            @unless(count($logs) == 0)
            <div class="py-10 bg-gray-100 flex justify-center lg:px-20 px-10">
            <ol class="relative border-l border-yellow-300">
                @foreach($logs as $log)
                <li class="mb-10 ml-4">
                    <div class="absolute w-3 h-3 bg-yellow-300 rounded-full mt-1.5 -left-1.5 border-2 border-red-400"></div>
                    <time class="mb-1 text-sm font-normal leading-none text-blue-900">{{$log->created_at}}</time>
                    <h3 class="text-lg font-semibold text-gray-900">{{ __('User') }} {{$log->by_userId}}{{ __(':') }} {{$log->by_userName}}</h3>
                    <p class="mb-4 text-base font-normal text-gray-700">{{$log->by_userName}} {{$log->action}} {{ __('the') }} {{$log->receiver_type}} {{$log->receiver_name}}</p>
                </li>
                @endforeach
            </ol>
        </div>
            @else <p class="text-center text-gray-800 py-10 text-xl">No Logs found</p>
            @endunless
            
        </section>
        <div class="w-full py-3 rounded-b-lg mb-5 sm:px-6 px-3 bg-[url('/images/lightpaperfibers.png')]">
            {{$logs->links()}}
        </div>
    </div>
</main>
    </x-app>