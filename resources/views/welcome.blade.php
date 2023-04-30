@extends('layout.template')

@section('page-title')
    Home - Borno SUBEB  
@endsection

@section('body-content')
    <!-- Banner -->
    <div id="banner-img">
        @include('layout.banner')
    </div>
    <!-- Body Contents  -->
    <div id="body-content" class="pb-5 text-justify">
        <!-- Title  -->
        <div class="bg-white py-8">
            <!-- Logo  -->
            <div>
                <img src="{{ asset('images/logo.png') }}" class="mx-auto w-32"> 
            </div>
            <!-- Slogan  -->
            <div class="text-center text-4xl py-8 text-green-700">
                Borno State Universal Basic Education Board
            </div>
        </div>
        <!-- Our Value  -->
        <div class="lg:px-24 px-8 mx-auto py-8 mb-12 lg:grid grid-cols-2 gap-6 bg-gray-100">
            <div class="my-auto">
                <div class="text-xl lg:text-2xl py-3 font-semibold text-green-700">Quality Education</div>
                <div class="py-3">
                    <p>
                        Quality education is the cornerstone of a thriving society, and it plays a pivotal role in shaping the future of individuals and communities. Borno State Universal Basic Education Board is built on the principles of equity, inclusivity, and excellence.
                    </p>
                    <p class="my-2">
                     Borno State Universal Basic Education Board strives to provide equal opportunities to all learners, regardless of their background, by addressing disparities in access to resources, facilities, and teaching expertise. This was achieved through targeted interventions, such as scholarships, remedial programs, and teacher training initiatives.
                    </p>
                </div>
            </div>
            <div>
                <img src="{{ asset('images/quality-education.jpg') }}" alt="Quality Education">
            </div>
        </div>
        <div class="lg:px-24 px-8 mx-auto py-8 lg:grid grid-cols-2 gap-6">
            <div>
                <img src="{{ asset('images/competent-teachers.jpg') }}" alt="Competent Teachers">
            </div>
            <div class="my-auto">
                <div class="text-xl lg:text-2xl py-3 font-semibold text-green-700">Competent and Committed Teachers</div>
                <div class="py-3">
                    <p>
                        Competent and committed teachers are the backbone of a successful education system. These educators possess a combination of knowledge, skills, and dedication that greatly impact students' learning outcomes and overall development.
                    </p>
                    <p class="my-2">
                        Our teachers go beyond their roles as instructors; they genuinely care about their students' well-being and growth. They create a nurturing and inclusive classroom environment where every student feels valued and supported. 
                    </p>
                    <p class="my-2">
                        Our teachers take the time to understand each student's unique strengths, challenges, and learning styles. They offer individualized attention, guidance, and encouragement to help students overcome obstacles and reach their full potential.
                    </p>
                </div>
            </div>
        </div>
        
    </div>
@endsection