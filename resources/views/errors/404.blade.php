@extends('index')

@section("content")
<main class="bg-gray-400 text-dark d-flex flex-column justify-content-center align-items-center min-height-100vh gap-row-10">
    <h1 class="text-center h1">404 Error Happend!</h1>
    <p class="text-center">This page is not found</p>
    <a href="{{route('home')}}" class="h4 btn btn-danger mt-3">Go Home</a>
</main>
@endsection
