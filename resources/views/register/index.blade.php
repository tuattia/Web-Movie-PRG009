@extends('layouts.login')

@section('container')
    <div class="col-md-6 mt-5">
        <form action="/register" method="POST" class="text-light mt-4">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name')
                    is-invalid
                @enderror" id="name" name="name" autofocus value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control @error('username')
                    is-invalid
                @enderror" id="username" name="username" value="{{ old('username') }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control @error('email')
                    is-invalid
                @enderror" id="email" aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password')
                    is-invalid
                @enderror" id="password" name="password">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <div class="mb-3">
                <label for="repeatPass" class="form-label">Repeat Password</label>
                <input type="password" class="form-control @error('repeatPass')
                    is-invalid
                @enderror" id="repeatPass" name="repeatPass">
                @error('repeatPass')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <button type="submit" class="btn btn-primary w-100 fw-bold fs-5">LOGIN</button>
        </form>
        <small class="d-block mt-2 text-light">Already Registred? <a href="/start">Login</a></small>
    </div>
@endsection
