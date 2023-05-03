@extends('layout.template')

@section('page-title')
    BESDA - Borno SUBEB  
@endsection

@section('body-content')
    <!-- Banner -->
    <div id="banner-img">
        <div class="mySlides">
            <div id="besdaBornoSubeb">
                <div class="firstCaptionContent text-center">
                    Borno State Universal Basic Education Board <br> Better Education Service Delivery For All (BESDA)
                </div>
            </div>
        </div>
    </div>
    <!-- Body Contents  -->
    <div id="body-content" class="pt-8 pb-5 text-justify">
        <div class="lg:mx-24 mx-8 p-8 mb-12 bg-gray-100 shadow rounded-lg">
            <div class="text-xl  lg:text-3xl font-semibold py-4 text-green-700">
                About Better Education Service Delivery For All (BESDA)
            </div>
            <div class="py-3">
                <p class="py-2">
                    Education is avowed a veritable instrument for societal transformation and mental emancipation.
                </p>
                <p class="py-2">
                    It is the bedrock of human civilisation and development. Prior to the introduction of BESDA in 2019, according to the National Population Commission projected data of 2006, Borno State is among the States grappling with the scourge of Out-of-School Children numbering <b>1,229,425</b>. Similarly, the 2015 data provided by the UNICEF indicates that Nigeria has <b>10,239,425</b> Out-of-School Children and Borno State has the highest number of <b>1.2 million</b>
                </p>
                <p class="py-2">
                    Apart from the apathy of people towards western education, the Boko Haram insurgency further exacerbated the problem of Out-of-School and drop-outs. However, with the inception of BESDA in June 2019, Borno State has remarkably reduced the number of Out-of-School Children in both formal and non-formal components of education.
                </p>
                <p class="py-2">
                    Through BESDA interventions, a good number of children in Borno State in both formal and non-formal sectors have benefited tremendously from Intensive Literacy Programme (ILP) and numeracy. The BESDA programme is anchored on P for R (Programme for Result) and its activities are tailored on three result areas, namely, RA1, RA2 & RA3 which also be laboured on Disbursement Link Indicators (DLIs).
                </p>
                <p class="py-2">
                    <div>
                        <img class="lg:w-64 w-32 mx-auto rounded-full my-4" src="{{ asset('images/image-5.jpg') }}" alt="Dr. Shettima Bukar Kullima">
                    </div>
                    <div class="text-center text-lg py-1 font-semibold">
                        BESDA Project Coordinator 
                    </div>
                    <div class="text-center text-xs py-1">
                        Dr. Shettima Bukar Kullima
                    </div>
                </p>
            </div>
        </div>
    </div>
@endsection