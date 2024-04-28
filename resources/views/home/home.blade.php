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
                        @if (Auth::check())
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                                <li>
                                    <button
                                        class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:scale-125 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent transition-all">LogOut</button>
                                </li>
                        </form>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="section1 hero bg-[#eeeeee]">
            <div class="leftPart">
                <h1 class="sec1Title font-bold">ENJOY YOUR HEALTHY DELICIOUS FOOD</h1>
                <P class="sec1Text">Indulge your taste buds. Welcome to <span class="font-bold">GeekRestau</span>."
                    Highlight the experience: "More than just a meal, it's a gathering. Join us at <span
                        class="font-bold">GeekRestau</span>.</P>
                <div class="btnsPart">
                    <button class="bg-[#2c3576] font-semibold p-1"><a href="{{ route('reservation') }}">Book a
                            Table</a></button>
                </div>
            </div>
            <img src="{{ asset('images/file.png') }}" alt="" class="sec1Img md:w-[450px] w-[340px]">
        </section>
        <section
            class="section2 flex items-center flex-col md:gap-10 gap-8 justify-center bg-[#ffffff] md:p-[50px] pt-[35px] pb-[35px]">
            <h1 class="text-[40px] font-bold">Our <span class="text-[#2c3576]">Restaurant</span></h1>
            <div id="default-carousel" class="relative w-full md:w-[80%] md:h-[75vh] h-[40vh]" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative overflow-hidden h-[100%]">
                    <!-- Item 1 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <img src="{{ asset('images/about.jpg') }}"
                            class="h-[100%] md:h-[fit-content] absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <img src="{{ asset('images/events-1.jpg') }}"
                            class="h-[100%] md:h-[fit-content] absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <img src="{{ asset('images/events-2.jpg') }}"
                            class="h-[100%] md:h-[fit-content] absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <img src="{{ asset('images/gallery-2.jpg') }}"
                            class="h-[100%] md:h-[fit-content] absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="  absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class=" absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </section>
        <section class="section5">
            <div class="sec5Top">
                <p class="text-[32px]">OUR MENU</p>
                <h1 class="font-bold">CHECK OUR <span>GEEK MENU</span></h1>
            </div>
            <div class="sec5bottom">
                <div class="menu font-bold">
                    <p>Menu</p>
                </div>
                <div class="menuContent">
                    @foreach ($menus as $menu)
                        <div class="meal">
                            <img src="{{ asset('storage/images/' . $menu->img) }}" alt="" width="250px">
                            <h3 class="font-bold text-[32px]">{{ $menu->name }}</h3>
                            <p class="text-center">{{ $menu->description }}</p>
                            <h6 class="font-bold">{{ $menu->price }} Dhs</h6>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="section11 bg-white">
            <div class="sec11Top">
                <h1 class="font-bold text-[30px]">Our <span class="text-[#2c3576]">Location</span></h1>
            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26600.523252012834!2d-7.579739335888302!3d33.55167691000108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda63324fd2cbcbb%3A0x4716ad383449d2e!2sSidi%20Othmane%2C%20Casablanca!5e0!3m2!1sfr!2sma!4v1705620028019!5m2!1sfr!2sma"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="sec11Contact">
                <div class="contactItems">
                    <div class="roundedIconSec11">
                        <i class="fa-solid fa-map"></i>
                    </div>
                    <div class="contactTxt">
                        <h3 class="font-bold">Our <span class="text-[#ffff]">Address</span></h3>
                        <p class="text-white font-semibold">123 Rue des Saveurs
                            (near Hassan II Mosque)
                            Casablanca, Morocco</p>
                    </div>
                </div>
                <div class="contactItems">
                    <div class="roundedIconSec11">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="contactTxt">
                        <h3 class="font-bold">Email <span class="text-[#ffff]">Us</span></h3>
                        <p class="text-white font-semibold">geekrestau@food.ma</p>
                    </div>
                </div>
                <div class="contactItems">
                    <div class="roundedIconSec11">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="contactTxt">
                        <h3 class="font-bold">Call <span class="text-[#ffff]">Us</span></h3>
                        <p class="text-white font-semibold">+2126 12 34 27 82</p>
                    </div>
                </div>
                <div class="contactItems">
                    <div class="roundedIconSec11">
                        <i class="fa-solid fa-share-nodes"></i>
                    </div>
                    <div class="contactTxt">
                        <h3 class="font-bold">Opening <span class="text-[#ffff]">Hours</span></h3>
                        <p class="text-white font-semibold"> From 9 To 6</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="footerTop">
            <div class="footerParts">
                <i class="fa-solid fa-location-dot"></i>
                <div class="footerParttxt">
                    <h4>Address</h4>
                    <div>
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022-US</p>
                    </div>
                </div>
            </div>
            <div class="footerParts">
                <i class="fa-solid fa-phone"></i>
                <div class="footerParttxt">
                    <h4>Reservations</h4>
                    <div>
                        <div>
                            <p><span>Phone:</span> +1 5589 55499 55</p>
                        </div>
                        <div>
                            <p><span>Email:</span> info@example.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footerParts">
                <i class="fa-regular fa-clock"></i>
                <div class="footerParttxt">
                    <h4>Opening Hours</h4>
                    <div>
                        <p>Mon-Sat: 9AM - 6pm</p>
                        <p>Sunday: Closed</p>
                    </div>
                </div>
            </div>

            <div class="footerIcons">
                <h4>Follow Us</h4>
                <div class="icons">
                    <div class="roundedIcnFtr">
                        <i class="fa-brands fa-twitter"></i>
                    </div>
                    <div class="roundedIcnFtr">
                        <i class="fa-brands fa-facebook"></i>
                    </div>
                    <div class="roundedIcnFtr">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <div class="roundedIcnFtr">
                        <i class="fa-brands fa-linkedin"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="footerBottom">
            <p>Copyright <span>GeekRestau</span> All Rights Reserved</p>
            <p>Designed by Yahya Jmilou</p>
        </div>
    </footer>
@endsection
