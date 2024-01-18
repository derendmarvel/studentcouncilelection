@extends('layout.template')

@section('title', 'Student Council Election')

@section('content')
    <div class = "row padding-main pb-4">
        <h1 class = "heading fw-bold text-white no-gap" data-aos="fade-up" data-aos-duration="2000"> VOTE YOUR PRESIDENT & VICE PRESIDENT </h1>
        <h4 class = "fw-medium text-white mb-4" data-aos="fade-up" data-aos-duration="2000"> for Student Council 2024/2025 </h4>
        
            <div class = "col-5 center-div mt-3" data-aos="fade-right" data-aos-duration="2500" data-aos-delay="500"> 
                <a href = "/details" class = "link-underline link-underline-opacity-0"> 
                    <div class="rounded-5 ms-5" style="width:450px">
                        <div class = "gradient rounded-5 m-4">
                            <img src="/images/Candidates 1 Resize.png" class="exceed-image-2" alt="Calon 1">
                        </div>
                        <div class = "ontop-image px-3">
                            <h4 class="fw-bold text-white text-shadow"> Ida Bagus Radhita & Nathan </h4>
                            <a href="/details" class="btn btn-danger orange-div w-50 rounded-5 fw-bold"> VOTE NOW </a>
                        </div>
                    </div>
                </a>
            </div>

            <div class = "col-2 center-div mx-0" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="500"> 
                <h1 class = "heading fw-bold text-white"> OR </h1>
            </div>
        
            <div class = "col-5 center-div mt-3" data-aos="fade-left" data-aos-duration="2500" data-aos-delay="1000"> 
                <a href = "/stats" class = "link-underline link-underline-opacity-0"> 
                <div class="rounded-5 me-5" style="width:450px">
                    <div class = "gradient rounded-5 m-4">
                        <img src="/images/Candidates 2 Resize.png" class="exceed-image-2" alt="Calon 2">
                    </div>
                    <div class = "ontop-image px-3">
                        <h4 class="fw-bold text-white text-shadow"> Michael David Sin & Richie </h4>
                        <a href="login" class="btn btn-danger orange-div w-50 rounded-5 fw-bold"> VOTE NOW </a>
                    </div>
                </div>
                </a>
            </div>
    </div>
@endsection