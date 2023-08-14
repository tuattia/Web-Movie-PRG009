@extends('layouts.login')

@section('container')
<div class="col-md-6 pt-5 section1">
    <h1 style="font-family:Moul"><span class="text-purple">mov</span>ie+</h1>
    <div class="d-grid gap-3 pt-5">
      <a href="/LoginForm" class="btn btn-light">SIGN IN</a>
      <a href="" class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16"> <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/></svg> CONTINUE WITH GOOGLE</a>
    </div>
    <p class="tagline">Watch your favourite movie or series on only one platform. You can watch it anytime and anywhere</p>
</div>
@endsection
