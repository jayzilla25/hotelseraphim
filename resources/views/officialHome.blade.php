<x-app>
@include('partials._officialnav')
<main class="sm:container mx-5 sm:mx-auto sm:mt-10 pt-20">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
            @elseif (session('error'))
            <div class="text-sm border border-t-8 rounded text-red-700 border-red-600 bg-red-100 px-3 py-4 mb-4" role="alert">
                {{ session('error') }}
            </div>
            @endif

        <section class="flex flex-col break-words bg-white border-1 rounded-md shadow-lg">

            <header class="font-semibold bg-sky-600 text-gray-50 py-5 px-6 sm:py-6 sm:px-8 rounded-t-md">
                Dashboard
            </header>

            <div class="w-full p-6">
                <p class="text-gray-700">
                    You are logged in as an {{auth()->user()->name}}!
                </p>
            </div>
        </section>
           <section>
            <div id="main" class="main-content flex-1 bg-gray-100 pt-5 pb-12 md:pb-5 px-5 bg-[url('/images/natural_paper.png')]">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 xl:w-1/3 md:p-6 px-6 py-4">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-600 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full py-5 px-4 bg-pink-600 text-white"><i class="fa-solid fa-people-group fa-2x"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Registered Residents</h2>
                                   <a href="/residents" class="inline font-bold text-3xl">{{count($residents)}}<span class="text-pink-500 pl-2 hover:text-pink-600"><i class="fa-solid fa-circle-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 md:p-6 px-6 py-4">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-500 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center ">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-blue-600"><i class="fa-solid fa-house-user fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Total Households</h2>
                                    <a href="/households" class="group inline font-bold text-3xl">{{count($households)}}<span class="text-blue-500 pl-2 hover:text-blue-700"><i class="fa-solid fa-circle-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 md:p-6 px-6 py-4">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-yellow-600"><i class="fa-solid fa-newspaper fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Total Articles</h2>
                                    <a href="/newsandupdates" class="group inline font-bold text-3xl">{{count($newsandupdates)}}<span class="text-yellow-500 pl-2 hover:text-yellow-700"><i class="fa-solid fa-circle-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 md:p-6 px-6 py-4">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-600 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full py-5 px-6 bg-pink-600"><i class="fa-solid fa-person-cane fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Senior Citizens</h2>
                                    <a href="/residents/seniors" class="group inline font-bold text-3xl">{{count($seniors)}}<span class="text-pink-500 pl-2 hover:text-green-700"><i class="fa-solid fa-circle-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 md:p-6 px-6 py-4">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-600 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full py-5 px-7 bg-blue-600"><i class="fa-solid fa-child fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Minor Age Residents</h2>
                                    <a href="/residents/minors" class="group inline font-bold text-3xl">{{count($minors)}}<span class="text-blue-500 pl-2 hover:text-yellow-700"><i class="fa-solid fa-circle-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 md:p-6 px-6 py-4">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full py-5 px-6 bg-yellow-600"><i class="fa-solid fa-venus fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Women</h2>
                                    <a href="/residents/women" class="group inline font-bold text-3xl">{{count($women)}}<span class="text-yellow-500 pl-2 hover:text-yellow-700"><i class="fa-solid fa-circle-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 md:p-6 px-6 py-4">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-600 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full py-5 px-6 bg-pink-600"><i class="fa-solid fa-user-tie fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Labor Force</h2>
                                    <a href="/residents/labor" class="group inline font-bold text-3xl">{{count($labor)}}<span class="text-pink-500 pl-2 hover:text-yellow-700"><i class="fa-solid fa-circle-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 md:p-6 px-6 py-4">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-600 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-blue-600"><i class="fa-solid fa-moon fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Unemployed</h2>
                                    <a href="/residents/unemployed" class="group inline font-bold text-3xl">{{count($unemployed)}}<span class="text-blue-500 pl-2 hover:text-yellow-700"><i class="fa-solid fa-circle-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    
                    <div class="w-full md:w-1/2 xl:w-1/3 md:p-6 px-6 py-4">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-yellow-600"><i class="fa-solid fa-seedling fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Farmers</h2>
                                    <a href="/residents/farmers" class="group inline font-bold text-3xl">{{count($farmers)}}<span class="text-yellow-500 pl-2 hover:text-yellow-700"><i class="fa-solid fa-circle-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 md:p-6 px-6 py-4">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-600 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-pink-600"><i class="fa-sharp fa-solid fa-earth-americas fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold text-gray-600">OFWs</h2>
                                    <a href="/residents/ofw" class="group inline font-bold text-3xl">{{count($ofw)}}<span class="text-pink-500 pl-2 hover:text-yellow-700"><i class="fa-solid fa-circle-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 md:p-6 px-6 py-4">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-600 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full py-5 px-4 bg-blue-600"><i class="fa-solid fa-business-time fa-2x fa-inverse"></i></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Business Owners</h2>
                                    <a href="/residents/businessman" class="group inline font-bold text-3xl">{{count($businessman)}}<span class="text-blue-500 pl-2 hover:text-yellow-700"><i class="fa-solid fa-circle-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 md:p-6 px-6 py-4">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-yellow-600"><i class="fa-solid fa-notes-medical fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Philhealth Members</h2>
                                    <a href="/residents/philhealth" class="group inline font-bold text-3xl">{{count($philhealth)}}<span class="text-yellow-500 pl-2 hover:text-yellow-700"><i class="fa-solid fa-circle-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                </div>


                <div class="flex flex-row flex-wrap flex-grow mt-2">

                
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Graph Card-->
                    <div class="bg-white border-transparent rounded-lg shadow-xl">
                        <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                            <h5 class="font-bold uppercase text-gray-600">Gender Ratio</h5>
                        </div>
                        <div class="p-5"><canvas id="chartjs-4" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                                let fm = <?php echo count($female); ?>;
                                let m = <?php echo count($male); ?>;
                                new Chart(document.getElementById("chartjs-4"), {
                                    "type": "doughnut",
                                    "data": {
                                        "labels": ["Male", "Female"],
                                        "datasets": [{
                                            "label": "Issues",
                                            "data": [m, fm],
                                            "backgroundColor": ["rgb(54, 162, 235)", "rgb(255, 99, 132)"]
                                        }]
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Graph Card-->
                    <div class="bg-white border-transparent rounded-lg shadow-xl">
                        <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                            <h5 class="font-bold uppercase text-gray-600">Age Group Ratio</h5>
                        </div>
                        <div class="p-5"><canvas id="chartjs-5" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                                let ch = <?php echo count($children); ?>;
                                let a = <?php echo count($labor); ?>;
                                let s = <?php echo count($seniors); ?>;
                                new Chart(document.getElementById("chartjs-5"), {
                                    "type": "doughnut",
                                    "data": {
                                        "labels": ["Chilren", "Adult", "Elderly"],
                                        "datasets": [{
                                            "label": "Issues",
                                            "data": [ch, a, s],
                                            "backgroundColor": ["rgba(164, 65, 65, 1)", "rgba(182, 180, 37, 1)", "rgba(0, 91, 219, 1)"]
                                        }]
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Graph Card-->
                    <div class="bg-white border-transparent rounded-lg shadow-xl">
                        <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                            <h5 class="font-bold uppercase text-gray-600">Employment Status Ratio</h5>
                        </div>
                        <div class="p-5"><canvas id="chartjs-6" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                                let se = <?php echo count($selfemployed); ?>;
                                let un = <?php echo count($unemployed); ?>;
                                let ct = <?php echo count($contractual); ?>;
                                let rg = <?php echo count($regular); ?>;
                                new Chart(document.getElementById("chartjs-6"), {
                                    "type": "doughnut",
                                    "data": {
                                        "labels": ["Self-employed", "Unemployed", "Regular", "Contractual"],
                                        "datasets": [{
                                            "label": "Issues",
                                            "data": [se, un, rg, ct],
                                            "backgroundColor": ["rgba(127, 89, 155, 1)", "rgba(97, 184, 169, 1)", "rgba(65, 164, 92, 1)", "rgba(97, 107, 184, 1)"]
                                        }]
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>
                </div>
            </div>
        </section>
    </div>
</main>
</x-app>
