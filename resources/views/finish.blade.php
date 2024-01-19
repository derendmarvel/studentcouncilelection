@extends('layout.template')

@section('title', 'Voting Complete')

@section('content')
    <div class = "px-5" data-aos="fade-up" data-aos-duration="2000">
        <h1 class = "heading-2 text-white fw-bold px-5"> THANK YOU FOR YOUR VOTE </h1>
        <div>
            <a href="{{ route('logout') }}" class="btn btn-success w-50 py-3 rounded-3 shadow fw-bold" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"> FINISH </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
@endsection