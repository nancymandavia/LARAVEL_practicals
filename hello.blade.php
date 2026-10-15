@extends('layout')

@section('title', 'Hello')

@section('content')
<div class="card">
    <h2>Hello, {{ $name }}!</h2>
    <p>The name comes from the wildcard in <code>/hello/{name}</code>.</p>
</div>
@endsection
