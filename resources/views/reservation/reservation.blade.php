@extends('layouts.index')

@section('content')
    <header>
        <nav class="bg-[#2c3576] border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 md:px-16">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('images/file.png') }}" class="h-10" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-gray-200">GeekRestau</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto md:gap-8 " id="navbar-default">
                    <ul
                        class="font-medium flex md:gap-12 flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-[#2c3576] md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-[#2c3576] dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="{{ route('home') }}"
                                class="block py-2 px-3 text-white  rounded md:bg-transparent md:p-0 dark:text-white md:hover:scale-125 md:dark:text-blue-500 transition-all">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('reservation') }}"
                                class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:scale-125 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent transition-all">Reservation</a>
                            </li>
                            
                        <li>
                            <a href="{{ route('contact') }}"
                                class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:scale-125 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent transition-all">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    
    <div class="p-[30px] flex flex-col gap-[60px]">
        <span class="w-[100%] flex justify-center flex-col gap-8 items-center">
            <h1 class="text-[40px] font-bold">Reservation</h1>
        </span>
        
        <div class="w-[100%]  flex justify-center  ">
            <div id='calendar' class=" h-[80vh] w-[60vw] md:flex hidden"></div>
        </div>
    </div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <!-- Modal toggle -->
    <button data-modal-target="default-modal" data-modal-toggle="default-modal"
        class="hidden text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button" id="clickMe">
        Toggle modal
    </button>
    
    <!-- Main modal -->
    <div id="default-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg p-10 shadow dark:bg-gray-700">
                <!-- Modal header -->
                <form method="post" class="w-full  flex flex-col gap-y-5 " action="/calendar/store">
                    @csrf
                    <label for="">Choose Table</label>
                    <select name="zone_id" id="mySelect">
                        @foreach ($tables as $table)
                            <option value="{{ $table->id }}"><a href="">{{ $table->name }}</a></option>
                        @endforeach
                    </select>
                    <label for="">Your Name</label>
                    <input name="title" required placeholder="Event Title" type="text">

                    <label for="">Reservation Day</label>
                    <input name="dateStart" min="{{ date('Y-m-d') }}" value="{{ date('Y-m-d') }}" id="date-start"
                        type="date">
                    <label for="">Start time</label>
                    <input name="timeStart" step="1800" required min="08:00:00" max="19:00:00" value="09:30:00"
                        id="time-start" type="time">


                    <label class="hidden" for="">end Day</label>
                    <input class="hidden" name="dateEnd" id="date-end" type="date">
                    <label for="">end time</label>
                    <input name="timeEnd" id="time-end" type="time">


                    <button class="w-f
                    py-3 bg-[#2c3576] font-semibold text-white">Get
                        Reservation</button>
                </form>
            </div>
        </div>
    </div>

    <form method="post" class="md:hidden p-4 w-full  flex flex-col gap-y-5 " action="/calendar/store">
        @csrf
        <label for="">Choose Table</label>
        <select name="zone_id" id="mySelect">
            @foreach ($tables as $table)
                <option value="{{ $table->id }}"><a href="">{{ $table->name }}</a></option>
            @endforeach
        </select>
        <label for="">Your Name</label>
        <input name="title" required placeholder="Event Title" type="text">

        <label for="">Reservation Day</label>
        <input name="dateStart" min="{{ date('Y-m-d') }}" value="{{ date('Y-m-d') }}" id="date-start" type="date">
        <label for="">Start time</label>
        <input name="timeStart" step="1800" required min="08:00:00" max="19:00:00" value="09:30:00" id="time-start"
            type="time">


        {{-- <label class="hidden" for="">end Day</label>
        <input class="hidden" name="dateEnd" id="date-end" type="date"> --}}
        <label for="">end time</label>
        <input required name="timeEnd" id="time-end" type="time">


        <button class="w-f
        py-3 bg-[#2c3576] font-semibold text-white">Get Reservation</button>
    </form>


    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
        class="hidden text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button" id="error">
        Toggle modal
    </button>



    <div id="popup-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-bold text-gray-500 dark:text-gray-400">You can't reserve more than one day
                    </h3>
                    <button data-modal-hide="popup-modal" type="button"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Close
                    </button>

                </div>
            </div>
        </div>
    </div>


































    <script>
        document.addEventListener('DOMContentLoaded', async function() {

            const {
                data
            } = await axios.get("/calendar/show")

            const events = data.events;
            console.log(events);



            var myCalendar = document.getElementById('calendar');


            var calendar = new FullCalendar.Calendar(myCalendar, {
                headerToolbar: {
                    left: 'dayGridMonth,timeGridWeek,timeGridDay',
                    center: 'title',
                    right: 'listDay'
                },
                views: {
                    listDay: { // Customize the name for listDay
                        buttonText: 'Day Reservations',
                    },

                    timeGridWeek: {
                        buttonText: 'Week', // Customize the button text
                    },
                    timeGridDay: {
                        buttonText: "Day",
                    },
                    dayGridMonth: {
                        buttonText: "Month",
                    },

                },

                initialView: "timeGridWeek",
                slotMinTime: "09:00:00", // min  time  appear in the calendar
                slotMaxTime: "19:00:00",
                nowIndicator: true,
                selectable: true,
                selectMirror: true,
                selectOverlap: true,
                weekends: true,

                // events  hya  property dyal full calendar
                //  kat9bel array dyal objects  khass  i kono jayin 3la chkl  object fih  start  o end  7it hya li kayfahloha
                events: events,

                selectAllow: (info) => {
                    let instant = new Date()
                    return info.start > instant
                },

                select: (info) => {

                    let start = info.start
                    let end = info.end


                    if (end.getDate() - start.getDate() > 0 && !info.allDay) {
                        // alert("rak khditi bzaf dyal l wa9t")
                        document.getElementById("error").click()
                        calendar.unselect()
                        return
                    }
                    document.getElementById("date-start").value = formatDate(start).day
                    if (info.allDay) {
                        document.getElementById("date-end").value = formatDate(start).day
                        document.getElementById("time-start").value = "09:00:00"
                        document.getElementById("time-end").value = "19:00:00"
                    } else {
                        document.getElementById("date-end").value = formatDate(end).day
                        document.getElementById("time-start").value = formatDate(start).time
                        document.getElementById("time-end").value = formatDate(end).time
                    }


                    document.getElementById("clickMe").click()


                },

                eventClick: (info) => {
                    // alert("event clicked")

                    // console.log(info);
                }


            });


            calendar.render();


            function formatDate(date) {
                let year = String(date.getFullYear())
                let month = String(date.getMonth() + 1).padStart(2, 0)
                let day = String(date.getDate()).padStart(2, 0)

                let hour = String(date.getHours()).padStart(2, 0)
                let min = String(date.getMinutes()).padStart(2, 0)
                let sec = String(date.getSeconds()).padStart(2, 0)

                return {
                    day: `${year}-${month}-${day}`,
                    time: `${hour}:${min}:${sec}`
                }


            }
        });

        const selectedValue = document.getElementById("mySelect").value;
        // console.log("Selected value:", selectedValue);

        let selectedZone = document.getElementById("selectedZone")

        selectedZone.value = selectedValue
        // console.log(selectedZone.value);

        function handleSelectChange() {
            const selectedValue = document.getElementById("mySelect").value;
            // console.log("Selected value:", selectedValue);
            let selectedZone = document.getElementById("selectedZone")
            // selectedValue = 
            selectedZone.value = selectedValue
            // console.log(selectedZone.value);
            // Perform actions based on the selected value (e.g., update other form elements, make an AJAX request)
        }
    </script>
@endsection
