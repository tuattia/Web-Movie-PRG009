@extends('layouts.login')

@section('container')
    @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form action="/login" method="POST" class="text-light mt-4">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <input type="email" class="form-control @error('email')
                is-invalid
            @enderror" id="email" aria-describedby="emailHelp" name="email" autofocus value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control @error('password')
                is-invalid
            @enderror" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary w-100 fw-bold fs-5">LOGIN</button>
    </form>
    <small class="d-block mt-2"><a href="/start">Back to login!</a></small>
</div>
@endsection
