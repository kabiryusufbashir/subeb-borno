<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico')}}"/>
        <!-- CSS -->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>@yield('page-title')</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <!-- Contact Info  -->
        <div class="flex justify-between text-white py-3 border-b lg:px-48 px-8 items-center bg-green-700 text-sm">
            <div class="flex">
                <span class="hidden ml-2 lg:block">
                    <span><i class="fa-solid fa-envelope"></i></span>
                    <span class="ml-1"><a href="mailto:info@bornosubeb.com">info@bornosubeb.com</a></span>
                </span>
            </div>
            <div class="flex items-center">
                <span class="ml-2">
                    Follow Us:
                </span>
                <span class="ml-2">
                    <a class="flex items-center py-1" target="_blank" href="#">
                        <span><i class="fa-brands fa-facebook text-xl"></i></span>
                    </a>
                </span>
                <span class="ml-2">
                    <a class="flex items-center py-1" target="_blank" href="#">
                        <span><i class="fa-brands fa-twitter text-xl"></i></span>
                    </a>
                </span>
                <span class="ml-2">
                    <a class="flex items-center py-1" target="_blank" href="#">
                        <span><i class="fa-brands fa-linkedin text-xl"></i></span>
                    </a>
                </span>
                <span class="ml-2">
                    <a class="flex items-center py-1" target="_blank" href="#">
                        <span><i class="fa-brands fa-instagram text-xl"></i></span>
                    </a>
                </span>
            </div>
        </div>
        <!-- NavBar  -->
        <div id="container-nav" class="flex justify-between items-center pt-1 pb-5 lg:px-48 px-8 shadow">
            <div id="container-one" class="flex justify-between w-full items-center">
                <div id="menu" class="lg:hidden cursor-pointer lg:ml-auto">
                    <svg class="w-6 h-6 text-blue-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                </div>
                <a href="/">
                    <div class="flex items-center">
                        <div>
                            <img id="logoImg" class="w-32 lg:w-20 lg:ml-0" src="{{ asset('images/logo.png') }}" alt="SUBEB Borno Logo">
                        </div>
                    </div>
                </a>
            </div>
            <div id="container-two" class="hidden lg:block mx-auto">
                <nav>
                    <ul class="lg:flex list-none font-medium items-center">
                        <li class="mx-1 {{ ($page_title == 'home') ? 'text-green-700 border-b-2 font-semibold border-green-600' : '' }}  py-1 hover:text-green-600 dropdown relative hover:border-b-2 hover:border-green-600">
                            <a class="flex" href="#" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                Home
                            </a>
                        </li>
                        <li class="mx-1 {{ ($page_title == 'home') ? 'border-b-2 border-green-600' : '' }} py-1 hover:text-green-600 text-gray-700 dropdown relative hover:border-b-2 hover:border-green-600">
                            <a class="flex" href="#" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                About Us
                            </a>
                            <ul class="dropdown-menu min-w-max absolute w-full bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="dropdownMenuButton2">
                                <li>
                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
                                        Our Company
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="mx-1 {{ ($page_title == 'Our Services - Police HMO - Promoting Excellent Healthcare') ? 'border-b-2 border-green-600' : '' }} py-1 hover:text-green-600 text-gray-700 dropdown relative hover:border-b-2 hover:border-green-600">
                            <a class="flex" href="#" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                Departments
                            </a>
                            <ul class="dropdown-menu min-w-max absolute w-full bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="dropdownMenuButton2">
                                <li>
                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
                                        Sensitization
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="mx-1 {{ ($page_title == 'Our Services - Police HMO - Promoting Excellent Healthcare') ? 'border-b-2 border-green-600' : '' }} py-1 hover:text-green-600 text-gray-700 dropdown relative hover:border-b-2 hover:border-green-600">
                            <a class="flex" href="#" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                Reports
                            </a>
                            <ul class="dropdown-menu min-w-max absolute w-full bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="dropdownMenuButton2">
                                <li>
                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
                                        Sensitization
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="mx-1 {{ ($page_title == 'media') ? 'border-b-2 border-green-600' : '' }} py-1 hover:text-green-600 text-gray-700 dropdown relative hover:border-b-2 hover:border-green-600">
                            <a class="flex" href="#" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                Media
                            </a>
                            <ul class="dropdown-menu min-w-max absolute w-full bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="dropdownMenuButton2">
                                <li>
                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
                                        News
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
                                        Gallery
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
                                        Publications
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
                                        Testimonials
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">
                                        Downloads
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="mx-1 {{ ($page_title == 'Contact Us - Police HMO - Promoting Excellent Healthcare') ? 'border-b-2 border-green-600' : '' }} py-1 hover:text-green-600 text-gray-700 hover:border-b-2 hover:border-green-600"><a href="#">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
            <div id="container-three" class="">
                <div class="lg:flex hidden">
                    <div class="my-auto mr-2 bg-green-600 rounded-md text-white px-6 py-2">
                        Apply Now
                    </div>
                    <div class="bg-yellow-600 rounded-md text-white px-6 py-2 ml-auto">
                        <span>Projects</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Body Content  -->
        <div class="relative">
            @yield('body-content')
        </div>
        <!-- End of Body Content  -->

        <!-- Footer  -->
        <div class="relative top-12">
            <div id="footer" class="bg-gray-100 py-12 px-8 lg:px-24 lg:grid grid-cols-4 gap-8 text-gray-900">
                <div class="col-span-2 mb-3 flex lg:pt-12">
                    <div class="pt-5">
                        <img class="w-48 lg:w-48" src="{{ asset('images/logo.png') }}" alt="Borno SUBEB Logo">
                    </div>
                    <div class="ml-4">
                        <p class="my-2">
                            Borno State Universal Basic Education Board was established pursuant to the Borno State Compulsory Free Universal Basic Education Law 2005.
                        </p>
                        <p>
                            The scheme was introduced with the aim of providing free, universal and basic education for every Nigerian child between the ages of 6 and 15. 
                        </p>
                    </div>
                </div>
                <div class="col-span-1">
                    <div>
                        <h1 class="text-2xl font-bold mb-4">Navigations</h1>
                        <nav class="list-none text-gray-900">
                            <li class="py-1 hover:text-gray-800">
                                <a class="flex items-center py-1" href="#">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="py-1 hover:text-gray-800">
                                <a class="flex items-center py-1" href="#">
                                    <span>About Us</span>
                                </a>
                            </li>
                            <li class="py-1 hover:text-gray-800">
                                <a class="flex items-center py-1" href="#">
                                    <span>Departments</span>
                                </a>
                            </li>
                            <li class="py-1 hover:text-gray-800">
                                <a class="flex items-center py-1" href="#">
                                    <span>Reports</span>
                                </a>
                            </li>
                            <li class="py-1 hover:text-gray-800">
                                <a class="flex items-center py-1" href="#">
                                    <span>Media</span>
                                </a>
                            </li>
                            <li class="py-1 hover:text-gray-800">
                                <a class="flex items-center py-1" href="#">
                                    <span>Contact Us</span>
                                </a>
                            </li>
                        </nav>
                    </div>
                </div>
                <div class="col-span-1">    
                    <div>
                        <h1 class="text-2xl font-bold mb-4">Contact Us</h1>
                        <div class="my-2">
                            P.M.B 1233, No 1 Jos Road Maiduguri Borno State 
                        </div>
                        <div class="my-2">
                            info@bornosubeb.com
                        </div>
                        <nav class="list-none text-gray-900 flex">
                            <li class="py-1 hover:text-gray-800">
                                <a class="flex items-center py-1" href="#">
                                    <span><i class="fa-brands fa-facebook text-xl"></i></span> &nbsp;&nbsp;
                                </a>
                            </li>
                            <li class="py-1 hover:text-gray-800">
                                <a class="flex items-center py-1" href="#">
                                    <span><i class="fa-brands fa-twitter text-xl"></i></span> &nbsp;&nbsp;
                                </a>
                            </li>
                            <li class="py-1 hover:text-gray-800">
                                <a class="flex items-center py-1" href="#">
                                    <span><i class="fa-brands fa-linkedin text-xl"></i></span> &nbsp;&nbsp;
                                </a>
                            </li>
                            <li class="py-1 hover:text-gray-800">
                                <a class="flex items-center py-1" href="#">
                                    <span><i class="fa-brands fa-instagram text-xl"></i></span> &nbsp;&nbsp;
                                </a>
                            </li>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="py-7 text-center text-xs bg-green-700 text-white">
                <footer>
                    Designed and Developed By <a href="https://teampiccolo.com">Team Piccolo</a> <br>
                    Copyright © @php echo date('Y') @endphp Borno State Universal Basic Board. All Rights Reserved 
                </footer>
            </div>
        </div>
        <!-- End of Footer  -->
    </body>
</html>
