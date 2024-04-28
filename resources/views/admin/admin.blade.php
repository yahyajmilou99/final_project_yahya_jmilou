@extends('layouts.index')

@section('content')
    <div class="bg-[#eeeeee] flex flex-col">
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
        <div class="flex gap-7  items-start p-10">
            <div class=" w-[45%] flex flex-col gap-5 items-center  justify-center">
                <h1 class="text-[30px] font-bold">Create Menu</h1>
                <form class="flex flex-col gap-4 w-[100%]  items-center justify-center p-4 "
                    action="{{ route('menu.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="flex flex-col gap-2 w-[70%] ">
                        <label for="name">Enter Menu's Name</label>
                        <input class="w-[100%]  " type="text" name="name" id="name">
                    </div>

                    <div class="flex flex-col gap-2 w-[70%] ">
                        <label for="price">Enter Menu's Price</label>
                        <input class="w-[100%]  " type="number" name="price" id="price">
                    </div>

                    <div class="flex flex-col gap-2 w-[70%] ">
                        <label for="desc">Enter Menu's Description</label>
                        <input class="w-[100%]  " type="text" name="description" id="desc">
                    </div>

                    <div class=" flex-col gap-2 w-[70%] hidden ">
                        <label for="rating">Enter Menu's Rating</label>
                        <input class="w-[100%]  " type="number" name="rating" id="rating">
                    </div>

                    <div class="flex flex-col gap-2 w-[70%]">
                        <label for="img">Enter Menu's Image</label>
                        <input class="w-[100%]  " type="file" name="img" id="">
                    </div>

                    <button class="w-[70%] rounded bg-[#2c3576] p-3">Submit</button>
                </form>
            </div>

            <div class=" p-[20px] gap-5 w-[55%] h-[fit-content]  flex flex-wrap justify-center">
                @foreach ($menus as $menu)
                    <div class=" w-[46%] bg-white flex flex-col gap-7 p-6 rounded-[20px] outline">
                        <img src="{{ asset('storage/images/' . $menu->img) }}" class="w-[300px] h-[200px]" alt="">
                        <div>
                            <h1 class="font-bold text-[22px]">{{ $menu->name }}</h1>
                            <h1 class="text-[17px]">{{ $menu->price }} dh</h1>
                            <p class="text-[17px]"><span>Rating :</span> {{ $menu->rating }}/5</p>
                        </div>
                        <form action="{{ route('menu.destroy', $menu) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-600 px-3 py-2 w-[90%] rounded-full">Delete</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
