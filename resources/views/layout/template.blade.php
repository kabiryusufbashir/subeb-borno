<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico')}}"/>
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>@yield('page-title')</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <!-- Contact Info  -->
        <div class="flex justify-between text-white py-3 border-b lg:px-48 px-8 items-center bg-green-700">
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
    </body>
</html>
