@extends('layout.template')

@section('title', "Sign In")

@section('content')
    <div class="card w-100 h-100 px-5 py-3 rounded-4" data-aos="fade-up" data-aos-duration="2000">
        <div class="card-body">
            <h1 class = "heading-2 fw-bold"> SIGN IN </h1>
                <form method="POST" action="/registration">
                @method('post')
                @csrf
                <div class="row mb-3">
                    <label for="email" class = "my-2">{{ __('UC Email Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  name="email" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong> {{ $message }} </strong>
                    </span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="nim" class="my-2">{{ __('NIM') }}</label>
                    <input id="nim" type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" required>

                    @error('nim')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row mb-3 mt-4">
                    <button type="submit" class="btn btn-danger orange-div fw-bold">
                        {{ __('SIGN IN') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
