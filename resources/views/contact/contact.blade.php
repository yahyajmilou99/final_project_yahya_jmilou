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
    <div class="w-[100%] flex flex-col items-center ">
        <span class="w-[100%] flex items-center justify-center text-[40px] p-8 font-bold">
            <h1>Contact <span class="text-[#2c3576]">Us</span></h1>
        </span>
        <div class="w-[100%] p-[40px] flex md:flex-row flex-col justify-between">
            <form action="{{ route("send.email") }}" method="post" class="flex flex-col gap-3 bg-[#eeeeee] md:w-[40%] w-[95%] rounded-[10px] p-10 items-center">
                @csrf
                <label for="">Enter your Name</label>
                <input type="text" name="name" id="" class="md:w-[60%] w-[90%] rounded-[10px]">
                
                <label for="">Enter Your Email </label>
                <input type="email" name="email" id="" class="md:w-[60%] w-[90%] rounded-[10px]">
    
                <label for="">Enter Your Message</label>
                <textarea name="message" id="" cols="30" rows="6" class="md:w-[60%] w-[90%] rounded-[10px]"></textarea>
                <button type="submit" class="mt-8 bg-[#2c3576] p-2 rounded-[25px] outline outline-black md:w-[45%] w-[90%] text-white font-semibold ">Send Message</button>
            </form>
            <img src="{{ asset("images/file.png") }}" alt="" class="w-[45%] md:block hidden">
        </div>
    </div>
@endsection
