    @auth

        <form class="inline" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="text-white bg-primary-700 focus:ring-4 hover:border-blue-500 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 focus:outline-none">
                </i>Logout
            </button>
        </form>
    
    @else
    
    <a href="{{ route('login') }}" class="text-gray-200 hover:text-amber-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 focus:outline-none">{{ __('Login') }}</a>
    
    @endauth
{{-- </ul> --}}