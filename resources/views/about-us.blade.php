@extends('layout.template')

@section('page-title')
    About Us - Borno SUBEB  
@endsection

@section('body-content')
    <!-- Body Contents  -->
    <div id="body-content" class="pt-8 pb-5 text-justify">
        <!-- Title  -->
        <div class="bg-white py-8">
            <!-- Slogan  -->
            <div class="text-center text-2xl lg:text-5xl font-semibold py-4 mb-5 mt-20">
                About Borno <br> State Universal Basic Education Board
            </div>
        </div>
        <!-- About Us  -->
        <div class="lg:px-24 px-8 mx-auto py-8 mb-12 bg-gray-100">
            <div class="my-auto">
                <div class="py-3">
                    <p>
                        The Nigerian federal government introduced the Universal Basic Education (UBE) programme in 1999. Since the programme began, there have been some improvements to Nigeria’s education structure; however, this has been marginal, and the scheme has been plagued with problems including inadequate funding and poor planning. The scheme was introduced with the aim of providing free, universal and basic education for every Nigerian child between the ages of 6 and 15.
                    </p>
                    <p class="my-2">
                        The Universal Basic Education Commission was established by UBEC Act 2004 by the then Head of State, and former President Olusegun Obasanjo inaugurated the Commission in Sokoto State to serve as a regulatory body that would cater for the problems, challenges and prospects of the Basic Education of the Nigerian child.
                    </p>
                    <p class="my-2">
                        In consonance with this, the Borno State Universal Basic Education Board was established pursuant to the Borno State Compulsory Free Universal Basic Education Law 2005.
                    </p>
                </div>
            </div>
        </div>
        <!-- Principal Officers  -->
        <div class="bg-white mt-4 py-8">
            <div class="text-center text-2xl lg:text-4xl font-semibold py-4 mb-5">Principal Officers</div>
            <div class="lg:px-24 px-8 mx-auto pb-8 items-center">
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full my-4" src="{{ asset('images/image-1.jpg') }}" alt="Prof. Bulama Kagu Photo">
                    <div class="text-lg py-1 font-semibold">Prof. Bulama Kagu </div>
                    <div class="text-xs py-1">Executive Chairman</div>
                </div>
            </div>
            <div class="lg:px-24 px-8 mx-auto pb-8 lg:grid grid-cols-2 gap-6 items-center my-6">
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full my-4" src="{{ asset('images/logo.jpg') }}" alt="Barr. Fannami Ali  Photo">
                    <div class="text-lg py-1 font-semibold">Barr. Fannami Ali</div>
                    <div class="text-xs py-1">Permanent Secretary</div>
                </div>
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full my-4" src="{{ asset('images/logo.jpg') }}" alt="Abubakar Deribe Photo">
                    <div class="text-lg py-1 font-semibold">Abubakar Deribe</div>
                    <div class="text-xs py-1">Member I</div>
                </div>
            </div>
            <div class="lg:px-24 px-8 mx-auto pb-8 lg:grid grid-cols-2 gap-6 items-center my-6">
                <div class="text-center justify-center">
                    <img class="w-64 mx-auto rounded-full my-4" src="{{ asset('images/logo.jpg') }}" alt="Sadiq Abdullah Photo">
                    <div class="text-lg py-1 font-semibold">Sadiq Abdullah</div>
                    <div class="text-xs py-1">Member II</div>
                </div>
                <div class="text-center justify-center">
                    <img class="w-64 mx-auto rounded-full my-4" src="{{ asset('images/logo.jpg') }}" alt="Hon. Habu Daja Photo">
                    <div class="text-lg py-1 font-semibold">Hon. Habu Daja</div>
                    <div class="text-xs py-1">Member III</div>
                </div>
            </div>
            <div class="lg:px-24 px-8 mx-auto pb-8 lg:grid grid-cols-2 gap-6 items-center my-6">
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full my-4" src="{{ asset('images/logo.jpg') }}" alt="Comrade Ali Grema Photo">
                    <div class="text-lg py-1 font-semibold">Comrade Ali Grema </div>
                    <div class="text-xs py-1">Director Admin and Supply</div>
                </div>
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full my-4" src="{{ asset('images/image-4.jpg') }}" alt="Babagana Goni Ali Photo">
                    <div class="text-lg py-1 font-semibold">Babagana Goni Ali</div>
                    <div class="text-xs py-1">Director Planning, Research and Statistic</div>
                </div>
            </div>
            <div class="lg:px-24 px-8 mx-auto pb-8 lg:grid grid-cols-2 gap-6 items-center my-6">
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full my-4" src="{{ asset('images/image-3.jpg') }}" alt="Lawan Bura Photo">
                    <div class="text-lg py-1 font-semibold">Lawan Bura</div>
                    <div class="text-xs py-1">Director Finance and Account</div>
                </div>
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full my-4" src="{{ asset('images/logo.jpg') }}" alt="Baba Gana Zanna Photo">
                    <div class="text-lg py-1 font-semibold">Baba Gana Zanna</div>
                    <div class="text-xs py-1">Director School Services</div>
                </div>
            </div>
            <div class="lg:px-24 px-8 mx-auto pb-8 lg:grid grid-cols-2 gap-6 items-center my-6">
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full my-4" src="{{ asset('images/logo.jpg') }}" alt="Zanna Bukar Photo">
                    <div class="text-lg py-1 font-semibold">Zanna Bukar</div>
                    <div class="text-xs py-1">Director Quality Assurance</div>
                </div>
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full my-4" src="{{ asset('images/image-2.jpg') }}" alt="Mallam Bukar Kolo Photo">
                    <div class="text-lg py-1 font-semibold">Mallam Bukar Kolo</div>
                    <div class="text-xs py-1">Director Social Mobilization</div>
                </div>
            </div>
        </div>
    </div>
@endsection