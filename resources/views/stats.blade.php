@extends('layout.template')

@section('title', 'Voting Results')

@section('content')
    <div class = "row start-div px-2">
        <div class = "col-5 ontop" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="500">
            <img src="/images/Candidate Background.png" alt="Background" class = "w-100" height = "570px">
            <div>
                <img src="/images/Candidates 1.png" class="exceed-image-3" alt="Calon">
            </div>
        </div>
        <!-- <div class = "col-2 h-100">
            <div class="progress h-25 percentage-1" style = "width:400px" role="progressbar" aria-label="Success example" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="500">
                <div class="progress-bar bg-success text-white fw-bold fs-1" style="width: 53%"> 53%</div>
            </div>
        </div>  -->
        <div class = "col-2 h-100">
            <h1 class = "heading center-div fw-bold text-white text-center mt-3" data-aos="fade-up" data-aos-duration="2000"> VOTING RESULTS </h1>
            <div class = "p-container">
                <div class = "p-bar text-center">
                    <p class="p-text text-white fw-bold fs-1 my-0 py-0"> 53% </p>
                    <p class="p-text text-white my-0 py-0"> 1,320 votes </p>
                </div>
            </div>
            <div class = "p-container-2">
                <div class = "p-bar-2 text-center">
                    <p class="p-text text-white fw-bold fs-1 my-0 py-0"> 47% </p>
                    <p class="p-text text-white my-0 py-0"> 1,049 votes </p>
                </div>
            </div>
        </div>

        <div class = "col-5" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="500">
            <img src="/images/Candidate Background.png" alt="Background" class = "w-100" height = "570px">
            <div>
                <img src="/images/Candidates 2.png" class="exceed-image-3" alt="Calon">
            </div>
        </div>
    </div>
@endsection