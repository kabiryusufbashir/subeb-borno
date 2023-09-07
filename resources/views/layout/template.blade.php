<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico')}}"/>
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('build/assets/app-d07431ff.css') }}">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('css/production.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>@yield('page-title')</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <!-- Navigation  -->
        <div id="navDesktop" class="z-40 w-full">
            <!-- Contact Info  -->
            <div id="contactInfo" class="flex justify-between text-white lg:py-3 py-5 border-b lg:px-48 px-8 items-center z-30 bg-green-700 text-sm">
                <div class="flex">
                    <div id="menu" class="lg:hidden cursor-pointer">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    </div>
                </div>
                <div class="flex">
                    <span class="hidden ml-2 lg:block">
                        <span><i class="fa-solid fa-envelope bg-white py-2 px-3 rounded-full text-green-700 lg:text-xl text-sm"></i></span>
                        <span class="ml-1"><a href="mailto:info@bosubeb.ng">info@bosubeb.ng</a></span>
                    </span>
                </div>
                <div class="flex items-center">
                    <span class="ml-2">
                        <a class="flex items-center py-1" target="_blank">
                            <span><i class="fa-brands fa-facebook lg:text-xl text-sm bg-white lg:py-2 py-1 lg:px-3 px-2 rounded-full text-green-700"></i></span>
                        </a>
                    </span>
                    <span class="ml-2">
                        <a class="flex items-center py-1" target="_blank">
                            <span><i class="fa-brands fa-twitter lg:text-xl text-sm bg-white lg:py-2 py-1 lg:px-3 px-2 rounded-full text-green-700"></i></span>
                        </a>
                    </span>
                    <span class="ml-2">
                        <a class="flex items-center py-1" target="_blank">
                            <span><i class="fa-brands fa-linkedin lg:text-xl text-sm bg-white lg:py-2 py-1 lg:px-3 px-2 rounded-full text-green-700"></i></span>
                        </a>
                    </span>
                    <span class="ml-2">
                        <a class="flex items-center py-1" target="_blank">
                            <span><i class="fa-brands fa-instagram lg:text-xl text-sm bg-white lg:py-2 py-1 lg:px-3 px-2 rounded-full text-green-700"></i></span>
                        </a>
                    </span>
                </div>
            </div>
            <!-- NavBar  -->
            <div id="container-nav" class="flex justify-between items-center py-5 lg:px-48 px-8">
                <div id="container-one" class="flex justify-between w-full items-center">
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
                            <li class="mx-1 {{ ($page_title == 'Home - Borno SUBEB') ? 'text-green-700 border-b-2 font-semibold border-green-600' : '' }}  py-1 hover:text-green-600 text-white dropdown relative hover:border-b-2 hover:border-green-600">
                                <a class="flex" href="/" >
                                    Home
                                </a>
                            </li>
                            <li class="mx-1 {{ ($page_title == 'About Us - Borno SUBEB') ? 'border-b-2 border-green-600' : '' }} py-1 hover:text-green-600 text-white dropdown relative hover:border-b-2 hover:border-green-600">
                                <a class="flex" href="{{ route('about-us') }}">
                                    About Us
                                </a>
                            </li>
                            <li class="mx-1 {{ ($page_title == 'Departments - Borno SUBEB') ? 'border-b-2 border-green-600' : '' }} py-1 hover:text-green-600 text-white dropdown relative hover:border-b-2 hover:border-green-600">
                                <a class="flex" href="{{ route('departments') }}">
                                    Departments
                                </a>
                                <ul class="dropdown-menu min-w-max absolute w-full bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="dropdownMenuButton2">
                                    <li>
                                        <a href="/departments#directorateOfSchoolServices" class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100">
                                            School Services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/departments#directorateOfQualityAssurance" class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100">
                                            Quality Assurance
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/departments#directorateOfFinanceAndAccounts" class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100">
                                            Finance and Accounts
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/departments#directorateOfPlanningResearchAndStatistics" class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100">
                                            Planning Research and Statistics
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/departments#directorateOfSocialMobilization" class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100">
                                            Social Mobilization
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="mx-1 {{ ($page_title == 'Reports - Borno SUBEB') ? 'border-b-2 border-green-600' : '' }} py-1 hover:text-green-600 text-white dropdown relative hover:border-b-2 hover:border-green-600">
                                <a class="flex" >
                                    Reports
                                </a>
                            </li>
                            <li class="mx-1 {{ ($page_title == 'BESDA - Borno SUBEB') ? 'border-b-2 border-green-600' : '' }} py-1 hover:text-green-600 text-white dropdown relative hover:border-b-2 hover:border-green-600">
                                <a class="flex" href="{{ route('besda') }}">
                                    BESDA
                                </a>
                                <ul class="dropdown-menu min-w-max absolute w-full bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="dropdownMenuButton2">
                                    <li>
                                        <a href="/besda#resultAreaOne" class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100">
                                            Result Area One
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/besda#resultAreaTwo" class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100">
                                            Result Area Two
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/besda#resultAreaThree" class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100">
                                            Result Area Three
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mx-1 {{ ($page_title == 'UNICEF - Borno SUBEB') ? 'border-b-2 border-green-600' : '' }} py-1 hover:text-green-600 text-white dropdown relative hover:border-b-2 hover:border-green-600">
                                <a href="{{ route('unicef') }}" class="flex">
                                    UNICEF
                                </a>
                            </li>
                            <li class="mx-1 {{ ($page_title == 'Contact Us - Borno SUBEB') ? 'border-b-2 border-green-600' : '' }} py-1 hover:text-green-600 text-white hover:border-b-2 hover:border-green-600">
                                <a href="{{ route('contact-us') }}" class="flex">
                                    Contact Us
                                </a>
                            </li>
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
        </div>
        <!-- Mobile Nav -->
        <div id="navMobile" class="w-full fixed h-screen z-20 hidden py-8 bg-white">
            <div class="list-none p-2 text-sm border-t bg-white pt-20">
                <li class="py-3 px-8">
                    <a href="{{ route('front') }}" class="flex justify-between items-center">
                        <span>Home</span>
                        &nbsp;&nbsp;
                        <span><i class="fa-solid fa-house text-2xl"></i></span>
                    </a>
                </li>
                <hr>
                <li class="py-3 px-8">
                    <a href="{{ route('about-us') }}" class="flex justify-between items-center">
                        <span>About Us</span>
                        &nbsp;&nbsp;
                        <span><i class="fa-solid fa-users text-2xl"></i></span>
                    </a>
                </li>
                <hr>
                <li class="py-3 px-8">
                    <a href="{{ route('departments') }}" class="flex justify-between items-center">
                        <span>Departments</span>
                        &nbsp;&nbsp;
                        <span><i class="fa-solid fa-users text-2xl"></i></span>
                    </a>
                </li>
                <hr>
                <li class="py-3 px-8">
                    <a href="#" class="flex justify-between items-center">
                        <span>Reports</span>
                        &nbsp;&nbsp;
                        <span><i class="fa-solid fa-users text-2xl"></i></span>
                    </a>
                </li>
                <hr>
                <li class="py-3 px-8">
                    <a href="{{ route('besda') }}" class="flex justify-between items-center">
                        <span>BESDA</span>
                        &nbsp;&nbsp;
                        <span><i class="fa-solid fa-users text-2xl"></i></span>
                    </a>
                </li>
                <hr>
                <li class="py-3 px-8">
                    <a href="{{ route('unicef') }}" class="flex justify-between items-center">
                        <span>UNICEF</span>
                        &nbsp;&nbsp;
                        <span><i class="fa-solid fa-users text-2xl"></i></span>
                    </a>
                </li>
                <hr>
                <li class="py-3 px-8">
                    <a href="{{ route('contact-us') }}" class="flex justify-between items-center">
                        <span>Contact Us</span>
                        &nbsp;&nbsp;
                        <span><i class="fa-solid fa-headset text-2xl"></i></span>
                    </a>
                </li>
            </div>
        </div>
        <!-- End of Navigation  -->
        
        <!-- Body Content  -->
        <div>
            @yield('body-content')
        </div>
        <!-- End of Body Content  -->

        <!-- Footer  -->
        <div class="relative top-12">
            <div id="footer" class="bg-gray-100 py-12 px-8 lg:px-24 lg:grid grid-cols-4 gap-8 text-gray-900">
                <div class="col-span-2 mb-3 lg:flex lg:pt-12">
                    <div class="pt-5">
                        <img class="w-24 lg:w-48" src="{{ asset('images/logo.png') }}" alt="Borno SUBEB Logo">
                    </div>
                    <div class="lg:ml-4">
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
                        <h1 class="text-2xl font-bold mb-4 text-green-700">Navigations</h1>
                        <nav class="list-none text-gray-900">
                            <li class="py-1">
                                <a href="{{ route('front') }}" class="hover:text-gray-800 flex items-center py-1">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="py-1 hover:text-gray-800">
                                <a href="{{ route('about-us') }}" class="hover:text-gray-800 flex items-center py-1">
                                    <span>About Us</span>
                                </a>
                            </li>
                            <li class="py-1 hover:text-gray-800">
                                <a href="{{ route('departments') }}" class="hover:text-gray-800 flex items-center py-1">
                                    <span>Departments</span>
                                </a>
                            </li>
                            <li class="py-1 hover:text-gray-800">
                                <a class="flex items-center py-1">
                                    <span>Reports</span>
                                </a>
                            </li>
                            <li class="py-1 hover:text-gray-800">
                                <a href="{{ route('besda') }}" class="flex items-center py-1">
                                    <span>BESDA</span>
                                </a>
                            </li>
                            <li class="py-1 hover:text-gray-800">
                                <a href="{{ route('unicef') }}" class="flex items-center py-1">
                                    <span>UNICEF</span>
                                </a>
                            </li>
                            <li class="py-1 hover:text-gray-800">
                                <a href="{{ route('contact-us') }}" class="flex items-center py-1">
                                    <span>Contact Us</span>
                                </a>
                            </li>
                        </nav>
                    </div>
                </div>
                <div class="col-span-1">    
                    <div>
                        <h1 class="text-2xl font-bold mb-4 text-green-700">Contact Us</h1>
                        <div class="my-2">
                            P.M.B 1233, No 1 Jos Road Maiduguri Borno State 
                        </div>
                        <div class="my-2">
                            info@bosubeb.ng
                        </div>
                        <nav class="list-none text-gray-900 flex">
                            <li class="py-1 hover:text-gray-800">
                                <a class="flex items-center py-1">
                                    <span><i class="fa-brands fa-facebook text-xl bg-white py-2 px-3 rounded-full text-green-700"></i></span> &nbsp;&nbsp;
                                </a>
                            </li>
                            <li class="py-1 hover:text-gray-800">
                                <a class="flex items-center py-1">
                                    <span><i class="fa-brands fa-twitter text-xl bg-white py-2 px-3 rounded-full text-green-700"></i></span> &nbsp;&nbsp;
                                </a>
                            </li>
                            <li class="py-1 hover:text-gray-800">
                                <a class="flex items-center py-1">
                                    <span><i class="fa-brands fa-linkedin text-xl bg-white py-2 px-3 rounded-full text-green-700"></i></span> &nbsp;&nbsp;
                                </a>
                            </li>
                            <li class="py-1 hover:text-gray-800">
                                <a class="flex items-center py-1">
                                    <span><i class="fa-brands fa-instagram text-xl bg-white py-2 px-3 rounded-full text-green-700"></i></span> &nbsp;&nbsp;
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

        <!-- Script  -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        @vite('resources/js/app.js')
        <script src="{{ asset('build/assets/app-9c47871d.js') }}"></script>    
        <script src="{{ asset('js/front.js') }}"></script>
    </body>
</html>
