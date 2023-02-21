<x-app>
    @include('partials._adminnav')
    <main class="sm:container mx-5 sm:mx-auto sm:mt-10 pt-20 mb-16">
        <div class="max-w-4xl mx-auto sm:px-6">
    
            @if (session('status'))
                    <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                        {{ session('status') }}
                    </div>
                    @elseif (session('error'))
                    <div class="text-sm border border-t-8 rounded text-red-700 border-red-600 bg-red-100 px-3 py-4 mb-4" role="alert">
                        {{ session('error') }}
                    </div>
                    @endif
    
            <section class="flex flex-col break-words bg-[url('/images/lightpaperfibers.png')] border-1 rounded-md shadow-lg">
    
                <header class="text-lg font-semibold bg-sky-600 text-gray-50 py-5 px-6 sm:py-6 sm:px-8 rounded-t-md">
                    Users
                    
                </header>
                @include('partials._userssearch')
            </section>
            @unless(count($users) == 0)
            <div class="flex flex-col shadow-lg">
              <div class="overflow-x-auto">
                <div class="py-2 inline-block min-w-full">
                  <div class="overflow-x-auto">
                    <table class="min-w-full px-2">
                      <thead class="bg-white border-b">
                          <tr>
                            <th scope="col" class="text-base font-semibold text-gray-900 px-6 py-4 text-left">
                              Id
                            </th>
                            <th scope="col" class="text-base font-semibold text-gray-900 px-6 py-4 text-left">
                              Name
                            </th>
                            <th scope="col" class="text-base font-semibold text-gray-900 px-6 py-4 text-left">
                              Email
                            </th>
                            <th scope="col" class="text-base font-semibold text-gray-900 px-6 py-4 text-left">
                              Type
                            </th>
                            <th scope="col" class="text-base font-semibold text-gray-900 px-6 py-4 text-left">
                              Actions
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                          <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                            <td class="px-6 py-4 whitespace-nowrap text-base font-normal text-gray-900">
                                {{$user->id}}
                            </td>
                            <td class="text-base font-normal text-gray-900 px-6 py-4 whitespace-nowrap">
                                {{$user->name}}
                            </td>
                            <td class="text-base font-normal text-gray-900 px-6 py-4 whitespace-nowrap">
                                {{$user->email}}
                            </td>
                            <td class="text-base font-normal text-gray-900 px-6 py-4 whitespace-nowrap">
                                {{$user->type}}
                            </td>
                            <td class="text-base font-normal text-gray-900 px-6 py-4 whitespace-nowrap">
                                <a href="/users/{{$user->id}}/edit" class="inline, text-yellow-600 text-lg mr-6"><i class="fa-solid fa-pen"></i></a> <button class="inline text-red-700 text-lg" role="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" data-bs-att="/users/{{$user->id}}"><i class="fa-solid fa-trash-can"></i></button>
                            </td>
                          </tr>
                          <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
                            <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
                              <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                  <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                                    Delete User
                                  </h5>    
                                  <button type="button"
                                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body relative p-4">
                                  <p>Are you sure you want to delete this user?</p>
                                </div>
                                <div
                                  class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                  <button type="button"
                                  class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                                  data-bs-dismiss="modal">
                                    Close
                                  </button>
                                  <form method="POST" action="/users/{{$user->id}}">
                                    @csrf
                                    @method('DELETE')
                                  <button type="submit"
                                  class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-900 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                                    Delete User
                                  </button>
                                </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              @else <p class="text-center text-gray-800 py-10 text-xl">No residents found</p>
              @endunless
              <div>
              <div class="w-full p-3 sm:px-6 bg-[url('/images/lightpaperfibers.png')]">
                {{$users->links()}}
              </div>
              </div>
        </div>
    </main>
    
    @include('partials._adduserbutton')
    </x-app>