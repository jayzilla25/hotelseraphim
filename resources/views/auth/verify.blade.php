<x-app>
@include('partials._usernav')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10 pt-28">
    <div class="flex">
        <div class="w-full">

            @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
            @elseif (session('error'))
            <div class="text-sm border border-t-8 rounded text-red-700 border-red-600 bg-red-100 px-3 py-4 mb-4" role="alert">
                {{ session('error') }}
            </div>
            @endif

            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-lg">
                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Verify Your Email Address') }}
                </header>

                <div class="w-full flex flex-wrap text-gray-700 leading-normal text-sm p-6 space-y-4 sm:text-base sm:space-y-6">
                    <p>
                        {{ __('Before proceeding, please check your email for a verification link.') }}
                    </p>

                    <p>
                        {{ __('If you did not receive the email') }}, <a
                            class="text-blue-500 hover:text-blue-700 no-underline hover:underline cursor-pointer"
                            onclick="event.preventDefault(); document.getElementById('resend-verification-form').submit();">{{ __('click here to request another') }}</a>.
                    </p>

                    <form id="resend-verification-form" method="POST" action="{{ route('verification.resend') }}"
                        class="hidden">
                        @csrf
                    </form>
                </div>

            </section>
        </div>
    </div>
</main>
</x-app>
