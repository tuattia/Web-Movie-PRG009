@extends('layouts.login')

<div class="col-md-6 mt-5">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>

@section('container')
    <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">logout</button>
    </form>
@endsection
