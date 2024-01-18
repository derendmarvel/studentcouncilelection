@extends('layout.template')

@section('title', 'Candidate Profile')

@section('content')
    <div class = "row start-div px-2">
        <div class = "col-5" data-aos="fade-up" data-aos-duration="2000">
            <img src="/images/Candidate Background.png" alt="Background" class = "w-100" height = "570px">
            <div>
                <img src="/images/Candidates 1.png" class="exceed-image-3" alt="Calon">
            </div>
        </div>
        <div class = "col-7 mt-5 px-4" data-aos="fade-up" data-aos-duration="2000">
            <h1 class = "heading-2 fw-bold text-white mb-4" > RADHITA & NATHAN </h1>
            <h4 class = "fw-medium text-white mb-4"> Presidential Candidates Number 1 </h4>
            <p class = "text-white my-4"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus eum illo a quisquam neque quae at unde expedita ratione fugit nostrum, reprehenderit quos molestiae accusantium placeat magni nesciunt tempore repellendus! </p>
            <div class="card w-100 shadow rounded-4 p-1 mt-3 mb-4">
                <div class="card-body">
                    <div class = "d-flex align-items-center">
                        <img src="/images/Vision.png" alt="Vision Icon" style = "width:40px;height:40px">
                        <h3 class="fw-semibold card-title orange-text ps-2 pt-2"> Vision & Mission </h3>
                    </div>
                        <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
                <a href="finish" class="btn btn-success green-div w-100 py-3 rounded-3 fw-bold"> VOTE </a>
            </div>
    </div>

@endsection