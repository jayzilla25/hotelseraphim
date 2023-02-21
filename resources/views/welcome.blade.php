<x-app>
@include('partials._welcomenav')
<!-- Jumbotron -->
<div
  class="mt-16 px-10 py-20 text-center overflow-hidden bg-no-repeat bg-cover rounded-lg"
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
    <div class="flex justify-center items-center h-full w-auto sm:px-3 lg:px-5"
    >
      <div class="block text-center">
        <img class="md:hidden h-40 mx-auto" src="{{asset('/images/seraphim.png')}}" alt="">
        <h2 class="font-semibold lg:text-6xl text-5xl mb-4 font-cinzel text-amber-300">Seraphim</h2>
        <h4 class="font-semibold lg:text-3xl md:text-2xl text-xl mb-6 text-amber-300 align-top px-5 md:px-0"><i class="fa-solid fa-quote-left"></i>Teamwork makes the dream work<i class="fa-solid fa-quote-right"></i></h4>
        {{-- <a
          class="inline-block px-6 py-2 mb-1 border-2 border-amber-500 text-amber-300 font-medium text-sm leading-snug uppercase hover:bg-yellow-500 hover:text-white hover:bg-opacity-6 focus:outline-none focus:ring-0 transition duration-150 ease-in-out rounded-md"
          href="#!"
          role="button"
          data-mdb-ripple="true"
          data-mdb-ripple-color="light"
          >Learn more</a --}}
        >
      </div>
    </div>
  </div>
</div>
{{-- <div class="bg-blue-600 h-3"></div>
<div class="bg-red-600 h-3"></div> --}}
<div class="md:py-24 py-5">
  <div class="container px-8 mx-auto">
    <x-header>A Message From Our Chairman</x-header>
    <!-- Section: Design Block -->
    <section class="text-gray-800 max-w-6xl md:mx-auto mx-1">
      <div class="block rounded-lg shadow-lg bg-white">
        <div class="flex flex-wrap items-center">
          <div class="hidden lg:flex grow-0 shrink-0 basis-auto lg:w-6/12 xl:w-4/12">
            <img src={{asset('/images/Ceo.jpg')}} alt="Trendy Pants and Shoes"
              class="w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" />
          </div>
          <div class="grow-0 shrink-0 basis-auto w-full lg:w-6/12 xl:w-8/12">
            <div class="px-5 py-12 md:px-12">
              <h2 class="text-2xl font-bold font-cinzel text-center mb-8">Dear valued employees,</h2>
              <p class="text-gray-600 mb-6 indent-10 leading-5 text-justify">I am writing to express my gratitude for your dedication and hard work towards our shared vision of providing exceptional service to our guests at Hotel Seraphim. Your contributions have been instrumental in the success of our organization, and I am proud to have you as a part of our team.</p>
              <p class="text-gray-600 mb-6 indent-10 leading-5 text-justify">
                As we navigate the challenges and opportunities that lie ahead, I want to reassure you that our commitment to our employees remains unwavering. We will continue to invest in your growth and development, both professionally and personally, to help you achieve your full potential.
              </p>
              <p class="text-gray-600 mb-6 indent-10 leading-5 text-justify">
                We understand that our success is directly tied to the success and satisfaction of our employees. That is why we are committed to providing a safe, supportive, and inclusive work environment, where you can thrive and reach your career goals.
              </p>
              <p class="text-gray-600 mb-6 indent-10 leading-5 text-justify">
                In the coming months and years, we will continue to innovate and improve our services to meet the evolving needs of our guests. We will also seek out new opportunities for growth and expansion, while remaining true to our values of integrity, innovation, and excellence.
              </p>
              <p class="text-gray-600 mb-6 indent-10 leading-5 text-justify">
                Once again, thank you for your hard work and dedication to our organization. You are the backbone of our success, and we are committed to supporting you every step of the way.
              </p>
             
              
              <p class="text-gray-800 font-cinzel text-center font-bold text-lg">
                Sincerely,
              </p>
              <p class="text-gray-800 font-cinzel text-center font-bold text-lg">
                [Your Name]
              </p>
              <p class="text-gray-800 font-cinzel text-center font-bold text-lg">
                CEO, Hotel Seraphim
              </p>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
    <!-- Container for demo purpose -->
<div class="container my-24 md:px-6 mx-auto">

  <!-- Section: Design Block -->
  <section class="mb-32 text-gray-800 text-center">
    <x-header>Latest articles</x-header>
    <div class="grid lg:grid-cols-3 gap-6 xl:gap-x-12">
      @foreach($newsandupdates as $newsandupdate)
      <div class="mb-6 lg:mb-0">
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

          <h5 class="text-lg font-bold mb-3">{{$newsandupdate->title}}</h5>
          <div class="mb-3  text-gray-900 font-medium text-xs flex items-center justify-center uppercase">
            <h5 class="border border-blue-500 text-gray-700 px-3 py-1 rounded-2xl">{{$newsandupdate->category}}</h5>  
          </div>
          <p class="text-gray-500 mb-6">
            <small>Posted <u>{{$newsandupdate->created_at}}</u> by
              <a href="" class="text-gray-900">{{$newsandupdate->user_name}}</a></small>
          </p>
          <p class="text-gray-500">
            {{$newsandupdate->sub_title}}
          </p>
        </div>
      </div>
      @endforeach
  </section>
  <!-- Section: Design Block -->
  

</div>
<!-- Container for demo purpose -->
{{-- -------------------------Rooms Start--------------------------- --}}

<div class="md:py-24 py-5">
  <div class="container px-8 mx-auto">
    <x-header>Guest & Employee Memories</x-header>
    <div class="grid grid-flow-col grid-rows-2 grid-cols-3 gap-8">
      <div>
        <img src="{{asset('/images/bed1.jpg')}}"alt="" loading="lazy">
      </div>
      <div class="col-start-3">
        <img src="{{asset('/images/bed2.jpg')}}" alt="" loading="lazy">
      </div>
      <div>
        <img src="{{asset('/images/bed4.jpg')}}" alt="" loading="lazy">
      </div>
      <div>
        <img src="{{asset('/images/bed3.jpg')}}" alt="" loading="lazy">
      </div>
      <div class="row-start-1 col-start-2 col-span-2">
        <img src="{{asset('/images/bed5.jpg')}}" alt="" loading="lazy">
      </div>
    </div>



  </div>

</div>

 
   



{{-- -------------------------Rooms End--------------------------- --}}



  </div>
</div>
<!-- Jumbotron -->
@include('partials._footer')



</x-app>