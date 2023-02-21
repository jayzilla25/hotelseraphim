<x-app>
@include('partials._adminnav')
<main class="sm:container mx-5 sm:mx-auto mt-28 mb-20">
    <div class="w-full sm:px-6">

        @include('partials._session')

        <section class="flex flex-col break-words bg-white border-1 rounded-md shadow-lg">

            <header class="font-semibold bg-sky-600 text-gray-200 py-5 px-6 sm:py-6 sm:px-8 rounded-t-md">
                Dashboard
            </header>

            <div class="w-full p-6">
                <p class="text-gray-700">
                    You are logged in as an Admin!
                </p>
            </div>
        </section>
        <section>
            <div id="main" class="main-content flex-1 bg-gray-100 pt-5 pb-24 md:pb-5 bg-[url('/images/natural_paper.png')]">

                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-600 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full py-5 px-4 bg-blue-600"><i class="fa-solid fa-business-time fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Active Officials</h2>
                                    <a href="/officials/active" class="inline font-bold text-3xl">{{count($activeofficials)}}<span class="text-blue-500 pl-2 hover:text-blue-600"><i class="fa-solid fa-circle-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-red-200 to-red-100 border-b-4 border-red-500 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full py-5 px-4 bg-red-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Total Users</h2>
                                    <a href="/users" class="inline font-bold text-3xl">{{count($users)}}<span class="text-red-500 pl-2 hover:text-red-600"><i class="fa-solid fa-circle-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-yellow-600"><i class="fas fa-tasks fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Total Logs</h2>
                                    <a href="/logs" class="inline font-bold text-3xl">{{count($logs)}}<span class="text-yellow-500 pl-2 hover:text-yellow-600"><i class="fa-solid fa-circle-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>

                <div class="flex flex-row flex-wrap flex-grow mt-2">

                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Graph Card-->
                    <div class="bg-white border-transparent rounded-lg shadow-xl">
                        <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                            <h2 class="font-bold uppercase text-gray-600">Log Activity</h2>
                        </div>
                        <div class="p-5">
                            <canvas id="chartjs-1" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                                let six = <?php echo count($log_7); ?>;
                                let five = <?php echo count($log_6); ?>;
                                let four = <?php echo count($log_5); ?>;
                                let three = <?php echo count($log_4); ?>;
                                let two = <?php echo count($log_3); ?>;
                                let one = <?php echo count($log_2); ?>;
                                let now = <?php echo count($log_1); ?>;
                                

                                new Chart(document.getElementById("chartjs-1"), {
                                    "type": "bar",
                                    "data": {
                                        "labels": ["6 days ago", "5 days ago", "4 days ago", "3 days ago", "2 days ago", "1 day ago", "Today"],
                                        "datasets": [{
                                            "label": "Logs",
                                            "data": [six, five, four, three, two, one, now],
                                            "fill": false,
                                            "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)", "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"],
                                            "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)", "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)"],
                                            "borderWidth": 1
                                        }]
                                    },
                                    "options": {
                                        "scales": {
                                            "yAxes": [{
                                                "ticks": {
                                                    "beginAtZero": true
                                                }
                                            }]
                                        }
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
                            <h5 class="font-bold uppercase text-gray-600">User Types Ratio</h5>
                        </div>
                        <div class="p-5"><canvas id="chartjs-4" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                                let admin = <?php echo count($admin); ?>;
                                let official = <?php echo count($official); ?>;
                                let user = <?php echo count($user); ?>;
                                new Chart(document.getElementById("chartjs-4"), {
                                    "type": "doughnut",
                                    "data": {
                                        "labels": ["Admin", "Official", "User"],
                                        "datasets": [{
                                            "label": "Issues",
                                            "data": [admin, official, user],
                                            "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
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
                            <h5 class="font-bold uppercase text-gray-600">Log Action Types Ratio</h5>
                        </div>
                        <div class="p-5"><canvas id="chartjs-5" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                                let create = <?php echo count($create); ?>;
                                let update = <?php echo count($update); ?>;
                                let destroy = <?php echo count($delete); ?>;
                                new Chart(document.getElementById("chartjs-5"), {
                                    "type": "doughnut",
                                    "data": {
                                        "labels": ["Create", "Update", "Delete"],
                                        "datasets": [{
                                            "label": "Issues",
                                            "data": [create, update, destroy],
                                            "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
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
