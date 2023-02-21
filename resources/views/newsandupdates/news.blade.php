<x-app>
    @include('partials._officialnav')
    <main class="sm:container sm:mx-auto sm:mt-10 pt-20 min-h-full mb-16">
        <div class="w-full sm:px-6 px-4">
            @include('partials._session')
            <section class="flex flex-col break-words bg-[url('/images/lightpaperfibers.png')] sm:border-1 rounded-md shadow-lg">
                <header class="font-semibold bg-sky-600 text-gray-50 py-5 px-6 sm:py-6 sm:px-8 rounded-t-md">
                    {{ __('News and Updates')}}
                </header>
                @include('partials._officialssearch')  
            </section>
            @unless(count($newsandupdates)==0)
            <section class="my-7 text-gray-800 text-center">
                <div class="grid lg:grid-cols-3 gap-2 xl:gap-x-8">
                @foreach($newsandupdates as $newsandupdate)
                  <div class="mb-3 lg:mb-0 bg-gray-100 px-5 py-5 rounded-lg shadow-lg relative">
                    <div>
                      <div
                        class="relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg mb-6"
                        data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <img src="{{$newsandupdate->image ? asset('/storage/' . $newsandupdate->image) : asset('images/default.png')}}"
                          class="w-full" alt="Article Image" />
                        <a href="#!">
                          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                            style="background-color: rgba(251, 251, 251, 0.2)"></div>
                        </a>
                      </div>
                      <div class="px-3 mb-20">
                        <h5 class="text-lg font-bold mb-3">{{$newsandupdate->title}}</h5>
                      <div class="mb-3  text-gray-900 font-medium text-xs flex items-center justify-center uppercase">
                        <h5 class="bg-yellow-600 text-white px-3 py-1 rounded-2xl">{{$newsandupdate->category}}</h5>  
                      </div>
                      <p class="text-gray-500 mb-6">
                        <small>Posted <u>{{$newsandupdate->created_at}}</u> by
                          <span class="text-gray-900">{{$newsandupdate->user_name}}</span></small>
                      </p>
                      <h5 class="text-center font-medium mb-6">{{$newsandupdate->sub_title}}</h5>
                      <x-news-body :bodyCsv="$newsandupdate->body"/>
                      </div>
                      <div class="flex items-center justify-center mt-5 mb-2 absolute bottom-5 right-10">
                        <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                          <a
                            href="/newsandupdates/{{$newsandupdate->id}}/edit"
                            aria-current="page"
                            class="rounded-l px-6 py-2.5 bg-blue-800 text-white
                              font-medium text-xs leading-tight uppercase hover:bg-blue-700
                              focus:bg-blue-700 focus:outline-none focus:ring-0
                              active:bg-blue-800 transition duration-150 ease-in-out
                            "
                          >
                            Edit
                          </a>
                          <button
                            class="rounded-r px-6 py-2.5 bg-red-500 text-white font-medium
                              text-xs leading-tight uppercase hover:bg-red-600 focus:bg-red-700 focus:outline-none focus:ring-0
                              active:bg-red-800 transition duration-150 ease-in-out"
                              role="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" data-bs-att="/newsandupdates/{{$newsandupdate->id}}">
                            Delete
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
                        <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
                          <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                            <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                              <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel"> 
                                {{__('Delete Post')}} {{$newsandupdate->title}}
                              </h5>    
                              <button type="button"
                                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body relative p-4">
                              <p>Are you sure you want to delete this Post?</p>
                            </div>
                            <div
                              class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                              <button type="button"
                                class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                                data-bs-dismiss="modal">
                                Close
                              </button>
                              <form method="POST" action="/newsandupdates/{{$newsandupdate->id}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-900 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                                Delete Post
                                </button>
                                </form>
                            </div>
                          </div>
                        </div>
                        

                  </div>
                  
                </div>
                @endforeach
              </div>
            </section>
              
            
            @else <p class="text-center text-gray-800 py-10 text-xl">No Newsa and Updates articles found.</p>
            @endunless
            <div class="w-full py-3 px-3 rounded-b-md mb-5 sm:px-6 bg-[url('/images/lightpaperfibers.png')]">
                {{$newsandupdates->links()}}
            </div>
        </div>
    </main>
    @include('partials._addnewsandupdatesbutton')
    </x-app>