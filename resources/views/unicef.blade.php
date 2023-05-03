@extends('layout.template')

@section('page-title')
    UNICEF - Borno SUBEB  
@endsection

@section('body-content')
    <!-- Banner -->
    <div id="banner-img">
        <div class="mySlides">
            <div id="unicefBornoSubeb">
                <div class="firstCaptionContent text-center">
                    Borno State Universal Basic Education Board <br> United Nations International Children's Emergency Fund (UNICEF)
                </div>
            </div>
        </div>
    </div>
    <!-- Body Contents  -->
    <div id="body-content" class="pt-8 pb-5 text-justify">
        <div class="lg:mx-24 mx-8 p-8 mb-12 shadow rounded-lg">
            <div class="text-xl text-center lg:text-3xl font-semibold py-4 text-green-700">
                About United Nations International Children's Emergency Fund (UNICEF)
            </div>
            <div class="py-3">
                <p class="py-2">
                    <div>
                        <img class="lg:w-64 w-32 mx-auto rounded-full my-4" src="{{ asset('images/image-6.jpg') }}" alt="Alhaji Suleiman Abba">
                    </div>
                    <div class="text-center text-lg py-1 font-semibold">
                        SUBEB UNICEF Focal Person  
                    </div>
                    <div class="text-center text-xs py-1">
                        Alhaji Suleiman Abba
                    </div>
                </p>
                <p class="py-2">
                    United Nations Children's Fund (UNICEF) ensures that every child attain quality education in safe and secure environment for lifelong learning. <b>"Every child has the right to education"</b>
                </p>
                <p class="py-2">
                    Key Programmes:
                    <ol class="list-decimal ml-12">
                        <li>Early childhood</li>
                        <li>Primary and Junior education</li>		
                        <li>Girls Education</li>			
                        <li>Education in Emergencies</li>		
                        <li>Inclusive education</li>		
                        <li>Digital learning</li>
                        <li>Strengthening education system</li>
                        <li>Construction/ Renovation of classrooms</li>
                        <li>Training of teachers</li>
                        <li>Support on instructional materials</li>
                        <li>Encourage Community participation (SBMCs)</li>
                        <li>Support to Non- formal Education</li>
                        <li>Skill development for adolescence</li>
                    </ol>
                </p>
                <p class="py-2">
                    A child's right to education entails the right to learn. Yet, for too many children across the globe, schooling does not lead to learning.
                </p>
                <p class="py-2">
                    Over 600 million children and adolescents worldwide are unable to attain minimum proficiency levels in reading and mathematics, even though two thirds of them are in school. For out-of-school children, foundational skills in literacy and numeracy are further from grasp.
                </p>
                <p class="py-2">
                    This learning crisis - the rift between the levels of learning children receive and those their communities and entire economies need - hit a global scale even before the COVID-19 pandemic brought education systems to a halt.
                </p>
                <p class="py-2">
                    Around the world, children are deprived of education and learning for various reasons. Poverty remains one of the most obstinate barriers. Children living through economic fragility, political instability, conflict or natural disaster are more likely to be cut off from schooling - as are those with disabilities, or from ethnic minorities. In some countries, education opportunities for girls remain severely limited.
                </p>
                <p class="py-2">
                    Even in schools, a lack of trained teachers, inadequate education materials and poor infrastructure make learning difficult for many students. Others come to class too hungry, ill or exhausted from work or household tasks to benefit from their lessons.
                </p>
                <p class="py-2">
                    Compounding these inequities is a digital divide of growing concern: Some two thirds of the world's school-aged children do not have internet connection in their homes, restricting their opportunities to further their learning and skills development.
                </p>
                <p class="py-2">
                    Without quality education, children face considerable barriers to employment and earning potential later in life. They are more likely to suffer adverse health outcomes and less likely to participate in decisions that affect them - threatening their ability to shape a better future for themselves and their societies.
                </p>
            </div>
        </div>
    </div>
@endsection