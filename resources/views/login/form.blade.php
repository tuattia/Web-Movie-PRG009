@extends('layouts.login')

@section('container')
<div class="col-md-6 mt-5">
    <form class="text-light mt-4">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary w-100 fw-bold fs-5">LOGIN</button>
    </form>
    <small><a href="/start"class="d-block mt-2 fs-6">Back to login!</a></small>
</div>
@endsection
