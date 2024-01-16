@extends('layout.template')

@section('title', 'Student Council Election')

@section('content')
    <div class = "row">
        <h1 class = "heading fw-bold text-white"> VOTE YOUR PRESIDENT </h1>
        <div class = "col-6 px-5"> 
            <div class="card" style="w-25">
            <img src="/images/Calon 1.png" class="card-img-top" alt="Calon 1">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class = "col-6 px-5"> 
            <div class="card" style="w-25">
            <img src="/images/Calon 1.png" class="card-img-top" alt="Calon 1">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                        <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
@endsection