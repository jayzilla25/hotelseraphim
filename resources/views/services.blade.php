<x-app>
  @include('partials._welcomenav')
  <!-- Jumbotron -->
  <body class="bg-gray-200 font-sans leading-normal tracking-normal">
  
    <!--Header-->
    <!-- Jumbotron -->
    <div
    class="mt-16 px-5 py-24 text-center overflow-hidden bg-no-repeat bg-cover rounded-lg"
    style="
      background-image: url(/images/hotel.jpg);
      background-attachment: fixed;
      height: 600px;
      background-size: cover;
      background-position: center
    "
  >
    <div
      class="container mx-auto w-full h-full overflow-hidden  flex justify-evenly align-middle"
      style="background: rgba( 255, 255, 255, 0.25 );
      box-shadow: 0 8px 32px 0 rgba(226, 167, 6, 0.7);
      backdrop-filter: blur( 4.5px );
      -webkit-backdrop-filter: blur( 4.5px );
      border-radius: 30px;
      border: 1px solid rgba( 255, 255, 255, 0.18 );">
      <div class="md:align-middle py-5 hidden md:flex h-full">
        <img src="{{asset('/images/seraphim.png')}}" alt="SP404 Logo" >
      </div>
      <div class="flex justify-center items-center h-full w-auto lg:px-5"
      >
        <div class="block text-center">
          <h2 class="font-semibold lg:text-6xl text-5xl mb-4 font-cinzel  text-amber-300">Seraphim</h2>
          <h4 class="font-semibold lg:text-3xl md:text-2xl text-xl mb-6  text-amber-300 align-top px-5 md:px-0"><i class="fa-solid fa-quote-left"></i> Teamwork makes the dream work <i class="fa-solid fa-quote-right"></i></h4>
          <a
            class="inline-block px-6 py-2 mb-1 border-2 border-amber-500 text-amber-300 font-medium text-sm leading-snug uppercase hover:bg-yellow-500 hover:text-white hover:bg-opacity-6 focus:outline-none focus:ring-0 transition duration-150 ease-in-out rounded-md"
            href="#!"
            role="button"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light"
            >Learn more</a
          >
        </div>
      </div>
    </div>
  </div>
      
      <!--Container-->
      <div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
          
          <div class="pt-20 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
            
          <!--Lead Card-->
          <div class="mt-10 flex h-full bg-white rounded overflow-hidden shadow-lg">
            <div class="flex flex-wrap no-underline">
        
              <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
                <header class="w-full container mx-auto">
                  <div class="flex flex-col items-center py-10">
                      <div class="mx-auto font-bold text-amber-600 uppercase text-5xl">
                          Our Hotel Services
                      </div>
                      <p class="flex text-center pt-5 p-5 text-gray-600 mb-8 md:pb-0">
                        We take pride in providing our quality services that make their stay every moments.
                      </p>
                      <h2 class="text-2xl font-bold font-cinzel text-center mb-3 text-amber-600">Vision & Mission</h2>
                      <h4 class="flex text-center pt-5 p-5 text-gray-600 mb-8 md:pb-0">The Hotel Seraphim, with its unique sense of history and place, is devoted to creating enduring relationships with our guests and members by providing highly personalized service and gracious hospitality in an informally elegant atmosphere.Our greatest asset, and the key to our success, is our people. We believe that true world-class status is only achieved when a resort combines the traditions of its local community with exceptional personal service.We believe each of us needs a sense of dignity, pride and satisfaction in what we do. Because satisfying our guests depends on the united efforts of many, we are most effective when we work together cooperatively, respecting each other’s contributions and importance.</h4>

                      <h2 class="text-2xl font-bold font-cinzel text-center mb-3 text-amber-600">Seraphim Vision</h2>
                      <h4 class="flex text-center pt-5 p-5 text-gray-600 mb-8 md:pb-0">To have our properties be known as among the premier luxury destinations in the world; to create personal experiences for our guests that they will treasure for a lifetime; and to be the destination of choice for our discerning guests, members, associates, communities, and investors.</h4>
                      <h2 class="text-2xl font-bold font-cinzel text-center mb-3 text-amber-600">Seraphim Mission</h2>
                      <h4 class="flex text-center pt-5 p-5 text-gray-600 mb-8 md:pb-0">Ocean House, with its unique sense of history and place, is devoted to creating enduring relationships with our guests and members by providing highly personalized service and gracious hospitality in an informally elegant setting. This is our hotel mission statement.</h4>
                      <h2 class="text-2xl font-bold font-cinzel text-center mb-3 text-amber-600">Our Values</h2>
                      <h4 class="flex text-center pt-5 p-5 text-gray-600 mb-8 md:pb-0">Pursuing this mission is a dedicated team of talented individuals. Knowledge and passion for exceptional, personalized service are the foundation upon which our experience is built.</h4>
                  </div>
              </header>
              </div>
            </div>
          </div>
          <!--/Lead Card-->
  
  
          <!--Posts Container-->
          <div class="flex flex-wrap justify-between pt-12 -mx-6">
  
            <!--1/3 col -->
            <div class="rounded overflow-hidden shadow-lg container mx-auto text-center break-normal" style="background: linear-gradient(50deg,#dbec40,#f7dd4a);">
              <!--Title-->
                <p class="px-5 py-5 text-gray-800 font-bold text-3xl md:text-5xl">
                  Emergency Contact Informations
                </p>
            </div>
  
            <section class="ml-20 mb-20 text-gray-700">
              <div class="text-center md:max-w-xl lg:max-w-3xl mx-auto">
                <p class="mb-6 pt-4 pb-2 md:mb-12 md:pb-0">
                  If you or someone you know is in an emergency situation, there are several hotlines available to help.
                </p>
              </div>
            
              <div class="grid md:grid-cols-3 gap-6 text-center">
                <div>
                  <div class="block rounded-lg shadow-lg bg-white">
                    <div class="p-6">
                      <div class="overflow-hidden h-15" style="background-color: #ffde59;">
                      <h4 class="text-3xl font-semibold mb-1">Manager</h4>
                      <p class="text-lg">Lorem ipsum dolor sit amet.</p>
                      <hr /> 
                     </div>
                      <p class="mt-4">
                        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                          <div class="flex flex-col pb-3">
                              <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Email address</dt>
                              <dd class="text-lg font-semibold">Hotelseraphim@gmail.com</dd>
                          </div>
                          <div class="flex flex-col py-3">
                              <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Hotel Address</dt>
                              <dd class="text-lg font-semibold">Robert Robertson, 1234 NW Bobcat Lane, St. Robert, MO 65584-5678</dd>
                          </div>
                          <div class="flex flex-col pt-3 pb-3">
                              <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Phone number | Hotline</dt>
                              <dd class="text-lg font-semibold">+00 123 456 789 / +12 345 678</dd>
                          </div>
                        </dl>
                      </p>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="block rounded-lg shadow-lg bg-white">
                    <div class="p-6">
                      <div class="overflow-hidden h-15" style="background-color:  #ffde59;">
                      <h4 class="text-3xl text-gray-900 font-semibold mb-1">Front Desk</h4>
                      <p class="text-lg text-gray-900">Lorem ipsum dolor sit amet.</p>
                      </div>
                      <hr />
                      <p class="mt-4">
                        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                          <div class="flex flex-col pb-3">
                              <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Email address</dt>
                              <dd class="text-lg font-semibold">Hotelseraphim@gmail.com</dd>
                          </div>
                          <div class="flex flex-col py-3">
                              <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Hotel Address</dt>
                              <dd class="text-lg font-semibold">Robert Robertson, 1234 NW Bobcat Lane, St. Robert, MO 65584-5678</dd>
                          </div>
                          <div class="flex flex-col pt-3 pb-3">
                              <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Phone number | Hotline</dt>
                              <dd class="text-lg font-semibold">+00 123 456 789 / +12 345 678</dd>
                          </div>
                        </dl>
                      </p>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="block rounded-lg shadow-lg bg-white">
                    <div class="p-6">
                      <div class="overflow-hidden h-15" style="background-color:  #ffde59;">
                      <h4 class="text-3xl font-semibold mb-1">Hotelier</h4>
                      <p class="text-lg">Lorem ipsum dolor sit amet.</p>
                      </div>
                      <hr />
                      <p class="mt-4">
                        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                          <div class="flex flex-col pb-3">
                              <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Email address</dt>
                              <dd class="text-lg font-semibold">Hotelseraphim@gmail.com</dd>
                          </div>
                          <div class="flex flex-col py-3">
                              <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Hotel Address</dt>
                              <dd class="text-lg font-semibold">Robert Robertson, 1234 NW Bobcat Lane, St. Robert, MO 65584-5678</dd>
                          </div>
                          <div class="flex flex-col pt-3 pb-3">
                              <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Phone number | Hotline</dt>
                              <dd class="text-lg font-semibold">+00 123 456 789 / +12 345 678</dd>
                          </div>
                        </dl>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
  
      <div class="rounded overflow-hidden shadow-lg container mx-auto text-center break-normal" style="background: linear-gradient(50deg,#dbec40,#f7dd4a);">
        <!--Title-->
          <p class="px-5 py-5 text-gray-800 font-bold text-3xl md:text-5xl">
           Job Offers
          </p>
      </div>
      <div class="text-center md:max-w-xl lg:max-w-3xl mx-auto">
        <p class="mb-2 pt-4 pb-2 md:mb-6 md:pb-0">
          We are looking for you...
        </p>
      </div>
      <section class="mx-auto justify-center mt-2 py-10 bg-gray-100">
        <div class="mx-auto grid max-w-6xl grid-cols-1 gap-6 p-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
          {{-- KINDERGARTEN SCHOOL --}}
          <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
            <div class="relative flex items-end overflow-hidden rounded-xl">
              <img src="{{ asset('/images/1kinder.png') }}" alt="Kindergarten">
              <div class="flex items-center space-x-1.5 rounded-lg bg-amber-400 px-4 py-1.5 text-white duration-100 hover:bg-amber-500">
              </div>
            </div>
            <div class="mt-1 p-2">
              <h2 class="text-slate-700">Accounting</h2>
              <p class="mt-1 text-sm text-slate-400">If you're good with this feild apply now.We need you're help</p>
    {{-- KINDERGARTEN MODAL BUTTON --}}
              <div class="mt-3 flex items-end justify-center">
                <div class="flex items-center space-x-1.5 rounded-lg bg-amber-400 px-4 py-1.5 text-white duration-100 hover:bg-amber-500">
                  <button data-modal-target="kinder" data-modal-toggle="kinder" class="text-sm">Apply</button>
                </div>
              </div>
            </div>
        </article>
            
           
  
          {{-- ELEM SCHOOL --}}
          <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
              <div class="relative flex items-end overflow-hidden rounded-xl">
                <img src="{{ asset('/images/2elem.png') }}" alt="Elementary" />
                <div class="flex items-center space-x-1.5 rounded-lg bg-amber-400 px-4 py-1.5 text-white duration-100 hover:bg-amber-500">
                </div>
              </div>
              <div class="mt-1 p-2">
                <h2 class="text-slate-700">Manager</h2>
                <p class="mt-1 text-sm text-slate-400">If you're good with this feild apply now.We need you're help</p>
      {{-- ELEM SCHOOL MODAL BUTTON --}}
                <div class="mt-3 flex items-end justify-center">
                  <div class="flex items-center space-x-1.5 rounded-lg bg-amber-400 px-4 py-1.5 text-white duration-100 hover:bg-amber-500">
                    <button data-modal-target="elem" data-modal-toggle="elem" class="text-sm">Apply</button>
                  </div>
                </div>
              </div>
          </article>
                 
       
                {{------------------------------------------------- END OF ELEM ------------------------------------------------}}
  
                   {{-- JUNIOR HIGH SCHOOL --}}
                   <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                    <div class="relative flex items-end overflow-hidden rounded-xl">
                      <img src="{{ asset('/images/3junior.png') }}" alt="Junior" />
                      <div class="flex items-center space-x-1.5 rounded-lg bg-amber-400 px-4 py-1.5 text-white duration-100 hover:bg-amber-500">
                      </div>
                    </div>
                    <div class="mt-1 p-2">
                      <h2 class="text-slate-700">Security Guard</h2>
                      <p class="mt-1 text-sm text-slate-400">If you're good with this feild apply now.We need you're help</p>
            {{-- JUNIOR HIGH SCHOOL MODAL BUTTON --}}
                      <div class="mt-3 flex items-end justify-center">
                        <div class="flex items-center space-x-1.5 rounded-lg bg-amber-400 px-4 py-1.5 text-white duration-100 hover:bg-amber-500">
                          <button data-modal-target="junior" data-modal-toggle="junior" class="text-sm">Apply</button>
                        </div>
                      </div>
                    </div>
                </article>
                        {{-- JUNIOR HIGH SCHOOL MODAL --}}
               
                   {{------------------------------------------------- END OF JUNIOR ------------------------------------------------}}
  
                         {{-- SENIOR HIGH SCHOOL --}}
                         <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                          <div class="relative flex items-end overflow-hidden rounded-xl">
                            <img src="{{ asset('/images/4senior.png') }}" alt="Senior" />
                            <div class="flex items-center space-x-1.5 rounded-lg bg-amber-400 px-4 py-1.5 text-white duration-100 hover:bg-amber-600">
                            </div>
                          </div>
                          <div class="mt-1 p-2">
                            <h2 class="text-slate-700" >HR</h2>
                            <p class="mt-1 text-sm text-slate-400">If you're good with this feild apply now.We need you're help</p>
                  {{-- JUNIOR HIGH SCHOOL MODAL BUTTON --}}
                            <div class="mt-3 flex items-end justify-center">
                              <div class="flex items-center space-x-1.5 rounded-lg bg-amber-400 px-4 py-1.5 text-white duration-100 hover:bg-amber-600">
                                <button data-modal-target="senior" data-modal-toggle="senior" class="text-sm">Apply</button>
                              </div>
                            </div>
                          </div>
                      </article>
                           
                          
                               </div>
                 </div>
              </div>
           </section>
       
      
  
          </div>
        </div>
    <script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/tippy.js@4"></script>
    <script>
      //Init tooltips
      tippy('.avatar')
    </script>
  </body>
  </html>
  
  <!-- Jumbotron -->
  @include('partials._footer')
  
  
  
  </x-app>