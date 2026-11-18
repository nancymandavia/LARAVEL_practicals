@extends('layout')

@section('title', 'Home')

@section('content')
<h1>Home Page</h1>
<div class="welcome">
    <h2>Welcome to My Website!</h2>
    <p>This is the Home page of our Laravel application.</p>
</div>
<p>We have created multiple routes in the <strong>web.php</strong> file and connected each route to its own Blade view.</p>
<a class="button" href="{{ route('about') }}">Explore About Page</a>
@endsection
