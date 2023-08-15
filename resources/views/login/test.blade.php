@extends('layouts.login')

@section('container')
    <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">logout</button>
    </form>
@endsection
