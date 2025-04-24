<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" id="main">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @hasrole('user')
                        <div>Welcome to the dashboard!</div>
                        @php
                             $motivationalQuotes = [
                                "Believe you can and you're halfway there. – Theodore Roosevelt",
                                "Your limitation—it's only your imagination.",
                                "Push yourself, because no one else is going to do it for you.",
                                "Great things never come from comfort zones.",
                                "Dream it. Wish it. Do it.",
                                "Success doesn’t just find you. You have to go out and get it.",
                                "The harder you work for something, the greater you’ll feel when you achieve it.",
                                "Dream bigger. Do bigger.",
                                "Don’t stop when you’re tired. Stop when you’re done.",
                                "Wake up with determination. Go to bed with satisfaction.",
                                "Do something today that your future self will thank you for.",
                                "Little things make big days.",
                                "It’s going to be hard, but hard does not mean impossible.",
                                "Don’t wait for opportunity. Create it.",
                                "Sometimes we’re tested not to show our weaknesses, but to discover our strengths.",
                                "The key to success is to focus on goals, not obstacles.",
                                "Dreams don’t work unless you do.",
                                "Success is not for the lazy.",
                                "You don’t have to be great to start, but you have to start to be great.",
                                "Act as if what you do makes a difference. It does. – William James",
                                "Success is not final, failure is not fatal: it is the courage to continue that counts. – Winston Churchill",
                                "It is never too late to be what you might have been. – George Eliot",
                                "Don’t let yesterday take up too much of today. – Will Rogers",
                                "Opportunities don't happen, you create them. – Chris Grosser",
                                "Everything you’ve ever wanted is on the other side of fear. – George Addair",
                                "Hardships often prepare ordinary people for an extraordinary destiny. – C.S. Lewis",
                                "Believe in yourself and all that you are. – Christian D. Larson",
                                "Doubt kills more dreams than failure ever will. – Suzy Kassem",
                                "A winner is a dreamer who never gives up. – Nelson Mandela",
                                "The only way to achieve the impossible is to believe it is possible. – Charles Kingsleigh",
                                "Work hard in silence, let your success be your noise. – Frank Ocean",
                                "Difficulties in life are intended to make us better, not bitter. – Dan Reeves",
                                "Failure will never overtake me if my determination to succeed is strong enough. – Og Mandino",
                                "You may have to fight a battle more than once to win it. – Margaret Thatcher",
                                "Start where you are. Use what you have. Do what you can. – Arthur Ashe",
                                "Don’t limit your challenges. Challenge your limits.",
                                "Do what you can, with what you have, where you are. – Theodore Roosevelt",
                                "The way to get started is to quit talking and begin doing. – Walt Disney",
                                "Courage is one step ahead of fear. – Coleman Young",
                                "Difficulties strengthen the mind, as labor does the body. – Seneca",
                                "Live as if you were to die tomorrow. Learn as if you were to live forever. – Mahatma Gandhi",
                                "Success is getting what you want. Happiness is wanting what you get. – Dale Carnegie",
                                "Be so good they can’t ignore you. – Steve Martin",
                                "If everything seems under control, you're not going fast enough. – Mario Andretti",
                                "Energy and persistence conquer all things. – Benjamin Franklin",
                                "Don’t count the days, make the days count. – Muhammad Ali",
                                "If you want to achieve greatness, stop asking for permission. – Anonymous",
                                "Make today so awesome that yesterday gets jealous.",
                                "Everything you can imagine is real. – Pablo Picasso"
                                ];

                                $index = array_rand($motivationalQuotes);

                        @endphp

                        <div class="text-2xl my-8 font-semibold text-orange-500">
                            <h1 class="animate-pulse">{{ strtoupper($motivationalQuotes[$index]) }}</h1>
                        </div>

                    @endhasrole

                    @hasrole('admin')
                    <div class="min-w-sm w-full bg-white rounded-lg shadow-sm dark:bg-gray-800 p-4 md:p-6">
                        <div class="flex justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center me-3">
                                    <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                                        <path d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
                                        <path d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-1">3.4k</h5>
                                    <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Leads generated per week</p>
                                </div>
                            </div>
                            <div>
                              <span class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-green-900 dark:text-green-300">
                                <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
                                </svg>
                                42.5%
                              </span>
                            </div>
                        </div>

                        <div class="grid grid-cols-2">
                            <dl class="flex items-center">
                                <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal me-1">Money spent:</dt>
                                <dd class="text-gray-900 text-sm dark:text-white font-semibold">$3,232</dd>
                            </dl>
                            <dl class="flex items-center justify-end">
                                <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal me-1">Conversion rate:</dt>
                                <dd class="text-gray-900 text-sm dark:text-white font-semibold">1.2%</dd>
                            </dl>
                        </div>

                        <div id="column-chart"></div>
                        <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                            <div class="flex justify-between items-center pt-5">
                                <!-- Button -->
                                <button
                                    id="dropdownDefaultButton"
                                    data-dropdown-toggle="lastDaysdropdown"
                                    data-dropdown-placement="bottom"
                                    class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
                                    type="button">
                                    <span id="buttonLabel">Last 7 days</span>
                                    <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white fetchDaysData" data-url="{{ route('yesterday') }}" href="javascript:void(0)">Yesterday</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white fetchDaysData" data-url="{{ route('today') }}" href="javascript:void(0)">Today</a>
                                        </li>
                                        <li>
                                            <a {{--onclick="lastSevenDays()"--}} data-url="{{ route('last-seven-day-appointment') }}" href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white fetchDaysData">Last 7 days</a>
                                        </li>
                                        <li>
                                            <a {{--onclick="last30Days()"--}} data-url="{{ route('last-thirty-day-appointment') }}" href="javascript:void(0)" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white fetchDaysData">Last 30 days</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-url="{{ route('90.days') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white fetchDaysData">Last 90 days</a>
                                        </li>
                                    </ul>
                                </div>
                                <a
                                    href="#"
                                    class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                                    Leads Report
                                    <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endhasrole
                </div>
            </div>
        </div>
    </div>

    <x-slot name="script">
        <script>
            window.addEventListener('DOMContentLoaded', function () {
                console.log("You are Above Echo Script")
                window.Echo.channel('system-maintenance')
                    .listen('SystemMaintenanceEvent', (event) => {
                        let location = document.getElementById('main');
                        let div = document.createElement('div');
                        div.style.width = '100%';
                        div.style.height = '32px';
                        div.style.textAlign = 'center';
                        div.style.lineHeight = '32px';
                        div.style.background = '#ffab44';
                        div.style.marginBottom = '16px';
                        div.innerHTML = 'WARNING: The system will be go down for maintenance on ' + event.time;
                        location.insertBefore(div, location.firstChild)
                    });
            })

        </script>

        @hasrole('admin')
            <script>


                    function fetchData(url, buttonLebal = '') {
                        $.ajax({
                            url: url,
                            method: 'GET',
                            success: (response) => {

                                let data = [];

                                if (response.status == true) {

                                    data = response.data

                                }

                                const options = {
                                    colors: ["#1A56DB", "#FDBA8C"],
                                    series: [

                                        {
                                            name: "Customers",
                                            color: "#FDBA8C",
                                            // data: [
                                            //     { x: "Mon", y: 232 },
                                            //     { x: "Tue", y: 113 },
                                            //     { x: "Wed", y: 341 },
                                            //     { x: "Thu", y: 224 },
                                            //     { x: "Fri", y: 522 },
                                            //     { x: "Sat", y: 411 },
                                            //     { x: "Sun", y: 243 },
                                            // ],
                                            data
                                        },
                                    ],
                                    chart: {
                                        type: "bar",
                                        height: "420px",
                                        fontFamily: "Inter, sans-serif",
                                        toolbar: {
                                            show: false,
                                        },
                                    },
                                    plotOptions: {
                                        bar: {
                                            horizontal: false,
                                            columnWidth: "70%",
                                            borderRadiusApplication: "end",
                                            borderRadius: 8,
                                        },
                                    },
                                    tooltip: {
                                        shared: true,
                                        intersect: false,
                                        style: {
                                            fontFamily: "Inter, sans-serif",
                                        },
                                    },
                                    states: {
                                        hover: {
                                            filter: {
                                                type: "darken",
                                                value: 1,
                                            },
                                        },
                                    },
                                    stroke: {
                                        show: true,
                                        width: 0,
                                        colors: ["transparent"],
                                    },
                                    grid: {
                                        show: false,
                                        strokeDashArray: 4,
                                        padding: {
                                            left: 2,
                                            right: 2,
                                            top: -14
                                        },
                                    },
                                    dataLabels: {
                                        enabled: false,
                                    },
                                    legend: {
                                        show: false,
                                    },
                                    xaxis: {
                                        floating: false,
                                        labels: {
                                            show: true,
                                            style: {
                                                fontFamily: "Inter, sans-serif",
                                                cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                                            }
                                        },
                                        axisBorder: {
                                            show: false,
                                        },
                                        axisTicks: {
                                            show: false,
                                        },
                                    },
                                    yaxis: {
                                        show: false,
                                    },
                                    fill: {
                                        opacity: 1,
                                    },
                                }

                                if(document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {

                                    $("#column-chart").html("")
                                    const chart = new ApexCharts(document.getElementById("column-chart"), options);
                                    chart.render();

                                    if(buttonLebal != '') {
                                        $("#buttonLabel").text(buttonLebal)
                                    }

                                }
                            },
                            error: (xhr, status, error) => {
                                // Handle error
                                console.error('Error confirming appointment:', error);
                                alert('An error occurred. Please try again.');
                            }
                        });
                    }


                $(document).ready(function(){
                    
                    window.Echo.private("bookingRequest")
                        .listen('CustomerBookingRequestEvent', (event) => {
                            let mainDiv = $('#main');
                            console.log(event, mainDiv);

                            let { id, appointment_time, appointment_date } = event.appointment;

                            let message = $(`<div class="bg-green-500 p-4 m-4 text-center text-white">A New appointment has been received with id: ${id} and time: ${appointment_time} on date: ${appointment_date}</div>`);

                            // Prepend inside the mainDiv
                            mainDiv.prepend(message);

                        });

                    fetchData("{{ route('last-seven-day-appointment') }}");

                    $(document).on('click', '.fetchDaysData', function (event) {

                        let url = $(this).data('url');

                        fetchData(url, $(this).text());
                    })
                })

            </script>
        @endhasrole

    </x-slot>

</x-app-layout>
