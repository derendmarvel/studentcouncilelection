@extends('layout.template')

@section('title', 'Student Council Election')

@section('content')
    <div class = "row">
        <h1 class = "heading fw-bold text-white mb-5"> VOTE YOUR PRESIDENT </h1>
        <div class = "col-6 ps-5"> 
            <div class="card rounded-5 ms-5 w-75">
                <div class = "gradient rounded-5 m-4">
                    <img src="/images/Duo 1.png" class="exceed-image w-100" alt="Calon 1">
                </div>
                <div>
                    <h4 class="fw-bold orange-text"> IDA BAGUS RADHITA</h5>
                    <p class="card-text fw-semibold"> & Nathan Darrell</p>
                    <a href="#" class="btn orange-div w-50 rounded-5"> VOTE NOW </a>
                </div>
            </div>
        </div>
        <div class = "col-6 pe-5"> 
            <div class="card rounded-5 me-5 w-75">
                <div class = "gradient rounded-5 m-4">
                    <img src="/images/Duo 2.png" class="exceed-image w-100" alt="Calon 1">
                </div>
                <div class="card-body">
                    <h4 class="card-title fw-bold"> Michael David Sin </h5>
                    <p class="card-text fw-semibold"> & Richie Reuben </p>
                    <a href="#" class="btn orange-div w-100 rounded-5"> VOTE NOW </a>
                </div>
            </div>
        </div>
    </div>
@endsection